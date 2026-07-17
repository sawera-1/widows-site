{{-- Desktop header. Reveal-on-load + hide-on-scroll handled by app.js (adds
     .is-revealed / .is-hidden). Dropdowns + nav hover are pure CSS. --}}
<header class="sh-root" data-header>
    <div class="sh-inner">

        <a href="/" class="sh-logo" aria-label="Home">
            @include('partials.logo', ['h' => 36])
        </a>

        <nav class="sh-nav" aria-label="Primary navigation">
            <ul class="sh-nav-list">
                @foreach (config('site.nav_items') as $item)
                    <li class="sh-nav-item{{ !empty($item['children']) ? ' sh-has-drop' : '' }}">
                        <a href="{{ $item['href'] }}" class="sh-nav-link">
                            <span class="nav-text-wrap">
                                <span class="nav-text-default">{{ $item['label'] }}</span>
                                <span class="nav-text-hover" aria-hidden="true">{{ $item['label'] }}</span>
                            </span>
                            @if (!empty($item['children']))
                                <svg class="sh-chevron" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
                            @endif
                        </a>
                        @if (!empty($item['children']))
                            @if ($item['label'] === 'Services')
                                <div class="sh-dropdown sh-mega">
                                    <!-- Mobile/Tablet simple dropdown -->
                                    <div class="sh-mega-mobile-only">
                                        <a href="/services/development" class="sh-drop-link">Development</a>
                                        <a href="/services/design" class="sh-drop-link">Design</a>
                                        <a href="/services/marketing" class="sh-drop-link">Marketing</a>
                                        <a href="/services/ai" class="sh-drop-link">AI</a>
                                    </div>

                                    <!-- Desktop Mega Menu -->
                                    <div class="sh-mega-desktop-only">
                                        <!-- Top Row: Category Buttons -->
                                        <div class="sh-mega-header">
                                            <a href="/services/development" class="sh-mega-cat">Development</a>
                                            <a href="/services/design" class="sh-mega-cat">Design</a>
                                            <a href="/services/marketing" class="sh-mega-cat">Marketing</a>
                                            <a href="/services/ai" class="sh-mega-cat">AI</a>
                                        </div>
                                        <!-- Bottom Row: Links -->
                                        <div class="sh-mega-body">
                                            <!-- Development -->
                                            <div class="sh-mega-col">
                                                <a href="/services/development" class="sh-mega-link">Website Development</a>
                                                <a href="/services/development" class="sh-mega-link">E-Commerce Development</a>
                                                <a href="/services/development" class="sh-mega-link">Mobile App Development</a>
                                                <a href="/services/development" class="sh-mega-link">Custom Development</a>
                                            </div>
                                            <!-- Design -->
                                            <div class="sh-mega-col">
                                                <a href="/services/design" class="sh-mega-link">UI/UX Design</a>
                                                <a href="/services/design" class="sh-mega-link">Graphic Design</a>
                                                <a href="/services/design" class="sh-mega-link">Video Editing</a>
                                                <a href="/services/design" class="sh-mega-link">Visual Systems</a>
                                            </div>
                                            <!-- Marketing -->
                                            <div class="sh-mega-col">
                                                <a href="/services/marketing/social" class="sh-mega-link">Social Media Marketing</a>
                                                <a href="/services/marketing/media" class="sh-mega-link">Media Buying & Paid Ads</a>
                                                <a href="/services/marketing/email" class="sh-mega-link">Email Marketing</a>
                                                <a href="/services/marketing/seo" class="sh-mega-link">SEO / AEO</a>
                                            </div>
                                            <!-- AI -->
                                            <div class="sh-mega-col">
                                                <a href="/services/ai/automation" class="sh-mega-link">AI Automation</a>
                                                <a href="/services/ai/content" class="sh-mega-link">AI Content Creation</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="sh-dropdown">
                                    @foreach ($item['children'] as $c)
                                        <a href="{{ $c['href'] }}" class="sh-drop-link">{{ $c['label'] }}</a>
                                    @endforeach
                                </div>
                            @endif
                        @endif
                    </li>
                @endforeach
            </ul>
        </nav>

        <div class="sh-right">
            <button class="sh-search-btn" data-open-search aria-label="Open search">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="11" cy="11" r="8" />
                    <line x1="21" y1="21" x2="16.65" y2="16.65" />
                </svg>
            </button>
            <button class="sh-theme-toggle" data-toggle-theme aria-label="Toggle colour theme">
                <span class="sh-theme-knob"></span>
            </button>
        </div>

        <button class="sh-mobile-menu-btn" data-open-menu aria-label="Open navigation menu">
            <span>Menu</span>
            <span class="sh-mobile-burger" aria-hidden="true"><span></span><span></span></span>
        </button>

    </div>
</header>
