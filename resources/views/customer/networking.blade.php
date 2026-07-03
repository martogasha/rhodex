@include('cPartials.header')
<title>Networking and Telecom</title>

<div class="filter left-sidebar-widget mb_50">
                    <div class="heading-part mtb_20 ">
                        <h2 class="main_title">Refine Search</h2>
                    </div>
                    <div class="filter-block">
                        <p>
                            <label for="amount">Price range:</label>
                            <input type="text" id="amount" readonly>
                        </p>
                        <div id="slider-range" class="mtb_20"></div>
                        <div class="list-group">
                            <button type="button" class="btn">Refine Search</button>
                        </div>
                    </div>
                </div>
                <div class="left_banner left-sidebar-widget mb_50"> <a href="#"><img src="images/left1.jpg" alt="Left Banner" class="img-responsive" /></a> </div>
            </div>
            <div class="col-sm-8 col-md-8 col-lg-9 mtb_30">
                <!-- =====  BANNER STRAT  ===== -->
                <div class="breadcrumb ptb_20">
                    <h1>Products</h1>
                    <ul >
                        <li><a href="index-2.html">Home</a></li>
                        <li class="active">Products</li>
                    </ul>
                </div>
                <!-- =====  BREADCRUMB END===== -->
                <div class="category-page-wrapper mb_30">
                    <div class="col-xs-6 sort-wrapper">
                        <label class="control-label" for="input-sort">Sort By :</label>
                        <div class="sort-inner">
                            <select id="input-sort" class="form-control">
                                <option value="ASC" selected="selected">Default</option>
                                <option value="ASC">Name (A - Z)</option>
                                <option value="DESC">Name (Z - A)</option>
                                <option value="ASC">Price (Low &gt; High)</option>
                                <option value="DESC">Price (High &gt; Low)</option>
                                <option value="DESC">Rating (Highest)</option>
                                <option value="ASC">Rating (Lowest)</option>
                                <option value="ASC">Model (A - Z)</option>
                                <option value="DESC">Model (Z - A)</option>
                            </select>
                        </div>
                        <span><i class="fa fa-angle-down" aria-hidden="true"></i></span> </div>
                    <div class="col-xs-4 page-wrapper">
                        <label class="control-label" for="input-limit">Show :</label>
                        <div class="limit">
                            <select id="input-limit" class="form-control">
                                <option value="8" selected="selected">08</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="75">75</option>
                                <option value="100">100</option>
                            </select>
                        </div>
                        <span><i class="fa fa-angle-down" aria-hidden="true"></i></span> </div>
                    <div class="col-xs-2 text-right list-grid-wrapper">
                        <div class="btn-group btn-list-grid">
                            <button type="button" id="list-view" class="btn btn-default list-view" ></button>
                            <button type="button" id="grid-view" class="btn btn-default grid-view active" ></button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @if(!empty($searchProducts))
                    @foreach($searchProducts as $searchProduct)
                    <div class="product-layout  product-grid  col-lg-3 col-md-4 col-xs-6 ">
                        <div class="item">
                            <div class="product-thumb clearfix mb_30">
                                <div class="image product-imageblock"> <a href="{{url('productDetail',$searchProduct->id)}}"> <img data-name="product_image" src="{{asset('uploads/product/'.$searchProduct->product_image)}}" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="{{asset('uploads/product/'.$searchProduct->product_image)}}" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a> </div>
                                <div class="caption product-detail text-left">
                                    <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">{{$searchProduct->product_name}}</a></h6>
                                    <div class="rating">
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                                    </div>
                                    <span class="price"><span class="amount"><span class="currencySymbol">Ksh:</span>{{$searchProduct->product_price}}</span></span>
                                    <h5 class="text-muted"><s>Ksh:{{$searchProduct->price}}</s></h5>
                                    <p class="product-desc mt_20 mb_60"> More room to move. With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go.Cover Flow. Browse through your music collection by flipping..</p>
                                    <div class="button-group text-center">
                                        <form action="{{url('cartOne')}}" method="post">
                                            @csrf
                                            <input type="hidden" value="{{$searchProduct->id}}" name="productId">
                                            <button type="submit" class="btn btn-info">ADD TO CART</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                        <h4>No Results Found</h4>
                    @endif

                </div>
                <div class="pagination-nav text-center mt_50">
                    <ul>
                        <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
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
