export const NAV_ITEMS = [
    { label: 'Home', href: '/' },
    { label: 'About Us', href: '/about' },
    {
        label: 'Hire',
        href: '/staff',
        children: [
            { label: 'Developer', href: '/staff/developer' },
            { label: 'Media Buyer', href: '/staff/media' },
            { label: 'Designer', href: '/staff/design' },
            { label: 'Marketing Associate', href: '/staff/marketing' },
        ],
    },
    {
        label: 'Services',
        href: '/services',
        children: [
            { label: 'Development', href: '/services/development' },
            { label: 'Designing', href: '/services/design' },
            { label: 'Marketing', href: '/services/marketing' },
            { label: 'AI Solutions', href: '/services/ai' },
        ],
    },
    {
        label: 'Portfolio',
        href: '/portfolio',
        children: [
            { label: 'Development', href: '/portfolio/development' },
            { label: 'Designing', href: '/portfolio/design' },
        ],
    },
    { label: 'Blog', href: '/blog' },
    { label: 'Contact Us', href: '/contact' },
];

export const ALL_POSTS = [
    {
        id: 1,
        title: "Designing for Scale: A SaaS Perspective",
        excerpt: "Discover the core principles behind building products that grow with your users without sacrificing quality or clarity.",
        image: "/assets/ind1.webp",
        detailImage: "/assets/ind1.webp",
        tag: "Design",
        date: "Mar 12, 2025",
        readTime: "8 min read",
        sections: [
            {
                heading: "Why Scale Changes Everything",
                body: "Building a product for 100 users is a fundamentally different challenge than building for 100,000. At scale, every design decision from information architecture to micro-copy carries exponentially greater consequences. A SaaS product that doesn't anticipate growth will become a liability the moment it succeeds.",
            },
            {
                heading: "Modular Component Systems",
                body: "The foundation of scalable design is a robust component library. Rather than designing individual screens, invest in reusable atoms  buttons, inputs, cards, modals that can be composed into any feature without starting from scratch. Tools like Storybook and Figma's component variants make this systematic.",
            },
            {
                heading: "Information Architecture Under Pressure",
                body: "Navigation structures that work for five features rarely survive twenty. Plan for growth by grouping features by user intent rather than product category. Progressive disclosure hiding complexity until the user needs it keeps interfaces clean without sacrificing depth.",
            },
            {
                heading: "Performance Is a Design Responsibility",
                body: "Designers who ignore load times, animation frame rates, and data density are designing for ideal conditions that rarely exist. Work closely with engineers from day one. Define performance budgets and treat them with the same rigor as visual specifications.",
            },
        ],
    },
    {
        id: 2,
        title: "The Minimal Approach to Modern Branding",
        excerpt: "Less truly is more. Explore how restraint in visual identity creates a stronger, more memorable brand presence.",
        image: "/assets/ind2.webp",
        detailImage: "/assets/ind2.webp",
        tag: "Branding",
        date: "Mar 8, 2025",
        readTime: "6 min read",
        sections: [
            {
                heading: "The Power of Restraint",
                body: "Minimalism in branding isn't about doing less it's about doing exactly what is needed and nothing more. Every visual element earns its place. When brands strip away the superfluous, what remains is signal: a clear, confident statement about who they are and what they stand for.",
            },
            {
                heading: "Whitespace as a Premium Signal",
                body: "Luxury brands have long understood that whitespace communicates confidence. It says: we don't need to fight for your attention. Generous margins, open layouts, and unhurried pacing create an experience that feels considered rather than cluttered.",
            },
            {
                heading: "Color with Purpose",
                body: "A minimal brand palette often just one or two primary colors forces intentionality. Each application of color becomes meaningful. Apple's use of silver and white, Stripe's gradient from purple to blue, Notion's near-monochrome palette all instantly recognizable precisely because of their restraint.",
            },
            {
                heading: "Typography as Identity",
                body: "When imagery is sparse, type carries the brand. A distinctive, well-set typeface becomes a signature. Consider custom lettering or an unusual combination of weights and sizes that creates a recognizable rhythm one that users will associate with your brand across every touchpoint.",
            },
        ],
    },
    {
        id: 3,
        title: "Typography Systems That Actually Work",
        excerpt: "A deep dive into building cohesive type hierarchies that communicate hierarchy, mood, and trust at every scale.",
        image: "/assets/ind3.webp",
        detailImage: "/assets/ind3.webp",
        tag: "Typography",
        date: "Feb 27, 2025",
        readTime: "10 min read",
        sections: [
            {
                heading: "Start with a Scale, Not Sizes",
                body: "A typography system begins with a modular scale a mathematical ratio that determines every font size in the interface. Common scales use ratios like 1.25 (Major Third) or 1.333 (Perfect Fourth). The result is a set of sizes that feel harmonically related rather than arbitrary.",
            },
            {
                heading: "Pairing Fonts Without Chaos",
                body: "The safest approach to font pairing: use one typeface. The second safest: use two typefaces from the same superfamily or designer. When venturing further, pair contrasting styles a geometric sans-serif with a humanist serif and let one dominate while the other supports.",
            },
            {
                heading: "Line Length and Leading",
                body: "Optimal reading line length sits between 50–75 characters. Below 45, eyes tire from constant line changes. Above 85, readers lose their place. Line height (leading) should typically be 1.4–1.7× the font size for body copy enough breathing room without making content feel sparse.",
            },
            {
                heading: "Hierarchy Through Weight and Space",
                body: "Resist the temptation to use color to establish hierarchy — use weight, size, and spacing first. A bold 32px heading, a medium 18px subheading, and a regular 16px body creates clear hierarchy without a single color change. Color then becomes a tool for emphasis, not structure.",
            },
        ],
    },
    {
        id: 4,
        title: "Color in Product: More Than Aesthetics",
        excerpt: "Color shapes perception and drives behavior. Learn how to use it purposefully across digital interfaces.",
        image: "/assets/ind4.webp",
        detailImage: "/assets/ind4.webp",
        tag: "Color Theory",
        date: "Feb 18, 2025",
        readTime: "7 min read",
        sections: [
            {
                heading: "Color Communicates Before Words Do",
                body: "Users process color 60,000 times faster than text. Before a single word is read, the palette of your interface has already communicated a mood, a level of trust, and a brand personality. This isn't a styling decision it's a communication strategy.",
            },
            {
                heading: "The 60-30-10 Rule in Digital UI",
                body: "Borrow from interior design: 60% dominant color (backgrounds, large surfaces), 30% secondary (cards, sidebars), 10% accent (CTAs, links, highlights). This distribution creates visual balance and ensures your most important elements the 10% always stand out.",
            },
            {
                heading: "Semantic Color Systems",
                body: "Define colors by their meaning, not their appearance. A 'success' token should be green, but the exact shade should adapt to dark/light mode. Using semantic tokens like `--color-success`, `--color-warning`, and `--color-error` decouples your design from implementation details and makes theming effortless.",
            },
            {
                heading: "Contrast and Accessibility",
                body: "WCAG 2.1 requires a contrast ratio of at least 4.5:1 for normal text and 3:1 for large text. Use tools like Stark or the Chrome DevTools contrast checker as part of your design review. Accessible color choices don't compromise aesthetics they sharpen it.",
            },
        ],
    },
    {
        id: 5,
        title: "Motion Design for Meaningful UX",
        excerpt: "Micro-interactions and transitions done right can dramatically improve user confidence and engagement.",
        image: "/assets/ind5.webp",
        detailImage: "/assets/ind5.webp",
        tag: "Animation",
        date: "Feb 10, 2025",
        readTime: "5 min read",
        sections: [
            {
                heading: "Motion as Communication",
                body: "Every animation in your interface carries meaning. A modal that fades in from the center suggests it appeared from nowhere — use a slide from the trigger element instead to show spatial relationship. When motion reflects the mental model of the interaction, interfaces become intuitive.",
            },
            {
                heading: "The 12 Principles Applied Digitally",
                body: "Disney's 12 principles of animation translate directly to UI. Squash and stretch gives buttons a satisfying click. Anticipation (a brief counter-motion) before a loading state sets expectations. Ease-in and ease-out make motion feel physical rather than mechanical.",
            },
            {
                heading: "Duration and Easing",
                body: "Most UI animations should live between 150ms and 400ms. Below 100ms feels instantaneous (and thus pointless). Above 500ms starts to feel slow and obstructive. Use ease-out for elements entering the screen (fast start, gentle stop) and ease-in for elements leaving (slow start, fast exit).",
            },
            {
                heading: "Respect User Preferences",
                body: "Always honor the `prefers-reduced-motion` media query. For users with vestibular disorders, motion can cause nausea and disorientation. Provide instant or opacity-only transitions as fallbacks. This isn't just an accessibility best practice it's a fundamental sign of respect for your users.",
            },
        ],
    },
    {
        id: 6,
        title: "The Invisible Grid: Spacing in UI Design",
        excerpt: "Consistent spacing is the invisible backbone of every great interface. Here's how to build and enforce it.",
        image: "/assets/ind6.webp",
        detailImage: "/assets/ind6.webp",
        tag: "Layout",
        date: "Jan 30, 2025",
        readTime: "9 min read",
        sections: [
            {
                heading: "Why Spacing Matters More Than Color",
                body: "Users may not consciously notice consistent spacing, but they feel it. An interface with harmonious spacing reads as professional and trustworthy. One with inconsistent gaps feels rushed and cheap even if the colors and typography are excellent. Spacing is the silent quality signal.",
            },
            {
                heading: "The 8-Point Grid System",
                body: "Base your entire spacing system on multiples of 8px: 8, 16, 24, 32, 48, 64, 96. This works because most screens have pixel densities that divide evenly by 8, ensuring crisp renders. Use 4px only for internal component padding and fine adjustments never for layout spacing.",
            },
            {
                heading: "Proximity and Grouping",
                body: "Gestalt psychology tells us that elements close together are perceived as a group. Use this deliberately: reduce the gap between a label and its input, increase the gap between separate form sections. Spacing becomes your layout's grammar it tells the story of how elements relate.",
            },
            {
                heading: "Enforcing the System in Practice",
                body: "Define spacing tokens in your design system and make them the only option. In CSS, use a custom property scale: `--space-1: 8px`, `--space-2: 16px`, etc. In Figma, use auto-layout with fixed gap values from your scale. When deviation requires justification, the system is working.",
            },
        ],
    },
    {
        id: 7,
        title: "Dark Mode Done Right",
        excerpt: "Dark themes aren't simply inverted colors. Learn the nuances that separate beautiful dark UIs from painful ones.",
        image: "/assets/ind7.webp",
        detailImage: "/assets/ind7.webp",
        tag: "UI Design",
        date: "Jan 21, 2025",
        readTime: "12 min read",
        sections: [
            {
                heading: "Don't Invert — Redesign",
                body: "The most common dark mode mistake is inverting the light palette. Inverted colors look jarring and wrong. Instead, design a parallel palette from scratch: dark backgrounds should sit around #121212–#1e1e1e, surfaces slightly lighter, and text at around 87% opacity white — never pure #ffffff on pure #000000.",
            },
            {
                heading: "Elevation Through Lightness",
                body: "In light mode, shadows create elevation. In dark mode, shadows are nearly invisible on dark surfaces. Use subtle lightness differences instead: a card might be #1a1a1a on a #121212 background. As surfaces get 'higher', they get slightly lighter this is Material Design's elevation system for dark mode.",
            },
            {
                heading: "Saturated Colors Need Adjustment",
                body: "Bright, saturated colors that work on white backgrounds can cause eye strain on dark ones. Desaturate your accent palette by 10–20% for dark mode, and consider lightening it slightly. Your green #355847 in light mode might become #bcea3e in dark fundamentally different, both carefully chosen.",
            },
            {
                heading: "System Integration and Persistence",
                body: "Always respect `prefers-color-scheme`. Offer a manual toggle but default to the system preference. Persist the user's choice in localStorage. Test on real OLED screens pure black (#000000) bleeds into the pixels and can cause a 'halo' effect around bright elements that looks unprofessional.",
            },
        ],
    },
    {
        id: 8,
        title: "Responsive Design in the Age of Foldables",
        excerpt: "New form factors demand new thinking. How to design fluid layouts that work across every screen shape.",
        image: "/assets/ind8.webp",
        detailImage: "/assets/ind8.webp",
        tag: "Responsive",
        date: "Jan 14, 2025",
        readTime: "8 min read",
        sections: [
            {
                heading: "Beyond Breakpoints",
                body: "Traditional responsive design was binary: mobile or desktop. Foldables and the proliferation of tablets, ultra-wide monitors, and continuous-fold screens demand a more fluid approach. Design with `clamp()`, viewport units, and intrinsic sizing rather than a cascade of rigid breakpoints.",
            },
            {
                heading: "The Continuation State",
                body: "Foldable devices introduce a concept traditional web design has never had to consider: the continuation state. When a user unfolds their device mid-task, the interface should expand gracefully maintaining context, preserving scroll position, and adapting layout without disruption. Test this transition explicitly.",
            },
            {
                heading: "CSS Grid as a Responsive Engine",
                body: "Modern CSS Grid with `auto-fill`, `minmax()`, and `grid-template-areas` eliminates the need for most breakpoints. A grid that reflows from one column to four based purely on available space handles any viewport including the ones that don't exist yet. Write layout logic once.",
            },
            {
                heading: "Touch, Stylus, and Keyboard",
                body: "New form factors bring new input methods. Design hit targets of at least 44×44px for touch. Consider hover states for stylus input (Samsung DeX, iPad). Ensure full keyboard navigability for when the device is docked. A truly responsive design responds to interaction paradigm, not just screen size.",
            },
        ],
    },
    {
        id: 9,
        title: "Accessibility as a Design Superpower",
        excerpt: "Building inclusively doesn't constrain creativity — it expands it. Practical techniques for accessible design.",
        image: "/assets/chooseSection.webp",
        detailImage: "/assets/chooseSection.webp",
        tag: "Accessibility",
        date: "Jan 5, 2025",
        readTime: "11 min read",
        sections: [
            {
                heading: "Accessibility Expands Your Audience",
                body: "1 in 4 adults in the US has some form of disability. Designing accessibly isn't a niche concern — it's designing for a massive segment of your users who are currently being failed. Beyond legal compliance, accessible products are simply better products: cleaner, clearer, and more robust.",
            },
            {
                heading: "Semantic HTML Is the Foundation",
                body: "Before ARIA, before keyboard handlers, before contrast checkers there is semantic HTML. A `<button>` is keyboard navigable and announces itself to screen readers by default. An `<h1>` creates document structure that assistive tech depends on. Getting semantics right costs nothing and fixes half your accessibility problems automatically.",
            },
            {
                heading: "Focus Management and Keyboard Navigation",
                body: "Every interactive element must be reachable by keyboard in a logical order. Modals should trap focus while open and return it to the trigger on close. Custom components like carousels and dropdowns require explicit ARIA roles and keyboard event handling. Test with Tab, Shift+Tab, Enter, Space, and the arrow keys.",
            },
            {
                heading: "Designing for Cognitive Load",
                body: "Accessibility isn't only about screen readers and motor impairment. Cognitive accessibility clear language, predictable navigation, consistent patterns, forgiving error states — benefits everyone. A user with dyslexia who can read your interface is the same user who's distracted, tired, or using your app for the first time.",
            },
        ],
    },
];

export const PROJECTS = [
    {
        id: 1, type: 'web', title: 'NexusOS Dashboard',
        description: 'A full-featured SaaS analytics platform with real-time data visualization, team collaboration, and advanced reporting.',
        image: '/assets/review1.webp',
        tech: ['Next.js', 'TypeScript', 'D3'],
        href: '/portfolio/development'
    },
    {
        id: 2, type: 'mobile', title: 'Arcane Fitness App',
        description: 'Cross-platform health and fitness tracker with AI-driven workout generation and progress visualization.',
        image: '/assets/review2.webp',
        tech: ['React Native', 'Expo', 'Supabase'],
        href: '/portfolio/development'
    },
    {
        id: 3, type: 'uiux', title: 'Stratum E-Commerce',
        description: 'High-performance online storefront with headless CMS, lightning-fast checkout, and dynamic product catalogs.',
        image: '/assets/review3.webp',
        tech: ['Next.js', 'Shopify', 'Tailwind'],
        href: '/portfolio/design'
    },
    {
        id: 4, type: 'custom', title: 'Waypoint Travel',
        description: 'Smart travel companion app with offline maps, AI-powered itinerary planning, and local recommendations.',
        image: '/assets/review4.webp',
        tech: ['Flutter', 'Firebase', 'Maps API'],
        href: '/portfolio/development'
    },
    {
        id: 5, type: 'web', title: 'Orion CMS Platform',
        description: 'A modern content management system built for editorial teams, with rich text editing and structured content APIs.',
        image: '/assets/review5.webp',
        tech: ['React', 'Node.js', 'PostgreSQL'],
        href: '/portfolio/development'
    },
    {
        id: 6, type: 'mobile', title: 'Vaulted Finance',
        description: 'Personal finance management app with budget tracking, expense categorization, and investment portfolio view.',
        image: '/assets/review6.webp',
        tech: ['React Native', 'Redux', 'Plaid API'],
        href: '/portfolio/development'
    },
    {
        id: 7, type: 'creative', title: 'Velora Fashion Store',
        description: 'Premium fashion e-commerce store with immersive product experiences, dynamic collections, and seamless AR previews.',
        image: '/assets/review7.webp',
        tech: ['Next.js', 'Redux', 'Motion'],
        href: '/portfolio/design'
    },
    {
        id: 8, type: 'custom', title: 'ShiftLogic Fleet',
        description: 'End-to-end fleet and delivery management application with real-time tracking, live route optimization, and team dashboards.',
        image: '/assets/review8.webp',
        tech: ['Flutter', 'Firebase', 'GMap'],
        href: '/portfolio/development'
    },
    {
        id: 9, type: 'creative', title: 'Lumina Brand Platform',
        description: 'Full brand identity system, custom design language, and high-performance marketing website for a modern creative studio.',
        image: '/assets/review9.webp',
        tech: ['React', 'GSAP', 'Sanity'],
        href: '/portfolio/design'
    },
];

export const EMPLOYEES = [
    { id: 1, name: "Fiza Tariq", role: "UI/UX Designer", img: "/assets/1.webp", tag: "React · Next.js", type: "Design" },
    { id: 2, name: "Muhammad Junaid", role: "Social Media Manager", img: "/assets/2.webp", tag: "On-Page · AEO", type: "Marketing" },
    { id: 3, name: "Zafar", role: "Web Developer", img: "/assets/3.webp", tag: "Figma · Prototyping", type: "Developer" },
    { id: 4, name: "Shayan Tariq", role: "Web Developer", img: "/assets/4.webp", tag: "Meta · Google Ads", type: "Developer" },
    { id: 5, name: "Huzaifa", role: "Graphic Designer", img: "/assets/5.webp", tag: "Node.js · Python", type: "Design" },
    { id: 6, "name": "Alia", role: "Marketing Specialist", img: "/assets/6.webp", tag: "HubSpot · Automation", type: "Marketing" },
    { id: 7, name: "Zain", role: "WordPress Developer", img: "/assets/7.webp", tag: "Illustrator · Branding", type: "Developer" },
    { id: 8, name: "Maryam", role: "Web Developer", img: "/assets/8.webp", tag: "Premiere · After Effects", type: "Developer" },
];

export const CATEGORIES = [
    {
        id: 1,
        title: "Marketing Roles",
        tag: "Staff Augmentation",
        desc: "Data-driven marketers who blend strategy with modern automation tools to maximize ROI and pipeline velocity.",
        roles: ["CRM Automation & AI Expert", "Media Buyer", "AEO & SEO Specialist"],
        accent: "#bcea3e",
    },
    {
        id: 2,
        title: "Designer",
        tag: "Creative & Branding",
        desc: "Visual storytellers who craft intuitive interfaces and compelling brand identities that resonate with your audience.",
        roles: ["UI/UX Design", "Graphic Design", "Video Editing"],
        accent: "#bcea3e",
    },
    {
        id: 3,
        title: "Developer",
        tag: "Engineering",
        desc: "Full-stack engineers who build scalable, performant products — from pixel-perfect frontends to robust server architectures.",
        roles: ["Frontend Development", "Backend Development", "Branding & Identity"],
        accent: "#bcea3e",
    },
];
