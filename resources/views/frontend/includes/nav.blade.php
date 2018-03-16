<header class="header {{ Request::path() == '/' ? 'fixed' : '' }} clearfix">
			<div class="left">
				<div class="logo"><a href="{{ route('frontend.index') }}"><img src="{{ asset('images/logo.png') }}" alt="{{ app_name() }}" class="img-responsive"></a></div> <!-- end .logo -->
				<form class="header-search" action="{{url('/search')}}" method="post" role="search">
				{{ csrf_field() }}
					<input type="q"  name="q" id="q" placeholder="I’m searching for ...">
					<button type="submit"><i class="pe-7s-search"></i></button>
				</form>
			</div> <!-- end .left -->
			<div class="navigation clearfix">
				<nav class="main-nav">
					<ul class="list-unstyled">
						<li class="menu-item">
							<a href="{{ route('events.all') }}">All Events</a>
						</li>
						<li class="menu-item">
							<a href="{{ route('events.faq') }}">FAQ</a>							
						</li>
						
					</ul>
				</nav> <!-- end .main-nav -->
				<a href="#" class="responsive-menu-open"><i class="fa fa-bars"></i></a>
			</div> <!-- end .navigation -->
			<div class="right">                
                @auth
                <div class="user">
					
					<a href="{{ route('frontend.user.account') }}"><div class="avatar"><img src="http://via.placeholder.com/60x60" alt="avatar"></div></a>

					{{ auth()->user()->name }}    <a href="{{route('frontend.auth.logout')}}"class="button ">Log Out</a>
				</div>
                @endauth
                @guest
                <a href="#" class="button border">Add Listing</a>
                <a href="{{route('frontend.auth.login')}}" class="button ">Log In</a>
                @endguest
                
			</div> <!-- end .left -->
		</header> <!-- end .header -->
        <div class="responsive-menu">
			<a href="#" class="responsive-menu-close"><i class="fa fa-times"></i></a>
			<nav class="responsive-nav"></nav> <!-- end .responsive-nav -->
		</div> <!-- end .responsive-menu -->