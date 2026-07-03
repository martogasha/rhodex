<!doctype html>
<html lang="en">

<!-- Mirrored from bootstrap.gallery/wafi-admin/dashboard-v2/topbar/ecommerce-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Jul 2020 08:01:31 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap4 Dashboard Template">
    <meta name="author" content="ParkerThemes">
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" />

    <!-- Title -->
    <title>Mylonix - Dashboard</title>


    <!-- *************
        ************ Common Css Files *************
    ************ -->
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">

    <!-- Icomoon Font Icons css -->
    <link rel="stylesheet" href="asset/fonts/style.css">

    <!-- Main css -->
    <link rel="stylesheet" href="asset/css/main.css">


    <!-- *************
        ************ Vendor Css Files *************
    ************ -->
    <!-- DateRange css -->
    <link rel="stylesheet" href="asset/vendor/daterange/daterange.css" />

    <!-- jQcloud Keywords css -->
    <link rel="stylesheet" href="asset/vendor/jqcloud/jqcloud.css" />

</head>
<body>

<!-- Loading starts -->
<div id="loading-wrapper">
    <div class="spinner-border" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Loading ends -->


<!-- *************
    ************ Header section start *************
************* -->

<!-- Header start -->
<header class="header">
    <div class="logo-wrapper">
        <a href="index.html" class="logo">
            <img src="{{asset('asseti/images/logo.png')}}" alt="Wafi Admin Dashboard" />
        </a>
    </div>
    <div class="header-items">
        <!-- Custom search start -->
        <div class="custom-search">
            <input type="text" class="search-query" placeholder="Search here ...">
            <i class="icon-search1"></i>
        </div>
        <!-- Custom search end -->

        <!-- Header actions start -->
        <ul class="header-actions">
            <li class="dropdown">
                <a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
                    <i class="icon-box"></i>
                </a>
            </li>
            <li class="dropdown">
                <a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
                    <i class="icon-bell"></i>
                    <span class="count-label"></span>
                </a>
            </li>
            <li class="dropdown">
                <a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
                    <span class="user-name">{{\Illuminate\Support\Facades\Auth::user()->user_name}}</span>
                    <span class="avatar"><span class="status busy"></span></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userSettings">
                    <div class="header-profile-actions">
                        <div class="header-user-profile">
                            <div class="header-user">
                                <img src="asset/img/user55.jpeg" alt="Admin Template" />
                            </div>
                            <h5>{{\Illuminate\Support\Facades\Auth::user()->user_name}}</h5>
                            <p>Admin</p>
                        </div>
                        <a href="user-profile.html"><i class="icon-user1"></i> My Profile</a>
                        <a href="account-settings.html"><i class="icon-settings1"></i> Account Settings</a>
                        <form action="{{route('logout')}}" method="post" id="logout">
                            @csrf
                        <a href="javascript:document.getElementById('logout').submit()"><i class="icon-log-out1"></i> Sign Out</a>
                        </form>
                    </div>
                </div>
            </li>
            <li>
                <a href="#" class="quick-settings-btn" data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick Settings">
                    <i class="icon-list"></i>
                </a>
            </li>
        </ul>
        <!-- Header actions end -->
    </div>
</header>
<!-- Header end -->

<!-- Screen overlay start -->
<div class="screen-overlay"></div>
<!-- Screen overlay end -->

<!-- Quicklinks box start -->
<div class="quick-links-box">
    <div class="quick-links-header">
        Quick Links
        <a href="#" class="quick-links-box-close">
            <i class="icon-circle-with-cross"></i>
        </a>
    </div>

</div>
<!-- Quicklinks box end -->

<!-- Quick settings start -->
<div class="quick-settings-box">
    <div class="quick-settings-header">
        <div class="date-container">Today <span class="date" id="today-date"></span></div>
        <a href="#" class="quick-settings-box-close">
            <i class="icon-circle-with-cross"></i>
        </a>
    </div>
    <div class="quick-settings-body">
        <div class="fullHeight">
            <div class="quick-setting-list">
                <h6 class="title">Events</h6>
                <ul class="list-items">
                    <li>
                        <div class="list-title">Product Launch</div>
                        <div class="list-location">10:00 AM</div>
                    </li>
                    <li>
                        <div class="list-title">Team Meeting</div>
                        <div class="list-location">01:30 PM</div>
                    </li>
                    <li>
                        <div class="list-title">Q&A Session</div>
                        <div class="list-location">02:30 PM</div>
                    </li>
                </ul>
            </div>
            <div class="quick-setting-list">
                <h6 class="title">Notes</h6>
                <ul class="list-items">
                    <li>
                        <div class="list-title">Refreshing the list</div>
                        <div class="list-location">03:15 PM</div>
                    </li>
                    <li>
                        <div class="list-title">Not able to click on button</div>
                        <div class="list-location">03:18 PM</div>
                    </li>
                </ul>
            </div>
            <div class="quick-setting-list">
                <h6 class="title">Quick Settings</h6>
                <ul class="set-priority-list">
                    <li>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" checked id="systemUpdates">
                            <label class="custom-control-label" for="systemUpdates">System Updates</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="noti">
                            <label class="custom-control-label" for="noti">Notifications</label>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Quick settings end -->

<!-- *************
    ************ Header section end *************
************* -->

<!-- Container fluid start -->
<div class="container-fluid">

    <!-- Navigation start -->
    <nav class="navbar navbar-expand-lg custom-navbar">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#WafiAdminNavbar" aria-controls="WafiAdminNavbar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i></i>
						<i></i>
						<i></i>
					</span>
        </button>
        <div class="collapse navbar-collapse" id="WafiAdminNavbar">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link active-page" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-devices_other nav-icon"></i>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{url('stock')}}" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-book-open nav-icon"></i>
                        Stock
                    </a>
                </li>
                 <li class="nav-item dropdown">
                    <a class="nav-link" href="{{url('category')}}" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-book-open nav-icon"></i>
                        Category
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{url('adminGallery')}}" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-book-open nav-icon"></i>
                        Gallery
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{url('admin/order')}}" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-book-open nav-icon"></i>
                        Orders
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{url('orderDetails')}}" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-book-open nav-icon"></i>
                        Order Details
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{url('rating')}}" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-book-open nav-icon"></i>
                        Product Rating
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{url('admin/blog')}}" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-book-open nav-icon"></i>
                        Blog
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Navigation end -->

    <!-- *************
        ************ Main container start *************
    ************* -->
    <div class="main-container">

        <!-- Page header start -->
        <div class="page-header">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item active">Ecommerce Dashboard</li>
            </ol>

            <ul class="app-actions">
                <li>
                    <a href="#" id="reportrange">
                        <span class="range-text"></span>
                        <i class="icon-chevron-down"></i>
                    </a>
                </li>
                <li>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Print">
                        <i class="icon-print"></i>
                    </a>
                </li>
                <li>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download CSV">
                        <i class="icon-cloud_download"></i>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Page header end -->

        <!-- Content wrapper start -->
        <div class="content-wrapper">

            <!-- Row starts -->
            <div class="row gutters">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Quick Links</div>
                        </div>
                        <div class="card-body">

                            <!-- Row starts -->
                            <div class="row gutters">
                                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-12">
                                    <a href="{{url('stock')}}">
                                    <div class="goal-card">
                                        <h5>Stock</h5>
                                        <p class="percentage"></p>
                                        <div class="progress progress-dot">
                                            <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <h4>{{\App\Product::all()->count()}}</h4>
                                    </div>
                                    </a>
                                </div>
                                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-12">
                                    <a href="{{url('admin/order')}}">
                                    <div class="goal-card">
                                        <h5>Orders</h5>
                                        <p class="percentage"></p>
                                        <div class="progress progress-dot">
                                            <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <h4>{{\App\Order::where('order_status1','Awaiting Confirmation')->orWhere('order_status1','Order on the Way')->count()}}</h4>
                                    </div>
                                    </a>
                                </div>
                                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-12">
                                    <a href="{{url('orderDetails')}}">
                                    <div class="goal-card">
                                        <h5>Order Details</h5>
                                        <p class="percentage"></p>
                                        <div class="progress progress-dot">
                                            <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="107" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <h4>{{\App\Order::where('order_status1','Delivered')->count()}}</h4>
                                    </div>
                                    </a>
                                </div>
                                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-12">
                                    <a href="{{url('admin/mpesaTransactions')}}">
                                        <div class="goal-card">
                                            <h5>Mpesa Details</h5>
                                            <p class="percentage"></p>
                                            <div class="progress progress-dot">
                                                <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="107" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h4>{{\App\Mpesa::all()->count()}}</h4>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-12">
                                    <a href="{{url('rating')}}">
                                        <div class="goal-card">
                                            <h5>Product Rating</h5>
                                            <p class="percentage"></p>
                                            <div class="progress progress-dot">
                                                <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="107" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h4>Ksh: {{\App\Rating::all()->count()}}</h4>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!-- Row ends -->

                        </div>
                    </div>
                </div>
            </div>
            <!-- Row ends -->

        </div>
        <!-- Content wrapper end -->

    </div>
    <!-- *************
        ************ Main container end *************
    ************* -->

    <!-- Footer start -->
    <footer class="main-footer">© Mylonix 2025</footer>
    <!-- Footer end -->

</div>
<!-- Container fluid end -->

<!-- *************
    ************ Required JavaScript Files *************
************* -->
<!-- Required jQuery first, then Bootstrap Bundle JS -->
<script src="asset/js/jquery.min.js"></script>
<script src="asset/js/bootstrap.bundle.min.js"></script>
<script src="asset/js/moment.js"></script>


<!-- *************
    ************ Vendor Js Files *************
************* -->
<!-- Slimscroll JS -->
<script src="asset/vendor/slimscroll/slimscroll.min.js"></script>
<script src="asset/vendor/slimscroll/custom-scrollbar.js"></script>

<!-- Daterange -->
<script src="asset/vendor/daterange/daterange.js"></script>
<script src="asset/vendor/daterange/custom-daterange.js"></script>

<!-- Rating JS -->
<script src="asset/vendor/rating/raty.js"></script>
<script src="asset/vendor/rating/raty-custom.js"></script>

<!-- jQcloud Keywords -->
<script src="asset/vendor/jqcloud/jqcloud-1.0.4.min.js"></script>
<script src="asset/vendor/jqcloud/custom-jqcloud.js"></script>

<!-- Apex Charts -->
<script src="asset/vendor/apex/apexcharts.min.js"></script>
<script src="asset/vendor/apex/ecommerce-dashboard/by-device.js"></script>
<script src="asset/vendor/apex/ecommerce-dashboard/by-customer-type.js"></script>
<script src="asset/vendor/apex/ecommerce-dashboard/by-channel.js"></script>
<script src="asset/vendor/apex/ecommerce-dashboard/orders-visits-bouncerate.js"></script>

<!-- jVector Maps -->
<script src="asset/vendor/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
<script src="asset/vendor/jvectormap/usa.js"></script>
<script src="asset/vendor/jvectormap/custom/map-usa3.js"></script>

<!-- Main Js Required -->
<script src="asset/js/main.js"></script>

</body>

<!-- Mirrored from bootstrap.gallery/wafi-admin/dashboard-v2/topbar/ecommerce-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Jul 2020 08:04:25 GMT -->
</html>
