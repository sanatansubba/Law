

<?php $__env->startSection('title'); ?> Service Management - <?php echo e(config('app.name', 'Laravel')); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <div class="d-flex align-items-center">
                            <h5 class="page-title">Service Management</h5>
                            <ul class="breadcrumb ml-2">
                                <li class="breadcrumb-item"><a href="<?php echo e(route('adminDashboard')); ?>"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="<?php echo e(route('banner.index')); ?>">Service</a></li>
                                <li class="breadcrumb-item active">Edit Service</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto text-right">
                        <a href="<?php echo e(route('service.index')); ?>" class="btn btn-primary add-button"><i class="feather-eye"></i></a>
                    </div>
                </div>
            </div>

            <?php echo $__env->make('admin.includes._message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <form action="<?php echo e(route('service.update', $service->id)); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="title">Service Title <span class="text-danger">*</span>  </label>
                                            <input type="text" class="form-control" placeholder="Please Enter Title" name="title" id="title" value="<?php echo e($service->title); ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="subtitle">Banner Sub Title <span class="text-danger">*</span>  </label>
                                            <input type="text" class="form-control" placeholder="Please Enter Sub Title" name="subtitle" id="subtitle" value="<?php echo e($service->subtitle); ?>">
                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="service_info"> Service Info <span class="text-danger">*</span>  </label>
                                            <textarea name="service_info" id="service_info" cols="30" rows="10" class="form-control">
                                                <?php echo e($service->service_info); ?>

                                            </textarea>
                                        </div>
                                    </div>









                                    <div class="col-md-12">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-success text-center">Update Service</button>
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

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>


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

    <script>
        $(document).ready(function() {
            $('#service_info').summernote({
                height: 200
            });
        });

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.includes.admin_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lawproject\resources\views/admin/service/edit.blade.php ENDPATH**/ ?>