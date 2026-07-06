{{-- First-load intro. Plays a CSS keyframe sequence then slides up and is
     removed by app.js. Logo variant swaps by theme via CSS. --}}
<div class="loader-overlay" data-loader aria-hidden="true" role="presentation">
    <div class="loader-glow" aria-hidden="true"></div>
    <div class="loader-logo loader-logo-svg">@include('partials.logo', ['h' => 56])</div>
    <div class="loader-line"></div>
</div>
