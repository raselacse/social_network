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
									<div class="messages">
										<h5 class="f-title"><i class="ti-bell"></i>All Messages <span class="more-options"><i class="fa fa-ellipsis-h"></i></span></h5>
										<div class="message-box">
											<ul class="peoples">
												
												<li>
													
													<figure>
														<img src="{{asset('public/frontend/images/resources/friend-avatar2.jpg')}}" alt="">
														<span class="status f-online"></span>
													</figure>
													<div class="people-name">
														<span>Molly cyrus</span>
													</div>
												</li>
												<li>
													
													<figure><img src="{{asset('public/frontend/images/resources/friend-avatar3.jpg')}}" alt="">
														<span class="status f-away"></span>
													</figure>
													<div class="people-name">
														<span>Andrew</span>
													</div>
												</li>
												<li>
													
													<figure>
														<img src="{{asset('public/frontend/images/resources/friend-avatar.jpg')}}" alt="">
														<span class="status f-online"></span>
													</figure>
													
													<div class="people-name">
														<span>jason bourne</span>
													</div>
												</li>
												<li>
													
													<figure><img src="{{asset('public/frontend/images/resources/friend-avatar4.jpg')}}" alt="">
														<span class="status off-online"></span>
													</figure>
													<div class="people-name">
														<span>Sarah Grey</span>
													</div>
												</li>
												<li>
													
													<figure><img src="{{asset('public/frontend/images/resources/friend-avatar5.jpg')}}" alt="">
														<span class="status f-online"></span>
													</figure>
													<div class="people-name">
														<span>bill doe</span>
													</div>
												</li>
												<li>
													
													<figure><img src="{{asset('public/frontend/images/resources/friend-avatar6.jpg')}}" alt="">
														<span class="status f-away"></span>
													</figure>
													<div class="people-name">
														<span>shen cornery</span>
													</div>
												</li>
												<li>
													
													<figure><img src="{{asset('public/frontend/images/resources/friend-avatar7.jpg')}}" alt="">
														<span class="status off-online"></span>
													</figure>
													<div class="people-name">
														<span>kill bill</span>
													</div>
												</li>
												<li>
													
													<figure><img src="{{asset('public/frontend/images/resources/friend-avatar8.jpg')}}" alt="">
														<span class="status f-online"></span>
													</figure>
													<div class="people-name">
														<span>jasmin walia</span>
													</div>
												</li>
												<li>
													
													<figure><img src="{{asset('public/frontend/images/resources/friend-avatar6.jpg')}}" alt="">
														<span class="status f-online"></span>
													</figure>
													<div class="people-name">
														<span>neclos cage</span>
													</div>
												</li>
											</ul>
											<div class="peoples-mesg-box">
												<div class="conversation-head">
													<figure><img src="{{asset('public/frontend/images/resources/friend-avatar.jpg')}}" alt=""></figure>
													<span>jason bourne <i>online</i></span>
												</div>
												<ul class="chatting-area">
													<li class="you">
														<figure><img src="{{asset('public/frontend/images/resources/userlist-2.jpg')}}" alt=""></figure>
														<p>what's liz short for? :)</p>
													</li>
													<li class="me">
														<figure><img src="{{asset('public/frontend/images/resources/userlist-1.jpg')}}" alt=""></figure>
														<p>Elizabeth lol</p>
													</li>
													<li class="me">
														<figure><img src="{{asset('public/frontend/images/resources/userlist-1.jpg')}}" alt=""></figure>
														<p>wanna know whats my second guess was?</p>
													</li>
													<li class="you">
														<figure><img src="{{asset('public/frontend/images/resources/userlist-2.jpg')}}" alt=""></figure>
														<p>yes</p>
													</li>
													<li class="me">
														<figure><img src="{{asset('public/frontend/images/resources/userlist-1.jpg')}}" alt=""></figure>
														<p>Disney's the lizard king</p>
													</li>
													<li class="me">
														<figure><img src="{{asset('public/frontend/images/resources/userlist-1.jpg')}}" alt=""></figure>
														<p>i know him 5 years ago</p>
													</li>
													<li class="you">
														<figure><img src="{{asset('public/frontend/images/resources/userlist-2.jpg')}}" alt=""></figure>
														<p>coooooooooool dude ;)</p>
													</li>
												</ul>
												<div class="message-text-container">
													<form method="post">
														<textarea></textarea>
														<button title="send"><i class="fa fa-paper-plane"></i></button>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>	
							</div><!-- centerl meta -->
@endsection