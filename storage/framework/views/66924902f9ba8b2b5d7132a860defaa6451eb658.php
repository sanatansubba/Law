

<?php $__env->startSection('site_title'); ?>
    <?php echo e($blog->blog_title); ?>

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
                        <h1>Blog Detail</h1>
                        <span>Home <i class="fas fa-chevron-right"></i> <a href="#">Blogs</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog-detail">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="content-detail">
                    <h4 class="mb-3"><?php echo e($blog->blog_title); ?></h4>
                    <img src="<?php echo e(asset('public/uploads/blog/'.$blog->image)); ?>" alt="">
                    <div class="datetime-wrapper mt-3">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="author-title">
                                    <i class="far fa-user"></i>
                                    <p><?php echo e($blog->admin->name); ?> </p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="author-title">
                                    <i class="fas fa-tags"></i>
                                    <p><?php echo e($blog->category->category_name); ?></p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="author-title">
                                    <i class="far fa-calendar"></i>
                                    <p><?php echo e($blog->created_at->diffForHumans()); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php echo $blog->blog_content; ?>



                    <br>

                    <div id="disqus_thread"></div>
                    <script>
                        /**
                         *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                         *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
                        /*
                        var disqus_config = function () {
                        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                        };
                        */
                        (function() { // DON'T EDIT BELOW THIS LINE
                            var d = document, s = d.createElement('script');
                            s.src = 'https://law-portal.disqus.com/embed.js';
                            s.setAttribute('data-timestamp', +new Date());
                            (d.head || d.body).appendChild(s);
                        })();
                    </script>
                    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

                </div>
            </div>
        </div>
    </div>
</section>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('front.includes.front_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lawproject\resources\views/front/blogSingle.blade.php ENDPATH**/ ?>