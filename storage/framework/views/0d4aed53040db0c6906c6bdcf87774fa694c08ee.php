<?php $__env->startSection('content'); ?>
<div class="admin-wrapper">
  
  <h2 class="admin-title">Admin</h2>

  <form method="GET" action="<?php echo e(route('admin.dashboard')); ?>" class="admin-filter-form">
    <input type="text" name="keyword" class="admin-input" placeholder="名前やメールアドレスを入力してください" value="<?php echo e(request('keyword')); ?>">

    <select name="gender" class="admin-select">
      <option value="" <?php echo e(request('gender') === null || request('gender') === '' ? 'selected' : ''); ?>>性別</option>
      <option value="all" <?php echo e(request('gender') === 'all' ? 'selected' : ''); ?>>全て</option>
      <option value="男性" <?php echo e(request('gender') === '男性' ? 'selected' : ''); ?>>男性</option>
      <option value="女性" <?php echo e(request('gender') === '女性' ? 'selected' : ''); ?>>女性</option>
      <option value="その他" <?php echo e(request('gender') === 'その他' ? 'selected' : ''); ?>>その他</option>
    </select>

    <select name="contact_type" class="admin-select">
      <option value="">お問い合わせの種類</option>
      <option value="交換" <?php echo e(request('contact_type') === '交換' ? 'selected' : ''); ?>>商品の交換について</option>
      <option value="返品" <?php echo e(request('contact_type') === '返品' ? 'selected' : ''); ?>>商品の返品について</option>
    </select>

    <input type="date" name="date" class="admin-select" value="<?php echo e(request('date')); ?>">

    <button type="submit" class="admin-button search">検索</button>
    <a href="<?php echo e(route('admin.dashboard')); ?>" class="admin-button reset">リセット</a>
  </form>

  <form method="GET" action="<?php echo e(route('admin.export')); ?>">
    <input type="hidden" name="keyword" value="<?php echo e(request('keyword')); ?>">
    <input type="hidden" name="gender" value="<?php echo e(request('gender')); ?>">
    <input type="hidden" name="contact_type" value="<?php echo e(request('contact_type')); ?>">
    <input type="hidden" name="date" value="<?php echo e(request('date')); ?>">
    <button type="submit" class="admin-export-button">エクスポート</button>
  </form>

  <table class="admin-table">
    <thead>
      <tr>
        <th>お名前</th>
        <th>性別</th>
        <th>メールアドレス</th>
        <th>お問い合わせの種類</th>
        <th>日付</th>
        <th>詳細</th>
      </tr>
    </thead>

    <tbody>
      <?php $__empty_1 = true; $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <tr>
          <td><?php echo e($contact->last_name); ?> <?php echo e($contact->first_name); ?></td>
          <td>
            <?php
              $genderMap = [1 => '男性', 2 => '女性', 3 => 'その他'];
            ?>
            <?php echo e($genderMap[$contact->gender] ?? '不明'); ?>

          </td>
          <td><?php echo e($contact->email); ?></td>
          <td><?php echo e($contact->contact_type); ?></td>
          <td><?php echo e($contact->created_at->format('Y-m-d')); ?></td>
          <td>
            <button class="detail-button" data-id="<?php echo e($contact->id); ?>">詳細</button>
          </td>
        </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <tr>
          <td colspan="6">該当するデータが見つかりませんでした。</td>
        </tr>
      <?php endif; ?>
    </tbody>
  </table>

  <div class="pagination-wrapper">
    <?php echo e($contacts->links()); ?>

  </div>

  <!-- モーダルウィンドウ構造 -->
  <div id="detailModal" class="modal" style="display:none;">
    <div class="modal-content">
      <span class="modal-close">&times;</span>
      <div id="modal-body">
        <p>読み込み中...</p>
      </div>
      <button id="deleteButton" data-id="">削除</button>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script>
document.addEventListener('DOMContentLoaded', function () {
  const modal = document.getElementById('detailModal');
  const modalBody = document.getElementById('modal-body');
  const deleteButton = document.getElementById('deleteButton');
  const closeButton = modal.querySelector('.modal-close');

  document.querySelectorAll('.detail-button').forEach(button => {
    button.addEventListener('click', function () {
      const contactId = this.getAttribute('data-id');
      modal.style.display = 'flex';
      modalBody.innerHTML = '<p>読み込み中...</p>';
      deleteButton.setAttribute('data-id', contactId);

      fetch(`/admin/contact/${contactId}`)
        .then(response => response.json())
        .then(data => {
          modalBody.innerHTML = `
            <p><strong>名前：</strong>${data.last_name} ${data.first_name}</p>
            <p><strong>性別：</strong>${data.gender === 1 ? '男性' : data.gender === 2 ? '女性' : 'その他'}</p>
            <p><strong>メール：</strong>${data.email}</p>
            <p><strong>お問い合わせ種類：</strong>${data.contact_type}</p>
            <p><strong>日付：</strong>${data.created_at}</p>
          `;
        });
    });
  });

  closeButton.addEventListener('click', () => {
    modal.style.display = 'none';
    modalBody.innerHTML = '';
  });

  window.addEventListener('click', e => {
    if (e.target === modal) {
      modal.style.display = 'none';
      modalBody.innerHTML = '';
    }
  });

  deleteButton.addEventListener('click', () => {
    const id = deleteButton.getAttribute('data-id');
    if (!confirm('本当に削除しますか？')) return;

    fetch(`/admin/contact/${id}`, {
      method: 'DELETE',
      headers: {
        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
        'Accept': 'application/json',
      }
    }).then(response => {
      if (response.ok) {
        alert('削除しました');
        modal.style.display = 'none';
        location.reload();
      } else {
        alert('削除に失敗しました');
      }
    });
  });
});
</script>



<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/admin.css')); ?>">
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/admin/dashboard.blade.php ENDPATH**/ ?>