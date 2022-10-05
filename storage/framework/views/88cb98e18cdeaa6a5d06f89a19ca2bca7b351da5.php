

<?php $__env->startSection('header'); ?>


<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<div class="col-lg-6">
		
		<!-- table -->
		<div class="content animate-panel central-meta">
			<button class="btn btn-info" style="margin-bottom: 10px;"><a href="<?php echo e(route('elibrary.form')); ?>">Add File</a></button>	
        <div class="row ">
            <div class="col-lg-12 text-center">
              

                <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>File</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
            <?php if(count($view)>0): ?>

                <?php $__currentLoopData = $view; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        
                        <td><?php echo e($loop->iteration); ?></td>

                        <td><?php echo e($data->title); ?></td>

                        <td><a href="<?php echo e(asset('public/post/document/'.$data->document)); ?>" download><i class="fa fa-download" aria-hidden="true"></i></a>
                        </td>
                            
                        <td>
                        	<?php if(Auth::user()->id == $data->created_by): ?>

                            <!-- <a href="<?php echo e(route('elibrary.edit',$data->id)); ?>" class="btn btn-info btn-xs" > <i class="fa fa-edit"></i></a> -->
                            <a href="<?php echo e(route('elibrary.delete',$data->id)); ?>" class="btn btn-danger btn-xs" > <i class="fa fa-trash"></i></a>
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
<?php echo $__env->make('frontend.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\social-network\resources\views/frontend/page/elibrary.blade.php ENDPATH**/ ?>