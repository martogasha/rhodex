@include('cPartials.header')
<title>Icons Computer - Checkout</title>

<div class="left_banner left-sidebar-widget mb_50 mt_30"> <a href="#"><img src="images/left1.jpg" alt="Left Banner" class="img-responsive" /></a> </div>
            </div>
            <div class="col-sm-8 col-md-8 col-lg-9 mtb_30">
                <!-- =====  BANNER STRAT  ===== -->
                <div class="breadcrumb ptb_20">
                    <h1>Checkout</h1>
                    <ul >
                        <li><a href="index-2.html">Home</a></li>
                        <li class="active">Checkout</li>
                    </ul>
                </div>
                @include('flash-message')
                <!-- =====  BREADCRUMB END===== -->
                <form action="{{url('placeOrder')}}" method="post" id="placeOrderForm">
                    @csrf
                    @if(\Illuminate\Support\Facades\Auth::check())
                    <input type="hidden" value="{{$user->id}}" name="userId">
                    @endif
                <div class="panel-group mt_20" id="accordion">
                    <div class="panel panel-default  ">
                        @if(\Illuminate\Support\Facades\Auth::check())

                        <div class="panel-heading">
                            <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Step 1: Customer Details <i class="fa fa-caret-down"></i></a></h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h3>Customer Details</h3>
                                        <br>
                                        <div class="form-group">
                                            <label for="input-email" class="control-label">Name</label>
                                            <input type="text" class="form-control" id="input-email" placeholder="Name" value="{{$user->user_name}}" name="name" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="input-email" class="control-label">E-Mail</label>
                                            <input type="text" class="form-control" id="input-email" placeholder="E-Mail" value="{{$user->user_email}}" name="email"required>
                                        </div>
                                        <div class="form-group">

                                            <div class="phone-list">

                                                <div class="input-group phone-input">
						                        <span class="input-group-btn">
							                    <button type="button" class="btn btn-default dropdown-toggle" aria-expanded="false"><span class="type-text">+254</span></button>
						                        </span>
                                                    <input type="text" name="phone" class="form-control" value="{{$user->user_phone}}" placeholder="712345678" />
                                                </div>


                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <label for="input-email" class="control-label">Location</label>
                                            <input type="text" class="form-control" id="input-email" placeholder="Location" value="{{$user->user_location}}" name="location" required>
                                        </div>

                                </div>
                            </div>
                        </div>
                    </div>
                        @endif
                        <div class="panel panel-default ">
                            <div class="panel-heading">
                                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapsesix">Step 6: Confirm Order <i class="fa fa-caret-down"></i></a> </h4>
                            </div>
                            <div id="collapsesix" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <th class="text-left">Image</th>
                                                <td class="text-left">Product Name</td>
                                                <td class="text-right">Quantity</td>
                                                <td class="text-right">Unit Price</td>
                                                <td class="text-right">Total</td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if(isset($products))
                                            @foreach($products as $product)
                                            <tr>
                                                <td><img src="{{asset('uploads/product/'.$product['item']['product_image'])}}" style="width: 50px;height: 50px"></td>
                                                <td class="text-left">{{$product['item']['product_name']}}</td>
                                                <td class="text-right">{{$product['quantity']}}</td>
                                                <td class="text-right">Ksh:{{$product['item']['product_price']}}</td>
                                                <td class="text-right">Ksh:{{$product['item']['product_price']*$product['quantity']}}</td>
                                            </tr>
                                            @endforeach
                                                @endif
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <td class="text-right" colspan="4"><strong>Sub-Total:</strong></td>
                                                <td class="text-right">Ksh:{{$totalPrice}}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right" colspan="4"><strong>Delivery Fee:</strong></td>
                                                <td class="text-right">Free</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right" colspan="4"><strong>Total:</strong></td>
                                                <td class="text-right">Ksh:{{$totalPrice}}</td>
                                                <input type="hidden" name="amount" value="{{$totalPrice}}">
                                            </tr>
                                            </tfoot>
                                        </table>
                                        <a href="{{url('cart')}}"><button class="btn btn-info">Edit Cart</button></a>

                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default ">
                        <div class="panel-heading">
                            <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapsefive">Step 5: Payment Method  <i class="fa fa-caret-down"></i></a> </h4>
                        </div>
                        <div id="collapsefive" class="panel-collapse collapse">
                            <div class="panel-body">
                                @include('flash-message')
                                <p>Please select the preferred payment method to use on this order.</p>
                                <div class="radio">
                                    <label>
                                        <input type="radio" checked="checked" value="mpesa" name="cash">
                                        Mpesa </label>
                                    <h5 class="text-danger" id="mpesaId"><b>Please make sure you have the whole amount     (Ksh: {{$totalPrice}}) in your Mpesa account and put in the prompted Mpesa pin after placing order.</b></h5>
                                </div>

                                <div class="buttons">
                                    <div class="pull-right mt_20">I have read and agree to the <a class="agree" href="#"><b>Terms &amp; Conditions</b></a>
                                        <input type="checkbox" value="1" name="agree" required>
                                        &nbsp;
                                        <input type="submit" class="btn" data-loading-text="Loading..." id="placeOrderButtom" value="Place Order">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
                </form>
        </div>
    </div>
    <!-- =====  CONTAINER END  ===== -->
    <!-- =====  FOOTER START  ===== -->
@include('cPartials.footer')

    <!-- =====  FOOTER END  ===== -->
</div>

<a id="scrollup">Scroll</a>
<script src="js/jQuery_v3.1.1.min.js"></script> <script src="js/owl.carousel.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.magnific-popup.js"></script>
<script src="js/custom.js"></script>
<script type="text/javascript">
    $('input[name=\'payment_address\']').on('change', function() {
        if (this.value == 'new') {
            $('#payment-existing').hide();
            $('#payment-new').show();
        } else {
            $('#payment-existing').show();
            $('#payment-new').hide();
        }
    });
    $('input[name=\'shipping_address\']').on('change', function() {
        if (this.value == 'new') {
            $('#shipping-existing').hide();
            $('#shipping-new').show();
        } else {
            $('#shipping-existing').show();
            $('#shipping-new').hide();
        }
    });
    $('#mpesaId').hide();
   $('#placeOrderForm input').on('change',function () {
     $value =  $('input[name=cash]:checked','#placeOrderForm').val();
     if ($value=='mpesa'){
         $('#mpesaId').show();
     }
     else {
         if ($value=='cash'){
             $('#mpesaId').hide();

         }
     }

   });
</script>
</body>

<!-- Mirrored from html.lionode.com/fastro/f001/checkout_page.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 May 2020 06:07:39 GMT -->
</html>
