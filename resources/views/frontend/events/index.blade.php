@extends('frontend.layouts.app')

@section('title', app_name() . ' | '.__('navs.general.home'))

@section('content')

    @if(isset($details))

		<div class="page-title" style="">
			<div class="inner">
				<h2>Events </h2>
				<p>Browse all events</p>
			</div> <!-- end .inner -->
		</div> <!-- end .page-title -->

		<div class="section boxed-section light">
			<div class="inner">
				<div class="container">
					<div class="box transparent blog-grid">					
						<div class="row">
                        @foreach($details as $event)
							<div class="col-md-4 col-sm-6">
								<div class="blog-post image">
									<img src="{{ $event->image_url}}" alt="image" class="img-responsive" style="max-width: 420px,max-height: 594px">
									<div class="overlay"></div>									
									<div class="content">
										<p>By {{$event->source}}</p>
										<h3><a href="{{ url('event', [$event->id]) }}">{{$event->name}}</a></h3>
										<div class="meta">{{ Carbon\Carbon::parse($event->start)->format('d-m-Y h:i') }} - {{ Carbon\Carbon::parse($event->end)->format(' h:i') }}</div>
									</div> <!-- end .content -->
								</div> <!-- end .blog-post -->
                            </div> <!-- end .col-md-4 -->
                        @endforeach
							<div class="col-md-4 col-sm-6">
								<div class="blog-post gallery">
									<div class="blog-gallery">
										<div><img src="{{url('images/blog-post02.jpg')}}" alt="image" class="img-responsive"></div>
										<div><img src="{{url('images/blog-post02.jpg')}}" alt="image" class="img-responsive"></div>
										<div><img src="{{url('images/blog-post02.jpg')}}" alt="image" class="img-responsive"></div>
									</div> <!-- end .blog-gallery -->
									<div class="overlay"></div>
									<div class="avatar"><img src="{{url('images/blog-author02.jpg')}}" alt="author"></div>
									<div class="type"><img src="{{url('images/blog-category-gallery.png')}}" alt="gallery"></div>
									<div class="content">
										<p>By Nam Jacinia</p>
										<h3><a href="#">Central Park Bike Rentals</a></h3>
										<div class="meta">July 07, 2016 - <a href="#">Sales</a> , <a href="#">Tips</a></div>
									</div> <!-- end .content -->
								</div> <!-- end .blog-post -->
							</div> <!-- end .col-md-4 -->													
						</div> <!-- end .row -->
						<div class="text-center">
							<a href="#" id="blog-load-more" class="button">LOAD MORE</a>
						</div> <!-- end .blog-load-more -->
					</div> <!-- end .box -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->
		@endif
@endsection
