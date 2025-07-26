<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  <title><?php echo $__env->yieldContent('title', '管理画面'); ?></title>

  
  <?php echo $__env->yieldContent('css'); ?>

  <?php
    use Illuminate\Support\Str;
  ?>

  <style>
    body {
      font-size: 16px;
      margin: 5px;
    }
    h1 {
      font-size: 60px;
      color: white;
      text-shadow: 1px 0 5px #289ADC;
      letter-spacing: -4px;
      margin-left: 10px;
    }
    .header {
      position: relative;
      padding: 10px;
    }
    .logout-form {
      position: absolute;
      top: 10px;
      right: 10px;
    }
    .logout-button {
      background-color: #289ADC;
      color: white;
      border: none;
      padding: 8px 12px;
      font-size: 14px;
      border-radius: 4px;
      cursor: pointer;
    }
    .logout-button:hover {
      background-color: #1b6fa8;
    }
  </style>
</head>
<body>

  <div class="header">
    <h1 class="site-title">FashionablyLate</h1>

    
    <?php if(Str::startsWith(Route::currentRouteName(), 'admin.')): ?>
      <form method="POST" action="<?php echo e(route('logout')); ?>" class="logout-form">
        <?php echo csrf_field(); ?>
        <button type="submit" class="logout-button">logout</button>
      </form>
    <?php endif; ?>

     
  <?php echo $__env->yieldContent('header-buttons'); ?>
  </div>

  
  <div class="header-area">
    <?php echo $__env->yieldContent('header'); ?>
  </div>

  
  <div class="content">
    <?php echo $__env->yieldContent('content'); ?>
  </div>

  
  <?php echo $__env->yieldContent('js'); ?>

</body>
</html>
<?php /**PATH /var/www/resources/views/layouts/default.blade.php ENDPATH**/ ?>