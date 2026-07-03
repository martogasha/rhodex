@include('cPartials.header')
@if(\Illuminate\Support\Facades\Auth::check())
<title>{{$user->user_name}}'s Dashboard</title>
@else
<title>Dashboard</title>
@endif

<div class="left_banner left-sidebar-widget mb_50 mt_30"> <a href="#"><img src="images/left1.jpg" alt="Left Banner" class="img-responsive" /></a> </div>
            </div>
            <div class="col-sm-8 col-md-8 col-lg-9 mtb_30">
                <!-- =====  BANNER STRAT  ===== -->
                <div class="breadcrumb ptb_20">
                    @if(\Illuminate\Support\Facades\Auth::check())
                    <h1>{{$user->user_name}}'s Dashboard</h1>
                    @else
                        <h1>Dashboard</h1>
                    @endif
                    <ul >
                        <li class="active">
                            <form action="{{route('logout')}}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-danger">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
                <!-- =====  BREADCRUMB END===== -->
                <div class="panel-group mt_20" id="accordion">
                    <div class="panel panel-default  ">
                        <div class="panel-heading">
                            <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Step 1: Customer Details <i class="fa fa-caret-down"></i></a></h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        @if(\Illuminate\Support\Facades\Auth::check())
                                        <h3>{{$user->user_name}}'s Details</h3>
                                        @else
                                            <h3>Customer Detail</h3>
                                        @endif
                                        <br>
                                            <form action="{{route('dashboard.store')}}" method="post">
                                                @csrf
                                                <input type="hidden" value="{{$user->id}}" name="userId">
                                        <div class="form-group">
                                            <label for="input-email" class="control-label">Name</label>
                                            <input type="text" class="form-control" id="input-email" placeholder="Name" value="{{$user->user_name}}" name="name" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="input-email" class="control-label">E-Mail</label>
                                            <input type="text" class="form-control" id="input-email" placeholder="E-Mail" value="{{$user->user_email}}" name="email"required>
                                        </div>
                                        <div class="form-group">
                                            <label for="input-email" class="control-label">Phone Number</label>
                                            <input type="text" class="form-control" id="input-email" placeholder="Phone" value="{{$user->user_phone}}" name="phone" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="input-email" class="control-label">Location</label>
                                            <input type="text" class="form-control" id="input-email" placeholder="Location" value="{{$user->user_location}}" name="location" required>
                                        </div>
                                            <div class="form-group">
                                                <label for="input-email" class="control-label">Password</label>
                                                <input type="password" class="form-control" id="input-email" placeholder="Password" value="" name="password" required>
                                            </div>


                                            <div class="buttons">
                                                &nbsp;<input type="submit" class="btn" data-loading-text="Loading..." id="button-payment-method" value="Edit">
                                            </div>
                                            </form>

                                </div>
                            </div>
                        </div>
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
</script>
</body>

<!-- Mirrored from html.lionode.com/fastro/f001/checkout_page.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 May 2020 06:07:39 GMT -->
</html>
