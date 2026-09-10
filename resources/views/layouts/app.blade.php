<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- ── Core SEO ─────────────────────────────────────────────────────── --}}
    <title>@yield('title', 'Company Name — Web, Mobile, AI & Digital Marketing Agency')</title>
    <meta name="description" content="@yield('meta_description', 'Company Name builds high-performance websites, mobile apps, AI solutions and growth marketing. Engineering with vision — human + AI.')">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="robots" content="@yield('robots', 'index, follow, max-image-preview:large')">
    <meta name="theme-color" media="(prefers-color-scheme: light)" content="#ffffff">
    <meta name="theme-color" media="(prefers-color-scheme: dark)" content="#0b0b0d">

    {{-- Set theme BEFORE first paint so there is no light/dark flash --}}
    <script>
        (function () {
            try {
                var t = localStorage.getItem('codecaks-theme');
                if (t !== 'light' && t !== 'dark') {
                    t = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
                }
                document.documentElement.setAttribute('data-theme', t);
            } catch (e) {
                document.documentElement.setAttribute('data-theme', 'dark');
            }
        })();
    </script>

    {{-- ── Fonts: self-hosted woff2, @font-face inlined (zero render-blocking
         requests for font CSS; font-display swap keeps text visible) ─────── --}}
    <style>{!! file_get_contents(public_path('css/fonts.css')) !!}</style>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: ['class', '[data-theme="dark"]'],
            theme: {
                extend: {
                    colors: {
                        'mono': {
                            'bg-light': '#ffffff',
                            'bg-dark': '#000000',
                            'text-light': '#000000',
                            'text-dark': '#ffffff',
                            'border-light': '#e5e7eb',
                            'border-dark': '#374151',
                            'grey': '#737373',
                            'grey-light': '#f5f5f5',
                            'grey-dark': '#262626'
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif']
                    }
                }
            }
        }
    </script>
    <link rel="stylesheet" href="{{ asset_v('css/app.css') }}">
    @stack('styles')

    {{-- ── Icons ────────────────────────────────────────────────────────── --}}
    <link rel="icon" href="/favicon.ico" sizes="32x32">
    <link rel="icon" href="/assets/logo/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    {{-- ── Social cards (Open Graph + Twitter) ─────────────────────────── --}}
    <meta property="og:site_name" content="Company Name">
    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:title" content="@yield('title', 'Company Name — Web, Mobile, AI & Digital Marketing Agency')">
    <meta property="og:description" content="@yield('meta_description', 'Company Name builds high-performance websites, mobile apps, AI solutions and growth marketing. Engineering with vision — human + AI.')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="@yield('og_image', asset('assets/logo/og-image.png'))">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:locale" content="en_US">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'Company Name — Web, Mobile, AI & Digital Marketing Agency')">
    <meta name="twitter:description" content="@yield('meta_description', 'Company Name builds high-performance websites, mobile apps, AI solutions and growth marketing. Engineering with vision — human + AI.')">
    <meta name="twitter:image" content="@yield('og_image', asset('assets/logo/og-image.png'))">

    {{-- ── Structured data: Organization + WebSite (+ auto breadcrumbs) ── --}}
    @php
        $ldOrg = [
            '@context' => 'https://schema.org',
            '@type' => 'Organization',
            'name' => 'Company Name',
            'url' => url('/'),
            'logo' => asset('assets/logo/logo.png'),
            'email' => 'info@example.com',
            'contactPoint' => [[
                '@type' => 'ContactPoint',
                'email' => 'info@example.com',
                'contactType' => 'customer support',
            ]],
        ];
        $ldSite = [
            '@context' => 'https://schema.org',
            '@type' => 'WebSite',
            'name' => 'Company Name',
            'url' => url('/'),
            'potentialAction' => [
                '@type' => 'SearchAction',
                'target' => ['@type' => 'EntryPoint', 'urlTemplate' => url('/search').'?q={search_term_string}'],
                'query-input' => 'required name=search_term_string',
            ],
        ];
    @endphp
    <script type="application/ld+json">{!! json_encode($ldOrg, JSON_UNESCAPED_SLASHES) !!}</script>
    <script type="application/ld+json">{!! json_encode($ldSite, JSON_UNESCAPED_SLASHES) !!}</script>
    @if (count(request()->segments()) > 0)
        @php
            $bcLabels = [
                'about' => 'About', 'contact' => 'Contact', 'industry' => 'Industries',
                'blog' => 'Blog', 'detail' => 'Article', 'search' => 'Search',
                'staff' => 'Staff Augmentation', 'developer' => 'Hire Developers',
                'media' => 'Hire Social Media Experts', 'design' => 'Design',
                'marketing' => 'Marketing', 'services' => 'Services',
                'development' => 'Development', 'ai' => 'AI Solutions',
                'portfolio' => 'Portfolio',
            ];
            $bcItems = [['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => url('/')]];
            $bcPath = '';
            foreach (request()->segments() as $i => $seg) {
                $bcPath .= '/'.$seg;
                $bcItems[] = [
                    '@type' => 'ListItem',
                    'position' => $i + 2,
                    'name' => $bcLabels[$seg] ?? \Illuminate\Support\Str::title(str_replace('-', ' ', $seg)),
                    'item' => url($bcPath),
                ];
            }
            $ldCrumbs = ['@context' => 'https://schema.org', '@type' => 'BreadcrumbList', 'itemListElement' => $bcItems];
        @endphp
        <script type="application/ld+json">{!! json_encode($ldCrumbs, JSON_UNESCAPED_SLASHES) !!}</script>
    @endif
    @stack('schema')
</head>
<body>
    @include('partials.header')

    <div class="page-wrapper page-ready">
        @yield('content')
    </div>

    @include('partials.footer')

    <script src="{{ asset_v('js/app.js') }}" defer></script>
    @stack('scripts')
</body>
</html>
