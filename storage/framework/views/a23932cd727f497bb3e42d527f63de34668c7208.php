

<?php $__env->startSection('site_title'); ?>
    Search
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="header">
        <div class="container-custom">
            <div class="header-wrapper">
                <div class="header-logo w-100">
                    <?php echo $__env->make('front.includes.nav_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                </div>
            </div>
            <div class="owl-carousel next-owl owl-theme">
                <div class="item">
                    <div class="bread" style="height: 40vh">
                        <img src="<?php echo e(asset('public/frontend/assets/images/bread-image.jpg')); ?>" class="img-fluid" alt="Carousel">
                        <div class="overlay"></div>
                        <div class="breadcrumb-section">
                            <h1>Search</h1>
                            <span>Home <i class="fas fa-chevron-right"></i> <a href="#">Search List</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="our-teams">
        <div class="container">

            <form action="<?php echo e(route('search')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <input type="text" name="query" class="form-control" placeholder="Search Here">
            </form>

            <hr>

            <?php echo $__env->make('admin.includes._message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="row">
                <?php if($lawyers->count() > 0): ?>
                <?php $__currentLoopData = $lawyers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="teams-cards">
                            <div class="teams-image">
                                <img src="<?php echo e(asset('public/uploads/admin/'.$data->image)); ?>" alt="<?php echo e($data->name); ?>" class="img-fluid">
                            </div>
                            <h4><?php echo e($data->name); ?></h4>
                            <h6><?php echo e($data->speciality); ?></h6>
                            <p class="line-clamp-5">
                                <?php echo $data->info; ?>

                            </p>

                            <a data-toggle="modal" data-target="#exampleModal<?php echo e($data->id); ?>" class="btn btn-info btn-sm" style="color: white">Contact Me</a>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal<?php echo e($data->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <form action="<?php echo e(route('contactMessageLawyer')); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="admin_id" value="<?php echo e($data->id); ?>">
                                    <input type="hidden" name="admin_email" value="<?php echo e($data->email); ?>">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Send Message</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <input type="text" required name="name" placeholder="Enter Your Name" class="form-control" style="margin-bottom: 10px;">
                                        <input type="email" required name="email" placeholder="Enter Your Email" class="form-control" style="margin-bottom: 10px;">
                                        <input type="text" required name="phone" placeholder="Enter Your Phone" class="form-control" style="margin-bottom: 10px;">
                                        <textarea required style="margin-bottom: 10px;" name="message" placeholder="Your Query" id="message-box" width="100%" rows="5" class="form-control"></textarea>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Send  Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <h3>No Results found for <span style="color:red"><?php echo e($query); ?></span></h3>
                    <?php endif; ?>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('front.includes.front_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lawproject\resources\views/front/search.blade.php ENDPATH**/ ?>