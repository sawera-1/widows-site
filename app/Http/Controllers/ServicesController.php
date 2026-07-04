<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $clientLogos = [
            ['name' => 'Apple', 'url' => 'https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg'],
            ['name' => 'Google', 'url' => 'https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg'],
            ['name' => 'Microsoft', 'url' => 'https://upload.wikimedia.org/wikipedia/commons/9/96/Microsoft_logo_%282012%29.svg'],
            ['name' => 'Amazon', 'url' => 'https://upload.wikimedia.org/wikipedia/commons/a/a9/Amazon_logo.svg'],
            ['name' => 'Meta', 'url' => 'https://upload.wikimedia.org/wikipedia/commons/7/7b/Meta_Platforms_Inc._logo.svg'],
        ];

        $techCol1 = [
            ['name' => 'HTML5', 'abbr' => 'HTML', 'color' => '#e34f26', 'bg' => 'rgba(227,79,38,0.13)', 'icon' => 'html5'],
            ['name' => 'React', 'abbr' => 'JSX', 'color' => '#61dafb', 'bg' => 'rgba(97,218,251,0.13)', 'icon' => 'react'],
            ['name' => 'Node.js', 'abbr' => 'NODE', 'color' => '#68a063', 'bg' => 'rgba(104,160,99,0.13)', 'icon' => 'nodejs'],
            ['name' => 'Python', 'abbr' => 'PY', 'color' => '#3776ab', 'bg' => 'rgba(55,118,171,0.13)', 'icon' => 'python'],
            ['name' => 'Next.js', 'abbr' => 'NEXT', 'color' => '#319533ff', 'bg' => 'rgba(255,255,255,0.08)', 'icon' => 'nextjs'],
            ['name' => 'TypeScript', 'abbr' => 'TS', 'color' => '#3178c6', 'bg' => 'rgba(49,120,198,0.13)', 'icon' => 'typescript'],
        ];

        $techCol2 = [
            ['name' => 'CSS3', 'abbr' => 'CSS', 'color' => '#1572b6', 'bg' => 'rgba(21,114,182,0.13)', 'icon' => 'css3'],
            ['name' => 'Vue.js', 'abbr' => 'VUE', 'color' => '#42b883', 'bg' => 'rgba(66,184,131,0.13)', 'icon' => 'vuejs'],
            ['name' => 'Laravel', 'abbr' => 'LAR', 'color' => '#ff2d20', 'bg' => 'rgba(255,45,32,0.13)', 'icon' => 'laravel'],
            ['name' => 'WordPress', 'abbr' => 'WP', 'color' => '#21759b', 'bg' => 'rgba(33,117,155,0.13)', 'icon' => 'wordpress'],
            ['name' => 'PHP', 'abbr' => 'PHP', 'color' => '#777bb4', 'bg' => 'rgba(119,123,180,0.13)', 'icon' => 'php'],
            ['name' => 'JavaScript', 'abbr' => 'JS', 'color' => '#f7df1e', 'bg' => 'rgba(247,223,30,0.13)', 'icon' => 'javascript'],
        ];

        $techCol3 = [
            ['name' => 'Next.js', 'abbr' => 'NEXT', 'color' => '#319533ff', 'bg' => 'rgba(255,255,255,0.08)', 'icon' => 'nextjs'],
            ['name' => 'Python', 'abbr' => 'PY', 'color' => '#3776ab', 'bg' => 'rgba(55,118,171,0.13)', 'icon' => 'python'],
            ['name' => 'Vue.js', 'abbr' => 'VUE', 'color' => '#42b883', 'bg' => 'rgba(66,184,131,0.13)', 'icon' => 'vuejs'],
            ['name' => 'React', 'abbr' => 'JSX', 'color' => '#61dafb', 'bg' => 'rgba(97,218,251,0.13)', 'icon' => 'react'],
            ['name' => 'Node.js', 'abbr' => 'NODE', 'color' => '#68a063', 'bg' => 'rgba(104,160,99,0.13)', 'icon' => 'nodejs'],
            ['name' => 'Laravel', 'abbr' => 'LAR', 'color' => '#ff2d20', 'bg' => 'rgba(255,45,32,0.13)', 'icon' => 'laravel'],
        ];

        $techCol4 = [
            ['name' => 'CSS3', 'abbr' => 'CSS', 'color' => '#1572b6', 'bg' => 'rgba(21,114,182,0.13)', 'icon' => 'css3'],
            ['name' => 'Vue.js', 'abbr' => 'VUE', 'color' => '#42b883', 'bg' => 'rgba(66,184,131,0.13)', 'icon' => 'vuejs'],
            ['name' => 'Laravel', 'abbr' => 'LAR', 'color' => '#ff2d20', 'bg' => 'rgba(255,45,32,0.13)', 'icon' => 'laravel'],
            ['name' => 'WordPress', 'abbr' => 'WP', 'color' => '#21759b', 'bg' => 'rgba(33,117,155,0.13)', 'icon' => 'wordpress'],
            ['name' => 'PHP', 'abbr' => 'PHP', 'color' => '#777bb4', 'bg' => 'rgba(119,123,180,0.13)', 'icon' => 'php'],
            ['name' => 'JavaScript', 'abbr' => 'JS', 'color' => '#f7df1e', 'bg' => 'rgba(247,223,30,0.13)', 'icon' => 'javascript'],
        ];

        $buildSteps = [
            [
                'num'  => '01',
                'title' => 'Strategy & Discovery',
                'desc'  => 'We research your market, audience, and competitors to build a custom marketing blueprint.',
                'tag'   => 'Strategy',
                'icon'  => 'search',
            ],
            [
                'num'  => '02',
                'title' => 'Creative & Content',
                'desc'  => 'Our team crafts high-converting visuals and copy tailored to your brand voice.',
                'tag'   => 'Creative',
                'icon'  => 'pencil',
            ],
            [
                'num'  => '03',
                'title' => 'Launch & Execution',
                'desc'  => 'Campaigns go live across all selected channels with precision targeting and tracking.',
                'tag'   => 'Execution',
                'icon'  => 'rocket',
            ],
            [
                'num'  => '04',
                'title' => 'Analysis & Optimization',
                'desc'  => 'Continuous monitoring and data-driven adjustments to ensure maximum ROI.',
                'tag'   => 'Growth',
                'icon'  => 'chart',
            ],
        ];

        return view('service', compact(
            'clientLogos', 'techCol1', 'techCol2', 'techCol3', 'techCol4', 'buildSteps'
        ));
    }

    public function development()
    {
        $clientLogos = [
            ['name' => 'Apple', 'url' => 'https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg'],
            ['name' => 'Google', 'url' => 'https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg'],
            ['name' => 'Microsoft', 'url' => 'https://upload.wikimedia.org/wikipedia/commons/9/96/Microsoft_logo_%282012%29.svg'],
            ['name' => 'Amazon', 'url' => 'https://upload.wikimedia.org/wikipedia/commons/a/a9/Amazon_logo.svg'],
            ['name' => 'Meta', 'url' => 'https://upload.wikimedia.org/wikipedia/commons/7/7b/Meta_Platforms_Inc._logo.svg'],
        ];

        $techCol1 = [
            ['name' => 'Next.js', 'abbr' => 'NEXT', 'color' => '#319533ff', 'bg' => 'rgba(255,255,255,0.08)', 'icon' => 'nextjs'],
            ['name' => 'Python', 'abbr' => 'PY', 'color' => '#3776ab', 'bg' => 'rgba(55,118,171,0.13)', 'icon' => 'python'],
            ['name' => 'Vue.js', 'abbr' => 'VUE', 'color' => '#42b883', 'bg' => 'rgba(66,184,131,0.13)', 'icon' => 'vuejs'],
            ['name' => 'React', 'abbr' => 'JSX', 'color' => '#61dafb', 'bg' => 'rgba(97,218,251,0.13)', 'icon' => 'react'],
            ['name' => 'Node.js', 'abbr' => 'NODE', 'color' => '#68a063', 'bg' => 'rgba(104,160,99,0.13)', 'icon' => 'nodejs'],
            ['name' => 'Laravel', 'abbr' => 'LAR', 'color' => '#ff2d20', 'bg' => 'rgba(255,45,32,0.13)', 'icon' => 'laravel'],
        ];

        $techCol2 = [
            ['name' => 'CSS3', 'abbr' => 'CSS', 'color' => '#1572b6', 'bg' => 'rgba(21,114,182,0.13)', 'icon' => 'css3'],
            ['name' => 'Vue.js', 'abbr' => 'VUE', 'color' => '#42b883', 'bg' => 'rgba(66,184,131,0.13)', 'icon' => 'vuejs'],
            ['name' => 'Laravel', 'abbr' => 'LAR', 'color' => '#ff2d20', 'bg' => 'rgba(255,45,32,0.13)', 'icon' => 'laravel'],
            ['name' => 'WordPress', 'abbr' => 'WP', 'color' => '#21759b', 'bg' => 'rgba(33,117,155,0.13)', 'icon' => 'wordpress'],
            ['name' => 'PHP', 'abbr' => 'PHP', 'color' => '#777bb4', 'bg' => 'rgba(119,123,180,0.13)', 'icon' => 'php'],
            ['name' => 'JavaScript', 'abbr' => 'JS', 'color' => '#f7df1e', 'bg' => 'rgba(247,223,30,0.13)', 'icon' => 'javascript'],
        ];

        $techCol3 = $techCol1;
        $techCol4 = $techCol2;

        $tickerItems = [
            ['icon' => 'star', 'label' => 'Custom Websites'],
            ['icon' => 'zap', 'label' => 'Scalable Solutions'],
            ['icon' => 'search', 'label' => 'SEO Optimized'],
            ['icon' => 'rocket', 'label' => 'Fast Performance'],
            ['icon' => 'shield', 'label' => 'Secure Systems'],
            ['icon' => 'code', 'label' => 'React & Next.js'],
        ];

        $staffPerks = [
            'Dedicated developers, designers & QA engineers',
            'Flexible engagement part-time or full-time',
            'Onboard in 48 hours no lengthy hiring cycles',
            'Work in your timezone, your tools, your process',
            'React, Node.js, Laravel, Flutter & more',
        ];

        $developmentServices = [
            [
                'icon' => 'layout',
                'title' => 'Website Development',
                'perfectFor' => 'Growing businesses, startups, and personal brands ready to make an impact online.',
                'technologies' => ['HTML5', 'CSS3', 'JavaScript', 'React', 'Bootstrap', 'Tailwind CSS', 'WordPress', 'PHP']
            ],
            [
                'icon' => 'shopping-cart',
                'title' => 'E-Commerce Development',
                'perfectFor' => 'Product businesses, online retailers, and dropshippers ready to scale.',
                'technologies' => ['Shopify', 'WordPress', 'WooCommerce', 'Magento', 'React', 'Next.js', 'Node.js', 'PHP', 'Stripe', 'PayPal']
            ],
            [
                'icon' => 'smartphone',
                'title' => 'Mobile App Development',
                'perfectFor' => 'Businesses wanting a direct mobile channel to engage and retain customers.',
                'technologies' => ['React Native', 'Flutter', 'Swift', 'Kotlin', 'Firebase', 'REST APIs', 'App Store', 'Google Play']
            ],
            [
                'icon' => 'server',
                'title' => 'Custom Web Applications',
                'perfectFor' => 'Startups, SaaS products, and businesses with specific platform requirements.',
                'technologies' => ['React', 'Next.js', 'TypeScript', 'Node.js', 'Laravel', 'Vue.js', 'AngularJS', 'Ruby on Rails', 'Express.js', 'MongoDB', 'MySQL', 'PostgreSQL', 'AWS']
            ],
        ];

        $buildSteps = [
            [
                'num'  => '01',
                'title' => 'Discovery',
                'desc'  => 'Deep research into your business, audience, and competitors to define the strategic foundation.',
                'tag'   => 'Strategy',
                'icon'  => 'search',
            ],
            [
                'num'  => '02',
                'title' => 'Design',
                'desc'  => 'Human-centered UI/UX wireframes, prototypes, and design systems crafted for clarity and beauty.',
                'tag'   => 'UI / UX',
                'icon'  => 'pencil',
            ],
            [
                'num'  => '03',
                'title' => 'Engineering',
                'desc'  => 'Precision engineering clean, scalable code on modern frameworks with performance at its core.',
                'tag'   => 'Development',
                'icon'  => 'code',
            ],
            [
                'num'  => '04',
                'title' => 'Deployment',
                'desc'  => 'Seamless launch with CI/CD pipelines, monitoring, and post-launch support ensuring zero downtime.',
                'tag'   => 'Launch',
                'icon'  => 'rocket',
            ],
        ];

        $pricingCards = [
            [
                'highlight' => false,
                'icon' => 'layout',
                'tier' => 'Starter',
                'title' => 'Website Development',
                'price' => '$400',
                'desc' => 'Build a fast, modern website that represents your brand and converts visitors into clients.',
                'ticker1' => ['HTML5', 'CSS3', 'JavaScript', 'React', 'WordPress', 'PHP', 'Tailwind CSS', 'Bootstrap'],
                'ticker2' => ['Google Analytics', 'Yoast SEO', 'Cloudflare', 'cPanel', 'WP Engine', 'Elementor', 'GTmetrix'],
                'features' => [
                    'Up to 5 pages',
                    'Mobile responsive design',
                    'WordPress setup & theme customization',
                    'Contact form & social links',
                    'Basic SEO setup',
                    'Speed optimization',
                    '1 revision round',
                    '7 days post-launch support'
                ]
            ],
            [
                'highlight' => false,
                'icon' => 'shopping-cart',
                'tier' => 'Starter',
                'title' => 'E-Commerce Development',
                'price' => '$550',
                'desc' => 'Launch an online store designed to sell, scale, and run smoothly.',
                'ticker1' => ['Shopify', 'WooCommerce', 'WordPress', 'React', 'Next.js', 'PHP', 'Node.js', 'Magento'],
                'ticker2' => ['Stripe', 'PayPal', 'Klarna', 'Square', 'FedEx API', 'DHL API', 'Mailchimp', 'Klaviyo'],
                'features' => [
                    'WooCommerce or Shopify setup',
                    'Up to 20 products',
                    'Payment gateway integration',
                    'Basic store design',
                    'Shipping setup',
                    'Cart & checkout configuration',
                    'Mobile responsive',
                    '1 revision round',
                    '7 days support'
                ]
            ],
            [
                'highlight' => true,
                'icon' => 'server',
                'tier' => 'Most Popular',
                'title' => 'Custom Web Applications',
                'price' => '$1,200',
                'desc' => 'Turn your idea into a powerful, scalable digital product.',
                'ticker1' => ['React', 'Next.js', 'TypeScript', 'Node.js', 'Laravel', 'Vue.js', 'Express.js', 'MongoDB'],
                'ticker2' => ['AWS', 'Vercel', 'Docker', 'PostgreSQL', 'MySQL', 'Redis', 'JWT', 'Stripe'],
                'features' => [
                    'Core feature development',
                    'Clean UI design',
                    'User authentication',
                    'Basic dashboard',
                    'Database setup',
                    'Deployment',
                    'Testing & bug fixes',
                    '1 revision round',
                    '14 days support'
                ]
            ],
            [
                'highlight' => false,
                'icon' => 'smartphone',
                'tier' => 'Starter',
                'title' => 'Mobile App Development',
                'price' => '$1,500',
                'desc' => 'Bring your business directly into your customers hands.',
                'ticker1' => ['React Native', 'Flutter', 'Swift', 'Kotlin', 'Expo', 'TypeScript', 'Dart'],
                'ticker2' => ['Firebase', 'REST APIs', 'Google Maps', 'OneSignal', 'Sentry', 'App Store', 'Google Play'],
                'features' => [
                    'Single platform (iOS or Android)',
                    'Core features implementation',
                    'Clean UI',
                    'User authentication',
                    'Push notifications',
                    'API integration',
                    'App store deployment',
                    'Testing & bug fixes',
                    '1 revision round',
                    '14 days support'
                ]
            ],
        ];

        return view('service-development', compact(
            'clientLogos', 'techCol1', 'techCol2', 'techCol3', 'techCol4', 'buildSteps', 'tickerItems', 'staffPerks', 'developmentServices', 'pricingCards'
        ));
    }

    public function design()
    {
        $clientLogos = [
            ['name' => 'Apple', 'url' => 'https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg'],
            ['name' => 'Google', 'url' => 'https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg'],
            ['name' => 'Microsoft', 'url' => 'https://upload.wikimedia.org/wikipedia/commons/9/96/Microsoft_logo_%282012%29.svg'],
            ['name' => 'Amazon', 'url' => 'https://upload.wikimedia.org/wikipedia/commons/a/a9/Amazon_logo.svg'],
            ['name' => 'Meta', 'url' => 'https://upload.wikimedia.org/wikipedia/commons/7/7b/Meta_Platforms_Inc._logo.svg'],
        ];

        $techCol1 = [
            ['name' => 'Figma', 'abbr' => 'FIG', 'color' => '#f24e1e', 'bg' => 'rgba(242,78,30,0.13)', 'icon' => 'figma'],
            ['name' => 'Design Thinking', 'abbr' => 'THINK', 'color' => '#0acf83', 'bg' => 'rgba(10,207,131,0.13)', 'icon' => 'brain'],
            ['name' => 'Creative Tools', 'abbr' => 'TOOLS', 'color' => '#ff7262', 'bg' => 'rgba(255,114,98,0.13)', 'icon' => 'tool'],
            ['name' => 'UI Systems', 'abbr' => 'UI', 'color' => '#1abc9c', 'bg' => 'rgba(26,188,156,0.13)', 'icon' => 'layout'],
            ['name' => 'Prototyping Flow', 'abbr' => 'FLOW', 'color' => '#9b59b6', 'bg' => 'rgba(155,89,182,0.13)', 'icon' => 'git-branch'],
            ['name' => 'Visual Strategy', 'abbr' => 'STR', 'color' => '#f1c40f', 'bg' => 'rgba(241,196,15,0.13)', 'icon' => 'eye'],
        ];

        $techCol2 = [
            ['name' => 'Video Editing', 'abbr' => 'VID', 'color' => '#e74c3c', 'bg' => 'rgba(231,76,60,0.13)', 'icon' => 'video'],
            ['name' => 'Motion Design', 'abbr' => 'MOTION', 'color' => '#3498db', 'bg' => 'rgba(52,152,219,0.13)', 'icon' => 'aperture'],
            ['name' => 'Short-form Content', 'abbr' => 'SHORT', 'color' => '#e67e22', 'bg' => 'rgba(230,126,34,0.13)', 'icon' => 'smartphone'],
            ['name' => 'Creative Editing', 'abbr' => 'EDIT', 'color' => '#2ecc71', 'bg' => 'rgba(46,204,113,0.13)', 'icon' => 'scissors'],
            ['name' => 'Visual Effects', 'abbr' => 'VFX', 'color' => '#9b59b6', 'bg' => 'rgba(155,89,182,0.13)', 'icon' => 'zap'],
            ['name' => 'Content Production', 'abbr' => 'PROD', 'color' => '#34495e', 'bg' => 'rgba(52,73,94,0.13)', 'icon' => 'film'],
        ];

        $techCol3 = $techCol1;
        $techCol4 = $techCol2;

        $tickerItems = [
            ['icon' => 'star', 'label' => 'Pixel Perfect'],
            ['icon' => 'zap', 'label' => 'Brand Identities'],
            ['icon' => 'search', 'label' => 'UX Research'],
            ['icon' => 'rocket', 'label' => 'Motion Graphics'],
            ['icon' => 'shield', 'label' => 'Design Systems'],
            ['icon' => 'code', 'label' => 'Prototyping'],
        ];

        $staffPerks = [
            'Dedicated UI/UX designers, graphic artists & motion experts',
            'Flexible engagement part-time or full-time',
            'Onboard in 48 hours',
            'Work in your timezone, your tools',
            'Figma, Adobe Suite, Cinema 4D & more',
        ];

        $developmentServices = [
            [
                'icon' => 'layout',
                'title' => 'UI/UX Design',
                'perfectFor' => 'Startups and businesses looking for intuitive, engaging digital products.',
                'technologies' => ['Figma', 'Adobe XD', 'Framer', 'Maze', 'Zeplin', 'Hotjar', 'Uizard', 'Galileo AI', 'Relume']
            ],
            [
                'icon' => 'pen-tool',
                'title' => 'Graphic Design',
                'perfectFor' => 'Brands needing a strong, memorable visual identity and marketing materials.',
                'technologies' => ['Adobe Illustrator', 'Photoshop', 'Figma', 'Canva Pro', 'InDesign', 'Adobe Firefly', 'Midjourney', 'Canva AI']
            ],
            [
                'icon' => 'video',
                'title' => 'Video Editing',
                'perfectFor' => 'Creators and businesses wanting to engage audiences with high-quality video content.',
                'technologies' => ['Adobe Premiere Pro', 'After Effects', 'DaVinci Resolve', 'CapCut Pro', 'Final Cut Pro', 'Runway ML', 'Descript', 'ElevenLabs', 'Topaz Video AI']
            ],
            [
                'icon' => 'layers',
                'title' => 'Visual Systems',
                'perfectFor' => 'Organizations requiring scalable, consistent design languages across platforms.',
                'technologies' => ['Design Systems', 'Tokenization', 'Brand Guidelines', 'Component Libraries', 'Storybook', 'Zeroheight']
            ],
        ];

        $buildSteps = [
            [
                'num'  => '01',
                'title' => 'Discovery',
                'desc'  => 'Deep research into your brand, target audience, and market positioning to establish a clear visual direction.',
                'tag'   => 'Research',
                'icon'  => 'search',
            ],
            [
                'num'  => '02',
                'title' => 'Strategy / Wireframing',
                'desc'  => 'Structuring the layout and flow of your digital presence, ensuring a logical user journey before adding aesthetics.',
                'tag'   => 'Wireframing',
                'icon'  => 'layout',
            ],
            [
                'num'  => '03',
                'title' => 'UX Design / Visual Design',
                'desc'  => 'Crafting the aesthetic identity colors, typography, and visual elements that align with your brand voice and goals.',
                'tag'   => 'Design',
                'icon'  => 'pen-tool',
            ],
            [
                'num'  => '04',
                'title' => 'UI Design / Handoff',
                'desc'  => 'Preparing all assets and design systems for seamless handoff to developers, ensuring pixel-perfect execution.',
                'tag'   => 'Handoff',
                'icon'  => 'send',
            ],
        ];

        $pricingCards = [
            [
                'highlight' => false,
                'icon' => 'layout',
                'tier' => 'Starter',
                'title' => 'UI/UX Design',
                'price' => '$400',
                'desc' => 'Build intuitive user experiences with high-fidelity wireframes and modern design systems.',
                'ticker1' => ['Figma', 'Adobe XD', 'Framer', 'Maze'],
                'ticker2' => ['Zeplin', 'Hotjar', 'Uizard', 'Relume'],
                'features' => [
                    'Up to 5 pages',
                    'High-fidelity wireframes',
                    'Responsive design layouts',
                    'Basic design system handoff',
                    '1 revision round',
                    '7 days post-handover support'
                ]
            ],
            [
                'highlight' => false,
                'icon' => 'pen-tool',
                'tier' => 'Branding',
                'title' => 'Graphic Design',
                'price' => '$200',
                'desc' => 'Develop a memorable brand identity that captures your vision and speaks to your audience.',
                'ticker1' => ['Illustrator', 'Photoshop', 'Figma', 'Canva'],
                'ticker2' => ['InDesign', 'Firefly', 'Midjourney', 'Canva AI'],
                'features' => [
                    'Logo design & variations',
                    'Color palette & typography',
                    'Social media kit',
                    'Brand guideline document',
                    '1 revision round',
                    '7 days post-handover support'
                ]
            ],
            [
                'highlight' => true,
                'icon' => 'video',
                'tier' => 'Monthly',
                'title' => 'Video Editing',
                'price' => '$250',
                'desc' => 'Transform raw footage into polished, engaging content ready for your audience.',
                'ticker1' => ['Premiere Pro', 'After Effects', 'DaVinci'],
                'ticker2' => ['CapCut', 'Runway', 'ElevenLabs', 'Topaz'],
                'features' => [
                    'Up to 3 minutes of editing',
                    'Color grading & audio mixing',
                    'Motion graphics & text overlays',
                    'Optimized for multi-platform',
                    '1 revision round',
                    '7 days post-handover support'
                ]
            ],
            [
                'highlight' => false,
                'icon' => 'briefcase',
                'tier' => 'Enterprise',
                'title' => 'Creative Direction',
                'price' => '$1,200',
                'desc' => 'Comprehensive visual strategy and creative leadership for large-scale digital initiatives.',
                'ticker1' => ['Strategy', 'Leadership', 'Vision', 'Execution'],
                'ticker2' => ['Planning', 'Audit', 'Review', 'Growth'],
                'features' => [
                    'Full brand audit & repositioning',
                    'Multi-channel visual strategy',
                    'Team leadership & mentorship',
                    'Comprehensive design system',
                    '1 revision round',
                    '14 days post-handover support'
                ]
            ],
        ];

        return view('service-design', compact(
            'clientLogos', 'techCol1', 'techCol2', 'techCol3', 'techCol4', 'buildSteps', 'tickerItems', 'staffPerks', 'developmentServices', 'pricingCards'
        ));
    }

    public function marketing()
    {
        $clientLogos = [
            ['name' => 'Apple', 'url' => 'https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg'],
            ['name' => 'Google', 'url' => 'https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg'],
            ['name' => 'Microsoft', 'url' => 'https://upload.wikimedia.org/wikipedia/commons/9/96/Microsoft_logo_%282012%29.svg'],
            ['name' => 'Amazon', 'url' => 'https://upload.wikimedia.org/wikipedia/commons/a/a9/Amazon_logo.svg'],
            ['name' => 'Meta', 'url' => 'https://upload.wikimedia.org/wikipedia/commons/7/7b/Meta_Platforms_Inc._logo.svg'],
        ];

        $techCol1 = [
            ['name' => 'Social Media', 'abbr' => 'SMM', 'color' => '#1da1f2', 'bg' => 'rgba(29,161,242,0.13)', 'icon' => 'smartphone'],
            ['name' => 'Content Strategy', 'abbr' => 'CNT', 'color' => '#f56040', 'bg' => 'rgba(245,96,64,0.13)', 'icon' => 'pen-tool'],
            ['name' => 'Paid Ads', 'abbr' => 'ADS', 'color' => '#34a853', 'bg' => 'rgba(52,168,83,0.13)', 'icon' => 'zap'],
            ['name' => 'Email Marketing', 'abbr' => 'EML', 'color' => '#ea4335', 'bg' => 'rgba(234,67,53,0.13)', 'icon' => 'send'],
            ['name' => 'SEO Strategy', 'abbr' => 'SEO', 'color' => '#fbbc05', 'bg' => 'rgba(251,188,5,0.13)', 'icon' => 'search'],
            ['name' => 'Analytics', 'abbr' => 'DATA', 'color' => '#4285f4', 'bg' => 'rgba(66,133,244,0.13)', 'icon' => 'chart'],
        ];

        $techCol2 = [
            ['name' => 'Brand Identity', 'abbr' => 'BRAND', 'color' => '#9b59b6', 'bg' => 'rgba(155,89,182,0.13)', 'icon' => 'star'],
            ['name' => 'Influencer Marketing', 'abbr' => 'INF', 'color' => '#e67e22', 'bg' => 'rgba(230,126,34,0.13)', 'icon' => 'user'],
            ['name' => 'Funnel Optimization', 'abbr' => 'FUN', 'color' => '#2ecc71', 'bg' => 'rgba(46,204,113,0.13)', 'icon' => 'filter'],
            ['name' => 'Content Creation', 'abbr' => 'CRE', 'color' => '#e74c3c', 'bg' => 'rgba(231,76,60,0.13)', 'icon' => 'video'],
            ['name' => 'Lead Generation', 'abbr' => 'LEAD', 'color' => '#34495e', 'bg' => 'rgba(52,73,94,0.13)', 'icon' => 'magnet'],
            ['name' => 'Campaign Strategy', 'abbr' => 'CMP', 'color' => '#3498db', 'bg' => 'rgba(52,152,219,0.13)', 'icon' => 'target'],
        ];

        $techCol3 = $techCol1;
        $techCol4 = $techCol2;

        $tickerItems = [
            ['icon' => 'search', 'label' => 'SEO Optimization'],
            ['icon' => 'send', 'label' => 'Email Campaigns'],
            ['icon' => 'rocket', 'label' => 'Social Growth'],
            ['icon' => 'pen-tool', 'label' => 'Content Marketing'],
            ['icon' => 'zap', 'label' => 'Ad Campaigns'],
            ['icon' => 'chart', 'label' => 'Conversion Funnels'],
        ];

        $staffPerks = [
            'Dedicated marketers, SEO experts & ad specialists',
            'Flexible engagement part-time or full-time',
            'Onboard in 48 hours no lengthy hiring cycles',
            'Work in your timezone, your tools, your process',
            'Meta Ads, Google Ads, SEO & more',
        ];

        $developmentServices = [
            [
                'icon' => 'smartphone',
                'title' => 'Social Media Marketing',
                'perfectFor' => 'Small businesses, startups, and eCommerce brands wanting organic growth and strong brand presence.',
                'technologies' => ['Multi-platform content strategy', 'Engaging posts & captions', 'Hashtag optimization', 'Monthly performance reports']
            ],
            [
                'icon' => 'zap',
                'title' => 'Media Buying & Paid Ads',
                'perfectFor' => 'Businesses ready to invest in paid traffic, eCommerce stores, and lead generation businesses.',
                'technologies' => ['Campaign setup & management', 'Audience targeting', 'Ad creatives optimization', 'Performance tracking']
            ],
            [
                'icon' => 'search',
                'title' => 'SEO & AEO Optimization',
                'perfectFor' => 'Businesses wanting long-term organic visibility on Google and AI search platforms.',
                'technologies' => ['Keyword & AI-intent research', 'On-page SEO optimization', 'Technical SEO improvements', 'Backlink building']
            ],
            [
                'icon' => 'send',
                'title' => 'Email Marketing',
                'perfectFor' => 'Businesses looking to nurture leads and build long-term customer relationships.',
                'technologies' => ['Campaign design & automation', 'Audience segmentation', 'Performance tracking', 'Conversion optimization']
            ],
        ];

        $buildSteps = [
            [
                'num'  => '01',
                'title' => 'Strategy & Discovery',
                'desc'  => 'We research your market, audience, and competitors to build a custom marketing blueprint.',
                'tag'   => 'Strategy',
                'icon'  => 'search',
            ],
            [
                'num'  => '02',
                'title' => 'Creative & Content',
                'desc'  => 'Our team crafts high-converting visuals and copy tailored to your brand voice.',
                'tag'   => 'Creative',
                'icon'  => 'pen-tool',
            ],
            [
                'num'  => '03',
                'title' => 'Launch & Execution',
                'desc'  => 'Campaigns go live across all selected channels with precision targeting and tracking.',
                'tag'   => 'Execution',
                'icon'  => 'rocket',
            ],
            [
                'num'  => '04',
                'title' => 'Analysis & Optimization',
                'desc'  => 'Continuous monitoring and data-driven adjustments to ensure maximum ROI.',
                'tag'   => 'Growth',
                'icon'  => 'chart',
            ],
        ];

        $pricingCards = [
            [
                'highlight' => false,
                'icon' => 'smartphone',
                'tier' => 'Organic',
                'title' => 'Social Media Marketing',
                'price' => '$300',
                'desc' => 'Grow your brand with content that connects, engages, and converts across social platforms.',
                'ticker1' => ['Instagram', 'FB', 'TikTok', 'LinkedIn', 'Pinterest'],
                'ticker2' => ['Canva', 'Later', 'Hootsuite', 'Metricool', 'Buffer'],
                'features' => [
                    '3 platforms (choose any)',
                    '12 posts/month',
                    'Static graphics + captions',
                    'Hashtag strategy',
                    'Monthly report',
                    'Add-on: Extra platform (+$50/mo)',
                    'Add-on: Additional video/reel ($40/video)',
                    'Add-on: Profile setup & branding ($150 one-time)'
                ]
            ],
            [
                'highlight' => false,
                'icon' => 'zap',
                'tier' => 'Advertising',
                'title' => 'Media Buying & Paid Ads',
                'price' => '$300',
                'desc' => 'Ad budget $300–$500. Data-driven advertising designed to maximize ROI and scale efficiently.',
                'ticker1' => ['Meta Ads', 'Google Ads', 'TikTok Ads', 'YouTube Ads'],
                'ticker2' => ['Ad Manager', 'Planner', 'Tag Manager', 'Analytics'],
                'features' => [
                    '1 platform (Meta, Google, or TikTok)',
                    'Campaign setup',
                    '2 ad creatives/month',
                    'Basic targeting',
                    'Monthly report',
                    'Important: Ad budget paid by client',
                    'Add-on: Extra ad creative ($35)',
                    'Add-on: Full video ad production ($80 per video)'
                ]
            ],
            [
                'highlight' => true,
                'icon' => 'star',
                'tier' => 'Most Popular Bundle',
                'title' => 'Full Digital Growth Bundle',
                'price' => '$750',
                'desc' => 'The complete solution: Social Media Marketing + Media Buying (1 platform).',
                'ticker1' => ['Meta', 'Google', 'TikTok', 'Email'],
                'ticker2' => ['Klaviyo', 'HubSpot', 'Zapier', 'CRM'],
                'features' => [
                    'Social Media Marketing',
                    'Media Buying (1 platform)',
                    'Integrated strategy',
                    'Monthly strategy sync',
                    'Cross-channel reporting',
                    'Dedicated account manager'
                ]
            ],
            [
                'highlight' => false,
                'icon' => 'search',
                'tier' => 'Organic',
                'title' => 'SEO & AEO',
                'price' => '$199',
                'desc' => 'Rank higher on search engines and AI platforms like ChatGPT and Gemini.',
                'ticker1' => ['Google Search', 'ChatGPT', 'Gemini', 'Bing'],
                'ticker2' => ['Ahrefs', 'SEMrush', 'Moz', 'Search Console'],
                'features' => [
                    'AI-intent keyword research',
                    'GEO-targeted SEO',
                    'On-page SEO (5 pages)',
                    'AEO optimization',
                    'Google Business Profile',
                    'Local citations',
                    'Technical SEO check',
                    '5 backlinks'
                ]
            ],
            [
                'highlight' => false,
                'icon' => 'target',
                'tier' => 'Search',
                'title' => 'Google Ads Management',
                'price' => '$400',
                'desc' => 'High-intent search campaign management for maximum lead quality.',
                'ticker1' => ['Google Ads', 'Search', 'PMax', 'Shopping'],
                'ticker2' => ['Analytics 4', 'GTM', 'Optimizer', 'Merchant Center'],
                'features' => [
                    'Search campaign setup',
                    'Keyword research',
                    'Ad copy creation',
                    'Conversion tracking',
                    'Targeting setup',
                    'Monthly optimization',
                    'Engagement tracking',
                    'Basic automation'
                ]
            ],
            [
                'highlight' => false,
                'icon' => 'send',
                'tier' => 'Nurture',
                'title' => 'Email Marketing',
                'price' => '$200',
                'desc' => 'Convert subscribers into loyal customers with strategic email campaigns.',
                'ticker1' => ['Mailchimp', 'Klaviyo', 'ActiveCampaign', 'SendGrid'],
                'ticker2' => ['Automation', 'Copywriting', 'Design', 'Strategy'],
                'features' => [
                    'Up to 24 campaigns/year',
                    'Template design',
                    'List setup',
                    'Monthly report',
                    'Engagement tracking',
                    'Basic automation',
                    'Targeting setup',
                    'Monthly optimization'
                ]
            ]
        ];

        return view('service-market', compact(
            'clientLogos', 'techCol1', 'techCol2', 'techCol3', 'techCol4', 'buildSteps', 'tickerItems', 'staffPerks', 'developmentServices', 'pricingCards'
        ));
    }

    public function ai()
    {
        $clientLogos = [
            ['name' => 'Apple', 'url' => 'https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg'],
            ['name' => 'Google', 'url' => 'https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg'],
            ['name' => 'Microsoft', 'url' => 'https://upload.wikimedia.org/wikipedia/commons/9/96/Microsoft_logo_%282012%29.svg'],
            ['name' => 'Amazon', 'url' => 'https://upload.wikimedia.org/wikipedia/commons/a/a9/Amazon_logo.svg'],
            ['name' => 'Meta', 'url' => 'https://upload.wikimedia.org/wikipedia/commons/7/7b/Meta_Platforms_Inc._logo.svg'],
        ];

        $techCol1 = [
            ['name' => 'GPT Systems', 'abbr' => 'GPT', 'color' => '#1da1f2', 'bg' => 'rgba(29,161,242,0.13)', 'icon' => 'brain'],
            ['name' => 'AI Content Creation', 'abbr' => 'CONTENT', 'color' => '#e1306c', 'bg' => 'rgba(225,48,108,0.13)', 'icon' => 'pen-tool'],
            ['name' => 'Voice AI', 'abbr' => 'VOICE', 'color' => '#0077b5', 'bg' => 'rgba(0,119,181,0.13)', 'icon' => 'smartphone'],
            ['name' => 'AI Video Tools', 'abbr' => 'VIDEO', 'color' => '#ff0000', 'bg' => 'rgba(255,0,0,0.13)', 'icon' => 'video'],
            ['name' => 'Automation Bots', 'abbr' => 'BOTS', 'color' => '#ea4335', 'bg' => 'rgba(234,67,53,0.13)', 'icon' => 'zap'],
            ['name' => 'AI Analytics', 'abbr' => 'ANALYTICS', 'color' => '#34a853', 'bg' => 'rgba(52,168,83,0.13)', 'icon' => 'chart'],
        ];

        $techCol2 = [
            ['name' => 'LangChain', 'abbr' => 'LC', 'color' => '#fbbc05', 'bg' => 'rgba(251,188,5,0.13)', 'icon' => 'layers'],
            ['name' => 'API Systems', 'abbr' => 'API', 'color' => '#673ab7', 'bg' => 'rgba(103,58,183,0.13)', 'icon' => 'server'],
            ['name' => 'n8n Automation', 'abbr' => 'N8N', 'color' => '#00c300', 'bg' => 'rgba(0,195,0,0.13)', 'icon' => 'git-branch'],
            ['name' => 'AI Pipelines', 'abbr' => 'PIPE', 'color' => '#f26522', 'bg' => 'rgba(242,101,34,0.13)', 'icon' => 'send'],
            ['name' => 'Cloud Deployment', 'abbr' => 'DEP', 'color' => '#ff4500', 'bg' => 'rgba(255,69,0,0.13)', 'icon' => 'rocket'],
            ['name' => 'Smart Systems', 'abbr' => 'SMART', 'color' => '#3498db', 'bg' => 'rgba(52,152,219,0.13)', 'icon' => 'shield'],
        ];

        $techCol3 = $techCol1;
        $techCol4 = $techCol2;

        $tickerItems = [
            ['icon' => 'brain', 'label' => 'LLM Agents'],
            ['icon' => 'pen-tool', 'label' => 'Generative AI'],
            ['icon' => 'layers', 'label' => 'Neural Networks'],
            ['icon' => 'zap', 'label' => 'Smart Workflows'],
            ['icon' => 'chart', 'label' => 'Predictive ROI'],
        ];

        $staffPerks = [
            'Dedicated developers, designers & QA engineers',
            'Flexible engagement — part-time or full-time',
            'Onboard in 48 hours — no lengthy hiring cycles',
            'Work in your timezone, your tools, your process',
            'React, Node.js, Laravel, Flutter & more',
        ];

        $developmentServices = [
            [
                'icon' => 'zap',
                'title' => 'AI Automation & Development',
                'perfectFor' => 'Businesses wanting to automate repetitive tasks, reduce manual work, and scale operations intelligently with custom LLM agents.',
                'technologies' => ['GPT-4o', 'Claude 3.5', 'LangChain', 'n8n', 'Make', 'Voiceflow', 'Pinecone', 'AutoGPT']
            ],
            [
                'icon' => 'pen-tool',
                'title' => 'AI Content Creation',
                'perfectFor' => 'Brands, agencies, and marketers wanting high-quality visual and audio content at scale with reduced cost and time.',
                'technologies' => ['Midjourney v6', 'Runway Gen-3', 'ElevenLabs', 'HeyGen', 'Sora', 'Adobe Firefly']
            ]
        ];

        $buildSteps = [
            [
                'num'  => '01',
                'title' => 'Discovery',
                'desc'  => 'Deep research into your business, audience, and competitors to define the strategic foundation.',
                'tag'   => 'Strategy',
                'icon'  => 'search',
            ],
            [
                'num'  => '02',
                'title' => 'Design',
                'desc'  => 'Human-centered UI/UX wireframes, prototypes, and design systems crafted for clarity and beauty.',
                'tag'   => 'UI / UX',
                'icon'  => 'pen-tool',
            ],
            [
                'num'  => '03',
                'title' => 'Development',
                'desc'  => 'Precision engineering clean, scalable code on modern frameworks with performance at its core.',
                'tag'   => 'Engineering',
                'icon'  => 'rocket',
            ],
            [
                'num'  => '04',
                'title' => 'Deployment',
                'desc'  => 'Seamless launch with CI/CD pipelines, monitoring, and post-launch support ensuring zero downtime.',
                'tag'   => 'Launch',
                'icon'  => 'chart',
            ],
        ];

        $pricingCards = [
            [
                'highlight' => false,
                'icon' => 'zap',
                'tier' => 'Starter',
                'title' => 'AI Automation & Development',
                'price' => '$500',
                'desc' => 'Build intelligent systems that work 24/7 — automate workflows and handle customer interactions.',
                'ticker1' => ['GPT-4o', 'Claude 3.5', 'LangChain', 'n8n', 'Make', 'Voiceflow', 'Python', 'API'],
                'ticker2' => ['HubSpot', 'Salesforce', 'Slack', 'Discord', 'Google Sheets', 'Notion', 'Airtable', 'Twilio'],
                'features' => [
                    '1 Custom AI Agent or Chatbot',
                    'n8n / Make Workflow Automation',
                    'CRM Integration (HubSpot/Slack)',
                    'Automated Lead Qualification',
                    'Monthly Strategy & ROI Report',
                    '24/7 System Monitoring',
                    'Custom API Integration'
                ]
            ],
            [
                'highlight' => true,
                'icon' => 'pen-tool',
                'tier' => 'Most Popular',
                'title' => 'AI Content Creation',
                'price' => '$300',
                'desc' => 'Create scroll-stopping visuals, videos, and marketing assets at scale.',
                'ticker1' => ['Midjourney', 'Runway', 'ElevenLabs', 'HeyGen', 'DALL-E 3', 'Stable Diffusion', 'Canva', 'Adobe Firefly'],
                'ticker2' => ['Instagram', 'TikTok', 'YouTube', 'LinkedIn', 'Twitter', 'Facebook', 'CapCut', 'Premiere Pro'],
                'features' => [
                    '5 AI-Generated Brand Creatives',
                    '2 AI Video Commercials',
                    'Studio-Quality Voiceovers',
                    'AI Copywriting & Caption Kit',
                    'Platform-Ready Delivery',
                    'Brand-Consistent Asset Training',
                    'Priority Batch Processing'
                ]
            ]
        ];

        return view('service-ai', compact(
            'clientLogos', 'techCol1', 'techCol2', 'techCol3', 'techCol4', 'buildSteps', 'tickerItems', 'staffPerks', 'developmentServices', 'pricingCards'
        ));
    }
}
