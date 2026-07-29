@extends('layouts.app')

@section('title', 'Contact Us — Corammers')
@section('meta_description', 'Start your project with Corammers. Get a free consultation for web development, mobile apps, UI/UX design, AI solutions and digital marketing.')

@push('styles')
<link rel="stylesheet" href="{{ asset_v('css/pages/contact.css') }}">
@endpush

@section('content')
<div class="pw-contact page-wrapper">
  <main class="contact-content">

    {{-- ── TOP: image + map ── --}}
    <div class="top-section">
      <div class="media-block fade-up visible">
        <img loading="lazy" decoding="async" src="/assets/contact.webp" alt="Contact Office">
      </div>
      <div class="media-block fade-up visible delay-1">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d190255.4382993181!2d-87.87204663731853!3d41.8333925049567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880e2c3cd0f4cbed%3A0xafe0a6ad09c0c000!2sChicago%2C%20IL!5e0!3m2!1sen!2sus!4v1714488000000!5m2!1sen!2sus"
          allowfullscreen
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          title="Office Location Map"></iframe>
      </div>
    </div>

    {{-- ── BOTTOM: details + form ── --}}
    <div class="bottom-section">

      {{-- Left: contact details --}}
      <div class="details-col fade-up visible delay-1">
        <div class="info-blocks">
         
          <div>
            <p class="info-label">Email</p>
            <p class="info-value">
              <a href="mailto:info@corammers.com">info@corammers.com</a>
            </p>
          </div>
          <div>
            <p class="info-label">Business Hours</p>
            <p class="info-value">
              Monday – Friday: 9 AM – 6 PM<br>Saturday – Sunday: Closed
            </p>
          </div>
          <div>
            <p class="socials-label">Socials</p>
            <div class="social-icons">
              <a href="https://www.youtube.com/@MediaCorammers" target="_blank" rel="noopener noreferrer" aria-label="YouTube">
                <svg viewBox="0 0 24 24" fill="currentColor">
                  <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.5 12 3.5 12 3.5s-7.505 0-9.377.55a3.016 3.016 0 0 0-2.122 2.136C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.55 9.376.55 9.376.55s7.505 0 9.377-.55a3.016 3.016 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                </svg>
              </a>
              <a href="https://www.instagram.com/corammersmedia?igsh=YTYxdWo1dHlhcjc1" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                <svg viewBox="0 0 24 24" fill="currentColor">
                  <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/>
                </svg>
              </a>
              <a href="https://www.linkedin.com/company/corammers/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
                <svg viewBox="0 0 24 24" fill="currentColor">
                  <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                </svg>
              </a>
              <a href="mailto:corammers@gmail.com" aria-label="Email">
                <svg viewBox="0 0 24 24" fill="currentColor">
                  <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                </svg>
              </a>
              <a href="https://www.facebook.com/share/19pNwtaKzg/?mibextid=wwXIfr" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
                <svg viewBox="0 0 24 24" fill="currentColor">
                  <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/>
                </svg>
              </a>
              <a href="https://wa.me/+923499674499" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp">
                <svg viewBox="0 0 448 512" fill="currentColor">
                  <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/>
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>

      {{-- Right: contact form --}}
      <div class="fade-up visible delay-2">
        <h2 class="form-heading sec-heading">Get in <span style="color:var(--accent-color)">Touch</span> With Us</h2>
        <p class="form-desc">
          We&apos;d love to hear from you! Whether you have a project in mind, need a quote,
          or just want to say hello, feel free to reach out.
        </p>

        <form id="contact-form" action="#" method="POST" novalidate>
          @csrf
          <div class="form-row">
            <input class="form-input" type="text" name="name" placeholder="Name" required>
            <input class="form-input" type="email" name="email" placeholder="Email" required>
          </div>

          <div class="form-field">
            <input class="form-input" type="text" name="subject" placeholder="Subject">
          </div>

          <div class="form-field">
            <textarea class="form-input form-textarea" name="message" placeholder="Message" required></textarea>
          </div>

          {{-- Send button --}}
          <div class="send-btn-wrap">
            <div class="lmc" id="send-btn">
              <div class="lmDefault">
                <span class="lmDefaultLabel">Send Message</span>
                <span class="lmArrow" aria-hidden="true">
                  <span></span><span></span><span></span>
                </span>
              </div>

              <div class="lmSplit" style="width:100%">
                <button type="button" class="lmIconSq" aria-label="Send message icon">
                  <span class="lmArrow" aria-hidden="true">
                    <span></span><span></span><span></span>
                  </span>
                  <span class="lmSpinner" aria-hidden="true"></span>
                </button>
                <button type="submit" class="lmTextSq" style="flex:1">
                  Send Message
                </button>
              </div>
            </div>
          </div>
        </form>

        <div class="form-success" id="form-success">
          ✓ Message sent! We&apos;ll be in touch shortly.
        </div>
      </div>

    </div>
  </main>
</div>
@endsection

@push('scripts')
<script>
  (function () {
    var root = document.querySelector('.pw-contact');
    if (!root) return;

    var form = root.querySelector('#contact-form');
    var lmc = root.querySelector('#send-btn');
    var success = root.querySelector('#form-success');

    function doSend() {
      var name = form.querySelector('[name="name"]').value.trim();
      var email = form.querySelector('[name="email"]').value.trim();
      var message = form.querySelector('[name="message"]').value.trim();
      if (!name || !email || !message) return;

      lmc.classList.add('isLoading');
      setTimeout(function () {
        lmc.classList.remove('isLoading');
        success.classList.add('visible');
        form.reset();
        setTimeout(function () { success.classList.remove('visible'); }, 5000);
      }, 2400);
    }

    // Demo form: no backend endpoint — prevent real submission.
    form.addEventListener('submit', function (e) {
      e.preventDefault();
      doSend();
    });

    // The icon square also triggers a send (matches original behaviour).
    var iconBtn = lmc.querySelector('.lmIconSq');
    if (iconBtn) {
      iconBtn.addEventListener('click', function (e) {
        e.preventDefault();
        doSend();
      });
    }
  })();
</script>
@endpush
