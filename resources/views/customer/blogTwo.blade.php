<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from portotheme.com/html/porto_ecommerce/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 May 2025 11:31:55 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Mylonix - Blog</title>


    @include('cPartials.headerOne')
        <div class="header-bottom sticky-header d-none d-lg-block" data-sticky-options="{'mobile': false}">
                <div class="container">
                    <nav class="main-nav w-100">
                        <ul class="menu">
                            <li>
                                <a href="{{url('/')}}">Home</a>
                            </li>
                             <li>
                                <a href="{{url('shop')}}">Shop</a>
                            </li>
                            <li>
                                <a href="#">Categories</a>
                                <ul>
                               @foreach($categories as $category)
                            		<li><a href="{{url('Shop',$category->id)}}">{{$category->category_name}}</a></li>
                        		@endforeach
                                 
                                </ul>
                            </li>
                            <li><a href="{{url('blog')}}">Blog</a></li>
                       
                            <li><a href="contact.html">Contact Us</a></li>
                            <li class="float-right"><a href="#" class="pl-5">Special Offer!</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- End .container -->
            </div>
            <!-- End .header-bottom -->
        </header>
        <!-- End .header -->
        @include('flash-message')

		<main class="main">
			<nav aria-label="breadcrumb" class="breadcrumb-nav">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="demo4.html"><i class="icon-home"></i></a></li>
						<li class="breadcrumb-item active" aria-current="page">Blog</li>
					</ol>
				</div><!-- End .container -->
			</nav>

			<div class="container">
				<div class="row">
					<div class="col-lg-9">
						<div class="blog-section row">
                            @foreach($blogs as $blog)
							<div class="col-md-6 col-lg-4">
								<article class="post">
									<div class="post-media">
										<a href="{{url('blog',$blog->id)}}">
											<img src="{{asset('uploads/product/'.$blog->image)}}" alt="Post" width="225"
												height="280">
										</a>
									
									</div><!-- End .post-media -->

									<div class="post-body">
										<h2 class="post-title">
											<a href="{{url('blog',$blog->id)}}">{{\Illuminate\Support\Str::of($blog->title)->words(7)}}</a>
										</h2>
										<div class="post-content">
											<p>{{\Illuminate\Support\Str::of($blog->detail)->words(15)}}...</p>
										</div><!-- End .post-content -->
                                        <strong class="testimonial-title">{{$blog->created_at->diffForHumans()}}</strong>
									</div><!-- End .post-body -->
								</article><!-- End .post -->
							</div>
                            @endforeach
						
						</div>
					</div><!-- End .col-lg-9 -->

					<div class="sidebar-toggle custom-sidebar-toggle">
						<i class="fas fa-sliders-h"></i>
					</div>
					<div class="sidebar-overlay"></div>
					<aside class="sidebar mobile-sidebar col-lg-3">
						<div class="sidebar-wrapper" data-sticky-sidebar-options='{"offsetTop": 72}'>
							<div class="widget widget-categories">
								<h4 class="widget-title">Blog Categories</h4>

								<ul class="list">
									
									<li><a href="#">TV &amp; Accessories</a></li>
									<li><a href="#">Fridges</a></li>
									<li><a href="#">Sound Systems</a></li>
									<li><a href="#">Cookers &amp; Microwave</a></li>
								</ul>
							</div><!-- End .widget -->

							<div class="widget widget-post">
								<h4 class="widget-title">Recent Posts</h4>

								<ul class="simple-post-list">
									<li>
										<div class="post-media">
											<a href="single.html">
												<img src="asseti/images/blog/widget/post-1.jpg" alt="Post">
											</a>
										</div><!-- End .post-media -->
										<div class="post-info">
											<a href="single.html">Top New Collection</a>
											<div class="post-meta">February 26, 2018</div>
											<!-- End .post-meta -->
										</div><!-- End .post-info -->
									</li>

									<li>
										<div class="post-media">
											<a href="single.html">
												<img src="asseti/images/blog/widget/post-2.jpg" alt="Post">
											</a>
										</div><!-- End .post-media -->
										<div class="post-info">
											<a href="single.html">Fashion Trends</a>
											<div class="post-meta">February 26, 2018</div><!-- End .post-meta -->
										</div><!-- End .post-info -->
									</li>
								</ul>
							</div><!-- End .widget -->

							<div class="widget">
								<h4 class="widget-title">Tags</h4>

								<div class="tagcloud">
									<a href="#">ARTICLES</a>
									<a href="#">CHAT</a>
								</div><!-- End .tagcloud -->
							</div><!-- End .widget -->
						</div><!-- End .sidebar-wrapper -->
					</aside><!-- End .col-lg-3 -->
				</div><!-- End .row -->
			</div><!-- End .container -->
		</main><!-- End .main -->

	@include('cPartials.footerOne')
				<!-- End .footer -->
	</div><!-- End .page-wrapper -->

	<div class="loading-overlay">
		<div class="bounce-loader">
			<div class="bounce1"></div>
			<div class="bounce2"></div>
			<div class="bounce3"></div>
		</div>
	</div>

	<div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

	<div class="mobile-menu-container">
		<div class="mobile-menu-wrapper">
			<span class="mobile-menu-close"><i class="fa fa-times"></i></span>
		    <nav class="mobile-nav">
                <ul class="mobile-menu menu-with-icon">
                    <li><a href="demo1.html">Home</a></li>
                    <li>
                        <a href="{{url('shop')}}" class="sf-with-ul">Categories</a>
                        <ul>
                        @foreach($categories as $category)
                            <li><a href="{{url('Shop',$category->id)}}">{{$category->category_name}}</a></li>
                        @endforeach
                        </ul>
                    </li>
                 
                 
                    <li><a href="blog.html">Blog</a></li>
                </ul>

                <ul class="mobile-menu">
                    <li><a href="login.html">My Account</a></li>
                    <li><a href="demo1-contact.html">Contact Us</a></li>
                    <li><a href="{{url('shop')}}">Shop</a></li>
                    <li><a href="{{url('cart')}}">Cart</a></li>
                    <li><a href="login.html" class="login-link">Log In</a></li>
                </ul>
            </nav>

			<form class="search-wrapper mb-2" action="#">
				<input type="text" class="form-control mb-0" placeholder="Search..." required />
				<button class="btn icon-search text-white bg-transparent p-0" type="submit"></button>
			</form>

			<div class="social-icons">
				<a href="#" class="social-icon social-facebook icon-facebook" target="_blank">
				</a>
				<a href="#" class="social-icon social-twitter icon-twitter" target="_blank">
				</a>
				<a href="#" class="social-icon social-instagram icon-instagram" target="_blank">
				</a>
			</div>
		</div><!-- End .mobile-menu-wrapper -->
	</div><!-- End .mobile-menu-container -->

    @include('cPartials.stickyNav')




	<a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

	<!-- Plugins JS File -->
	<script data-cfasync="false" src="https://portotheme.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="asseti/js/jquery.min.js"></script>
	<script src="{{asset('asseti/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('asseti/js/plugins.min.js')}}"></script>

	<!-- Main JS File -->
	<script src="{{asset('asseti/js/main.min.js')}}"></script>
</body>


<!-- Mirrored from portotheme.com/html/porto_ecommerce/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 May 2025 11:31:59 GMT -->
</html>