<?php $__env->startSection('content'); ?>

<div style="display:flex; justify-content:space-between; align-items:center; margin-bottom: 20px;">
    <h1 class="page-title" style="margin-bottom:0;">Admin Users</h1>
    <a href="<?php echo e(route('admin.users.create')); ?>" class="btn btn-primary">+ Add Admin User</a>
</div>

<?php if(session('success')): ?>
    <div style="background-color: #d1fae5; color: #065f46; padding: 15px; border-radius: 4px; margin-bottom: 20px;">
        <?php echo e(session('success')); ?>

    </div>
<?php endif; ?>

<?php if(session('error')): ?>
    <div style="background-color: #fee2e2; color: #991b1b; padding: 15px; border-radius: 4px; margin-bottom: 20px;">
        <?php echo e(session('error')); ?>

    </div>
<?php endif; ?>

<div class="card">
    <div class="table-responsive">
        <table class="admin-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><strong><?php echo e($user->name); ?></strong></td>
                    <td><?php echo e($user->email); ?></td>
                    <td>
                        <span class="badge badge-dark"><?php echo e($user->role); ?></span>
                    </td>
                    <td><?php echo e($user->created_at->format('M j, Y')); ?></td>
                    <td>
                        <div style="display:flex; gap: 8px;">
                            <a href="<?php echo e(route('admin.users.edit', $user->id)); ?>" class="btn btn-outline" style="padding:4px 8px; font-size:0.75rem;">Edit</a>
                            
                            <?php if($user->id !== auth()->id()): ?>
                            <form action="<?php echo e(route('admin.users.destroy', $user->id)); ?>" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-outline" style="padding:4px 8px; font-size:0.75rem; color: #dc2626; border-color: #fca5a5;">Delete</button>
                            </form>
                            <?php endif; ?>
                        </div>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="5">No admin users found.</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <?php if($users->hasPages()): ?>
        <div style="margin-top: 20px;">
            <?php echo e($users->links()); ?>

        </div>
    <?php endif; ?>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\internship\windows site\windows-laravel\resources\views/admin/users/index.blade.php ENDPATH**/ ?>