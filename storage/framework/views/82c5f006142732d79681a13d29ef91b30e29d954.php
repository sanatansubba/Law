<div class="scrollTop float-right">
    <i class="fas fa-angle-up" onclick="topFunction()" id="myBtn"></i>
</div>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="footer-col footer-first">
                    <div class="footer-logo">
                        <a href="<?php echo e(route('index')); ?>">
                            <h2><?php echo e($theme->website_name); ?></h2>
                        </a>
                    </div>
                    <p><?php echo e($front_site->footer_info); ?></p>
                    <ul class="d-flex justify-content-start">
                        <li><a href="<?php echo e($social->facebook); ?>"><i class="fab fa-facebook-square"></i></a></li>
                        <li><a href="<?php echo e($social->linkedin); ?>"><i class="fab fa-linkedin"></i></a></li>
                        <li><a href="<?php echo e($social->instagram); ?>"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="<?php echo e($social->youtube); ?>"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-col links-footer">
                    <h5>Quick Links</h5>
                    <ul>
                        <li><a href="<?php echo e(route('aboutUs')); ?>">About Us</a></li>
                        <li><a href="<?php echo e(route('lawyers')); ?>">Lawyers</a></li>
                        <li><a href="<?php echo e(route('contact')); ?>">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-col">
                    <div class="footer-col links-footer">
                        <h5>Categories</h5>
                        <ul>
                            <?php
                            $categories = \App\Models\Category::latest()->take(6)->get();
                            ?>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><a href="<?php echo e(route('blogCategory', $data->slug)); ?>"><?php echo e($data->category_name); ?></a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-col links-footer">
                    <h5>Book an Appointment</h5>
                    <div class="footer-form">
                        <form action="">
                            <input type="email" placeholder="Enter Your Email">
                        </form>
                        <a href="#" class="btn btn-lg btn-block">Submit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script type="text/javascript" src="<?php echo e(asset('public/frontend/assets/js/jquery.min.js')); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type='text/javascript'
        src='https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js'
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
        integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script type="text/javascript" src="<?php echo e(asset('public/frontend/assets/js/custom.js')); ?>"></script>

<script id="dsq-count-scr" src="//law-portal.disqus.com/count.js" async></script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\law\resources\views/front/includes/footer.blade.php ENDPATH**/ ?>