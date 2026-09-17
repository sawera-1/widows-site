<?php $__env->startSection('title', 'Window & Door Info — Modern UPVC Windows'); ?>
<?php $__env->startSection('meta_description', 'Browse our full range of premium uPVC windows and doors. Click any product to learn more, see options and get a price.'); ?>

<?php $__env->startPush('styles'); ?>
<style>
    /* ── Container ── */
    .info-gc { width: 100%; max-width: 1280px; margin-inline: auto; padding-inline: 20px; }
    @media(min-width: 768px) { .info-gc { padding-inline: 24px; } }

    /* ── Hero ── */
    .info-hero {
        position: relative;
        width: 100%;
        height: clamp(280px, 45vw, 450px);
        display: flex;
        align-items: center;
        justify-content: center;
        background: #000;
        overflow: hidden;
    }
    .info-hero__bg {
        position: absolute;
        top: 0; left: 0; width: 100%; height: 100%;
        background: #050505; /* Darkened to match home page vibe */
    }
    .info-hero-overlay {
        position: absolute; inset: 0; background: rgba(0,0,0,0.45); /* Matched home page overlay opacity */
    }
    .info-hero__content {
        position: relative;
        z-index: 10;
        text-align: center;
        color: #fff;
        max-width: 800px;
        padding: 0 24px;
        box-sizing: border-box;
    }
    .info-hero__title {
        font-size: clamp(2rem, 4vw + 0.5rem, 3.5rem);
        font-weight: 800;
        margin-bottom: 16px;
        line-height: 1.1;
        letter-spacing: -0.02em;
    }
    .info-hero__sub {
        font-size: clamp(0.9375rem, 1vw + 0.25rem, 1.125rem);
        color: #fff;
        opacity: 0.9;
        line-height: 1.6;
        margin-bottom: 0;
    }

    /* ── Section chrome ── */
    .info-section {
        padding: clamp(56px, 8vw, 96px) 20px;
    }
    .info-section-header {
        text-align: center;
        margin-bottom: clamp(40px, 5vw, 64px);
    }
    .wi-section__eyebrow {
        display: block;
        font-size: 0.8rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.08em;
        color: #666;
        margin-bottom: 12px;
    }
    .dark .wi-section__eyebrow { color: #a3a3a3; }
    .info-section-header h2 {
        font-size: clamp(1.9rem, 3.5vw, 2.75rem);
        font-weight: 700;
        line-height: 1.15;
        margin-bottom: 16px;
    }
    .info-section-header p {
        font-size: 1.1rem;
        line-height: 1.7;
        color: #555;
        max-width: 560px;
        margin-inline: auto;
    }
    .dark .info-section-header p { color: #aaa; }

    /* ── Product grid ── */
    .info-products-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 24px;
    }
    @media(min-width: 640px)  { .info-products-grid { grid-template-columns: repeat(2, 1fr); } }
    @media(min-width: 1024px) { .info-products-grid { grid-template-columns: repeat(4, 1fr); } }

    /* ── Product card ── */
    .info-product-card {
        display: flex;
        flex-direction: column;
        background: #fff;
        border: 1px solid #e5e5e5;
        overflow: hidden;
        text-decoration: none;
        color: inherit;
        transition: border-color 0.3s, box-shadow 0.3s;
    }
    .dark .info-product-card { background: #111; border-color: #333; }
    .info-product-card:hover { border-color: #000; box-shadow: 0 4px 16px rgba(0,0,0,0.1); }
    .dark .info-product-card:hover { border-color: #fff; box-shadow: none; }

    /* image swap on hover */
    .info-card__img {
        position: relative;
        width: 100%;
        aspect-ratio: 4 / 3;
        overflow: hidden;
        background: #f5f5f5;
    }
    .dark .info-card__img { background: #1a1a1a; }
    .info-card__img img {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        object-fit: contain;
        transition: opacity 0.4s ease;
    }
    .info-card__img .img-primary { opacity: 1; z-index: 1; }
    .info-card__img .img-hover   { opacity: 0; z-index: 2; }
    .info-product-card:hover .img-primary { opacity: 0; }
    .info-product-card:hover .img-hover   { opacity: 1; }

    /* body */
    .info-card__body {
        padding: 20px;
        display: flex;
        flex-direction: column;
        flex: 1;
        border-top: 1px solid #f0f0f0;
    }
    .dark .info-card__body { border-color: #333; }
    .info-card__name {
        font-size: 15px;
        font-weight: 700;
        color: #000;
        margin-bottom: auto;
        padding-bottom: 16px;
    }
    .dark .info-card__name { color: #fff; }
    .info-card__cta {
        display: flex;
        align-items: center;
        gap: 6px;
        font-size: 12.5px;
        font-weight: 700;
        letter-spacing: 1px;
        text-transform: uppercase;
        color: #000;
        border-top: 1px solid #f0f0f0;
        padding-top: 16px;
        transition: color 0.3s;
    }
    .dark .info-card__cta { color: #fff; border-color: #333; }
    .info-product-card:hover .info-card__cta { color: #555; }
    .dark .info-product-card:hover .info-card__cta { color: #ccc; }
    .info-card__cta svg {
        width: 15px;
        height: 15px;
        transition: transform 0.3s;
    }
    /* ─── ANIMATED VISUAL (WINDOW & DOOR) ─── */
    .anim-composite {
        display: flex;
        gap: 3rem;
        align-items: flex-end;
        justify-content: center;
        background: transparent;
        transform: scale(1.15);
    }

    .anim-window {
        position: relative;
        width: 140px;
        height: 200px;
        perspective: 1200px;
        transform-style: preserve-3d;
    }

    .anim-door {
        position: relative;
        width: 140px;
        height: 320px;
        perspective: 1200px;
        transform-style: preserve-3d;
    }

    .anim-frame {
        position: absolute;
        inset: 0;
        border: 4px solid rgba(255,255,255,0.65);
        border-radius: 6px;
        background: linear-gradient(135deg, rgba(20,20,20,0.6) 0%, rgba(40,40,40,0.2) 100%);
        box-shadow: inset 0 5px 15px rgba(0,0,0,0.8), 0 10px 30px rgba(0,0,0,0.5);
    }

    .anim-mullion-h {
        position: absolute;
        left: 0; right: 0; top: 40%;
        height: 6px;
        background: rgba(255,255,255,0.65);
        transform: translateY(-50%);
        z-index: 2;
        box-shadow: 0 4px 10px rgba(0,0,0,0.5);
    }

    .anim-top-glass {
        position: absolute;
        top: 6px; left: 6px; right: 6px; bottom: 60%;
        background: linear-gradient(135deg, rgba(255,255,255,0.15) 0%, rgba(255,255,255,0.02) 100%);
        border: 1px solid rgba(255,255,255,0.2);
        border-radius: 2px;
        overflow: hidden;
    }

    .anim-sash {
        position: absolute;
        top: 40%; bottom: 6px;
        width: calc(50% - 6px);
        border: 3px solid rgba(255,255,255,0.65);
        background: linear-gradient(135deg, rgba(255,255,255,0.12) 0%, rgba(255,255,255,0.01) 100%);
        overflow: hidden;
        z-index: 1;
        border-radius: 2px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.4);
    }

    /* Door overrides */
    .anim-door .anim-sash {
        top: 6px; bottom: 6px;
        width: calc(100% - 12px);
        left: 6px;
        transform-origin: left;
        animation: openLeft 6s infinite alternate cubic-bezier(0.5, 0, 0.2, 1);
        animation-delay: 2s;
    }
    
    .door-handle {
        position: absolute;
        right: 12px;
        top: 50%;
        width: 6px;
        height: 48px;
        background: linear-gradient(to bottom, #999, #fff, #999);
        border-radius: 3px;
        transform: translateY(-50%);
        box-shadow: 2px 2px 5px rgba(0,0,0,0.5);
    }
    
    .door-mail-slot {
        position: absolute;
        left: 50%;
        bottom: 50px;
        width: 50px;
        height: 8px;
        background: rgba(255,255,255,0.7);
        border-radius: 4px;
        transform: translateX(-50%);
        box-shadow: inset 0 2px 4px rgba(0,0,0,0.8);
    }

    .anim-sash-left {
        left: 6px;
        transform-origin: left;
        animation: openLeft 6s infinite alternate cubic-bezier(0.5, 0, 0.2, 1);
    }

    .anim-sash-right {
        right: 6px;
        transform-origin: right;
        animation: openRight 6s infinite alternate cubic-bezier(0.5, 0, 0.2, 1);
        animation-delay: 0.5s;
    }

    @keyframes openLeft {
        0%, 20% { transform: rotateY(0deg); }
        80%, 100% { transform: rotateY(-35deg); }
    }

    @keyframes openRight {
        0%, 20% { transform: rotateY(0deg); }
        80%, 100% { transform: rotateY(35deg); }
    }

    /* Glass reflection */
    .glass-reflection {
        position: absolute;
        top: -100%; left: -100%;
        width: 300%; height: 300%;
        background: linear-gradient(135deg, 
            rgba(255,255,255,0) 0%, 
            rgba(255,255,255,0) 35%, 
            rgba(255,255,255,0.2) 45%, 
            rgba(255,255,255,0.4) 50%, 
            rgba(255,255,255,0.1) 55%, 
            rgba(255,255,255,0) 65%, 
            rgba(255,255,255,0) 100%);
        animation: shine 4s infinite linear;
    }

    .anim-top-glass .glass-reflection {
        animation-delay: 2s;
    }

    @keyframes shine {
        0% { transform: translateY(-50%); }
        100% { transform: translateY(100%); }
    }
</style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>


<section class="info-hero" aria-label="Information Hero">
    <div class="info-hero__bg">
        <div style="width:100%;height:100%;display:flex;align-items:center;justify-content:center;">
            <div class="anim-composite">
                <!-- Animated Window -->
                <div class="anim-window">
                    <div class="anim-frame"></div>
                    <div class="anim-mullion-h"></div>
                    <div class="anim-top-glass">
                        <div class="glass-reflection"></div>
                    </div>
                    <div class="anim-sash anim-sash-left">
                        <div class="glass-reflection"></div>
                    </div>
                    <div class="anim-sash anim-sash-right">
                        <div class="glass-reflection"></div>
                    </div>
                </div>
                
                <!-- Animated Door -->
                <div class="anim-door">
                    <div class="anim-frame"></div>
                    <div class="anim-sash">
                        <div class="door-handle"></div>
                        <div class="door-mail-slot"></div>
                        <div class="glass-reflection"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="info-hero-overlay"></div>
    <div class="info-hero__content">
        <h1 class="info-hero__title">Window & Door Info</h1>
        <p class="info-hero__sub">Browse our full range of premium uPVC windows and doors. Click any product to explore options, learn more and get an instant price.</p>
    </div>
</section>


<?php
    $infoProducts = [
        [
            'name' => 'Standard Windows',
            'slug' => 'standard-casement',
            'type' => 'windows',
            'img1' => '4.1.jpg',
            'img2' => '4.2.jpg',
        ],
        [
            'name' => 'French Windows',
            'slug' => 'french-windows',
            'type' => 'windows',
            'img1' => '3.1.jpg',
            'img2' => '3.2.jpg',
        ],
        [
            'name' => 'Tilt & Turn Windows',
            'slug' => 'tilt-and-turn-windows',
            'type' => 'windows',
            'img1' => '2.1.jpg',
            'img2' => '2.2.jpg',
        ],
        [
            'name' => 'Flush Windows',
            'slug' => 'flush-windows',
            'type' => 'windows',
            'img1' => '5.1.jpg',
            'img2' => '5.2.jpg',
        ],
        [
            'name' => 'Sash Windows',
            'slug' => 'sash-windows',
            'type' => 'windows',
            'img1' => '6.1.jpg',
            'img2' => '6.2.jpg',
        ],
        [
            'name' => 'PVC Doors',
            'slug' => 'pvc-doors',
            'type' => 'doors',
            'img1' => 'door1.1.jpg',
            'img2' => 'door1.2.jpg',
        ],
        [
            'name' => 'Flush Doors',
            'slug' => 'flush-doors',
            'type' => 'doors',
            'img1' => 'door2.1.jpg',
            'img2' => 'door2.2.jpg',
        ],
        [
            'name' => 'French Doors',
            'slug' => 'french-doors',
            'type' => 'doors',
            'img1' => 'door3.1.jpg',
            'img2' => 'door3.2.jpg',
        ],
    ];
?>

<section class="info-section bg-white dark:bg-black text-black dark:text-white">
    <div class="info-gc">

        <div class="info-section-header">
            <span class="wi-section__eyebrow">Our Products</span>
            <h2>Windows & Doors</h2>
            <p>Browse our range of premium uPVC windows and doors. Click a product to find out more.</p>
        </div>

        <div class="info-products-grid">
            <?php $__currentLoopData = $infoProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="/<?php echo e($product['type']); ?>/information"
                   class="info-product-card"
                   aria-label="<?php echo e($product['name']); ?>">

                    
                    <div class="info-card__img">
                        <img class="img-primary"
                             src="<?php echo e(asset('assets/products/' . $product['img1'])); ?>"
                             alt="<?php echo e($product['name']); ?>"
                             loading="lazy">
                        <img class="img-hover"
                             src="<?php echo e(asset('assets/products/' . $product['img2'])); ?>"
                             alt="<?php echo e($product['name']); ?> — alternate view"
                             loading="lazy">
                    </div>

                    
                    <div class="info-card__body">
                        <span class="info-card__name"><?php echo e($product['name']); ?></span>
                        <span class="info-card__cta">
                            Find Out More
                            <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"/>
                            </svg>
                        </span>
                    </div>

                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\internship\windows site\windows-laravel\resources\views/pages/information.blade.php ENDPATH**/ ?>