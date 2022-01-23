

<?php $__env->startSection('site_title'); ?>
  Blogs Page
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
                        <h1>Blogs</h1>
                        <span>Home <i class="fas fa-chevron-right"></i> <a href="#">Blogs</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="blog-grid">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h3 class="blog-heading">BLOGS</h3>
                <div class="row">

                    <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-6 col-md-6">
                        <div class="blog-info">
                            <a href="<?php echo e(route('blogSingle', $blog->slug)); ?>"> <img src="<?php echo e(asset('public/uploads/blog/'.$blog->image)); ?>" class="img-fluid" alt=""></a>
                            <div class="entry-meta mt-3">
                                <span class="posted-on"><i class="far fa-calendar"></i><?php echo e($blog->created_at->diffForHumans()); ?></span>
                                <span class="cat-links"><i class="fas fa-tags"></i><?php echo e($blog->category->category_name); ?></span>
                            </div>
                            <div class="blog-title mt-3">
                                <a href="<?php echo e(route('blogSingle', $blog->slug)); ?>"><?php echo e($blog->title); ?></a>
                            </div>
                            <div class="blog-short-desc mt-2">
                                <p> <?php echo \Illuminate\Support\Str::limit($blog->blog_content, 500); ?></p>
                            </div>
                            <button class="button"> <a href="<?php echo e(route('blogSingle', $blog->slug)); ?>"><span>KNOW MORE </span></a></button>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

            </div>





        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('front.includes.front_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lawproject\resources\views/front/blog.blade.php ENDPATH**/ ?>