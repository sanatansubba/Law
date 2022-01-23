<div class="logos d-flex justify-content-between">
    <div class="left-logo">
        <a href="<?php echo e(route('index')); ?>">
            <h4><?php echo e($theme->website_name); ?></h4>
        </a>
    </div>
    <div class="right-logo d-flex">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">

                    <?php if(\Illuminate\Support\Facades\Session::get('front_page') == 'index'): ?>
                        <?php $active = "active" ?>
                    <?php else: ?>
                        <?php $active = "" ?>
                    <?php endif; ?>


                    <li class="nav-item <?php echo e($active); ?>">
                        <a class="nav-link" href="<?php echo e(route('index')); ?>">Home</a>
                    </li>

                        <?php if(\Illuminate\Support\Facades\Session::get('front_page') == 'about'): ?>
                            <?php $active = "active" ?>
                        <?php else: ?>
                            <?php $active = "" ?>
                        <?php endif; ?>
                    <li class="nav-item <?php echo e($active); ?>">
                        <a class="nav-link" href="<?php echo e(route('aboutUs')); ?>">About</a>
                    </li>

                        <?php if(\Illuminate\Support\Facades\Session::get('front_page') == 'services'): ?>
                            <?php $active = "active" ?>
                        <?php else: ?>
                            <?php $active = "" ?>
                        <?php endif; ?>
                    <li class="nav-item <?php echo e($active); ?>">
                        <a class="nav-link" href="<?php echo e(route('services')); ?>">Services</a>
                    </li>

                        <?php if(Session::get('front_page') == 'lawyer'): ?>
                            <?php $active = "active" ?>
                        <?php else: ?>
                            <?php $active = "" ?>
                        <?php endif; ?>

                    <li class="nav-item <?php echo e($active); ?>">
                        <a class="nav-link" href="<?php echo e(route('lawyers')); ?>">Lawyers</a>

                    </li>

                        <?php if(\Illuminate\Support\Facades\Session::get('front_page') == 'law'): ?>
                            <?php $active = "active" ?>
                        <?php else: ?>
                            <?php $active = "" ?>
                        <?php endif; ?>
                    <li class="nav-item <?php echo e($active); ?>">
                        <a class="nav-link" href="<?php echo e(route('nepalLaw')); ?>">Nepal Law</a>

                    </li>

                        <?php if(\Illuminate\Support\Facades\Session::get('front_page') == 'contact'): ?>
                            <?php $active = "active" ?>
                        <?php else: ?>
                            <?php $active = "" ?>
                        <?php endif; ?>

                    <li class="nav-item <?php echo e($active); ?>">
                        <a class="nav-link" href="<?php echo e(route('contact')); ?>">Contact</a>

                    </li>
                        <?php if(\Illuminate\Support\Facades\Session::get('front_page') == 'blog'): ?>
                            <?php $active = "active" ?>
                        <?php else: ?>
                            <?php $active = "" ?>
                        <?php endif; ?>
                    <li class="nav-item <?php echo e($active); ?>">
                        <a class="nav-link" href="<?php echo e(route('blog')); ?>">Blogs</a>

                    </li>


                    <?php if(\Illuminate\Support\Facades\Auth::guard('admin')->check()): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('adminDashboard')); ?>">Dashboard</a>
                    <?php else: ?>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('adminLogin')); ?>">Login</a>
                        </li>
                    <?php endif; ?>

                </ul>
            </div>
        </nav>
        <div class="side-nav-tab">
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about-us.php">About Us</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="law.php">Nepal Law</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="blog.php">Blog</a></li>

                </ul>
            </div>
            <span class="openNav" onclick="openNav()">&#9776; </span>
        </div>
    </div>

</div>
<?php /**PATH C:\xampp\htdocs\law\resources\views/front/includes/nav_menu.blade.php ENDPATH**/ ?>