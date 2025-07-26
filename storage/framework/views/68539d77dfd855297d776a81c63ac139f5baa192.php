<?php $__env->startSection('content'); ?>
<div class="thanks-wrapper">
  <div class="thanks-background">Thank you</div>
  <p class="thanks-message">お問い合わせありがとうございました</p>
  <a href="<?php echo e(route('contact.form')); ?>" class="home-button">HOME</a>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/thanks.css')); ?>?v=<?php echo e(time()); ?>">
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/contact/thanks.blade.php ENDPATH**/ ?>