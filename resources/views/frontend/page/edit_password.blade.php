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
									<a class="" href="{{route('frontend.groupspage')}}" title="" data-ripple="">Groups</a>
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
										<div class="editing-info">
											<h5 class="f-title"><i class="ti-lock"></i>Change Password</h5>
											
											<form method="post">
												<div class="form-group">	
												  <input type="password" id="input" required="required"/>
												  <label class="control-label" for="input">New password</label><i class="mtrl-select"></i>
												</div>
												<div class="form-group">	
												  <input type="password" required="required"/>
												  <label class="control-label" for="input">Confirm password</label><i class="mtrl-select"></i>
												</div>
												<div class="form-group">	
												  <input type="password" required="required"/>
												  <label class="control-label" for="input">Current password</label><i class="mtrl-select"></i>
												</div>
												<a class="forgot-pwd underline" title="" href="#">Forgot Password?</a>
												<div class="submit-btns">
													<button type="button" class="mtr-btn"><span>Cancel</span></button>
													<button type="button" class="mtr-btn"><span>Update</span></button>
												</div>
											</form>
										</div>
									</div>	
								</div><!-- centerl meta -->
@endsection