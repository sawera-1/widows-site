<section class="about-section-bg" id="aboutSection">
    <div class="about-inner">
        <div class="about-anim-fade" id="aboutTextContent">
            <div class="about-label-row">
                <div class="about-robot-badge">
                    <img src="{{ asset('assets/robo.png') }}" alt="Robot" class="about-robot-img" />
                </div>
                <div class="about-label-pill">
                    <span class="about-label-dot"></span>
                    <span class="about-label">About Our Agency</span>
                </div>
            </div>
            <div class="about-divider"></div>
            <h2 class="about-heading">
                Innovating the Future of <br />
                <span class="about-accent">Digital Solutions</span>
            </h2>
            <p class="about-sub">
                We are a team of passionate creators, engineers, and strategists
                dedicated to pushing the boundaries of what's possible in the digital world.
                Our mission is to empower businesses with cutting-edge technology.
            </p>
        </div>

        <!-- BANNER -->
        <div class="about-banner-wrap about-anim-fade" id="aboutBannerWrap">
            <img src="{{ asset('assets/about.webp') }}" alt="About Us" class="about-banner-img" />

            <!-- ── CURSOR-FOLLOWING VIDEO BUTTON ── -->
            <div class="about-floating-video-overlay" id="aboutFloatingVideoOverlay">
                <div class="video-btn" id="aboutFloatingVideoBtn">
                    <span class="vbtn-ring vbtn-ring-1"></span>
                    <span class="vbtn-ring vbtn-ring-2"></span>
                    <span class="vbtn-ring vbtn-ring-3"></span>

                    <span class="vbtn-core">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor">
                            <polygon points="6 3 20 12 6 21 6 3" />
                        </svg>
                    </span>

                    <span class="vbtn-label" id="vbtnLabel">Play</span>
                </div>
            </div>

            <div class="about-banner-glass">
                <span class="glass-tag">Innovation First</span>
                <p class="glass-text">We blend artistic creativity with technical excellence to build products that stand out.</p>
            </div>

            <div class="about-banner-overlay">
                <h3 class="about-banner-title">United by Vision</h3>
                <p class="about-banner-desc">
                    Our global team works around the clock to ensure your project is
                    delivered with the highest quality standards and innovative features.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- ── VIDEO MODAL ── -->
<div class="vmodal-backdrop" id="aboutVideoModal" style="display: none;">
    <div class="vmodal-box" id="aboutVideoModalBox">
        <button class="vmodal-close" id="aboutVideoCloseBtn" aria-label="Close video">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
                <line x1="18" y1="6" x2="6" y2="18" /><line x1="6" y1="6" x2="18" y2="18" />
            </svg>
        </button>
        <video src="{{ asset('assets/about-video.mp4') }}" controls class="vmodal-video" id="aboutVideoElement" playsinline></video>
    </div>
</div>
