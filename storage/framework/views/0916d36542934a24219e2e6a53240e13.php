<?php $__env->startSection('content'); ?>

<h1 class="page-title">Customers</h1>

<div class="card">
    <div class="table-responsive">
        <table class="admin-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Joined</th>
                    <th>Orders</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($customer->id); ?></td>
                    <td><strong><?php echo e($customer->name); ?></strong></td>
                    <td><a href="mailto:<?php echo e($customer->email); ?>"><?php echo e($customer->email); ?></a></td>
                    <td><?php echo e($customer->created_at->format('M j, Y')); ?></td>
                    <td>
                        <?php echo e(\App\Models\Order::where('user_id', $customer->id)->count()); ?>

                    </td>
                    <td>
                        <a href="<?php echo e(route('admin.customers.show', $customer->id)); ?>" class="btn btn-outline" style="padding:4px 8px; font-size:0.75rem;">View Profile</a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="6" style="text-align: center; padding: 24px;">No customers found. Customers are automatically created when placing an order.</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <?php if($customers->hasPages()): ?>
        <div style="margin-top: 20px;">
            <?php echo e($customers->links()); ?>

        </div>
    <?php endif; ?>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\internship\windows site\windows-laravel\resources\views/admin/customers/index.blade.php ENDPATH**/ ?>