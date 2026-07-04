@php
$TICKER_SEGMENT = "Web Development&nbsp;&nbsp;✱&nbsp;&nbsp;Mobile&nbsp;&nbsp;✱&nbsp;&nbsp;E-Commerce&nbsp;&nbsp;✱&nbsp;&nbsp;AI Solutions&nbsp;&nbsp;✱&nbsp;&nbsp;SEO&nbsp;&nbsp;✱&nbsp;&nbsp;UI/UX&nbsp;&nbsp;✱&nbsp;&nbsp;Corammers&nbsp;&nbsp;✱&nbsp;&nbsp;";

$SOCIAL = [
    [
        'label' => 'Google',
        'fill' => true,
        'path' => 'M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09zM12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23zM5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l3.66-2.84zM12 5.38c1.62 0 3.06.56 4.21 1.66l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z'
    ],
    [
        'label' => 'Instagram',
        'fill' => false,
        'jsx' => '<rect x="2" y="2" width="20" height="20" rx="5" ry="5" /><circle cx="12" cy="12" r="4" /><circle cx="17.5" cy="6.5" r="0.5" fill="currentColor" stroke="none" />'
    ],
    [
        'label' => 'X',
        'fill' => true,
        'path' => 'M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.747l7.73-8.835L1.254 2.25H8.08l4.253 5.622 5.91-5.622zm-1.161 17.52h1.833L7.084 4.126H5.117z'
    ],
    [
        'label' => 'LinkedIn',
        'fill' => false,
        'jsx' => '<path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z" /><rect x="2" y="9" width="4" height="12" /><circle cx="4" cy="4" r="2" />'
    ]
];

$NAV_PAGES = [
    ['label' => 'Home', 'href' => '/'],
    ['label' => 'About', 'href' => '/about'],
    ['label' => 'Services', 'href' => '/services'],
    ['label' => 'Blog', 'href' => '/blog'],
];

$NAV_COMPANY = [
    ['label' => 'Industries We Serve', 'href' => '/industries'],
    ['label' => 'Contact Us', 'href' => '/contact'],
    ['label' => 'Hiring', 'href' => '/hire', 'badge' => "We're Hiring"],
];
@endphp

<footer class="of-footer" role="contentinfo" aria-label="Site footer">
    <!-- Top grid -->
    <div class="of-top">

        <!-- Brand -->
        <div class="of-col-brand">
            <h2 class="of-headline">
                Let's make<br />it happen
                <span class="of-headline-dot">.</span>
            </h2>
        </div>

        <!-- Social Media -->
        <div>
            <p class="of-col-label">
                <span class="of-col-accent"></span>
                Social
            </p>
            <ul class="of-social-row">
                @foreach($SOCIAL as $item)
                <li>
                    <a href="#" class="of-social-btn" aria-label="{{ $item['label'] }}">
                        <svg viewBox="0 0 24 24" width="18" height="18"
                             fill="{{ $item['fill'] ? 'currentColor' : 'none' }}"
                             stroke="{{ $item['fill'] ? 'none' : 'currentColor' }}"
                             stroke-width="2">
                            @if(isset($item['jsx']))
                                {!! $item['jsx'] !!}
                            @else
                                <path d="{{ $item['path'] }}" />
                            @endif
                        </svg>
                    </a>
                </li>
                @endforeach
            </ul>
        </div>

        <!-- Contact -->
        <div>
            <p class="of-col-label">
                <span class="of-col-accent"></span>
                Contact
            </p>
            <a href="mailto:hello@corammers.com" class="of-email">
                hello@corammers.com
            </a>
        </div>

        <!-- Pages -->
        <nav aria-label="Footer pages navigation">
            <p class="of-col-label">
                <span class="of-col-accent"></span>
                Pages
            </p>
            <ul class="of-nav-list">
                @foreach($NAV_PAGES as $page)
                <li>
                    <a href="{{ url($page['href']) }}" class="of-nav-link">
                        <span class="of-nav-dot"></span>
                        {{ $page['label'] }}
                    </a>
                </li>
                @endforeach
            </ul>
        </nav>

        <!-- Company -->
        <nav aria-label="Footer company navigation">
            <p class="of-col-label">
                <span class="of-col-accent"></span>
                Company
            </p>
            <ul class="of-nav-list">
                @foreach($NAV_COMPANY as $company)
                <li>
                    <a href="{{ url($company['href']) }}" class="of-nav-link">
                        <span class="of-nav-dot"></span>
                        {{ $company['label'] }}
                        @if(isset($company['badge']))
                            <span class="of-badge">{{ $company['badge'] }}</span>
                        @endif
                    </a>
                </li>
                @endforeach
            </ul>
        </nav>

    </div>

    <!-- Divider -->
    <div class="of-divider-wrap">
        <hr class="of-hr" aria-hidden="true" />
    </div>

    <!-- Ticker -->
    <div class="of-ticker-wrap" aria-hidden="true">
        <div class="of-ticker-track">
            <span class="of-ticker-text">{!! $TICKER_SEGMENT !!}</span>
            <span class="of-ticker-text">{!! $TICKER_SEGMENT !!}</span>
        </div>
    </div>

    <!-- Bottom bar -->
    <div class="of-bottom">
        <div class="of-bottom-inner">
            <p class="of-copy">©{{ date('Y') }} Corammers, All Rights Reserved.</p>
            <p class="of-copy">Premium Laravel Theme.</p>
        </div>
    </div>
</footer>
