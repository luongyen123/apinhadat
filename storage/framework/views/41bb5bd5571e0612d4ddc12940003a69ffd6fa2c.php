<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" name="viewport">
  <title><?php echo $__env->yieldContent('title'); ?> - Nhà đất Á Châu</title>

  <link rel="stylesheet" href="<?php echo e(asset('../dist/modules/bootstrap/css/bootstrap.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('../dist/modules/ionicons/css/ionicons.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('../dist/css/demo.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('../dist/css/style.css')); ?>">
  <style>
    .main-sidebar .sidebar-menu li#<?php echo e($id); ?> a{
      color: #574B90;
      background-color: #f6f6f6;
    }
    .pagination{
      float:right;
    }
  </style>
   <?php echo $__env->yieldContent('css'); ?>
</head>
<body>
    <?php
        $user = $_COOKIE['user'];
        $user = json_decode($user);
    ?>
  <div id="app">
       <div class="main-wrapper">

        <?php echo $__env->make('blocks.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('blocks.left', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
           <div class="main-content">
              <?php echo $__env->yieldContent('content'); ?>
            </div>
      </div>
  </div>
  <script src="<?php echo e(asset('../dist/modules/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('../dist/modules/bootstrap/js/bootstrap.min.js')); ?>"></script>
  <?php echo $__env->yieldContent('js'); ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\apinhadat\resources\views/layouts/layout.blade.php ENDPATH**/ ?>