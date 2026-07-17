@extends('layouts.app')

@section('title', 'Industries We Serve — Corammers')
@section('meta_description', 'Tailored digital solutions for healthcare, fintech, e-commerce, education and more — built by the Corammers engineering team.')

@push('styles')
<link rel="stylesheet" href="{{ asset_v('css/pages/industry.css') }}">
@endpush

@php
    /* ── Page data (ported from IndustriesPage/page.js) ── */
    $industries = [
        ['id' => 'roofing', 'name' => 'Roofing Companies', 'description' => '', 'solutions' => []],
        ['id' => 'law', 'name' => 'Law Firms', 'description' => '', 'solutions' => []],
        ['id' => 'insurance', 'name' => 'Insurance Companies', 'description' => '', 'solutions' => []],
        ['id' => 'auto', 'name' => 'Auto Mobile', 'description' => '', 'solutions' => []],
        ['id' => 'finance', 'name' => 'Financial Advisors', 'description' => '', 'solutions' => []],
        ['id' => 'aesthetic', 'name' => 'Aesthetic Clinics', 'description' => '', 'solutions' => []],
        ['id' => 'travel', 'name' => 'Travel & Hospitality', 'description' => '', 'solutions' => []],
        ['id' => 'public', 'name' => 'Public Sector', 'description' => '', 'solutions' => []],
        ['id' => 'ecom', 'name' => 'E-Commerce', 'description' => '', 'solutions' => []],
    ];

    $useCases = [
        ['iconId' => 'travel', 'industry' => 'Travel', 'title' => '50K+ Users Booking System', 'desc' => 'Built a distributed travel booking platform handling peak loads of 50,000+ concurrent users with 99.9% uptime.'],
        ['iconId' => 'telecom', 'industry' => 'Telecom', 'title' => 'AI Chatbot for Support', 'desc' => 'Deployed an NLP-powered support chatbot that resolved 68% of tier-1 queries without human intervention.'],
        ['iconId' => 'banking', 'industry' => 'Fintech', 'title' => 'Fraud Reduced by 20%', 'desc' => 'Real-time ML fraud detection model integrated into a payment gateway, reducing fraudulent transactions by 20%.'],
        ['iconId' => 'ecommerce', 'industry' => 'E-commerce', 'title' => '35% Revenue Growth', 'desc' => 'AI recommendation engine and checkout optimization drove a 35% increase in sales within 90 days of launch.'],
        ['iconId' => 'healthcare', 'industry' => 'Healthcare', 'title' => 'Telemedicine at Scale', 'desc' => 'Built a HIPAA-compliant telemedicine platform serving 200+ clinics with EHR integration and video consultations.'],
        ['iconId' => 'oil', 'industry' => 'Energy', 'title' => '30% Downtime Reduction', 'desc' => 'Predictive maintenance IoT platform reduced equipment downtime by 30% for an offshore energy operator.'],
    ];

    $challenges = [
        ['industry' => 'Retail', 'problem' => 'Fragmented inventory across 50+ outlets causing stockouts', 'solution' => 'Unified real-time inventory management with automated reorder triggers'],
        ['industry' => 'Oil & Energy', 'problem' => 'Manual data collection from remote field sensors causing delays', 'solution' => 'IoT-connected dashboards with automated anomaly alerts'],
        ['industry' => 'Banking', 'problem' => 'Legacy core banking slowing digital product launches', 'solution' => 'API-first middleware layer enabling rapid product iteration'],
        ['industry' => 'Healthcare', 'problem' => 'Siloed patient data across departments and systems', 'solution' => 'HL7/FHIR-compliant data lake with unified patient 360 view'],
        ['industry' => 'E-commerce', 'problem' => 'High cart abandonment rate (75%) on mobile checkout', 'solution' => 'Progressive checkout redesign with one-tap payment integration'],
        ['industry' => 'Telecom', 'problem' => 'Reactive network maintenance causing SLA breaches', 'solution' => 'AI-powered predictive maintenance reducing incidents by 40%'],
    ];

    $caseStudies = [
        ['number' => '35%', 'label' => 'Revenue increase for e-commerce client', 'industry' => 'E-commerce'],
        ['number' => '20%', 'label' => 'Fraud reduction via AI detection model', 'industry' => 'Fintech'],
        ['number' => '68%', 'label' => 'Support queries resolved by AI chatbot', 'industry' => 'Telecom'],
        ['number' => '50K+', 'label' => 'Concurrent users on travel platform', 'industry' => 'Travel'],
        ['number' => '30%', 'label' => 'Equipment downtime reduction in energy', 'industry' => 'Energy'],
        ['number' => '200+', 'label' => 'Clinics on telemedicine network', 'industry' => 'Healthcare'],
    ];

    $complianceItems = [
        ['icon' => 'shield', 'title' => 'Data Protection', 'desc' => 'End-to-end encryption, data masking, and zero-trust architecture for all sensitive data at rest and in transit.'],
        ['icon' => 'doc', 'title' => 'Regulatory Compliance', 'desc' => 'GDPR, PCI-DSS, HIPAA, SOC 2, and ISO 27001 frameworks embedded into our development processes from day one.'],
        ['icon' => 'lock', 'title' => 'Secure Architecture', 'desc' => 'Multi-layer security design, regular penetration testing, and vulnerability assessments across all environments.'],
        ['icon' => 'search', 'title' => 'Audit & Monitoring', 'desc' => 'Real-time security monitoring, detailed audit trails, and automated compliance reporting dashboards.'],
        ['icon' => 'globe', 'title' => 'Network Security', 'desc' => 'Firewall management, DDoS protection, and secure API gateway configuration for enterprise infrastructure.'],
        ['icon' => 'chart', 'title' => 'Risk Management', 'desc' => 'Continuous risk assessment, threat modeling, and proactive vulnerability remediation programs.'],
    ];

    /* Industry icon SVGs — accent from currentColor (set to var(--ip-accent-color) on wrapper). */
    $industryIcon = function ($id) {
        $acc = 'currentColor';
        return match ($id) {
            'banking' => '<svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" width="40" height="40"><rect x="4" y="20" width="40" height="4" rx="2" fill="'.$acc.'" opacity="0.9" /><rect x="8" y="24" width="4" height="16" rx="1" fill="'.$acc.'" opacity="0.7" /><rect x="16" y="24" width="4" height="16" rx="1" fill="'.$acc.'" opacity="0.7" /><rect x="24" y="24" width="4" height="16" rx="1" fill="'.$acc.'" opacity="0.7" /><rect x="32" y="24" width="4" height="16" rx="1" fill="'.$acc.'" opacity="0.7" /><rect x="4" y="40" width="40" height="4" rx="2" fill="'.$acc.'" opacity="0.9" /><polygon points="24,4 44,20 4,20" stroke="'.$acc.'" stroke-width="1" fill="'.$acc.'" /><circle cx="24" cy="14" r="3" fill="var(--ip-s-card)" /></svg>',
            'healthcare' => '<svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" width="40" height="40"><rect x="6" y="6" width="36" height="36" rx="8" fill="'.$acc.'" opacity="0.15" stroke="'.$acc.'" stroke-width="1.5" /><path d="M24 14 L24 34 M14 24 L34 24" stroke="'.$acc.'" stroke-width="4" stroke-linecap="round" /><circle cx="24" cy="24" r="10" stroke="'.$acc.'" stroke-width="1.5" fill="none" opacity="0.4" /></svg>',
            'ecommerce' => '<svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" width="40" height="40"><path d="M6 8 L12 8 L16 28 L38 28 L42 14 L14 14" stroke="'.$acc.'" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" fill="none" /><circle cx="18" cy="34" r="3" fill="'.$acc.'" /><circle cx="34" cy="34" r="3" fill="'.$acc.'" /><path d="M14 14 L38 14 L34 26 L18 26 Z" fill="'.$acc.'" opacity="0.2" /></svg>',
            'retail' => '<svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" width="40" height="40"><rect x="6" y="20" width="36" height="22" rx="3" fill="'.$acc.'" opacity="0.15" stroke="'.$acc.'" stroke-width="1.5" /><path d="M12 20 L10 10 L38 10 L36 20" stroke="'.$acc.'" stroke-width="2" stroke-linecap="round" fill="none" /><path d="M18 20 C18 23.3 20.7 26 24 26 C27.3 26 30 23.3 30 20" stroke="'.$acc.'" stroke-width="2.5" fill="none" stroke-linecap="round" /><rect x="20" y="30" width="8" height="12" rx="2" fill="'.$acc.'" opacity="0.6" /><rect x="10" y="28" width="6" height="7" rx="1" fill="'.$acc.'" opacity="0.4" /><rect x="32" y="28" width="6" height="7" rx="1" fill="'.$acc.'" opacity="0.4" /></svg>',
            'telecom' => '<svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" width="40" height="40"><circle cx="24" cy="24" r="4" fill="'.$acc.'" /><path d="M16 24 C16 19.6 19.6 16 24 16 C28.4 16 32 19.6 32 24" stroke="'.$acc.'" stroke-width="2" fill="none" stroke-linecap="round" opacity="0.7" /><path d="M10 24 C10 15.2 15.2 10 24 10 C32.8 10 38 15.2 38 24" stroke="'.$acc.'" stroke-width="2" fill="none" stroke-linecap="round" opacity="0.5" /><path d="M4 24 C4 10.7 10.7 4 24 4 C37.3 4 44 10.7 44 24" stroke="'.$acc.'" stroke-width="1.5" fill="none" stroke-linecap="round" opacity="0.25" /><line x1="24" y1="28" x2="24" y2="44" stroke="'.$acc.'" stroke-width="2" stroke-linecap="round" /><line x1="16" y1="44" x2="32" y2="44" stroke="'.$acc.'" stroke-width="2" stroke-linecap="round" /></svg>',
            'travel' => '<svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" width="40" height="40"><path d="M6 32 L18 20 L24 26 L32 14 L42 32" stroke="'.$acc.'" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" /><path d="M8 36 L40 36" stroke="'.$acc.'" stroke-width="2" stroke-linecap="round" opacity="0.5" /><path d="M20 20 L26 8 L32 20 Z" fill="'.$acc.'" opacity="0.7" /><circle cx="26" cy="8" r="3" fill="'.$acc.'" /><path d="M4 32 C4 32 10 28 16 30 C22 32 28 26 34 28 C40 30 44 26 44 26" stroke="'.$acc.'" stroke-width="1.5" fill="none" stroke-linecap="round" opacity="0.4" /></svg>',
            'oil' => '<svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" width="40" height="40"><polygon points="26,4 14,26 24,26 22,44 34,22 24,22" fill="'.$acc.'" stroke="'.$acc.'" stroke-width="1" opacity="0.9" /><circle cx="24" cy="24" r="20" stroke="'.$acc.'" stroke-width="1" fill="none" opacity="0.2" /><circle cx="24" cy="24" r="14" stroke="'.$acc.'" stroke-width="1" fill="none" opacity="0.15" /></svg>',
            'public' => '<svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" width="40" height="40"><rect x="4" y="42" width="40" height="3" rx="1.5" fill="'.$acc.'" opacity="0.8" /><rect x="6" y="22" width="4" height="20" rx="1" fill="'.$acc.'" opacity="0.6" /><rect x="14" y="22" width="4" height="20" rx="1" fill="'.$acc.'" opacity="0.6" /><rect x="22" y="22" width="4" height="20" rx="1" fill="'.$acc.'" opacity="0.6" /><rect x="30" y="22" width="4" height="20" rx="1" fill="'.$acc.'" opacity="0.6" /><rect x="38" y="22" width="4" height="20" rx="1" fill="'.$acc.'" opacity="0.6" /><rect x="4" y="18" width="40" height="4" rx="2" fill="'.$acc.'" /><polygon points="24,4 44,18 4,18" fill="'.$acc.'" stroke="'.$acc.'" stroke-width="1" opacity="0.8" /><circle cx="24" cy="12" r="2.5" fill="var(--ip-s-card)" /></svg>',
            'startups' => '<svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" width="40" height="40"><path d="M24 4 C24 4 34 10 34 24 L30 28 L18 28 L14 24 C14 10 24 4 24 4Z" fill="'.$acc.'" stroke="'.$acc.'" stroke-width="1" opacity="0.85" /><circle cx="24" cy="20" r="4" fill="var(--ip-s-card)" opacity="0.6" /><circle cx="24" cy="20" r="2.5" fill="'.$acc.'" /><path d="M14 24 L8 30 L12 32 L16 28" fill="'.$acc.'" opacity="0.5" /><path d="M34 24 L40 30 L36 32 L32 28" fill="'.$acc.'" opacity="0.5" /><path d="M20 28 L18 38 L24 34 L30 38 L28 28" fill="'.$acc.'" opacity="0.4" /><path d="M22 36 L20 44 L24 42 L28 44 L26 36" fill="'.$acc.'" opacity="0.25" /></svg>',
            default => '',
        };
    };

    $complianceIcon = function ($id) {
        $acc = 'currentColor';
        return match ($id) {
            'shield' => '<svg viewBox="0 0 48 48" fill="none" width="44" height="44"><path d="M24 4 L40 10 L40 26 C40 34 32 42 24 44 C16 42 8 34 8 26 L8 10 Z" fill="'.$acc.'" opacity="0.15" stroke="'.$acc.'" stroke-width="1.5" /><path d="M16 24 L21 29 L32 18" stroke="'.$acc.'" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" /></svg>',
            'doc' => '<svg viewBox="0 0 48 48" fill="none" width="44" height="44"><rect x="10" y="4" width="28" height="40" rx="4" fill="'.$acc.'" opacity="0.12" stroke="'.$acc.'" stroke-width="1.5" /><line x1="16" y1="16" x2="32" y2="16" stroke="'.$acc.'" stroke-width="2" stroke-linecap="round" /><line x1="16" y1="22" x2="32" y2="22" stroke="'.$acc.'" stroke-width="2" stroke-linecap="round" /><line x1="16" y1="28" x2="26" y2="28" stroke="'.$acc.'" stroke-width="2" stroke-linecap="round" /><circle cx="34" cy="34" r="8" fill="'.$acc.'" opacity="0.9" /><path d="M31 34 L33 36 L37 32" stroke="var(--ip-s-card)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /></svg>',
            'lock' => '<svg viewBox="0 0 48 48" fill="none" width="44" height="44"><rect x="10" y="22" width="28" height="22" rx="5" fill="'.$acc.'" opacity="0.15" stroke="'.$acc.'" stroke-width="1.5" /><path d="M16 22 L16 16 C16 9.4 32 9.4 32 16 L32 22" stroke="'.$acc.'" stroke-width="2.5" fill="none" stroke-linecap="round" /><circle cx="24" cy="32" r="3" fill="'.$acc.'" /><line x1="24" y1="35" x2="24" y2="39" stroke="'.$acc.'" stroke-width="2" stroke-linecap="round" /></svg>',
            'search' => '<svg viewBox="0 0 48 48" fill="none" width="44" height="44"><circle cx="22" cy="22" r="14" stroke="'.$acc.'" stroke-width="2" fill="'.$acc.'" fill-opacity="0.1" /><circle cx="22" cy="22" r="8" stroke="'.$acc.'" stroke-width="1.5" fill="none" opacity="0.5" /><line x1="32" y1="32" x2="43" y2="43" stroke="'.$acc.'" stroke-width="3" stroke-linecap="round" /><circle cx="22" cy="18" r="2" fill="'.$acc.'" opacity="0.7" /></svg>',
            'globe' => '<svg viewBox="0 0 48 48" fill="none" width="44" height="44"><circle cx="24" cy="24" r="18" stroke="'.$acc.'" stroke-width="1.5" fill="'.$acc.'" fill-opacity="0.08" /><ellipse cx="24" cy="24" rx="8" ry="18" stroke="'.$acc.'" stroke-width="1.5" fill="none" opacity="0.5" /><line x1="6" y1="24" x2="42" y2="24" stroke="'.$acc.'" stroke-width="1.5" opacity="0.5" /><line x1="9" y1="16" x2="39" y2="16" stroke="'.$acc.'" stroke-width="1" opacity="0.3" /><line x1="9" y1="32" x2="39" y2="32" stroke="'.$acc.'" stroke-width="1" opacity="0.3" /></svg>',
            'chart' => '<svg viewBox="0 0 48 48" fill="none" width="44" height="44"><rect x="6" y="28" width="8" height="14" rx="2" fill="'.$acc.'" opacity="0.5" /><rect x="18" y="18" width="8" height="24" rx="2" fill="'.$acc.'" opacity="0.7" /><rect x="30" y="10" width="8" height="32" rx="2" fill="'.$acc.'" opacity="0.9" /><path d="M8 24 L22 14 L34 8" stroke="'.$acc.'" stroke-width="2" fill="none" stroke-linecap="round" stroke-dasharray="3 2" /><circle cx="8" cy="24" r="3" fill="'.$acc.'" /><circle cx="22" cy="14" r="3" fill="'.$acc.'" /><circle cx="34" cy="8" r="3" fill="'.$acc.'" /></svg>',
            default => '',
        };
    };

    /* Robot badge: single image */
    $robotBadge = '<div class="robot-badge"><img loading="lazy" decoding="async" src="/assets/robo.webp" alt="Robot" style="width:32px;height:32px;object-fit:contain;display:block"></div>';
@endphp

@section('content')
<div class="pw-industry" style="background:var(--ip-s-bg);color:var(--ip-s-text);min-height:100vh;transition:background 0.4s, color 0.4s">

    {{-- ── HERO BANNER ── --}}
    <section class="industry-banner">
        <div class="banner-overlay"></div>
        <div class="banner-content reveal">
            <div class="label-row" style="justify-content:center;margin-bottom:24px">
                <div class="robot-badge"><img loading="lazy" decoding="async" src="/assets/robo.webp" alt="Robot" style="width:32px;height:32px;object-fit:contain;display:block"></div>
                <div class="label-pill">
                    <span class="label-dot"></span>
                    <span class="label-text">Our Expertise</span>
                </div>
            </div>
            <h1 class="page-heading">
                Industries We <span style="color:#D81D1F">Serve</span>
            </h1>
            <p class="page-desc">
                Delivering tailored digital solutions across industries — from startups to enterprise-level organizations.
            </p>
            <div style="display:flex;gap:16px;justify-content:center;margin-top:40px" class="hero-buttons">
                <a href="#solutions" class="btn-primary" style="padding:16px 40px">Explore Solutions</a>
                <a href="/contact" class="btn-outline">Get in Touch</a>
            </div>
        </div>
    </section>

    {{-- ── INDUSTRY SOLUTIONS ── --}}
    <section class="section section-premium" id="solutions" style="background:var(--ip-s-bg)">
        <svg class="section-deco-svg" style="top:0;right:0;width:300px;height:300px;opacity:0.06"><circle cx="250" cy="50" r="180" fill="none" stroke="currentColor" stroke-width="60" /></svg>
        <svg class="section-deco-svg" style="bottom:40px;left:0;width:200px;height:200px;opacity:0.05"><circle cx="0" cy="200" r="150" fill="none" stroke="currentColor" stroke-width="50" /></svg>
        <div class="container">
            <div class="header-intro-wrap reveal">
                <div class="label-row">
                    {!! $robotBadge !!}
                    <div class="label-pill"><span class="label-dot"></span><span class="label-text">Sector Expertise</span></div>
                </div>
                <div class="section-divider"></div>
                <h2 class="premium-heading" style="color:var(--ip-s-text)">Industry-Specific<br><span style="color:var(--ip-s-accent)">Digital Solutions</span></h2>
                <p class="premium-sub" style="color:var(--ip-s-muted)">We don't believe in one-size-fits-all. Every industry has its own language, challenges, and compliance requirements — our solutions are built around yours.</p>
            </div>
            @php
                $indImages = [
                    'roofing'    => '/assets/roofing.webp',
                    'law'        => '/assets/law.webp',
                    'insurance'  => '/assets/insurance.webp',
                    'auto'       => '/assets/auto.webp',
                    'finance'    => '/assets/finance.webp',
                    'aesthetic'  => '/assets/medicine.webp',
                    'travel'     => '/assets/ind1.webp',
                    'public'     => '/assets/ind2.webp',
                    'ecom'       => '/assets/ind7.webp',
                ];
                $indCaptions = [
                    'roofing'    => 'High-performance roofing sites: Local SEO and instant quotes that turn leads into customers.',
                    'law'        => 'Attorney websites: Building trust and authority through secure lead capture and expert design.',
                    'insurance'  => 'Insurance broker sites: Simplifying complex offers with clear navigation and quote calculators.',
                    'auto'       => 'High-impact auto sites: Interactive inventory and seamless test-drive booking to drive sales.',
                    'finance'    => 'Financial websites: Building credibility with secure portals and expert data visualization.',
                    'aesthetic'  => 'Premium beauty sites: Stunning galleries and seamless booking to elevate your clinic.',
                    'travel'     => 'Travel websites: Exceptional digital experiences that inspire travelers and increase direct bookings.',
                    'public'     => 'Public Sector websites: Secure, accessible, and citizen-focused digital platforms.',
                    'ecom'       => 'E-commerce websites: High-converting online stores that increase sales and improve customer experience.',
                ];
            @endphp
            <div class="industry-grid">
                @foreach ($industries as $i => $ind)
                    <a href="/industries/{{ $ind['id'] }}" class="ind-card reveal reveal-d{{ ($i % 3) + 1 }}" style="text-decoration:none;">
                        <img
                            src="{{ $indImages[$ind['id']] }}"
                            alt="{{ $ind['name'] }}"
                            loading="lazy"
                            decoding="async"
                        >
                        <div class="ind-card-overlay"></div>
                        <div class="ind-card-content">
                            <span class="ind-card-tag">Industry</span>
                            <p class="ind-card-title">{{ $ind['name'] }}</p>
                            <div class="ind-card-desc-wrap">
                                <p class="ind-card-desc">{{ $indCaptions[$ind['id']] }}</p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ── GLOBAL REACH / WORLD MAP ── --}}
    <section class="section section-premium global-reach-section" style="background:var(--ip-s-section-alt)">
        <div class="container world-map-section">
            <div class="header-intro-wrap reveal">
                <div class="label-row">
                    {!! $robotBadge !!}
                    <div class="label-pill"><span class="label-dot"></span><span class="label-text">Global Reach</span></div>
                </div>
                <div class="section-divider"></div>
                <h2 class="premium-heading" style="color:var(--ip-s-text)">Streamlining <span style="color:var(--ip-s-accent)">Guest Journeys</span></h2>
                <p class="premium-sub" style="color:var(--ip-s-muted)">Our telecom and hospitality solutions span operations, security, and automation — globally.</p>
            </div>
            <div class="world-map-container">
                <div class="world-dots" style="opacity:var(--ip-world-dots-opacity)"></div>
                <svg class="world-map-svg-lines" viewBox="0 0 1000 500" preserveAspectRatio="none" style="color:var(--ip-accent-color)">
                    <defs><marker id="arrowhead" markerWidth="6" markerHeight="4" refX="3" refY="2" orient="auto"><polygon points="0 0, 6 2, 0 4" fill="currentColor" opacity="0.6" /></marker></defs>
                    <polyline points="130,200 350,130 590,250 830,280" fill="none" stroke="var(--ip-map-line-color)" stroke-width="2" stroke-dasharray="8 4" marker-end="url(#arrowhead)" />
                    <g><circle cx="130" cy="200" r="8" fill="var(--ip-map-node-halo)" /><circle cx="130" cy="200" r="4" fill="currentColor" /></g>
                    <g><circle cx="350" cy="130" r="8" fill="var(--ip-map-node-halo)" /><circle cx="350" cy="130" r="4" fill="currentColor" /></g>
                    <g><circle cx="590" cy="250" r="8" fill="var(--ip-map-node-halo)" /><circle cx="590" cy="250" r="4" fill="currentColor" /></g>
                    <g><circle cx="830" cy="280" r="8" fill="var(--ip-map-node-halo)" /><circle cx="830" cy="280" r="4" fill="currentColor" /></g>
                </svg>
                <div class="features-wrapper">
                    <div class="telecom-feature" style="top:22%;left:1%;color:var(--ip-s-text)"><div class="tf-title">Enhanced Customer Engagement</div><div class="tf-desc" style="color:var(--ip-s-muted)">Omni-channel platforms enable seamless, personalized customer experiences.</div></div>
                    <div class="telecom-feature" style="top:5%;left:28%;color:var(--ip-s-text)"><div class="tf-title">Smarter Network Management</div><div class="tf-desc" style="color:var(--ip-s-muted)">AI-based solutions predict and prevent issues, ensuring reliability.</div></div>
                    <div class="telecom-feature" style="top:52%;left:51%;color:var(--ip-s-text)"><div class="tf-title">Robust Cybersecurity for Telecom</div><div class="tf-desc" style="color:var(--ip-s-muted)">Secure sensitive customer data and network systems with advanced measures.</div></div>
                    <div class="telecom-feature" style="top:34%;right:1%;color:var(--ip-s-text)"><div class="tf-title">Efficient Process Automation</div><div class="tf-desc" style="color:var(--ip-s-muted)">Streamline operations like billing and support to enhance services.</div></div>

                </div>
            </div>
        </div>
    </section>

    {{-- ── USE CASES ── --}}
    <section class="section section-premium" style="background:var(--ip-s-bg)">
        <svg class="section-deco-svg" style="top:50%;right:0;transform:translateY(-50%);width:180px;height:400px;opacity:0.06;color:var(--ip-accent-color)">
            <line x1="180" y1="0" x2="180" y2="400" stroke="currentColor" stroke-width="2" stroke-dasharray="6 4" />
            @foreach ([40, 80, 120, 160, 200, 240, 280, 320, 360] as $y)
                <circle cx="180" cy="{{ $y }}" r="3" fill="currentColor" />
            @endforeach
        </svg>
        <div class="container">
            <div class="header-intro-wrap reveal">
                <div class="label-row">
                    {!! $robotBadge !!}
                    <div class="label-pill"><span class="label-dot"></span><span class="label-text">Real Impact</span></div>
                </div>
                <div class="section-divider"></div>
                <h2 class="premium-heading" style="color:var(--ip-s-text)">Use Cases & <span style="color:var(--ip-s-accent)">Real Scenarios</span></h2>
                <p class="premium-sub" style="color:var(--ip-s-muted)">Stories from the field — how we translated complex problems into measurable results.</p>
            </div>
            <div class="use-cases-grid">
                @foreach ($useCases as $i => $uc)
                    <div class="use-case-card reveal reveal-d{{ ($i % 3) + 1 }}">
                        <div class="uc-icon-wrap" style="color:var(--ip-accent-color)">{!! $industryIcon($uc['iconId']) !!}</div>
                        <p class="uc-industry">{{ $uc['industry'] }}</p>
                        <h3 class="uc-title">{{ $uc['title'] }}</h3>
                        <p class="uc-desc" style="color:var(--ip-s-muted)">{{ $uc['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ── CHALLENGES ── --}}
    <section class="section section-premium" style="background:var(--ip-s-section-alt)">
        <div class="container">
            <div class="header-intro-wrap reveal">
                <div class="label-row">
                    {!! $robotBadge !!}
                    <div class="label-pill"><span class="label-dot"></span><span class="label-text">Problem → Solution</span></div>
                </div>
                <div class="section-divider"></div>
                <h2 class="premium-heading" style="color:var(--ip-s-text)">Challenges We <span style="color:var(--ip-s-accent)">Solve</span></h2>
                <p class="premium-sub" style="color:var(--ip-s-muted)">Every industry has its friction points. We identify them, then engineer elegant solutions.</p>
            </div>
            <div class="challenges-grid">
                @foreach ($challenges as $i => $ch)
                    <div class="challenge-card reveal reveal-d{{ ($i % 2) + 1 }}">
                        <div class="challenge-left">
                            <p class="ch-industry">{{ $ch['industry'] }}</p>
                            <p class="ch-label" style="color:var(--ip-s-muted)">⚠ Problem</p>
                            <p class="ch-text" style="color:var(--ip-s-text)">{{ $ch['problem'] }}</p>
                        </div>
                        <div class="challenge-right">
                            <svg class="challenge-right-inner-deco" width="160" height="160" style="color:var(--ip-accent-color)">
                                <circle cx="80" cy="80" r="70" stroke="currentColor" stroke-width="1" fill="none" />
                                <circle cx="80" cy="80" r="45" stroke="currentColor" stroke-width="1" fill="none" />
                            </svg>
                            <p class="ch-label" style="color:#ffffff">✓ Solution</p>
                            <p class="ch-text" style="color:rgba(255,255,255,0.92)">{{ $ch['solution'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ── COMPLIANCE ── --}}
    <section class="section section-premium" style="background:var(--ip-s-section-alt)">
        <svg class="section-deco-svg" style="top:40px;left:40px;width:200px;height:200px">
            <circle cx="100" cy="100" r="90" fill="none" stroke="rgba(216,29,31,0.06)" stroke-width="1.5" stroke-dasharray="6 4" style="animation:spin-slow 30s linear infinite;transform-origin:100px 100px" />
        </svg>
        <svg class="section-deco-svg" style="bottom:40px;right:40px;width:240px;height:240px">
            <circle cx="120" cy="120" r="110" fill="none" stroke="rgba(216,29,31,0.05)" stroke-width="1.5" stroke-dasharray="5 5" style="animation:spin-reverse 40s linear infinite;transform-origin:120px 120px" />
        </svg>
        <div class="container">
            <div class="header-intro-wrap reveal">
                <div class="label-row">
                    {!! $robotBadge !!}
                    <div class="label-pill"><span class="label-dot"></span><span class="label-text">Trust & Safety</span></div>
                </div>
                <div class="section-divider"></div>
                <h2 class="premium-heading" style="color:var(--ip-s-text)">Compliance &<br><span style="color:var(--ip-s-accent)">Security</span></h2>
                <p class="premium-sub" style="color:var(--ip-s-muted)">Critical for banking, public sector, and telecom clients — we build trust into the architecture.</p>
            </div>
            <div class="compliance-grid">
                @foreach ($complianceItems as $i => $item)
                    <div class="compliance-card reveal reveal-d{{ ($i % 3) + 1 }}">
                        <div class="compliance-icon-wrap" style="color:var(--ip-accent-color)">{!! $complianceIcon($item['icon']) !!}</div>
                        <h3 class="compliance-title">{{ $item['title'] }}</h3>
                        <p class="compliance-desc" style="color:var(--ip-s-muted)">{{ $item['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ── CASE STUDY HIGHLIGHTS ── --}}
    <section class="section section-premium" style="background:var(--ip-s-bg)">
        <div class="container">
            <div class="header-intro-wrap reveal">
                <div class="label-row">
                    {!! $robotBadge !!}
                    <div class="label-pill"><span class="label-dot"></span><span class="label-text">By the Numbers</span></div>
                </div>
                <div class="section-divider"></div>
                <h2 class="premium-heading" style="color:var(--ip-s-text)">Case Study <span style="color:var(--ip-s-accent)">Highlights</span></h2>
            </div>
            <div class="case-grid">
                @foreach ($caseStudies as $i => $cs)
                    @php
                        $num = (int) preg_replace('/[^0-9]/', '', $cs['number']);
                        $suffix = preg_replace('/[0-9]/', '', $cs['number']);
                    @endphp
                    <div class="case-card case-card-visible reveal-d{{ ($i % 3) + 1 }}">
                        <svg class="case-card-deco" viewBox="0 0 130 130" style="color:var(--ip-accent-color)">
                            <circle cx="65" cy="65" r="60" fill="none" stroke="currentColor" stroke-width="30" />
                        </svg>
                        <p class="case-number" data-count="{{ $num }}" data-suffix="{{ $suffix }}" data-delay="{{ $i * 200 }}">{{ $cs['number'] }}</p>
                        <p class="case-label" style="color:var(--ip-s-muted)">{{ $cs['label'] }}</p>
                        <p class="case-industry" style="color:var(--ip-s-muted)">{{ $cs['industry'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ── CTA ── --}}
    <section class="cta-section">
        <div class="cta-bg"></div>
        <div class="cta-glow"></div>
        <svg style="position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);width:700px;height:700px;pointer-events:none;z-index:1">
            <circle cx="350" cy="350" r="280" fill="none" stroke="rgba(216,29,31,0.06)" stroke-width="1.5" stroke-dasharray="8 5" style="animation:spin-slow 50s linear infinite;transform-origin:350px 350px" />
            <circle cx="350" cy="350" r="200" fill="none" stroke="rgba(216,29,31,0.04)" stroke-width="1" stroke-dasharray="6 6" style="animation:spin-reverse 35s linear infinite;transform-origin:350px 350px" />
            <circle cx="350" cy="350" r="120" fill="none" stroke="rgba(216,29,31,0.08)" stroke-width="1" />
        </svg>
        <div class="cta-content container">
            <div class="reveal">
                <div class="label-row" style="justify-content:center">
                    <div class="robot-badge" style="border-color:rgba(216, 29, 31, 0.4);background:rgba(216, 29, 31, 0.1)"><img loading="lazy" decoding="async" src="/assets/robo.webp" alt="Robot" style="width:32px;height:32px;object-fit:contain;display:block"></div>
                    <div class="label-pill" style="border-color:rgba(216, 29, 31, 0.3);background:rgba(216, 29, 31, 0.08)">
                        <span class="label-dot" style="background:#D81D1F;box-shadow:0 0 10px #D81D1F"></span>
                        <span class="label-text" style="color:#fff">Get Started</span>
                    </div>
                </div>
                <h2 class="cta-title">Looking for solutions in<br><span style="color:#D81D1F">your industry?</span></h2>
                <p class="cta-sub">Let's build a custom solution tailored to your business needs.</p>
                <div style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap" class="hero-buttons">
                    <a href="/contact" class="btn-primary" style="background:#D81D1F;color:#1a1a2e">Contact Us</a>
                    <a href="/services" class="btn-outline" style="color:#ffffff;border-color:rgba(255,255,255,0.3)">View Services</a>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection

@push('scripts')
<script>
(function () {
    var root = document.querySelector('.pw-industry');
    if (!root) return;

    /* ── Reveal on scroll (mirrors the page's IntersectionObserver) ── */
    var revealEls = root.querySelectorAll('.reveal');
    if ('IntersectionObserver' in window) {
        var revObs = new IntersectionObserver(function (entries) {
            entries.forEach(function (e) {
                if (e.isIntersecting) { e.target.classList.add('revealed'); revObs.unobserve(e.target); }
            });
        }, { threshold: 0.08, rootMargin: '0px 0px -40px 0px' });
        revealEls.forEach(function (el) { revObs.observe(el); });
    } else {
        revealEls.forEach(function (el) { el.classList.add('revealed'); });
    }

    /* ── Count-up for case-study numbers ── */
    function animateCount(el) {
        var target = parseInt(el.getAttribute('data-count'), 10) || 0;
        var suffix = el.getAttribute('data-suffix') || '';
        var delay = parseInt(el.getAttribute('data-delay'), 10) || 0;
        var duration = 2000 + delay;
        var start = null;
        function step(ts) {
            if (!start) start = ts;
            var progress = Math.min((ts - start) / duration, 1);
            var eased = 1 - Math.pow(1 - progress, 3);
            el.textContent = Math.floor(eased * target) + suffix;
            if (progress < 1) requestAnimationFrame(step);
            else el.textContent = target + suffix;
        }
        requestAnimationFrame(step);
    }

    var numbers = root.querySelectorAll('.case-number[data-count]');
    if ('IntersectionObserver' in window) {
        var numObs = new IntersectionObserver(function (entries) {
            entries.forEach(function (e) {
                if (e.isIntersecting) { animateCount(e.target); numObs.unobserve(e.target); }
            });
        }, { threshold: 0.15, rootMargin: '50px' });
        numbers.forEach(function (el) { numObs.observe(el); });
    }
    /* If JS/IO unavailable, the final value is already rendered in the markup. */
})();
</script>
@endpush
