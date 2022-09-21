

<?php $__env->startSection('header'); ?>
<section>
		<div class="feature-photo">
			<figure><img src="<?php echo e(asset('public/frontend/images/resources/social_network 3.png')); ?>" alt=""></figure>
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
									<a class="active" href="<?php echo e(route('frontend.photopage')); ?>" title="" data-ripple="">Photos</a>
									<a class="" href="<?php echo e(route('frontend.videospage')); ?>" title="" data-ripple="">Videos</a>
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
							<a class="strip" href="images/resources/photo-22.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
								<img src="<?php echo e(asset('public/frontend/images/resources/unknown.png')); ?>" alt=""></a>
						</li>
						<li>
							<a class="strip" href="images/resources/photo-33.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
							<img src="<?php echo e(asset('public/frontend/images/resources/unknown.png')); ?>" alt=""></a>
						</li>
						<li>
							<a class="strip" href="images/resources/photo-44.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
							<img src="<?php echo e(asset('public/frontend/images/resources/unknown.png')); ?>" alt=""></a>
						</li>
						<li>
							<a class="strip" href="images/resources/photo-55.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
							<img src="<?php echo e(asset('public/frontend/images/resources/unknown.png')); ?>" alt=""></a>
						</li>

						<li>
							<a class="strip" href="images/resources/photo-66.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
							<img src="<?php echo e(asset('public/frontend/images/resources/unknown.png')); ?>" alt=""></a>
						</li>
						<li>
							<a class="strip" href="images/resources/photo-77.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
							<img src="<?php echo e(asset('public/frontend/images/resources/unknown.png')); ?>" alt=""></a>
						</li>
						<li>
							<a class="strip" href="images/resources/photo-88.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
							<img src="<?php echo e(asset('public/frontend/images/resources/unknown.png')); ?>" alt=""></a>
						</li>

						<li>
							<a class="strip" href="images/resources/photo-99.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
							<img src="<?php echo e(asset('public/frontend/images/resources/unknown.png')); ?>" alt=""></a>
						</li>
						<li>
							<a class="strip" href="images/resources/photo-101.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
							<img src="<?php echo e(asset('public/frontend/images/resources/unknown.png')); ?>" alt=""></a>
						</li>
						<li>
							<a class="strip" href="images/resources/photo-101.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
							<img src="<?php echo e(asset('public/frontend/images/resources/unknown.png')); ?>" alt=""></a>
						</li>
						<li>
							<a class="strip" href="images/resources/photo-22.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
							<img src="<?php echo e(asset('public/frontend/images/resources/unknown.png')); ?>" alt=""></a>
						</li>
						<li>
							<a class="strip" href="images/resources/photo-33.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
							<img src="<?php echo e(asset('public/frontend/images/resources/unknown.png')); ?>" alt=""></a>
						</li>
						<li>
							<a class="strip" href="images/resources/photo-99.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
							<img src="<?php echo e(asset('public/frontend/images/resources/unknown.png')); ?>" alt=""></a>
						</li>
						<li>
							<a class="strip" href="images/resources/photo-66.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
							<img src="<?php echo e(asset('public/frontend/images/resources/unknown.png')); ?>" alt=""></a>
						</li>
						<li>
							<a class="strip" href="images/resources/photo-66.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
							<img src="<?php echo e(asset('public/frontend/images/resources/unknown.png')); ?>" alt=""></a>
						</li>
					</ul>
					<div class="lodmore"><button class="btn-view btn-load-more"></button></div>
				</div><!-- photos -->
			</div><!-- centerl meta -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Social-Network\resources\views/frontend/page/photospage.blade.php ENDPATH**/ ?>