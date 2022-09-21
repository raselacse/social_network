<div class="topbar stick">
		<div class="logo">
			<!-- <a title="" href="newsfeed.html"><img src="{{asset('public/frontend/images/Logos.png')}}" alt="logo"></a> -->
			<a title="" href="newsfeed.html">City University</a>
		</div>
		
		<div class="top-area">			
			<ul class="main-menu">
				<li>
					<a href="{{route('frontend.index')}}" title="">Home</a>					
				</li>
				<li>
					<a href="#" title="">Library</a>					
				</li>				
			</ul>
			<ul class="setting-area">
				<li>
					<a href="#" title="Home" data-ripple=""><i class="ti-search"></i></a>
					<div class="searched">
						<form method="post" class="form-search">
							<input type="text" placeholder="Search Friend">
							<button data-ripple><i class="ti-search"></i></button>
						</form>
					</div>
				</li>
				<li>
					<a href="#" title="Notification" data-ripple="">
						<i class="ti-bell"></i><span>20</span>
					</a>
				</li>
				<li>
					<a href="#" title="Messages" data-ripple=""><i class="ti-comment"></i><span>12</span></a>
				</li>
			</ul>
			<div class="user-img">
				<img src="{{asset('public/frontend/images/resources/admin.png')}}" alt="">
				<span class="status f-online"></span>
				<div class="user-setting">
					<a href="{{route('frontend.timeline')}}" title=""><i class="ti-user"></i> view profile</a>
					<a href="{{route('frontend.timeline')}}" title=""><i class="ti-pencil-alt"></i>edit profile</a>
					<a href="#" title=""><i class="ti-target"></i>activity log</a>
					<a href="#" title=""><i class="ti-settings"></i>account setting</a>
					<a href="{{ URL::to('logout') }}" title=""><i class="ti-power-off"></i>Logout</a>
				</div>
			</div>
			<span class="ti-menu main-menu" data-ripple=""></span>
		</div>
	</div>
	