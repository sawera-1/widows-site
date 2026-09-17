<?php $__env->startSection('content'); ?>

<div style="margin-bottom: 20px;">
    <a href="<?php echo e(route('admin.orders.index')); ?>" class="btn btn-outline">Back to Orders</a>
</div>

<div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 24px;">
    <div>
        <h1 class="page-title" style="margin-bottom: 8px;">Order <?php echo e($order->order_number); ?></h1>
        <p class="page-subtitle" style="margin-bottom:0;">Placed on <?php echo e($order->created_at->format('M j, Y h:i A')); ?></p>
    </div>
    <div style="display: flex; gap: 12px; align-items: center;">
        <span class="badge <?php echo e($order->payment_status === 'paid' ? 'badge-success' : 'badge-dark'); ?>">
            Payment: <?php echo e(ucfirst($order->payment_status)); ?>

        </span>
        <form action="<?php echo e(route('admin.orders.status', $order->id)); ?>" method="POST" style="display:flex; gap:8px;">
            <?php echo csrf_field(); ?>
            <select name="status" class="form-control" style="width:auto; padding:10px 40px 10px 14px; font-size:0.875rem; font-weight:600; border-radius:0; border:2px solid #111; background:#fff; color:#111; cursor:pointer; min-width:160px;" onchange="this.form.submit()">
                <option value="pending" <?php echo e($order->status === 'pending' ? 'selected' : ''); ?>>Pending</option>
                <option value="processing" <?php echo e($order->status === 'processing' ? 'selected' : ''); ?>>Processing</option>
                <option value="completed" <?php echo e($order->status === 'completed' ? 'selected' : ''); ?>>Completed</option>
                <option value="cancelled" <?php echo e($order->status === 'cancelled' ? 'selected' : ''); ?>>Cancelled</option>
            </select>
        </form>
    </div>
</div>

<!-- ─── STAT CARDS ─── -->
<div class="grid-cards" style="grid-template-columns: repeat(3, 1fr); margin-bottom:24px;">
    <div class="stat-card">
        <div class="stat-card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        </div>
        <div class="stat-card-title">Order Total</div>
        <div class="stat-card-value">£<?php echo e(number_format($order->total, 2)); ?></div>
    </div>
    <div class="stat-card">
        <div class="stat-card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
        </div>
        <div class="stat-card-title">Items</div>
        <div class="stat-card-value"><?php echo e($order->items->count()); ?></div>
    </div>
    <div class="stat-card">
        <div class="stat-card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0"/></svg>
        </div>
        <div class="stat-card-title">Delivery</div>
        <div class="stat-card-value" style="font-size:1.25rem; text-transform:capitalize;"><?php echo e($order->delivery_method); ?></div>
    </div>
</div>

<div style="display: grid; grid-template-columns: 2fr 1fr; gap: 24px;">
    
    <div>
        <div class="card" style="margin-bottom: 24px;">
            <div class="card-header">
                <h2>Items Ordered</h2>
            </div>
            
            <?php $__currentLoopData = $order->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div style="border: 1px solid var(--border-color); padding: 16px; margin-bottom: 16px;">
                    <div style="display: flex; justify-content: space-between; margin-bottom: 16px;">
                        <div>
                            <h3 style="font-size: 1.1rem; font-weight: 700; margin-bottom: 4px;"><?php echo e($item->product_name); ?></h3>
                            <p style="color: var(--text-muted); font-size: 0.9rem;">Model: <?php echo e($item->design_slug); ?></p>
                        </div>
                        <div style="text-align: right;">
                            <div style="font-weight: 600; font-size: 1.1rem;">£<?php echo e(number_format($item->line_total, 2)); ?></div>
                            <div style="color: var(--text-muted); font-size: 0.9rem;">Qty: <?php echo e($item->quantity); ?> &times; £<?php echo e(number_format($item->unit_price, 2)); ?></div>
                        </div>
                    </div>

                    <div style="background: #F7F7F7; padding: 12px;">
                        <h4 style="font-size: 0.95rem; font-weight: 600; margin-bottom: 8px;">Configuration Details (Size Form)</h4>
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px; font-size: 0.9rem;">
                            <div>
                                <span style="color: var(--text-muted);">Overall Width:</span> 
                                <strong><?php echo e($item->width); ?> mm</strong>
                            </div>
                            <div>
                                <span style="color: var(--text-muted);">Overall Height:</span> 
                                <strong><?php echo e($item->height); ?> mm</strong>
                            </div>
                        </div>
                        
                        <?php if($item->configuration_json): ?>
                            <?php
                                $panes = is_string($item->configuration_json) ? json_decode($item->configuration_json, true) : $item->configuration_json;
                            ?>
                            <?php if(is_array($panes) && count($panes) > 0): ?>
                                <div style="margin-top: 12px; border-top: 1px solid var(--border-color); padding-top: 12px;">
                                    <h5 style="font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.5px; color: var(--text-muted); margin-bottom: 8px;">Pane Specifics</h5>
                                    <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); gap: 12px;">
                                        <?php $__currentLoopData = $panes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $pane): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div style="background: #fff; border: 1px solid var(--border-color); padding: 8px; font-size: 0.85rem;">
                                                <strong style="display: block; margin-bottom: 4px;">Pane <?php echo e($index + 1); ?></strong>
                                                <div style="color: var(--text-muted);">
                                                    <div>Type: <span style="color: var(--text-main); font-weight: 500;"><?php echo e($pane['type'] ?? 'Fixed'); ?></span></div>
                                                    <div>Glass: <span style="color: var(--text-main); font-weight: 500;"><?php echo e($pane['glass'] ?? 'Clear'); ?></span></div>
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <div class="card">
            <div class="card-header">
                <h2>Order Summary</h2>
            </div>
            <div style="display: flex; flex-direction: column; gap: 12px; max-width: 300px; margin-left: auto;">
                <div style="display: flex; justify-content: space-between;">
                    <span style="color: var(--text-muted);">Subtotal</span>
                    <span>£<?php echo e(number_format($order->subtotal, 2)); ?></span>
                </div>
                <div style="display: flex; justify-content: space-between;">
                    <span style="color: var(--text-muted);">Delivery Cost</span>
                    <span>£<?php echo e(number_format($order->delivery_cost, 2)); ?></span>
                </div>
                <div style="display: flex; justify-content: space-between;">
                    <span style="color: var(--text-muted);">VAT (20%)</span>
                    <span>£<?php echo e(number_format($order->tax, 2)); ?></span>
                </div>
                <div style="display: flex; justify-content: space-between; border-top: 2px solid #111; padding-top: 12px; font-weight: 700; font-size: 1.2rem;">
                    <span>Total</span>
                    <span>£<?php echo e(number_format($order->total, 2)); ?></span>
                </div>
            </div>
        </div>
    </div>

    
    <div>
        <div class="card" style="margin-bottom: 24px;">
            <div class="card-header">
                <h2>Customer Details</h2>
            </div>
            
            <?php if($order->user): ?>
                <div style="margin-bottom: 16px; display: flex; align-items: center; gap: 10px;">
                    <div style="width: 40px; height: 40px; background: #000; color: #fff; display: flex; align-items: center; justify-content: center; font-weight: 600;">
                        <?php echo e(substr($order->first_name, 0, 1)); ?><?php echo e(substr($order->last_name, 0, 1)); ?>

                    </div>
                    <div>
                        <div style="font-weight: 600;"><?php echo e($order->first_name); ?> <?php echo e($order->last_name); ?></div>
                        <a href="<?php echo e(route('admin.customers.show', $order->user_id)); ?>" style="font-size: 0.85rem; color: #666; text-decoration: underline;">View Profile</a>
                    </div>
                </div>
            <?php else: ?>
                <div style="font-weight: 600; margin-bottom: 16px;"><?php echo e($order->first_name); ?> <?php echo e($order->last_name); ?> <span class="badge" style="font-size:0.7rem; margin-left:8px;">Guest</span></div>
            <?php endif; ?>

            <div style="display: flex; flex-direction: column; gap: 8px; font-size: 0.95rem;">
                <div><strong style="color: var(--text-muted);">Email:</strong> <a href="mailto:<?php echo e($order->email); ?>"><?php echo e($order->email); ?></a></div>
                <div><strong style="color: var(--text-muted);">Phone:</strong> <?php echo e($order->phone ?? 'N/A'); ?></div>
            </div>
        </div>

        <div class="card" style="margin-bottom: 24px;">
            <div class="card-header">
                <h2>Billing Address</h2>
            </div>
            <address style="font-style: normal; color: var(--text-muted); line-height: 1.5; font-size: 0.95rem;">
                <?php echo e($order->billing_address); ?><br>
                <?php echo e($order->billing_city); ?><br>
                <?php if($order->billing_county): ?><?php echo e($order->billing_county); ?><br><?php endif; ?>
                <?php echo e($order->billing_postcode); ?><br>
                <?php echo e($order->billing_country); ?>

            </address>
        </div>

        <div class="card">
            <div class="card-header">
                <h2>Delivery Method</h2>
            </div>
            <div style="font-size: 0.95rem; margin-bottom: 12px;">
                <strong style="text-transform: capitalize;"><?php echo e($order->delivery_method); ?></strong>
            </div>
            
            <?php if($order->delivery_method === 'delivery' && $order->delivery_address): ?>
                <address style="font-style: normal; color: var(--text-muted); line-height: 1.5; font-size: 0.95rem;">
                    <?php echo e($order->delivery_address); ?>

                </address>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\internship\windows site\windows-laravel\resources\views/admin/orders/show.blade.php ENDPATH**/ ?>