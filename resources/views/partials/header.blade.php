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
                    <li class="sh-nav-item">
                        <a href="{{ $item['href'] }}" class="sh-nav-link">
                            <span class="nav-text-wrap">
                                <span class="nav-text-default">{{ $item['label'] }}</span>
                                <span class="nav-text-hover" aria-hidden="true">{{ $item['label'] }}</span>
                            </span>
                        </a>
                        @if (!empty($item['children']))
                            <div class="sh-dropdown">
                                @foreach ($item['children'] as $c)
                                    <a href="{{ $c['href'] }}" class="sh-drop-link">{{ $c['label'] }}</a>
                                @endforeach
                            </div>
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
