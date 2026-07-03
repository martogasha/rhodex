<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Mirrored from html.lionode.com/fastro/f001/cart_page.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 May 2020 06:07:18 GMT -->
<head>
    <!-- =====  BASIC PAGE NEEDS  ===== -->
    <meta charset="utf-8">
    <title>Icons Computer - Cart</title>
    <!-- =====  SEO MATE  ===== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edg      e" />
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="distribution" content="global">
    <meta name="revisit-after" content="2 Days">
    <meta name="robots" content="ALL">
    <meta name="rating" content="8 YEARS">
    <meta name="Language" content="en-us">
    <meta name="GOOGLEBOT" content="NOARCHIVE">
    <!-- =====  MOBILE SPECIFICATION  ===== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="viewport" content="width=device-width">
    <!-- =====  CSS  ===== -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">

    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="shortcut icon" href="images/fav.png">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.html">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.html">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.html">
</head>
<body>
<!-- =====  LODER  ===== -->
<div class="loder"></div>
<div class="wrapper">
    <!-- =====  HEADER START  ===== -->
    <header id="header">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <ul class="header-top-right text-right">
                            @if(\Illuminate\Support\Facades\Auth::check())
                                <li class="account"><a href="">{{\Illuminate\Support\Facades\Auth::user()->user_name}}</a></li>
                            @else
                                <li class="account"><a href="{{url('Login')}}">Login</a></li>
                            @endif
                            <li class="sitemap"><a href="#">Track Order</a></li>
                            <li class="cart"><a href="{{url('cart')}}">My Cart</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header">
            <div class="container">
                <nav class="navbar">
                    <div class="navbar-header mtb_20"> <a class="navbar-brand" href="{{url('/')}}"> <img alt="fastrod" src="images/icons.png"> </a> </div>
                    <div class="header-right pull-right mtb_50">
                        <button class="navbar-toggle pull-left" type="button" data-toggle="collapse" data-target=".js-navbar-collapse"> <span class="i-bar"><i class="fa fa-bars"></i></span></button>
                        <div class="shopping-icon">
                            <div class="cart-item " data-target="#cart-dropdown" data-toggle="collapse" aria-expanded="true" role="button">Item's : <span class="cart-qty">{{\Illuminate\Support\Facades\Session::has('cat') ? \Illuminate\Support\Facades\Session::get('cat')->totalQty: ''}}</span></div>
                        </div>
                        <div class="main-search pull-right">
                            <div class="search-overlay">
                                <!-- Close Icon -->
                                <a href="javascript:void(0)" class="search-overlay-close"></a>
                                <!-- End Close Icon -->
                                <div class="container">
                                    <!-- Search Form -->
                                    <form action="{{url('search')}}" method="post">
                                        @csrf
                                        <label class="h5 normal search-input-label" >Enter keywords To Search Entire Store</label>
                                        <input value="" name="searchProduct" placeholder="Search here..." type="search">
                                        <button type="submit"></button>
                                    </form>
                                    <!-- End Search Form -->

                                </div>
                            </div>
                            <div class="header-search"> <a id="search-overlay-btn"></a> </div>
                        </div>
                    </div>
                    <div class="collapse navbar-collapse js-navbar-collapse pull-right">
                        <ul id="menu" class="nav navbar-nav">
                                <li> <a href="{{url('/')}}">Home</a></li>
                                <li> <a href="{{url('shop')}}">Shop</a></li>
                            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services </a>
                                <ul class="dropdown-menu">
                                    <li> <a href="{{url('cameraService')}}">CCTV and Surveillance System</a></li>
                                    <li> <a href="{{url('NetworkingService')}}">Networking</a></li>
                                    <li> <a href="{{url('internet')}}">Home and Office Internet</a></li>
                                    <li> <a href="{{url('dataRecovery')}}">Data Recovery and Backup</a></li>
                                    <li> <a href="{{url('maintenance')}}">Computer Repair and Maintenance</a></li>
                                    <li> <a href="{{url('webDesign')}}">Web Design and Development</a></li>

                                </ul>
                            </li>
                            <li class="dropdown"> <a href="{{url('about')}}">About Us</a>
                            </li>
                            <li> <a href="{{url('contactUs')}}">Contacts</a></li>
                        </ul>
                    </div>

                    <!-- /.nav-collapse -->
                </nav>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-3">
                        <div class="category">
                            <div class="menu-bar" data-target="#category-menu,#category-menu-responsive" data-toggle="collapse" aria-expanded="true" role="button">
                                <h4 class="category_text">Top category</h4>
                                <span class="i-bar"><i class="fa fa-bars"></i></span></div>

                        </div>
                        <div id="category-menu-responsive" class="navbar collapse " aria-expanded="true" style="" role="button">
                            <div class="nav-responsive">

                                <ul class="nav  main-navigation collapse in">

                                    <li><a href="{{url('computers')}}">Computer & Office</a></li>
                                    <li><a href="{{url('electronics')}}">Electronics and Home Appliance</a></li>
                                    <li><a href="{{url('networking')}}">Networking and Telecom</a></li>
                                    <li><a href="{{url('consumer')}}">Consumer Electronics</a></li>
                                    <li><a href="{{url('phones')}}">Phones and Tablets</a></li>
                                    <li><a href="{{url('printers')}}">Printers and Consumables</a></li>
                                    <li><a href="{{url('cctv')}}">CCTV and Safety</a></li>
                                    <li><a href="{{url('laptops')}}">Laptops</a></li>
                                    <li><a href="{{url('storage')}}">Storage</a></li>
                                    <li><a href="{{url('software')}}">Softwares</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8 col-md-8 col-lg-9">
                        <ul class="header-bottom-right">
                            <li class="offers owl-carousel">
                                <div class="item"><i class="fa fa-circle" aria-hidden="true"></i>Daily Offers - <span>Every Hour UpTo 80% OFF </span></div>
                                <div class="item"><i class="fa fa-circle" aria-hidden="true"></i>Daily Offers - <span>Every Hour UpTo 80% OFF </span></div>
                                <div class="item"><i class="fa fa-circle" aria-hidden="true"></i>Daily Offers - <span>Every Hour UpTo 80% OFF </span></div>
                                <div class="item"><i class="fa fa-circle" aria-hidden="true"></i>Daily Offers - <span>Every Hour UpTo 80% OFF </span></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- =====  HEADER END  ===== -->

    <!-- =====  CONTAINER START  ===== -->

    <div class="container">
        <div class="row ">
            <div id="column-left" class="col-sm-4 col-md-4 col-lg-3 hidden-xs">
                <div id="category-menu" class="navbar collapse in  mb_40" aria-expanded="true" style="" role="button">
                    <div class="nav-responsive">
                        <ul class="nav  main-navigation collapse in">
                            <li><a href="{{url('computers')}}">Computer & Office</a></li>
                            <li><a href="{{url('electronics')}}">Electronics and Home Appliance</a></li>
                            <li><a href="{{url('networking')}}">Networking and Telecom</a></li>
                            <li><a href="{{url('consumer')}}">Consumer Electronics</a></li>
                            <li><a href="{{url('phones')}}">Phones and Tablets</a></li>
                            <li><a href="{{url('printers')}}">Printers and Consumables</a></li>
                            <li><a href="{{url('cctv')}}">CCTV and Safety</a></li>
                            <li><a href="{{url('laptops')}}">Laptops</a></li>
                            <li><a href="{{url('storage')}}">Storage</a></li>
                            <li><a href="{{url('software')}}">Softwares</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            @include('flash-message')
            <div class="col-sm-8 col-md-8 col-lg-9 mtb_30">
                <!-- =====  BANNER STRAT  ===== -->
                <div class="breadcrumb ptb_20">
                    <h1>Shopping Cart</h1>
                    <ul >
                        <li><a href="index-2.html">Home</a></li>
                        <li class="active">Shopping Cart</li>
                    </ul>
                </div>
                <!-- =====  BREADCRUMB END===== -->
                <form enctype="multipart/form-data" method="post" action="#">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <td>Remove</td>
                                <td class="text-center">Image</td>
                                <td class="text-left">Product Name</td>
                                <td class="text-left">Quantity</td>
                                <td class="text-right">Unit Price</td>
                                <td class="text-right">Total</td>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($products))
                            @foreach($products as $product)
                            <tr>
                                <td><span class="input-group-btn">
                                        <a href="{{url('cartRemove',$product['item']['id'])}}"><button class="btn btn-danger" title="" data-toggle="tooltip" type="button" data-original-title="Remove"><i class="fa fa-times-circle"></i></button></a>
                                </span>
                                </td>
                                <td class="text-center"><a href="#"><img src="{{asset('uploads/product/'.$product['item']['product_image'])}}" alt="iPod Classic" title="iPod Classic" style="height:100px;width:100px"></a></td>
                                <td class="text-center">{{$product['item']['product_name']}}</td>
                                <td class="text-left">
                                    <a href="{{url('addByOne',$product['item']['id'])}}" style="padding-left: 13px">+</a>
                                    <div style="max-width: 35px;" class="input-group btn-block">
                                        <input class="form-control" value="{{$product['quantity']}}" name="quantity" disabled>
                                    </div>
                                    <a href="{{url('cartReduceByOne',$product['item']['id'])}}" style="padding-left: 13px">-</a>

                                </td>
                                <td class="text-right">Ksh:{{$product['item']['product_price']}}</td>
                                <td class="text-right">Ksh:{{$product['item']['product_price'] * $product['quantity']}}</td>
                            </tr>
                            @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </form>
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-8">
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <td class="text-right"><strong>Total:</strong></td>
                                @if(isset($totalPrice))
                                <td class="text-right">Ksh:{{$totalPrice}}</td>
                                    @endif
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <form action="{{url('/')}}">
                    <input class="btn pull-left mt_30" type="submit" value="Continue Shopping" />
                </form>
                <form action="{{url('checkout')}}">
                    <input class="btn pull-right mt_30" type="submit" value="Checkout" />
                </form>

            </div>
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
</body>

<!-- Mirrored from html.lionode.com/fastro/f001/cart_page.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 May 2020 06:07:19 GMT -->
</html>
