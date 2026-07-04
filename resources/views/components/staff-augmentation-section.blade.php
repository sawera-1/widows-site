@php
$gridImagesTop = [
  [ 'id' => 1, 'src' => 'assets/team1.webp', 'alt' => 'Team collaboration' ],
  [ 'id' => 2, 'src' => 'assets/team2.webp', 'alt' => 'Developer at work' ],
  [ 'id' => 3, 'src' => 'assets/team3.webp', 'alt' => 'Professional meeting' ],
];

$gridImagesBottom = [
  [ 'id' => 4, 'src' => 'assets/team4.webp', 'alt' => 'Remote developer' ],
  [ 'id' => 5, 'src' => 'assets/team5.webp', 'alt' => 'Office team' ],
];

$features = [
  [ 'icon' => '<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10" /><line x1="2" y1="12" x2="22" y2="12" /><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" /></svg>', 'text' => 'Hire Remote Developers' ],
  [ 'icon' => '<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2" /></svg>', 'text' => 'Flexible Scaling' ],
  [ 'icon' => '<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 12V8H6a2 2 0 0 1-2-2c0-1.1.9-2 2-2h12v4" /><path d="M4 6v12c0 1.1.9 2 2 2h14v-4" /><path d="M18 12a2 2 0 0 0-2 2c0 1.1.9 2 2 2h4v-4h-4z" /></svg>', 'text' => 'Save Time & Cost' ],
  [ 'icon' => '<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" /><circle cx="9" cy="7" r="4" /><path d="M23 21v-2a4 4 0 0 0-3-3.87" /><path d="M16 3.13a4 4 0 0 1 0 7.75" /></svg>', 'text' => 'Seamless Team Integration' ],
];
@endphp

<section class="sa-section" id="saSection">
    <div class="sa-inner">
        <!-- ── LEFT ── -->
        <div class="sa-left">
            <!-- Label Row with Robot -->
            <div class="sa-label-row">
                <div class="sa-robot-badge">
                    <img src="{{ asset('assets/robo.png') }}" alt="Robot" style="width: 32px; height: 32px; object-fit: contain; display: block;" />
                </div>
                <div class="sa-label-pill">
                    <span class="sa-label-dot"></span>
                    <span class="sa-label">Staff Augmentation</span>
                </div>
            </div>

            <!-- Heading -->
            <h2 class="sa-heading">
                Scale Your Team with <mark>Pre-Vetted</mark> Developers
            </h2>

            <!-- Description -->
            <p class="sa-desc">
                Quickly extend your team with skilled developers tailored to your needs. 
                Our staff augmentation services help you scale efficiently without the overhead, 
                delays, or risks of traditional hiring.
            </p>

            <!-- Feature Pills -->
            <div class="sa-features">
                @foreach($features as $f)
                    <span class="sa-feature-pill">
                        <span class="sa-feature-pill-icon">
                            {!! $f['icon'] !!}
                        </span>
                        {{ $f['text'] }}
                    </span>
                @endforeach
            </div>

            <!-- Trust Badge -->
            <div class="sa-trust">
                <div class="sa-stars">
                    @for($i = 0; $i < 5; $i++)
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="#d81d1f">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                        </svg>
                    @endfor
                </div>
                <div class="sa-trust-divider"></div>
                <span class="sa-trust-text">
                    <strong>Excellent</strong> · 500+ projects delivered
                </span>
                <div class="sa-trust-divider"></div>
                <span class="sa-trust-text" style="font-size: 12px; opacity: 0.75;">
                    Trustindex
                </span>
            </div>

            <!-- CTA -->
            <div class="sa-cta-row">
                <a href="/contact" class="sa-btn">
                    Book a Discovery Call
                </a>
            </div>
        </div>

        <!-- ── RIGHT IMAGE GRID ── -->
        <div class="sa-grid">
            <div class="sa-grid-row top">
                @foreach($gridImagesTop as $img)
                    <div class="sa-img-wrap">
                        <img src="{{ asset($img['src']) }}" alt="{{ $img['alt'] }}" loading="lazy" />
                    </div>
                @endforeach
            </div>
            <div class="sa-grid-row bottom">
                @foreach($gridImagesBottom as $img)
                    <div class="sa-img-wrap">
                        <img src="{{ asset($img['src']) }}" alt="{{ $img['alt'] }}" loading="lazy" />
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const section = document.getElementById('saSection');
    if (!section) return;

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.15 });

    observer.observe(section);
});
</script>

