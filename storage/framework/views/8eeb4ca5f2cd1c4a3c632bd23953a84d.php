<?php $__env->startSection('content'); ?>

<div style="margin-bottom:28px;">
    <h1 class="page-title">Enquiries</h1>
    <p class="page-subtitle" style="margin-bottom:0;">Manage customer messages and support tickets.</p>
</div>

<!-- ─── STAT CARDS ─── -->
<div class="grid-cards" style="grid-template-columns: repeat(3, 1fr); margin-bottom: 24px;">
    <div class="stat-card">
        <div class="stat-card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
        </div>
        <div class="stat-card-title">Total Enquiries</div>
        <div class="stat-card-value"><?php echo e($enquiries->total() ?? 0); ?></div>
    </div>
    <div class="stat-card">
        <div class="stat-card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        </div>
        <div class="stat-card-title">Pending</div>
        <div class="stat-card-value"><?php echo e(\App\Models\Enquiry::where('status', 'Pending')->count() ?? 0); ?></div>
    </div>
    <div class="stat-card">
        <div class="stat-card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 13l4 4L19 7"/></svg>
        </div>
        <div class="stat-card-title">Resolved</div>
        <div class="stat-card-value"><?php echo e(\App\Models\Enquiry::where('status', 'Resolved')->count() ?? 0); ?></div>
    </div>
</div>

<?php if(session('success')): ?>
    <div style="background-color: #d1fae5; color: #065f46; padding: 15px; border-radius: 0; margin-bottom: 20px;">
        <?php echo e(session('success')); ?>

    </div>
<?php endif; ?>

<div class="card">
    <?php if($enquiries->count() > 0): ?>
        <div class="table-responsive">
            <table class="admin-table">
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
                        <tr style="<?php echo e(!$enquiry->read_status ? 'font-weight: 600; background: #fafafa;' : ''); ?>">
                            <td style="color:#6B6B6B;"><?php echo e($enquiry->created_at->format('d/m/Y H:i')); ?></td>
                            <td><strong style="color:var(--text-main);"><?php echo e($enquiry->name); ?></strong></td>
                            <td><a href="mailto:<?php echo e($enquiry->email); ?>" style="color:#6B6B6B;"><?php echo e($enquiry->email); ?></a></td>
                            <td><?php echo e($enquiry->subject ?? 'General Inquiry'); ?></td>
                            <td>
                                <span class="badge <?php echo e($enquiry->status === 'Pending' ? 'badge-dark' : ($enquiry->status === 'Resolved' || $enquiry->status === 'Closed' ? 'badge-success' : 'badge-outline')); ?>" style="text-transform: capitalize;">
                                    <?php echo e($enquiry->status); ?>

                                </span>
                            </td>
                            <td>
                                <?php if($enquiry->reply_status === 'Replied'): ?>
                                    <span class="badge badge-success">Replied</span>
                                <?php else: ?>
                                    <span class="badge badge-outline">Not Replied</span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <a href="<?php echo e(route('admin.enquiries.show', $enquiry)); ?>" class="btn btn-sm btn-primary">View</a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
        
        <?php if($enquiries->hasPages()): ?>
            <div style="margin-top: 20px;">
                <?php echo e($enquiries->links()); ?>

            </div>
        <?php endif; ?>
    <?php else: ?>
        <p style="text-align: center; padding: 40px 16px; color:#999; margin: 0;">No enquiries found.</p>
    <?php endif; ?>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\internship\windows site\windows-laravel\resources\views/admin/enquiries/index.blade.php ENDPATH**/ ?>