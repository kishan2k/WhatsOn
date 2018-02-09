@extends('frontend.layouts.app')

@section('title', app_name() . ' | '.__('navs.general.home'))

@section('content')
<div class="section large transparent dark text-center" style="background-image: url('https://d1zzxdyvtq79bu.cloudfront.net/uploads/images/landings/c0/f1/coventry-s-beautiful-skyline-takeachef.co.uk.jpg');">
			<div class="inner">
				<div class="container">
					<h1>Discover Coventry</h1>
					<p class="lead">Find Events in your area.</p>
					<form>
						<div class="row">
							<div class="col-sm-4">
								<div class="form-group">
									<input type="text" placeholder="What are you looking for ?">
								</div> <!-- end .form-group -->
							</div> <!-- end .col-sm-4 -->
							<div class="col-sm-4">
								<div class="form-group">
									<input type="text" placeholder="Location">
									<i class="pe-7s-world"></i>
								</div> <!-- end .form-group -->
							</div> <!-- end .col-sm-4 -->
							<div class="col-sm-4">
								<div class="form-group">
									<select class="selectpicker" data-live-search="true">
										<option>All categories</option>
										<option>Food</option>										
									</select>
								</div> <!-- end .form-group -->
							</div> <!-- end .col-sm-4 -->
						</div> <!-- end .row -->
						<button type="submit" class="button">Search places</button>
					</form>
					<div class="highlight-slider-wrapper">
						<div class="row">
							<div class="col-md-8 col-md-offset-2">
								<p class="lead">Or browse the highlights</p>
								<div class="highlight-slider">
									<div class="item">
										<a href="#" class="icon">
											<img src="images/highlight-food.png" alt="food">
											<div class="overlay">Food</div>
										</a> <!-- end .icon -->
									</div> <!-- end .item -->
									<div class="item">
										<a href="#" class="icon">
											<img src="images/highlight-lodging.png" alt="lodging">
											<div class="overlay">Lodging</div>
										</a> <!-- end .icon -->
									</div> <!-- end .item -->
									<div class="item">
										<a href="#" class="icon">
											<img src="images/highlight-culture.png" alt="culture">
											<div class="overlay">Culture</div>
										</a> <!-- end .icon -->
									</div> <!-- end .item -->
									<div class="item">
										<a href="#" class="icon">
											<img src="images/highlight-shopping.png" alt="shopping">
											<div class="overlay">Shopping</div>
										</a> <!-- end .icon -->
									</div> <!-- end .item -->
									<div class="item">
										<a href="#" class="icon">
											<img src="images/highlight-nightlife.png" alt="nightlife">
											<div class="overlay">Nightlife</div>
										</a> <!-- end .icon -->
									</div> <!-- end .item -->
									<div class="item">
										<a href="#" class="icon">
											<img src="images/highlight-drink.png" alt="drink">
											<div class="overlay">Drink</div>
										</a> <!-- end .icon -->
									</div> <!-- end .item -->
								</div> <!-- end .highlight-slider -->
							</div> <!-- end .col-md-8 -->
						</div> <!-- end .row -->
					</div> <!-- end .highlight-slider-wrapper -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

		<div class="section light">
			<div class="inner">
				<div class="container">
					<h2 class="text-center">What are you interested in?<small>Explore some of the best tips from around the city from our partners and friends.</small></h2>
					<div class="row">
						<div class="col-md-3 col-sm-6">
							<a href="#" class="category-box" style="background-image: url('images/category01.jpg');">
								<div class="inner">
									<img src="images/category-icon01.png" alt="icon">
									<span class="number">8</span>
									<span class="title">Cinema</span>
								</div> <!-- end .inner -->
							</a> <!-- end .category-box -->
						</div> <!-- end .col-md-3 -->
						<div class="col-md-3 col-sm-6">
							<a href="#" class="category-box" style="background-image: url('images/category02.jpg');">
								<div class="inner">
									<img src="images/category-icon02.png" alt="icon">
									<span class="number">36</span>
									<span class="title">Food</span>
								</div> <!-- end .inner -->
							</a> <!-- end .category-box -->
						</div> <!-- end .col-md-3 -->
						<div class="col-md-3 col-sm-6">
							<a href="#" class="category-box" style="background-image: url('images/category03.jpg');">
								<div class="inner">
									<img src="images/category-icon03.png" alt="icon">
									<span class="number">26</span>
									<span class="title">Drink</span>
								</div> <!-- end .inner -->
							</a> <!-- end .category-box -->
						</div> <!-- end .col-md-3 -->
						<div class="col-md-3 col-sm-6">
							<a href="#" class="category-box" style="background-image: url('images/category04.jpg');">
								<div class="inner">
									<img src="images/category-icon04.png" alt="icon">
									<span class="number">16</span>
									<span class="title">Lodging</span>
								</div> <!-- end .inner -->
							</a> <!-- end .category-box -->
						</div> <!-- end .col-md-3 -->
						<div class="col-sm-6">
							<a href="#" class="category-box" style="background-image: url('images/category05.jpg');">
								<div class="inner">
									<img src="images/category-icon05.png" alt="icon">
									<span class="number">12</span>
									<span class="title">Nightlife</span>
								</div> <!-- end .inner -->
							</a> <!-- end .category-box -->
						</div> <!-- end .col-sm-6 -->
						<div class="col-md-3 col-sm-6">
							<a href="#" class="category-box" style="background-image: url('images/category06.jpg');">
								<div class="inner">
									<img src="images/category-icon06.png" alt="icon">
									<span class="number">4</span>
									<span class="title">Visit</span>
								</div> <!-- end .inner -->
							</a> <!-- end .category-box -->
						</div> <!-- end .col-md-3 -->
						<div class="col-md-3 col-sm-6">
							<a href="#" class="category-box" style="background-image: url('images/category07.jpg');">
								<div class="inner">
									<img src="images/category-icon07.png" alt="icon">
									<span class="number">39</span>
									<span class="title">Shop</span>
								</div> <!-- end .inner -->
							</a> <!-- end .category-box -->
						</div> <!-- end .col-md-3 -->
					</div> <!-- end .row -->
					<div class="text-center">
						<a href="#" class="button">All Listings</a>
					</div> <!-- end .text-center -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

		<div class="section white">
			<div class="inner">
				<div class="container-fluid">
					<h2 class="text-center">Best Things to Do in the City<small>Explore some of the best tips from around the city from our partners and friends.</small></h2>
					<div class="directory-slider">
						<div class="directory-item">
							<img src="images/directory-slider01.jpg" alt="bg" class="img-responsive">
							<div class="overlay"></div>
							<div class="rating">4.0</div>
							<a href="#" class="wishlist"><img src="images/directory-heart.png" alt="wishlist"></a>
							<div class="content">
								<h3><a href="#">Not Just Coffee</a></h3>
								<p>Suspendisse tristique orci justo</p>
								<div class="location"><img src="images/directory-location.png" alt="location">Thomas St , NewYork</div>
							</div> <!-- end .content -->
							<div class="category">
								<a href="#"><img src="images/directory-category-food.png" alt="food"></a>
								<a href="#"><img src="images/directory-category-drink.png" alt="drink"></a>
							</div> <!-- end .category -->
						</div> <!-- end .directory-item -->
						<div class="directory-item">
							<img src="images/directory-slider02.jpg" alt="bg" class="img-responsive">
							<div class="overlay"></div>
							<div class="rating">4.0</div>
							<a href="#" class="wishlist"><img src="images/directory-heart.png" alt="wishlist"></a>
							<div class="content">
								<h3><a href="#">Nunc Restaurant</a></h3>
								<p>Suspendisse tristique orci justo</p>
								<div class="location"><img src="images/directory-location.png" alt="location">Leonard St , NewYork</div>
							</div> <!-- end .content -->
							<div class="category">
								<a href="#"><img src="images/directory-category-dining.png" alt="dining"></a>
								<a href="#"><img src="images/directory-category-wine.png" alt="wine"></a>
							</div> <!-- end .category -->
						</div> <!-- end .directory-item -->
						<div class="directory-item">
							<img src="images/directory-slider03.jpg" alt="bg" class="img-responsive">
							<div class="overlay"></div>
							<div class="rating">4.0</div>
							<a href="#" class="wishlist"><img src="images/directory-heart.png" alt="wishlist"></a>
							<div class="content">
								<h3><a href="#">DJ Party</a></h3>
								<p>Suspendisse tristique orci justo</p>
								<div class="location"><img src="images/directory-location.png" alt="location">Knightsbridge 66</div>
							</div> <!-- end .content -->
							<div class="category">
								<a href="#"><img src="images/directory-category-party.png" alt="party"></a>
							</div> <!-- end .category -->
						</div> <!-- end .directory-item -->
						<div class="directory-item">
							<img src="images/directory-slider04.jpg" alt="bg" class="img-responsive">
							<div class="overlay"></div>
							<div class="rating">4.0</div>
							<a href="#" class="wishlist"><img src="images/directory-heart.png" alt="wishlist"></a>
							<div class="content">
								<h3><a href="#">Quisque Tinibus Hotel</a></h3>
								<p>Suspendisse tristique orci justo</p>
								<div class="location"><img src="images/directory-location.png" alt="location">Knightsbridge 66</div>
							</div> <!-- end .content -->
							<div class="category">
								<a href="#"><img src="images/directory-category-hotel.png" alt="hotel"></a>
							</div> <!-- end .category -->
						</div> <!-- end .directory-item -->
					</div> <!-- end .directory-slider -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

		<div class="section light transparent" style="background-image: url('images/background02.jpg');">
			<div class="inner">
				<div class="container">
					<h2 class="text-center">How it Works<small>Discover how EXploreCity can you help you find everything you want.</small></h2>
					<div class="row">
						<div class="col-sm-4">
							<div class="services">
								<img src="images/services-icon01.png" alt="icon" class="img-responsive center-block">
								<h3>Choose<br>What To Do</h3>
								<p>Looking for a cozy hotel to stay, a restaurant to eat, a museum to visit or a mall to do some shopping?</p>
								<div class="process"><i class="pe-7s-angle-right-circle"></i></div>
							</div> <!-- end .services -->
						</div> <!-- end .col-sm-4 -->
						<div class="col-sm-4">
							<div class="services">
								<img src="images/services-icon02.png" alt="icon" class="img-responsive center-block">
								<h3>Find<br>What You Want</h3>
								<p>Search and filter hundreds of listings, read reviews, explore photos and find the perfect spot.</p>
								<div class="process"><i class="pe-7s-angle-right-circle"></i></div>
							</div> <!-- end .services -->
						</div> <!-- end .col-sm-4 -->
						<div class="col-sm-4">
							<div class="services">
								<img src="images/services-icon03.png" alt="icon" class="img-responsive center-block">
								<h3>Explore<br>Amazing Places</h3>
								<p>Go and have a good time or even make a booking directly from the listing page. All of those, thanks to ExploreCity!</p>
							</div> <!-- end .services -->
						</div> <!-- end .col-sm-4 -->
					</div> <!-- end .row -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

		<div class="section dark">
			<div class="inner">
				<div class="container">
					<h2 class="text-center">Share Your Experience<small>Browse the latest articles and tips from our blog.</small></h2>
					<div class="row">
						<div class="col-md-4 col-sm-6">
							<div class="blog-post quote">
								<img src="images/blog-post01.jpg" alt="image" class="img-responsive">
								<div class="overlay"></div>
								<div class="avatar"><img src="images/blog-author01.jpg" alt="author"></div>
								<div class="type"><img src="images/blog-category-quote.png" alt="quote"></div>
								<div class="content">
									<p>By Quam Lobortis</p>
									<h3><a href="#">“Sed ut perspiciatis unde omnis iste ... ”</a></h3>
									<div class="meta">July 09, 2016 - <a href="#">Food</a></div>
								</div> <!-- end .content -->
							</div> <!-- end .blog-post -->
						</div> <!-- end .col-md-4 -->
						<div class="col-md-4 col-sm-6">
							<div class="blog-post gallery">
								<div class="blog-gallery">
									<div><img src="images/blog-post02.jpg" alt="image" class="img-responsive"></div>
									<div><img src="images/blog-post02.jpg" alt="image" class="img-responsive"></div>
									<div><img src="images/blog-post02.jpg" alt="image" class="img-responsive"></div>
								</div> <!-- end .blog-gallery -->
								<div class="overlay"></div>
								<div class="avatar"><img src="images/blog-author02.jpg" alt="author"></div>
								<div class="type"><img src="images/blog-category-gallery.png" alt="gallery"></div>
								<div class="content">
									<p>By Nam Jacinia</p>
									<h3><a href="#">Central Park Bike Rentals</a></h3>
									<div class="meta">July 07, 2016 - <a href="#">Sales</a> , <a href="#">Tips</a></div>
								</div> <!-- end .content -->
							</div> <!-- end .blog-post -->
						</div> <!-- end .col-md-4 -->
						<div class="col-md-4 col-sm-6">
							<div class="blog-post video">
								<img src="images/blog-post03.jpg" alt="image" class="img-responsive">
								<div class="overlay"></div>
								<div class="avatar"><img src="images/blog-author03.jpg" alt="author"></div>
								<div class="type"><img src="images/blog-category-video.png" alt="video"></div>
								<div class="content">
									<a href="#" class="play-video"><i class="pe-7s-play"></i></a>
									<p>By Proin Mattis</p>
									<h3><a href="#">Nightlife at NewYork</a></h3>
									<div class="meta">July 03, 2016 - <a href="#">Nightlife</a></div>
								</div> <!-- end .content -->
							</div> <!-- end .blog-post -->
						</div> <!-- end .col-md-4 -->
					</div> <!-- end .row -->
					<div class="blog-view-more"><a href="#" class="button">View All</a></div>
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

		<div class="section light">
			<div class="inner">
				<div class="container">
					<h2 class="text-center">Our Newsletter<small>Get an extra 39% off for next your holiday</small></h2>
					<form action="https://johneyboy.us7.list-manage.com/subscribe/post-json?u=3210d74dbf054134a29daf97c&amp;id=50ad235761&amp;c=?" method="get" id="mc-embedded-subscribe-form" class="newsletter-form">
						<input type="email" id="mce-EMAIL" name="EMAIL" placeholder="YourEmail@domain.com">
						<button type="submit" id="mc-embedded-subscribe" name="subscribe" class="button">Subscribe</button>
					</form>
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

		<div class="login-wrapper">
			<div class="login">
				<form>
					<div class="form-group">
						<input type="text" placeholder="Username or Email Address *">
					</div> <!-- end .form-group -->
					<div class="form-group">
						<input type="text" placeholder="Password *">
					</div> <!-- end .form-group -->
					<div class="clearfix">
						<div class="checkbox">
							<label>
								<input type="checkbox"> Remember me
							</label>
						</div>
						<a href="#" class="lost-password">Lost your password ?</a>
					</div> <!-- end .clearfix -->
					<div class="button-wrapper"><button type="submit" class="button">Login</button></div>
					<div class="text-center">
						<p>Don't have an account ? <a href="#" class="signup-open">Sign up</a></p>
						<div class="social">
							<p>Connect with Social Networks</p>
							<a href="#"><img src="images/facebook.png" alt="facebook"></a>
							<a href="#"><img src="images/twitter.png" alt="twitter"></a>
							<a href="#"><img src="images/google-plus.png" alt="google plus"></a>
						</div> <!-- end .social -->
					</div>
				</form>
			</div> <!-- end .login -->
		</div> <!-- end .login-wrapper -->
@endsection
