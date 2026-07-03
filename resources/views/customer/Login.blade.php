@include('cPartials.header')
<title>Davix - Login</title>

            </div>


            <div class="col-sm-8 col-md-8 col-lg-9 mtb_30">
                <!-- contact  -->
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="panel-login">
                            <div class="panel-heading">
                                <div class="row mb_20">
                                    <div class="col-xs-6">
                                        <a href="#" class="active" id="login-form-link">Login</a>
                                    </div>
                                    <div class="col-xs-6">
                                        <a href="#" id="register-form-link">Register</a>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form id="login-form" action="{{route('loginCustomOne')}}" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <input type="text" name="email" id="username1" tabindex="1" class="form-control" placeholder="Email" value="" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" required>
                                            </div>
                                            <div class="form-group text-center">
                                                <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                                                <label for="remember"> Remember Me</label>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-6 col-sm-offset-3">
                                                        <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="text-center">
                                                            <a href="#" tabindex="5" class="forgot-password">Forgot Password?</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <form id="register-form" action="{{route('registerCustomOne')}}" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <input type="text" name="name" id="username" tabindex="1" class="form-control" placeholder="Username" value="" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="" required>
                                            </div>
                                            <div class="form-group">

                                                    <div class="phone-list">

                                                        <div class="input-group phone-input">
						                        <span class="input-group-btn">
							                    <button type="button" class="btn btn-default dropdown-toggle" aria-expanded="false"><span class="type-text">+254</span></button>
						                        </span>
                                                            <input type="text" name="phone" class="form-control" placeholder="712345678" />
                                                        </div>


                                                </div>

                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="location" id="email" tabindex="1" class="form-control" placeholder="Location" value="" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="password" id="password2" tabindex="2" class="form-control" placeholder="Password" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password" required>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-6 col-sm-offset-3">
                                                        <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                                                    </div>
                                                </div>
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
    </div>
</div>
<!-- Single Blog  -->


<!-- End Blog 	-->

<!-- =====  CONTAINER END  ===== -->

<!-- =====  FOOTER START  ===== -->
@include('cPartials.footer')

<!-- =====  FOOTER END  ===== -->

<a id="scrollup">Scroll</a>
<script src="js/jQuery_v3.1.1.min.js"></script> <script src="js/owl.carousel.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.magnific-popup.js"></script>
<script src="js/custom.js"></script>

<!-- Mirrored from html.lionode.com/fastro/f001/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 May 2020 06:07:18 GMT -->
</html>
