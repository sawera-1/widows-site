<?php

// ─────────────────────────────────────────────────────────────────────────────
// Site data — ported verbatim from the original Next.js src/app/data/siteData.js
// Consumed by views via config('site.*'). Keeping it here (not the DB) keeps the
// site fully static and fast: no queries, everything renders from config cache.
// ─────────────────────────────────────────────────────────────────────────────

return [

    'nav_items' => [
        ['label' => 'Home', 'href' => '/'],
        ['label' => 'About Us', 'href' => '/about'],
        ['label' => 'Hire', 'href' => '/staff', 'children' => [
            ['label' => 'Developer', 'href' => '/staff/developer'],
            ['label' => 'Media Buyer', 'href' => '/staff/media'],
            ['label' => 'Designer', 'href' => '/staff/design'],
            ['label' => 'Marketing Associate', 'href' => '/staff/marketing'],
        ]],
        ['label' => 'Services', 'href' => '/services', 'children' => [
            ['label' => 'Development', 'href' => '/services/development'],
            ['label' => 'Designing', 'href' => '/services/design'],
            ['label' => 'Marketing', 'href' => '/services/marketing'],
            ['label' => 'AI Solutions', 'href' => '/services/ai'],
        ]],
        ['label' => 'Portfolio', 'href' => '/portfolio', 'children' => [
            ['label' => 'Development', 'href' => '/portfolio/development'],
            ['label' => 'Designing', 'href' => '/portfolio/design'],
        ]],
        ['label' => 'Industries We Serve', 'href' => '/industry'],
        ['label' => 'Blog', 'href' => '/blog'],
        ['label' => 'Contact Us', 'href' => '/contact'],
    ],

    // Mobile slide-in menu tree (items with children expand a sub-level)
    'menu_tree' => [
        ['id' => null, 'label' => 'Home', 'href' => '/'],
        ['id' => null, 'label' => 'About Us', 'href' => '/about'],
        ['id' => 'staff', 'label' => 'Hire', 'children' => [
            ['label' => 'Hire', 'href' => '/staff'],
            ['label' => 'Developer', 'href' => '/staff/developer'],
            ['label' => 'Media Buyer', 'href' => '/staff/media'],
            ['label' => 'Designer', 'href' => '/staff/design'],
            ['label' => 'Marketing Associate', 'href' => '/staff/marketing'],
        ]],
        ['id' => 'services', 'label' => 'Services', 'children' => [
            ['label' => 'Services', 'href' => '/services'],
            ['label' => 'Development', 'href' => '/services/development'],
            ['label' => 'Designing', 'href' => '/services/design'],
            ['label' => 'Marketing', 'href' => '/services/marketing'],
            ['label' => 'AI Solutions', 'href' => '/services/ai'],
        ]],
        ['id' => 'portfolio', 'label' => 'Portfolio', 'children' => [
            ['label' => 'Portfolio', 'href' => '/portfolio'],
            ['label' => 'Development', 'href' => '/portfolio/development'],
            ['label' => 'Designing', 'href' => '/portfolio/design'],
        ]],
        ['id' => null, 'label' => 'Industries We Serve', 'href' => '/industry'],
        ['id' => null, 'label' => 'Blog', 'href' => '/blog'],
        ['id' => null, 'label' => 'Contact Us', 'href' => '/contact'],
    ],

    'posts' => [
        ['id' => 1, 'title' => 'Designing for Scale: A SaaS Perspective', 'excerpt' => 'Discover the core principles behind building products that grow with your users without sacrificing quality or clarity.', 'image' => '/assets/ind1.webp', 'tag' => 'Design', 'date' => 'Mar 12, 2025'],
        ['id' => 2, 'title' => 'The Minimal Approach to Modern Branding', 'excerpt' => 'Less truly is more. Explore how restraint in visual identity creates a stronger, more memorable brand presence.', 'image' => '/assets/ind2.webp', 'tag' => 'Branding', 'date' => 'Mar 8, 2025'],
        ['id' => 3, 'title' => 'Typography Systems That Actually Work', 'excerpt' => 'A deep dive into building cohesive type hierarchies that communicate hierarchy, mood, and trust at every scale.', 'image' => '/assets/ind3.webp', 'tag' => 'Typography', 'date' => 'Feb 27, 2025'],
        ['id' => 4, 'title' => 'Color in Product: More Than Aesthetics', 'excerpt' => 'Color shapes perception and drives behavior. Learn how to use it purposefully across digital interfaces.', 'image' => '/assets/ind4.webp', 'tag' => 'Color Theory', 'date' => 'Feb 18, 2025'],
        ['id' => 5, 'title' => 'Motion Design for Meaningful UX', 'excerpt' => 'Micro-interactions and transitions done right can dramatically improve user confidence and engagement.', 'image' => '/assets/ind5.webp', 'tag' => 'Animation', 'date' => 'Feb 10, 2025'],
        ['id' => 6, 'title' => 'The Invisible Grid: Spacing in UI Design', 'excerpt' => "Consistent spacing is the invisible backbone of every great interface. Here's how to build and enforce it.", 'image' => '/assets/ind6.webp', 'tag' => 'Layout', 'date' => 'Jan 30, 2025'],
        ['id' => 7, 'title' => 'Dark Mode Done Right', 'excerpt' => "Dark themes aren't simply inverted colors. Learn the nuances that separate beautiful dark UIs from painful ones.", 'image' => '/assets/ind7.webp', 'tag' => 'UI Design', 'date' => 'Jan 21, 2025'],
        ['id' => 8, 'title' => 'Responsive Design in the Age of Foldables', 'excerpt' => 'New form factors demand new thinking. How to design fluid layouts that work across every screen shape.', 'image' => '/assets/ind8.webp', 'tag' => 'Responsive', 'date' => 'Jan 14, 2025'],
        ['id' => 9, 'title' => 'Accessibility as a Design Superpower', 'excerpt' => "Building inclusively doesn't constrain creativity — it expands it. Practical techniques for accessible design.", 'image' => '/assets/chooseSection.webp', 'tag' => 'Accessibility', 'date' => 'Jan 5, 2025'],
    ],

    'projects' => [
        ['id' => 1, 'type' => 'web', 'title' => 'NexusOS Dashboard', 'description' => 'A full-featured SaaS analytics platform with real-time data visualization, team collaboration, and advanced reporting.', 'image' => '/assets/portfolio/1.webp', 'tech' => ['Next.js', 'TypeScript', 'D3'], 'href' => '/portfolio/development'],
        ['id' => 2, 'type' => 'mobile', 'title' => 'Arcane Fitness App', 'description' => 'Cross-platform health and fitness tracker with AI-driven workout generation and progress visualization.', 'image' => '/assets/portfolio/2.webp', 'tech' => ['React Native', 'Expo', 'Supabase'], 'href' => '/portfolio/development'],
        ['id' => 3, 'type' => 'uiux', 'title' => 'Stratum E-Commerce', 'description' => 'High-performance online storefront with headless CMS, lightning-fast checkout, and dynamic product catalogs.', 'image' => '/assets/portfolio/3.webp', 'tech' => ['Next.js', 'Shopify', 'Tailwind'], 'href' => '/portfolio/design'],
        ['id' => 4, 'type' => 'custom', 'title' => 'Waypoint Travel', 'description' => 'Smart travel companion app with offline maps, AI-powered itinerary planning, and local recommendations.', 'image' => '/assets/portfolio/4.webp', 'tech' => ['Flutter', 'Firebase', 'Maps API'], 'href' => '/portfolio/development'],
        ['id' => 5, 'type' => 'web', 'title' => 'Orion CMS Platform', 'description' => 'A modern content management system built for editorial teams, with rich text editing and structured content APIs.', 'image' => '/assets/portfolio/5.webp', 'tech' => ['React', 'Node.js', 'PostgreSQL'], 'href' => '/portfolio/development'],
        ['id' => 6, 'type' => 'mobile', 'title' => 'Vaulted Finance', 'description' => 'Personal finance management app with budget tracking, expense categorization, and investment portfolio view.', 'image' => '/assets/portfolio/6.webp', 'tech' => ['React Native', 'Redux', 'Plaid API'], 'href' => '/portfolio/development'],
        ['id' => 7, 'type' => 'creative', 'title' => 'Velora Fashion Store', 'description' => 'Premium fashion e-commerce store with immersive product experiences, dynamic collections, and seamless AR previews.', 'image' => '/assets/portfolio/7.webp', 'tech' => ['Next.js', 'Redux', 'Motion'], 'href' => '/portfolio/design'],
        ['id' => 8, 'type' => 'custom', 'title' => 'ShiftLogic Fleet', 'description' => 'End-to-end fleet and delivery management application with real-time tracking, live route optimization, and team dashboards.', 'image' => '/assets/portfolio/8.webp', 'tech' => ['Flutter', 'Firebase', 'GMap'], 'href' => '/portfolio/development'],
        ['id' => 9, 'type' => 'creative', 'title' => 'Lumina Brand Platform', 'description' => 'Full brand identity system, custom design language, and high-performance marketing website for a modern creative studio.', 'image' => '/assets/portfolio/9.webp', 'tech' => ['React', 'GSAP', 'Sanity'], 'href' => '/portfolio/design'],
    ],

    'employees' => [
        ['id' => 1, 'name' => 'Fiza Tariq', 'role' => 'UI/UX Designer', 'img' => '/assets/1.webp', 'tag' => 'React · Next.js', 'type' => 'Design'],
        ['id' => 2, 'name' => 'Muhammad Junaid', 'role' => 'Social Media Manager', 'img' => '/assets/2.webp', 'tag' => 'On-Page · AEO', 'type' => 'Marketing'],
        ['id' => 3, 'name' => 'Zafar', 'role' => 'Web Developer', 'img' => '/assets/3.webp', 'tag' => 'Figma · Prototyping', 'type' => 'Developer'],
        ['id' => 4, 'name' => 'Shayan Tariq', 'role' => 'Web Developer', 'img' => '/assets/4.webp', 'tag' => 'Meta · Google Ads', 'type' => 'Developer'],
        ['id' => 5, 'name' => 'Huzaifa', 'role' => 'Graphic Designer', 'img' => '/assets/5.webp', 'tag' => 'Node.js · Python', 'type' => 'Design'],
        ['id' => 6, 'name' => 'Alia', 'role' => 'Marketing Specialist', 'img' => '/assets/6.webp', 'tag' => 'HubSpot · Automation', 'type' => 'Marketing'],
        ['id' => 7, 'name' => 'Zain', 'role' => 'WordPress Developer', 'img' => '/assets/7.webp', 'tag' => 'Illustrator · Branding', 'type' => 'Developer'],
        ['id' => 8, 'name' => 'Maryam', 'role' => 'Web Developer', 'img' => '/assets/8.webp', 'tag' => 'Premiere · After Effects', 'type' => 'Developer'],
    ],

    'categories' => [
        ['id' => 1, 'title' => 'Marketing Roles', 'tag' => 'Staff Augmentation', 'desc' => 'Data-driven marketers who blend strategy with modern automation tools to maximize ROI and pipeline velocity.', 'roles' => ['CRM Automation & AI Expert', 'Media Buyer', 'AEO & SEO Specialist'], 'accent' => '#D81D1F'],
        ['id' => 2, 'title' => 'Designer', 'tag' => 'Creative & Branding', 'desc' => 'Visual storytellers who craft intuitive interfaces and compelling brand identities that resonate with your audience.', 'roles' => ['UI/UX Design', 'Graphic Design', 'Video Editing'], 'accent' => '#D81D1F'],
        ['id' => 3, 'title' => 'Developer', 'tag' => 'Engineering', 'desc' => 'Full-stack engineers who build scalable, performant products — from pixel-perfect frontends to robust server architectures.', 'roles' => ['Frontend Development', 'Backend Development', 'Branding & Identity'], 'accent' => '#D81D1F'],
    ],
];
