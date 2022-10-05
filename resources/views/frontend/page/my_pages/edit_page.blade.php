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
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- top area -->

@endsection


@section('leftsidebar')
     <div class="widget">
		<h4 class="widget-title">Profile intro</h4>
		<ul class="short-profile">
			<li>
				<span>about</span>
				<p>Hi, i am jhon kates, i am 32 years old and worked as a web developer in microsoft company. </p>
			</li>
			<li>
				<span>fav tv show</span>
				<p>Sacred Games, Spartcus Blood, Games of theron</p>
			</li>
			<li>
				<span>favourit music</span>
				<p>Justin Biber, Nati Natsha, Shakira</p>
			</li>
		</ul>
	</div>


@endsection





@section('content')
<div class="col-lg-6">
				<div class="central-meta">
					<div class="editing-info">
						<h5 class="f-title"><i class="ti-info-alt"></i> Create favourite Page</h5>
						<form method="post" action="{{route('create_page.update_page',$create_page->id)}}" enctype="multipart/form-data">
							@csrf

							<div class="form-group half">	
							  <input type="text" name="page_name" id="page_name" required="required"
                                     value="{{$create_page->page_name}}"
							  />
							  <label class="control-label" for="input">Page Name</label><i class="mtrl-select"></i>
							</div>

							<div class="form-group half">	
							  <input type="text" name="sub_title" required="required"
							   value="{{$create_page->sub_title}}"
							  />
							  <label class="control-label" for="input">Sub Title</label><i class="mtrl-select"></i>
							</div>

							<div class="form-group">	
							  <input type="text" name="email" required="required" 

                                      value="{{$create_page->email}}"
							  />
							  <label class="control-label" for="input"><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="96d3fbf7fffad6">[email&#160;protected]</a></label><i class="mtrl-select"></i>
							</div>

							<div class="form-group half">	
							  <input type="text" name="phone" required="required" 
							  value="{{$create_page->phone}}"
							  />
							  <label class="control-label" for="input">Phone No.</label><i class="mtrl-select"></i>
							</div>

							<div class="form-group half ">
							<h6>Banner Image</h6>	
							  <input type="file" name="banner" required="required"
							  value="{{$create_page->banner}}"

							  />
							 
							</div>
							<div class="form-group">	
							  <input type="text" name="domain" required="required"
							  value="{{$create_page->domain}}"
							  />
							  <label class="control-label" for="input">www.yourdomain.com</label><i class="mtrl-select"></i>
							</div>											
							<div class="form-group">	
							  <select name="states"
							  value="{{$create_page->states}}"
							  >
								<option value="country">Country</option>
								  <option value="Afghanistan" {{$create_page->states=="Afghanistan"?'selected':''}}>Afghanistan</option>

								  <option value="Ƭand Islands"{{$create_page->states=="Ƭand Islands"?'selected':''}}>Ƭand Islands</option>

								  <option value="Albania"{{$create_page->states=="Albania"?'selected':''}}>Albania</option>

								  <option value="Algeria"{{$create_page->states=="Albania"?'selected':''}}>Algeria</option>

								
								  <option value="Bangladesh" {{$create_page->states=="Bangladesh"?'selected':''}}>Bangladesh</option>
								  
								 
							  </select>
							</div>
							<div class="form-group">	
							  <input type="text" name="city" required="required"
							  value="{{$create_page->city}}"
							  />
							  <label class="control-label" for="input">City</label><i class="mtrl-select"></i>
							</div>
							<div class="form-group">	
							  <textarea rows="4" name="additional_info" id="textarea" required="required">{{$create_page->additional_info}}</textarea>
							  <label class="control-label" for="textarea">Additional Info</label><i class="mtrl-select"></i>
							</div>
							
							<h5 class="f-title ext-margin"><i class="ti-share"></i> Your Social Accounts</h5>
							<div class="form-group">	
							  <input type="text" name="facebook_link" required="required"
							  value="{{$create_page->facebook_link}}"
							  />
							  <label class="control-label" for="input"><i class="fa fa-facebook-square"></i> Facebook</label><i class="mtrl-select"></i>
							</div>

							<div class="form-group">	
							  <input type="text" name="twitter" required="required"
							  value="{{$create_page->twitter}}"
							  />
							  <label class="control-label" for="input"><i class="fa fa-twitter-square"></i> Twitter</label><i class="mtrl-select"></i>
							</div>

							<div class="form-group">	
							  <input type="text" name="instagram" required="required"
							  value="{{$create_page->instagram}}"
							  />
							  <label class="control-label" for="input"><i class="fa fa-instagram"></i> Instagram</label><i class="mtrl-select"></i>
							</div>
							
							
							<div class="submit-btns">
								<button type="button" class="mtr-btn"><span>Cancel</span></button>
								<button type="submit" class="mtr-btn"><span>update</span></button>
							</div>
						</form>
					</div>
				</div>	
			</div><!-- centerl meta -->
@endsection