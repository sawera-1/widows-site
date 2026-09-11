<?php $__env->startSection('title', 'Your Cart — Company Name'); ?>

<?php $__env->startPush('styles'); ?>
<style>
    .cart-section { padding: clamp(40px, 6vw, 80px) 0; }
    .cart-container { width: 100%; max-width: 1280px; margin: 0 auto; padding: 0 20px; }
    .cart-layout { display: grid; grid-template-columns: 1fr; gap: 40px; align-items: start; }
    @media(min-width: 900px) {
        .cart-layout { grid-template-columns: 1fr 380px; }
    }
    
    .cart-header { margin-bottom: 24px; border-bottom: 1px solid var(--mono-border-light); padding-bottom: 16px; }
    .dark .cart-header { border-color: var(--mono-border-dark); }
    .cart-header h1 { font-size: 2rem; font-weight: 700; margin: 0; }
    
    .cart-item { display: flex; flex-direction: column; gap: 16px; padding: 24px; border: 1px solid #000; border-radius: 0; margin-bottom: 24px; }
    .dark .cart-item { border-color: #fff; }
    @media(min-width: 600px) {
        .cart-item { flex-direction: row; justify-content: space-between; }
    }
    
    .ci-details { flex: 1; }
    .ci-title { font-size: 1.25rem; font-weight: 600; margin-bottom: 8px; }
    .ci-meta { font-size: 0.9rem; color: var(--mono-grey); margin-bottom: 16px; }
    .dark .ci-meta { color: #a3a3a3; }
    
    .ci-config-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 8px;
        background: #f9fafb;
        padding: 16px;
        border-radius: 0;
        border: 1px solid #e5e7eb;
        font-size: 0.85rem;
    }
    .dark .ci-config-grid { background: #111; }
    @media(min-width: 600px) {
        .ci-config-grid { grid-template-columns: 1fr 1fr; }
    }
    
    .ci-pane { margin-top: 12px; padding-top: 12px; border-top: 1px dashed #e5e7eb; }
    .dark .ci-pane { border-color: #333; }
    .ci-pane-title { font-weight: 600; margin-bottom: 4px; color: #000; }
    .dark .ci-pane-title { color: #fff; }
    
    .ci-actions { display: flex; flex-direction: column; align-items: flex-start; gap: 16px; min-width: 140px; }
    @media(min-width: 600px) {
        .ci-actions { align-items: flex-end; text-align: right; }
    }
    .ci-price { font-size: 1.2rem; font-weight: 700; }
    
    .qty-form { display: flex; align-items: center; gap: 8px; }
    .qty-input { width: 60px; height: 36px; text-align: center; border: 1px solid #ccc; border-radius: 0; background: transparent; color: inherit; transition: border-color 0.2s; }
    .dark .qty-input { border-color: #666; }
    .qty-input:hover { border-color: #000; }
    .dark .qty-input:hover { border-color: #fff; }
    .qty-input:focus { outline: none; border-color: #666; box-shadow: 0 0 0 1px #666; }
    .dark .qty-input:focus { border-color: #a3a3a3; box-shadow: 0 0 0 1px #a3a3a3; }
    .btn-update { font-size: 0.8rem; padding: 6px 12px; background: #e5e7eb; border-radius: 0; color: #000; border: 1px solid transparent; }
    .dark .btn-update { background: #333; color: white; }
    .btn-update:hover { background: #d1d5db; border-color: #000; }
    .dark .btn-update:hover { background: #444; border-color: #fff; }
    
    .btn-remove { color: #dc2626; font-size: 0.85rem; text-decoration: underline; background: none; border: none; cursor: pointer; padding: 0; }
    .btn-remove:hover { color: #b91c1c; }
    
    .cart-summary { background: #f9fafb; border: 1px solid #e5e7eb; border-radius: 0; padding: 24px; position: sticky; top: 24px; }
    .dark .cart-summary { background: #111; }
    .cs-title { font-size: 1.25rem; font-weight: 600; margin-bottom: 20px; }
    .cs-line { display: flex; justify-content: space-between; margin-bottom: 12px; font-size: 0.95rem; }
    .cs-total { display: flex; justify-content: space-between; margin-top: 20px; padding-top: 20px; border-top: 1px solid var(--mono-border-light); font-size: 1.3rem; font-weight: 700; }
    .dark .cs-total { border-color: var(--mono-border-dark); }
    
    .btn-checkout { display: block; width: 100%; text-align: center; background: #000; color: white; padding: 14px; border-radius: 0; font-weight: 600; margin-top: 24px; text-decoration: none; transition: background 0.2s; }
    .dark .btn-checkout { background: #fff; color: #000; }
    .btn-checkout:hover { background: #666; }
    .dark .btn-checkout:hover { background: #ccc; }
    .btn-checkout:active { background: #999; }
    .dark .btn-checkout:active { background: #999; }
    
    .empty-cart { text-align: center; padding: 60px 0; }
    .empty-cart p { color: var(--mono-grey); margin-bottom: 24px; }
    .btn-continue { display: inline-block; padding: 12px 24px; background: #000; color: #fff; border-radius: 6px; font-weight: 500; }
    .dark .btn-continue { background: #fff; color: #000; }
</style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<section class="cart-section bg-white dark:bg-black text-black dark:text-white min-h-screen">
    <div class="cart-container">
        <div class="cart-header">
            <h1>Shopping Cart</h1>
        </div>

        <?php if(session('success')): ?>
            <div style="background: #ecfdf5; color: #065f46; padding: 12px 16px; border-radius: 6px; margin-bottom: 24px; font-size: 0.9rem;">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <?php if(session('error')): ?>
            <div style="background: #fef2f2; color: #991b1b; padding: 12px 16px; border-radius: 6px; margin-bottom: 24px; font-size: 0.9rem;">
                <?php echo e(session('error')); ?>

            </div>
        <?php endif; ?>

        <?php if(empty($cart)): ?>
            <div class="empty-cart">
                <p>Your cart is currently empty.</p>
                <a href="<?php echo e(route('windows')); ?>" class="btn-continue">Continue Shopping</a>
            </div>
        <?php else: ?>
            <div class="cart-layout">
                <div class="cart-items-col">
                    <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="cart-item">
                            <div class="ci-details">
                                <div class="ci-title"><?php echo e($item['product_name'] ?? ucwords(str_replace('-', ' ', $item['design_slug']))); ?></div>
                                <div class="ci-meta">
                                    Size: <?php echo e($item['width']); ?>mm &times; <?php echo e($item['height']); ?>mm
                                </div>
                                
                                <div class="ci-config-grid">
                                    <?php if(is_array($item['panes'])): ?>
                                        <?php $__currentLoopData = $item['panes']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $pane): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="ci-pane">
                                                <div class="ci-pane-title"><?php echo e(($item['product_type'] ?? '') === 'door' ? 'Door Configuration' : 'Pane ' . ($index + 1)); ?></div>
                                                <div><strong>Opening:</strong> <?php echo e(ucwords(str_replace('-', ' ', $pane['opening_type'] ?? 'Fixed'))); ?></div>
                                                <?php if(!empty($pane['hinged_at']) && $pane['hinged_at'] !== 'N/A'): ?>
                                                    <div><strong>Hinged:</strong> <?php echo e(ucfirst($pane['hinged_at'])); ?></div>
                                                <?php endif; ?>
                                                <?php if(!empty($pane['hinge_type'])): ?>
                                                    <div><strong>Hinge Type:</strong> <?php echo e(ucfirst(str_replace('-', ' ', $pane['hinge_type']))); ?></div>
                                                <?php endif; ?>
                                                <?php if(!empty($pane['handle']) || !empty($pane['handle_color'])): ?>
                                                    <div><strong>Handle:</strong> <?php echo e(ucfirst($pane['handle'] ?? $pane['handle_color'])); ?></div>
                                                <?php endif; ?>
                                                <?php if(!empty($pane['glass']) || !empty($pane['glass_type'])): ?>
                                                    <div><strong>Glass:</strong> <?php echo e(ucfirst(str_replace('-', ' ', $pane['glass'] ?? $pane['glass_type']))); ?></div>
                                                <?php endif; ?>
                                                <?php if(!empty($pane['colour'])): ?>
                                                    <div><strong>Colour:</strong> <?php echo e(ucfirst($pane['colour'])); ?></div>
                                                <?php endif; ?>
                                                <?php if(!empty($pane['lock'])): ?>
                                                    <div><strong>Lock:</strong> <?php echo e(ucfirst($pane['lock'])); ?></div>
                                                <?php endif; ?>
                                                <?php if(!empty($pane['cill']) && $pane['cill'] !== 'none'): ?>
                                                    <div><strong>Cill:</strong> <?php echo e(ucfirst($pane['cill'])); ?></div>
                                                <?php endif; ?>
                                                <?php if(!empty($pane['trickle_vent']) && $pane['trickle_vent'] !== 'none'): ?>
                                                    <div><strong>Vent:</strong> <?php echo e(ucfirst(str_replace('-', ' ', $pane['trickle_vent']))); ?></div>
                                                <?php endif; ?>
                                                <?php if(!empty($pane['internal_blind']) && $pane['internal_blind'] !== 'none'): ?>
                                                    <div><strong>Blind:</strong> <?php echo e(ucfirst(str_replace('-', ' ', $pane['internal_blind']))); ?></div>
                                                <?php endif; ?>
                                                <?php if(!empty($pane['extra_bars']) && $pane['extra_bars'] !== 'none'): ?>
                                                    <div><strong>Bars:</strong> <?php echo e(ucfirst(str_replace('-', ' ', $pane['extra_bars']))); ?></div>
                                                <?php endif; ?>
                                                <?php if(!empty($pane['decoration']) && $pane['decoration'] !== 'none'): ?>
                                                    <div><strong>Deco:</strong> <?php echo e(ucfirst(str_replace('-', ' ', $pane['decoration']))); ?></div>
                                                <?php endif; ?>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            
                            <div class="ci-actions">
                                <div class="ci-price">&pound;<?php echo e(number_format($item['line_total'], 2)); ?></div>
                                
                                <form action="<?php echo e(route('cart.update', $id)); ?>" method="POST" class="qty-form">
                                    <?php echo csrf_field(); ?>
                                    <input type="number" name="quantity" value="<?php echo e($item['quantity']); ?>" min="1" class="qty-input" aria-label="Quantity">
                                    <button type="submit" class="btn-update">Update</button>
                                </form>
                                
                                <form action="<?php echo e(route('cart.remove', $id)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <button type="submit" class="btn-remove">Remove Item</button>
                                </form>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                
                <div class="cart-summary-col">
                    <div class="cart-summary">
                        <h2 class="cs-title">Order Summary</h2>
                        <div class="cs-line">
                            <span>Subtotal</span>
                            <span>&pound;<?php echo e(number_format($subtotal, 2)); ?></span>
                        </div>
                        <div class="cs-line">
                            <span>VAT (20%)</span>
                            <span>&pound;<?php echo e(number_format($tax, 2)); ?></span>
                        </div>
                        <div class="cs-line" style="color: var(--mono-grey); font-size: 0.85rem;">
                            <span>Delivery calculated at checkout.</span>
                        </div>
                        
                        <div class="cs-total">
                            <span>Total</span>
                            <span>&pound;<?php echo e(number_format($total, 2)); ?></span>
                        </div>
                        
                        <a href="<?php echo e(route('checkout.index')); ?>" class="btn-checkout">Proceed to Checkout</a>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\internship\windows site\windows-laravel\resources\views/pages/cart.blade.php ENDPATH**/ ?>