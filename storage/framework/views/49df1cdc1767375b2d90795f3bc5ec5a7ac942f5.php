

<?php $__env->startSection('site_title'); ?>
      About Us Page
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
                        <h1><?php echo e($about->page_name); ?></h1>
                        <span>Home <i class="fas fa-chevron-right"></i> <a href="#">About Us</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!--ABOUT US MAIN-->
<section class="about-us-main">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="about-us-main-left">
                    <img src="<?php echo e(asset('public/uploads/'.$about->image)); ?>" alt="About Us" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="about-us-main-right">
                    <h2><?php echo e($about->title); ?></h2>
                    <?php echo $about->page_info; ?>

                </div>
            </div>
        </div>
    </div>
</section>
<!--MISSION & VISSION-->
<section class="vision">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="our-vision">
                    <h5>OUR VISION</h5>
                    <ul>
                        <?php echo $about->our_vision; ?>


                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="our-mission">
                    <h5>OUR MISSION</h5>
                    <ul>
                        <?php echo $about->our_mission; ?>


                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('front.includes.front_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\law\resources\views/front/aboutUs.blade.php ENDPATH**/ ?>