<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class   OrderController extends Controller
{
    public function index(){
        if (Auth::user()->user_role==0) {
            $orders = Order::where('order_status1', 'Awaiting Confirmation')->orWhere('order_status1', 'Order on the Way')->get()->unique('user_id');
            return view('admin.order', [
                'orders' => $orders
            ]);
        }
        else{
            return redirect('Login');
        }
    }
    public function getOrderDetails(Request $request){
        $checks = Order::where('user_id',$request->order)->where('order_status1','Awaiting Confirmation')->orWhere('order_status1','Order on the Way')->get();
        $totalSum=0;
        foreach ($checks as $check){

            $sum = $check->product->product_price;
            $quant = $check->order_quantity;

            $total = $sum * $quant;
            $totalSum += $total;
        }
        if ($request->ajax()){
            $output="";
            $orders = Order::where('user_id',$request->order)->where('order_status1','Awaiting Confirmation')->orWhere('order_status1','Order on the Way')->get();
        }
        foreach ($orders as $order) {
            $output .= '
                    <input type="hidden" value="'.$order->user_id.'" name="userId">
                        <input type="hidden" value="'.$order->order_status1.'" name="orderStatus">

                            <tr>
                                <td>'.$order->id.'</td>
                                <td><img src="uploads/product/'.$order->product->product_image.'"></td>
                                <td>'.$order->product->product_name.'</td>
                                <td>Ksh:'.$order->product->product_price.'</td>
                                <td>'.$order->order_quantity.'</td>
                                <td>Ksh:'.$order->order_quantity*$order->product->product_price.'</td>
                                                            <td>'.$totalSum.'</td>

                            </tr>




';
        }
        return response($output);
    }

    public function confirm(Request $request)
    {
        if ($request->orderStatus == 'Awaiting Confirmation'){
            $deleteOrder = Order::where('user_id', $request->userId)->where('order_status1', 'Awaiting Confirmation')->update(['order_status1' => ('Order on the Way')]);
        return redirect()->back()->with('success', 'Order Confirmed Successfully');
        }
        else {
            $deleteOrder = Order::where('user_id', $request->userId)->where('order_status1', 'Order on the Way')->update(['order_status1' => ('Delivered')]);
            return redirect()->back()->with('success', 'Order Delivered Successfully');
        }

    }
    public function orderDetails($id){
        $orders = Order::where('user_id',$id)->get();
        return view('admin.orderDetails',[
            'orders'=>$orders
        ]);
    }
}
