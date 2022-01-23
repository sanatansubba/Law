<div class="widget settings-menu">
    <ul>

        <?php if(Session::get('admin_page') == 'theme'): ?>
            <?php $active = "active" ?>
        <?php else: ?>
            <?php $active = "" ?>
        <?php endif; ?>
        <li class="nav-item">
            <a href="<?php echo e(route('theme')); ?>" class="nav-link <?php echo e($active); ?>">
                <i class="fas fa-globe"></i> <span>Theme Settings</span>
            </a>
        </li>

            <?php if(Session::get('admin_page') == 'setting'): ?>
                <?php $active = "active" ?>
            <?php else: ?>
                <?php $active = "" ?>
            <?php endif; ?>
            <li class="nav-item">
                <a href="<?php echo e(route('setting')); ?>" class="nav-link <?php echo e($active); ?>">
                    <i class="fa fa-pen"></i> <span>Site Settings</span>
                </a>
            </li>


        <?php if(Session::get('admin_page') == 'profile'): ?>
            <?php $active = "active" ?>
        <?php else: ?>
            <?php $active = "" ?>
        <?php endif; ?>
        <li class="nav-item">
            <a href="<?php echo e(route('profile')); ?>" class="nav-link <?php echo e($active); ?>">
                <i class="far fa-user"></i> <span>Update Profile</span>
            </a>
        </li>






            <?php if(Session::get('admin_page') == 'social'): ?>
                <?php $active = "active" ?>
            <?php else: ?>
                <?php $active = "" ?>
            <?php endif; ?>
            <li class="nav-item">
                <a href="<?php echo e(route('social')); ?>" class="nav-link <?php echo e($active); ?>">
                    <i class="fa fa-map-pin"></i> <span>Social Media Settings</span>
                </a>
            </li>

            <?php if(Session::get('admin_page') == 'change_password'): ?>
                <?php $active = "active" ?>
            <?php else: ?>
                <?php $active = "" ?>
            <?php endif; ?>
        <li class="nav-item">
            <a href="<?php echo e(route('changePassword')); ?>" class="nav-link <?php echo e($active); ?>">
                <i class="fas fa-unlock-alt"></i> <span>Change Password</span>
            </a>
        </li>

    </ul>
</div>
<?php /**PATH C:\xampp\htdocs\law\resources\views/admin/includes/_settings_sidebar.blade.php ENDPATH**/ ?>