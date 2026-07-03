<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Mirrored from html.lionode.com/fastro/f001/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 May 2020 05:18:03 GMT -->
<head>
    <!-- =====  BASIC PAGE NEEDS  ===== -->
    <meta charset="utf-8">
    <!-- =====  SEO MATE  ===== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
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
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.css')}}">
    <link rel="shortcut icon" href="{{asset('images/fav.png')}}">
    <link rel="apple-touch-icon" href="{{asset('images/apple-touch-icon.html')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('images/apple-touch-icon-72x72.html')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('images/apple-touch-icon-114x114.html')}}">
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyCm2jbUoX9T_MylOzVAaRiXKauyh2DXn_E"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCm2jbUoX9T_MylOzVAaRiXKauyh2DXn_E&callback=initMap&libraries=&v=weekly"
        defer></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6942368996711457"
            crossorigin="anonymous"></script>

</head>
<body>
<!-- =====  LODER  ===== -->
<div class="wrapper">

    <!-- =====  HEADER START  ===== -->
    <header id="header">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <ul class="header-top-right text-right">
                            @if(\Illuminate\Support\Facades\Auth::check())
                            <li class="account"><a href="{{url('dashboard')}}">{{\Illuminate\Support\Facades\Auth::user()->user_name}}'s Account</a></li>
                            @else
                                <li class="account"><a href="{{url('Login')}}">Login</a></li>
                            @endif
                                <li class="sitemap"><a href="{{url('trackOrder')}}">Track Order</a></li>
                            <li class="cart"><a href="{{url('cart')}}">My Cart</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header">
            <div class="container">
                <nav class="navbar">
                    <div class="navbar-header mtb_20"> <a class="navbar-brand" href="{{url('/')}}"> <img alt="fastrod" src="{{asset('images/icons.png')}}"> </a> </div>
                    <div class="header-right pull-right mtb_50">
                        <button class="navbar-toggle pull-left" type="button" data-toggle="collapse" data-target=".js-navbar-collapse"> <span class="i-bar"><i class="fa fa-bars"></i></span></button>
                        <div class="shopping-icon">
                            <div class="cart-item " data-target="#cart-dropdown" data-toggle="collapse" aria-expanded="true" role="button">Item's : <span class="cart-qty">{{\Illuminate\Support\Facades\Session::has('cat') ? \Illuminate\Support\Facades\Session::get('cat')->totalQty: ''}}</span></div>
                            <div id="cart-dropdown" class="cart-menu collapse">
                                <ul>
                                    <li>
                                        <table class="table table-striped">
                                            <tbody>
                                            @if(isset($products))
                                                @foreach($products as $product)
                                                <tr>
                                                <td class="text-center"><a href="#"><img src="{{asset('uploads/product/'.$product['item']['product_image'])}}" alt="iPod Classic" title="iPod Classic"></a></td>
                                                <td class="text-left product-name"><a href="#">{{$product['item']['product_name']}}</a>
                                                    <span class="text-left price">{{$product['quantity']}} x Ksh: {{$product['item']['product_price']}}</span>
                                                </td>
                                                <td class="text-center">

                                                    <a href="{{url('cartRemove',$product['item']['id'])}}" class="close-cart"><i class="fa fa-times-circle"></i></a>
                                                </td>
                                            </tr>
                                                @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                    </li>
                                    <li>
                                        <table class="table">
                                            <tbody>
                                            <tr>
                                                <td class="text-right"><strong>Total</strong></td>
                                                <td class="text-right">Ksh:{{$totalPrice}}</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </li>
                                    <li>
                                        <form action="{{url('cart')}}">
                                            <input class="btn pull-left mt_10" value="View cart" type="submit">
                                        </form>
                                        <form action="{{url('checkout')}}">
                                            <input class="btn pull-right mt_10" value="Checkout" type="submit">
                                        </form>
                                    </li>
                                </ul>
                            </div>
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
                            <li class="dropdown"> <a href="{{url('gallery')}}">Gallery</a>
                            </li>
                            <li> <a href="{{url('blog')}}">Blog</a></li>

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
                            <li> <a href="{{url('contactUs ')}}">Contacts</a></li>
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
                                    <li><a href="{{url('computers')}}">Computer Accessories</a></li>
                                    <li><a href="{{url('networking')}}">Networking</a></li>
                                    <li><a href="{{url('office')}}">Office tools and stationery</a></li>
                                    <li><a href="{{url('toner')}}">Toner cartridges/inks</a></li>
                                    <li><a href="{{url('projector')}}">Projectors</a> </li>
                                    <li><a href="{{url('printers')}}">Printers</a></li>
                                    <li><a href="{{url('cctv')}}">CCTV Systems</a></li>
                                    <li><a href="{{url('laptops')}}">Laptops</a></li>
                                    <li><a href="{{url('storages')}}">Storage</a></li>
                                    <li><a href="{{url('software')}}">Softwares</a></li>
                                    <li><a href="{{url('ups')}}">UPS Backups</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8 col-md-8 col-lg-9">
                        <li class="offers owl-carousel">
                            <div class="item"><i class="fa fa-circle" aria-hidden="true"></i>Contacts - <span>0734 421 552 or 0727995279</span></div>
                            <div class="item"><i class="fa fa-circle" aria-hidden="true"></i><span>sales@iconztech.com / info@iconztech.com</span></div>
                            <div class="item"><i class="fa fa-circle" aria-hidden="true"></i>Contacts - <span>0734 421 552 or 0727995279</span></div>
                            <div class="item"><i class="fa fa-circle" aria-hidden="true"></i>Daily Offers - <span>Every Day UpTo 40% OFF </span></div>
                        </li>
                    </div>
                </div>
            </div>
        </div>
    </header>
@include('flash-message')
<!-- =====  HEADER END  ===== -->

    <!-- =====  CONTAINER START  ===== -->
    <div class="container">
        <div class="row ">
            <div id="column-left" class="col-sm-4 col-md-4 col-lg-3 ">
                <div id="category-menu" class="navbar collapse mb_40 hidden-sm-down in" aria-expanded="true" style="" role="button">
                    <div class="nav-responsive">
                        <ul class="nav  main-navigation collapse in ">
                            <li><a href="{{url('computers')}}">Computer Accessories</a></li>
                            <li><a href="{{url('networking')}}">Networking</a></li>
                            <li><a href="{{url('office')}}">Office tools and stationery</a></li>
                            <li><a href="{{url('toner')}}">Toner cartridges/inks</a></li>
                            <li><a href="{{url('projector')}}">Projectors</a> </li>
                            <li><a href="{{url('printers')}}">Printers</a></li>
                            <li><a href="{{url('cctv')}}">CCTV Systems</a></li>
                            <li><a href="{{url('laptops')}}">Laptops</a></li>
                            <li><a href="{{url('storages')}}">Storage</a></li>
                            <li><a href="{{url('software')}}">Softwares</a></li>
                            <li><a href="{{url('ups')}}">UPS Backups</a> </li>
                        </ul>
                    </div>
                </div>
                <a style="padding:10px;display:block;" href="http://androidcss.com/css/css3-floating-button-tutorial/" target="_blank">Click here for complete tutorial</a>

                <!-- Code begins here -->

                <a href="https://wa.me/+254727995279" class="float">
                    <svg viewBox="0 0 32 32" class="whatsapp-ico"><path d=" M19.11 17.205c-.372 0-1.088 1.39-1.518 1.39a.63.63 0 0 1-.315-.1c-.802-.402-1.504-.817-2.163-1.447-.545-.516-1.146-1.29-1.46-1.963a.426.426 0 0 1-.073-.215c0-.33.99-.945.99-1.49 0-.143-.73-2.09-.832-2.335-.143-.372-.214-.487-.6-.487-.187 0-.36-.043-.53-.043-.302 0-.53.115-.746.315-.688.645-1.032 1.318-1.06 2.264v.114c-.015.99.472 1.977 1.017 2.78 1.23 1.82 2.506 3.41 4.554 4.34.616.287 2.035.888 2.722.888.817 0 2.15-.515 2.478-1.318.13-.33.244-.73.244-1.088 0-.058 0-.144-.03-.215-.1-.172-2.434-1.39-2.678-1.39zm-2.908 7.593c-1.747 0-3.48-.53-4.942-1.49L7.793 24.41l1.132-3.337a8.955 8.955 0 0 1-1.72-5.272c0-4.955 4.04-8.995 8.997-8.995S25.2 10.845 25.2 15.8c0 4.958-4.04 8.998-8.998 8.998zm0-19.798c-5.96 0-10.8 4.842-10.8 10.8 0 1.964.53 3.898 1.546 5.574L5 27.176l5.974-1.92a10.807 10.807 0 0 0 16.03-9.455c0-5.958-4.842-10.8-10.802-10.8z" fill-rule="evenodd"></path></svg>                </a>
<style>
    .float{
        position:fixed;
        width:60px;
        height:60px;
        bottom:40px;
        background-color:#0C9;
        color:#FFF;
        border-radius:50px;
        text-align:center;
        box-shadow: 2px 2px 3px #999;
    }

    .my-float{
        margin-top:22px;
    }
</style>
