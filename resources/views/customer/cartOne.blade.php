<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from portotheme.com/html/porto_ecommerce/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 May 2025 11:30:00 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Mylonix - Shopping Cart</title>

    @include('cPartials.headerOne')
        <div class="header-bottom sticky-header d-none d-lg-block" data-sticky-options="{'mobile': false}">
                <div class="container">
                    <nav class="main-nav w-100">
                        <ul class="menu">
                            <li>
                                <a href="{{url('/')}}">Home</a>
                            </li>
                             <li>
                                <a href="{{url('shop')}}">Shop</a>
                            </li>
                            <li>
                                <a href="#">Categories</a>
                                <ul>
                               @foreach($categories as $category)
                            		<li><a href="{{url('Shop',$category->id)}}">{{$category->category_name}}</a></li>
                        		@endforeach
                                 
                                </ul>
                            </li>
                            <li><a href="blog.html">Blog</a></li>
                       
                            <li><a href="contact.html">Contact Us</a></li>
                            <li class="float-right"><a href="#" class="pl-5">Special Offer!</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- End .container -->
            </div>
            <!-- End .header-bottom -->
        </header>
        <!-- End .header -->
        @include('flash-message')

		<main class="main">
			<div class="container">
				<ul class="checkout-progress-bar d-flex justify-content-center flex-wrap">
					<li class="active">
						<a href="{{url('cart')}}">Shopping Cart</a>
					</li>
					<li>
						<a href="{{url('checkout')}}">Checkout</a>
					</li>
					<li class="disabled">
						<a href="cart.html">Order Complete</a>
					</li>
				</ul>

				<div class="row">
					<div class="col-lg-8">
						<div class="cart-table-container">
							<table class="table table-cart">
								<thead>
									<tr>
										<th class="thumbnail-col"></th>
										<th class="product-col">Product</th>
										<th class="price-col">Price</th>
										<th class="qty-col">Quantity</th>
										<th class="text-right">Subtotal</th>
									</tr>
								</thead>
								<tbody>
								@if(isset($products))
									@foreach($products as $product)
										<tr class="product-row">
											<td>
												<figure class="product-image-container">
													<a href="{{url('productDetail',$product['item']['id'])}}" class="product-image">
														<img src="{{asset('uploads/product/'.$product['item']['product_image'])}}" alt="product">
													</a>

													<a href="{{url('cartRemove',$product['item']['id'])}}" class="btn-remove icon-cancel" title="Remove Product"></a>
												</figure>
											</td>
											<td class="product-col">
												<h5 class="product-title">
													<a href="{{url('productDetail',$product['item']['id'])}}">{{$product['item']['product_name']}}</a>
												</h5>
											</td>
											<td>Ksh {{ number_format($product['item']['product_price'], 0, '.', ',') }}</td>
											<td>
												 <div class="num-block skin-1">
                                                        <div class="num-in">
                                                            <a href="{{url('cartReduceByOne',$product['item']['id'])}}"><span class="minus dis"></span></a>
                                                            <input type="text" class="in-num" value="{{$product['quantity']}}" readonly="">
                                                            <a href="{{url('addByOne',$product['item']['id'])}}"><span class="plus"></span></a>
                                                        </div>
                                                    </div>
											</td>
											<td class="text-right"><span class="subtotal-price">Ksh {{ number_format($product['item']['product_price'] * $product['quantity'], 0, '.', ',') }}</span></td>
										</tr>
   									@endforeach
                                @endif
								</tbody>


								<tfoot>
									<tr>
										<td colspan="5" class="clearfix">
											<div class="float-left">
												<div class="cart-discount">
													<form action="#">
														<div class="input-group">
															<input type="text" class="form-control form-control-sm"
																placeholder="Coupon Code" required>
															<div class="input-group-append">
																<button class="btn btn-sm" type="submit">Apply
																	Coupon</button>
															</div>
														</div><!-- End .input-group -->
													</form>
												</div>
											</div><!-- End .float-left -->

										
										</td>
									</tr>
								</tfoot>
							</table>
						</div><!-- End .cart-table-container -->
					</div><!-- End .col-lg-8 -->

					<div class="col-lg-4">
						<div class="cart-summary">
							<h3>CART TOTALS</h3>

							<table class="table table-totals">
								

								<tfoot>
									<tr>
										<td>Total</td>
										@if(isset($totalPrice))
										<td>Ksh {{ number_format($totalPrice, 0, '.', ',') }}</td>
										@endif
									</tr>
								</tfoot>
							</table>

							<div class="checkout-methods">
								<a href="{{url('checkout')}}" class="btn btn-block btn-dark">Proceed to Checkout
									<i class="fa fa-arrow-right"></i></a>
							</div>
						</div><!-- End .cart-summary -->
					</div><!-- End .col-lg-4 -->
				</div><!-- End .row -->
			</div><!-- End .container -->

			<div class="mb-6"></div><!-- margin -->
		</main><!-- End .main -->

		@include('cPartials.footerOne')
		<!-- End .footer -->
	</div><!-- End .page-wrapper -->

	<div class="loading-overlay">
		<div class="bounce-loader">
			<div class="bounce1"></div>
			<div class="bounce2"></div>
			<div class="bounce3"></div>
		</div>
	</div>

	<div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

	<div class="mobile-menu-container">
		<div class="mobile-menu-wrapper">
			<span class="mobile-menu-close"><i class="fa fa-times"></i></span>
		    <nav class="mobile-nav">
                <ul class="mobile-menu menu-with-icon">
                    <li><a href="demo1.html">Home</a></li>
                    <li>
                        <a href="{{url('shop')}}" class="sf-with-ul">Categories</a>
                        <ul>
                        @foreach($categories as $category)
                            <li><a href="{{url('Shop',$category->id)}}">{{$category->category_name}}</a></li>
                        @endforeach
                        </ul>
                    </li>
                 
                 
                    <li><a href="blog.html">Blog</a></li>
                </ul>

                <ul class="mobile-menu">
                    <li><a href="login.html">My Account</a></li>
                    <li><a href="demo1-contact.html">Contact Us</a></li>
                    <li><a href="{{url('shop')}}">Shop</a></li>
                    <li><a href="{{url('cart')}}">Cart</a></li>
                    <li><a href="login.html" class="login-link">Log In</a></li>
                </ul>
            </nav>

			<form class="search-wrapper mb-2" action="#">
				<input type="text" class="form-control mb-0" placeholder="Search..." required />
				<button class="btn icon-search text-white bg-transparent p-0" type="submit"></button>
			</form>

			<div class="social-icons">
				<a href="#" class="social-icon social-facebook icon-facebook" target="_blank">
				</a>
				<a href="#" class="social-icon social-twitter icon-twitter" target="_blank">
				</a>
				<a href="#" class="social-icon social-instagram icon-instagram" target="_blank">
				</a>
			</div>
		</div><!-- End .mobile-menu-wrapper -->
	</div><!-- End .mobile-menu-container -->

    @include('cPartials.stickyNav')




	<a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>
<style>
.num-block {
	float: left;
	width: 100%;
  padding: 15px 30px;
}

/* skin 1 */
.skin-1 .num-in {
	float: left;
	width: 94px;}

.skin-1 .num-in span {
	display: block;
	float: left;
	width: 30px;
	height: 32px;
	line-height: 32px;
	text-align: center;
	position: relative;
	cursor: pointer;
}

.skin-1 .num-in span.dis:before {
  background-color: #ccc !important;
}

.skin-1 .num-in input {
	float: left;
	width: 32px;
	height: 32px;
	border: 1px solid #6E6F7A;
	border-radius: 5px;
	color: #000;
	text-align: center;
	padding: 0;
}

.skin-1 .num-in span.minus:before {
	content: '';
	position: absolute;
	width: 15px;
	height: 2px;
	background-color: #00A94F;
	top: 50%;
	left: 0;
}

.skin-1 .num-in span.plus:before, .skin-1 .num-in span.plus:after {
	content: '';
	position: absolute;
	right: 0px;
	width: 15px;
	height: 2px;
	background-color: #00A94F;
	top: 50%;
}

.skin-1 .num-in span.plus:after {
	-webkit-transform: rotate(90deg);
	-ms-transform: rotate(90deg);
	-o-transform: rotate(90deg);
	transform: rotate(90deg);
}


</style>
	<!-- Plugins JS File -->
	<script data-cfasync="false" src="https://portotheme.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="asseti/js/jquery.min.js"></script>
	<script src="asseti/js/bootstrap.bundle.min.js"></script>
	<script src="asseti/js/plugins.min.js"></script>

	<!-- Main JS File -->
	<script src="asseti/js/main.min.js"></script>
</body>


<!-- Mirrored from portotheme.com/html/porto_ecommerce/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 May 2025 11:30:02 GMT -->
</html>