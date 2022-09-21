

<?php $__env->startSection('header'); ?>
<section>
		<div class="feature-photo">
			<figure><img src="<?php echo e(asset('public/frontend/images/resources/timeline-1.jpg')); ?>" alt=""></figure>
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
								<img src="<?php echo e(asset('public/frontend/images/resources/unknown.png')); ?>" alt="">
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
									<a class="" href="<?php echo e(route('frontend.timeline')); ?>" title="" data-ripple="">time line</a>
									<a class="" href="<?php echo e(route('frontend.photopage')); ?>" title="" data-ripple="">Photos</a>
									<a class="active" href="<?php echo e(route('frontend.videospage')); ?>" title="" data-ripple="">Videos</a>
									<a class="" href="<?php echo e(route('frontend.friendspage')); ?>" title="" data-ripple="">Followers</a>
									<a class="" href="<?php echo e(route('frontend.groupspage')); ?>" title="" data-ripple="">Groups</a>
									<a class="" href="<?php echo e(route('frontend.aboutpage')); ?>" title="" data-ripple="">about</a>
									
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- top area -->

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<div class="col-lg-6">
								<div class="central-meta">
									<ul class="photos">
										<li>
											<a href="https://www.youtube.com/watch?v=MIbbtEjdYrc" title="" data-strip-group="mygroup" class="strip" data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }"><img src="<?php echo e(asset('public/frontend/images/resources/unknown.png')); ?>" alt="">
												<i>
													<svg version="1.1" class="play" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="40px" width="40px"
													 viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
												  <path class="stroke-solid" fill="none" stroke=""  d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
													C97.3,23.7,75.7,2.3,49.9,2.5"/>
												  <path class="icon" fill="" d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z"/>
													</svg>
												</i>
											</a>
										</li>
										<li>
											<a href="https://www.youtube.com/watch?v=MIbbtEjdYrc" title="" data-strip-group="mygroup" class="strip" data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }"><img src="<?php echo e(asset('public/frontend/images/resources/unknown.png')); ?>" alt="">
												<i>
													<svg version="1.1" class="play" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="40px" width="40px"
													 viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
													  <path class="stroke-solid" fill="none" stroke=""  d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
														C97.3,23.7,75.7,2.3,49.9,2.5"/>
													  <path class="icon" fill="" d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z"/>
														</svg>
													</i>
												</a>
											</li>
										<li>
											<a href="https://www.youtube.com/watch?v=MIbbtEjdYrc" title="" data-strip-group="mygroup" class="strip" data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }"><img src="<?php echo e(asset('public/frontend/images/resources/unknown.png')); ?>" alt="">
												<i>
													<svg version="1.1" class="play" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="40px" width="40px"
													 viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
												  <path class="stroke-solid" fill="none" stroke=""  d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
													C97.3,23.7,75.7,2.3,49.9,2.5"/>
												  <path class="icon" fill="" d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z"/>
													</svg>
												</i>
											</a>
										</li>
										<li>
											<a href="https://www.youtube.com/watch?v=MIbbtEjdYrc" title="" data-strip-group="mygroup" class="strip" data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }"><img src="<?php echo e(asset('public/frontend/images/resources/unknown.png')); ?>" alt="">
												<i>
													<svg version="1.1" class="play" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="40px" width="40px"
													 viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
												  <path class="stroke-solid" fill="none" stroke=""  d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
													C97.3,23.7,75.7,2.3,49.9,2.5"/>
												  <path class="icon" fill="" d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z"/>
													</svg>
												</i>
											</a>
										</li>
										<li>
											<a href="https://www.youtube.com/watch?v=MIbbtEjdYrc" title="" data-strip-group="mygroup" class="strip" data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }"><img src="<?php echo e(asset('public/frontend/images/resources/unknown.png')); ?>" alt="">
												<i>
													<svg version="1.1" class="play" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="40px" width="40px"
													 viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
												  <path class="stroke-solid" fill="none" stroke=""  d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
													C97.3,23.7,75.7,2.3,49.9,2.5"/>
												  <path class="icon" fill="" d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z"/>
													</svg>
												</i>
											</a>
										</li>
										<li>
											<a href="https://www.youtube.com/watch?v=MIbbtEjdYrc" title="" data-strip-group="mygroup" class="strip" data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }"><img src="<?php echo e(asset('public/frontend/images/resources/unknown.png')); ?>" alt="">
												<i>
													<svg version="1.1" class="play" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="40px" width="40px"
													 viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
													  <path class="stroke-solid" fill="none" stroke=""  d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
														C97.3,23.7,75.7,2.3,49.9,2.5"/>
													  <path class="icon" fill="" d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z"/>
														</svg>
													</i>
												</a>
											</li>
										<li>
											<a href="https://www.youtube.com/watch?v=MIbbtEjdYrc" title="" data-strip-group="mygroup" class="strip" data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }"><img src="<?php echo e(asset('public/frontend/images/resources/unknown.png')); ?>" alt="">
												<i>
													<svg version="1.1" class="play" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="40px" width="40px"
													 viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
												  <path class="stroke-solid" fill="none" stroke=""  d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
													C97.3,23.7,75.7,2.3,49.9,2.5"/>
												  <path class="icon" fill="" d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z"/>
													</svg>
												</i>
											</a>
										</li>
										<li>
											<a href="https://www.youtube.com/watch?v=MIbbtEjdYrc" title="" data-strip-group="mygroup" class="strip" data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }"><img src="<?php echo e(asset('public/frontend/images/resources/unknown.png')); ?>" alt="">
												<i>
													<svg version="1.1" class="play" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="40px" width="40px"
													 viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
												  <path class="stroke-solid" fill="none" stroke=""  d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
													C97.3,23.7,75.7,2.3,49.9,2.5"/>
												  <path class="icon" fill="" d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z"/>
													</svg>
												</i>
											</a>
										</li>
										<li>
											<a href="https://www.youtube.com/watch?v=MIbbtEjdYrc" title="" data-strip-group="mygroup" class="strip" data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }"><img src="<?php echo e(asset('public/frontend/images/resources/unknown.png')); ?>" alt="">
												<i>
													<svg version="1.1" class="play" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="40px" width="40px"
													 viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
												  <path class="stroke-solid" fill="none" stroke=""  d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
													C97.3,23.7,75.7,2.3,49.9,2.5"/>
												  <path class="icon" fill="" d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z"/>
													</svg>
												</i>
											</a>
										</li>
										<li>
											<a href="https://www.youtube.com/watch?v=MIbbtEjdYrc" title="" data-strip-group="mygroup" class="strip" data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }"><img src="<?php echo e(asset('public/frontend/images/resources/unknown.png')); ?>" alt="">
												<i>
													<svg version="1.1" class="play" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="40px" width="40px"
													 viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
												  <path class="stroke-solid" fill="none" stroke=""  d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
													C97.3,23.7,75.7,2.3,49.9,2.5"/>
												  <path class="icon" fill="" d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z"/>
													</svg>
												</i>
											</a>
										</li>
										<li>
											<a href="https://www.youtube.com/watch?v=MIbbtEjdYrc" title="" data-strip-group="mygroup" class="strip" data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }"><img src="<?php echo e(asset('public/frontend/images/resources/unknown.png')); ?>" alt="">
												<i>
													<svg version="1.1" class="play" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="40px" width="40px"
													 viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
												  <path class="stroke-solid" fill="none" stroke=""  d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
													C97.3,23.7,75.7,2.3,49.9,2.5"/>
												  <path class="icon" fill="" d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z"/>
													</svg>
												</i>
											</a>
										</li>
										<li>
											<a href="https://www.youtube.com/watch?v=MIbbtEjdYrc" title="" data-strip-group="mygroup" class="strip" data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }"><img src="<?php echo e(asset('public/frontend/images/resources/unknown.png')); ?>" alt="">
												<i>
													<svg version="1.1" class="play" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="40px" width="40px"
													 viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
												  <path class="stroke-solid" fill="none" stroke=""  d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
													C97.3,23.7,75.7,2.3,49.9,2.5"/>
												  <path class="icon" fill="" d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z"/>
													</svg>
												</i>
											</a>
										</li>
									</ul>
									<div class="lodmore"><button class="btn-view btn-load-more"></button></div>
								</div><!-- photos -->
							</div><!-- centerl meta -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Social-Network\resources\views/frontend/page/videospage.blade.php ENDPATH**/ ?>