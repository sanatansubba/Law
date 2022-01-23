

<?php $__env->startSection('site_title'); ?>
    Contact Us Page
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
                        <h1>Contact Us</h1>
                        <span>Home <i class="fas fa-chevron-right"></i> <a href="#">Contact Us</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="contact-page">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="contact-info-left">
                    <h2>Contact Us</h2>
                    <p>We'd love to hear from you.</p>
                    <?php echo $__env->make('admin.includes._message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <form action="<?php echo e(route('contactMessage')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <input type="text" name="name" placeholder="Enter Your Name" class="form-control">
                        <input type="email" name="email" placeholder="Enter Your Email" class="form-control">
                        <input type="text" name="phone" placeholder="Enter Your Phone" class="form-control">
                        <textarea name="message" na id="message-box" width="100%" rows="5" class="form-control"></textarea>
                        <br>
                        <button type="submit" class="btn btn-warning">Submit</button>

                    </form>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="contact-info-right">
                    <div class="yellow-box-contact"></div>
                    <div class="contact-image-div">
                        <img src="<?php echo e(asset('public/frontend/assets/images/smartphone.png')); ?>" alt="Smartphone" class="img-fluid">
                    </div>
                    <h6><?php echo e($setting->phone); ?></h6>
                    <h6><?php echo e($setting->alt_phone); ?></h6>
                    <div class="contact-image-div">
                        <img src="<?php echo e(asset('public/frontend/assets/images/marker.png')); ?>" alt="Marker" class="img-fluid">
                    </div>
                    <h6><?php echo e($setting->address); ?></h6>

                    <div class="contact-image-div">
                        <img src="<?php echo e(asset('public/frontend/assets/images/envelope.png')); ?>" alt="Envelope" class="img-fluid">
                    </div>
                    <h6><?php echo e($setting->email); ?></h6>

                </div>
            </div>
        </div>
    </div>
    <div class="map-location">
        <iframe
            src="<?php echo e($setting->map); ?>"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</section>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('front.includes.front_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\law\resources\views/front/contact.blade.php ENDPATH**/ ?>