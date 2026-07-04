@php
@endphp

<section class="cb2-section " id="cb2Section">
  <div class="cb2-box" id="cb2Box">
    <!-- Background Decoration -->
    <div class="cb2-bg-lines">
      <svg width="100%" height="100%" viewBox="0 0 1200 400" preserveAspectRatio="none">
        <path d="M0 100 Q 300 50 600 100 T 1200 100" stroke="black" fill="transparent" stroke-width="2"></path>
        <path d="M0 200 Q 300 150 600 200 T 1200 200" stroke="black" fill="transparent" stroke-width="2"></path>
        <path d="M0 300 Q 300 250 600 300 T 1200 300" stroke="black" fill="transparent" stroke-width="2"></path>
        <circle cx="100" cy="100" r="80" stroke="black" fill="transparent" stroke-width="1"></circle>
        <circle cx="1100" cy="300" r="120" stroke="black" fill="transparent" stroke-width="1"></circle>
        <rect x="400" y="50" width="40" height="40" stroke="black" fill="transparent" stroke-width="1" transform="rotate(45 420 70)"></rect>
        <rect x="800" y="320" width="30" height="30" stroke="black" fill="transparent" stroke-width="1" transform="rotate(15 815 335)"></rect>
      </svg>
    </div>

    <!-- Label -->
    <div class="cb2-label-pill">
      <div class="cb2-robot-wrapper">
        <img
          src="{{ asset('assets/robo.png') }}"
          alt="Robot"
          style="width: 32px; height: 32px; object-fit: contain; display: block;"
        />
      </div>
      <span class="cb2-label-dot"></span>
      <span class="cb2-label-text">Let's Work Together</span>
    </div>

    <!-- Headline -->
    <h2 class="cb2-heading">
      Have a Project in Mind?<br />
      Let's Build It.
    </h2>

    <!-- Sub -->
    <p class="cb2-sub">
      Whether you're starting from scratch or scaling an existing product, we'd love to hear about it.
      Let's create something remarkable together.
    </p>

    <!-- CTAs -->
    <div class="cb2-btn-row">
      <!-- GET IN TOUCH -->
      <a href="/contact" class="cb2-btn-primary">
        Contact Me
      </a>

      <!-- VIEW PORTFOLIO -->
      <a href="/portfolio" class="cb2-btn-secondary">
        View Portfolio
      </a>
    </div>
  </div>
</section>
