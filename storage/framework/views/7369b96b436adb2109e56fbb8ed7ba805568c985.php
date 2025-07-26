<?php $__env->startSection('content'); ?>

<a href="<?php echo e(route('register')); ?>" class="register-button">Register</a>

<div class="login-wrapper">
  <div class="login-container">
    

    <div class="login-box">
      
      <form action="<?php echo e(route('login')); ?>" method="POST" class="login-form" novalidate>
        <?php echo csrf_field(); ?>

        <h2 class="login-title">Login</h2>

        
        <?php if(session('status')): ?>
          <div class="error-message">
            <?php echo e(session('status')); ?>

          </div>
        <?php endif; ?>

        
        <label for="email" class="form-label">メールアドレス</label>
        <input
          type="email"
          name="email"
          id="email"
          class="form-input"
          value="<?php echo e(old('email')); ?>"
          placeholder="例: test@example.com"
          <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> aria-invalid="true" <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        >
        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <div class="error-message"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        
        <label for="password" class="form-label">パスワード</label>
        <input
          type="password"
          name="password"
          id="password"
          class="form-input"
          placeholder="例: coachtech1106"
          <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> aria-invalid="true" <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        >
        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <div class="error-message"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        
        <div class="form-group">
          <button type="submit">ログイン</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/login.css')); ?>">
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/auth/login.blade.php ENDPATH**/ ?>