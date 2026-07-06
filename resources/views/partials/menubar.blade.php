{{-- Compact bar appears after 80px scroll (app.js toggles .is-visible).
     Mobile slide-in panel with a one-level sub-menu, driven by app.js. --}}
<div class="compact-bar" data-compact-bar role="navigation" aria-label="Compact navigation">
    <button class="cb-icon-btn" data-open-search aria-label="Open search">
        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="11" cy="11" r="8" /><line x1="21" y1="21" x2="16.65" y2="16.65" />
        </svg>
    </button>
    <div class="cb-sep" aria-hidden="true"></div>
    <button class="cb-theme-toggle" data-toggle-theme aria-label="Toggle colour theme">
        <span class="cb-theme-knob"></span>
    </button>
    <div class="cb-sep" aria-hidden="true"></div>
    <button class="cb-menu-btn" data-open-menu aria-label="Open navigation menu">
        <span class="cb-menu-label">Menu</span>
        <span class="cb-burger" aria-hidden="true"><span></span><span></span></span>
    </button>
</div>

<div class="menu-backdrop" data-menu-backdrop aria-hidden="true"></div>

<div class="menu-panel" data-menu-panel role="dialog" aria-modal="true" aria-label="Navigation menu">
    <div class="mp-header">
        <button class="mp-close-btn" data-close-menu aria-label="Close menu"></button>
    </div>

    <div class="mp-viewport">
        {{-- Level 0 --}}
        <div class="mp-level-0" data-menu-level0>
            <ul style="padding:2px 0 8px;margin:0;list-style:none">
                <li><span class="mp-eyebrow">Menu</span></li>
                @foreach (config('site.menu_tree') as $item)
                    @if (!empty($item['id']))
                        <li>
                            <button class="mp-link" data-menu-open-sub="{{ $item['id'] }}">
                                {{ $item['label'] }}
                                <svg width="7" height="12" viewBox="0 0 7 12" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="1 1 6 6 1 11" />
                                </svg>
                            </button>
                        </li>
                    @else
                        <li><a href="{{ $item['href'] }}" class="mp-link" style="text-decoration:none">{{ $item['label'] }}</a></li>
                    @endif
                @endforeach
            </ul>
        </div>

        {{-- Sub-levels (one per parent, toggled by app.js) --}}
        @foreach (config('site.menu_tree') as $item)
            @if (!empty($item['id']))
                <div class="mp-sublevel" data-menu-sub="{{ $item['id'] }}" hidden>
                    <button class="mp-back-btn" data-menu-back aria-label="Back to main menu">← Back</button>
                    <ul style="padding:2px 0 8px;margin:0;list-style:none">
                        @foreach ($item['children'] as $child)
                            <li><a href="{{ $child['href'] }}" class="mp-link" style="text-decoration:none">{{ $child['label'] }}</a></li>
                        @endforeach
                    </ul>
                </div>
            @endif
        @endforeach
    </div>
</div>
