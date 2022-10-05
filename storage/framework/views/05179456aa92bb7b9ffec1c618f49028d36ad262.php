

<style type="text/css">

    .custom-file-upload {
        border: 1px solid #ccc;
        display: inline-block;
        padding: 6px 12px;
        cursor: pointer;
    }
    .bootstrap-select.btn-group, .bootstrap-select.btn-group[class*="span"]{
        margin-bottom: 0px !important;
    }
</style>

<?php $__env->startSection('content'); ?>
    <div class="small-header transition animated fadeIn">
        <div class="hpanel">
            <div class="panel-body">
                <h2 class="font-light m-b-xs">
                    <h3>
                        Clear All Cache
                    </h3>
                </h2>
            </div>
            <?php echo $__env->make('layouts.flash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </div>

    <div class="content animate-panel">
        <div class="row">
            <div class="col-sm-6 col-md-12">
                <div class="hpanel">
                    <div class="panel-heading hbuilt">
                        <h3>
                            Clear All Cache
                        </h3>
                    </div>

                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped middle-align">
                                <thead>
                                <tr class="center">
                                    <th class="text-center" width="5%">SL#</th>
                                    <th class="text-center" >Function Name</th>
                                    <th class="text-center" width="10%"> <?php echo trans('english.ACTION'); ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php for($sl=0; $sl<4; $sl++): ?>
                                    <tr>
                                        <td><?php echo e($sl+1); ?></td>
                                        <?php if($sl==0): ?>
                                            <td><?php echo e('View Clear'); ?></td>
                                        <?php elseif($sl==1): ?>
                                            <td><?php echo e('Route Clear'); ?></td>
                                        <?php elseif($sl==2): ?>
                                            <td><?php echo e('Cache Clear'); ?></td>
                                        <?php else: ?>
                                            <td><?php echo e('Config Clear'); ?></td>
                                        <?php endif; ?>

                                        <td class="text-center">
                                            <a class="btn btn-danger btn-xs" href="<?php echo e(URL::to("clear-cache/".$sl)); ?>" title="Delete" onclick="return confirm('Are You Sure?');">
                                                <i class="icon-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endfor; ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>



<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\social-network\resources\views/clear-cache/index.blade.php ENDPATH**/ ?>