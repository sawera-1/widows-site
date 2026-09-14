<?php $__env->startSection('title', 'Order Tracking — Modern UPVC Windows'); ?>
<?php $__env->startSection('meta_description', 'Track the progress of your Modern UPVC Windows order online.'); ?>

<?php $__env->startPush('styles'); ?>
<style>
    /* ===== GLOBAL CONTAINER ===== */
    .track-gc { width:100%; max-width:1280px; margin-inline:auto; padding-inline:20px; }
    @media(min-width:768px){ .track-gc { padding-inline:24px; } }

    /* ===== HERO BANNER ===== */
    .hero-section {
        position: relative;
        width: 100%;
        min-height: 50vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #000;
        overflow: hidden;
    }
    .hero-bg {
        position: absolute;
        top: 0; left: 0; width: 100%; height: 100%;
        object-fit: cover;
        opacity: 0.4;
    }
    .hero-content {
        position: relative;
        z-index: 10;
        text-align: center;
        color: #fff;
        max-width: 800px;
        padding: 0 20px;
    }
    .hero-title {
        font-size: clamp(2.5rem, 5vw, 4.5rem);
        font-weight: 800;
        margin-bottom: 24px;
        line-height: 1.1;
    }
    .hero-subtitle {
        font-size: clamp(1.1rem, 2vw, 1.3rem);
        color: #ccc;
        line-height: 1.6;
    }

    /* ===== MAIN LAYOUT ===== */
    .track-section {
        padding: clamp(60px, 8vw, 100px) 0;
        background: #fff;
        color: #000;
    }
    .dark .track-section { background: #000; color: #fff; }

    /* ===== TRACKING INFO / FORM ===== */
    .track-info-container {
        max-width: 600px;
        margin: 0 auto;
        text-align: center;
    }
    .track-info-container h2 {
        font-size: clamp(2rem, 3.5vw, 2.75rem);
        font-weight: 700;
        margin-bottom: 20px;
    }
    .track-info-container p {
        font-size: 1.1rem;
        line-height: 1.6;
        color: #555;
        margin-bottom: 16px;
    }
    .dark .track-info-container p { color: #aaa; }

    .track-info-container .alert-notice {
        display: inline-block;
        background: #f9fafb;
        border: 1px solid #e5e7eb;
        padding: 12px 20px;
        font-size: 0.95rem;
        font-weight: 600;
        margin-bottom: 32px;
        color: #333;
    }
    .dark .track-info-container .alert-notice {
        background: #111; border-color: #333; color: #ccc;
    }

    .track-form {
        background: #fff;
        border: 1px solid #e5e7eb;
        padding: clamp(32px, 5vw, 48px);
        text-align: left;
    }
    .dark .track-form { background: #111; border-color: #333; }

    .form-group {
        margin-bottom: 24px;
    }
    .form-label {
        display: block;
        font-size: 0.95rem;
        font-weight: 700;
        margin-bottom: 8px;
        color: #000;
    }
    .dark .form-label { color: #fff; }
    
    .form-input {
        width: 100%;
        padding: 16px;
        background: #fff;
        border: 1px solid #d1d5db;
        color: #000;
        font-size: 1rem;
        outline: none;
        transition: border-color 0.2s;
    }
    .dark .form-input {
        background: #000; border-color: #444; color: #fff;
    }
    .form-input::placeholder { color: #9ca3af; }
    .dark .form-input::placeholder { color: #6b7280; }
    .form-input:focus { border-color: #000; }
    .dark .form-input:focus { border-color: #fff; }
    
    .form-help {
        display: block;
        font-size: 0.85rem;
        color: #6b7280;
        margin-top: 8px;
    }
    .dark .form-help { color: #9ca3af; }

    .btn-track {
        display: block;
        width: 100%;
        padding: 18px;
        background: #000;
        color: #fff;
        font-size: 1rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        border: none;
        cursor: pointer;
        transition: background 0.2s;
        text-align: center;
    }
    .btn-track:hover { background: #333; }
    .dark .btn-track { background: #fff; color: #000; }
    .dark .btn-track:hover { background: #ccc; }

    /* ===== ERRORS ===== */
    .alert-error {
        background: #fff;
        border: 1px solid #000;
        color: #000;
        padding: 16px;
        font-weight: 600;
        margin-bottom: 24px;
        font-size: 0.95rem;
    }
    .dark .alert-error {
        background: #000; border-color: #fff; color: #fff;
    }
    .alert-error ul { margin: 0; padding-left: 20px; }

    /* ===== RESULT SECTION ===== */
    .result-container {
        max-width: 900px;
        margin: 0 auto;
        background: #f9fafb;
        border: 1px solid #e5e7eb;
        padding: clamp(32px, 5vw, 64px);
    }
    .dark .result-container { background: #111; border-color: #333; }

    .result-header {
        text-align: center;
        margin-bottom: 48px;
    }
    .result-header h2 {
        font-size: clamp(1.8rem, 3vw, 2.5rem);
        font-weight: 700;
        margin-bottom: 12px;
    }
    .result-header .status-badge {
        display: inline-block;
        padding: 8px 16px;
        background: #000;
        color: #fff;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-size: 0.9rem;
    }
    .dark .result-header .status-badge { background: #fff; color: #000; }

    /* ===== TIMELINE ===== */
    .timeline {
        display: flex;
        flex-direction: column;
        gap: 20px;
        margin-bottom: 60px;
    }
    @media(min-width: 768px) {
        .timeline {
            flex-direction: row;
            justify-content: space-between;
            align-items: flex-start;
            gap: 0;
            position: relative;
        }
        .timeline::before {
            content: '';
            position: absolute;
            top: 24px;
            left: 5%;
            right: 5%;
            height: 2px;
            background: #e5e7eb;
            z-index: 1;
        }
        .dark .timeline::before { background: #333; }
    }

    .timeline-step {
        display: flex;
        align-items: center;
        gap: 16px;
    }
    @media(min-width: 768px) {
        .timeline-step {
            flex-direction: column;
            align-items: center;
            text-align: center;
            gap: 12px;
            width: 14%;
            z-index: 2;
        }
    }

    .step-circle {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        background: #fff;
        border: 2px solid #e5e7eb;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        transition: all 0.3s;
    }
    .dark .step-circle { background: #111; border-color: #333; }
    .step-circle svg {
        width: 20px;
        height: 20px;
        color: #9ca3af;
        display: none;
    }
    .dark .step-circle svg { color: #6b7280; }

    .step-label {
        font-size: 0.9rem;
        font-weight: 600;
        color: #9ca3af;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    .dark .step-label { color: #6b7280; }

    /* Completed state */
    .timeline-step.is-completed .step-circle {
        background: #000;
        border-color: #000;
    }
    .dark .timeline-step.is-completed .step-circle {
        background: #fff; border-color: #fff;
    }
    .timeline-step.is-completed .step-circle svg {
        display: block;
        color: #fff;
    }
    .dark .timeline-step.is-completed .step-circle svg { color: #000; }
    .timeline-step.is-completed .step-label { color: #000; }
    .dark .timeline-step.is-completed .step-label { color: #fff; }

    /* Current state */
    .timeline-step.is-current .step-circle {
        border-color: #000;
        border-width: 4px;
    }
    .dark .timeline-step.is-current .step-circle { border-color: #fff; }
    .timeline-step.is-current .step-label {
        color: #000;
        font-weight: 800;
    }
    .dark .timeline-step.is-current .step-label { color: #fff; }

    /* ===== ORDER DETAILS ===== */
    .order-details-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 24px;
        background: #fff;
        border: 1px solid #e5e7eb;
        padding: 32px;
    }
    .dark .order-details-grid { background: #000; border-color: #333; }
    @media(min-width: 640px) {
        .order-details-grid { grid-template-columns: 1fr 1fr; }
    }

    .detail-item .detail-label {
        display: block;
        font-size: 0.85rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: #6b7280;
        margin-bottom: 4px;
    }
    .detail-item .detail-value {
        font-size: 1.1rem;
        font-weight: 600;
    }

    /* ===== HELP SECTION ===== */
    .help-section {
        margin-top: 60px;
        text-align: center;
        padding-top: 40px;
        border-top: 1px solid #e5e7eb;
    }
    .dark .help-section { border-color: #333; }
    .help-section h3 {
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 12px;
    }
    .help-section p {
        font-size: 1rem;
        color: #6b7280;
        max-width: 500px;
        margin: 0 auto 24px auto;
        line-height: 1.6;
    }
    .btn-outline {
        display: inline-block;
        padding: 14px 28px;
        border: 2px solid #000;
        color: #000;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        text-decoration: none;
        transition: all 0.2s;
    }
    .btn-outline:hover { background: #000; color: #fff; }
    .dark .btn-outline { border-color: #fff; color: #fff; }
    .dark .btn-outline:hover { background: #fff; color: #000; }
</style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>


<section class="hero-section">
    <img src="<?php echo e(asset('assets/about/d4.png')); ?>" alt="Order Tracking Background" class="hero-bg">
    <div class="hero-content">
        <h1 class="hero-title">Order Tracking</h1>
        <p class="hero-subtitle">Track the progress of your Modern UPVC Windows order online.</p>
    </div>
</section>


<section class="track-section">
    <div class="track-gc">
        
        <?php if(isset($order)): ?>
            
            <div class="result-container">
                <div class="result-header">
                    <h2>Order <?php echo e($order->order_number); ?></h2>
                    <div style="margin-bottom: 8px; font-size: 1.1rem; color: #555;" class="dark:text-gray-400">Current Status:</div>
                    <div class="status-badge"><?php echo e($order->status); ?></div>
                </div>

                
                <?php
                    // Define the chronological order statuses
                    $timelineStatuses = [
                        'pending',
                        'confirmed', 
                        'processing', 
                        'manufacturing', 
                        'ready', 
                        'dispatched', 
                        'completed'
                    ];
                    $currentStatusRaw = strtolower($order->status);
                    
                    // Fallback to confirmed if the status isn't in our array (shouldn't happen)
                    $currentIndex = array_search($currentStatusRaw, $timelineStatuses);
                    if ($currentIndex === false) {
                        $currentIndex = 0; // Default to first step if unknown but not pending
                    }
                ?>

                <div class="timeline">
                    <?php $__currentLoopData = $timelineStatuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            $isCompleted = $index < $currentIndex;
                            $isCurrent = $index === $currentIndex;
                            $label = ucfirst($status);
                        ?>
                        <div class="timeline-step <?php echo e($isCompleted ? 'is-completed' : ''); ?> <?php echo e($isCurrent ? 'is-current' : ''); ?>">
                            <div class="step-circle">
                                <?php if($isCompleted): ?>
                                    <svg fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7"/></svg>
                                <?php endif; ?>
                            </div>
                            <div class="step-label"><?php echo e($label); ?></div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                
                <div class="order-details-grid">
                    <div class="detail-item">
                        <span class="detail-label">Order Number</span>
                        <span class="detail-value"><?php echo e($order->order_number); ?></span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Order Date</span>
                        <span class="detail-value"><?php echo e($order->created_at->format('jS F Y')); ?></span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Delivery Method</span>
                        <span class="detail-value"><?php echo e(ucfirst($order->delivery_method)); ?></span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Customer Name</span>
                        <span class="detail-value"><?php echo e($order->first_name); ?> <?php echo e($order->last_name); ?></span>
                    </div>
                </div>

                <div style="text-align: center; margin-top: 40px;">
                    <a href="<?php echo e(route('track-order')); ?>" class="btn-outline">Track Another Order</a>
                </div>
            </div>

        <?php else: ?>
            
            <div class="track-info-container">
                <h2>Track Your Order</h2>
                
                <div class="alert-notice">
                    This tracking will not work until your order has been processed, several days after ordering.<br>
                    Please get the order number from our order emails.
                </div>
                
                <p>Please enter your MW order number:</p>

                <?php if(session('error')): ?>
                    <div class="alert-error">
                        <?php echo e(session('error')); ?>

                    </div>
                <?php endif; ?>
                
                <?php if($errors->any()): ?>
                    <div class="alert-error">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <form action="<?php echo e(route('track-order.submit')); ?>" method="POST" class="track-form">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="order_number" class="form-label">Order Number</label>
                        <input type="text" id="order_number" name="order_number" class="form-input" placeholder="MW123456" value="<?php echo e(old('order_number')); ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="postcode" class="form-label">Postcode</label>
                        <input type="text" id="postcode" name="postcode" class="form-input" placeholder="LE10 3XX" value="<?php echo e(old('postcode')); ?>" required>
                        <span class="form-help">Enter your MW order number and postcode with a space between them. Example: MW123456 LE10 3XX</span>
                    </div>

                    <button type="submit" class="btn-track">Track Order</button>
                </form>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\internship\windows site\windows-laravel\resources\views/pages/trackorder.blade.php ENDPATH**/ ?>