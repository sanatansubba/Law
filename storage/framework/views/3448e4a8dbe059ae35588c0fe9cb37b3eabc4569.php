

<?php $__env->startSection('title'); ?> Download Management - <?php echo e(config('app.name', 'Laravel')); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <div class="d-flex align-items-center">
                            <h5 class="page-title">Download Management</h5>
                            <ul class="breadcrumb ml-2">
                                <li class="breadcrumb-item"><a href="<?php echo e(route('adminDashboard')); ?>"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="<?php echo e(route('banner.index')); ?>">Download</a></li>
                                <li class="breadcrumb-item active">Add New Download</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto text-right">
                        <a href="<?php echo e(route('document.index')); ?>" class="btn btn-primary add-button"><i class="feather-eye"></i></a>
                    </div>
                </div>
            </div>

            <?php echo $__env->make('admin.includes._message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <form action="<?php echo e(route('document.store')); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="title"> Title <span class="text-danger">*</span>  </label>
                                            <input type="text" class="form-control" placeholder="Please Enter  Title" name="title" id="title" value="<?php echo e(old('title')); ?>">
                                        </div>
                                    </div>





                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="image"> File <span class="text-danger">*</span>  </label>
                                            <input type="file" class="form-control" placeholder="Please Enter Service Image" name="document" id="image">
                                        </div>


                                    </div>










                                    <div class="col-md-12">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-success text-center">Add New Document</button>
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

<?php echo $__env->make('admin.includes.admin_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lawproject\resources\views/admin/document/add.blade.php ENDPATH**/ ?>