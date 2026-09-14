<?php $__env->startSection('title', 'My Orders — Company Name'); ?>

<?php $__env->startPush('styles'); ?>
<style>
    .acc-section { padding: clamp(40px, 6vw, 80px) 0; }
    .acc-container { width: 100%; max-width: 1000px; margin: 0 auto; padding: 0 20px; }
    
    .acc-header { margin-bottom: 32px; border-bottom: 1px solid var(--mono-border-light); padding-bottom: 16px; }
    .dark .acc-header { border-color: var(--mono-border-dark); }
    .acc-header h1 { font-size: 2rem; font-weight: 700; margin: 0; }
    
    .order-list { display: flex; flex-direction: column; gap: 20px; }
    
    .order-card { background: #f9fafb; border: 1px solid var(--mono-border-light); border-radius: 8px; padding: 24px; display: flex; flex-direction: column; gap: 16px; }
    .dark .order-card { background: #111; border-color: var(--mono-border-dark); }
    @media(min-width: 600px) {
        .order-card { flex-direction: row; justify-content: space-between; align-items: center; }
    }
    
    .oc-meta { flex: 1; }
    .oc-number { font-size: 1.1rem; font-weight: 600; margin-bottom: 4px; }
    .oc-date { font-size: 0.9rem; color: var(--mono-grey); margin-bottom: 12px; }
    
    .oc-status { display: inline-block; padding: 4px 10px; font-size: 0.8rem; font-weight: 600; border-radius: 99px; text-transform: uppercase; background: #e5e7eb; color: #374151; }
    .dark .oc-status { background: #374151; color: #e5e7eb; }
    .oc-status.paid { background: #d1fae5; color: #065f46; }
    
    .oc-total { font-size: 1.25rem; font-weight: 700; }
    
    .btn-view { padding: 8px 16px; background: #000; color: white; border-radius: 6px; font-weight: 500; text-decoration: none; font-size: 0.9rem; transition: background 0.2s; white-space: nowrap; }
    .dark .btn-view { background: #fff; color: #000; }
    .btn-view:hover { background: var(--primary-color); color: white; }
    
    .empty-state { text-align: center; padding: 60px 0; color: var(--mono-grey); }
</style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<section class="acc-section bg-white dark:bg-black text-black dark:text-white min-h-screen">
    <div class="acc-container">
        <div class="acc-header">
            <h1>Order History</h1>
        </div>
        
        <?php if($orders->isEmpty()): ?>
            <div class="empty-state">
                <p>You haven't placed any orders yet.</p>
                <a href="<?php echo e(url('/')); ?>" class="btn-view" style="display:inline-block; margin-top:16px;">Shop Windows</a>
            </div>
        <?php else: ?>
            <div class="order-list">
                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="order-card">
                        <div class="oc-meta">
                            <div class="oc-number"><?php echo e($order->order_number); ?></div>
                            <div class="oc-date"><?php echo e($order->created_at->format('M j, Y - g:i A')); ?></div>
                            <div class="oc-status <?php echo e($order->payment_status === 'paid' ? 'paid' : ''); ?>"><?php echo e($order->status); ?> &middot; <?php echo e($order->payment_status); ?></div>
                        </div>
                        <div style="text-align: right; display: flex; flex-direction: column; gap: 12px; align-items: flex-end;">
                            <div class="oc-total">&pound;<?php echo e(number_format($order->total, 2)); ?></div>
                            <a href="<?php echo e(route('account.orders.show', $order->id)); ?>" class="btn-view">View Details</a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\internship\windows site\windows-laravel\resources\views/pages/account/orders.blade.php ENDPATH**/ ?>