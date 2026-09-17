<?php $__env->startSection('content'); ?>

<div style="margin-bottom: 20px;">
    <a href="<?php echo e(route('admin.customers.index')); ?>" class="btn btn-outline">Back to Customers</a>
</div>

<div style="display: grid; grid-template-columns: 1fr 2fr; gap: 24px;">
    
    <div>
        <div class="card" style="text-align: center;">
            <div style="width: 80px; height: 80px; background: #000; color: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-weight: 700; margin: 0 auto 16px;">
                <?php echo e(substr(explode(' ', $customer->name)[0], 0, 1)); ?><?php echo e(isset(explode(' ', $customer->name)[1]) ? substr(explode(' ', $customer->name)[1], 0, 1) : ''); ?>

            </div>
            <h1 style="font-size: 1.5rem; font-weight: 700; margin-bottom: 8px;"><?php echo e($customer->name); ?></h1>
            <p style="color: var(--text-muted); margin-bottom: 24px;">Customer since <?php echo e($customer->created_at->format('M Y')); ?></p>

            <div style="text-align: left; border-top: 1px solid var(--border-color); padding-top: 16px;">
                <div style="margin-bottom: 12px;">
                    <strong style="color: var(--text-muted); display: block; font-size: 0.85rem; text-transform: uppercase;">Email Address</strong>
                    <a href="mailto:<?php echo e($customer->email); ?>" style="font-weight: 500;"><?php echo e($customer->email); ?></a>
                </div>
            </div>
        </div>
    </div>

    
    <div>
        <div class="card">
            <h2 style="font-size: 1.25rem; font-weight: 600; margin-bottom: 16px; border-bottom: 1px solid var(--border-color); padding-bottom: 12px;">Order History</h2>
            
            <?php
                $orders = \App\Models\Order::where('user_id', $customer->id)->orderBy('created_at', 'desc')->get();
            ?>

            <?php if($orders->count() > 0): ?>
                <div class="table-responsive">
                    <table class="admin-table">
                        <thead>
                            <tr>
                                <th>Order #</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><strong><?php echo e($order->order_number); ?></strong></td>
                                <td><?php echo e($order->created_at->format('M j, Y')); ?></td>
                                <td>
                                    <span class="badge <?php echo e($order->status === 'completed' ? 'badge-success' : (in_array($order->status, ['cancelled', 'pending']) ? 'badge-dark' : '')); ?>" style="text-transform: capitalize;">
                                        <?php echo e($order->status); ?>

                                    </span>
                                </td>
                                <td>£<?php echo e(number_format($order->total, 2)); ?></td>
                                <td>
                                    <a href="<?php echo e(route('admin.orders.show', $order->id)); ?>" class="btn btn-primary btn-sm">View</a>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            <?php else: ?>
                <p style="color: var(--text-muted); padding: 16px 0;">This customer has not placed any orders yet.</p>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\internship\windows site\windows-laravel\resources\views/admin/customers/show.blade.php ENDPATH**/ ?>