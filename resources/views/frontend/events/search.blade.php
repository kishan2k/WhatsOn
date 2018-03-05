@extends('frontend.layouts.app')

@section('title', app_name() . ' | '.__('navs.general.home'))

@section('content')

<div class="container">
    @if(isset($details))
        <p> The Search results for your query <b> {{ $query }} </b> are :</p>
    <h2>Sample User details</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $event)
            <tr>
                <td>{{$event->name}}</td>
                <td>{{$event->slug}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>


	<div class="page-header">
			<div class="container">
				<div class="breadcrumbs">
					<ul class="list-unstyled">
						<li><a href="index.html">Home</a></li>
						<li>Event</li>
					</ul>
				</div> <!-- end .breadcrumbs -->
			</div> <!-- end .container -->
		</div> <!-- end .page-header -->

		<div class="page-title" style="background-image: url('images/background14.jpg');">
			<div class="inner">
				<h2>Articles & Tips </h2>
				<p>Browse the latest articles and tips from our blog.</p>
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
									<img src="images/blog-post05.jpg" alt="image" class="img-responsive">
									<div class="overlay"></div>
									<div class="avatar"><img src="images/blog-author04.jpg" alt="author"></div>
									<div class="content">
										<p>By {{$event->source}}</p>
										<h3><a href="#">{{$event->name}}</a></h3>
										<div class="meta">July 09, 2016 - <a href="#">Travelling</a></div>
									</div> <!-- end .content -->
								</div> <!-- end .blog-post -->
                            </div> <!-- end .col-md-4 -->
                        @endforeach
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
						</div> <!-- end .row -->
						<div class="text-center">
							<a href="#" id="blog-load-more" class="button">LOAD MORE</a>
						</div> <!-- end .blog-load-more -->
					</div> <!-- end .box -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

@endsection
