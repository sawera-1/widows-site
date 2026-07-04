@php
$MENU_TREE = [
  ['id' => null, 'label' => 'Home', 'href' => '/'],
  ['id' => null, 'label' => 'About Us', 'href' => '/about'],
  [
    'id' => 'staff', 'label' => 'Hire',
    'children' => [
      ['label' => 'Hire', 'href' => '/hire'],
      ['label' => 'Developer', 'href' => '/hire/developer'],
      ['label' => 'Media Buyer', 'href' => '/hire/media'],
      ['label' => 'Designer', 'href' => '/hire/designer'],
      ['label' => 'Marketing Associate', 'href' => '/hire/marketing'],
    ],
  ],
  [
    'id' => 'services', 'label' => 'Services',
    'children' => [
      ['label' => 'Services', 'href' => '/services'],
      ['label' => 'Development', 'href' => '/services/development'],
      ['label' => 'Designing', 'href' => '/services/design'],
      ['label' => 'Marketing', 'href' => '/services/marketing'],
      ['label' => 'AI Solutions', 'href' => '/services/ai'],
    ],
  ],
  [
    'id' => 'portfolio', 'label' => 'Portfolio',
    'children' => [
      ['label' => 'Portfolio', 'href' => '/portfolio'],
      ['label' => 'Development', 'href' => '/portfolio/development'],
      ['label' => 'Designing', 'href' => '/portfolio/design'],
    ],
  ],
  ['id' => null, 'label' => 'Blog', 'href' => '/blog'],
  ['id' => null, 'label' => 'Industries We Serve', 'href' => '/industry'],
  ['id' => null, 'label' => 'Contact Us', 'href' => '/contact'],
];
@endphp

<!-- Compact Bar (appears after scroll) -->
<div id="compactBar" class="compact-bar" role="navigation" aria-label="Compact navigation">
    <!-- Search -->
    <button class="cb-icon-btn" id="cbSearchBtn" aria-label="Open search">
        <svg width="15" height="15" viewBox="0 0 24 24" fill="none"
             stroke="currentColor" stroke-width="2.3"
             stroke-linecap="round" stroke-linejoin="round">
            <circle cx="11" cy="11" r="8" /><line x1="21" y1="21" x2="16.65" y2="16.65" />
        </svg>
    </button>

    <div class="cb-sep" aria-hidden="true"></div>

    <!-- Theme toggle -->
    <button class="cb-theme-toggle" id="cbThemeBtn" aria-label="Toggle theme">
        <span class="cb-theme-knob"></span>
    </button>

    <div class="cb-sep" aria-hidden="true"></div>

    <!-- Menu button -->
    <button class="cb-menu-btn" id="cbMenuBtn" aria-label="Open navigation menu" aria-expanded="false">
        <span class="cb-menu-label">Menu</span>
        <span class="cb-burger" aria-hidden="true">
            <span></span><span></span>
        </span>
    </button>
</div>

<!-- Backdrop -->
<div id="menuBackdrop" class="menu-backdrop" aria-hidden="true"></div>

<!-- Menu Panel -->
<div id="menuPanel" class="menu-panel" role="dialog" aria-modal="true" aria-label="Navigation menu">
    <!-- Close handle -->
    <div class="mp-header">
        <button class="mp-close-btn" id="mpCloseBtn" aria-label="Close menu"></button>
    </div>

    <div class="mp-viewport">
        <!-- Level 0: main items -->
        <div id="mpLevel0" class="mp-level-0">
            <ul style="padding: 2px 0 8px; margin: 0; list-style: none;">
                <li><span class="mp-eyebrow">Menu</span></li>
                @foreach($MENU_TREE as $item)
                    @if(isset($item['id']))
                        <li>
                            <button class="mp-link has-submenu" data-target="{{ $item['id'] }}">
                                {{ $item['label'] }}
                                <svg width="7" height="12" viewBox="0 0 7 12" fill="none"
                                     stroke="currentColor" stroke-width="2"
                                     stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="1 1 6 6 1 11" />
                                </svg>
                            </button>
                        </li>
                    @else
                        <li>
                            <a href="{{ url($item['href']) }}" class="mp-link" style="text-decoration: none;">
                                {{ $item['label'] }}
                            </a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>

        <!-- Sub-levels -->
        <div id="mpSublevels" class="mp-sublevels-container">
            @foreach($MENU_TREE as $item)
                @if(isset($item['id']) && isset($item['children']))
                    <div class="mp-sublevel slide-in" id="submenu-{{ $item['id'] }}" style="display: none;">
                        <button class="mp-back-btn" aria-label="Back to main menu">
                            &larr; Back
                        </button>
                        <ul style="padding: 2px 0 8px; margin: 0; list-style: none;">
                            @foreach($item['children'] as $child)
                                <li>
                                    <a href="{{ url($child['href']) }}" class="mp-link" style="text-decoration: none;">
                                        {{ $child['label'] }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>
