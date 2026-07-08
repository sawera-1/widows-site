# Corammers — Laravel (Blade) site

This project was converted from Next.js to a lean, server-rendered **Laravel 13**
site. It is intentionally framework-light and fast: no React, no build step, no
client-side framework — just Blade templates, one small `app.js`, and per-page
CSS.

## How it works
- **Routes:** `routes/web.php` — every page is a static `Route::view(...)`. No
  controllers, no DB queries on the front end.
- **Data:** `config/site.php` — nav, blog posts, projects, employees, categories
  (ported from the old `siteData.js`). Read in Blade via `config('site.*')`.
- **Layout:** `resources/views/layouts/app.blade.php` wraps every page and pulls
  in the shared chrome from `resources/views/partials/` (header, mobile menu,
  search overlay, custom cursor, page loader, footer, scroll-to-top).
- **Pages:** `resources/views/pages/**` — one Blade view per route, each wrapped
  in a `.pw-<slug>` element and pushing its own stylesheet.
- **Theme:** light/dark via a `data-theme` attribute on `<html>` (set before
  first paint by an inline script; toggled by `public/js/app.js`). All theming is
  CSS custom properties — global tokens in `public/css/app.css`, per-page vars in
  `public/css/pages/<slug>.css`.
- **Behaviour:** all interactivity (theme toggle, header/menu/search, cursor,
  loader, scroll-to-top, reveal-on-scroll, per-page tabs/filters) is vanilla JS.
- **Assets:** `public/assets/**` (images, gifs, logos) — referenced as `/assets/...`.

## Run locally
```bash
php artisan serve      # http://127.0.0.1:8000
```
No `npm install` needed to serve the site.
