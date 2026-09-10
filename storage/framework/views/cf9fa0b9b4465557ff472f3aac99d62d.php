<?php $__env->startSection('title', 'About Us — Modern UPVC Windows'); ?>

<?php $__env->startPush('styles'); ?>
<style>
    /* Global Section Styles */
    .about-section {
        padding: clamp(60px, 8vw, 100px) 20px;
    }
    .about-container {
        width: 100%;
        max-width: 1280px;
        margin: 0 auto;
    }
    
    /* 1. Hero Section */
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

    /* 2. About BCW */
    .about-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 40px;
        align-items: stretch;
    }
    @media(min-width: 900px) {
        .about-grid { grid-template-columns: 1fr 1fr; gap: 80px; }
    }
    .about-text h2 {
        font-size: clamp(2rem, 4vw, 3rem);
        font-weight: 700;
        margin-bottom: 24px;
    }
    .about-text p {
        font-size: 1.1rem;
        line-height: 1.7;
        color: var(--mono-grey);
        margin-bottom: 20px;
    }
    .dark .about-text p { color: #a3a3a3; }
    .logo-container {
        display: flex;
        align-items: stretch;
        justify-content: center;
    }
    .logo-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* 3. Our Story */
    .story-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 40px;
        align-items: center;
    }
    @media(min-width: 900px) {
        /* Reverse order on desktop */
        .story-grid { grid-template-columns: 1fr 1fr; gap: 80px; }
        .story-content { order: 2; }
        .story-image { order: 1; }
    }
    .story-images-wrapper {
        position: relative;
        width: 100%;
        padding-bottom: 10%;
        padding-right: 15%;
    }
    .story-img-main {
        width: 100%;
        height: auto;
        display: block;
        object-fit: cover;
    }
    .story-img-secondary {
        position: absolute;
        bottom: 0;
        right: 0;
        width: 55%;
        height: auto;
        object-fit: cover;
        border: 10px solid #fff;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }
    .dark .story-img-secondary { border-color: #000; }

    /* 4. How Online Quote Works */
    .quote-bg {
        background: #f9fafb;
    }
    .dark .quote-bg { background: #0a0a0a; border-top: 1px solid #333; border-bottom: 1px solid #333; }
    
    .quote-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 60px;
    }
    @media(min-width: 900px) {
        .quote-grid { grid-template-columns: 5fr 7fr; gap: 80px; }
    }
    
    .steps-container {
        display: flex;
        flex-direction: column;
        gap: 24px;
    }
    .step-item {
        display: flex;
        gap: 20px;
        background: #fff;
        border: 1px solid #e5e7eb;
        padding: 24px;
        transition: border-color 0.2s, box-shadow 0.2s;
    }
    .dark .step-item { background: #111; border-color: #333; }
    .step-item:hover {
        border-color: #000;
        box-shadow: 0 4px 12px rgba(0,0,0,0.05);
    }
    .dark .step-item:hover { border-color: #fff; box-shadow: 0 4px 12px rgba(255,255,255,0.05); }
    
    .step-num {
        font-size: 1.5rem;
        font-weight: 800;
        color: #000;
        font-variant-numeric: tabular-nums;
        line-height: 1;
    }
    .dark .step-num { color: #fff; }
    .step-content h3 {
        font-size: 1.1rem;
        font-weight: 700;
        margin-bottom: 8px;
    }
    .step-content p {
        font-size: 0.95rem;
        color: var(--mono-grey);
        line-height: 1.5;
    }
    
    /* 5. Showroom Section */
    .showroom-section {
        text-align: center;
        max-width: 800px;
        margin: 0 auto;
    }
    .showroom-section h2 {
        font-size: clamp(2rem, 4vw, 3rem);
        font-weight: 700;
        margin-bottom: 24px;
    }
    .showroom-section p {
        font-size: 1.1rem;
        line-height: 1.7;
        color: var(--mono-grey);
        margin-bottom: 32px;
    }
    .btn-outline {
        display: inline-block;
        padding: 16px 32px;
        border: 2px solid #000;
        background: transparent;
        color: #000;
        font-weight: 600;
        text-decoration: none;
        transition: background 0.2s, color 0.2s;
    }
    .dark .btn-outline { border-color: #fff; color: #fff; }
    .btn-outline:hover { background: #000; color: #fff; }
    .dark .btn-outline:hover { background: #fff; color: #000; }

    /* 5. Final CTA */
    .cta-section {
        padding: clamp(40px, 6vw, 80px) 20px;
        background: #f9fafb;
    }
    .dark .cta-section { background: #000; }
    
    .cta-container {
        width: 100%;
        max-width: 1280px;
        margin: 0 auto;
        background: #fff;
        border: 1px solid #e5e7eb;
    }
    .dark .cta-container { background: #111; border-color: #333; }

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
        color: #000;
    }
    .dark .cta-content { color: #fff; }
    .cta-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .cta-content h2 {
        font-size: clamp(1.8rem, 4vw, 2.5rem);
        font-weight: 700;
        margin-bottom: 16px;
    }
    .cta-content p {
        font-size: 1.1rem;
        line-height: 1.6;
        color: var(--mono-grey);
        margin-bottom: 24px;
    }
    .dark .cta-content p { color: #ccc; }
    .cta-actions {
        display: flex;
        gap: 16px;
        flex-wrap: wrap;
    }
    .btn-solid-black {
        display: inline-block;
        padding: 16px 32px;
        background: #000;
        color: #fff;
        font-weight: 600;
        text-decoration: none;
        transition: background 0.2s;
    }
    .btn-solid-black:hover { background: #333; }
    .dark .btn-solid-black { background: #fff; color: #000; }
    .dark .btn-solid-black:hover { background: #ccc; }
</style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>


<section class="hero-section">
    <!-- Using a product image as a fallback background until specific assets are provided -->
    <img src="<?php echo e(asset('assets/products/1.1.jpg')); ?>" alt="UPVC Windows Background" class="hero-bg">
    <div class="hero-content">
        <h1 class="hero-title">About Modern UPVC Windows</h1>
        <p class="hero-subtitle">Quality windows and doors, backed by over 30 years of manufacturing experience.</p>
    </div>
</section>


<section class="about-section bg-white dark:bg-black text-black dark:text-white">
    <div class="about-container about-grid">
        <div class="about-text">
            <h2>About Modern UPVC Windows</h2>
            <p>Modern UPVC Windows is the online division of Burbage Custom Windows Ltd, a trusted and established window and door manufacturer based in Leicestershire for over 30 years.</p>
            <p>With a wealth of experience, we've proudly served thousands of satisfied customers across the UK with top-quality windows, doors and roof products. Our commitment to excellence has made us a leading supplier in the region.</p>
        
        </div>
        <div class="logo-container">
            <img src="<?php echo e(asset('assets/about/window1.png')); ?>" alt="About BCW">
        </div>
    </div>
</section>


<section class="about-section bg-white dark:bg-black text-black dark:text-white pt-0">
    <div class="about-container story-grid">
        <div class="about-text story-content">
            <h2>Our Story &amp; Experience</h2>
            <p>At the heart of our business is a purpose-built, state-of-the-art factory equipped with advanced machinery and innovative production techniques, ensuring that every product meets the highest standards.</p>
            <p>From initial design to final assembly, our dedicated team of skilled professionals oversees every step of the process. We rigorously test all our materials to guarantee long-lasting performance and security for your home.</p>
            <p>We also operate our own fleet of transport vehicles, ensuring your order is handled with care and delivered promptly.</p>
        </div>
        <div class="story-images-wrapper">
            <img src="<?php echo e(asset('assets/about/window2.png')); ?>" alt="Our Experience 1" class="story-img-main">
            <img src="<?php echo e(asset('assets/about/window3.png')); ?>" alt="Our Experience 2" class="story-img-secondary">
        </div>
    </div>
</section>


<section class="about-section quote-bg text-black dark:text-white">
    <div class="about-container">
        <div class="quote-grid">
            
            <div class="quote-info">
                <h2 style="font-size: clamp(2rem, 4vw, 3rem); font-weight: 700; margin-bottom: 24px;">How Our Online Quote Works</h2>
                <p style="font-size: 1.1rem; line-height: 1.7; color: var(--mono-grey); margin-bottom: 20px;" class="dark:text-gray-400">Our website is designed to make getting a quote fast and hassle-free. Just enter your specifications to receive an instant price.</p>
                
                <!-- Using window 4 for laptop/quote image -->
                <img src="<?php echo e(asset('assets/about/window4.png')); ?>" alt="Online Quoting System" style="width: 100%; border: 1px solid #e5e7eb;" class="dark:border-zinc-800">
            </div>

            <div class="steps-container">
                <div class="step-item">
                    <div class="step-num">01</div>
                    <div class="step-content">
                        <h3>Choose Your Product</h3>
                        <p>Select the window or door you need.</p>
                    </div>
                </div>
                
                <div class="step-item">
                    <div class="step-num">02</div>
                    <div class="step-content">
                        <h3>Enter Your Size</h3>
                        <p>Enter your required dimensions.</p>
                    </div>
                </div>

                <div class="step-item">
                    <div class="step-num">03</div>
                    <div class="step-content">
                        <h3>Configure Your Product</h3>
                        <p>Select the available design, colours, glass, handles and other options.</p>
                    </div>
                </div>

                <div class="step-item">
                    <div class="step-num">04</div>
                    <div class="step-content">
                        <h3>Get Your Instant Price</h3>
                        <p>See your price based on your selections.</p>
                    </div>
                </div>

                <div class="step-item">
                    <div class="step-num">05</div>
                    <div class="step-content">
                        <h3>Order Online</h3>
                        <p>Complete your order for delivery or collection.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>




<section class="cta-section">
    <div class="cta-container">
        <div class="cta-grid">
            <img src="<?php echo e(asset('assets/about/window5.png')); ?>" alt="Contact Us Banner" class="cta-image">
            <div class="cta-content">
                <h2>Ready to Design Your Windows or Doors?</h2>
                <p>Configure your product online and get an instant price, or reach out to our team for custom requests and expert advice.</p>
                <div class="cta-actions">
                    <a href="<?php echo e(route('contact')); ?>" class="btn-solid-black">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\internship\windows site\windows-laravel\resources\views/pages/about.blade.php ENDPATH**/ ?>