<?php $__env->startSection('content'); ?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="page-title mb-0">Enquiries</h1>
</div>

<?php if(session('success')): ?>
    <div class="alert alert-success"><?php echo e(session('success')); ?></div>
<?php endif; ?>

<div class="card">
    <?php if($enquiries->count() > 0): ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Status</th>
                    <th>Reply Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $enquiries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $enquiry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr style="<?php echo e(!$enquiry->read_status ? 'font-weight: bold; background: #f9f9f9;' : ''); ?>">
                        <td><?php echo e($enquiry->created_at->format('d/m/Y H:i')); ?></td>
                        <td><?php echo e($enquiry->name); ?></td>
                        <td><?php echo e($enquiry->email); ?></td>
                        <td><?php echo e($enquiry->subject ?? 'General Inquiry'); ?></td>
                        <td>
                            <span class="badge <?php echo e($enquiry->status === 'Pending' ? 'bg-warning' : ($enquiry->status === 'Resolved' || $enquiry->status === 'Closed' ? 'bg-success' : 'bg-primary')); ?>">
                                <?php echo e($enquiry->status); ?>

                            </span>
                        </td>
                        <td>
                            <?php if($enquiry->reply_status === 'Replied'): ?>
                                <span class="badge bg-success">Replied</span>
                            <?php else: ?>
                                <span class="badge bg-secondary">Not Replied</span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <a href="<?php echo e(route('admin.enquiries.show', $enquiry)); ?>" class="btn btn-sm btn-primary">View</a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        
        <div class="mt-4">
            <?php echo e($enquiries->links()); ?>

        </div>
    <?php else: ?>
        <p class="mb-0">No enquiries found.</p>
    <?php endif; ?>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\internship\windows site\windows-laravel\resources\views/admin/enquiries/index.blade.php ENDPATH**/ ?>