@extends('frontend.layouts.app')

@section('title', app_name() . ' | '.__('navs.general.home'))

@section('content')


<div class="page-header">
			<div class="container">
				<div class="breadcrumbs">
					<ul class="list-unstyled">
						<li><a href="/">Home</a></li>					
						<li>{{ $event->name }}</li>
					</ul>
				</div> <!-- end .breadcrumbs -->
			</div> <!-- end .container -->
		</div> <!-- end .page-header -->

		<div class="section light">
			<div class="inner">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<div class="directory-single-info">
								<h2>{{ $event->name}} <img src="{{asset('images/heading.png') }}" alt="icon"></h2>
								<p>{{ $event->source}} </p>
								<ul class="meta list-unstyled">
									<li><img src="{{asset('images/location.png') }}" alt="icon">Leonard St , NewYork</li>
									<li><img src="{{asset('images/phone.png') }}" alt="icon">+84 987654321</li>
									<li>
										<div class="social">
											<a href="#"><img src="{{asset('images/facebook.png') }}" alt="facebook"></a>
											<a href="#"><img src="{{asset('images/twitter.png') }}" alt="twitter"></a>
											<a href="#"><img src="{{asset('images/google-plus.png') }}" alt="google plus"></a>
										</div> <!-- end .social -->
									</li>
									<li><div class="rating">4.0</div><div class="number-of-ratings">( <span>3</span> )</div></li>
								</ul>
								<a href="" target="_blank" class="link"><img src="{{asset('images/link.png') }}" alt="icon">themeforest.net/user/wecookcode/portfolio</a>
								<div class="buttons">					
								<button
									class="snipcart-add-item button"
									data-item-id="{{$event->id}}"
									data-item-name="{{$event->name}}"
									data-item-price="{{$event->cost}}"
									data-item-url="http://myapp.com/products/bacon"
									data-item-description="{{$event->body}}">
									Buy Now
								</button>												
									<div class=" share-button">										
										<div class="social">
											<a href="#"><img src="{{asset('images/facebook.png') }}" alt="facebook"></a>
											<a href="#"><img src="{{asset('images/twitter.png') }}" alt="twitter"></a>
											<a href="#"><img src="{{asset('images/google-plus.png') }}" alt="google plus"></a>											
										</div> <!-- end .social -->
									</div>
								</div> <!-- end .buttons -->
							</div> <!-- end .directory-single-info -->
						</div> <!-- end .col-md-8 -->
						<div class="col-md-4">
							<div class="single-map" id="single-map"></div>
						</div> <!-- end .col-md-4 -->
					</div> <!-- end .row -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

		<div class="directory-single-slider-wrapper">
			<div class="directory-single-slider">
				<img src="{{asset('images/directory-single-slider01.jpg') }}" alt="image" class="img-responsive">
				<img src="{{asset('images/directory-single-slider02.jpg') }}" alt="image" class="img-responsive">
				<img src="{{asset('images/directory-single-slider03.jpg') }}" alt="image" class="img-responsive">
				<img src="{{asset('images/directory-single-slider04.jpg') }}" alt="image" class="img-responsive">
			</div> <!-- end .directory-single-slider -->
			<div class="sliderNav">
				<div class="container">
					<div id="customNav"></div>
				</div> <!-- end .container -->
			</div> <!-- end .sliderNav -->
		</div> <!-- end .directory-single-slider-wrapper -->

		<div class="section light">
			<div class="inner">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<div class="directory-single">
								<p>{{$event->body}}</p>								
								<div class="tags">
									<div class="tag"><img src="{{ asset('images/tag01.png') }}" alt="tag">Accepts Credit Cards</div>
									<div class="tag"><img src="{{ asset('images/tag02.png') }}" alt="tag">Parking Street</div>
									<div class="tag"><img src="{{ asset('images/tag03.png') }}" alt="tag">Pets Friendly</div>
									<div class="tag"><img src="{{ asset('images/tag04.png') }}" alt="tag">Bike Parking</div>
									<div class="tag"><img src="{{ asset('images/tag05.png') }}" alt="tag">Wireless Internet</div>
								</div> <!-- end .tags -->
							</div> <!-- end .directory-single -->
							
							
						</div> <!-- end .col-md-8 -->
						<div class="col-md-4">
							<div class="sidebar-widget">
								<div class="category"><h5><img src="{{ asset('images/cutlery.png') }}" alt="icon">Cutlery</h5><h5><img src="{{ asset('images/wine.png') }}" alt="icon">Bar</h5></div>
							</div> <!-- end .sidebar-widget -->
							<div class="sidebar-widget">
								<h5><img src="{{ asset('images/clock.png') }}" alt="icon">Schedule</h5>
								<div class="hours clearfix">
									<div class="left">{{ $event->start}}</div>
									<div class="right">{{ $event->end}}</div>
								</div> <!-- end .hours -->
							</div> <!-- end .sidebar-widget -->
							<div class="sidebar-widget">
								<h5><img src="{{ asset('images/email.png') }}" alt="icon">Contact Us</h5>
								<form action="{{ url('events/')}}" method="post" id="contact-form" class="contact-form">
									<div class="form-group">
										<input type="text" id="contact-name" name="contact-name" placeholder="Your Name" required>
									</div> <!-- end .form-group -->
									<div class="form-group">
										<input type="email" id="contact-email" name="contact-email" placeholder="Your Email" required>
									</div> <!-- end .form-group -->
									<div class="form-group">
										<input type="text" id="contact-subject" name="contact-subject" placeholder="Subject">
									</div> <!-- end .form-group -->
									<div class="form-group">
										<textarea name="contact-message" id="contact-message" required rows="3" placeholder="Your message here ..."></textarea>
									</div> <!-- end .form-group -->
									<div class="clearfix"><button type="submit" class="button">Submit</button></div>
								</form>
							</div> <!-- end .sidebar-widget -->
							
						</div> <!-- end .col-md-4 -->
					</div> <!-- end .row -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

@endsection
