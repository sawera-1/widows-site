<?php $__env->startSection('title', 'Frequently Asked Questions — Modern UPVC Windows'); ?>

<?php $__env->startPush('styles'); ?>
<style>
    /* Global Section Styles */
    .faq-section {
        padding: clamp(60px, 8vw, 100px) 20px;
    }
    .faq-container {
        width: 100%;
        max-width: 1280px;
        margin: 0 auto;
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

    /* 1. Hero Banner */
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

    /* 2. FAQ Accordion Layout */
    .faq-content-area {
        background: #fff;
        color: #000;
    }
    .dark .faq-content-area {
        background: #000;
        color: #fff;
    }
    
    .faq-category {
        margin-bottom: 60px;
    }
    .faq-category h2 {
        font-size: clamp(1.8rem, 3vw, 2.5rem);
        font-weight: 700;
        margin-bottom: 32px;
        border-bottom: 2px solid #000;
        padding-bottom: 16px;
    }
    .dark .faq-category h2 {
        border-bottom-color: #333;
    }

    .faq-item {
        border: 1px solid #e5e7eb;
        margin-bottom: 16px;
        background: #fff;
        transition: border-color 0.3s, background-color 0.3s;
    }
    .dark .faq-item {
        border-color: #333;
        background: #111;
    }
    
    /* Open State */
    .faq-item.is-open {
        border-color: #000;
    }
    .dark .faq-item.is-open {
        border-color: #666;
    }

    .faq-question {
        width: 100%;
        text-align: left;
        padding: 24px;
        background: none;
        border: none;
        cursor: pointer;
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 1.1rem;
        font-weight: 600;
        color: inherit;
    }
    .faq-question:hover {
        background: #f9fafb;
    }
    .dark .faq-question:hover {
        background: #1a1a1a;
    }
    
    .faq-icon {
        width: 24px;
        height: 24px;
        flex-shrink: 0;
        margin-left: 16px;
        transition: transform 0.3s;
    }

    .faq-answer-wrapper {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.4s ease-in-out;
    }
    .faq-answer-inner {
        padding: 0 24px 24px 24px;
        color: var(--mono-grey);
        line-height: 1.7;
        font-size: 1rem;
    }
    .dark .faq-answer-inner {
        color: #ccc;
    }

    /* 3. Final CTA */
    .cta-section {
        padding: clamp(40px, 6vw, 80px) 20px;
        background: #f9fafb;
    }
    .dark .cta-section { background: #000; }
    
    .cta-container {
        width: 100%;
        max-width: 1280px;
        margin: 0 auto;
        background: #111;
        border: 1px solid #333;
    }
    
    .cta-grid {
        display: grid;
        grid-template-columns: 1fr;
        align-items: stretch;
    }
    @media(min-width: 900px) {
        .cta-grid { grid-template-columns: 1fr 1fr; }
    }
    
    .cta-content {
        padding: clamp(24px, 3vw, 40px) clamp(20px, 3vw, 40px);
        text-align: left;
        display: flex;
        flex-direction: column;
        justify-content: center;
        color: #fff;
    }
    
    .cta-image-wrapper {
        display: flex;
        align-items: stretch;
        justify-content: center;
        width: 100%;
        height: 100%;
    }
    .cta-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    
    .cta-content h2 {
        font-size: clamp(2rem, 4vw, 2.5rem);
        font-weight: 700;
        margin-bottom: 16px;
    }
    .cta-content p {
        font-size: 1.1rem;
        line-height: 1.6;
        color: #aaa;
        margin-bottom: 32px;
    }
    
    .cta-actions {
        display: flex;
        gap: 16px;
        flex-wrap: wrap;
    }
    
    .btn-solid-white {
        display: inline-block;
        padding: 16px 32px;
        background: #fff;
        color: #000;
        font-weight: 600;
        text-decoration: none;
        transition: background 0.2s;
    }
    .btn-solid-white:hover { background: #e5e7eb; }

    .btn-outline-white {
        display: inline-block;
        padding: 16px 32px;
        background: transparent;
        border: 2px solid #fff;
        color: #fff;
        font-weight: 600;
        text-decoration: none;
        transition: background 0.2s, color 0.2s;
    }
    .btn-outline-white:hover {
        background: #fff;
        color: #000;
    }
</style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>


<section class="hero-section">
    <img src="<?php echo e(asset('assets/about/faqbanner.png')); ?>" alt="FAQ Background" class="hero-bg">
    <div class="hero-content">
        <h1 class="hero-title">Frequently Asked Questions</h1>
        <p class="hero-subtitle">Find answers to common questions about our windows, doors, ordering, delivery, installation and products.</p>
    </div>
</section>


<section class="faq-section faq-content-area">
    <div class="faq-container">
        
        <?php
            $faqData = config('site.faq', []);
            $isFirst = true;
        ?>

        <?php $__currentLoopData = $faqData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoryName => $questions): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="faq-category">
                <span class="wi-section__eyebrow">Questions</span>
                <h2><?php echo e($categoryName); ?></h2>
                
                <div class="faq-list">
                    <?php $__currentLoopData = $questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="faq-item <?php echo e($isFirst ? 'is-open' : ''); ?>">
                            <button class="faq-question" aria-expanded="<?php echo e($isFirst ? 'true' : 'false'); ?>">
                                <span><?php echo e($item['question']); ?></span>
                                <span class="faq-icon-wrapper">
                                    
                                    <svg class="faq-icon plus-icon" style="display: <?php echo e($isFirst ? 'none' : 'block'); ?>" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                                    
                                    <svg class="faq-icon minus-icon" style="display: <?php echo e($isFirst ? 'block' : 'none'); ?>" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path></svg>
                                </span>
                            </button>
                            <div class="faq-answer-wrapper" style="<?php echo e($isFirst ? 'max-height: 1000px;' : 'max-height: 0px;'); ?>">
                                <div class="faq-answer-inner">
                                    <?php echo e($item['answer']); ?>

                                </div>
                            </div>
                        </div>
                        <?php $isFirst = false; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
    </div>
</section>


<section class="cta-section">
    <div class="cta-container">
        <div class="cta-grid">
            <div class="cta-content">
                <span class="wi-section__eyebrow" style="color: rgba(255,255,255,.6);">Help & Support</span>
                <h2>Still Have a Question?</h2>
                <p>Our team is happy to help with your windows, doors, measurements, orders and installation.</p>
                <div class="cta-actions">
                    <a href="<?php echo e(route('contact')); ?>" class="btn-solid-white">Contact Us</a>
                    <a href="/" class="btn-outline-white">Design & Price</a>
                </div>
            </div>
            <div class="cta-image-wrapper">
                <img src="<?php echo e(asset('assets/about/faq1.png')); ?>" alt="Contact Us Banner" class="cta-image">
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const questions = document.querySelectorAll('.faq-question');

    questions.forEach(question => {
        question.addEventListener('click', function() {
            const currentItem = this.closest('.faq-item');
            const currentWrapper = currentItem.querySelector('.faq-answer-wrapper');
            const currentPlus = this.querySelector('.plus-icon');
            const currentMinus = this.querySelector('.minus-icon');
            
            const isOpen = currentItem.classList.contains('is-open');

            // Close all items
            document.querySelectorAll('.faq-item').forEach(item => {
                item.classList.remove('is-open');
                item.querySelector('.faq-answer-wrapper').style.maxHeight = '0px';
                item.querySelector('.faq-question').setAttribute('aria-expanded', 'false');
                item.querySelector('.plus-icon').style.display = 'block';
                item.querySelector('.minus-icon').style.display = 'none';
            });

            // If it wasn't open, open it
            if (!isOpen) {
                currentItem.classList.add('is-open');
                // Calculate actual height needed for smooth animation
                const inner = currentItem.querySelector('.faq-answer-inner');
                currentWrapper.style.maxHeight = inner.scrollHeight + "px";
                this.setAttribute('aria-expanded', 'true');
                currentPlus.style.display = 'none';
                currentMinus.style.display = 'block';
            }
        });
    });
    
    // Add resize listener to update max-height of currently open item if window resizes
    window.addEventListener('resize', function() {
        const openItem = document.querySelector('.faq-item.is-open');
        if (openItem) {
            const wrapper = openItem.querySelector('.faq-answer-wrapper');
            const inner = openItem.querySelector('.faq-answer-inner');
            wrapper.style.maxHeight = inner.scrollHeight + "px";
        }
    });
});
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\internship\windows site\windows-laravel\resources\views/pages/faq.blade.php ENDPATH**/ ?>