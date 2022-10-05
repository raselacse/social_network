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
									<a class="active" href="{{route('frontend.aboutpage')}}" title="" data-ripple="">about</a>
									
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
										<h5 class="f-title"><i class="ti-info-alt"></i> profile Edit</h5>

										<form method="post" action="{{route('profile.store',$user->id)}}" enctype="multipart/form-data">
											@csrf
											<div class="form-group">	
											  <input type="text" name="full_name" id="input" required="required"/>
											  <label class="control-label" for="input">Name</label><i class="mtrl-select"></i>
											</div>
											<div class="form-group half ">
												<h6>Profile Image</h6>	
												<input type="file" name="profile_image"/>
							 
							                 </div>

							                 <div class="form-group half ">
							                  <h6>Banner Image</h6>	
							                  <input type="file" name="profile_banner"/>
							 
							                 </div>
											
											<div class="submit-btns">
												
												<button type="submit" class="mtr-btn"><span>Update</span></button>
											</div>
										</form>
									</div>
								</div>	
							</div><!-- centerl meta -->
@endsection