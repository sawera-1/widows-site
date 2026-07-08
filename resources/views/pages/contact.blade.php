@extends('layouts.app')

@section('title', 'Corammers')
@section('meta_description', 'Get in touch with Corammers  send us a message about your project, request a quote, or just say hello.')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/pages/contact.css') }}">
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
            <p class="info-label">Address</p>
            <p class="info-value">Chicago, IL, USA</p>
          </div>
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
              <a href="#" aria-label="Google">
                <svg viewBox="0 0 24 24">
                  <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09zM12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23zM5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l3.66-2.84zM12 5.38c1.62 0 3.06.56 4.21 1.66l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="currentColor" stroke="none" />
                </svg>
              </a>
              <a href="#" aria-label="Instagram">
                <svg viewBox="0 0 24 24">
                  <rect x="2" y="2" width="20" height="20" rx="5" ry="5" />
                  <circle cx="12" cy="12" r="4" />
                  <circle cx="17.5" cy="6.5" r="0.5" fill="currentColor" stroke="none" />
                </svg>
              </a>
              <a href="#" aria-label="X (Twitter)">
                <svg viewBox="0 0 24 24">
                  <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" fill="currentColor" stroke="none" />
                </svg>
              </a>
              <a href="#" aria-label="LinkedIn">
                <svg viewBox="0 0 24 24">
                  <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z" fill="currentColor" stroke="none" />
                  <rect x="2" y="9" width="4" height="12" fill="currentColor" stroke="none" />
                  <circle cx="4" cy="4" r="2" fill="currentColor" stroke="none" />
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>

      {{-- Right: contact form --}}
      <div class="fade-up visible delay-2">
        <h2 class="form-heading">GET IN TOUCH WITH US</h2>
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
