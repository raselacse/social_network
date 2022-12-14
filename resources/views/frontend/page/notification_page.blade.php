@extends('frontend.index')

@section('header')
<section>
		<div class="feature-photo">
			<figure><img src="{{asset('public/profile/profile_banner/'.$image->profile_banner)}}" alt=""></figure>
			<div class="add-btn">
				<span>{{$requestcount}} followers</span>
				<a href="#" title="" data-ripple="">Add Friend</a>
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
								<img src="{{asset('public/profile/profile_image/'.$image->profile_image)}}" alt="">
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
								  <h5>{{Auth::user()->full_name}}</h5>
								  <span>{{Auth::user()->email}}</span>
								</li>
								<li>
									<a class="" href="{{route('frontend.timeline')}}" title="" data-ripple="">time line</a>
									<a class="" href="{{route('frontend.photopage')}}" title="" data-ripple="">Photos</a>
									<!-- <a class="" href="{{route('frontend.videospage')}}" title="" data-ripple="">Videos</a> -->
									<a class="" href="{{route('frontend.friendspage')}}" title="" data-ripple="">Friends</a>
									<!-- <a class="" href="{{route('frontend.groupspage')}}" title="" data-ripple="">Groups</a> -->
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
									<div class="editing-interest">
										<h5 class="f-title"><i class="ti-bell"></i>All Notifications </h5>
										<div class="notification-box">
											<ul>
												<li>
													<figure><img src="{{asset('public/frontend/images/resources/friend-avatar.jpg')}}" alt=""></figure>
													<div class="notifi-meta">
														<p>bob frank like your post</p>
														<span>30 mints ago</span>
													</div>
													<i class="del fa fa-close"></i>
												</li>
												<li>
													<figure><img src="{{asset('public/frontend/images/resources/friend-avatar2.jpg')}}" alt=""></figure>
													<div class="notifi-meta">
														<p>Sarah Hetfield commented on your photo. </p>
														<span>1 hours ago</span>
													</div>
													<i class="del fa fa-close"></i>
												</li>
												<li>
													<figure><img src="{{asset('public/frontend/images/resources/friend-avatar3.jpg')}}" alt=""></figure>
													<div class="notifi-meta">
														<p>Mathilda Brinker commented on your new profile status. </p>
														<span>2 hours ago</span>
													</div>
													<i class="del fa fa-close"></i>
												</li>
												<li>
													<figure><img src="{{asset('public/frontend/images/resources/friend-avatar4.jpg')}}" alt=""></figure>
													<div class="notifi-meta">
														<p>Green Goo Rock invited you to attend to his event Goo in Gotham Bar. </p>
														<span>2 hours ago</span>
													</div>
													<i class="del fa fa-close"></i>
												</li>
												<li>
													<figure><img src="{{asset('public/frontend/images/resources/friend-avatar5.jpg')}}" alt=""></figure>
													<div class="notifi-meta">
														<p>Chris Greyson liked your profile status. </p>
														<span>1 day ago</span>
													</div>
													<i class="del fa fa-close"></i>
												</li>
												<li>
													<figure><img src="{{asset('public/frontend/images/resources/friend-avatar6.jpg')}}" alt=""></figure>
													<div class="notifi-meta">
														<p>You and Nicholas Grissom just became friends. Write on his wall. </p>
														<span>2 days ago</span>
													</div>
													<i class="del fa fa-close"></i>
												</li>
											</ul>
										</div>
									</div>
								</div>	
							</div><!-- centerl meta -->
@endsection