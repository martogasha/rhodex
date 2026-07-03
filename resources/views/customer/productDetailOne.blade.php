<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from portotheme.com/html/porto_ecommerce/demo1-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 May 2025 11:30:03 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Mylonix - {{$product->product_name}}</title>


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
                            <li><a href="{{url('blog')}}">Blog</a></li>
                       
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
                <nav aria-label="breadcrumb" class="breadcrumb-nav">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="#">{{$product->product_name}}</a></li>
                    </ol>
                </nav>
                <div class="product-single-container product-single-default">
                    <div class="cart-message d-none">
                        <strong class="single-cart-notice">“Men Black Sports Shoes”</strong>
                        <span>has been added to your cart.</span>
                    </div>

                    <div class="row">
                        <div class="col-lg-5 col-md-6 product-single-gallery">
                            <div class="product-slider-container">
                               

                                <div class="product-single-carousel owl-carousel owl-theme show-nav-hover">
                                    <div class="product-item">
                                        <img class="product-single-image" src="{{asset('uploads/product/'.$product->product_image)}}" data-zoom-image="{{asset('uploads/product/'.$product->product_image)}}" width="468" height="468" alt="product" />
                                    </div>
                                    @if(isset($product->product_image1))
                                    <div class="product-item">
                                        <img class="product-single-image" src="{{asset('uploads/product/'.$product->product_image1)}}" data-zoom-image="{{asset('uploads/product/'.$product->product_image1)}}" width="468" height="468" alt="product" />
                                    </div>
                                    @endif
                                    @if(isset($product->product_image2))
                                   <div class="product-item">
                                        <img class="product-single-image" src="{{asset('uploads/product/'.$product->product_image2)}}" data-zoom-image="{{asset('uploads/product/'.$product->product_image2)}}" width="468" height="468" alt="product" />
                                    </div>
                                    @endif
                                    @if(isset($product->product_image3))
                                     <div class="product-item">
                                        <img class="product-single-image" src="{{asset('uploads/product/'.$product->product_image3)}}" data-zoom-image="{{asset('uploads/product/'.$product->product_image3)}}" width="468" height="468" alt="product" />
                                    </div>
                                    @endif
                                    
                                </div>
                                <!-- End .product-single-carousel -->
                                <span class="prod-full-screen">
                                    <i class="icon-plus"></i>
                                </span>
                            </div>

                            <div class="prod-thumbnail owl-dots">
                                <div class="owl-dot">
                                    <img src="{{asset('uploads/product/'.$product->product_image)}}" width="110" height="110" alt="product-thumbnail" />
                                </div>
                                @if(isset($product->product_image1))
                                <div class="owl-dot">
                                    <img src="{{asset('uploads/product/'.$product->product_image1)}}" width="110" height="110" alt="product-thumbnail" />
                                </div>
                                @endif
                                @if(isset($product->product_image2))
                                <div class="owl-dot">
                                    <img src="{{asset('uploads/product/'.$product->product_image2)}}" width="110" height="110" alt="product-thumbnail" />
                                </div>
                                @endif
                                @if(isset($product->product_image3))
                                <div class="owl-dot">
                                    <img src="{{asset('uploads/product/'.$product->product_image3)}}" width="110" height="110" alt="product-thumbnail" />
                                </div>
                                @endif
                             
                            </div>
                        </div>
                        <!-- End .product-single-gallery -->

                        <div class="col-lg-7 col-md-6 product-single-details">
                            <h1 class="product-title">{{$product->product_name}}</h1>

                            <div class="product-nav">
                                <div class="product-prev">
                                    <a href="#">
                                        <span class="product-link"></span>

                                        <span class="product-popup">
                                            <span class="box-content">
                                                <img alt="product" width="150" height="150"
                                                    src="{{asset('asseti/images/products/product-3.jpg')}}"
                                                    style="padding-top: 0px;">

                                                <span>Circled Ultimate 3D Speaker</span>
                                        </span>
                                        </span>
                                    </a>
                                </div>

                                <div class="product-next">
                                    <a href="#">
                                        <span class="product-link"></span>

                                        <span class="product-popup">
                                            <span class="box-content">
                                                <img alt="product" width="150" height="150"
                                                    src="{{asset('asseti/images/products/product-4.jpg')}}"
                                                    style="padding-top: 0px;">

                                                <span>Blue Backpack for the Young</span>
                                        </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <!-- End .ratings-container -->

                            <hr class="short-divider">

                            <div class="price-box">
                                <span class="new-price">Ksh {{ number_format($product->product_price, 0, '.', ',') }}</span>
                            </div>
                            <!-- End .price-box -->

                            <div class="product-desc">
                                <p>
                                    {{$product->product_desc}}
                                </p>
                            </div>
                            <!-- End .product-desc -->


                            

                            <div class="product-action">
                               
                                <!-- End .product-single-qty -->
                                <form action="{{route('cart.store')}}" method="post">
                                    @csrf				
                                    <input type="hidden" value="{{$product->id}}" name="productId">
                                    <button type="submit" class="btn btn-success">ADD TO CART</button>
                                    <a href="{{url('shop')}}" class="btn btn-dark">Continue Shopping</a>

                                </form>

                                <a href="cart.html" class="btn btn-gray view-cart d-none">View cart</a>
                            </div>
                            <!-- End .product-action -->

                            <hr class="divider mb-0 mt-0">

                            <div class="product-single-share mb-2">
                                <label class="sr-only">Share:</label>

                                <div class="social-icons mr-2">
                                    <a href="#" class="social-icon social-facebook icon-facebook" target="_blank" title="Facebook"></a>
                                    <a href="#" class="social-icon social-twitter icon-twitter" target="_blank" title="Twitter"></a>
                                    <a href="#" class="social-icon social-linkedin fab fa-linkedin-in" target="_blank" title="Linkedin"></a>
                                    <a href="#" class="social-icon social-gplus fab fa-google-plus-g" target="_blank" title="Google +"></a>
                                    <a href="#" class="social-icon social-mail icon-mail-alt" target="_blank" title="Mail"></a>
                                </div>
                                <!-- End .social-icons -->

                            </div>
                            <!-- End .product single-share -->
                        </div>
                        <!-- End .product-single-details -->
                    </div>
                    <!-- End .row -->
                </div>
                <!-- End .product-single-container -->

              
                <!-- End .product-single-tabs -->

                <div class="products-section pt-0">
                    <h2 class="section-title">Related Products</h2>

                    <div class="products-slider 5col owl-carousel owl-theme dots-top dots-small">
                        @foreach($relateds as $related)
                            <div class="product-default inner-quickview inner-icon">
                                <figure class="img-effect">
                                    <a href="{{url('productDetail',$related->id)}}">
                                        <img src="{{asset('uploads/product/'.$related->product_image)}}" width="205" height="205" alt="product">
                                        <img src="{{asset('uploads/product/'.$related->product_image)}}" width="205" height="205" alt="product">
                                    </a>
                                    <div class="label-group">
                                        <div class="product-label label-hot">HOT</div>
                                        <div class="product-label label-sale">-20%</div>
                                    </div>
                                    <div class="btn-icon-group">
                                        <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                                class="icon-shopping-cart"></i></a>
                                    </div>
                              
                                    <!-- End .product-countdown-container -->
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="demo1-shop.html" class="product-category">category</a>
                                        </div>
                                        <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i
                                                class="icon-heart"></i></a>
                                    </div>
                                    <h3 class="product-title">
                                        <a href="demo1-product.html">{{$related->product_name}}</a>
                                    </h3>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">Ksh {{ number_format($related->product_price, 0, '.', ',') }}</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                        @endforeach   
                   
                    </div>
                    <!-- End .products-slider -->
                </div>
                <!-- End .products-section -->

                <hr class="mt-0 m-b-5" />

                <div class="product-widgets-container row pb-2">
                    <div class="col-lg-3 col-sm-6 pb-5 pb-md-0">
                        <h4 class="section-sub-title">Featured Products</h4>
                              @foreach($computers as $computer)
                                    <div class="product-default left-details product-widget">
                                        <figure>
                                            <a href="{{url('productDetail',$computer->id)}}">
                                                <img src="{{asset('uploads/product/'.$computer->product_image)}}" width="84" height="84" alt="product">
                                                <img src="{{asset('uploads/product/'.$computer->product_image)}}" width="84" height="84" alt="product">
                                            </a>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-title"> <a href="{{url('productDetail',$computer->id)}}">{{$computer->product_name}}</a> </h3>
                                            <div class="ratings-container">
                                                <div class="product-ratings">
                                                    <span class="ratings" style="width:100%"></span>
                                                    <!-- End .ratings -->
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <!-- End .product-ratings -->
                                            </div>
                                            <!-- End .product-container -->
                                            <div class="price-box">
                                                <span class="product-price">Ksh {{ number_format($computer->product_price, 0, '.', ',') }}</span>
                                            </div>
                                            <!-- End .price-box -->
                                        </div>
                                        <!-- End .product-details -->
                                    </div>
                                @endforeach
                    </div>

                    <div class="col-lg-3 col-sm-6 pb-5 pb-md-0">
                        <h4 class="section-sub-title">Best Selling Products</h4>
                                 @foreach($toners as $toner)
                                    <div class="product-default left-details product-widget">
                                        <figure>
                                            <a href="{{url('productDetail',$toner->id)}}">
                                                <img src="{{asset('uploads/product/'.$toner->product_image)}}" width="84" height="84" alt="product">
                                                <img src="{{asset('uploads/product/'.$toner->product_image)}}" width="84" height="84" alt="product">
                                            </a>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-title"> <a href="{{url('productDetail',$toner->id)}}">{{$toner->product_name}}</a> </h3>
                                            <div class="ratings-container">
                                                <div class="product-ratings">
                                                    <span class="ratings" style="width:100%"></span>
                                                    <!-- End .ratings -->
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <!-- End .product-ratings -->
                                            </div>
                                            <!-- End .product-container -->
                                            <div class="price-box">
                                                <span class="product-price">Ksh {{ number_format($toner->product_price, 0, '.', ',') }}</span>
                                            </div>
                                            <!-- End .price-box -->
                                        </div>
                                        <!-- End .product-details -->
                                    </div>
                                @endforeach
                    </div>

                    <div class="col-lg-3 col-sm-6 pb-5 pb-md-0">
                        <h4 class="section-sub-title">Latest Products</h4>
                                @foreach($offices as $office)
                                    <div class="product-default left-details product-widget">
                                        <figure>
                                            <a href="{{url('productDetail',$office->id)}}">
                                                <img src="{{asset('uploads/product/'.$office->product_image)}}" width="84" height="84" alt="product">
                                                <img src="{{asset('uploads/product/'.$office->product_image)}}" width="84" height="84" alt="product">
                                            </a>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-title"> <a href="{{url('productDetail',$office->id)}}">{{$office->product_name}}</a> </h3>
                                            <div class="ratings-container">
                                                <div class="product-ratings">
                                                    <span class="ratings" style="width:100%"></span>
                                                    <!-- End .ratings -->
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <!-- End .product-ratings -->
                                            </div>
                                            <!-- End .product-container -->
                                            <div class="price-box">
                                                <span class="product-price">Ksh {{ number_format($office->product_price, 0, '.', ',') }}</span>
                                            </div>
                                            <!-- End .price-box -->
                                        </div>
                                        <!-- End .product-details -->
                                    </div>
                                @endforeach
                    </div>

                    <div class="col-lg-3 col-sm-6 pb-5 pb-md-0">
                        <h4 class="section-sub-title">Top Rated Products</h4>
                                @foreach($homes as $home)
                                    <div class="product-default left-details product-widget">
                                        <figure>
                                            <a href="{{url('productDetail',$home->id)}}">
                                                <img src="{{asset('uploads/product/'.$home->product_image)}}" width="84" height="84" alt="product">
                                                <img src="{{asset('uploads/product/'.$home->product_image)}}" width="84" height="84" alt="product">
                                            </a>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-title"> <a href="{{url('productDetail',$home->id)}}">{{$home->product_name}}</a> </h3>
                                            <div class="ratings-container">
                                                <div class="product-ratings">
                                                    <span class="ratings" style="width:100%"></span>
                                                    <!-- End .ratings -->
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <!-- End .product-ratings -->
                                            </div>
                                            <!-- End .product-container -->
                                            <div class="price-box">
                                                <span class="product-price">Ksh {{ number_format($home->product_price, 0, '.', ',') }}</span>
                                            </div>
                                            <!-- End .price-box -->
                                        </div>
                                        <!-- End .product-details -->
                                    </div>
                                @endforeach
                    </div>
                </div>
                <!-- End .row -->
            </div>
            <!-- End .container -->
        </main>
        <!-- End .main -->

      @include('cPartials.footerOne')
        <!-- End .footer -->
    </div>
    <!-- End .page-wrapper -->

    <div class="loading-overlay">
        <div class="bounce-loader">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>

    <div class="mobile-menu-overlay"></div>
    <!-- End .mobil-menu-overlay -->

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
            <!-- End .mobile-nav -->

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
        </div>
        <!-- End .mobile-menu-wrapper -->
    </div>
    <!-- End .mobile-menu-container -->

    @include('cPartials.stickyNav')


    <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>
    <!-- Plugins JS File -->
    <script data-cfasync="false" src="https://portotheme.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="{{asset('asseti/js/jquery.min.js')}}"></script>
    <script src="{{asset('asseti/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('asseti/js/plugins.min.js')}}"></script>
    <script src="{{asset('asseti/js/jquery.plugin.min.js')}}"></script>
    <script src="{{asset('asseti/js/jquery.countdown.min.js')}}"></script>

    <!-- Main JS File -->
    <script src="{{asset('asseti/js/main.min.js')}}"></script>
</body>
<script>
    $('#relatedForm').on('submit',function (event) {
        event.preventDefault();
        productId = $('#related').val();
        $.ajax({
            type:"post",
            url:"{{route('cart.store')}}",
            data:{
                "_token": "{{ csrf_token() }}",
                productId:productId},
            success:function (data) {
                $('#ignismyModal').modal('show');
            },
            error:function (error) {
                console.log(error)
                alert('error')

            }

        });
    });
    $('#productDetailForm').on('submit',function (event) {
        event.preventDefault();
        productId = $('#productDetail').val();
        $.ajax({
            type:"post",
            url:"{{route('cart.store')}}",
            data:{
                "_token": "{{ csrf_token() }}",
                productId:productId},
            success:function (data) {
                $('#ignismyModal').modal('show');
            },
            error:function (error) {
                console.log(error)
                alert('error')

            }

        });
    });
</script>

<!-- Mirrored from portotheme.com/html/porto_ecommerce/demo1-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 May 2025 11:30:30 GMT -->
</html>