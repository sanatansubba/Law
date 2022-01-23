

<?php $__env->startSection('title'); ?> Theme Settings - <?php echo e(config('app.name', 'Laravel')); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="d-flex align-items-center">
                            <h5 class="page-title">Dashboard</h5>
                            <ul class="breadcrumb ml-2">
                                <li class="breadcrumb-item"><a href="<?php echo e(route('adminDashboard')); ?>"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="<?php echo e(route('adminDashboard')); ?>">Dashboard</a></li>
                                <li class="breadcrumb-item active">Theme Settings</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-3 col-md-4">

                    <?php echo $__env->make('admin.includes._settings_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                </div>
                <div class="col-xl-9 col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Theme Settings</h5>
                        </div>

                        <?php echo $__env->make('admin.includes._message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <div class="card-body">


                            <form method="post" action="<?php echo e(route('updateTheme')); ?>" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="row form-group">
                                    <label for="website_name" class="col-sm-3 col-form-label input-label">Website Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="website_name" id="website_name" value="<?php echo e($theme->website_name); ?>">
                                    </div>
                                    <p id="correct_password">
                                </div>



                                <div class="row form-group">
                                    <label for="logo" class="col-sm-3 col-form-label input-label">Logo</label>
                                    <div class="col-sm-9">
                                        <input type="file" class="form-control" name="logo" id="logo" onchange="readURL(this)">
                                        <br>
                                        <img  src="<?php echo e(asset('public/uploads/'.$theme->logo)); ?>" class="img-fluid"  alt="" id="logo" <?php if(!empty($theme->logo)): ?> style="width: 100px;border: 1px solid gray; padding: 4px" <?php endif; ?>>
                                    </div>
                                </div>


                                <div class="row form-group">
                                    <label for="website_name" class="col-sm-3 col-form-label input-label">Favicon</label>
                                    <div class="col-sm-9">
                                        <input type="file" class="form-control" name="favicon" id="favicon" onchange="readURL2(this)">
                                        <br>

                                        <img  src="<?php echo e(asset('public/uploads/'.$theme->favicon)); ?>" class="img-fluid"  alt="" id="two" <?php if(!empty($theme->favicon)): ?> style="width: 50px;border: 1px solid gray; padding: 4px" <?php endif; ?>>
                                    </div>
                                </div>




                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>
    <script type="text/javascript">
        function readURL(input){
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#logo')
                        .attr('src', e.target.result)
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

        function readURL2(input){
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#two')
                        .attr('src', e.target.result)
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.includes.admin_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\law\resources\views/admin/theme/theme.blade.php ENDPATH**/ ?>