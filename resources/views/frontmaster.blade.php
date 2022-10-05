@extends('frontend.index')


@section('content')
<div class="col-lg-6">
								<div class="central-meta">
									<div class="new-postbox">
										<figure>
											<img src="{{asset('frontend/images/resources/admin2.jpg')}}" alt="">
										</figure>
										<div class="newpst-input">
											<form method="post" action="{{route('post.store')}}"  enctype="multipart/form-data">
												@csrf
												<textarea rows="2" name="post_content" placeholder="write something"></textarea>
												<div class="attachments">
													<ul>
														<li>
															<i class="fa fa-music"></i>
															<label class="fileContainer">
																<input type="file"
																 accept="image/png, image/jpeg,image/jpg"
																 name="audio">
															</label>
														</li>
														<li>
															<i class="fa fa-video-camera"></i>
															<label class="fileContainer">
																<input type="file"
																accept="image/png, image/jpeg,image/jpg" 
																name="video">
															</label>
														</li>
														<li>
															<i class="fa fa-image"></i>
															<label class="fileContainer">
																<input type="file"
																accept="image/png, image/jpeg,image/jpg"
																 name="image">
															</label>
														</li>
														
														<li>
															<i class="fa fa-camera"></i>
															<label class="fileContainer">
																<input type="file" 

																name="capture"
																accept="image/png, image/jpeg,image/jpg"

																>
															</label>
														</li>
														<input type="hidden" name="username" id="" class="form-control" value="">
														<input type="hidden" name="user_id" id="" class="form-control" value="">
														<li>
															<button type="submit">Post</button>
														</li>
													</ul>
												</div>
											</form>
										</div>
									</div>
								</div><!-- add post new box -->
								<div class="loadMore">
								<div class="central-meta item">

									<div class="user-post">
									
                                          
										<div class="friend-info">
											  @foreach($postview as $data1)
											  
											<figure>
												<img src="{{asset('public/profile/profile_image/'.$data1->profile_image)}}" alt="">
											</figure>
                                           

											<div class="friend-name">
												<ins><a href="time-line.html" title="">{{$data1->username}}</a></ins>
												<span>published:{{$data1->created_at}} </span>
											</div>
											<div class="post-meta">
												<div class="description">
													
													<p>
														{{$data1->post_content}}
													</p>
												</div>

												
											
												<img src="{{asset('public/post/image/'.$data1->image)}}" alt="">
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
								
								
								</div>
							</div><!-- centerl meta -->
@endsection