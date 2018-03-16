@extends('frontend.layouts.app')

@section('title', app_name() . ' | '.__('navs.general.home'))

@section('content')
<div class="section large transparent dark text-center" style="background-image: url('https://d1zzxdyvtq79bu.cloudfront.net/uploads/images/landings/c0/f1/coventry-s-beautiful-skyline-takeachef.co.uk.jpg');">
			<div class="inner">
				<div class="container">
					<h1>Discover Coventry</h1>
					<p class="lead">Find Events in your area.</p>

					<form action="{{url()->full()}}/search" method="post" role="search">
					{!! csrf_field() !!}
						<div class="row">
							<div class="col-sm-4">
								<div class="form-group">
									<input name="q" id="q" type="text" placeholder="What are you looking for ?">
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
					<h2 class="text-center">What are you interested in?<small>Explore some of the events from around the city from our partners and friends.</small></h2>
					<div class="row">
						<div class="col-md-3 col-sm-6">
							<a href="#" class="category-box" style="background-image: url('http://via.placeholder.com/225x225');">
								<div class="inner">
									<img src="images/category-icon01.png" alt="icon">
									<span class="number">8</span>
									<span class="title">Music</span>
								</div> <!-- end .inner -->
							</a> <!-- end .category-box -->
						</div> <!-- end .col-md-3 -->
						<div class="col-md-3 col-sm-6">
							<a href="#" class="category-box" style="background-image: url('http://via.placeholder.com/225x225');">
								<div class="inner">
									<img src="images/category-icon02.png" alt="icon">
									<span class="number">36</span>
									<span class="title">Random</span>
								</div> <!-- end .inner -->
							</a> <!-- end .category-box -->
						</div> <!-- end .col-md-3 -->
						<div class="col-md-3 col-sm-6">
							<a href="#" class="category-box" style="background-image: url('http://via.placeholder.com/225x225');">
								<div class="inner">
									<img src="images/category-icon03.png" alt="icon">
									<span class="number">26</span>
									<span class="title">Random</span>
								</div> <!-- end .inner -->
							</a> <!-- end .category-box -->
						</div> <!-- end .col-md-3 -->
						<div class="col-md-3 col-sm-6">
							<a href="#" class="category-box" style="background-image: url('http://via.placeholder.com/225x225');">
								<div class="inner">
									<img src="images/category-icon04.png" alt="icon">
									<span class="number">16</span>
									<span class="title">Random</span>
								</div> <!-- end .inner -->
							</a> <!-- end .category-box -->
						</div> <!-- end .col-md-3 -->
						<div class="col-sm-6">
							<a href="#" class="category-box" style="background-image: url('http://via.placeholder.com/225x225');">
								<div class="inner">
									<img src="images/category-icon05.png" alt="icon">
									<span class="number">12</span>
									<span class="title">Random</span>
								</div> <!-- end .inner -->
							</a> <!-- end .category-box -->
						</div> <!-- end .col-sm-6 -->
						<div class="col-md-3 col-sm-6">
							<a href="#" class="category-box" style="background-image: url('ihttp://via.placeholder.com/225x225');">
								<div class="inner">
									<img src="images/category-icon06.png" alt="icon">
									<span class="number">4</span>
									<span class="title">Random</span>
								</div> <!-- end .inner -->
							</a> <!-- end .category-box -->
						</div> <!-- end .col-md-3 -->
						<div class="col-md-3 col-sm-6">
							<a href="#" class="category-box" style="background-image: url('http://via.placeholder.com/225x225');">
								<div class="inner">
									<img src="images/category-icon07.png" alt="icon">
									<span class="number">39</span>
									<span class="title">Random</span>
								</div> <!-- end .inner -->
							</a> <!-- end .category-box -->
						</div> <!-- end .col-md-3 -->
					</div> <!-- end .row -->
					<div class="text-center">
						<a href="{{ route('events.all')}}" class="button">All Events</a>
					</div> <!-- end .text-center -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

		<div class="section white">
			<div class="inner">
				<div class="container-fluid">
					<h2 class="text-center">Best Events in the City</h2>
					<div class="directory-slider">
						<div class="directory-item">
							<img src="http://via.placeholder.com/350x500" alt="bg" class="img-responsive">
							<div class="overlay"></div>
							<div class="rating">4.0</div>
							<a href="#" class="wishlist"><img src="images/directory-heart.png" alt="wishlist"></a>
							<div class="content">
								<h3><a href="#">Random</a></h3>
								<p>Random</p>
								<div class="location"><img src="images/directory-location.png" alt="location">Random</div>
							</div> <!-- end .content -->
							<div class="category">
								<a href="#"><img src="images/directory-category-food.png" alt="food"></a>
								<a href="#"><img src="images/directory-category-drink.png" alt="drink"></a>
							</div> <!-- end .category -->
						</div> <!-- end .directory-item -->
						<div class="directory-item">
							<img src="http://via.placeholder.com/350x500" alt="bg" class="img-responsive">
							<div class="overlay"></div>
							<div class="rating">4.0</div>
							<a href="#" class="wishlist"><img src="images/directory-heart.png" alt="wishlist"></a>
							<div class="content">
								<h3><a href="#">Random</a></h3>
								<p>Random</p>
								<div class="location"><img src="images/directory-location.png" alt="location">Random</div>
							</div> <!-- end .content -->
							<div class="category">
								<a href="#"><img src="images/directory-category-food.png" alt="food"></a>
								<a href="#"><img src="images/directory-category-drink.png" alt="drink"></a>
							</div> <!-- end .category -->
						</div> <!-- end .directory-item -->
						<div class="directory-item">
							<img src="http://via.placeholder.com/350x500" alt="bg" class="img-responsive">
							<div class="overlay"></div>
							<div class="rating">4.0</div>
							<a href="#" class="wishlist"><img src="images/directory-heart.png" alt="wishlist"></a>
							<div class="content">
								<h3><a href="#">Random</a></h3>
								<p>Random</p>
								<div class="location"><img src="images/directory-location.png" alt="location">Random</div>
							</div> <!-- end .content -->
							<div class="category">
								<a href="#"><img src="images/directory-category-food.png" alt="food"></a>
								<a href="#"><img src="images/directory-category-drink.png" alt="drink"></a>
							</div> <!-- end .category -->
						</div> <!-- end .directory-item -->
						<div class="directory-item">
							<img src="http://via.placeholder.com/350x500" alt="bg" class="img-responsive">
							<div class="overlay"></div>
							<div class="rating">4.0</div>
							<a href="#" class="wishlist"><img src="images/directory-heart.png" alt="wishlist"></a>
							<div class="content">
								<h3><a href="#">Random</a></h3>
								<p>Random</p>
								<div class="location"><img src="images/directory-location.png" alt="location">Random</div>
							</div> <!-- end .content -->
							<div class="category">
								<a href="#"><img src="images/directory-category-food.png" alt="food"></a>
								<a href="#"><img src="images/directory-category-drink.png" alt="drink"></a>
							</div> <!-- end .category -->
						</div> <!-- end .directory-item -->
						<div class="directory-item">
							<img src="http://via.placeholder.com/350x500" alt="bg" class="img-responsive">
							<div class="overlay"></div>
							<div class="rating">4.0</div>
							<a href="#" class="wishlist"><img src="images/directory-heart.png" alt="wishlist"></a>
							<div class="content">
								<h3><a href="#">Random</a></h3>
								<p>Random</p>
								<div class="location"><img src="images/directory-location.png" alt="location">Random</div>
							</div> <!-- end .content -->
							<div class="category">
								<a href="#"><img src="images/directory-category-food.png" alt="food"></a>
								<a href="#"><img src="images/directory-category-drink.png" alt="drink"></a>
							</div> <!-- end .category -->
						</div> <!-- end .directory-item -->
						<div class="directory-item">
							<img src="http://via.placeholder.com/350x500" alt="bg" class="img-responsive">
							<div class="overlay"></div>
							<div class="rating">4.0</div>
							<a href="#" class="wishlist"><img src="images/directory-heart.png" alt="wishlist"></a>
							<div class="content">
								<h3><a href="#">Random</a></h3>
								<p>Random</p>
								<div class="location"><img src="images/directory-location.png" alt="location">Random</div>
							</div> <!-- end .content -->
							<div class="category">
								<a href="#"><img src="images/directory-category-food.png" alt="food"></a>
								<a href="#"><img src="images/directory-category-drink.png" alt="drink"></a>
							</div> <!-- end .category -->
						</div> <!-- end .directory-item -->
						
					</div> <!-- end .directory-slider -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

		

		<div class="section dark">
			<div class="inner">
				<div class="container">
					<h2 class="text-center">Latest Events</h2>
					<div class="row">
						<div class="col-md-4 col-sm-6">
							<div class="blog-post quote">
								<img src="http://via.placeholder.com/350x450" alt="image" class="img-responsive">
								<div class="overlay"></div>
								<div class="avatar"><img src="http://via.placeholder.com/50x50" alt="author"></div>
								<div class="type"><img src="images/blog-category-quote.png" alt="quote"></div>
								<div class="content">
									<p>Random</p>
									<h3><a href="#">Random</a></h3>
									<div class="meta">July 09, 2016 - <a href="#">Random</a></div>
								</div> <!-- end .content -->
							</div> <!-- end .blog-post -->
						</div> <!-- end .col-md-4 -->
						<div class="col-md-4 col-sm-6">
							<div class="blog-post gallery">
								<div class="blog-gallery">
									<div><img src="http://via.placeholder.com/350x450" alt="image" class="img-responsive"></div>
									<div><img src="http://via.placeholder.com/350x450" alt="image" class="img-responsive"></div>
									<div><img src="http://via.placeholder.com/350x450" alt="image" class="img-responsive"></div>
								</div> <!-- end .blog-gallery -->
								<div class="overlay"></div>
								<div class="avatar"><img src="http://via.placeholder.com/50x50" alt="author"></div>
								<div class="type"><img src="images/blog-category-gallery.png" alt="gallery"></div>
								<div class="content">
								<p>Random</p>
									<h3><a href="#">Random</a></h3>
									<div class="meta">July 09, 2016 - <a href="#">Random</a></div>
								</div> <!-- end .content -->
							</div> <!-- end .blog-post -->
						</div> <!-- end .col-md-4 -->
						<div class="col-md-4 col-sm-6">
							<div class="blog-post gallery">
								<div class="blog-gallery">
									<div><img src="http://via.placeholder.com/350x450" alt="image" class="img-responsive"></div>
									<div><img src="http://via.placeholder.com/350x450" alt="image" class="img-responsive"></div>
									<div><img src="http://via.placeholder.com/350x450" alt="image" class="img-responsive"></div>
								</div> <!-- end .blog-gallery -->
								<div class="overlay"></div>
								<div class="avatar"><img src="http://via.placeholder.com/50x50" alt="author"></div>
								<div class="type"><img src="images/blog-category-gallery.png" alt="gallery"></div>
								<div class="content">
								<p>Random</p>
									<h3><a href="#">Random</a></h3>
									<div class="meta">July 09, 2016 - <a href="#">Random</a></div>
								</div> <!-- end .content -->
							</div> <!-- end .blog-post -->
						</div> <!-- end .col-md-4 -->
					</div> <!-- end .row -->
					<div class="blog-view-more"><a href="#" class="button">View All</a></div>
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
