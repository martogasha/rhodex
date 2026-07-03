@include('cPartials.header')
<title>Home and Office Internet</title>
<div class="left_banner left-sidebar-widget mb_50"> <a href="#"><img src="images/left1.jpg" alt="Left Banner" class="img-responsive" /></a> </div>
</div>
<div class="col-sm-8 col-md-8 col-lg-9 mtb_30">
    <!-- =====  BANNER STRAT  ===== -->
    <div class="breadcrumb ptb_20">
        <h1>Home and Office Internet</h1>
        <ul >
            <li><a href="index-2.html">Home</a></li>
            <li class="active">Home and Office Internet</li>
        </ul>
    </div>
    <!-- =====  BREADCRUMB END===== -->
    <div class="row">
                <div class="db-wrapper">
                    <img src="images/internet.jpg" style="height:600px;width:1000px">
                </div>
        </div>
</div>
<style>
    .db-bk-color-one {
        background-color: #f55039;
    }

    .db-bk-color-two {
        background-color: #46A6F7;
    }

    .db-bk-color-three {
        background-color: #47887E;
    }

    .db-bk-color-six {
        background-color: #F59B24;
    }
    /*============================================================
    PRICING STYLES
    ==========================================================*/
    .db-padding-btm {
        padding-bottom: 50px;
    }
    .db-button-color-square {
        color: #fff;
        background-color: rgba(0, 0, 0, 0.50);
        border: none;
        border-radius: 0px;
        -webkit-border-radius: 0px;
        -moz-border-radius: 0px;
    }

    .db-button-color-square:hover {
        color: #fff;
        background-color: rgba(0, 0, 0, 0.50);
        border: none;
    }


    .db-pricing-eleven {
        margin-bottom: 30px;
        margin-top: 50px;
        text-align: center;
        box-shadow: 0 0 5px rgba(0, 0, 0, .5);
        color: #fff;
        line-height: 30px;
    }

    .db-pricing-eleven ul {
        list-style: none;
        margin: 0;
        text-align: center;
        padding-left: 0px;
    }

    .db-pricing-eleven ul li {
        padding-top: 20px;
        padding-bottom: 20px;
        cursor: pointer;
    }

    .db-pricing-eleven ul li i {
        margin-right: 5px;
    }


    .db-pricing-eleven .price {
        background-color: rgba(0, 0, 0, 0.5);
        padding: 40px 20px 20px 20px;
        font-size: 60px;
        font-weight: 900;
        color: #FFFFFF;
    }

    .db-pricing-eleven .price small {
        color: #B8B8B8;
        display: block;
        font-size: 12px;
        margin-top: 22px;
    }

    .db-pricing-eleven .type {
        background-color: #52E89E;
        padding: 50px 20px;
        font-weight: 900;
        text-transform: uppercase;
        font-size: 30px;
    }

    .db-pricing-eleven .pricing-footer {
        padding: 20px;
    }

    .db-attached > .col-lg-4,
    .db-attached > .col-lg-3,
    .db-attached > .col-md-4,
    .db-attached > .col-md-3,
    .db-attached > .col-sm-4,
    .db-attached > .col-sm-3 {
        padding-left: 0;
        padding-right: 0;
    }

    .db-pricing-eleven.popular {
        margin-top: 10px;
    }

    .db-pricing-eleven.popular .price {
        padding-top: 80px;
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
