<?php $__env->startSection('content'); ?>

<h1 class="page-title">Dashboard</h1>

<div class="grid-cards">
    <div class="stat-card">
        <div class="stat-card-title">Total Orders</div>
        <div class="stat-card-value"><?php echo e($totalOrders); ?></div>
    </div>
    <div class="stat-card">
        <div class="stat-card-title">Pending Orders</div>
        <div class="stat-card-value"><?php echo e($pendingOrders); ?></div>
    </div>
    <div class="stat-card">
        <div class="stat-card-title">Completed Orders</div>
        <div class="stat-card-value"><?php echo e($completedOrders); ?></div>
    </div>
    <div class="stat-card">
        <div class="stat-card-title">Total Revenue</div>
        <div class="stat-card-value">£<?php echo e(number_format($totalRevenue, 2)); ?></div>
    </div>
</div>

<div class="grid-cards">
    <div class="stat-card">
        <div class="stat-card-title">Total Customers</div>
        <div class="stat-card-value"><?php echo e($totalCustomers); ?></div>
    </div>
    <div class="stat-card">
        <div class="stat-card-title">Total Products</div>
        <div class="stat-card-value"><?php echo e($totalProducts); ?></div>
    </div>
</div>

<div class="card">
    <h2 style="font-size: 1.25rem; font-weight:600; margin-bottom:15px;">Recent Orders</h2>
    <div class="table-responsive">
        <table class="admin-table">
            <thead>
                <tr>
                    <th>Order #</th>
                    <th>Customer</th>
                    <th>Date</th>
                    <th>Amount</th>
                    <th>Payment</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $recentOrders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($order->order_number); ?></td>
                    <td><?php echo e($order->first_name); ?> <?php echo e($order->last_name); ?></td>
                    <td><?php echo e($order->created_at->format('d M Y')); ?></td>
                    <td>£<?php echo e(number_format($order->total, 2)); ?></td>
                    <td>
                        <span class="badge"><?php echo e($order->payment_status); ?></span>
                    </td>
                    <td>
                        <span class="badge <?php echo e($order->status === 'New' || $order->status === 'pending' ? 'badge-dark' : ''); ?>">
                            <?php echo e($order->status); ?>

                        </span>
                    </td>
                    <td>
                        <?php if(Auth::user()->role === 'Super Admin' || Auth::user()->role === 'Order Manager'): ?>
                            <a href="<?php echo e(route('admin.orders.show', $order->id)); ?>" class="btn btn-outline" style="padding:4px 8px; font-size:0.75rem;">View</a>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="7">No recent orders available.</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\internship\windows site\windows-laravel\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>