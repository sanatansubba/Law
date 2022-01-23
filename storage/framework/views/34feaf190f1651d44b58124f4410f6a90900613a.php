

<?php $__env->startSection('title'); ?> Lawyer Management - <?php echo e(config('app.name', 'Laravel')); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <div class="d-flex align-items-center">
                            <h5 class="page-title">Lawyer Management</h5>
                            <ul class="breadcrumb ml-2">
                                <li class="breadcrumb-item"><a href="<?php echo e(route('adminDashboard')); ?>"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="<?php echo e(route('banner.index')); ?>">Lawyer</a></li>
                                <li class="breadcrumb-item"><a href="<?php echo e(route('banner.index')); ?>">Lawyer</a></li>
                                <li class="breadcrumb-item active">Edit Lawyer</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto text-right">
                        <a href="<?php echo e(route('lawyer.index')); ?>" class="btn btn-primary add-button"><i class="feather-eye"></i></a>
                    </div>
                </div>
            </div>

            <?php echo $__env->make('admin.includes._message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <form action="<?php echo e(route('lawyer.update', $lawyer->id)); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Name <span class="text-danger">*</span>  </label>
                                            <input type="text" class="form-control" placeholder="Please Enter Name" name="name" id="name" value="<?php echo e($lawyer->name); ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">E-Mail Address <span class="text-danger">*</span>  </label>
                                            <input type="email" class="form-control" placeholder="Please Enter Email" name="email" id="email" value="<?php echo e($lawyer->email); ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="mobile"> Mobile <span class="text-danger">*</span>  </label>
                                            <input type="text" class="form-control" placeholder="Please Enter Mobile Number" name="mobile" id="mobile" value="<?php echo e($lawyer->mobile); ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="address"> Address <span class="text-danger">*</span>  </label>
                                            <input type="text" class="form-control" placeholder="Please Enter Address" name="address" id="address" value="<?php echo e($lawyer->address); ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="speciality"> Speciality <span class="text-danger">*</span>  </label>
                                            <input type="text" class="form-control" placeholder="Please Enter Speciality" name="speciality" id="speciality" value="<?php echo e($lawyer->speciality); ?>">
                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="info"> Lawyer Info <span class="text-danger">*</span>  </label>
                                            <textarea name="info" id="info" cols="30" rows="10" class="form-control">
                                                <?php echo e($lawyer->info); ?>

                                            </textarea>
                                        </div>
                                    </div>




                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="image"> Image <span class="text-danger">*</span>  </label>
                                            <input type="file" class="form-control" placeholder="Please Enter Service Image" name="image" id="image" accept="image/*" onchange="readURL(this);">
                                        </div>

                                        <div class="col-md-12" style="margin-bottom: 20px">
                                            <img src="<?php echo e(asset('public/uploads/admin/'.$lawyer->image)); ?>" alt="" id="one" width="200px">
                                        </div>
                                    </div>

                                    <br>


                                    <div class="col-md-12">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-success text-center">Update Lawyer</button>
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
            $('#info').summernote({
                height: 200
            });
        });

    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.includes.admin_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lawproject\resources\views/admin/lawyer/edit.blade.php ENDPATH**/ ?>