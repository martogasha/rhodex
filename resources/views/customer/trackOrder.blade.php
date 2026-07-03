@include('cPartials.header')
<title>Icons Computer - Track Order</title>

<div class="left_banner left-sidebar-widget mb_50 mt_30"> <a href="#"><img src="images/left1.jpg" alt="Left Banner" class="img-responsive" /></a> </div>
            </div>
            <div class="col-sm-8 col-md-8 col-lg-9 mtb_30">
                <!-- =====  BANNER STRAT  ===== -->
                <div class="breadcrumb ptb_20">
                        <h1>Track Order</h1>
                    <ul >

                    </ul>
                </div>
                <!-- =====  BREADCRUMB END===== -->
                <div class="table-container">
                <div class="table-responsive">
                <table class="table custom-table m-0">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total</th>
                        <th scope="col">Payment Method</th>
                        <th scope="col">Order Status</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                    <tr>
                        <th scope="row">{{$order->id}}</th>
                        <td><img src="uploads/product/{{$order->product->product_image}}" style="width: 50px;height: 50px"> </td>
                        <td>{{$order->product->product_name}}</td>
                        <td>{{$order->product->product_price}}</td>
                        <td>{{$order->order_quantity}}</td>
                        <td>{{$order->product->product_price * $order->order_quantity}}</td>
                        <td><span class="badge badge-info">{{$order->order_status}}</span></td>
                        <td><span class="badge badge-success">{{$order->order_status1}}</span></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
                </div>

            </div>
        </div>
    </div>
    <!-- =====  CONTAINER END  ===== -->
    <!-- =====  FOOTER START  ===== -->
@include('cPartials.footer')

    <!-- =====  FOOTER END  ===== -->
</div>

<a id="scrollup">Scroll</a>
<script src="{{asset('js/jQuery_v3.1.1.min.js')}}"></script> <script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
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
</script>
</body>

<!-- Mirrored from html.lionode.com/fastro/f001/checkout_page.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 May 2020 06:07:39 GMT -->
</html>
