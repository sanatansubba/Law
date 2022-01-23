<?php
    $theme = \App\Models\Theme::first();
$current_user = Auth::guard('admin')->user();
    ?>
<div class="header">

    <div class="header-left">
        <a href="<?php echo e(route('adminDashboard')); ?>" class="logo">
           Admin Panel
        </a>

    </div>



    <ul class="nav user-menu">

        <li>
            <a href="<?php echo e(route('index')); ?>">Go To Frontend</a>
        </li>

        <li class="nav-item dropdown has-arrow main-drop ml-md-3">
            <a href="javascript:" class="dropdown-toggle nav-link" data-toggle="dropdown">
<span class="user-img"><img src="<?php echo e(asset('public/uploads/admin/'.$current_user->image)); ?>" alt="">
<span class="status online"></span></span>
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="<?php echo e(route('profile')); ?>"><i class="feather-user"></i> My Profile</a>
                <a class="dropdown-item" href="<?php echo e(route('adminLogout')); ?>"><i class="feather-power"></i> Logout</a>
            </div>
        </li>
    </ul>

</div>
<?php /**PATH C:\xampp\htdocs\law\resources\views/admin/includes/header.blade.php ENDPATH**/ ?>