

<?php $__env->startSection('title'); ?> About Us Page  - <?php echo e(config('app.name', 'Laravel')); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <div class="d-flex align-items-center">
                            <h5 class="page-title">Page Management</h5>
                            <ul class="breadcrumb ml-2">
                                <li class="breadcrumb-item"><a href="<?php echo e(route('adminDashboard')); ?>"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="<?php echo e(route('banner.index')); ?>">About Us Page</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

            <?php echo $__env->make('admin.includes._message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <form action="<?php echo e(route('about.update', $about->id)); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="page_name">Page Name <span class="text-danger">*</span>  </label>
                                            <input type="text" class="form-control" placeholder="Please Enter Page Name" name="page_name" id="page_name" value="<?php echo e($about->page_name); ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="title">  Title <span class="text-danger">*</span>  </label>
                                            <input type="text" class="form-control" placeholder="Please Enter  Title" name="title" id="title" value="<?php echo e($about->title); ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="subtitle"> Sub Title <span class="text-danger">*</span>  </label>
                                            <input type="text" class="form-control" placeholder="Please Enter  Sub Title" name="subtitle" id="subtitle" value="<?php echo e($about->subtitle); ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="page_info"> Page Info <span class="text-danger">*</span>  </label>
                                            <textarea name="page_info" id="page_info" cols="30" rows="10" class="form-control">
                                                <?php echo e($about->page_info); ?>

                                            </textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="our_mission"> Our Mission <span class="text-danger">*</span>  </label>
                                            <textarea name="our_mission" id="our_mission" cols="30" rows="10" class="form-control">
                                                <?php echo e($about->our_mission); ?>

                                            </textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="our_vision"> Our Vision <span class="text-danger">*</span>  </label>
                                            <textarea name="our_vision" id="our_vision" cols="30" rows="10" class="form-control">
                                                <?php echo e($about->our_vision); ?>

                                            </textarea>
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="image"> Image <span class="text-danger">*</span>  </label>
                                            <input type="file" class="form-control" placeholder="Please Enter Service Image" name="image" id="image" accept="image/*" onchange="readURL(this);">
                                        </div>

                                        <div class="col-md-12" style="margin-bottom: 20px">
                                            <img src="<?php echo e(asset('public/uploads/'.$about->image)); ?>" alt="" id="one">
                                        </div>
                                    </div>

                                    <br>








                                    <div class="col-md-12">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-success text-center">Update About Us Details</button>
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
            $('#page_info').summernote({
                height: 200
            });
        });
        $(document).ready(function() {
            $('#our_mission').summernote({
                height: 200
            });
        });

        $(document).ready(function() {
            $('#our_vision').summernote({
                height: 200
            });
        });
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.includes.admin_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lawproject\resources\views/admin/about/index.blade.php ENDPATH**/ ?>