<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'CORAMMERS — Modern Digital Solutions')</title>
    <meta name="description" content="@yield('meta_description', 'We provide mobile, web, SEO, and email solutions to grow your business.')">
    <link rel="icon" href="/assets/logo/fav.webp" type="image/webp">

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

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800;900&family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @stack('styles')
</head>
<body>
    @include('partials.loader')
    @include('partials.header')
    @include('partials.menubar')
    @include('partials.search')
    @include('partials.cursor')

    <div class="page-wrapper page-ready">
        @yield('content')
    </div>

    @include('partials.footer')
    @include('partials.scroll-top')

    <script src="{{ asset('js/app.js') }}" defer></script>
    @stack('scripts')
</body>
</html>
