<?php if(Session::has('error_message')): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert" style="height: 40px; padding: 10px;">
        <?php echo e(Session::get('error_message')); ?>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true" style="position: relative; top: -10px;">&times;</span>
        </button>
    </div>
<?php endif; ?>
<?php if(Session::has('info_message')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert" style="height: 40px; padding: 10px;">
        <?php echo e(Session::get('info_message')); ?>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true" style="position: relative; top: -10px;">&times;</span>
        </button>
    </div>
<?php endif; ?>
<?php if($errors->any()): ?>
    <div class="alert alert-danger" >
        <ul style="list-style: none; ">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\lawproject\resources\views/admin/includes/_message.blade.php ENDPATH**/ ?>