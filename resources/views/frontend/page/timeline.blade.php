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
									<a class="active" href="{{route('frontend.timeline')}}" title="" data-ripple="">time line</a>

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
								

								<div class="loadMore">
								<div class="central-meta item">
									<div class="user-post">
										<div class="friend-info">
											@foreach($timelineview as $data)
											<figure>
												<img src="{{asset('public/profile/profile_image/'.$data->profile_image)}}" alt="">
											</figure>

											<div class="friend-name">
												<ins><a href="{{route('frontend.aboutpage')}}" title="">{{$data->username}}</a></ins>
												<span>published: {{$data->created_at}}</span>
											</div>
											<div class="post-meta">
												<div class="description">
													
													<p>
														{{$data->post_content}}
													</p>
												</div>
												<img src="{{asset('public/post/image/'.$data->image)}}" alt="">
												<div class="we-video-info">
													<ul>
														<li>
															<span class="like" data-toggle="tooltip" title="like">
																<i class="ti-heart"></i>
																<ins>2.2k</ins>
															</span>
														</li>
														<li>
															<span class="comment" data-toggle="tooltip" title="Comments">
																<i class="fa fa-comments-o"></i>
																<ins>52</ins>
															</span>
														</li>
														
														
													</ul>
												</div>
												
											</div>
											@endforeach
										</div>

										
									</div>
								</div>
								
								
								<div class="">
									
								</div>
								</div>
							</div><!-- centerl meta -->
@endsection