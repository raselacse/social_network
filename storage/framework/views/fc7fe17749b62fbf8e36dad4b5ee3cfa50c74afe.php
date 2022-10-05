

<?php $__env->startSection('header'); ?>
<section>
		<div class="feature-photo">
			<figure><img src="<?php echo e(asset('public/profile/profile_banner/'.$image->profile_banner)); ?>" alt=""></figure>
			<div class="add-btn">
				<span><?php echo e($requestcount); ?> followers</span>
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
								<img src="<?php echo e(asset('public/profile/profile_image/'.$image->profile_image)); ?>" alt="">
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
								 <h5><?php echo e(Auth::user()->full_name); ?></h5>
								  <span><?php echo e(Auth::user()->email); ?></span>
								</li>
								<li>
									<a class="" href="<?php echo e(route('frontend.timeline')); ?>" title="" data-ripple="">time line</a>
									<a class="active" href="<?php echo e(route('frontend.photopage')); ?>" title="" data-ripple="">Photos</a>
									<!-- <a class="" href="<?php echo e(route('frontend.videospage')); ?>" title="" data-ripple="">Videos</a> -->
									<a class="" href="<?php echo e(route('frontend.friendspage')); ?>" title="" data-ripple="">Friends</a>
									<!-- <a class="" href="<?php echo e(route('frontend.groupspage')); ?>" title="" data-ripple="">Groups</a> -->
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
                      <?php $__currentLoopData = $postimage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<li>
							<a class="strip" href="<?php echo e(asset('public/post/image/'.$data->image)); ?>" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
								<img src="<?php echo e(asset('public/post/image/'.$data->image)); ?>" alt=""></a>
						</li>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
						
						
					</ul>
					<div class="lodmore"><button class="btn-view btn-load-more"></button></div>
				</div><!-- photos -->
			</div><!-- centerl meta -->
<?php $__env->stopSection(); ?>


				
<?php echo $__env->make('frontend.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\social-network\resources\views/frontend/page/photospage.blade.php ENDPATH**/ ?>