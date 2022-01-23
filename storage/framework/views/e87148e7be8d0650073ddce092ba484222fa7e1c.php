

<?php $__env->startSection('title'); ?> Banner Management - <?php echo e(config('app.name', 'Laravel')); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <div class="d-flex align-items-center">
                            <h5 class="page-title">Banner Management</h5>
                            <ul class="breadcrumb ml-2">
                                <li class="breadcrumb-item"><a href="<?php echo e(route('adminDashboard')); ?>"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="<?php echo e(route('banner.index')); ?>">Banner</a></li>
                                <li class="breadcrumb-item"><a href="<?php echo e(route('banner.index')); ?>">Banner</a></li>
                                <li class="breadcrumb-item active">Add New Banner</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto text-right">
                        <a href="<?php echo e(route('banner.index')); ?>" class="btn btn-primary add-button"><i class="feather-eye"></i></a>
                    </div>
                </div>
            </div>

            <?php echo $__env->make('admin.includes._message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <form action="<?php echo e(route('banner.store')); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="title">Banner Title <span class="text-danger">*</span>  </label>
                                            <input type="text" class="form-control" placeholder="Please Enter Banner Title" name="title" id="title" value="<?php echo e(old('title')); ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="subtitle">Banner Sub Title <span class="text-danger">*</span>  </label>
                                            <input type="text" class="form-control" placeholder="Please Enter Banner Sub Title" name="subtitle" id="subtitle" value="<?php echo e(old('subtitle')); ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="link">Banner Link<span class="text-danger">*</span>  </label>
                                            <input type="text" class="form-control" placeholder="Please Enter Banner Link" name="link" id="link" value="<?php echo e(old('link')); ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="image"> Image <span class="text-danger">*</span>  </label>
                                            <input type="file" class="form-control" placeholder="Please Enter Service Image" name="image" id="image" accept="image/*" onchange="readURL(this);">
                                        </div>

                                        <div class="col-md-12" style="margin-bottom: 20px">
                                            <img src="https://via.placeholder.com/300x200.png?text=Your+Banner+Image" alt="" id="one">
                                        </div>
                                    </div>

                                    <br>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="priority">Banner Priority<span class="text-danger">*</span>  </label>
                                            <input type="text" class="form-control" placeholder="Please Enter Banner Priority" name="priority" id="priority" value="<?php echo e(old('priority')); ?>">
                                        </div>
                                    </div>








                                    <div class="col-md-12">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-success text-center">Add New Banner</button>
                                        </div>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>





<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>



    <script type="text/javascript">
        function readURL(input){
            if(input.files && input.files[0]){
                var reader = new FileReader();
                reader.onload = function (e){
                    $("#one").attr('src', e.target.result).width(300);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.includes.admin_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lawproject\resources\views/admin/banner/add.blade.php ENDPATH**/ ?>