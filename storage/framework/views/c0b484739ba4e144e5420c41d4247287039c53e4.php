



<?php $__env->startSection('header'); ?>


<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<div class="col-lg-6">
		
<div class="central-meta">
			<div class="editing-info">
				<h5 class="f-title"><i class="ti-info-alt"></i> E-Library</h5>

				<form method="post" action="<?php echo e(route('elibrary.store')); ?>" enctype="multipart/form-data">
					<?php echo csrf_field(); ?>
					<div class="form-group half">	
					  <input type="text" name="title" id="input" required="required"/>
					  <label class="control-label" for="input">Title</label><i class="mtrl-select"></i>
					</div>

					<div class="form-group ">
						<h6>File</h6>	
						<input type="file" accept=".xlsx,.xls,image/*,.doc, .docx,.ppt, .pptx,.txt,.pdf" name="document" required="required"/>
	 
	                </div>
	                 <input type="hidden" name="user_id" id="" class="form-control" value="">
					
					<div class="submit-btns">
						<button type="button" class="mtr-btn"><span>Cancel</span></button>
						<button type="submit" class="mtr-btn"><span>Update</span></button>
					</div>
				</form>
			</div>
			
		</div>

	
	</div><!-- centerl meta -->



	

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\social-network\resources\views/frontend/page/my_pages/elibraryform.blade.php ENDPATH**/ ?>