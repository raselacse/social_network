
<div class="topbar stick">

		<div class="logo">
			<a title="" href="<?php echo e(route('frontend.index')); ?>"><img src="<?php echo asset($settings->logo); ?>" alt=""></a>
		</div>
		
		<div class="top-area">
			
			<ul class="main-menu">
				<li>
					<a href="<?php echo e(route('frontend.index')); ?>" title="">Home</a>
					
				</li>
				<li>
					<a href="<?php echo e(route('frontend.timeline')); ?>" title="">timeline</a>
					
				</li>
				<li>
					<a href="#" title="">account settings</a>
					<ul>
						<li><a href="<?php echo e(route('frontend.creatpage')); ?>" title="">create fav page</a></li>
						
						<li><a href="<?php echo e(route('frontend.edit_password')); ?>" title="">edit-password</a></li>
						
						<!-- <li><a href="<?php echo e(route('frontend.massagebox')); ?>" title="">message box</a></li>
						
						<li><a href="<?php echo e(route('frontend.notification_page')); ?>" title="">notifications page</a></li> -->
					</ul>
				</li>

				<li>
					<a href="<?php echo e(route('elibrary.index')); ?>" title="">E-library</a>
					
				</li>
				
			</ul>
			<ul class="setting-area">
				<li>
					<a href="#" title="Home" data-ripple=""><i class="ti-search"></i></a>
					<div class="searched">
						<form method="post" class="form-search">
							<input type="text" placeholder="Search Friend">
							<button data-ripple><i class="ti-search"></i></button>
						</form>
					</div>
				</li>
				
				<li>
					<a href="#" title="Notification" data-ripple="">
						<i class="ti-bell"></i><span>20</span>
					</a>
					<div class="dropdowns">
						<span>4 New Notifications</span>
						<ul class="drops-menu">
							<li>
								<a href="notifications.html" title="">
									<img src="<?php echo e(asset('public/frontend/images/resources/thumb-1.jpg')); ?>" alt="">
									<div class="mesg-meta">
										<h6>sarah Loren</h6>
										<span>Hi, how r u dear ...?</span>
										<i>2 min ago</i>
									</div>
								</a>
								<span class="tag green">New</span>
							</li>
							<li>
								<a href="notifications.html" title="">
									<img src="<?php echo e(asset('public/frontend/images/resources/thumb-2.jpg')); ?>" alt="">
									<div class="mesg-meta">
										<h6>Jhon doe</h6>
										<span>Hi, how r u dear ...?</span>
										<i>2 min ago</i>
									</div>
								</a>
								<span class="tag red">Reply</span>
							</li>
							<li>
								<a href="notifications.html" title="">
									<img src="<?php echo e(asset('public/frontend/images/resources/thumb-3.jpg')); ?>" alt="">
									<div class="mesg-meta">
										<h6>Andrew</h6>
										<span>Hi, how r u dear ...?</span>
										<i>2 min ago</i>
									</div>
								</a>
								<span class="tag blue">Unseen</span>
							</li>
							<li>
								<a href="notifications.html" title="">
									<img src="<?php echo e(asset('public/frontend/images/resources/thumb-4.jpg')); ?>" alt="">
									<div class="mesg-meta">
										<h6>Tom cruse</h6>
										<span>Hi, how r u dear ...?</span>
										<i>2 min ago</i>
									</div>
								</a>
								<span class="tag">New</span>
							</li>
							<li>
								<a href="notifications.html" title="">
									<img src="<?php echo e(asset('public/frontend/images/resources/thumb-5.jpg')); ?>" alt="">
									<div class="mesg-meta">
										<h6>Amy</h6>
										<span>Hi, how r u dear ...?</span>
										<i>2 min ago</i>
									</div>
								</a>
								<span class="tag">New</span>
							</li>
						</ul>
						<a href="notifications.html" title="" class="more-mesg">view more</a>
					</div>
				</li>
				
			</ul>
			<div class="user-img">
				<img src="<?php echo e(asset('public/frontend/images/resources/admin.jpg')); ?>" alt="">
				<span class="status f-online"></span>
				<!-- <div class="user-setting">
					<a href="#" title=""><span class="status f-online"></span>online</a>
					<a href="#" title=""><span class="status f-away"></span>away</a>
					<a href="#" title=""><span class="status f-off"></span>offline</a>
					<a href="#" title=""><i class="ti-user"></i> view profile</a>
					<a href="" title=""><i class="ti-pencil-alt"></i>edit profile</a>
					<a href="#" title=""><i class="ti-target"></i>activity log</a>
					<a href="#" title=""><i class="ti-settings"></i>account setting</a>
					<a href="<?php echo e(URL::to('logout')); ?>" title=""><i class="ti-power-off"></i>log out</a>
					<i class="ti-power-off"></i>
												<a href="<?php echo e(URL::to('logout')); ?>" title="">Logout</a>
				</div> -->
			</div>
			<!-- <span class="ti-menu main-menu" data-ripple=""></span> -->
		</div>
	</div><!-- topbar -->
	<?php /**PATH C:\xampp\htdocs\social-network\resources\views/frontend/header.blade.php ENDPATH**/ ?>