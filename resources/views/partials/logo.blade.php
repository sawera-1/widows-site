{{-- CORAMMERS logo. Two theme variants swap via [data-theme] (see app.css):
     logob.webp (black) on light theme, logow.webp (white) on dark theme.
     $h = pixel height (optional, default 34). --}}
@php $h = $h ?? 34; @endphp
<img src="/assets/logo/logob.webp" alt="CORAMMERS" class="cor-logo logo-on-light" style="height:{{ $h }}px" draggable="false">
<img src="/assets/logo/logow.webp" alt="CORAMMERS" class="cor-logo logo-on-dark"  style="height:{{ $h }}px" draggable="false">
