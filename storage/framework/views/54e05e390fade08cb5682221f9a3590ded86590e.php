

<?php $__env->startSection('header'); ?>
<section>
	<?php $__currentLoopData = $my_page; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="feature-photo">
			<figure><img src="<?php echo e(asset('public/post/banner/'.$data->banner)); ?>" alt=""></figure>
			
			
			<div class="container-fluid">
				<div class="row merged">
					<div class="col-lg-2 col-sm-3">
						
					</div>
					<div class="col-lg-10 col-sm-9">
						<div class="timeline-info">
							<ul>
								<li class="admin-name">
								  <h5><?php echo e($data->page_name); ?></h5>
								  <span><?php echo e($data->email); ?></span>
								</li>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</section>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
          <div class="col-lg-6">
          	
								<div class="central-meta">
									<div class="new-postbox">
										<figure>
											<img src="<?php echo e(asset('frontend/images/resources/admin2.jpg')); ?>" alt="">
										</figure>
										<div class="newpst-input">
											<form method="post" action="<?php echo e(route('my_page.store')); ?>"  enctype="multipart/form-data">
												<?php echo csrf_field(); ?>
												<textarea rows="2" name="page_post_content" placeholder="write something"></textarea>
												<div class="attachments">
													<ul>
														
														
														<li>
															<i class="fa fa-image"></i>
															<label class="fileContainer">
																<input type="file"
																accept="image/png, image/jpeg,image/jpg"
																 name="image">
															</label>
														</li>
														
														
														<input type="hidden" name="username" id="" class="form-control" value="">
														<input type="hidden" name="user_id" id="" class="form-control" value="">

														<input type="hidden" name="page_id"  class="form-control" value="<?php echo e(Request::segment(2)); ?>">

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
											  <?php $__currentLoopData = $view_page_post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

											  
											  <?php 


											  $user_info = App\Models\User::find($data1->user_id);


											   ?>
											  
											<figure>
												<img src="<?php echo e(asset('public/profile/profile_image/'.$user_info->profile_image)); ?>" alt="">
											</figure>
                                           

											<div class="friend-name">
												<ins><a href="time-line.html" title=""><?php echo e($user_info->full_name); ?></a></ins>
												<span>published:<?php echo e($data1->created_at); ?> </span>
											</div>
											<div class="post-meta">
												<div class="description">
													
													<p>
														<?php echo e($data1->page_post_content); ?>

													</p>
												</div>

												
											
												<img src="<?php echo e(asset('public/post/image/'.$data1->image)); ?>" alt="">
                                              <div class="we-video-info">
													<ul>
														<li>
															<span class="views" data-toggle="tooltip" title="views">
																<i class="fa fa-eye"></i>
																<ins>1.2k</ins>
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
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

										</div>
										
									</div>
								</div>	

								</div>		

							</div>

							
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\social-network\resources\views/frontend/page/my_pages/my_pages.blade.php ENDPATH**/ ?>