<?php $__env->startSection('content'); ?>

<div style="margin-bottom: 20px;">
    <a href="<?php echo e(route('admin.enquiries.index')); ?>" class="btn btn-outline">Back to Enquiries</a>
</div>

<div style="margin-bottom: 28px;">
    <h1 class="page-title">Enquiry from <?php echo e($enquiry->name); ?></h1>
    <p class="page-subtitle" style="margin-bottom:0;">View message details and send replies to the customer.</p>
</div>

<?php if(session('success')): ?>
    <div style="background-color: #d1fae5; color: #065f46; padding: 15px; border-radius: 0; margin-bottom: 20px;">
        <?php echo e(session('success')); ?>

    </div>
<?php endif; ?>

<div style="display: grid; grid-template-columns: 2fr 1fr; gap: 24px;">
    <!-- Left Column: Message Details & Replies -->
    <div>
        <div class="card" style="margin-bottom: 24px;">
            <div class="card-header">
                <h2>Message Details</h2>
            </div>
            
            <div style="display: grid; grid-template-columns: 120px 1fr; gap: 12px; margin-bottom: 16px; align-items: baseline;">
                <strong style="color: var(--text-muted); font-size: 0.85rem; text-transform: uppercase;">From</strong>
                <div><strong style="color:var(--text-main);"><?php echo e($enquiry->name); ?></strong> <a href="mailto:<?php echo e($enquiry->email); ?>" style="color:#6B6B6B;">&lt;<?php echo e($enquiry->email); ?>&gt;</a></div>
                
                <strong style="color: var(--text-muted); font-size: 0.85rem; text-transform: uppercase;">Date</strong>
                <div style="color:#6B6B6B;"><?php echo e($enquiry->created_at->format('M j, Y g:i A')); ?></div>
                
                <strong style="color: var(--text-muted); font-size: 0.85rem; text-transform: uppercase;">Subject</strong>
                <div style="font-weight: 500;"><?php echo e($enquiry->subject ?? 'General Inquiry'); ?></div>
            </div>
            
            <?php if($enquiry->attachment): ?>
                <div style="margin-bottom: 20px;">
                    <a href="<?php echo e(route('admin.enquiries.attachment', $enquiry)); ?>" class="btn btn-outline btn-sm" target="_blank">
                        <svg style="width:16px;height:16px;margin-right:4px;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13"></path></svg>
                        Download Attachment
                    </a>
                </div>
            <?php endif; ?>

            <div style="background: #FAFAFA; border: 1px solid var(--border-color); padding: 20px; font-size: 0.95rem; line-height: 1.6; white-space: pre-wrap; color: var(--text-main);"><?php echo e($enquiry->message); ?></div>
        </div>

        <?php if($enquiry->replies->count() > 0): ?>
            <div class="card" style="margin-bottom: 24px;">
                <div class="card-header">
                    <h2>Reply History</h2>
                </div>
                
                <?php $__currentLoopData = $enquiry->replies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reply): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div style="margin-bottom: 20px; padding-bottom: 20px; border-bottom: 1px solid var(--border-color);">
                        <div style="display:flex; justify-content:space-between; margin-bottom: 8px;">
                            <strong style="color: var(--text-main);"><?php echo e($reply->admin ? $reply->admin->name : 'Admin'); ?> replied:</strong>
                            <span style="color: var(--text-muted); font-size: 0.85rem;"><?php echo e($reply->created_at->format('M j, Y g:i A')); ?></span>
                        </div>
                        <div style="margin-bottom: 12px;"><strong>Subject:</strong> <?php echo e($reply->subject); ?></div>
                        <div style="background: #fff; border: 1px solid var(--border-color); padding: 16px; font-size: 0.95rem; line-height: 1.6; white-space: pre-wrap;"><?php echo e($reply->message); ?></div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>

        <div class="card">
            <div class="card-header">
                <h2>Send a Reply</h2>
            </div>
            <form action="<?php echo e(route('admin.enquiries.reply', $enquiry)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="form-group" style="margin-bottom: 16px;">
                    <label class="form-label">To:</label>
                    <input type="text" class="form-control" value="<?php echo e($enquiry->email); ?>" disabled style="background:#f5f5f5;">
                </div>
                <div class="form-group" style="margin-bottom: 16px;">
                    <label class="form-label">Subject:</label>
                    <input type="text" name="subject" class="form-control" value="Re: <?php echo e($enquiry->subject ?? 'Your Inquiry'); ?>" required>
                </div>
                <div class="form-group" style="margin-bottom: 20px;">
                    <label class="form-label">Message:</label>
                    <textarea name="message" class="form-control" rows="6" required></textarea>
                    <p style="color: var(--text-muted); font-size: 0.8125rem; margin-top: 6px;">This message will be sent to the customer's email address.</p>
                </div>
                <button type="submit" class="btn btn-primary">Send Reply</button>
            </form>
        </div>
    </div>

    <!-- Right Column: Status & Meta -->
    <div>
        <div class="card">
            <div class="card-header">
                <h2>Enquiry Status</h2>
            </div>
            <form action="<?php echo e(route('admin.enquiries.update_status', $enquiry)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                
                <div class="form-group" style="margin-bottom: 20px;">
                    <label class="form-label">Current Status</label>
                    <div style="position: relative;">
                        <select name="status" class="form-control" style="appearance: none; background: #fff; padding-right: 36px; border: 2px solid #000; font-weight: 600; cursor: pointer;">
                            <option value="Pending" <?php echo e($enquiry->status === 'Pending' ? 'selected' : ''); ?>>Pending</option>
                            <option value="In Progress" <?php echo e($enquiry->status === 'In Progress' ? 'selected' : ''); ?>>In Progress</option>
                            <option value="Resolved" <?php echo e($enquiry->status === 'Resolved' ? 'selected' : ''); ?>>Resolved</option>
                            <option value="Closed" <?php echo e($enquiry->status === 'Closed' ? 'selected' : ''); ?>>Closed</option>
                        </select>
                        <div style="position: absolute; right: 12px; top: 50%; transform: translateY(-50%); pointer-events: none;">
                            <svg width="12" height="12" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path></svg>
                        </div>
                    </div>
                </div>

                <div class="form-group" style="margin-bottom: 24px;">
                    <label class="form-label">Admin Notes (Internal)</label>
                    <textarea name="admin_notes" class="form-control" rows="6" placeholder="Private notes for staff..."><?php echo e($enquiry->admin_notes); ?></textarea>
                </div>

                <button type="submit" class="btn btn-primary" style="width: 100%;">Update Status</button>
            </form>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\internship\windows site\windows-laravel\resources\views/admin/enquiries/show.blade.php ENDPATH**/ ?>