

<?php $__env->startSection('title'); ?> Admin Profile - <?php echo e(config('app.name', 'Laravel')); ?> <?php $__env->stopSection(); ?>

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
                                <li class="breadcrumb-item active">My Profile</li>
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
                            <h5 class="card-title">Basic information</h5>
                        </div>
                        <div class="card-body">

                            <form method="post" action="<?php echo e(route('updateProfile', $user->id)); ?>" enctype="multipart/form-data">

                                <?php echo $__env->make('admin.includes._message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                <?php echo csrf_field(); ?>
                                <div class="row form-group">
                                    <label for="name" class="col-sm-3 col-form-label input-label">Profile</label>
                                    <div class="col-sm-9">
                                        <div class="d-flex align-items-center">
                                            <label class="avatar avatar-xxl profile-cover-avatar m-0" for="edit_img">
                                                <?php if(empty($user->image)): ?>
                                                <img id="avatarImg" class="avatar-img" src="<?php echo e(asset('public/backend/assets/img/profiles/avatar-02.jpg')); ?>" alt="Profile Image">
                                                <?php else: ?>
                                                    <img id="avatarImg" class="avatar-img" src="<?php echo e(asset('public/uploads/admin/'.$user->image)); ?>" alt="Profile Image">
                                                <?php endif; ?>
                                                    <input type="file" name="image" id="edit_img" accept="image/*" onchange="readURL(this);">
                                                <span class="avatar-edit"><i class="feather-edit-2 avatar-uploader-icon shadow-soft"></i></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label for="name" class="col-sm-3 col-form-label input-label">Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" value="<?php echo e($user->name); ?>">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label for="email" class="col-sm-3 col-form-label input-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="<?php echo e($user->email); ?>">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label for="phone" class="col-sm-3 col-form-label input-label">Phone <span class="text-muted">(Optional)</span></label>
                                    <div class="col-sm-9">
                                        <input type="text" name="mobile" class="form-control" id="phone" value="<?php echo e($user->mobile); ?>">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <label for="addressline1" class="col-sm-3 col-form-label input-label">Address (Optional) </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="address" name="address" placeholder="Your address" value="<?php echo e($user->address); ?>">
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
                    $('#avatarImg')
                        .attr('src', e.target.result)
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.includes.admin_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lawproject\resources\views/admin/profile/profile.blade.php ENDPATH**/ ?>