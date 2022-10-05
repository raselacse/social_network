
<?php $__env->startSection('content'); ?>
    <div class="content animate-panel">
        <div class="row">
         <div class="col-lg-12 text-center">
                <h2>
                    <?php echo $title->site_title; ?>

                </h2>
                <p class="col-md-offset-1">
                    <!--Better Customer Experience-->
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 text-center">
                
                <div class="card">
                   <div class="card-body">
                    <h5 class="card-title">General User</h5>
                    <p class="card-text"><?php echo e(isset($user)? $user:0); ?></p>
                    <a href="<?php echo e(url('all-user')); ?>" class="btn btn-primary">See All Users</a>
                  </div>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\social-network\resources\views/dashboard/index.blade.php ENDPATH**/ ?>