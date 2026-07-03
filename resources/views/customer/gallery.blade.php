@include('cPartials.header')
<title>Icons Computer - Gallery</title>

<div class="filter left-sidebar-widget mb_50">

                </div>
                <div class="left_banner left-sidebar-widget mb_50"> <a href="#"><img src="images/left1.jpg" alt="Left Banner" class="img-responsive" /></a> </div>
            </div>
            <div class="col-sm-8 col-md-8 col-lg-9 mtb_30">
                <!-- =====  BANNER STRAT  ===== -->
                <div class="breadcrumb ptb_20">
                    <h1>Gallery</h1>
                    <ul >
                        <li><a href="index-2.html">Home</a></li>
                        <li class="active">Gallery</li>
                    </ul>
                </div>
                <!-- =====  BREADCRUMB END===== -->
                <div class="row gallery">
                    @foreach($images as $image)
                <div class="col-lg-3 col-md-4 col-xs-12">
                    <a href="{{asset('uploads/product/'.$image->image)}}">
                    <figure><img class="img-fluid img-thumbnail" src="{{asset('uploads/product/'.$image->image)}}" alt="Random Image"></figure>
                    </a>
                    <h4><b style="color: black">{{$image->desc}}</b></h4>
                    </div>
                @endforeach
                    </div>
            </div>
        </div>
    </div>
<style>
    /* Only for demo purposes. */
    /* Start Gallery CSS */
    .thumb {
        margin-bottom: 15px;
    }
    .thumb:last-child {
        margin-bottom: 0;
    }
    /* CSS Image Hover Effects: https://www.nxworld.net/tips/css-image-hover-effects.html */
    .thumb
    figure img {
        -webkit-filter: grayscale(100%);
        filter: grayscale(100%);
        -webkit-transition: .3s ease-in-out;
        transition: .3s ease-in-out;
    }
    .thumb
    figure:hover img {
        -webkit-filter: grayscale(0);
        filter: grayscale(0);
    }

</style>

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
    <script src="js/jquery-ui.js"></script>
<script>
    $( function() {
        $( "#slider-range" ).slider({
            range: true,
            min: 0,
            max: 500,
            values: [ 75, 300 ],
            slide: function( event, ui ) {
                $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
            }
        });
        $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
            " - $" + $( "#slider-range" ).slider( "values", 1 ) );
    } );
</script>
</body>

<!-- Mirrored from html.lionode.com/fastro/f001/category_page.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 May 2020 06:07:21 GMT -->
</html>
