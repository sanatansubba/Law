<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo $__env->yieldContent('title'); ?></title>

    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('public/backend/assets/img/favicon.png')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('public/backend/assets/css/bootstrap.min.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('public/backend/assets/plugins/fontawesome/css/fontawesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/backend/assets/plugins/fontawesome/css/all.min.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('public/backend/assets/plugins/simple-calendar/simple-calendar.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('public/backend/assets/css/feather.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('public/backend/assets/plugins/datatables/datatables.min.css')); ?>">

    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo e(asset('public/backend/assets/css/dropzone.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('public/backend/assets/css/sweetalert.css')); ?>">

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo e(asset('public/backend/assets/css/style.css')); ?>">
    <style>
        .toggle {
            width: 50px !important;
        }

        .form-group img {
            width: 50% !important;
        }

        .avatar-xxl {
            width: 16rem !important;
            height: 8rem;
        }

        .card-counter{
            box-shadow: 2px 2px 10px #DADADA;
            margin: 5px;
            padding: 20px 10px;
            background-color: #fff;
            height: 100px;
            border-radius: 5px;
            transition: .3s linear all;
        }

        .card-counter:hover{
            box-shadow: 4px 4px 20px #DADADA;
            transition: .3s linear all;
        }

        .card-counter.primary{
            background-color: #007bff;
            color: #FFF;
        }

        .card-counter.danger{
            background-color: #ef5350;
            color: #FFF;
        }

        .card-counter.success{
            background-color: #66bb6a;
            color: #FFF;
        }

        .card-counter.info{
            background-color: #26c6da;
            color: #FFF;
        }

        .card-counter i{
            font-size: 5em;
            opacity: 0.2;
        }

        .card-counter .count-numbers{
            position: absolute;
            right: 35px;
            top: 20px;
            font-size: 32px;
            display: block;
        }

        .card-counter .count-name{
            position: absolute;
            right: 35px;
            top: 65px;
            font-style: italic;
            text-transform: capitalize;
            opacity: 0.5;
            display: block;
            font-size: 18px;
        }
    </style>
</head>
<?php /**PATH C:\xampp\htdocs\lawproject\resources\views/admin/includes/head.blade.php ENDPATH**/ ?>