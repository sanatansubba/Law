

<?php $__env->startSection('title'); ?> Site Settings - <?php echo e(config('app.name', 'Laravel')); ?> <?php $__env->stopSection(); ?>

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
                                <li class="breadcrumb-item active">Site Settings</li>
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
                            <h5 class="card-title">Site Settings</h5>
                        </div>

                        <?php echo $__env->make('admin.includes._message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <div class="card-body">


                            <form method="post" action="<?php echo e(route('udpateSetting')); ?>" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>

                                <div class="row form-group">
                                    <label for="site_title" class="col-sm-3 col-form-label input-label">Site Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="site_title" id="site_title" value="<?php echo e($setting->site_title); ?>">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <label for="site_subtitle" class="col-sm-3 col-form-label input-label">Site Sub Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="site_subtitle" id="site_subtitle" value="<?php echo e($setting->site_subtitle); ?>">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <label for="address" class="col-sm-3 col-form-label input-label">Address</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="address" id="address" value="<?php echo e($setting->address); ?>">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <label for="phone" class="col-sm-3 col-form-label input-label">Phone</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="phone" id="phone" value="<?php echo e($setting->phone); ?>">
                                    </div>
                                </div>


                                <div class="row form-group">
                                    <label for="alt_phone" class="col-sm-3 col-form-label input-label">Alternate Phone</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="alt_phone" id="alt_phone" value="<?php echo e($setting->alt_phone); ?>">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <label for="email" class="col-sm-3 col-form-label input-label">Email Address</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" name="email" id="email" value="<?php echo e($setting->email); ?>">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <label for="footer_info" class="col-sm-3 col-form-label input-label">Footer Info</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="footer_info" id="footer_info" value="<?php echo e($setting->footer_info); ?>">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <label for="map" class="col-sm-3 col-form-label input-label">Map</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="map" id="map" value="<?php echo e($setting->map); ?>">
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

    </script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.includes.admin_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\law\resources\views/admin/theme/setting.blade.php ENDPATH**/ ?>