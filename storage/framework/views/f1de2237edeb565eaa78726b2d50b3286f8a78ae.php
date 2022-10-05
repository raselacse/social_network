

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
									<a class="" href="<?php echo e(route('frontend.photopage')); ?>" title="" data-ripple="">Photos</a>
									<!-- <a class="" href="<?php echo e(route('frontend.videospage')); ?>" title="" data-ripple="">Videos</a> -->
									<a class="active" href="<?php echo e(route('frontend.friendspage')); ?>" title="" data-ripple="">Friends</a>
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
									<div class="frnds">
										<ul class="nav nav-tabs">
											 <li class="nav-item"><a class="active" href="#frends" data-toggle="tab">My Friends</a> <span><?php echo e($myfriendcount); ?></span></li>
											 <li class="nav-item"><a class="" href="#frends-req" data-toggle="tab">Friend Requests</a><span><?php echo e($requestcount); ?></span></li>

											 <li class="nav-item"><a class="" href="#frends-list" data-toggle="tab">Friend List</a></li>
										</ul>

										<!-- Tab panes -->
										<div class="tab-content">

											
										  <div class="tab-pane active fade show " id="frends" >
										  	<?php $__currentLoopData = $myfriends; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<ul class="nearby-contct">
												
											<li>
												<div class="nearly-pepls">
													<figure>
														<a href="time-line.html" title=""><img src="<?php echo e(asset('public/frontend/images/resources/friend-avatar9.jpg')); ?>" alt=""></a>
													</figure>
													<div class="pepl-info">
														<h4><a href="time-line.html" title=""><?php echo e($data->full_name); ?></a></h4>
														<span>ftv model</span>
														
														<a href="#" title="" class="add-butn" data-ripple="">unfriend</a>
													</div>
												</div>
											</li>

											
										</ul>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
											<div class="lodmore"><button class="btn-view btn-load-more"></button></div>

										  </div>
										  

										  <div class="tab-pane fade" id="frends-req" >
										  	<?php $__currentLoopData = $friendRequest; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										  	<?php 

                                             $getUesr = App\Models\User::find($data->friend_id);
                                            

										  	 ?>
										<ul class="nearby-contct">
											<li>
												<div class="nearly-pepls">
													<figure>
														<a href="time-line.html" title=""><img src="<?php echo e(asset('public/frontend/images/resources/friend-avatar9.jpg')); ?>" alt=""></a>
													</figure>
													
													<div class="pepl-info">
														<h4><a href="time-line.html" title=""><?php echo e($getUesr->full_name); ?></a></h4>
														

														<a href="<?php echo e(route('friend.removefriend',$data->id)); ?>" title="" class="add-butn more-action" data-ripple="" style="margin-right: 50px;">Remove</a>

														<a href="<?php echo e(route('friend.confrimfriend',$data->id)); ?>" title="" class="add-butn" data-ripple="">Confrim Request</a>


													</div>
												</div>
											</li>	

											
										</ul>	
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
											  <button class="btn-view btn-load-more"></button>
										  </div>



										  <div class="tab-pane fade" id="frends-list" >
										  	<?php $__currentLoopData = $allfriends; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                             
                                             <?php

                                             $check = DB::table('friends')->where('user_request', Auth::user()->id)->where('friend_id',$data->id)->where('status',0)->first();

                                             ?>

										<ul class="nearby-contct">
											<li>
												<div class="nearly-pepls">
													<figure>
														<a href="time-line.html" title=""><img src="<?php echo e(asset('public/frontend/images/resources/friend-avatar9.jpg')); ?>" alt=""></a>
													</figure>
													<div class="pepl-info">
														<h4><a href="time-line.html" title=""><?php echo e($data->full_name); ?></a></h4>
														<span>ftv model</span>
                                                         <a href="<?php echo e(route('friend.addfriend',$data->id)); ?>" title="" class="add-butn" data-ripple="">add friend</a>


													</div>
												</div>
											</li>	

											
										</ul>	
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
											  <button class="btn-view btn-load-more"></button>
										  </div>


										 


										</div>
									</div>
								</div>	
							</div><!-- centerl meta -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\social-network\resources\views/frontend/page/friendspage.blade.php ENDPATH**/ ?>