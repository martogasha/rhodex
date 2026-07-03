@include('cPartials.header')
    <title>About Us</title>
</div>


            <div class="col-sm-8 col-md-8 col-lg-9 mtb_30">
                <!-- about  -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="about-text">
                            <div class="about-heading-wrap">
                                <h2><strong>ABOUT US</strong></h2>
                            </div>
                            <p>
                                Icons Computer Technologies is a large and well-established IT company headquartered in Kikuyu. Icons delivers ICT Consultancy, CCTV Camera Installation, Data Recovery, Web designs, Business Systems, Networking, Biometric access control systems and Maintenance Services.
                            </p>
                        </div>

                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="about-text">
                            <div class="about-heading-wrap">
                                <h2><strong>OUR MISSION</strong></h2>
                            </div>
                            <p>
                                To be a successful global information technology company trusted by its customers for service excellence, caring for its employees and collaborating with our customers to deliver innovative and value driven ICT products and services.
                            </p>
                        </div>

                    </div>
                </div>
                <br>
                <!-- =====  product ===== -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="about-text">
                            <div class="about-heading-wrap">
                                <h2><strong>WHAT WE DO</strong></h2>
                            </div>
                            <p>
                                Icons Computer Store is a leading  e-retailer committed to becoming the most loved and trusted technology store in Kenya. We have a wide variety of electronic products ranging from computers, printers, ink and toners, storage devices, network accessories and we have the most affordable prices.
                            </p>
                        </div>

                    </div>
                </div>
                <br>
                <!-- =====  end  ===== -->

                <!--Team Carousel -->
                <div class="heading-part mb_10">
                    <h2 class="main_title mt_50">Our Team</h2>
                </div>

                <div class="team_grid box">
                    <div class="team3col  owl-carousel">
                        <div class="item team-detail">
                            <div class="team-item-img"> <img src="images/team.jpeg" alt="" style="width:400px;height:250px;"/> </div>
                            <div class="team-designation mt_20">Marketing Manager</div>
                            <h4 class="team-title  mtb_10">David Karanja </h4>
                            <br>
                            <button class="btn btn-info">+254727995279</button>

                        </div>
                        <div class="item team-detail">
                            <div class="team-item-img"> <img src="images/avv.jpeg" alt="" style="width:400px;height:250px;"/> </div>
                            <div class="team-designation mt_20">Support & Sales</div>
                            <h4 class="team-title  mtb_10">Mwaura karanja </h4>
                            <br>
                            <button class="btn btn-info">0734421552</button>

                        </div>
                    </div>

                    <!--End Team Carousel -->
                    <div id="brand_carouse" class="ptb_30 text-center">
                        <div class="type-01">
                            <div class="heading-part mb_20 ">
                                <h2 class="main_title">COMPANIES WE HAVE WORKED WITH</h2>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="brand owl-carousel ptb_20">
                                        <div class="item text-center"> <a href="www.braxlan.com"><img src="images/brand/bLogo.jpg" alt="Disney" class="img-responsive" /></a> </div>
                                        <div class="item text-center"> <a href="#"><img src="images/brand/davix.jpg" alt="Harley" class="img-responsive" /></a> </div>
                                        <div class="item text-center"> <a href="#"><img src="images/brand/Park.jpg" alt="Harley" class="img-responsive"/></a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="brand_carouse" class="ptb_30 text-center">
                        <div class="type-01">
                            <div class="heading-part mb_20 ">
                                <h2 class="main_title">Directions</h2>
                            </div>
                            <div class="row">
                                <div id="map"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
<style>
    #map{
        width: 400px;
        height: 400px;
    }
</style>

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

</body>
<script>
    x = navigator.geolocation;
    x.getCurrentPosition(success, failure);
    function success(position){
        var myLat = -1.244494;
        var myLong = 36.664079;
        var coords = new google.maps.LatLng(myLat,myLong);
        var mapOptions = {
            zoom:9,
            center: coords,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(document.getElementById("map"), mapOptions);
        var marker = new google.maps.Marker({map:map, position:coords});
    }
    function failure(){
    }

</script>

<!-- Mirrored from html.lionode.com/fastro/f001/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 May 2020 06:07:54 GMT -->
</html>
