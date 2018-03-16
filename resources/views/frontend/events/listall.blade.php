@extends('frontend.layouts.app')

@section('title', app_name() . ' | '.__('navs.general.home'))

@section('content')

    @if(isset($events))

		<div class="page-title" style="">
			<div class="inner">
				<h2>All Events									
				</h2>

			</div> <!-- end .inner -->
		</div> <!-- end .page-title -->

		

		@endif
		<div class="section boxed-section light">
			<div class="inner">
				<div class="container">
					<div class="box transparent">
						<div class="row">							
							<div class="col-md-12">
								<div class="row products">
								@foreach($events as $event)
									<div class="col-sm-4">
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
