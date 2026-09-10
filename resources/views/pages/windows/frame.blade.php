{{--
    partials/upvc-window.blade.php

    Renders ONE window frame/pane configuration as real HTML + CSS.
    No <img>, no background-image, no SVG asset — the outer frame is
    a CSS Grid, its `gap` is the mullion/transom bars, and each pane
    is a plain <div class="upvc-pane"> glass panel.

    Expects a $frame array with:
        cols  => [1, 1, ...]              relative column widths
        rows  => [1, 1, ...]              relative row heights
        cells => [ ['c'=>[s,e], 'r'=>[s,e]], ... ]   one per glass pane
        wide  => true|false (optional)    use a wider aspect ratio
        name  => string (used for the aria-label)
--}}
@php
    $colsCss = implode(' ', array_map(fn ($c) => $c . 'fr', $frame['cols']));
    $rowsCss = implode(' ', array_map(fn ($r) => $r . 'fr', $frame['rows']));
    $isWide  = $frame['wide'] ?? false;
@endphp

<div
    class="upvc-window {{ $isWide ? 'is-wide' : '' }}"
    style="--upvc-cols: {{ $colsCss }}; --upvc-rows: {{ $rowsCss }};"
    role="img"
    aria-label="{{ $frame['name'] ?? 'Window frame configuration' }}"
>
    @foreach($frame['cells'] as $cell)
        <div
            class="upvc-pane"
            style="grid-column: {{ $cell['c'][0] }} / {{ $cell['c'][1] }}; grid-row: {{ $cell['r'][0] }} / {{ $cell['r'][1] }};"
        ></div>
    @endforeach
</div>