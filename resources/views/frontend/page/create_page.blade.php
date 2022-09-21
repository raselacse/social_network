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
						<form method="post" action="{{route('create_page.store')}}" enctype="multipart/form-data">
							@csrf
							<div class="form-group half">	
							  <input type="text" name="page_name" id="page_name" required="required"/>
							  <label class="control-label" for="input">Page Name</label><i class="mtrl-select"></i>
							</div>
							<div class="form-group half">	
							  <input type="text" name="sub_title" required="required"/>
							  <label class="control-label" for="input">Sub Title</label><i class="mtrl-select"></i>
							</div>
							<div class="form-group">	
							  <input type="text" name="email" required="required"/>
							  <label class="control-label" for="input"><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="96d3fbf7fffad6">[email&#160;protected]</a></label><i class="mtrl-select"></i>
							</div>
							<div class="form-group half">	
							  <input type="text" name="phone" required="required"/>
							  <label class="control-label" for="input">Phone No.</label><i class="mtrl-select"></i>
							</div>
							<div class="form-group half ">
							<h6>Banner Image</h6>	
							  <input type="file" name="banner" required="required"/>
							 
							</div>
							<div class="form-group">	
							  <input type="text" name="domain" required="required"/>
							  <label class="control-label" for="input">www.yourdomain.com</label><i class="mtrl-select"></i>
							</div>											
							<div class="form-group">	
							  <select name="states">
								<option value="country">Country</option>
								  <option value="AFG">Afghanistan</option>
								  <option value="ALA">Ƭand Islands</option>
								  <option value="ALB">Albania</option>
								  <option value="DZA">Algeria</option>
								  <option value="ASM">American Samoa</option>
								  <option value="AND">Andorra</option>
								  <option value="AGO">Angola</option>
								  <option value="AIA">Anguilla</option>
								  <option value="ATA">Antarctica</option>
								  <option value="ATG">Antigua and Barbuda</option>
								  <option value="ARG">Argentina</option>
								  <option value="ARM">Armenia</option>
								  <option value="ABW">Aruba</option>
								  <option value="AUS">Australia</option>
								  <option value="AUT">Austria</option>
								  <option value="AZE">Azerbaijan</option>
								  <option value="BHS">Bahamas</option>
								  <option value="BHR">Bahrain</option>
								  <option value="BGD">Bangladesh</option>
								  <option value="BRB">Barbados</option>
								  <option value="BLR">Belarus</option>
								  <option value="BEL">Belgium</option>
								  <option value="BLZ">Belize</option>
								  <option value="BEN">Benin</option>
								  <option value="BMU">Bermuda</option>
								  <option value="BTN">Bhutan</option>
								  <option value="BOL">Bolivia, Plurinational State of</option>
								  <option value="BES">Bonaire, Sint Eustatius and Saba</option>
								  <option value="BIH">Bosnia and Herzegovina</option>
								  <option value="BWA">Botswana</option>
								  <option value="BVT">Bouvet Island</option>
								  <option value="BRA">Brazil</option>
								  <option value="IOT">British Indian Ocean Territory</option>
								  <option value="BRN">Brunei Darussalam</option>
								  <option value="BGR">Bulgaria</option>
								  <option value="BFA">Burkina Faso</option>
								  <option value="BDI">Burundi</option>
								  <option value="KHM">Cambodia</option>
								  <option value="CMR">Cameroon</option>
								  <option value="CAN">Canada</option>
								  <option value="CPV">Cape Verde</option>
								  <option value="CYM">Cayman Islands</option>
								  <option value="CAF">Central African Republic</option>
								  <option value="TCD">Chad</option>
								  <option value="CHL">Chile</option>
								  <option value="CHN">China</option>
								  <option value="CXR">Christmas Island</option>
								  <option value="CCK">Cocos (Keeling) Islands</option>
								  <option value="COL">Colombia</option>
								  <option value="COM">Comoros</option>
								  <option value="COG">Congo</option>
								  <option value="COD">Congo, the Democratic Republic of the</option>
								  <option value="COK">Cook Islands</option>
								  <option value="CRI">Costa Rica</option>
								  <option value="CIV">C𴥠d'Ivoire</option>
								  <option value="HRV">Croatia</option>
								  <option value="CUB">Cuba</option>
								  <option value="CUW">Cura袯</option>
								  <option value="CYP">Cyprus</option>
								  <option value="CZE">Czech Republic</option>
								  <option value="DNK">Denmark</option>
								  <option value="DJI">Djibouti</option>
								  <option value="DMA">Dominica</option>
								  <option value="DOM">Dominican Republic</option>
								 
							  </select>
							</div>
							<div class="form-group">	
							  <input type="text" name="city" required="required"/>
							  <label class="control-label" for="input">City</label><i class="mtrl-select"></i>
							</div>
							<div class="form-group">	
							  <textarea rows="4" name="additional_info" id="textarea" required="required"></textarea>
							  <label class="control-label" for="textarea">Additional Info</label><i class="mtrl-select"></i>
							</div>
							
							<h5 class="f-title ext-margin"><i class="ti-share"></i> Your Social Accounts</h5>
							<div class="form-group">	
							  <input type="text" name="facebook_link" required="required"/>
							  <label class="control-label" for="input"><i class="fa fa-facebook-square"></i> Facebook</label><i class="mtrl-select"></i>
							</div>
							<div class="form-group">	
							  <input type="text" name="twitter" required="required"/>
							  <label class="control-label" for="input"><i class="fa fa-twitter-square"></i> Twitter</label><i class="mtrl-select"></i>
							</div>
							<div class="form-group">	
							  <input type="text" name="instagram" required="required"/>
							  <label class="control-label" for="input"><i class="fa fa-google-plus-square"></i> Google Plus</label><i class="mtrl-select"></i>
							</div>
							<div class="form-group">	
							  <input type="text" required="required"/>
							  <label class="control-label" for="input"><i class="fa fa-rss-square"></i> RSS</label><i class="mtrl-select"></i>
							</div>
							<div class="form-group">	
							  <input type="text" required="required"/>
							  <label class="control-label" for="input"><i class="fa fa-instagram"></i> Instagram</label><i class="mtrl-select"></i>
							</div>
							
							
							<div class="submit-btns">
								<button type="button" class="mtr-btn"><span>Cancel</span></button>
								<button type="submit" class="mtr-btn"><span>Save</span></button>
							</div>
						</form>
					</div>
				</div>	
			</div><!-- centerl meta -->
@endsection