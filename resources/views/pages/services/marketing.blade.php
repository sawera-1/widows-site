@extends('layouts.app')

@section('title', 'Marketing Services — CodeOaks')
@section('meta_description', 'From data-driven social strategies to precision SEO — we craft scalable, high-performance marketing machines that drive real ROI.')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/pages/services-marketing.css') }}">
@endpush

@section('content')
@php
    $robot = '<img loading="lazy" decoding="async" class="robo-light" src="/assets/robolight.webp" alt="Robot" width="32" height="32" style="object-fit:contain;display:block"><img loading="lazy" decoding="async" class="robo-dark" src="/assets/robo.webp" alt="Robot" width="32" height="32" style="object-fit:contain;display:block">';

    $arrowIcon = '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>';

    /* ─── react-icons substitutes (simple inline glyphs) ─── */
    $icBullhorn = '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 11l14-6v14L3 13v-2z"/><path d="M17 8a3 3 0 0 1 0 8"/><path d="M6 13v5a1 1 0 0 0 1 1h2"/></svg>';
    $icPen = '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 19l7-7 3 3-7 7-3-3z"/><path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"/><path d="M2 2l7.5 1.5"/></svg>';
    $icAd = '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M7 15l1.5-6L10 15M7.7 13h1.6M14 9v6h1.5a2 2 0 0 0 0-6H14z"/></svg>';
    $icEnvelope = '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>';
    $icSearch = '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>';
    $icChartLine = '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 3v18h18"/><path d="M7 14l4-4 3 3 5-6"/></svg>';
    $icPalette = '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><circle cx="8" cy="10" r="1"/><circle cx="12" cy="8" r="1"/><circle cx="16" cy="10" r="1"/><path d="M12 21a3 3 0 0 0 0-6h-1a2 2 0 0 1 0-4"/></svg>';
    $icUsers = '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/></svg>';
    $icFilter = '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"/></svg>';
    $icEdit = '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>';
    $icUserPlus = '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><line x1="19" y1="8" x2="19" y2="14"/><line x1="22" y1="11" x2="16" y2="11"/></svg>';
    $icBulb = '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18h6M10 22h4"/><path d="M12 2a7 7 0 0 0-4 12.7c.6.5 1 1.2 1 2h6c0-.8.4-1.5 1-2A7 7 0 0 0 12 2z"/></svg>';
    $icRocket = '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z"/><path d="M12 15l-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"/></svg>';
    $icChartPie = '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"/><path d="M22 12A10 10 0 0 0 12 2v10z"/></svg>';
    $icCogs = '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 1 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-4 0v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 1 1-2.83-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1 0-4h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 1 1 2.83-2.83l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 1 1 2.83 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1z"/></svg>';

    /* ─── VERTICAL TICKER TECH DATA ─── */
    $techCol1 = [
        ['name' => 'Social Media', 'abbr' => 'SMM', 'color' => '#e34f26', 'bg' => 'rgba(227,79,38,0.13)', 'icon' => $icBullhorn],
        ['name' => 'Content Strategy', 'abbr' => 'CNT', 'color' => '#61dafb', 'bg' => 'rgba(97,218,251,0.13)', 'icon' => $icPen],
        ['name' => 'Paid Ads', 'abbr' => 'ADS', 'color' => '#68a063', 'bg' => 'rgba(104,160,99,0.13)', 'icon' => $icAd],
        ['name' => 'Email Marketing', 'abbr' => 'EML', 'color' => '#3776ab', 'bg' => 'rgba(55,118,171,0.13)', 'icon' => $icEnvelope],
        ['name' => 'SEO Strategy', 'abbr' => 'SEO', 'color' => '#319533ff', 'bg' => 'rgba(255,255,255,0.08)', 'icon' => $icSearch],
        ['name' => 'Analytics', 'abbr' => 'DATA', 'color' => '#3178c6', 'bg' => 'rgba(49,120,198,0.13)', 'icon' => $icChartLine],
    ];
    $techCol2 = [
        ['name' => 'Brand Identity', 'abbr' => 'BRAND', 'color' => '#1572b6', 'bg' => 'rgba(21,114,182,0.13)', 'icon' => $icPalette],
        ['name' => 'Influencer Marketing', 'abbr' => 'INF', 'color' => '#42b883', 'bg' => 'rgba(66,184,131,0.13)', 'icon' => $icUsers],
        ['name' => 'Funnel Optimization', 'abbr' => 'FUN', 'color' => '#ff2d20', 'bg' => 'rgba(255,45,32,0.13)', 'icon' => $icFilter],
        ['name' => 'Content Creation', 'abbr' => 'CRE', 'color' => '#21759b', 'bg' => 'rgba(33,117,155,0.13)', 'icon' => $icEdit],
        ['name' => 'Lead Generation', 'abbr' => 'LEAD', 'color' => '#777bb4', 'bg' => 'rgba(119,123,180,0.13)', 'icon' => $icUserPlus],
        ['name' => 'Campaign Strategy', 'abbr' => 'CMP', 'color' => '#f7df1e', 'bg' => 'rgba(247,223,30,0.13)', 'icon' => $icBulb],
    ];
    $techCol3 = [
        ['name' => 'SEO Optimization', 'abbr' => 'SEO', 'color' => '#319533ff', 'bg' => 'rgba(255,255,255,0.08)', 'icon' => $icSearch],
        ['name' => 'Email Campaigns', 'abbr' => 'EML', 'color' => '#3776ab', 'bg' => 'rgba(55,118,171,0.13)', 'icon' => $icEnvelope],
        ['name' => 'Social Growth', 'abbr' => 'SOC', 'color' => '#42b883', 'bg' => 'rgba(66,184,131,0.13)', 'icon' => $icRocket],
        ['name' => 'Content Marketing', 'abbr' => 'CNT', 'color' => '#61dafb', 'bg' => 'rgba(97,218,251,0.13)', 'icon' => $icPen],
        ['name' => 'Ad Campaigns', 'abbr' => 'ADS', 'color' => '#68a063', 'bg' => 'rgba(104,160,99,0.13)', 'icon' => $icAd],
        ['name' => 'Conversion Funnels', 'abbr' => 'CVR', 'color' => '#ff2d20', 'bg' => 'rgba(255,45,32,0.13)', 'icon' => $icChartPie],
    ];
    $techCol4 = [
        ['name' => 'Brand Strategy', 'abbr' => 'BRAND', 'color' => '#1572b6', 'bg' => 'rgba(21,114,182,0.13)', 'icon' => $icPalette],
        ['name' => 'Audience Targeting', 'abbr' => 'AUD', 'color' => '#42b883', 'bg' => 'rgba(66,184,131,0.13)', 'icon' => $icUsers],
        ['name' => 'Growth Hacking', 'abbr' => 'GRW', 'color' => '#ff2d20', 'bg' => 'rgba(255,45,32,0.13)', 'icon' => $icRocket],
        ['name' => 'Content Planning', 'abbr' => 'PLAN', 'color' => '#21759b', 'bg' => 'rgba(33,117,155,0.13)', 'icon' => $icPen],
        ['name' => 'CRM & Retention', 'abbr' => 'CRM', 'color' => '#777bb4', 'bg' => 'rgba(119,123,180,0.13)', 'icon' => $icCogs],
        ['name' => 'Performance Tracking', 'abbr' => 'DATA', 'color' => '#f7df1e', 'bg' => 'rgba(247,223,30,0.13)', 'icon' => $icChartLine],
    ];

    /* ─── TICKER BAND ITEMS ─── */
    $tickerItems = [
        ['label' => 'Custom Websites', 'icon' => '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="14" rx="2" /><path d="M8 21h8M12 17v4" /></svg>'],
        ['label' => 'Scalable Solutions', 'icon' => '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12" /></svg>'],
        ['label' => 'SEO Optimized', 'icon' => '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8" /><line x1="21" y1="21" x2="16.65" y2="16.65" /></svg>'],
        ['label' => 'Fast Performance', 'icon' => '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z" /></svg>'],
        ['label' => 'Secure Systems', 'icon' => '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" /></svg>'],
        ['label' => 'React & Next.js', 'icon' => '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6" /><polyline points="8 6 2 12 8 18" /></svg>'],
    ];

    /* ─── MARKETING SERVICE CARDS ─── */
    $developmentServices = [
        ['title' => 'Social Media Marketing', 'perfectFor' => 'Small businesses, startups, and eCommerce brands wanting organic growth and strong brand presence.', 'technologies' => ['Multi-platform content strategy', 'Engaging posts & captions', 'Hashtag optimization', 'Monthly performance reports'], 'icon' => '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" /></svg>'],
        ['title' => 'Media Buying & Paid Ads', 'perfectFor' => 'Businesses ready to invest in paid traffic, eCommerce stores, and lead generation businesses.', 'technologies' => ['Campaign setup & management', 'Audience targeting', 'Ad creatives optimization', 'Performance tracking'], 'icon' => '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10" /><line x1="12" y1="16" x2="12" y2="12" /><line x1="12" y1="8" x2="12.01" y2="8" /></svg>'],
        ['title' => 'SEO & AEO Optimization', 'perfectFor' => 'Businesses wanting long-term organic visibility on Google and AI search platforms.', 'technologies' => ['Keyword & AI-intent research', 'On-page SEO optimization', 'Technical SEO improvements', 'Backlink building'], 'icon' => '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8" /><line x1="21" y1="21" x2="16.65" y2="16.65" /></svg>'],
        ['title' => 'Email Marketing', 'perfectFor' => 'Businesses looking to nurture leads and build long-term customer relationships.', 'technologies' => ['Campaign design & automation', 'Audience segmentation', 'Performance tracking', 'Conversion optimization'], 'icon' => '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" /><polyline points="22,6 12,13 2,6" /></svg>'],
    ];

    /* ─── BUILD STEPS ─── */
    $buildSteps = [
        ['num' => '01', 'title' => 'Strategy & Discovery', 'desc' => 'We research your market, audience, and competitors to build a custom marketing blueprint.', 'tag' => 'Strategy', 'icon' => '<svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8" /><line x1="21" y1="21" x2="16.65" y2="16.65" /></svg>'],
        ['num' => '02', 'title' => 'Creative & Content', 'desc' => 'Our team crafts high-converting visuals and copy tailored to your brand voice.', 'tag' => 'Creative', 'icon' => '<svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9M16.5 3.5a2.121 2.121 0 013 3L7 19l-4 1 1-4L16.5 3.5z" /></svg>'],
        ['num' => '03', 'title' => 'Launch & Execution', 'desc' => 'Campaigns go live across all selected channels with precision targeting and tracking.', 'tag' => 'Execution', 'icon' => '<svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6" /><polyline points="8 6 2 12 8 18" /></svg>'],
        ['num' => '04', 'title' => 'Analysis & Optimization', 'desc' => 'Continuous monitoring and data-driven adjustments to ensure maximum ROI.', 'tag' => 'Growth', 'icon' => '<svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z" /></svg>'],
    ];

    /* ─── PRICING CARDS ─── */
    $pricingCards = [
        ['title' => 'Social Media Marketing', 'tier' => 'Organic', 'price' => '$300', 'desc' => 'Package 4A — Grow your brand with content that connects, engages, and converts across social platforms.', 'features' => ['3 platforms (choose any)', '12 posts/month', 'Static graphics + captions', 'Hashtag strategy', 'Monthly report', 'Add-on: Extra platform (+$50/mo)', 'Add-on: Additional video/reel ($40/video)', 'Add-on: Profile setup & branding ($150 one-time)'], 'ticker1' => ['Instagram', 'FB', 'TikTok', 'LinkedIn', 'Pinterest'], 'ticker2' => ['Canva', 'Later', 'Hootsuite', 'Metricool', 'Buffer'], 'highlight' => false, 'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" /></svg>'],
        ['title' => 'Media Buying & Paid Ads', 'tier' => 'Advertising', 'price' => '$300', 'desc' => 'Package 4B — Ad budget $300–$500. Data-driven advertising designed to maximize ROI and scale efficiently.', 'features' => ['1 platform (Meta, Google, or TikTok)', 'Campaign setup', '2 ad creatives/month', 'Basic targeting', 'Monthly report', 'Important: Ad budget paid by client', 'Add-on: Extra ad creative ($35)', 'Add-on: Full video ad production ($80 per video)'], 'ticker1' => ['Meta Ads', 'Google Ads', 'TikTok Ads', 'YouTube Ads'], 'ticker2' => ['Ad Manager', 'Planner', 'Tag Manager', 'Analytics'], 'highlight' => false, 'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10" /><line x1="12" y1="16" x2="12" y2="12" /><line x1="12" y1="8" x2="12.01" y2="8" /></svg>'],
        ['title' => 'Full Digital Growth Bundle', 'tier' => 'Bundle', 'price' => '$750', 'desc' => 'The complete solution: Social Media Marketing + Media Buying (1 platform).', 'features' => ['Social Media Marketing', 'Media Buying (1 platform)', 'Integrated strategy', 'Monthly strategy sync', 'Cross-channel reporting', 'Dedicated account manager'], 'ticker1' => ['Meta', 'Google', 'TikTok', 'Email'], 'ticker2' => ['Klaviyo', 'HubSpot', 'Zapier', 'CRM'], 'highlight' => true, 'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z" /></svg>'],
        ['title' => 'SEO & AEO', 'tier' => 'Organic', 'price' => '$199', 'desc' => 'Rank higher on search engines and AI platforms like ChatGPT and Gemini.', 'features' => ['AI-intent keyword research', 'GEO-targeted SEO', 'On-page SEO (5 pages)', 'AEO optimization', 'Google Business Profile', 'Local citations', 'Technical SEO check', '5 backlinks'], 'ticker1' => ['Google Search', 'ChatGPT', 'Gemini', 'Bing'], 'ticker2' => ['Ahrefs', 'SEMrush', 'Moz', 'Search Console'], 'highlight' => false, 'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8" /><line x1="21" y1="21" x2="16.65" y2="16.65" /></svg>'],
        ['title' => 'Google Ads Management', 'tier' => 'Search', 'price' => '$400', 'desc' => 'High-intent search campaign management for maximum lead quality.', 'features' => ['Search campaign setup', 'Keyword research', 'Ad copy creation', 'Conversion tracking', 'Targeting setup', 'Monthly optimization', 'Engagement tracking', 'Basic automation'], 'ticker1' => ['Google Ads', 'Search', 'PMax', 'Shopping'], 'ticker2' => ['Analytics 4', 'GTM', 'Optimizer', 'Merchant Center'], 'highlight' => false, 'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6" /></svg>'],
        ['title' => 'Email Marketing', 'tier' => 'Nurture', 'price' => '$200', 'desc' => 'Convert subscribers into loyal customers with strategic email campaigns.', 'features' => ['Up to 24 campaigns/year', 'Template design', 'List setup', 'Monthly report', 'Engagement tracking', 'Basic automation', 'Targeting setup', 'Monthly optimization'], 'ticker1' => ['Mailchimp', 'Klaviyo', 'ActiveCampaign', 'SendGrid'], 'ticker2' => ['Automation', 'Copywriting', 'Design', 'Strategy'], 'highlight' => false, 'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" /><polyline points="22,6 12,13 2,6" /></svg>'],
    ];

    $tickerMask = 'overflow:hidden;width:100%;-webkit-mask-image:linear-gradient(90deg, transparent 0%, black 12%, black 88%, transparent 100%);mask-image:linear-gradient(90deg, transparent 0%, black 12%, black 88%, transparent 100%)';
    $tickerStyle = 'display:flex;width:max-content;gap:6px;padding:2px 0;animation:tickerScroll 22s linear infinite';
    $tickerStyle2 = 'display:flex;width:max-content;gap:6px;padding:2px 0;animation:tickerScroll 18s linear infinite';
@endphp

<div class="pw-services-marketing">
    <main style="padding-top:80px;background:var(--bg);color:var(--text);--accent-theme:var(--accent-color);--btn-text:#ffffff;--btn-shadow:rgba(216,29,31,0.3)">

        {{-- HERO — TICKER LAYOUT --}}
        <section class="dev-hero">
            <div class="dev-hero-inner">

                {{-- LEFT: Tickers 1 & 2 --}}
                <div class="dev-hero-ticker-group dev-ticker-left">
                    <div class="dev-v-ticker-col" style="height:520px">
                        <div class="dev-v-ticker-track dev-v-ticker-track-up" style="--spd:22s">
                            @foreach(array_merge($techCol1, $techCol1) as $t)
                                <div class="dev-tech-card">
                                    <div class="dev-tech-icon-wrap" style="background:{{ $t['bg'] }};color:{{ $t['color'] }}">{!! $t['icon'] !!}</div>
                                    <div class="dev-tech-card-info">
                                        <span class="dev-tech-card-name">{{ $t['name'] }}</span>
                                        <span class="dev-tech-card-abbr">{{ $t['abbr'] }}</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="dev-v-ticker-col" style="height:520px">
                        <div class="dev-v-ticker-track dev-v-ticker-track-down" style="--spd:26s">
                            @foreach(array_merge($techCol2, $techCol2) as $t)
                                <div class="dev-tech-card">
                                    <div class="dev-tech-icon-wrap" style="background:{{ $t['bg'] }};color:{{ $t['color'] }}">{!! $t['icon'] !!}</div>
                                    <div class="dev-tech-card-info">
                                        <span class="dev-tech-card-name">{{ $t['name'] }}</span>
                                        <span class="dev-tech-card-abbr">{{ $t['abbr'] }}</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- MIDDLE: Content --}}
                <div class="dev-hero-content">
                    <div style="display:flex;flex-direction:column;align-items:center;margin-bottom:24px">
                        <div class="dev-hero-badge-row" style="align-items:flex-start">
                            <div style="display:flex;flex-direction:column;align-items:center">
                                <div class="dev-hero-robot-badge">{!! $robot !!}</div>
                                <div class="dev-hero-divider" style="margin:12px 0 0;width:48px"></div>
                            </div>
                            <div class="dev-hero-label-pill" style="margin-top:6px">
                                <span class="dev-hero-label-dot"></span>
                                <span class="dev-hero-label-text">Marketing Services</span>
                            </div>
                        </div>
                        <h1 class="dev-hero-heading" style="text-align:center;margin-top:24px;margin-bottom:0">
                            We Build<br>
                            <span class="dev-hero-accent">Strategic</span><br>
                            Growth
                        </h1>
                    </div>

                    <p class="dev-hero-desc">
                        From data-driven social strategies to precision SEO —
                        we craft scalable, high-performance marketing machines that drive real ROI.
                    </p>

                    <div class="dev-hero-cta-row">
                        <a href="/contact" class="dev-hero-btn">
                            Contact Us
                            {!! $arrowIcon !!}
                        </a>
                    </div>
                </div>

                {{-- RIGHT: Tickers 3 & 4 --}}
                <div class="dev-hero-ticker-group dev-ticker-right">
                    <div class="dev-v-ticker-col" style="height:520px">
                        <div class="dev-v-ticker-track dev-v-ticker-track-down" style="--spd:28s">
                            @foreach(array_merge($techCol3, $techCol3) as $t)
                                <div class="dev-tech-card">
                                    <div class="dev-tech-icon-wrap" style="background:{{ $t['bg'] }};color:{{ $t['color'] }}">{!! $t['icon'] !!}</div>
                                    <div class="dev-tech-card-info">
                                        <span class="dev-tech-card-name">{{ $t['name'] }}</span>
                                        <span class="dev-tech-card-abbr">{{ $t['abbr'] }}</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="dev-v-ticker-col" style="height:520px">
                        <div class="dev-v-ticker-track dev-v-ticker-track-up" style="--spd:34s">
                            @foreach(array_merge($techCol4, $techCol4) as $t)
                                <div class="dev-tech-card">
                                    <div class="dev-tech-icon-wrap" style="background:{{ $t['bg'] }};color:{{ $t['color'] }}">{!! $t['icon'] !!}</div>
                                    <div class="dev-tech-card-info">
                                        <span class="dev-tech-card-name">{{ $t['name'] }}</span>
                                        <span class="dev-tech-card-abbr">{{ $t['abbr'] }}</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </section>

        {{-- TICKER BAND --}}
        <div class="wd-ticker">
            <div class="wd-ticker-track">
                @for($rep = 0; $rep < 4; $rep++)
                    <div style="display:flex;align-items:center">
                        @foreach($tickerItems as $item)
                            <div class="wd-ticker-item">
                                <span class="wd-ticker-dot"></span>
                                <span style="display:flex;align-items:center;opacity:0.85">{!! $item['icon'] !!}</span>
                                {{ $item['label'] }}
                            </div>
                        @endforeach
                    </div>
                @endfor
            </div>
        </div>

        {{-- OUR EXPERTISE — TWO COLUMN --}}
        <section class="wd-section">
            <div class="wd-inner">
                <div class="dev-intro-two-col reveal">

                    <div style="display:flex;flex-direction:column;align-items:flex-start;margin-bottom:24px">
                        <div class="wd-label-row" style="align-items:flex-start">
                            <div style="display:flex;flex-direction:column;align-items:center">
                                <div class="wd-robot-badge">{!! $robot !!}</div>
                                <div class="wd-section-divider" style="margin:12px 0 0;width:48px"></div>
                            </div>
                            <div class="wd-label-pill" style="margin-top:6px"><span class="wd-label-dot"></span><span class="wd-label-text">Our Expertise</span></div>
                        </div>
                        <h2 class="wd-intro-heading" style="margin:24px 0 0">We Build Marketing Solutions That Drive Real Results</h2>
                        <p class="wd-intro-text">From data-driven social strategies to precision SEO, our team crafts marketing campaigns that resonate with your audience. We combine technical excellence with strategic thinking — ensuring every campaign serves your goals.</p>
                        <div style="display:flex;align-items:center;gap:28px;margin-top:14px;flex-wrap:wrap">
                            <a href="/contact" class="dev-hero-btn">
                                Contact Us
                                {!! $arrowIcon !!}
                            </a>
                            <div class="wd-intro-stat">
                                <strong>150+</strong>
                                <span>Projects Delivered</span>
                            </div>
                        </div>
                    </div>

                    <a href="/staff" class="dev-staff-card">
                        <div class="dev-staff-card-badge">
                            <span class="dev-staff-card-badge-dot"></span>
                            Now Hiring
                        </div>

                        <h3 class="dev-staff-card-title">
                            Scale Your Team with<br>
                            <span class="dev-staff-card-accent">Staff Augmentation</span>
                        </h3>

                        <p class="dev-staff-card-desc">
                            Need expert developers without the overhead of full-time hiring? Our staff augmentation service gives you instant access to vetted, senior-level engineers who integrate seamlessly into your team.
                        </p>

                        <ul class="dev-staff-perks">
                            @foreach(['Dedicated developers, designers & QA engineers', 'Flexible engagement — part-time or full-time', 'Onboard in 48 hours — no lengthy hiring cycles', 'Work in your timezone, your tools, your process', 'React, Node.js, Laravel, Flutter & more'] as $perk)
                                <li class="dev-staff-perk">
                                    <span class="dev-staff-perk-dot"></span>
                                    {{ $perk }}
                                </li>
                            @endforeach
                        </ul>

                        <div class="dev-staff-cta">
                            Explore Staff Augmentation
                        </div>
                    </a>

                </div>
            </div>
        </section>

        {{-- MARKETING SERVICES CARDS --}}
        <section class="ds-section">
            <div class="ds-inner">
                <div class="reveal">
                    <div class="wd-label-row">
                        <div class="wd-robot-badge">{!! $robot !!}</div>
                        <div class="wd-label-pill"><span class="wd-label-dot"></span><span class="wd-label-text">Our Solutions</span></div>
                    </div>
                    <div class="wd-section-divider"></div>
                    <h2 class="wd-section-heading">Marketing Services</h2>
                    <p class="wd-section-sub">We don't just run ads; we build growth engines. From high-impact social campaigns to precision-targeted SEO, our solutions are designed to scale your brand profitably.</p>
                </div>

                <div class="ds-grid">
                    @foreach($developmentServices as $svc)
                        <div class="ds-card-v2 reveal">
                            <div class="ds-v2-icon-wrap">{!! $svc['icon'] !!}</div>
                            <h3 class="ds-v2-title">{{ $svc['title'] }}</h3>
                            <p class="ds-v2-perfect-label">Perfect for</p>
                            <p class="ds-v2-perfect-text">{{ $svc['perfectFor'] }}</p>
                            <div class="ds-v2-divider"></div>
                            <p class="ds-v2-tech-label">Technologies</p>
                            <div class="ds-v2-tech-pills">
                                @foreach($svc['technologies'] as $tech)
                                    <span class="ds-v2-pill">{{ $tech }}</span>
                                @endforeach
                            </div>
                            <a href="/contact" class="ds-v2-cta">Get Started</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- HOW WE BUILD --}}
        <section class="wd-section" style="overflow:hidden">
            <div class="wd-inner">
                <div class="reveal">
                    <div style="display:flex;flex-direction:column;align-items:flex-start;margin-bottom:24px">
                        <div class="wd-label-row" style="align-items:flex-start">
                            <div style="display:flex;flex-direction:column;align-items:center">
                                <div class="wd-robot-badge">{!! $robot !!}</div>
                                <div class="wd-section-divider" style="margin:12px 0 0;width:48px"></div>
                            </div>
                            <div class="wd-label-pill" style="margin-top:6px"><span class="wd-label-dot"></span><span class="wd-label-text">Our Methodology</span></div>
                        </div>
                        <h2 class="wd-section-heading" style="margin:24px 0 0">How We Build Scalable Solutions</h2>
                    </div>
                    <p class="wd-section-sub">A proven, structured process — from initial discovery to flawless deployment, every phase is intentional and precise.</p>
                </div>
                <div class="hwb-flow">
                    <div class="hwb-connector">
                        <div class="hwb-connector-fill"></div>
                    </div>
                    @foreach($buildSteps as $s)
                        <div class="hwb-step reveal">
                            <span class="hwb-num-bg">{{ $s['num'] }}</span>
                            <div class="hwb-icon-ring">{!! $s['icon'] !!}</div>
                            <div class="hwb-step-body">
                                <h3 class="hwb-step-title">{{ $s['title'] }}</h3>
                                <p class="hwb-step-desc">{{ $s['desc'] }}</p>
                                <span class="hwb-step-tag">{{ $s['tag'] }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- PRICING --}}
        <section class="pc-section">
            <div class="ds-inner">
                <div class="reveal" style="display:flex;flex-direction:column;align-items:flex-start;margin-bottom:24px">
                    <div class="wd-label-row" style="align-items:flex-start">
                        <div style="display:flex;flex-direction:column;align-items:center">
                            <div class="wd-robot-badge">{!! $robot !!}</div>
                            <div class="wd-section-divider" style="margin:12px 0 0;width:48px"></div>
                        </div>
                        <div class="wd-label-pill" style="margin-top:6px"><span class="wd-label-dot"></span><span class="wd-label-text">Pricing</span></div>
                    </div>
                    <h2 class="wd-section-heading" style="margin:24px 0 0">Flexible Marketing Plans</h2>
                    <p class="wd-section-sub" style="margin:12px 0 0">Choose a strategy that fits your growth stage — no long-term contracts, just results-driven marketing.</p>
                </div>

                <div class="pc-grid">
                    @foreach($pricingCards as $plan)
                        <div class="pc-card reveal {{ $plan['highlight'] ? 'pc-card--highlight' : '' }}">
                            @if($plan['highlight'])
                                <div class="pc-popular-badge">Most Popular</div>
                            @endif
                            <div class="pc-card-topbar"></div>
                            <div class="pc-card-header">
                                <div class="pc-card-icon-wrap">{!! $plan['icon'] !!}</div>
                                <div>
                                    <div class="pc-tier-label">{{ $plan['tier'] }}</div>
                                    <h3 class="pc-card-title">{{ $plan['title'] }}</h3>
                                </div>
                            </div>
                            <div class="pc-price-row">
                                <span class="pc-price">{{ $plan['price'] }}</span>
                                <span class="pc-price-note">/ mo</span>
                            </div>
                            <p class="pc-desc">{{ $plan['desc'] }}</p>

                            <div class="pc-ticker-block">
                                <span class="pc-ticker-label">Tech Stack</span>
                                <div class="pc-ticker-wrap pc-ticker--light">
                                    <div style="{{ $tickerMask }}">
                                        <div style="{{ $tickerStyle }}">
                                            @foreach(array_merge($plan['ticker1'], $plan['ticker1']) as $t)
                                                <span class="ds-v2-pill" style="font-size:0.64rem;padding:4px 12px;border-width:1px;opacity:0.9">{{ $t }}</span>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="pc-ticker-block">
                                <span class="pc-ticker-label">Tools & Integrations</span>
                                <div class="pc-ticker-wrap pc-ticker--light">
                                    <div style="{{ $tickerMask }}">
                                        <div style="{{ $tickerStyle2 }}">
                                            @foreach(array_merge($plan['ticker2'], $plan['ticker2']) as $t)
                                                <span class="ds-v2-pill" style="font-size:0.64rem;padding:4px 12px;border-width:1px;opacity:0.9">{{ $t }}</span>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="pc-divider"></div>

                            <ul class="pc-features">
                                @foreach($plan['features'] as $f)
                                    <li class="pc-feat-item">
                                        <span class="pc-feat-check">
                                            <svg width="9" height="9" viewBox="0 0 10 10" fill="none">
                                                <path d="M1.5 5l2.5 2.5 4.5-5" stroke="var(--accent-theme, #D81D1F)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                        {{ $f }}
                                    </li>
                                @endforeach
                            </ul>

                            <a href="/contact" class="pc-btn">Contact Us</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

    </main>
</div>
@endsection

@push('scripts')
<script>
(function () {
    var scope = document.querySelector('.pw-services-marketing');
    if (!scope) return;

    /* Reveal-on-scroll (content visible by default; adds animation class) */
    var reveals = scope.querySelectorAll('.reveal');
    if ('IntersectionObserver' in window) {
        var io = new IntersectionObserver(function (entries) {
            entries.forEach(function (e) { if (e.isIntersecting) { e.target.classList.add('visible'); io.unobserve(e.target); } });
        }, { threshold: 0.05, rootMargin: '0px 0px -50px 0px' });
        reveals.forEach(function (el) { io.observe(el); });
    } else {
        reveals.forEach(function (el) { el.classList.add('visible'); });
    }

    /* How-we-build connector fill on view */
    var flow = scope.querySelector('.hwb-flow');
    if (flow && 'IntersectionObserver' in window) {
        var fill = flow.querySelector('.hwb-connector-fill');
        var fo = new IntersectionObserver(function (entries) {
            if (entries[0].isIntersecting && fill) { fill.classList.add('hwb-connector-filled'); fo.disconnect(); }
        }, { threshold: 0.3 });
        fo.observe(flow);
    }
})();
</script>
@endpush
