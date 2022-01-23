

<?php $__env->startSection('site_title'); ?>
    Nepal Law Page
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
                        <h1>Nepal Law</h1>
                        <span>Home <i class="fas fa-chevron-right"></i> <a href="#">Nepal Law</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="pdf-download">
        <h2>Existing Law</h2>
        <ul>
            <?php $__currentLoopData = $docs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><a href="<?php echo e(url($data->document)); ?>" download><?php echo e($data->title); ?></a></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
</div>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('front.includes.front_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lawproject\resources\views/front/nepalLaw.blade.php ENDPATH**/ ?>