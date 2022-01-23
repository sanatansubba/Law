

<?php $__env->startSection('title'); ?> Admin Dashboard - <?php echo e(config('app.name', 'Laravel')); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card-counter primary">
                            <i class="fa fa-inbox"></i>
                            <span class="count-numbers"><?php echo e($contactMessages); ?></span>
                            <span class="count-name">Contact Messages</span>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card-counter danger">
                            <i class="fa fa-shopping-cart"></i>
                            <span class="count-numbers"><?php echo e($serviceCount); ?></span>
                            <span class="count-name">Services</span>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card-counter success">
                            <i class="fa fa-database"></i>
                            <span class="count-numbers"><?php echo e($blogCount); ?></span>
                            <span class="count-name">Blogs</span>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card-counter info">
                            <i class="fa fa-users"></i>
                            <span class="count-numbers"><?php echo e($lawyerCount); ?></span>
                            <span class="count-name">Lawyers</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.includes.admin_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\law\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>