<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!--SLICK SLIDER-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
          integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
          integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--SLICK SLIDER-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
          integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
          integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--FONT AWESOME-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
          integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <!--CUSTOM CSS-->
    <link rel="stylesheet" href="<?php echo e(asset('public/frontend/assets/css/about.css')); ?> ">
    <link rel="stylesheet" href="<?php echo e(asset('public/frontend/assets/css/services.css')); ?> ">
    <link rel="stylesheet" href="<?php echo e(asset('public/frontend/assets/css/contact.css')); ?> ">
    <link rel="stylesheet" href="<?php echo e(asset('public/frontend/assets/css/blog.css')); ?> ">
    <link rel="stylesheet" href="<?php echo e(asset('public/frontend/assets/css/blog-detail.css')); ?> ">
    <link rel="stylesheet" href="<?php echo e(asset('public/frontend/assets/css/portfolio.css')); ?> ">
    <link rel="stylesheet" href="<?php echo e(asset('public/frontend/assets/css/portfolio-detail.css')); ?> ">
    <link rel="stylesheet" href="<?php echo e(asset('public/frontend/assets/css/style.css')); ?> ">
    <link rel="stylesheet" href="<?php echo e(asset('public/frontend/assets/css/responsive.css')); ?> ">
    <!--TITLE-->
    <title>Law Portal</title>
    <!--FAVICON-->
    <link rel="icon" href="<?php echo e(asset('public/frontend/assets/images/logo.png')); ?>" type="image/x-icon">





</head>

<body>
<section class="header">
    <div class="container-custom">
        <div class="header-wrapper">
            <div class="header-logo w-100">
                <?php echo $__env->make('front.includes.nav_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
        <div class="owl-carousel top-owl owl-theme">
       <?php
           $banners = \App\Models\Banner::orderBy('priority', 'ASC')->get();
       ?>
            <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="item">
                <img src="<?php echo e(asset('public/uploads/banner/'.$banner->image)); ?>" class="img-fluid" alt="<?php echo e($banner->title); ?>">
                <div class="overlay"></div>
                <div class="caption">
                    <h2 class="h1"><?php echo e($banner->title); ?></h2>
                    <h6><?php echo e($banner->subtitle); ?></h6>
                    <a href="<?php echo e($banner->link); ?>">Get Help</a>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php /**PATH C:\xampp\htdocs\Law\resources\views/front/includes/header.blade.php ENDPATH**/ ?>