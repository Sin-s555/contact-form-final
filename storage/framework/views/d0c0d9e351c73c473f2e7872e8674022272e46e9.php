<?php $__env->startSection('content'); ?>
<div class="contact-wrapper">

  <h2 class="contact-title">Contact</h2>

  <form action="<?php echo e(route('contact.confirm')); ?>" method="POST" class="contact-form">
    <?php echo csrf_field(); ?>

    <div class="form-group row">
      <label>お名前 <span class="required">※</span></label>
      <div class="input-group">
        <input type="text" name="last_name" placeholder="例: 山田" value="<?php echo e(old('last_name')); ?>">
        <input type="text" name="first_name" placeholder="例: 太郎" value="<?php echo e(old('first_name')); ?>">
      </div>
      <?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="error"><?php echo e($message); ?></div>
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
      <?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="error"><?php echo e($message); ?></div>
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <div class="form-group row">
      <label>性別 <span class="required">※</span></label>
      <div class="radio-group">
        <label><input type="radio" name="gender" value="男性" <?php echo e(old('gender', '男性') === '男性' ? 'checked' : ''); ?>> 男性</label>
        <label><input type="radio" name="gender" value="女性" <?php echo e(old('gender') === '女性' ? 'checked' : ''); ?>> 女性</label>
        <label><input type="radio" name="gender" value="その他" <?php echo e(old('gender') === 'その他' ? 'checked' : ''); ?>> その他</label>
      </div>
      <?php $__errorArgs = ['gender'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="error"><?php echo e($message); ?></div>
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <div class="form-group">
      <label>メールアドレス <span class="required">※</span></label>
      <input type="text" name="email" placeholder="例: test@example.com" value="<?php echo e(old('email')); ?>">
      <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="error"><?php echo e($message); ?></div>
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <div class="form-group row">
      <label>電話番号 <span class="required">※</span></label>
      <div class="input-group">
        <input type="text" name="tel1" placeholder="080" value="<?php echo e(old('tel1')); ?>">
        <input type="text" name="tel2" placeholder="1234" value="<?php echo e(old('tel2')); ?>">
        <input type="text" name="tel3" placeholder="5678" value="<?php echo e(old('tel3')); ?>">
      </div>
      <?php $__errorArgs = ['tel1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="error"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
      <?php $__errorArgs = ['tel2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="error"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
      <?php $__errorArgs = ['tel3'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="error"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <div class="form-group">
      <label>住所 <span class="required">※</span></label>
      <input type="text" name="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3" value="<?php echo e(old('address')); ?>">
      <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="error"><?php echo e($message); ?></div>
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <div class="form-group">
      <label>建物名</label>
      <input type="text" name="building" placeholder="例: 千駄ヶ谷マンション101" value="<?php echo e(old('building')); ?>">
    </div>

    <div class="form-group">
      <label>お問い合わせの種類 <span class="required">※</span></label>
      <select name="category">
        <option value="">選択してください</option>
        <option value="交換" <?php echo e(old('category') === '交換' ? 'selected' : ''); ?>>商品の交換について</option>
        <option value="返品" <?php echo e(old('category') === '返品' ? 'selected' : ''); ?>>商品の返品について</option>
        <option value="その他" <?php echo e(old('category') === 'その他' ? 'selected' : ''); ?>>その他のお問い合わせ</option>
      </select>
      <?php $__errorArgs = ['category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="error"><?php echo e($message); ?></div>
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <div class="form-group">
      <label>お問い合わせ内容 <span class="required">※</span></label>
      <!-- maxlengthを外す -->
      <textarea name="content" placeholder="お問い合わせ内容をご記載ください"><?php echo e(old('content')); ?></textarea>
      <?php $__errorArgs = ['content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="error"><?php echo e($message); ?></div>
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <div class="form-group center">
      <button type="submit" class="confirm-button">確認画面</button>
    </div>
  </form>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/form.css')); ?>">
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/contact/form.blade.php ENDPATH**/ ?>