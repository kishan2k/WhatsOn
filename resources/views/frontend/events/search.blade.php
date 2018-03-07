@extends('frontend.layouts.app')

@section('title', app_name() . ' | '.__('navs.general.home'))

@section('content')

    @if(isset($events))

		<div class="page-title" style="">
			<div class="inner">
				<h2>Your Search Results For "{{ $q }}"									
				</h2>

			</div> <!-- end .inner -->
		</div> <!-- end .page-title -->

		

		@endif
		<div class="section boxed-section light">
			<div class="inner">
				<div class="container">
					<div class="box transparent">
						<div class="row">
							<div class="col-md-4">
								<div class="shop-sidebar">
									<div class="sidebar-widget">
										<select class="selectpicker" data-live-search="true">
											<option>Default sorting</option>
											<option>High to Low</option>
										</select>
									</div> <!-- end .sidebar-widget -->
									<div class="sidebar-widget">
										<h5>Search Products</h5>
										<form class="searchform" action="{{url('/search')}}" method="post" role="search">
										{{ csrf_field() }}
											<input type="q" name="q" id="q" placeholder="Type here ..." value="{{$q}}" >
											<button><i class="pe-7s-search"></i></button>
										</form>
									</div> <!-- end .sidebar-widget -->
									<div class="sidebar-widget">
										<h5>Product Categories</h5>
										<div class="categories">
											<a href="#" class="active">All<i class="pe-7s-right-arrow"></i></a>
											<a href="#">Food & Drink<i class="pe-7s-right-arrow"></i></a>
											<a href="#">Entertainment<i class="pe-7s-right-arrow"></i></a>
											<a href="#">Hotel<i class="pe-7s-right-arrow"></i></a>
											<a href="#">Outdoor<i class="pe-7s-right-arrow"></i></a>
											<a href="#">Nightlife<i class="pe-7s-right-arrow"></i></a>
											<a href="#">Visit<i class="pe-7s-right-arrow"></i></a>
											<a href="#">Shop<i class="pe-7s-right-arrow"></i></a>
										</div>
									</div> <!-- end .sidebar-widget -->
									<div class="sidebar-widget text-center">
										<h5>Filter By Price</h5>
										<div class="price-slider"><div id="price-slider"></div></div>
										<div class="price-slider-value">Price:<span class="price">$<span id="price-min"></span></span>—<span class="price">$<span id="price-max"></span></span></div>
										<a href="#" class="button">Filter</a>
									</div> <!-- end .sidebar-widget -->
									<div class="sidebar-widget">
										<h5>Feature Products</h5>
										<div class="featured-product clearfix">
											<a href="#"><img src="images/featured-product01.jpg" alt="image"></a>
											<div class="content">
												<p class="title"><a href="#">Sweet Cupcakes</a></p>
												<p class="price">$9.00</p>
											</div> <!-- end .content -->
										</div> <!-- end .featured-product -->										
									</div> <!-- end .sidebar-widget -->
								</div> <!-- end .shop-sidebar -->
							</div> <!-- end .col-md-4 -->
							<div class="col-md-8">
								<div class="row products">
								@foreach($events as $event)
									<div class="col-sm-6">
										<div class="product">
											<img src="{{ $event->image_url }}" alt="image" class="img-responsive">
											<div class="overlay"></div>
											<div class="content">
												<h3><a href="#">{{ $event->name }}</a></h3>
												<p>£{{$event->cost}}</p>
											</div> <!-- end .content -->
											<div class="product-label"><span>New</span></div>
											<a href="{{ url('event', [$event->id]) }}" class="button">View</a>
										</div> <!-- end .product -->
									</div> <!-- end .col-sm-6 -->
								@endforeach									
								</div> <!-- end .row -->
							</div> <!-- end .col-md-8 -->
						</div> <!-- end .row -->
						<div class="text-center">
							<a href="" id="products-load-more" class="button">Load More</a>
						</div> <!-- end .blog-load-more -->
					</div> <!-- end .box -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->
		@endsection
