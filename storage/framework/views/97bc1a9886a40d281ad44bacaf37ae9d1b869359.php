

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
									<a class="active" href="<?php echo e(route('frontend.timeline')); ?>" title="" data-ripple="">time line</a>
									<a class="" href="<?php echo e(route('frontend.photopage')); ?>" title="" data-ripple="">Photos</a>
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
									<h6>My Page List</h6>
									<?php $__currentLoopData = $my_page; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<ul class="list-group">

										  <li class="list-group-item"><a href="<?php echo e(route('my_page.view_page',$data->id)); ?>"><?php echo e($data->page_name); ?></a></li>
										  
									</ul>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
									
								</div><!-- add post new box -->
								<div class="">
								
								</div>
							</div><!-- centerl meta -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Social-Network\resources\views/frontend/page/my_page.blade.php ENDPATH**/ ?>