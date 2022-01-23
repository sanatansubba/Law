

<?php $__env->startSection('title'); ?> Testimonial Management - <?php echo e(config('app.name', 'Laravel')); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <div class="d-flex align-items-center">
                            <h5 class="page-title">Testimonial Management</h5>
                            <ul class="breadcrumb ml-2">
                                <li class="breadcrumb-item"><a href="<?php echo e(route('adminDashboard')); ?>"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="<?php echo e(route('banner.index')); ?>">Testimonial</a></li>
                                <li class="breadcrumb-item"><a href="<?php echo e(route('banner.index')); ?>">Testimonial</a></li>
                                <li class="breadcrumb-item active">Add New Testimonial</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto text-right">
                        <a href="<?php echo e(route('testimonial.index')); ?>" class="btn btn-primary add-button"><i class="feather-eye"></i></a>
                    </div>
                </div>
            </div>

            <?php echo $__env->make('admin.includes._message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <form action="<?php echo e(route('testimonial.store')); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Name <span class="text-danger">*</span>  </label>
                                            <input type="text" class="form-control" placeholder="Please Enter Name" name="name" id="name" value="<?php echo e(old('name')); ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="position">Position <span class="text-danger">*</span>  </label>
                                            <input type="text" class="form-control" placeholder="Please Enter Position" name="position" id="position" value="<?php echo e(old('position')); ?>">
                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="details"> Details <span class="text-danger">*</span>  </label>
                                            <textarea name="details" id="details" cols="30" rows="10" class="form-control">
                                            </textarea>
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="image"> Image <span class="text-danger">*</span>  </label>
                                            <input type="file" class="form-control" placeholder="Please Enter Service Image" name="image" id="image" accept="image/*" onchange="readURL(this);">
                                        </div>

                                        <div class="col-md-12" style="margin-bottom: 20px">
                                            <img src="https://via.placeholder.com/300x200.png?text=Your+Testimonial+Image" alt="" id="one">
                                        </div>
                                    </div>

                                    <br>










                                    <div class="col-md-12">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-success text-center">Add New Testimonial</button>
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
            $('#details').summernote({
                height: 200
            });
        });

    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.includes.admin_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lawproject\resources\views/admin/testimonial/add.blade.php ENDPATH**/ ?>