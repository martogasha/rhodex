@include('cPartials.header')
    <title>Blog</title>
</div>
<div class="col-sm-8 col-md-8 col-lg-9 mtb_30">
    <!-- =====  BANNER STRAT  ===== -->
    <div class="breadcrumb ptb_20">
        <h1>Blog</h1>
        <ul >
            <li><a href="{{url('/')}}">Home</a></li>
            <li class="active">Blog</li>
        </ul>
    </div>
    <!-- =====  BREADCRUMB END===== -->
    <div class="row">
        <div class="three-col-blog text-left">
            @foreach($blogs as $blog)
            <div class="blog-item col-md-6 mb_30">
                <div class="post-format">
                    <div class="thumb post-img"><a href="{{url('blog',$blog->id)}}"> <img src="{{asset('uploads/product/'.$blog->image)}}"  alt="fastro"></a></div>
                    <div class="post-type"><i class="fa fa-music" aria-hidden="true"></i></div>
                </div>
                <div class="post-info mtb_20 ">
                    <h3 class="mb_10"> <a href="{{url('blog',['id'=>$blog->id,'name'=>$blog->title])}}">{{\Illuminate\Support\Str::of($blog->title)->words(7)}}</a> </h3>
                    <p>{{$blog->detail}}</p>
                    <div class="details mtb_20">
                        <div class="date pull-left"> <i class="fa fa-calendar" aria-hidden="true"> </i>{{$blog->created_at->diffForHumans()}}</div>
                        <div class="more pull-right"> <a href="single_blog.html"></a></div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="pagination-nav text-center mtb_20">
        <ul>
            <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
        </ul>
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
