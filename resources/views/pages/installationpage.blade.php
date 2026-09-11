@extends('layouts.app')

@section('title', 'Installation — Modern UPVC Windows')

@push('styles')
<style>
    /* Global Section Styles */
    .inst-section {
        padding: clamp(60px, 8vw, 100px) 20px;
    }
    .inst-container {
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

    /* 2. Intro Section */
    .intro-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 40px;
        align-items: stretch;
    }
    @media(min-width: 900px) {
        .intro-grid { grid-template-columns: 1fr 1fr; gap: 80px; }
    }
    .intro-text h2 {
        font-size: clamp(2rem, 4vw, 3rem);
        font-weight: 700;
        margin-bottom: 24px;
    }
    .intro-text p {
        font-size: 1.1rem;
        line-height: 1.7;
        color: var(--mono-grey);
        margin-bottom: 20px;
    }
    .dark .intro-text p { color: #a3a3a3; }
    .intro-img-wrapper {
        display: flex;
        align-items: stretch;
        justify-content: center;
    }
    .intro-img-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* 3. Benefits */
    .benefits-bg { background: #f9fafb; }
    .dark .benefits-bg { background: #0a0a0a; border-top: 1px solid #333; border-bottom: 1px solid #333; }
    .benefits-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 32px;
        margin-top: 40px;
    }
    @media(min-width: 768px) {
        .benefits-grid { grid-template-columns: repeat(3, 1fr); }
    }
    .benefit-card {
        background: #fff;
        border: 1px solid #e5e7eb;
        padding: 40px 32px;
        text-align: left;
    }
    .dark .benefit-card { background: #111; border-color: #333; }
    .benefit-icon {
        width: 48px;
        height: 48px;
        margin-bottom: 24px;
        color: #000;
    }
    .dark .benefit-icon { color: #fff; }
    .benefit-card h3 {
        font-size: 1.25rem;
        font-weight: 700;
        margin-bottom: 12px;
    }
    .benefit-card p {
        color: var(--mono-grey);
        line-height: 1.6;
        font-size: 0.95rem;
    }
    .dark .benefit-card p { color: #ccc; }

    /* 4. Areas */
    .areas-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 40px;
        align-items: center;
    }
    @media(min-width: 900px) {
        .areas-grid { grid-template-columns: 1fr 1fr; gap: 80px; }
        .areas-content { order: 2; }
        .areas-image { order: 1; }
    }
    .areas-content h2 {
        font-size: clamp(2rem, 4vw, 3rem);
        font-weight: 700;
        margin-bottom: 24px;
    }
    .areas-list {
        list-style: none;
        padding: 0;
        margin: 0;
        margin-top: 24px;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 16px;
    }
    .areas-list li {
        display: flex;
        align-items: center;
        gap: 12px;
        font-size: 1.05rem;
        font-weight: 600;
    }
    .area-icon {
        width: 24px;
        height: 24px;
        color: #000;
        flex-shrink: 0;
    }
    .dark .area-icon { color: #fff; }

    /* 5. Process Loop */
    .process-bg { background: #000; color: #fff; }
    .dark .process-bg { background: #111; border-top: 1px solid #333; }
    .process-header { text-align: center; margin-bottom: 60px; }
    .process-header h2 { font-size: clamp(2rem, 4vw, 3rem); font-weight: 700; }
    .process-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 24px;
    }
    @media(min-width: 900px) {
        .process-grid { grid-template-columns: repeat(4, 1fr); }
    }
    .process-step {
        background: #111;
        padding: 32px;
        border: 1px solid #333;
    }
    .dark .process-step { background: #0a0a0a; border-color: #222; }
    .step-number {
        font-size: 3rem;
        font-weight: 800;
        color: #333;
        line-height: 1;
        margin-bottom: 20px;
    }
    .dark .step-number { color: #444; }
    .process-step h3 { font-size: 1.25rem; font-weight: 700; margin-bottom: 12px; }
    .process-step p { color: #aaa; font-size: 0.95rem; line-height: 1.6; }

    /* 6. Exclusions */
    .exc-box {
        background: #f9fafb;
        border: 1px solid #e5e7eb;
        border-left: 6px solid #000;
        padding: 40px;
        margin-top: 40px;
    }
    .dark .exc-box { background: #111; border-color: #333; border-left-color: #fff; }
    .exc-box h3 { font-size: 1.5rem; font-weight: 700; margin-bottom: 20px; }
    .exc-list {
        padding-left: 20px;
        color: var(--mono-grey);
        line-height: 1.7;
    }
    .dark .exc-list { color: #ccc; }
    .exc-list li { margin-bottom: 8px; }

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
@endpush

@section('content')

{{-- 1. HERO BANNER --}}
<section class="hero-section">
    <img src="{{ asset('assets/about/d4.png') }}" alt="Installation Background" class="hero-bg">
    <div class="hero-content">
        <h1 class="hero-title">Professional Installation Service</h1>
        <p class="hero-subtitle">Expert fitting for your new windows and doors, ensuring a perfect finish and long-lasting performance.</p>
    </div>
</section>

{{-- 2. INTRO --}}
<section class="inst-section bg-white dark:bg-black text-black dark:text-white">
    <div class="inst-container intro-grid">
        <div class="intro-text">
            <span class="wi-section__eyebrow">The Service</span>
            <h2>Hassle-Free Installation</h2>
            <p>Choosing the right windows and doors is only half the process; professional installation is crucial to ensure they perform exactly as they should. Our dedicated team of fully trained installers takes pride in delivering an exceptional fit and finish.</p>
            <p>From the moment we arrive at your property to the final sign-off, we treat your home with the utmost respect. We ensure that everything is fitted securely, sealed correctly, and left clean and tidy, giving you complete peace of mind for years to come.</p>
        </div>
        <div class="intro-img-wrapper">
            <img src="{{ asset('assets/about/d1.png') }}" alt="Window Installation">
        </div>
    </div>
</section>

{{-- 3. BENEFITS --}}
<section class="inst-section benefits-bg text-black dark:text-white">
    <div class="inst-container">
        <div style="text-align: center; max-width: 800px; margin: 0 auto;">
            <span class="wi-section__eyebrow" style="margin-bottom: 16px;">Our Guarantees</span>
            <h2 style="font-size: clamp(2rem, 4vw, 3rem); font-weight: 700; margin-bottom: 24px;">Why Choose Our Installers?</h2>
            <p style="font-size: 1.1rem; color: var(--mono-grey);" class="dark:text-gray-400">We don't cut corners. Our installation service is designed to be seamless, professional, and fully certified.</p>
        </div>
        
        <div class="benefits-grid">
            <div class="benefit-card">
                <svg class="benefit-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                <h3>FENSA Registered</h3>
                <p>All our installations comply with building regulations and come with a FENSA certificate, ensuring your new windows and doors meet the highest legal and safety standards.</p>
            </div>
            <div class="benefit-card">
                <svg class="benefit-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                <h3>10-Year Guarantee</h3>
                <p>We stand by the quality of our workmanship and products. That's why every installation is backed by a comprehensive 10-year insurance-backed guarantee.</p>
            </div>
            <div class="benefit-card">
                <svg class="benefit-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                <h3>Clean & Tidy</h3>
                <p>We respect your property. Dust sheets are used throughout the process, and we ensure your home is left as clean and tidy as we found it when the job is done.</p>
            </div>
        </div>
    </div>
</section>

{{-- 4. AREAS --}}
<section class="inst-section bg-white dark:bg-black text-black dark:text-white">
    <div class="inst-container areas-grid">
        <div class="areas-content">
            <span class="wi-section__eyebrow">Coverage</span>
            <h2>Where We Install</h2>
            <p style="font-size: 1.1rem; color: var(--mono-grey); margin-bottom: 20px;" class="dark:text-gray-400">Based in Hinckley, Leicestershire, our installation teams cover a wide area across the Midlands. If you're unsure whether we cover your specific location, please get in touch.</p>
            <p style="font-size: 1.1rem; color: var(--mono-grey); margin-bottom: 24px;" class="dark:text-gray-400">Our expert fitting teams are fully equipped and prepared to travel, ensuring your home benefits from our premium products and professional service.</p>
            
            <ul class="areas-list">
                <li>
                    <svg class="area-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    Leicestershire
                </li>
                <li>
                    <svg class="area-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    Warwickshire
                </li>
                <li>
                    <svg class="area-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    Derbyshire
                </li>
                <li>
                    <svg class="area-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    Nottinghamshire
                </li>
                <li>
                    <svg class="area-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    West Midlands
                </li>
                <li>
                    <svg class="area-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    Northamptonshire
                </li>
            </ul>
        </div>
        <div class="areas-image">
            <img src="{{ asset('assets/about/d2.png') }}" alt="Installation Areas" style="width: 100%; object-fit: cover;">
        </div>
    </div>
</section>

{{-- 5. PROCESS --}}
<section class="inst-section process-bg">
    <div class="inst-container">
        <div class="process-header">
            <span class="wi-section__eyebrow" style="margin-bottom: 16px;">Step By Step</span>
            <h2>How It Works</h2>
        </div>
        
        <div class="process-grid">
            <div class="process-step">
                <div class="step-number">1</div>
                <h3>Survey</h3>
                <p>Once you accept your online quote, one of our expert surveyors will visit your property to take exact manufacturing measurements.</p>
            </div>
            <div class="process-step">
                <div class="step-number">2</div>
                <h3>Manufacture</h3>
                <p>Your custom windows and doors are expertly manufactured in our state-of-the-art Leicestershire factory to your exact specifications.</p>
            </div>
            <div class="process-step">
                <div class="step-number">3</div>
                <h3>Installation</h3>
                <p>Our experienced fitting team arrives on a scheduled date, removes your old frames, and professionally installs your new products.</p>
            </div>
            <div class="process-step">
                <div class="step-number">4</div>
                <h3>Sign-off</h3>
                <p>We walk you through the finished installation, demonstrating how everything works, and ensure you are 100% satisfied before we leave.</p>
            </div>
        </div>
    </div>
</section>

{{-- 6. EXCLUSIONS --}}
<section class="inst-section bg-white dark:bg-black text-black dark:text-white">
    <div class="inst-container">
        <div style="max-width: 800px; margin: 0 auto;">
            <span class="wi-section__eyebrow">Important Details</span>
            <h2 style="font-size: clamp(2rem, 4vw, 3rem); font-weight: 700;">What Isn't Included?</h2>
            <p style="font-size: 1.1rem; color: var(--mono-grey); margin-top: 16px;" class="dark:text-gray-400">We strive for transparency. While we provide a comprehensive window and door installation service, there are a few structural and decorative tasks we do not cover.</p>
            
            <div class="exc-box">
                <h3>Please Note:</h3>
                <ul class="exc-list">
                    <li><strong>Structural Alterations:</strong> We do not undertake major structural modifications or knock-throughs.</li>
                    <li><strong>Lintel Replacements:</strong> If existing lintels are failed or missing, a builder must rectify this before installation.</li>
                    <li><strong>Decorating:</strong> We trim and seal the windows perfectly, but we do not provide painting, plastering, or wallpapering services around the reveals.</li>
                    <li><strong>Electrical/Plumbing:</strong> We do not move or alter radiators, sockets, or wiring that may be near the installation area.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

{{-- 7. FINAL CTA --}}
<section class="cta-section">
    <div class="cta-container">
        <div class="cta-grid">
            <img src="{{ asset('assets/about/d3.png') }}" alt="Contact Us Banner" class="cta-image">
            <div class="cta-content">
                <h2>Ready to Design Your Windows or Doors?</h2>
                <p>Configure your product online and get an instant price, or reach out to our team for custom requests and expert advice.</p>
                <div class="cta-actions">
                    <a href="{{ route('contact') }}" class="btn-solid-black">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
