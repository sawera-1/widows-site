<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="theme-dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'CORAMMERS')</title>
    <meta name="description" content="@yield('description', 'CORAMMERS — High-performance mobile apps, modern websites, smart SEO strategies, and scalable solutions.')">

    <!-- Global CSS & JS via Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
    
    @stack('scripts')
</head>
<body class="antialiased w-full">

    <!-- Global Custom Cursor -->
    <div id="customCursor" aria-hidden="true">
        <div class="cursor-outer"></div>
        <div class="cursor-inner"></div>
    </div>

    <!-- Header -->
    @include('partials.header')

    <!-- Compact Menu Bar (mobile/scroll) -->
    @include('partials.menu-bar')

    <!-- Search Overlay -->
    @include('partials.search-overlay')

    <!-- Main Content -->
    <main id="pageMain" class="page-main">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('partials.footer')

    <!-- Scroll To Top -->
    <x-scroll-to-top />

    <script type="module">
        if (window.Alpine) {
            window.Alpine.start();
        }
    </script>
</body>
</html>
