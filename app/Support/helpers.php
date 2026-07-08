<?php

if (! function_exists('asset_v')) {
    /**
     * Asset URL with a content-version query string (?v=<mtime>).
     *
     * Our CSS/JS keep stable filenames, so browsers may cache them for a year
     * (see public/.htaccess). The version stamp changes on every deploy, which
     * busts that cache the moment a file actually changes.
     */
    function asset_v(string $path): string
    {
        $file = public_path($path);
        $mtime = is_file($file) ? filemtime($file) : null;

        return asset($path).($mtime ? '?v='.$mtime : '');
    }
}
