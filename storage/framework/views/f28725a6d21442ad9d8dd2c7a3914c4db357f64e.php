<?php
    $userLogin = \App\Models\Admin::where('id', Auth::guard('admin')->user()->id)->first();
?>

<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <?php if($userLogin->role_id == 1): ?>
            <ul>

                <?php if(Session::get('admin_page') == 'dashboard'): ?>
                    <?php $active = "active" ?>
                <?php else: ?>
                    <?php $active = "" ?>
                <?php endif; ?>
                <li class="<?php echo e($active); ?>"><a href="<?php echo e(route('adminDashboard')); ?>"><i class="feather-home"></i>
                        <span>Dashboard</span></a>
                </li>



                    <?php if(Session::get('admin_page') == 'banner'): ?>
                        <?php $active = "active" ?>
                    <?php else: ?>
                        <?php $active = "" ?>
                    <?php endif; ?>
                    <li class="<?php echo e($active); ?>"><a href="<?php echo e(route('banner.index')); ?>"><i class="feather-image"></i>
                            <span>Banner</span></a>
                    </li>

                    <?php if(Session::get('admin_page') == 'service'): ?>
                        <?php $active = "active" ?>
                    <?php else: ?>
                        <?php $active = "" ?>
                    <?php endif; ?>
                    <li class="<?php echo e($active); ?>"><a href="<?php echo e(route('service.index')); ?>"><i class="feather-info"></i>
                            <span>Services</span></a>
                    </li>


                    <?php if(Session::get('admin_page') == 'testimonial'): ?>
                        <?php $active = "active" ?>
                    <?php else: ?>
                        <?php $active = "" ?>
                    <?php endif; ?>
                    <li class="<?php echo e($active); ?>"><a href="<?php echo e(route('testimonial.index')); ?>"><i class="feather-message-circle"></i>
                            <span>Testimonials</span></a>
                    </li>

                    <?php if(Session::get('admin_page') == 'category'): ?>
                        <?php $active = "active" ?>
                    <?php else: ?>
                        <?php $active = "" ?>
                    <?php endif; ?>
                    <li class="<?php echo e($active); ?>"><a href="<?php echo e(route('category.index')); ?>"><i class="feather-file"></i>
                            <span>Category Management</span></a>
                    </li>


                    <?php if(Session::get('admin_page') == 'blog'): ?>
                        <?php $active = "active" ?>
                    <?php else: ?>
                        <?php $active = "" ?>
                    <?php endif; ?>
                    <li class="<?php echo e($active); ?>"><a href="<?php echo e(route('blog.index')); ?>"><i class="feather-file"></i>
                            <span>Blog Management</span></a>
                    </li>


                    <?php if(Session::get('admin_page') == 'document'): ?>
                        <?php $active = "active" ?>
                    <?php else: ?>
                        <?php $active = "" ?>
                    <?php endif; ?>
                    <li class="<?php echo e($active); ?>"><a href="<?php echo e(route('document.index')); ?>"><i class="feather-download"></i>
                            <span>Downloads</span></a>
                    </li>


                    <?php if(Session::get('admin_page') == 'contact'): ?>
                        <?php $active = "active" ?>
                    <?php else: ?>
                        <?php $active = "" ?>
                    <?php endif; ?>
                    <li class="<?php echo e($active); ?>"><a href="<?php echo e(route('contact.index')); ?>"><i class="feather-bookmark"></i>
                            <span>Contact Messages</span></a>
                    </li>

                    <?php if(Session::get('admin_page') == 'about'): ?>
                        <?php $active = "active" ?>
                    <?php else: ?>
                        <?php $active = "" ?>
                    <?php endif; ?>
                    <li class="<?php echo e($active); ?>"><a href="<?php echo e(route('about.index')); ?>"><i class="feather-file"></i>
                            <span>About Us</span></a>
                    </li>


                    <?php if(Session::get('admin_page') == 'lawyer'): ?>
                        <?php $active = "active" ?>
                    <?php else: ?>
                        <?php $active = "" ?>
                    <?php endif; ?>
                    <li class="<?php echo e($active); ?>"><a href="<?php echo e(route('lawyer.index')); ?>"><i class="feather-users"></i>
                            <span>Lawyers</span></a>
                    </li>


                <?php if(Session::get('admin_page') == 'theme'): ?>
                        <?php $active = "active" ?>
                    <?php else: ?>
                        <?php $active = "" ?>
                    <?php endif; ?>
                    <li class="<?php echo e($active); ?>"><a href="<?php echo e(route('theme')); ?>"><i class="feather-settings"></i>
                            <span>Settings</span></a>
                    </li>





            </ul>
            <?php else: ?>
                <ul>

                    <?php if(Session::get('admin_page') == 'dashboard'): ?>
                        <?php $active = "active" ?>
                    <?php else: ?>
                        <?php $active = "" ?>
                    <?php endif; ?>
                    <li class="<?php echo e($active); ?>"><a href="<?php echo e(route('adminDashboard')); ?>"><i class="feather-home"></i>
                            <span>Dashboard</span></a>
                    </li>


                        <?php if(Session::get('admin_page') == 'category'): ?>
                            <?php $active = "active" ?>
                        <?php else: ?>
                            <?php $active = "" ?>
                        <?php endif; ?>
                        <li class="<?php echo e($active); ?>"><a href="<?php echo e(route('category.index')); ?>"><i class="feather-file"></i>
                                <span>Category Management</span></a>
                        </li>


                        <?php if(Session::get('admin_page') == 'blog'): ?>
                            <?php $active = "active" ?>
                        <?php else: ?>
                            <?php $active = "" ?>
                        <?php endif; ?>
                        <li class="<?php echo e($active); ?>"><a href="<?php echo e(route('blog.index')); ?>"><i class="feather-file"></i>
                                <span>Blog Management</span></a>
                        </li>

                    <?php if(Session::get('admin_page') == 'theme'): ?>
                        <?php $active = "active" ?>
                    <?php else: ?>
                        <?php $active = "" ?>
                    <?php endif; ?>
                    <li class="<?php echo e($active); ?>"><a href="<?php echo e(route('theme')); ?>"><i class="feather-settings"></i>
                            <span>Settings</span></a>
                    </li>





                </ul>

            <?php endif; ?>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\law\resources\views/admin/includes/sidebar.blade.php ENDPATH**/ ?>