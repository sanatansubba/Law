

<?php $__env->startSection('site_title'); ?>
   Service Page
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
                        <h1>Services</h1>
                        <span>Home <i class="fas fa-chevron-right"></i> <a href="#">Services</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="fullwidth-block">
    <div class="container">



        <div class="row feature-list-section">
            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-4" style="padding-bottom: 30px;">
                    <div class="feature">
                        <header>
                            <div class="feature-title-copy">
                                <h2 class="feature-title"><?php echo e($service->title); ?></h2>
                                <small class="feature-subtitle"><?php echo e($service->subtitle); ?></small>
                            </div>
                        </header>
                        <p><?php echo $service->service_info; ?></p>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('front.includes.front_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\law\resources\views/front/services.blade.php ENDPATH**/ ?>