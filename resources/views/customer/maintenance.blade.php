@include('cPartials.header')
<title>Computer Repair and Maintenance</title>
<div class="left_banner left-sidebar-widget mb_50"> <a href="#"><img src="images/left1.jpg" alt="Left Banner" class="img-responsive" /></a> </div>
</div>
<div class="col-sm-8 col-md-8 col-lg-9 mtb_30">
    <!-- =====  BANNER STRAT  ===== -->
    <div class="breadcrumb ptb_20">
        <h1>Computer Repair and Maintenance</h1>
        <ul >
            <li><a href="index-2.html">Home</a></li>
            <li class="active">Computer Repair and Maintenance</li>
        </ul>
    </div>
    <div class="row">
        <section class="section-services">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-md-10 col-lg-8">
                        <div class="header-section">
                            <h2 class="title">Computer Repair and <span>Maintenance</span></h2>
                        </div>
                        <p>
                        <p class="description">
                        <p>WE SERVICE ALL KINDS OF COMPUTERS</p>
                        <br>
                        Our computer repair services include desktop and laptop computers of all types and brands, particularly PC type computers. We can also repair/replace your laptop screen or backlighting issue depending upon your computer make and model. Your laptop computer keyboard replacement is also possible, once again, depending upon make and model. Having difficulties with your printer(s)? We provide printer troubleshooting and printer setup.
                        </p>
                        <br>
                        WE'LL BRING YOUR COMPUTERS UP TO SPEED
                        <br>
                        <br>
                        Computer running slowly? This can be absolutely agonizing. You, or your staff members can go crazy waiting for programs to process, documents to print; the list is endless. We provide desktop and laptop tune-ups to get top PC performance at a very reasonable price. Our computer maintenance programs will save both time and money and keep your computers running smoothly.Having computer virus issues? We can scan, detect and remove viruses for you. We can also set up a virus protection program to block viruses infections.
                        <br>
                        <br>
                        <button class="btn btn-info">Get Quote</button>                        </p>
                        <br>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <!-- =====  BREADCRUMB END===== -->
<style>
    a,p,h1,h2,h3,h4,ul {
        margin: 0;
        padding: 0;
    }

    .section-services {
        padding-top: 110px;
        padding-bottom: 120px;
        font-family: "Poppins", sans-serif;
        background-color: #211f24;
        color: #fff;
    }

    .section-services .header-section {
        margin-bottom: 35px;
    }

    .section-services .header-section .title {
        position: relative;
        margin-bottom: 40px;
        padding-bottom: 25px;
        text-transform: uppercase;
        font-weight: 700;
    }

    .section-services .header-section .title:before {
        content: "";
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 140px;
        height: 1px;
        background-color: #f70037;
    }

    .section-services .header-section .title:after {
        content: "";
        position: absolute;
        bottom: -1px;
        left: 50%;
        transform: translateX(-50%);
        width: 45px;
        height: 3px;
        background-color: #f70037;
    }

    .section-services .header-section .title span {
        color: #f70037;
    }

    .section-services .header-section .description {
        color: #6f6f71;
    }

    .section-services .single-service {
        margin-top: 40px;
        background-color: #24252a;
        box-shadow: 0 0 10px 0 rgba(0,0,0,.1);
    }

    .section-services .single-service .part-1 {
        padding: 40px 40px 25px;
        border-bottom: 2px solid #1d1e23;
    }

    .section-services .single-service .part-1 i {
        margin-bottom: 25px;
        font-size: 50px;
        color: #f70037;
    }

    .section-services .single-service .part-1 .title {
        font-size: 17px;
        font-weight: 700;
        letter-spacing: 0.02em;
        line-height: 1.8em;
    }

    .section-services .single-service .part-2 {
        padding: 30px 40px 40px;
    }

    .section-services .single-service .part-2 .description {
        margin-bottom: 22px;
        color: #6f6f71;
        font-size: 14px;
        line-height: 1.8em;
    }

    .section-services .single-service .part-2 a {
        color: #fff;
        font-size: 14px;
        text-decoration: none;
    }

    .section-services .single-service .part-2 a i {
        margin-right: 10px;
        color: #f70037;
    }
</style>

            <!--End Team Carousel -->
</div>
</div>
</div>
@include('cPartials.footer')
<!-- =====  FOOTER END  ===== -->

<a id="scrollup">Scroll</a>
<script src="js/jQuery_v3.1.1.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.magnific-popup.js"></script>
<script src="js/jquery.firstVisitPopup.js"></script>
<script src="js/custom.js"></script>
</body>
<script>
    $('#homeForm').on('submit',function (event) {
        event.preventDefault();
        productId = $('#home').val();
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
    $('#phoneForm').on('submit',function (event) {
        event.preventDefault();
        productId = $('#phone').val();
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

    $('#laptopForm').on('submit',function(event) {
        event.preventDefault();
        productId = $('#laptop').val();
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

<!-- Mirrored from html.lionode.com/fastro/f001/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 May 2020 05:21:23 GMT -->
</html>
