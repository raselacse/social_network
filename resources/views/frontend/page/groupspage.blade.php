@extends('frontend.index')

@section('header')
<section>
		<div class="feature-photo">
			<figure><img src="{{asset('public/frontend/images/resources/timeline-1.jpg')}}" alt=""></figure>
			<div class="add-btn">
				<a href="#" title="" data-ripple="">Followers</a>
			</div>
			<form class="edit-phto">
				<i class="fa fa-camera-retro"></i>
				<label class="fileContainer">
					Edit Cover Photo
				<input type="file"/>
				</label>
			</form>
			<div class="container-fluid">
				<div class="row merged">
					<div class="col-lg-2 col-sm-3">
						<div class="user-avatar">
							<figure>
								<img src="{{asset('public/frontend/images/resources/unknown.png')}}" alt="">
								<form class="edit-phto">
									<i class="fa fa-camera-retro"></i>
									<label class="fileContainer">
										Edit Display Photo
										<input type="file"/>
									</label>
								</form>
							</figure>
						</div>
					</div>
					<div class="col-lg-10 col-sm-9">
						<div class="timeline-info">
							<ul>
								<li class="admin-name">
								  <h5>Ema Watson</h5>
								  <span>Group Admin</span>
								</li>
								<li>
									<a class="" href="{{route('frontend.timeline')}}" title="" data-ripple="">time line</a>
									<a class="" href="{{route('frontend.photopage')}}" title="" data-ripple="">Photos</a>
									<a class="" href="{{route('frontend.videospage')}}" title="" data-ripple="">Videos</a>
									<a class="" href="{{route('frontend.friendspage')}}" title="" data-ripple="">Followers</a>
									<a class="active" href="{{route('frontend.groupspage')}}" title="" data-ripple="">Groups</a>
									<a class="" href="{{route('frontend.aboutpage')}}" title="" data-ripple="">about</a>
									
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- top area -->

@endsection


@section('content')
<div class="col-lg-6">
								<div class="central-meta">
									<div class="groups">
										<span><i class="fa fa-users"></i> Joined Groups</span>
									</div>
									<ul class="nearby-contct">
										<li>
											<div class="nearly-pepls">
												<figure>
													<a href="time-line.html" title=""><img src="{{asset('public/frontend/images/resources/unknown.png')}}" alt=""></a>
												</figure>
												<div class="pepl-info">
													<h4><a href="time-line.html" title="">funparty</a></h4>
													<span>public group</span>
													<em>32k Members</em>
													<a href="#" title="" class="add-butn" data-ripple="">leave group</a>
												</div>
											</div>
										</li>
										<li>
											<div class="nearly-pepls">
												<figure>
												<a href="time-line.html" title=""><img src="{{asset('public/frontend/images/resources/unknown.png')}}" alt=""></a>
												</figure>
												<div class="pepl-info">
													<h4><a href="time-line.html" title="">funparty</a></h4>
													<span>public group</span>
													<em>32k Members</em>
													<a href="#" title="" class="add-butn" data-ripple="">leave group</a>
												</div>
											</div>
										</li>
										<li>
											<div class="nearly-pepls">
												<figure>
												<a href="time-line.html" title=""><img src="{{asset('public/frontend/images/resources/unknown.png')}}" alt=""></a>
												</figure>
												<div class="pepl-info">
													<h4><a href="time-line.html" title="">funparty</a></h4>
													<span>public group</span>
													<em>32k Members</em>
													<a href="#" title="" class="add-butn" data-ripple="">leave group</a>
												</div>
											</div>
										</li>
										<li>
											<div class="nearly-pepls">
												<figure>
												<a href="time-line.html" title=""><img src="{{asset('public/frontend/images/resources/unknown.png')}}" alt=""></a>
												</figure>
												<div class="pepl-info">
													<h4><a href="time-line.html" title="">funparty</a></h4>
													<span>public group</span>
													<em>32k Members</em>
													<a href="#" title="" class="add-butn" data-ripple="">leave group</a>
												</div>
											</div>
										</li>
										<li>
											<div class="nearly-pepls">
												<figure>
												<a href="time-line.html" title=""><img src="{{asset('public/frontend/images/resources/unknown.png')}}" alt=""></a>
												</figure>
												<div class="pepl-info">
													<h4><a href="time-line.html" title="">funparty</a></h4>
													<span>public group</span>
													<em>32k Members</em>
													<a href="#" title="" class="add-butn" data-ripple="">leave group</a>
												</div>
											</div>
										</li>
									</ul>
									<div class="lodmore"><button class="btn-view btn-load-more"></button></div>
								</div><!-- photos -->
							</div><!-- centerl meta -->
@endsection