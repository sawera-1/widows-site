<?php $__env->startSection('title', 'Payment & Delivery — Modern UPVC Windows'); ?>

<?php $__env->startPush('styles'); ?>
<style>
    /* Global Section Styles */
    .pd-section {
        padding: clamp(60px, 8vw, 100px) 20px;
    }
    .pd-container {
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

    /* 2. Secure Payment Section — 3-column layout */
    .payment-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 36px;
        align-items: start;
    }
    @media(min-width: 768px) {
        .payment-grid { grid-template-columns: 1fr 1fr; gap: 40px; }
    }
    @media(min-width: 1100px) {
        .payment-grid { grid-template-columns: 28fr 36fr 36fr; gap: 44px; }
    }

    /* Left column */
    .payment-info .eyebrow {
        display: block;
        font-size: 11.5px;
        text-transform: uppercase;
        letter-spacing: 1.8px;
        font-weight: 600;
        color: #888;
        margin-bottom: 14px;
    }
    .dark .payment-info .eyebrow { color: #777; }
    .payment-info h2 {
        font-size: clamp(1.9rem, 3vw, 44px);
        font-weight: 700;
        margin-bottom: 28px;
        line-height: 1.18;
    }
    .payment-col-text {
        font-size: 16.5px;
        line-height: 1.7;
        color: #333;
        margin-bottom: 0;
    }
    .dark .payment-col-text { color: #aaa; }

    /* Right column text */
    .payment-right-col p {
        font-size: 16.5px;
        line-height: 1.7;
        color: #333;
        margin-bottom: 22px;
    }
    .dark .payment-right-col p { color: #aaa; }
    .payment-right-col p:last-of-type {
        margin-bottom: 0;
    }
    .final-statement {
        font-size: 17px;
        font-weight: 700;
        color: #000;
        margin-top: 28px;
        margin-bottom: 0;
        display: block;
    }
    .dark .final-statement { color: #fff; }

    /* Payment Cards */
    .payment-cards-container {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 13px;
    }
    .payment-card {
        background: #000;
        border: 1px solid #2a2a2a;
        border-radius: 5px;
        height: 110px;
        padding: 0 12px;
        text-align: center;
        transition: border-color 0.25s, background 0.25s;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 9px;
        color: #fff;
    }
    .payment-card:last-child {
        grid-column: 1 / -1;
        width: 100%;
    }
    .dark .payment-card {
        background: #111;
        border-color: #3a3a3a;
        color: #fff;
    }
    .payment-card:hover {
        border-color: #555;
        background: #111;
    }
    .dark .payment-card:hover {
        border-color: #666;
        background: #1a1a1a;
    }
    .payment-card svg {
        width: 26px;
        height: 26px;
        color: inherit;
        flex-shrink: 0;
    }
    .payment-card span {
        font-weight: 600;
        font-size: 15.5px;
        line-height: 1.2;
    }

    /* Tablet: cards go full-width in 2nd cell of 2-col grid */
    @media(min-width: 768px) and (max-width: 1099px) {
        .payment-grid .payment-right-col {
            grid-column: 1 / -1;
        }
    }

    /* 3. Delivery Intro */
    .delivery-intro {
        text-align: center;
        max-width: 800px;
        margin: 0 auto 60px auto;
    }
    .delivery-intro h2 {
        font-size: clamp(2rem, 4vw, 3rem);
        font-weight: 700;
        margin-bottom: 8px;
    }
    .delivery-intro h3 {
        font-size: 1.3rem;
        color: var(--mono-grey);
        margin-bottom: 24px;
        font-weight: 500;
    }
    .delivery-intro p {
        font-size: 1.1rem;
        line-height: 1.7;
        color: var(--mono-grey);
        margin-bottom: 16px;
    }
    .dark .delivery-intro h3, .dark .delivery-intro p { color: #aaa; }

    /* 4. Delivery Layout */
    .delivery-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 40px;
        align-items: start;
    }
    @media(min-width: 1024px) {
        .delivery-grid { grid-template-columns: 1fr 1fr; gap: 60px; }
    }
    
    /* Table */
    .lead-time-table-wrapper {
        width: 100%;
        overflow-x: auto;
        border: 1px solid #e5e7eb;
        background: #fff;
    }
    .dark .lead-time-table-wrapper { border-color: #333; background: #111; }
    .lead-time-table {
        width: 100%;
        border-collapse: collapse;
        text-align: left;
    }
    .lead-time-table th, .lead-time-table td {
        padding: 16px;
        border-bottom: 1px solid #e5e7eb;
    }
    .dark .lead-time-table th, .dark .lead-time-table td {
        border-bottom-color: #333;
    }
    .lead-time-table th {
        background: #f9fafb;
        font-weight: 700;
        color: #000;
    }
    .dark .lead-time-table th {
        background: #000;
        color: #fff;
    }
    .lead-time-table td {
        color: #333;
    }
    .dark .lead-time-table td {
        color: #ccc;
    }
    .table-note {
        font-size: 0.9rem;
        color: var(--mono-grey);
        margin-top: 16px;
        font-style: italic;
    }

    /* Delivery Map/Image */
    .delivery-map-container {
        display: flex;
        flex-direction: column;
        gap: 24px;
    }
    .delivery-image {
        width: 100%;
        height: auto;
        object-fit: contain;
        border: 1px solid #e5e7eb;
    }
    .dark .delivery-image { border-color: #333; }
    
    .delivery-map-info h3 {
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 12px;
    }
    .delivery-map-info p {
        font-size: 1.1rem;
        color: var(--mono-grey);
        margin-bottom: 24px;
        line-height: 1.6;
    }
    .dark .delivery-map-info p { color: #aaa; }

    .btn-solid-black {
        display: inline-flex;
        align-items: center;
        justify-content: center;
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

    /* 5. Important Info */
    .info-section {
        background: #f9fafb;
    }
    .dark .info-section { background: #000; border-top: 1px solid #333; border-bottom: 1px solid #333;}
    .info-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 24px;
        margin-top: 40px;
    }
    @media(min-width: 768px) {
        .info-grid { grid-template-columns: 1fr 1fr; }
    }
    @media(min-width: 1024px) {
        .info-grid { grid-template-columns: 1fr 1fr 1fr; }
    }
    .info-card {
        background: #000;
        padding: 32px;
        border: 1px solid #333;
        border-radius: 0;
    }
    .dark .info-card { background: #111; border-color: #444; }
    .info-icon {
        width: 36px;
        height: 36px;
        margin-bottom: 20px;
        color: #fff;
    }
    .dark .info-icon { color: #fff; }
    .info-card p {
        font-size: 1.05rem;
        line-height: 1.6;
        color: #fff;
    }
    .dark .info-card p { color: #eee; }

    /* 6. Collection Box */
    .collection-box {
        text-align: center;
        max-width: 600px;
        margin: 0 auto;
        padding: 40px 20px;
    }
    .collection-box h2 {
        font-size: 2rem;
        font-weight: 700;
        margin-bottom: 16px;
    }
    .collection-box p {
        font-size: 1.1rem;
        color: var(--mono-grey);
        margin-bottom: 24px;
        line-height: 1.6;
    }
    .dark .collection-box p { color: #aaa; }

    /* 7. Final CTA */
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
    <img src="<?php echo e(asset('assets/about/p3.png')); ?>" alt="Payment and Delivery" class="hero-bg">
    <div class="hero-content">
        <h1 class="hero-title">Payment & Delivery</h1>
        <p class="hero-subtitle">Secure payment, reliable delivery and convenient collection for your windows and doors.</p>
    </div>
</section>


<section class="pd-section bg-white dark:bg-black text-black dark:text-white">
    <div class="pd-container payment-grid">

        
        <div class="payment-info">
            <span class="wi-section__eyebrow">Payment</span>
            <h2>Secure Payment Information</h2>
            <p class="payment-col-text">We accept most credit and debit cards including American Express. A unique benefit of our online payment system is that we receive payment without ever seeing your financial details. All financial details are processed securely through Worldpay and PayPal.</p>
        </div>

        
        <div class="payment-cards-container">
            <div class="payment-card">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path></svg>
                <span>Worldpay</span>
            </div>
            <div class="payment-card">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                <span>PayPal</span>
            </div>
            <div class="payment-card">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path></svg>
                <span>Credit / Debit Cards</span>
            </div>
            <div class="payment-card">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                <span>American Express</span>
            </div>
            <div class="payment-card">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"></path></svg>
                <span>Bank Transfer</span>
            </div>
        </div>

        
        <div class="payment-right-col">
            <p>If you have any difficulties paying with your credit/debit card, please contact us to arrange payment via bank transfer. As long as you have checked out and entered your delivery details, we will have your complete order information.</p>
            <p>To safeguard you against identity theft and fraud, we may request additional information if this is your first order. We can refund the 20% VAT for Channel Islands, EU and international deliveries after receiving proof of export, where applicable.</p>
            <span class="final-statement">Goods will only be dispatched once payment has cleared.</span>
        </div>

    </div>
</section>


<section class="pd-section bg-white dark:bg-black text-black dark:text-white" style="padding-top: 0;">
    <div class="pd-container">
        <div class="delivery-intro">
            <span class="wi-section__eyebrow">Logistics</span>
            <h2>Delivery & Collection</h2>
            <h3>Lead Times — Updated Weekly</h3>
            <p>We take a lot of pride in the quality of our windows and doors and want them to arrive with you in great condition. Therefore, in most cases we use our own vehicles and drivers to help ensure your order is delivered safely and reliably.</p>
        </div>
        
        
        <div class="delivery-grid">
            
            
            <div class="delivery-table-container">
                <h3 style="font-size: 1.5rem; font-weight: 700; margin-bottom: 20px;">Lead Times</h3>
                <div class="lead-time-table-wrapper">
                    <table class="lead-time-table">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Deliveries</th>
                                <th>Collections</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>UPVC windows / doors</td>
                                <td>1–3 weeks</td>
                                <td>1–2 weeks</td>
                            </tr>
                            <tr>
                                <td>Sash windows</td>
                                <td>2–4 weeks</td>
                                <td>—</td>
                            </tr>
                            <tr>
                                <td>Composite doors</td>
                                <td>2–4 weeks</td>
                                <td>—</td>
                            </tr>
                            <tr>
                                <td>Bi-fold doors</td>
                                <td>2–4 weeks</td>
                                <td>—</td>
                            </tr>
                            <tr>
                                <td>Roof lanterns</td>
                                <td>2–4 weeks</td>
                                <td>—</td>
                            </tr>
                            <tr>
                                <td>Survey & installation</td>
                                <td>6 weeks</td>
                                <td>—</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p class="table-note">Lead times are updated weekly and may vary depending on product, availability and survey/installation requirements. Do not promise an exact delivery date based solely on the table.</p>
            </div>

            
            <div class="delivery-map-container">
                <img src="<?php echo e(asset('assets/about/p2.png')); ?>" alt="Delivery Areas Map" class="delivery-image">
                <div class="delivery-map-info">
                    <h3>Delivery & Installation Areas</h3>
                    <p>Delivery charges are calculated based on distance, and availability varies by location. Additional charges may apply depending on the delivery area and service availability, with final costs confirmed before delivery.
</p>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="pd-section info-section text-black dark:text-white">
    <div class="pd-container">
        <span class="wi-section__eyebrow" style="text-align: center; margin-bottom: 16px;">Guidelines</span>
        <h2 style="font-size: clamp(2rem, 4vw, 2.5rem); font-weight: 700; text-align: center;">Important Delivery Information</h2>
        
        <div class="info-grid">
            <div class="info-card">
                <svg class="info-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <p>Delivery times are 7am to 8pm. A time slot may be given the previous working day by text and email, including a link to track your delivery.</p>
            </div>
            
            <div class="info-card">
                <svg class="info-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                <p>Please be present when your order is delivered. Your signature and assistance are required.</p>
            </div>
            
            <div class="info-card">
                <svg class="info-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                <p>Everything is manufactured to order. Please check your products thoroughly before installation, as we cannot be held liable for installation fees under any circumstances.</p>
            </div>
            
            <div class="info-card">
                <svg class="info-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                <p>Our products are manufactured at our purpose-built factory in Hinckley, Leicestershire, except for composite timber, stable, double and fire doors, skylights and lanterns, bi-fold and sash products.</p>
            </div>
            
            <div class="info-card">
                <svg class="info-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                <p>Delivery charges are calculated based on distance.</p>
            </div>
            
            <div class="info-card">
                <svg class="info-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                <p>If you are outside our delivery areas, you may be able to collect from us or arrange your own onward shipping.</p>
            </div>
        </div>
    </div>
</section>




<section class="cta-section">
    <div class="cta-container">
        <div class="cta-grid">
            <div class="cta-content">
                <span class="wi-section__eyebrow" style="color: rgba(255,255,255,.6);">Next Steps</span>
                <h2>Ready to Order Your Windows or Doors?</h2>
                <p>Choose your product, configure your requirements and get an instant price online.</p>
                <div class="cta-actions">
                    <a href="/" class="btn-solid-white">Design & Price</a>
                    <a href="<?php echo e(route('contact')); ?>" class="btn-outline-white">Contact Us</a>
                </div>
            </div>
            <div class="cta-image-wrapper">
                <img src="<?php echo e(asset('assets/about/p1.png')); ?>" alt="Contact Us Banner" class="cta-image">
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\internship\windows site\windows-laravel\resources\views/pages/paymentAnddelivery.blade.php ENDPATH**/ ?>