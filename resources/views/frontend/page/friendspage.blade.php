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
									<a class="active" href="{{route('frontend.friendspage')}}" title="" data-ripple="">Friends</a>
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
									<div class="frnds">
										<ul class="nav nav-tabs">
											 <li class="nav-item"><a class="active" href="#frends" data-toggle="tab">My Friends</a> <span>{{$myfriendcount}}</span></li>
											 <li class="nav-item"><a class="" href="#frends-req" data-toggle="tab">Friend Requests</a><span>{{$requestcount}}</span></li>

											 <li class="nav-item"><a class="" href="#frends-list" data-toggle="tab">Friend List</a></li>
										</ul>

										<!-- Tab panes -->
										<div class="tab-content">

											
										  <div class="tab-pane active fade show " id="frends" >
										  	@foreach($myfriends as $data)
											<ul class="nearby-contct">
												
											<li>
												<div class="nearly-pepls">
													<figure>
														<a href="time-line.html" title=""><img src="{{asset('public/frontend/images/resources/friend-avatar9.jpg')}}" alt=""></a>
													</figure>
													<div class="pepl-info">
														<h4><a href="time-line.html" title="">{{$data->full_name}}</a></h4>
														<span>ftv model</span>
														
														<a href="#" title="" class="add-butn" data-ripple="">unfriend</a>
													</div>
												</div>
											</li>

											
										</ul>
										@endforeach
											<div class="lodmore"><button class="btn-view btn-load-more"></button></div>

										  </div>
										  

										  <div class="tab-pane fade" id="frends-req" >
										  	@foreach($friendRequest as $data)
										  	<?php 

                                             $getUesr = App\Models\User::find($data->friend_id);
                                            

										  	 ?>
										<ul class="nearby-contct">
											<li>
												<div class="nearly-pepls">
													<figure>
														<a href="time-line.html" title=""><img src="{{asset('public/frontend/images/resources/friend-avatar9.jpg')}}" alt=""></a>
													</figure>
													
													<div class="pepl-info">
														<h4><a href="time-line.html" title="">{{$getUesr->full_name}}</a></h4>
														

														<a href="{{route('friend.removefriend',$data->id)}}" title="" class="add-butn more-action" data-ripple="" style="margin-right: 50px;">Remove</a>

														<a href="{{route('friend.confrimfriend',$data->id)}}" title="" class="add-butn" data-ripple="">Confrim Request</a>


													</div>
												</div>
											</li>	

											
										</ul>	
										@endforeach
											  <button class="btn-view btn-load-more"></button>
										  </div>



										  <div class="tab-pane fade" id="frends-list" >
										  	@foreach($allfriends as $data)
                                             
                                             <?php

                                             $check = DB::table('friends')->where('user_request', Auth::user()->id)->where('friend_id',$data->id)->where('status',0)->first();

                                             ?>

										<ul class="nearby-contct">
											<li>
												<div class="nearly-pepls">
													<figure>
														<a href="time-line.html" title=""><img src="{{asset('public/frontend/images/resources/friend-avatar9.jpg')}}" alt=""></a>
													</figure>
													<div class="pepl-info">
														<h4><a href="time-line.html" title="">{{$data->full_name}}</a></h4>
														<span>ftv model</span>
                                                         <a href="{{route('friend.addfriend',$data->id)}}" title="" class="add-butn" data-ripple="">add friend</a>


													</div>
												</div>
											</li>	

											
										</ul>	
										@endforeach
											  <button class="btn-view btn-load-more"></button>
										  </div>


										 


										</div>
									</div>
								</div>	
							</div><!-- centerl meta -->
@endsection