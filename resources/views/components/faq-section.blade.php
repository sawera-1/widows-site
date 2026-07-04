@php
$faqs = [
  [
    "q" => "What technologies do you use to build modern web applications?",
    "a" => "We primarily work with Next.js, React, and Tailwind CSS for front-end development. On the backend we leverage Node.js, PostgreSQL, and cloud infrastructure on AWS and Vercel ensuring scalable, maintainable, and performant solutions for every project.",
  ],
  [
    "q" => "How long does a typical project take from kickoff to launch?",
    "a" => "Project timelines vary based on scope and complexity. A focused landing page or blog can ship in 1–2 weeks, while a full-featured SaaS product typically spans 8–16 weeks. We share a detailed roadmap during our discovery phase so you always know what to expect.",
  ],
  [
    "q" => "Do you offer post-launch support and maintenance?",
    "a" => "Absolutely. We offer flexible retainer packages covering bug fixes, performance monitoring, feature iterations, and security updates. Our goal is to be a long-term partner, not just a delivery team.",
  ],
  [
    "q" => "Can you work with an existing codebase or design system?",
    "a" => "Yes we regularly integrate with existing codebases, component libraries, and design systems. We conduct a thorough audit before committing to a scope so there are no surprises mid-project.",
  ],
  [
    "q" => "How do we get started working together?",
    "a" => "Simply fill out the contact form on this page or email us directly at hello@corammers.com We'll schedule a free 30-minute discovery call to understand your goals and outline the best path forward.",
  ],
];
@endphp

<section class="faq-section-bg " id="faqSection">
  <div class="faq-inner">
    <div class="faq-reveal" id="faqHeader">
      
      <!-- Label row -->
      <div class="faq-label-row">
        <div class="faq-robot-col">
          <div class="faq-robot-badge">
            <img
             src="{{ asset('assets/robo.png') }}"
              alt="Robot"
              style="width: 32px; height: 32px; object-fit: contain; display: block;"
            />
          </div>
          <div class="faq-divider"></div>
        </div>
        <div class="faq-label-pill">
          <span class="faq-label-dot"></span>
          <span class="faq-label">HAVE QUESTIONS?</span>
        </div>
      </div>

      <h2 class="faq-title">
        Frequently Asked <br />
        <span class="faq-accent-text">Questions</span>
      </h2>

    </div>

    <div class="faq-list">
      @foreach($faqs as $i => $faq)
        <div class="faq-item faq-reveal" style="transition-delay: {{ $i * 0.05 }}s;">
          <button class="faq-trigger" aria-expanded="false">
            <span class="faq-q">{{ $faq['q'] }}</span>
            <div class="faq-icon-wrap">
              <span class="faq-icon">+</span>
            </div>
          </button>
          <div class="faq-body">
            <div class="faq-body-inner">
              <p>{{ $faq['a'] }}</p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
