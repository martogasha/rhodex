@include('cPartials.header')
<title>Blog</title>
</div>
    <!-- =====  HEADER END  ===== -->


    <!-- =====  CONTAINER START  ===== -->
    <div class="container">
        <div class="row ">
            <div class="col-sm-8 col-md-8 col-lg-9 mtb_30">
                <!-- =====  BANNER STRAT  ===== -->
                <div class="breadcrumb ptb_20">
                    <h1>Blog Details</h1>
                    <ul >
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="{{url('blog')}}">Blog</a></li>
                        <li class="active">{{\Illuminate\Support\Str::of($detail->title)->words(3)}}</li>
                    </ul>
                </div>
                <!-- =====  BREADCRUMB END===== -->
                <div class="row">
                    <div class="blog-item listing-effect col-md-12 mb_50">

                        <div class="post-format">
                            <div class="thumb post-img"><a href="{{asset('uploads/product/'.$detail->image)}}" title="Beautiful Lady" > <img src="{{asset('uploads/product/'.$detail->image)}}"  alt="fastro"></a></div>
                            <div class="post-type"> <i class="fa fa-picture-o" aria-hidden="true"></i> </div>
                        </div>
                        <div class="post-info mtb_20 ">
                            <h2 class="mb_10"> <a href="#">{{$detail->title}}</a> </h2>
                            <p>{{$detail->detail}} <a href="{{$detail->link}}" style="color: red">{{$detail->linkName}}</a> {{$detail->detailOne}}</p>
                        </div>
                        <blockquote>"{{$detail->quote}}" <p>{{$detail->quoteAuthor}}</p></blockquote>
                        {{$detail->detailTwo}} <a href="{{$detail->linkOne}}" style="color: red">{{$detail->linkNameOne}}</a> {{$detail->detailThree}}

                        <div class="details mtb_20">
                            <div class="date"> <i class="fa fa-calendar" aria-hidden="true"></i>11 May 2017 </div>
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
</body>

<!-- Mirrored from html.lionode.com/fastro/f001/single_blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Jul 2022 14:42:06 GMT -->
</html>
