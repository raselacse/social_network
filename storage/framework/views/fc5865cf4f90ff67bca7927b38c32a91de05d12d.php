 

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
		
		<!-- table -->
		<div class="content animate-panel central-meta">
			<h4>Page List</h4>

		   <div class="row ">
            <div class="col-lg-12 text-center">
              

                <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
        <thead>
            <tr>
                <th>Page name</th>
                <th>Action</th>
                

            </tr>
        </thead>
        <tbody>
            <?php if(count($my_page)>0): ?>

               <?php $__currentLoopData = $my_page; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        
                       

                        <td><a href="<?php echo e(route('my_page.view_page',$data->id)); ?>"><?php echo e($data->page_name); ?></a></td>
  
                        <td>
                        	<?php if(Auth::user()->id == $data->created_by): ?>

                            <!-- <a href="<?php echo e(route('create_page.edit_page',$data->id)); ?>" class="btn btn-info btn-xs" > <i class="fa fa-edit"></i></a> -->
                            <a href="<?php echo e(route('create_page.delete_page',$data->id)); ?>" class="btn btn-danger btn-xs" > <i class="fa fa-trash"></i></a>
                          <?php endif; ?>

                        </td>
    
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                    <tr>
                        <td colspan="3">
                            No page Yet
                        </td>
                    </tr>
                    <?php endif; ?>
          
        </tbody>
    </table>

                <p class="col-md-offset-1">
                    <!--Better Customer Experience-->
                </p>
            </div>
        </div>
    </div>

	
	</div><!-- centerl meta -->


                           
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\social-network\resources\views/frontend/page/my_page.blade.php ENDPATH**/ ?>