<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body style="font-family: 'Poppins', sans-serif;">

<div class="email-wrapper-container" style="width: 50%; margin: 40px auto; padding: 20px 50px; background: #f5f5f5;">
    <!-- LOGO -->

    <div class="main-content-wrap" style="background: #fff; padding: 30px 40px; margin-bottom: 30px;">



        <h2 style="font-size: 1.6rem; font-weight: 400; color:#333;">Hello there,</h2>
        <p style="color: #777; line-height: 1.9;"><?php echo e($name); ?> just contacted through the website</p>
        <p style="color: #777; line-height: 1.9;">Below are the Details</p>
        <p style="color: #777; line-height: 1.9;">Name: <?php echo e($name); ?></p>
        <p style="color: #777; line-height: 1.9;">Email: <?php echo e($email); ?></p>
        <p style="color: #777; line-height: 1.9;">Phone: <?php echo e($phone); ?></p>
        <p style="color: #777; line-height: 1.9;">Message: <?php echo e($contact_message); ?></p>

        <p style="color: #777; line-height: 1.9; margin-bottom: 20px;">If this message doesnot concern you, Please delete this email.</p>
        <p style="color: #777; line-height: 1.9; margin-bottom: 0;">Cheers,</p>
        <a href="#">
            <h2 style="display:inline-block; font-size: 1.8rem; font-weight: 600; color: #220c9e; margin: 0; padding: 0;"><?php echo e(config('app.name', 'Laravel')); ?></h2>
        </a>
    </div>

</div>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\lawproject\resources\views/emails/contact.blade.php ENDPATH**/ ?>