<?php echo $__env->make('front.includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<section class="about-us py-5 " id="about-us">
    <div class="container mt-5">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class='text-success'><?php echo e($about->title); ?></h1>
                <h2><?php echo e($about->subtitle); ?></h2>
                <hr>
                <?php echo $about->page_info; ?>

                <a href="<?php echo e(route('aboutUs')); ?>" class="btn btn-success">Let's Know More</a>

            </div>
            <div class="col-md-6">
                <img src="<?php echo e(asset('public/uploads/'.$about->image)); ?>"alt="">
            </div>
        </div>
    </div>
</section>
<div class="fullwidth-block">
    <div class="container">
        <div class="row feature-list-section">
            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4">
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
<div class="testimonials-wrap">
    <div class="container">
        <div class="heading-section">
            <span class="sub-heading">Testimonials</span>
            <h2>Happy Clients & Feedbacks</h2>
        </div>
        <div class="carousel-testimonial owl-carousel">
            <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="item">
                <div class="testimonial-box d-flex">
                    <div class="user-img" style="background-image: url(<?php echo e(asset('public/uploads/testimonial/'.$data->image)); ?>)">
                    </div>
                    <div class="text pl-4">
                        <span class="quote"><i class="fa fa-quote-left"></i></span>
                        <p>
                            <?php echo $data->details; ?>

                        </p>
                        <p class="name" style="padding-top: 5px"><?php echo e($data->name); ?></p>
                        <span class="position"><?php echo e($data->position); ?></span>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div><!--
<div id="root"></div> -->
<?php echo $__env->make('front.includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php /**PATH C:\xampp\htdocs\lawproject\resources\views/front/index.blade.php ENDPATH**/ ?>