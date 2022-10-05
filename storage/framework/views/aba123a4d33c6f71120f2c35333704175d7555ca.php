
<?php $__env->startSection('content'); ?>
    <div class="content animate-panel">
    	<div class="card">
    		<h2>User Control</h2>
        <div class="row">
            <div class="col-lg-12 text-center">
              <!--   <h2>
                    <?php echo $title->site_title; ?>

                </h2> -->

                <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
        <thead>
            <tr>
            	<th>ID</th>
                <th>User name</th>
                <th>Email</th>
                <th>Image</th>
                <th>Post</th>
                <th>Page</th>
                <!-- <th>Friend</th> -->
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
            	<?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						
						<td><?php echo e($loop->iteration); ?></td>
						<td><?php echo e($data->full_name); ?></td>
						<td><?php echo e($data->email); ?></td>
						<td> <img height="50px" width="40px" src="<?php echo e(asset('public/profile/profile_image/'.$data->profile_image)); ?>" alt="not found"></td>

						<td><button class="btn btn-primary"><a href="<?php echo e(route('all_user_post',$data->id)); ?>" style="color:white;">All Post</a></button></td>
						<td><button class="btn btn-success" ><a href="<?php echo e(route('all_user_page',$data->id)); ?>"style="color:white;">All Page</a></button></td>
						<!-- <td><button class="btn btn-warning" ><a href="<?php echo e(route('all_user_friend',$data->id)); ?>"style="color:white;">All Friend</a></button></td> -->
						 	
						<td>
							<a href="<?php echo e(route('edit_user',$data->id)); ?>" class="btn btn-info btn-xs" > <i class="fas fa-pencil-alt"></i></a>
							<a href="<?php echo e(route('delete_user',$data->id)); ?>" class="btn btn-danger btn-xs" > <i class="fas fa-trash-alt"></i></a>
							

						</td>
	
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          
        </tbody>
    </table>

                <p class="col-md-offset-1">
                    <!--Better Customer Experience-->
                </p>
            </div>
        </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>





    <script>
        $(document).ready(function(){

            $('.randColorChange').each(function() {
                $(this).css('background',randomColor());
                $(this).css('color','white');
                $(this).css('text-align','center');

            });

        });

        var safeColors = ['11','33','66','99','cc','ee'];//["#00e64d","#ff80aa","#990099","#30DDBC","#ff8533"];
        var rand = function() {
            return Math.floor(Math.random()*6);
        };
        var randomColor = function() {
            var r = safeColors[rand()];
            var g = safeColors[rand()];
            var b = safeColors[rand()];
            return "#"+r+g+b;
            //return r;
        };
    </script>

    <script type="text/javascript">
    	$(document).ready(function() {
    var table = $('#example').DataTable( {
        responsive: true
          } );
 
    new $.fn.dataTable.FixedHeader( table );
         } );
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\social-network\resources\views/old_frontend/all_user.blade.php ENDPATH**/ ?>