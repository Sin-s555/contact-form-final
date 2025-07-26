<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/confirm.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="confirm-wrapper">
  <h2 class="confirm-title">Confirm</h2>

  <form action="<?php echo e(route('contact.send')); ?>" method="POST">
    <?php echo csrf_field(); ?>

    <table class="confirm-table">
      <tr>
        <th>お名前</th>
        <td><?php echo e($inputs['last_name'] ?? ''); ?>　<?php echo e($inputs['first_name'] ?? ''); ?></td>
      </tr>
      <tr>
        <th>性別</th>
        <td><?php echo e($inputs['gender'] ?? ''); ?></td>
      </tr>
      <tr>
        <th>メールアドレス</th>
        <td><?php echo e($inputs['email'] ?? ''); ?></td>
      </tr>
      <tr>
        <th>電話番号</th>
        <td><?php echo e($inputs['tel1'] ?? ''); ?><?php echo e($inputs['tel2'] ?? ''); ?><?php echo e($inputs['tel3'] ?? ''); ?></td>
      </tr>
      <tr>
        <th>住所</th>
        <td><?php echo e($inputs['address'] ?? ''); ?></td>
      </tr>
      <tr>
        <th>建物名</th>
        <td><?php echo e($inputs['building'] ?? ''); ?></td>
      </tr>
      <tr>
        <th>お問い合わせの種類</th>
        <td><?php echo e($inputs['category'] ?? ''); ?></td>
      </tr>
      <tr>
        <th>お問い合わせ内容</th>
        <td><?php echo nl2br(e($inputs['content'] ?? '')); ?></td>
      </tr>
    </table>

    
    <?php $__currentLoopData = $inputs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <input type="hidden" name="<?php echo e($name); ?>" value="<?php echo e(e($value)); ?>">
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <div class="confirm-buttons">
      <button type="submit" name="action" value="submit" class="send-button">送信</button>
      <button type="submit" name="action" value="back" class="back-button">修正</button>
    </div>
  </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/contact/confirm.blade.php ENDPATH**/ ?>