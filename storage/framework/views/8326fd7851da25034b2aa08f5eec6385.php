<?php $__env->startSection('content'); ?>

<div style="display:flex; justify-content:space-between; align-items:center; margin-bottom: 20px;">
    <h1 class="page-title" style="margin-bottom:0;">Orders</h1>
</div>

<div class="card">
    <div class="table-responsive">
        <table class="admin-table">
            <thead>
                <tr>
                    <th>Order #</th>
                    <th>Customer Name</th>
                    <th>Email</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Total</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><strong><?php echo e($order->order_number); ?></strong></td>
                    <td>
                        <?php echo e($order->first_name); ?> <?php echo e($order->last_name); ?>

                        <?php if($order->user_id): ?>
                            <a href="<?php echo e(route('admin.customers.show', $order->user_id)); ?>" title="View Customer Profile">
                                <svg style="width:14px; height:14px; display:inline; margin-left:4px; color:#666;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                            </a>
                        <?php endif; ?>
                    </td>
                    <td><a href="mailto:<?php echo e($order->email); ?>"><?php echo e($order->email); ?></a></td>
                    <td><?php echo e($order->created_at->format('M j, Y g:i A')); ?></td>
                    <td>
                        <span class="badge <?php echo e($order->status === 'completed' ? 'badge-success' : ($order->status === 'cancelled' ? 'badge-dark' : '')); ?>" style="text-transform: capitalize;">
                            <?php echo e($order->status); ?>

                        </span>
                    </td>
                    <td>£<?php echo e(number_format($order->total, 2)); ?></td>
                    <td>
                        <a href="<?php echo e(route('admin.orders.show', $order->id)); ?>" class="btn btn-outline" style="padding:4px 8px; font-size:0.75rem;">View Order</a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="7" style="text-align: center; padding: 24px;">No orders found.</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <?php if($orders->hasPages()): ?>
        <div style="margin-top: 20px;">
            <?php echo e($orders->links()); ?>

        </div>
    <?php endif; ?>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\internship\windows site\windows-laravel\resources\views/admin/orders/index.blade.php ENDPATH**/ ?>