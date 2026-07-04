<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');

Route::get('/services', [App\Http\Controllers\ServicesController::class, 'index'])->name('services');
Route::get('/services/development', [App\Http\Controllers\ServicesController::class, 'development'])->name('services.development');
Route::get('/services/design', [App\Http\Controllers\ServicesController::class, 'design'])->name('services.design');
Route::get('/services/marketing', [App\Http\Controllers\ServicesController::class, 'marketing'])->name('services.marketing');
Route::get('/services/ai', [App\Http\Controllers\ServicesController::class, 'ai'])->name('services.ai');


Route::get('/blog', function () {
    // Mock blog post data based on standard blog data
    $posts = [
        ['id' => 1, 'title' => 'Mastering AI Automation', 'excerpt' => 'Learn how to leverage AI automation to scale your business operations efficiently.', 'date' => 'July 1, 2026', 'tag' => 'Automation', 'image' => asset('assets/ind1.webp')],
        ['id' => 2, 'title' => 'The Future of Web Design', 'excerpt' => 'Exploring upcoming trends in web design, focusing on glassmorphism and rich aesthetics.', 'date' => 'June 25, 2026', 'tag' => 'Design', 'image' => asset('assets/ind2.webp')],
        ['id' => 3, 'title' => 'Building Scalable APIs', 'excerpt' => 'A comprehensive guide to building scalable, high-performance APIs for modern web applications.', 'date' => 'June 18, 2026', 'tag' => 'Development', 'image' => asset('assets/ind3.webp')],
        ['id' => 4, 'title' => 'Effective Brand Strategy', 'excerpt' => 'How to build a compelling brand strategy that resonates with your target audience.', 'date' => 'June 10, 2026', 'tag' => 'Branding', 'image' => asset('assets/ind4.webp')],
        ['id' => 5, 'title' => 'Advanced CSS Animations', 'excerpt' => 'Dive deep into CSS animations to bring your web interfaces to life.', 'date' => 'June 5, 2026', 'tag' => 'Animation', 'image' => asset('assets/ind5.webp')],
        ['id' => 6, 'title' => 'Typography in UI Design', 'excerpt' => 'Understanding the critical role of typography in creating intuitive user interfaces.', 'date' => 'May 28, 2026', 'tag' => 'Typography', 'image' => asset('assets/ind6.webp')],
        ['id' => 7, 'title' => 'Color Psychology', 'excerpt' => 'How different colors impact user behavior and decision making in digital products.', 'date' => 'May 20, 2026', 'tag' => 'Color', 'image' => asset('assets/ind7.webp')],
        ['id' => 8, 'title' => 'Optimizing Web Performance', 'excerpt' => 'Techniques for improving page load times and overall web performance.', 'date' => 'May 12, 2026', 'tag' => 'Development', 'image' => asset('assets/ind8.webp')],
        ['id' => 9, 'title' => 'Digital Marketing Trends', 'excerpt' => 'Stay ahead of the curve with the latest trends in digital marketing.', 'date' => 'May 5, 2026', 'tag' => 'Marketing', 'image' => asset('assets/ind1.webp')],
        ['id' => 10, 'title' => 'UX Research Methods', 'excerpt' => 'Proven UX research methods to understand your users better.', 'date' => 'April 28, 2026', 'tag' => 'Design', 'image' => asset('assets/ind2.webp')],
        ['id' => 11, 'title' => 'Scaling Node.js Apps', 'excerpt' => 'Best practices for scaling Node.js applications in production environments.', 'date' => 'April 20, 2026', 'tag' => 'Development', 'image' => asset('assets/ind3.webp')],
        ['id' => 12, 'title' => 'Creating Brand Guidelines', 'excerpt' => 'A step-by-step guide to creating comprehensive brand guidelines.', 'date' => 'April 15, 2026', 'tag' => 'Branding', 'image' => asset('assets/ind4.webp')],
    ];

    return view('blog', ['posts' => $posts]);
})->name('blog');

Route::get('/blog/detail', function () {
    $posts = [
        ['id' => 1,  'title' => 'Mastering AI Automation',     'excerpt' => 'Learn how to leverage AI automation to scale your business operations efficiently.',            'date' => 'July 1, 2026',    'tag' => 'Automation',  'readTime' => '6 min read', 'image' => asset('assets/ind1.webp')],
        ['id' => 2,  'title' => 'The Future of Web Design',    'excerpt' => 'Exploring upcoming trends in web design, focusing on glassmorphism and rich aesthetics.',        'date' => 'June 25, 2026',   'tag' => 'Design',      'readTime' => '5 min read', 'image' => asset('assets/ind2.webp')],
        ['id' => 3,  'title' => 'Building Scalable APIs',      'excerpt' => 'A comprehensive guide to building scalable, high-performance APIs for modern web applications.', 'date' => 'June 18, 2026',   'tag' => 'Development', 'readTime' => '8 min read', 'image' => asset('assets/ind3.webp')],
        ['id' => 4,  'title' => 'Effective Brand Strategy',    'excerpt' => 'How to build a compelling brand strategy that resonates with your target audience.',             'date' => 'June 10, 2026',   'tag' => 'Branding',    'readTime' => '5 min read', 'image' => asset('assets/ind4.webp')],
        ['id' => 5,  'title' => 'Advanced CSS Animations',     'excerpt' => 'Dive deep into CSS animations to bring your web interfaces to life.',                           'date' => 'June 5, 2026',    'tag' => 'Animation',   'readTime' => '7 min read', 'image' => asset('assets/ind5.webp')],
        ['id' => 6,  'title' => 'Typography in UI Design',     'excerpt' => 'Understanding the critical role of typography in creating intuitive user interfaces.',            'date' => 'May 28, 2026',    'tag' => 'Typography',  'readTime' => '5 min read', 'image' => asset('assets/ind6.webp')],
        ['id' => 7,  'title' => 'Color Psychology',            'excerpt' => 'How different colors impact user behavior and decision making in digital products.',              'date' => 'May 20, 2026',    'tag' => 'Color',       'readTime' => '4 min read', 'image' => asset('assets/ind7.webp')],
        ['id' => 8,  'title' => 'Optimizing Web Performance',  'excerpt' => 'Techniques for improving page load times and overall web performance.',                          'date' => 'May 12, 2026',    'tag' => 'Development', 'readTime' => '9 min read', 'image' => asset('assets/ind8.webp')],
        ['id' => 9,  'title' => 'Digital Marketing Trends',    'excerpt' => 'Stay ahead of the curve with the latest trends in digital marketing.',                          'date' => 'May 5, 2026',     'tag' => 'Marketing',   'readTime' => '6 min read', 'image' => asset('assets/ind1.webp')],
        ['id' => 10, 'title' => 'UX Research Methods',         'excerpt' => 'Proven UX research methods to understand your users better.',                                    'date' => 'April 28, 2026',  'tag' => 'Design',      'readTime' => '5 min read', 'image' => asset('assets/ind2.webp')],
        ['id' => 11, 'title' => 'Scaling Node.js Apps',        'excerpt' => 'Best practices for scaling Node.js applications in production environments.',                    'date' => 'April 20, 2026',  'tag' => 'Development', 'readTime' => '7 min read', 'image' => asset('assets/ind3.webp')],
        ['id' => 12, 'title' => 'Creating Brand Guidelines',   'excerpt' => 'A step-by-step guide to creating comprehensive brand guidelines.',                               'date' => 'April 15, 2026',  'tag' => 'Branding',    'readTime' => '5 min read', 'image' => asset('assets/ind4.webp')],
    ];

    $id = request('id');
    $post = collect($posts)->firstWhere('id', (int) $id) ?? $posts[0];

    // Generate fallback sections from post data
    $post['sections'] = [
        ['heading' => 'Overview',             'body' => $post['excerpt']],
        ['heading' => 'Key Principles',       'body' => 'Great execution starts with a solid foundation. Understanding the core principles allows teams to make better decisions faster — and to course-correct gracefully when the unexpected happens.'],
        ['heading' => 'Practical Application','body' => 'Theory only takes you so far. The real value emerges when these concepts are applied to real-world challenges: tight deadlines, legacy constraints, and teams with varying levels of experience.'],
        ['heading' => 'Moving Forward',       'body' => 'Continuous improvement is the goal. By iterating, measuring, and listening closely to your audience, you create a product that gets better with every cycle — and a team that grows alongside it.'],
    ];

    $faqs = [
        ['q' => 'What technologies do you use to build modern web applications?',  'a' => 'We primarily work with Next.js, React, and Tailwind CSS for front-end development. On the backend we leverage Node.js, PostgreSQL, and cloud infrastructure on AWS and Vercel — ensuring scalable, maintainable, and performant solutions for every project.'],
        ['q' => 'How long does a typical project take from kickoff to launch?',    'a' => 'Project timelines vary based on scope and complexity. A focused landing page or blog can ship in 1–2 weeks, while a full-featured SaaS product typically spans 8–16 weeks. We share a detailed roadmap during our discovery phase so you always know what to expect.'],
        ['q' => 'Do you offer post-launch support and maintenance?',               'a' => 'Absolutely. We offer flexible retainer packages covering bug fixes, performance monitoring, feature iterations, and security updates. Our goal is to be a long-term partner, not just a delivery team.'],
        ['q' => 'Can you work with an existing codebase or design system?',        'a' => 'Yes — we regularly integrate with existing codebases, component libraries, and design systems. We conduct a thorough audit before committing to a scope so there are no surprises mid-project.'],
        ['q' => 'How do we get started working together?',                         'a' => 'Simply schedule a meeting using the calendar on this page or email us directly at hello@corammers.com. We\'ll have a free 30-minute discovery call to understand your goals and outline the best path forward.'],
    ];

    return view('blog-detail', compact('post', 'faqs'));
})->name('blog.detail');

Route::get('/industries', function () {
    $industries = [
        ['id'=>'banking',    'name'=>'Banking & Fintech',              'description'=>'We architect secure, scalable financial platforms that meet the most stringent regulatory demands empowering banks and fintechs to innovate without compromise.',               'solutions'=>['Secure payment processing & gateway integration','AI-powered fraud detection & risk scoring','GDPR & PCI-DSS compliance-ready platforms','Open banking APIs & core banking modernization','Digital wallet & neobank infrastructure']],
        ['id'=>'healthcare', 'name'=>'Healthcare & Pharmaceuticals',   'description'=>'Enabling healthcare providers and pharma companies to deliver better patient outcomes through intelligent data platforms, telemedicine, and clinical automation.',        'solutions'=>['HIPAA-compliant EHR/EMR integrations','Telemedicine & virtual consultation platforms','AI-assisted diagnostics & imaging analysis','Drug discovery data pipelines','Patient engagement & care coordination apps']],
        ['id'=>'ecommerce',  'name'=>'E-commerce',                     'description'=>'We build high-performance commerce ecosystems that convert browsers into buyers with AI personalization, seamless UX, and infrastructure that scales with demand.',          'solutions'=>['Scalable multi-vendor storefronts','AI-based product recommendations','Conversion rate & checkout optimization','Inventory & supply-chain automation','Headless commerce architecture']],
        ['id'=>'retail',     'name'=>'Retail & CPG',                   'description'=>'From brick-and-mortar to omnichannel, we help retail and consumer goods brands unify operations and deliver standout in-store and digital experiences.',                    'solutions'=>['Omnichannel retail platform development','Demand forecasting & inventory intelligence','Loyalty programs & customer retention engines','POS modernization & in-store analytics','Supplier portal & procurement automation']],
        ['id'=>'telecom',    'name'=>'Telecommunication',              'description'=>'Helping telecom operators streamline their networks, reduce churn, and deliver next-generation connectivity services through intelligent automation and analytics.',          'solutions'=>['AI-driven network monitoring & fault prediction','Customer churn prediction & retention models','BSS/OSS platform modernization','Cybersecurity frameworks for network infrastructure','Self-service customer portals & CRM integration']],
        ['id'=>'travel',     'name'=>'Travel & Hospitality',           'description'=>'We engineer seamless travel experiences from smart booking engines to real-time personalization helping travel brands delight guests at every touchpoint.',                   'solutions'=>['Booking engine with real-time pricing & availability','Personalized itinerary & recommendation engines','Property & fleet management systems','Loyalty & rewards platform integration','Multi-language, multi-currency B2B/B2C portals']],
        ['id'=>'oil',        'name'=>'Oil, Gas & Energy',              'description'=>'Delivering mission-critical digital solutions for energy companies improving operational efficiency, safety monitoring, and sustainability reporting.',                        'solutions'=>['IoT sensor data ingestion & real-time dashboards','Predictive maintenance & asset lifecycle tracking','Operational efficiency & process automation','HSE (Health, Safety & Environment) compliance tools','Renewable energy management platforms']],
        ['id'=>'public',     'name'=>'Public Sector',                  'description'=>'Modernizing government services through secure, citizen-first digital platforms that improve transparency, efficiency, and public engagement.',                              'solutions'=>['Citizen service portals & e-governance platforms','Secure document management & digital workflows','Grant & procurement management systems','Open data initiatives & analytics dashboards','Accessibility-compliant UI/UX design']],
        ['id'=>'startups',   'name'=>'Startups',                       'description'=>'We are the technical co-founders startups need turning bold ideas into MVPs fast, then scaling them into market-ready products with precision.',                             'solutions'=>['Rapid MVP design, build & launch','Product-market fit iteration & analytics','Cloud-native architecture for scale','Fundraising-ready tech documentation','CTO-as-a-Service & technical advisory']],
    ];

    $useCases = [
        ['iconId'=>'travel',     'industry'=>'Travel',      'title'=>'50K+ Users Booking System',  'desc'=>'Built a distributed travel booking platform handling peak loads of 50,000+ concurrent users with 99.9% uptime.'],
        ['iconId'=>'telecom',    'industry'=>'Telecom',     'title'=>'AI Chatbot for Support',      'desc'=>'Deployed an NLP-powered support chatbot that resolved 68% of tier-1 queries without human intervention.'],
        ['iconId'=>'banking',    'industry'=>'Fintech',     'title'=>'Fraud Reduced by 20%',        'desc'=>'Real-time ML fraud detection model integrated into a payment gateway, reducing fraudulent transactions by 20%.'],
        ['iconId'=>'ecommerce',  'industry'=>'E-commerce',  'title'=>'35% Revenue Growth',          'desc'=>'AI recommendation engine and checkout optimization drove a 35% increase in sales within 90 days of launch.'],
        ['iconId'=>'healthcare', 'industry'=>'Healthcare',  'title'=>'Telemedicine at Scale',       'desc'=>'Built a HIPAA-compliant telemedicine platform serving 200+ clinics with EHR integration and video consultations.'],
        ['iconId'=>'oil',        'industry'=>'Energy',      'title'=>'30% Downtime Reduction',      'desc'=>'Predictive maintenance IoT platform reduced equipment downtime by 30% for an offshore energy operator.'],
    ];

    $challenges = [
        ['industry'=>'Retail',      'problem'=>'Fragmented inventory across 50+ outlets causing stockouts',             'solution'=>'Unified real-time inventory management with automated reorder triggers'],
        ['industry'=>'Oil & Energy','problem'=>'Manual data collection from remote field sensors causing delays',       'solution'=>'IoT-connected dashboards with automated anomaly alerts'],
        ['industry'=>'Banking',     'problem'=>'Legacy core banking slowing digital product launches',                  'solution'=>'API-first middleware layer enabling rapid product iteration'],
        ['industry'=>'Healthcare',  'problem'=>'Siloed patient data across departments and systems',                    'solution'=>'HL7/FHIR-compliant data lake with unified patient 360 view'],
        ['industry'=>'E-commerce',  'problem'=>'High cart abandonment rate (75%) on mobile checkout',                   'solution'=>'Progressive checkout redesign with one-tap payment integration'],
        ['industry'=>'Telecom',     'problem'=>'Reactive network maintenance causing SLA breaches',                     'solution'=>'AI-powered predictive maintenance reducing incidents by 40%'],
    ];

    $stats = [
        ['number'=>'35%',  'suffix'=>'%',  'value'=>35,  'label'=>'Revenue increase for e-commerce client', 'industry'=>'E-commerce'],
        ['number'=>'20%',  'suffix'=>'%',  'value'=>20,  'label'=>'Fraud reduction via AI detection model',  'industry'=>'Fintech'],
        ['number'=>'68%',  'suffix'=>'%',  'value'=>68,  'label'=>'Support queries resolved by AI chatbot',  'industry'=>'Telecom'],
        ['number'=>'50K+', 'suffix'=>'K+', 'value'=>50,  'label'=>'Concurrent users on travel platform',     'industry'=>'Travel'],
        ['number'=>'30%',  'suffix'=>'%',  'value'=>30,  'label'=>'Equipment downtime reduction in energy',  'industry'=>'Energy'],
        ['number'=>'200+', 'suffix'=>'+',  'value'=>200, 'label'=>'Clinics on telemedicine network',         'industry'=>'Healthcare'],
    ];

    $compliance = [
        ['icon'=>'shield', 'title'=>'Data Protection',      'desc'=>'End-to-end encryption, data masking, and zero-trust architecture for all sensitive data at rest and in transit.'],
        ['icon'=>'doc',    'title'=>'Regulatory Compliance', 'desc'=>'GDPR, PCI-DSS, HIPAA, SOC 2, and ISO 27001 frameworks embedded into our development processes from day one.'],
        ['icon'=>'lock',   'title'=>'Secure Architecture',   'desc'=>'Multi-layer security design, regular penetration testing, and vulnerability assessments across all environments.'],
        ['icon'=>'search', 'title'=>'Audit & Monitoring',    'desc'=>'Real-time security monitoring, detailed audit trails, and automated compliance reporting dashboards.'],
        ['icon'=>'globe',  'title'=>'Network Security',      'desc'=>'Firewall management, DDoS protection, and secure API gateway configuration for enterprise infrastructure.'],
        ['icon'=>'chart',  'title'=>'Risk Management',       'desc'=>'Continuous risk assessment, threat modeling, and proactive vulnerability remediation programs.'],
    ];

    $insights = [
        ['tag'=>'Healthcare', 'title'=>'AI in Healthcare: Future Trends',          'desc'=>'How machine learning is reshaping diagnostics, drug discovery, and patient care.',            'readTime'=>'5 min read'],
        ['tag'=>'Banking',    'title'=>'Digital Transformation in Banking',         'desc'=>'The shift to open banking, embedded finance, and cloud-native core systems.',                  'readTime'=>'7 min read'],
        ['tag'=>'Retail',     'title'=>'The Unified Commerce Era',                  'desc'=>'Why retailers are abandoning siloed channels for seamless omnichannel ecosystems.',            'readTime'=>'4 min read'],
        ['tag'=>'Energy',     'title'=>'IoT & the Future of Smart Grids',           'desc'=>'How real-time sensor data is revolutionizing energy distribution and sustainability.',         'readTime'=>'6 min read'],
    ];

    return view('industries', compact('industries','useCases','challenges','stats','compliance','insights'));
})->name('industries');

Route::get('/hire', function () {
    return view('hire');
})->name('hire');

Route::get('/hire/developer', function () {

    $expertise = [
        [
            'icon'   => '<circle cx="13" cy="13" r="11.5" stroke="currentColor" stroke-width="1.4"/><path d="M8 18V9l9.5 11M16 9H9M9 13.5h5.5" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/>',
            'title'  => 'Next.js Development',
            'desc'   => 'High-performance modern web apps built with React and Next.js.',
            'num'    => '01',
            'points' => ['Server-Side Rendering (SSR)', 'API Routes & Middleware', 'Performance Optimization'],
        ],
        [
            'icon'   => '<circle cx="13" cy="13" r="11.5" stroke="currentColor" stroke-width="1.4"/><circle cx="13" cy="13" r="4.5" stroke="currentColor" stroke-width="1.4" stroke-dasharray="2.5 2"/><path d="M13 1.5V5.5M13 20.5V24.5M1.5 13H5.5M20.5 13H24.5" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"/>',
            'title'  => 'WordPress Development',
            'desc'   => 'Custom themes, plugins, and scalable CMS solutions built for growth.',
            'num'    => '02',
            'points' => ['Custom Theme Architecture', 'Plugin Integration & Tuning', 'Scalable CMS Setup'],
        ],
        [
            'icon'   => '<rect x="1" y="1" width="28" height="20" rx="5" stroke="currentColor" stroke-width="1.4"/><text x="15" y="15.5" text-anchor="middle" fill="currentColor" font-size="9.5" font-weight="800" font-family="Courier New,monospace" letter-spacing="1">PHP</text>',
            'title'  => 'PHP Development',
            'desc'   => 'Secure backend systems and dynamic apps using robust PHP build.',
            'num'    => '03',
            'points' => ['MVC Architecture Design', 'Secure API & Backend Dev', 'Database Performance'],
            'viewBox'=> '0 0 30 22',
        ],
        [
            'icon'   => '<path d="M13 2L24 8.5V18.5L13 25L2 18.5V8.5L13 2Z" stroke="currentColor" stroke-width="1.4"/><path d="M13 2V25M2 8.5L24 18.5M24 8.5L2 18.5" stroke="currentColor" stroke-width="1" opacity="0.28"/><circle cx="13" cy="13.5" r="3" fill="currentColor" opacity="0.9"/>',
            'title'  => 'Laravel Development',
            'desc'   => 'Scalable backend development with clean, maintainable architecture.',
            'num'    => '04',
            'points' => ['Eloquent ORM Experts', 'Robust RESTful API Design', 'Automated TDD Workflows'],
        ],
    ];

    $staffRoles = [
        [
            'icon'   => '<circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="1.5"/><circle cx="12" cy="12" r="4" stroke="currentColor" stroke-width="1.5" stroke-dasharray="2.2 1.8"/><path d="M12 2v3M12 19v3M2 12h3M19 12h3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>',
            'title'  => 'WordPress Developer',
            'desc'   => 'Hire top-tier dedicated talent at 20% of US market cost. No contracts, no overhead, no HR. Cancel anytime after a minimum 1-month engagement.',
            'num'    => '01',
            'points' => ['Custom Themes & Plugins', 'WooCommerce Expertise', 'CMS Optimization'],
        ],
        [
            'icon'   => '<path d="M12 2L22 7.5V17.5L12 23L2 17.5V7.5L12 2Z" stroke="currentColor" stroke-width="1.5"/><circle cx="12" cy="12.5" r="2.5" fill="currentColor" opacity="0.85"/>',
            'title'  => 'Laravel Developer',
            'desc'   => 'Hire top-tier dedicated talent at 20% of US market cost. No contracts, no overhead, no HR. Cancel anytime after a minimum 1-month engagement.',
            'num'    => '02',
            'points' => ['RESTful API Development', 'Eloquent ORM & DB Design', 'Queue & Event Systems'],
        ],
        [
            'icon'   => '<circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="1.5"/><path d="M7 17V8l8.5 10M14.5 8H8M8 12.5h5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>',
            'title'  => 'Next.js Developer',
            'desc'   => 'Hire top-tier dedicated talent at 20% of US market cost. No contracts, no overhead, no HR. Cancel anytime after a minimum 1-month engagement.',
            'num'    => '03',
            'points' => ['SSR & Static Generation', 'App Router Architecture', 'Edge & API Middleware'],
        ],
        [
            'icon'   => '<circle cx="12" cy="12" r="2.5" fill="currentColor"/><ellipse cx="12" cy="12" rx="10" ry="4" stroke="currentColor" stroke-width="1.4"/><ellipse cx="12" cy="12" rx="10" ry="4" stroke="currentColor" stroke-width="1.4" transform="rotate(60 12 12)"/><ellipse cx="12" cy="12" rx="10" ry="4" stroke="currentColor" stroke-width="1.4" transform="rotate(120 12 12)"/>',
            'title'  => 'React Developer',
            'desc'   => 'Hire top-tier dedicated talent at 20% of US market cost. No contracts, no overhead, no HR. Cancel anytime after a minimum 1-month engagement.',
            'num'    => '04',
            'points' => ['Component Architecture', 'State Management (Redux)', 'Performance Profiling'],
        ],
        [
            'icon'   => '<path d="M12 2L21 7v10l-9 5L3 17V7l9-5z" stroke="currentColor" stroke-width="1.5"/><path d="M8 10v4M12 9v6M16 10v4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>',
            'title'  => 'Node.js Developer',
            'desc'   => 'Hire top-tier dedicated talent at 20% of US market cost. No contracts, no overhead, no HR. Cancel anytime after a minimum 1-month engagement.',
            'num'    => '05',
            'points' => ['Scalable Microservices', 'Real-Time (Socket.IO)', 'REST & GraphQL APIs'],
        ],
        [
            'icon'   => '<rect x="2" y="3" width="20" height="14" rx="2" stroke="currentColor" stroke-width="1.5"/><path d="M2 7h20M8 21h8M12 17v4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/><path d="M7 11l2 2-2 2M11 13h4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>',
            'title'  => 'Full Stack Developer',
            'desc'   => 'Hire top-tier dedicated talent at 20% of US market cost. No contracts, no overhead, no HR. Cancel anytime after a minimum 1-month engagement.',
            'num'    => '06',
            'points' => ['End-to-End Ownership', 'CI/CD & DevOps Basics', 'Multi-Stack Proficiency'],
        ],
        [
            'icon'   => '<rect x="6" y="2" width="12" height="20" rx="2.5" stroke="currentColor" stroke-width="1.5"/><path d="M10 18h4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/><path d="M9 8l2 2-2 2M13 10h2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>',
            'title'  => 'Mobile App Developer',
            'desc'   => 'Hire top-tier dedicated talent at 20% of US market cost. No contracts, no overhead, no HR. Cancel anytime after a minimum 1-month engagement.',
            'num'    => '07',
            'points' => ['React Native & Flutter', 'iOS & Android Deployment', 'Offline-First Architecture'],
        ],
        [
            'icon'   => '<rect x="3" y="6" width="18" height="12" rx="3" stroke="currentColor" stroke-width="1.5"/><circle cx="8" cy="12" r="1.5" fill="currentColor"/><circle cx="12" cy="12" r="1.5" fill="currentColor"/><circle cx="16" cy="12" r="1.5" fill="currentColor"/><path d="M8 6V3M12 6V3M16 6V3M8 18v3M12 18v3M16 18v3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>',
            'title'  => 'AI / ML Developer',
            'desc'   => 'Hire top-tier dedicated talent at 20% of US market cost. No contracts, no overhead, no HR. Cancel anytime after a minimum 1-month engagement.',
            'num'    => '08',
            'points' => ['LLM & Prompt Engineering', 'Model Training & Fine-tuning', 'AI API Integration'],
        ],
    ];

    $pricingData = [
        ['role' => 'WordPress Developer',  'fullTime' => '$700',   'partTime' => '$380', 'featured' => false],
        ['role' => 'Laravel Developer',    'fullTime' => '$900',   'partTime' => '$480', 'featured' => false],
        ['role' => 'Next.js Developer',    'fullTime' => '$950',   'partTime' => '$500', 'featured' => true],
        ['role' => 'React Developer',      'fullTime' => '$950',   'partTime' => '$500', 'featured' => false],
        ['role' => 'Node.js Developer',    'fullTime' => '$900',   'partTime' => '$480', 'featured' => false],
        ['role' => 'Full Stack Developer', 'fullTime' => '$1,100', 'partTime' => '$580', 'featured' => false],
        ['role' => 'Mobile App Developer', 'fullTime' => '$1,000', 'partTime' => '$530', 'featured' => false],
        ['role' => 'AI / ML Developer',    'fullTime' => '$1,200', 'partTime' => '$630', 'featured' => false],
    ];

    $employees = [
        ['id' => 1, 'name' => 'Fiza Tariq',      'role' => 'UI/UX Designer',         'img' => 'assets/1.webp', 'tag' => 'React · Next.js'],
        ['id' => 2, 'name' => 'Muhammad Junaid',  'role' => 'Social Media Manager',   'img' => 'assets/2.webp', 'tag' => 'On-Page · AEO'],
        ['id' => 3, 'name' => 'Zafar',            'role' => 'Web Developer',          'img' => 'assets/3.webp', 'tag' => 'Figma · Prototyping'],
        ['id' => 4, 'name' => 'Shayan Tariq',     'role' => 'Web Developer',          'img' => 'assets/4.webp', 'tag' => 'Meta · Google Ads'],
        ['id' => 5, 'name' => 'Huzaifa',          'role' => 'Graphic Designer',       'img' => 'assets/5.webp', 'tag' => 'Node.js · Python'],
        ['id' => 6, 'name' => 'Alia',             'role' => 'Marketing Specialist',   'img' => 'assets/6.webp', 'tag' => 'HubSpot · Automation'],
        ['id' => 7, 'name' => 'Zain',             'role' => 'WordPress Developer',    'img' => 'assets/7.webp', 'tag' => 'Illustrator · Branding'],
        ['id' => 8, 'name' => 'Maryam',           'role' => 'Web Developer',          'img' => 'assets/8.webp', 'tag' => 'Premiere · After Effects'],
    ];

    $heroPoints = [
        ['label' => 'Website Development',      'icon' => '<rect x="1" y="3" width="14" height="10" rx="2" stroke="currentColor" stroke-width="1.5"/><path d="M1 6h14" stroke="currentColor" stroke-width="1.5"/><circle cx="3.5" cy="4.5" r=".75" fill="currentColor"/><circle cx="5.5" cy="4.5" r=".75" fill="currentColor"/>'],
        ['label' => 'Ecommerce Development',    'icon' => '<path d="M1 2h2l2 7h7l1.5-5H4.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/><circle cx="7" cy="13" r="1" fill="currentColor"/><circle cx="12" cy="13" r="1" fill="currentColor"/>'],
        ['label' => 'Web Applications',         'icon' => '<path d="M2 9l3-3 2 2 3-3 3 3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><rect x="1" y="2" width="14" height="12" rx="2" stroke="currentColor" stroke-width="1.5"/>'],
        ['label' => 'Mobile App Development',   'icon' => '<rect x="4" y="1" width="8" height="14" rx="2" stroke="currentColor" stroke-width="1.5"/><path d="M7 13h2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>'],
    ];

    $heroStats = [
        ['label' => 'Developers Available', 'value' => '50',  'suffix' => '+', 'sub' => 'Across all tech stacks'],
        ['label' => 'Projects Delivered',   'value' => '200', 'suffix' => '+', 'sub' => 'On time, every time'],
        ['label' => 'Time to Onboard',      'value' => '48',  'suffix' => 'h', 'sub' => 'Fast team integration'],
    ];

    return view('hire-developer', compact(
        'expertise', 'staffRoles', 'pricingData', 'employees', 'heroPoints', 'heroStats'
    ));
})->name('hire.developer');

Route::get('/staff-2', function () {
    return view('staff-2');
})->name('staff-2');

Route::get('/hire/media', function () {
    $heroPoints = [
        ['icon' => '<polyline points="20 6 9 17 4 12" />', 'label' => 'Paid Media Buying'],
        ['icon' => '<polyline points="20 6 9 17 4 12" />', 'label' => 'SEO & AEO'],
        ['icon' => '<polyline points="20 6 9 17 4 12" />', 'label' => 'AI Content Creation'],
        ['icon' => '<polyline points="20 6 9 17 4 12" />', 'label' => 'Analytics & ROI'],
    ];

    $heroStats = [
        ['label' => 'Media & AI Experts', 'value' => '20', 'suffix' => '+', 'sub' => 'Buyers, SEO & AI specialists'],
        ['label' => 'Ad Spend Managed',   'value' => '2',  'suffix' => 'M+', 'sub' => 'Profitable campaigns'],
        ['label' => 'Time to Onboard',    'value' => '48', 'suffix' => 'h', 'sub' => 'Fast team integration'],
    ];

    $staffRoles = [
        [
            'num'   => '01',
            'icon'  => '<path d="M21 12V7H5a2 2 0 0 1 0-4h14v4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M3 5v14a2 2 0 0 0 2 2h16v-9H5a2 2 0 0 0-2 2z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>', // Wallet/Media
            'title' => 'Media Buyer (Meta / Google / TikTok)',
            'desc'  => 'Scale faster with data-driven marketing and AI-powered content strategies designed to deliver measurable results.',
            'points'=> [
                'Paid Ad Campaign Management',
                'A/B Creative Testing',
                'ROAS & CPA Optimization',
            ],
        ],
        [
            'num'   => '02',
            'icon'  => '<circle cx="11" cy="11" r="8" stroke="currentColor" stroke-width="2"/><line x1="21" y1="21" x2="16.65" y2="16.65" stroke="currentColor" stroke-width="2"/>', // Search
            'title' => 'SEO & AEO Specialist',
            'desc'  => 'Scale faster with data-driven marketing and AI-powered content strategies designed to deliver measurable results.',
            'points'=> [
                'Technical SEO Audits',
                'Content & Link Strategy',
                'Featured Snippet Optimization',
            ],
        ],
        [
            'num'   => '03',
            'icon'  => '<path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>', // AI/Sparkle
            'title' => 'AI Content Creator',
            'desc'  => 'Scale faster with data-driven marketing and AI-powered content strategies designed to deliver measurable results.',
            'points'=> [
                'AI-Generated Blog & Copy',
                'Prompt Engineering & Workflows',
                'Multi-Platform Content Scaling',
            ],
        ],
    ];

    $pricingData = [
        [
            'role'     => 'Media Buyer',
            'fullTime' => '$700',
            'partTime' => '$380',
            'featured' => false,
        ],
        [
            'role'     => 'SEO & AEO Specialist',
            'fullTime' => '$600',
            'partTime' => '$320',
            'featured' => false,
        ],
        [
            'role'     => 'AI Content Creator',
            'fullTime' => '$650',
            'partTime' => '$350',
            'featured' => true,
        ],
    ];
    
    // Add dummy employees variable since it's used in view
    $employees = [
        ['id' => 1, 'name' => 'Fiza Tariq',      'role' => 'UI/UX Designer',         'img' => 'assets/1.webp', 'tag' => 'React · Next.js'],
        ['id' => 2, 'name' => 'Muhammad Junaid',  'role' => 'Social Media Manager',   'img' => 'assets/2.webp', 'tag' => 'On-Page · AEO'],
        ['id' => 3, 'name' => 'Zafar',            'role' => 'Web Developer',          'img' => 'assets/3.webp', 'tag' => 'Figma · Prototyping'],
        ['id' => 4, 'name' => 'Shayan Tariq',     'role' => 'Web Developer',          'img' => 'assets/4.webp', 'tag' => 'Meta · Google Ads'],
        ['id' => 5, 'name' => 'Huzaifa',          'role' => 'Graphic Designer',       'img' => 'assets/5.webp', 'tag' => 'Node.js · Python'],
        ['id' => 6, 'name' => 'Alia',             'role' => 'Marketing Specialist',   'img' => 'assets/6.webp', 'tag' => 'HubSpot · Automation'],
        ['id' => 7, 'name' => 'Zain',             'role' => 'WordPress Developer',    'img' => 'assets/7.webp', 'tag' => 'Illustrator · Branding'],
        ['id' => 8, 'name' => 'Maryam',           'role' => 'Web Developer',          'img' => 'assets/8.webp', 'tag' => 'Premiere · After Effects'],
    ];

    return view('hire-media', compact('heroPoints', 'heroStats', 'staffRoles', 'pricingData', 'employees'));
})->name('hire.media');

Route::get('/hire/designer', function () {
    $heroPoints = [
        ['icon' => '<polyline points="20 6 9 17 4 12" />', 'label' => 'UI/UX Design'],
        ['icon' => '<polyline points="20 6 9 17 4 12" />', 'label' => 'Graphic Design'],
        ['icon' => '<polyline points="20 6 9 17 4 12" />', 'label' => 'Video Editing'],
        ['icon' => '<polyline points="20 6 9 17 4 12" />', 'label' => 'Brand Identity'],
    ];

    $heroStats = [
        ['label' => 'Creative Designers', 'value' => '25', 'suffix' => '+', 'sub' => 'UI, Graphics & Video'],
        ['label' => 'Brands Elevated',    'value' => '120', 'suffix' => '+', 'sub' => 'Visually stunning results'],
        ['label' => 'Time to Onboard',    'value' => '48',  'suffix' => 'h', 'sub' => 'Fast team integration'],
    ];

    $staffRoles = [
        [
            'num'   => '01',
            'icon'  => '<rect x="3" y="3" width="18" height="18" rx="2" stroke="currentColor" stroke-width="2"/><circle cx="8.5" cy="8.5" r="1.5" fill="currentColor"/><path d="M21 15l-5-5L5 21" stroke="currentColor" stroke-width="2"/>', // UI/UX
            'title' => 'UI/UX Designer',
            'desc'  => 'Build a powerful visual identity with expert designers focused on creativity, consistency, and conversion.',
            'points'=> [
                'Figma & Prototyping Expertise',
                'Responsive Web Design',
                'User Flow Optimization',
            ],
        ],
        [
            'num'   => '02',
            'icon'  => '<path d="M12 19l7-7 3 3-7 7-3-3z" stroke="currentColor" stroke-width="2"/><path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z" stroke="currentColor" stroke-width="2"/><path d="M2 2l7.586 7.586" stroke="currentColor" stroke-width="2"/>', // Graphic
            'title' => 'Graphic Designer',
            'desc'  => 'Build a powerful visual identity with expert designers focused on creativity, consistency, and conversion.',
            'points'=> [
                'Brand Identity & Logos',
                'Marketing Collateral Design',
                'Social Media Creatives',
            ],
        ],
        [
            'num'   => '03',
            'icon'  => '<polygon points="23 7 16 12 23 17 23 7" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/><rect x="1" y="5" width="15" height="14" rx="2" ry="2" stroke="currentColor" stroke-width="2"/>', // Video
            'title' => 'Video Editor',
            'desc'  => 'Build a powerful visual identity with expert designers focused on creativity, consistency, and conversion.',
            'points'=> [
                'Premiere Pro & After Effects',
                'Short-Form Content (Reels)',
                'Ad Creative Production',
            ],
        ],
    ];

    $pricingData = [
        [
            'role'     => 'UI/UX Designer',
            'fullTime' => '$750',
            'partTime' => '$400',
            'featured' => true,
        ],
        [
            'role'     => 'Graphic Designer',
            'fullTime' => '$600',
            'partTime' => '$320',
            'featured' => false,
        ],
        [
            'role'     => 'Video Editor',
            'fullTime' => '$600',
            'partTime' => '$320',
            'featured' => false,
        ],
    ];

    $employees = [
        ['id' => 1, 'name' => 'Fiza Tariq',      'role' => 'UI/UX Designer',         'img' => 'assets/1.webp', 'tag' => 'React · Next.js'],
        ['id' => 2, 'name' => 'Muhammad Junaid',  'role' => 'Social Media Manager',   'img' => 'assets/2.webp', 'tag' => 'On-Page · AEO'],
        ['id' => 3, 'name' => 'Zafar',            'role' => 'Web Developer',          'img' => 'assets/3.webp', 'tag' => 'Figma · Prototyping'],
        ['id' => 4, 'name' => 'Shayan Tariq',     'role' => 'Web Developer',          'img' => 'assets/4.webp', 'tag' => 'Meta · Google Ads'],
        ['id' => 5, 'name' => 'Huzaifa',          'role' => 'Graphic Designer',       'img' => 'assets/5.webp', 'tag' => 'Node.js · Python'],
        ['id' => 6, 'name' => 'Alia',             'role' => 'Marketing Specialist',   'img' => 'assets/6.webp', 'tag' => 'HubSpot · Automation'],
        ['id' => 7, 'name' => 'Zain',             'role' => 'WordPress Developer',    'img' => 'assets/7.webp', 'tag' => 'Illustrator · Branding'],
        ['id' => 8, 'name' => 'Maryam',           'role' => 'Web Developer',          'img' => 'assets/8.webp', 'tag' => 'Premiere · After Effects'],
    ];

    return view('hire-designer', compact('heroPoints', 'heroStats', 'staffRoles', 'pricingData', 'employees'));
})->name('hire.designer');

Route::get('/hire/marketing', function () {
    $heroPoints = [
        ['icon' => '<polyline points="20 6 9 17 4 12" />', 'label' => 'Social Media Management'],
        ['icon' => '<polyline points="20 6 9 17 4 12" />', 'label' => 'Email Marketing'],
        ['icon' => '<polyline points="20 6 9 17 4 12" />', 'label' => 'CRM Automation'],
        ['icon' => '<polyline points="20 6 9 17 4 12" />', 'label' => 'Performance Marketing'],
    ];

    $heroStats = [
        ['label' => 'Marketing Experts',  'value' => '30',  'suffix' => '+', 'sub' => 'Across all channels'],
        ['label' => 'Campaigns Managed',  'value' => '150', 'suffix' => '+', 'sub' => 'On time, every time'],
        ['label' => 'Time to Onboard',    'value' => '48',  'suffix' => 'h', 'sub' => 'Fast team integration'],
    ];

    $staffRoles = [
        [
            'num'   => '01',
            'icon'  => '<path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3V2z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>', // Social Media
            'title' => 'Social Media Manager',
            'desc'  => 'Get reliable marketing execution with professionals who handle content, automation, and performance — so you can focus on growth.',
            'points'=> [
                'Content Calendars & Scheduling',
                'Audience Growth Strategy',
                'Platform Analytics & Insights',
            ],
        ],
        [
            'num'   => '02',
            'icon'  => '<path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" stroke="currentColor" stroke-width="2"/><polyline points="22,6 12,13 2,6" stroke="currentColor" stroke-width="2"/>', // Email
            'title' => 'Email Marketing Specialist',
            'desc'  => 'Get reliable marketing execution with professionals who handle content, automation, and performance — so you can focus on growth.',
            'points'=> [
                'Email Campaign Management',
                'Drip Sequence Automation',
                'Open & Click Rate Optimization',
            ],
        ],
        [
            'num'   => '03',
            'icon'  => '<polygon points="12 2 2 7 12 12 22 7 12 2" stroke="currentColor" stroke-width="2"/><polyline points="2 17 12 22 22 17" stroke="currentColor" stroke-width="2"/><polyline points="2 12 12 17 22 12" stroke="currentColor" stroke-width="2"/>', // CRM
            'title' => 'CRM Automation & AI Expert',
            'desc'  => 'Get reliable marketing execution with professionals who handle content, automation, and performance — so you can focus on growth.',
            'points'=> [
                'CRM Workflow Automation',
                'AI-Powered Lead Scoring',
                'HubSpot / Zoho / Salesforce',
            ],
        ],
    ];

    $pricingData = [
        [
            'role'     => 'Social Media Manager',
            'fullTime' => '$500',
            'partTime' => '$280',
            'featured' => false,
        ],
        [
            'role'     => 'Email Marketing Specialist',
            'fullTime' => '$500',
            'partTime' => '$280',
            'featured' => false,
        ],
        [
            'role'     => 'CRM Automation & AI Expert',
            'fullTime' => '$700',
            'partTime' => '$380',
            'featured' => true,
        ],
    ];

    $employees = [
        ['id' => 1, 'name' => 'Fiza Tariq',      'role' => 'UI/UX Designer',         'img' => 'assets/1.webp', 'tag' => 'React · Next.js'],
        ['id' => 2, 'name' => 'Muhammad Junaid',  'role' => 'Social Media Manager',   'img' => 'assets/2.webp', 'tag' => 'On-Page · AEO'],
        ['id' => 3, 'name' => 'Zafar',            'role' => 'Web Developer',          'img' => 'assets/3.webp', 'tag' => 'Figma · Prototyping'],
        ['id' => 4, 'name' => 'Shayan Tariq',     'role' => 'Web Developer',          'img' => 'assets/4.webp', 'tag' => 'Meta · Google Ads'],
        ['id' => 5, 'name' => 'Huzaifa',          'role' => 'Graphic Designer',       'img' => 'assets/5.webp', 'tag' => 'Node.js · Python'],
        ['id' => 6, 'name' => 'Alia',             'role' => 'Marketing Specialist',   'img' => 'assets/6.webp', 'tag' => 'HubSpot · Automation'],
        ['id' => 7, 'name' => 'Zain',             'role' => 'WordPress Developer',    'img' => 'assets/7.webp', 'tag' => 'Illustrator · Branding'],
        ['id' => 8, 'name' => 'Maryam',           'role' => 'Web Developer',          'img' => 'assets/8.webp', 'tag' => 'Premiere · After Effects'],
    ];

    return view('hire-marketing', compact('heroPoints', 'heroStats', 'staffRoles', 'pricingData', 'employees'));
})->name('hire.marketing');
