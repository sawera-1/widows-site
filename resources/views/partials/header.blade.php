@php
$NAV_ITEMS = [
  ['label' => 'Home', 'href' => '/'],
  ['label' => 'About Us', 'href' => '/about'],
  [
    'label' => 'Hire',
    'href' => '/hire',
    'children' => [
      ['label' => 'Developer', 'href' => '/hire/developer'],
      ['label' => 'Media Buyer', 'href' => '/hire/media'],
      ['label' => 'Designer', 'href' => '/hire/designer'],
      ['label' => 'Marketing Associate', 'href' => '/hire/marketing'],
    ],
  ],
  [
    'label' => 'Services',
    'href' => '/services',
    'children' => [
      ['label' => 'Development', 'href' => '/services/development'],
      ['label' => 'Designing', 'href' => '/services/design'],
      ['label' => 'Marketing', 'href' => '/services/marketing'],
      ['label' => 'AI Solutions', 'href' => '/services/ai'],
    ],
  ],
  [
    'label' => 'Portfolio',
    'href' => '/portfolio',
    'children' => [
      ['label' => 'Development', 'href' => '/portfolio/development'],
      ['label' => 'Designing', 'href' => '/portfolio/design'],
    ],
  ],
  ['label' => 'Blog', 'href' => '/blog'],
  ['label' => 'Contact', 'href' => '/contact'],
];
@endphp

<header id="siteHeader" class="sh-root">
    <div class="sh-inner">

        <!-- Logo -->
        <a href="{{ url('/') }}" class="sh-logo" aria-label="Home">
            <img src="{{ asset('assets/logo/logolight.png') }}"
                 alt="CORAMMERS Logo"
                 class="sh-logo-img logo-light" />

            <img src="{{ asset('assets/logo/logodark.png') }}"
                 alt="CORAMMERS Logo"
                 class="sh-logo-img logo-dark" />
        </a>

        <!-- Centered Nav (desktop only) -->
        <nav class="sh-nav" aria-label="Primary navigation">
            <ul id="headerNavList" class="sh-nav-list">
                @foreach($NAV_ITEMS as $item)
                <li class="sh-nav-item" data-dropdown="{{ $item['label'] }}">
                    <a href="{{ isset($item['href']) ? url($item['href']) : '#' }}" class="sh-nav-link">
                        <span class="nav-text-wrap">
                            <span class="nav-text-default">{{ $item['label'] }}</span>
                            <span class="nav-text-hover" aria-hidden="true">{{ $item['label'] }}</span>
                        </span>
                    </a>
                    
                    @if(isset($item['children']))
                    <div class="sh-dropdown">
                        @foreach($item['children'] as $child)
                        <a href="{{ url($child['href']) }}" class="sh-drop-link">{{ $child['label'] }}</a>
                        @endforeach
                    </div>
                    @endif
                </li>
                @endforeach
            </ul>
        </nav>

        <!-- Right Controls -->
        <div class="sh-right">
            <!-- Search Button -->
            <button id="headerSearchBtn" class="sh-search-btn" aria-label="Open search">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                </svg>
            </button>
            
            <!-- Theme Toggle -->
            <button id="headerThemeBtn" class="sh-theme-toggle" aria-label="Toggle Theme">
                <div class="sh-theme-knob"></div>
            </button>
            
            <!-- Mobile Menu Toggle -->
            <button id="headerMobileMenuBtn" class="sh-mobile-menu-btn" aria-label="Open menu">
                <span>Menu</span>
                <span class="sh-mobile-burger" aria-hidden="true">
                    <span></span><span></span>
                </span>
            </button>
        </div>
    </div>
</header>
