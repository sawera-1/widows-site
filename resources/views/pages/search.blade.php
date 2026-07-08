@extends('layouts.app')

@section('title', 'Corammers')
@section('meta_description', 'Search across projects, blog articles, team members and pages on Corammers.')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/pages/search.css') }}">
@endpush

@section('content')
@php
    $lowerQuery = mb_strtolower(trim($q));

    $posts = [];
    $projects = [];
    $staff = [];
    $pages = [];

    if ($lowerQuery !== '') {
        $contains = function ($haystack) use ($lowerQuery) {
            return str_contains(mb_strtolower((string) $haystack), $lowerQuery);
        };

        // Posts: match title, excerpt or tag
        $posts = array_values(array_filter(config('site.posts', []), function ($post) use ($contains) {
            return $contains($post['title'] ?? '')
                || $contains($post['excerpt'] ?? '')
                || $contains($post['tag'] ?? '');
        }));

        // Projects: match title, description or any tech item
        $projects = array_values(array_filter(config('site.projects', []), function ($project) use ($contains) {
            $techMatch = false;
            foreach (($project['tech'] ?? []) as $t) {
                if ($contains($t)) { $techMatch = true; break; }
            }
            return $contains($project['title'] ?? '')
                || $contains($project['description'] ?? '')
                || $techMatch;
        }));

        // Staff: match name, role or tag
        $staff = array_values(array_filter(config('site.employees', []), function ($emp) use ($contains) {
            return $contains($emp['name'] ?? '')
                || $contains($emp['role'] ?? '')
                || $contains($emp['tag'] ?? '');
        }));

        // Pages: recursively walk nav_items, match label
        $searchNav = function ($items) use (&$searchNav, $contains, &$pages) {
            foreach ($items as $item) {
                if ($contains($item['label'] ?? '') && isset($item['href'])) {
                    $pages[] = ['label' => $item['label'], 'href' => $item['href']];
                }
                if (!empty($item['children'])) {
                    $searchNav($item['children']);
                }
            }
        };
        $searchNav(config('site.nav_items', []));

        // De-duplicate pages by href
        $seen = [];
        $pages = array_values(array_filter($pages, function ($p) use (&$seen) {
            if (isset($seen[$p['href']])) return false;
            $seen[$p['href']] = true;
            return true;
        }));
    }

    $hasResults = count($posts) > 0 || count($projects) > 0 || count($staff) > 0 || count($pages) > 0;
@endphp

<div class="pw-search">
    <main class="srch-main">
        <header class="srch-head">
            <p class="srch-eyebrow">Search Results for</p>
            <h1 class="srch-title">"{{ $q }}"</h1>
        </header>

        @if (!$hasResults)
            <div class="srch-empty">
                <p>No results found for your search.</p>
                <a href="/">Return Home</a>
            </div>
        @else
            <div class="srch-results">
                {{-- Pages Section --}}
                @if (count($pages) > 0)
                    <section>
                        <h2 class="srch-section-title">Pages ({{ count($pages) }})</h2>
                        <div class="srch-grid-pages">
                            @foreach ($pages as $page)
                                <a href="{{ $page['href'] }}" class="srch-page-card">
                                    <h3>{{ $page['label'] }}</h3>
                                    <p>Navigate to {{ $page['label'] }}</p>
                                </a>
                            @endforeach
                        </div>
                    </section>
                @endif

                {{-- Portfolio Section --}}
                @if (count($projects) > 0)
                    <section>
                        <h2 class="srch-section-title">Portfolio Projects ({{ count($projects) }})</h2>
                        <div class="srch-grid-cards">
                            @foreach ($projects as $project)
                                <a href="{{ $project['href'] }}" class="srch-media-card">
                                    <div class="srch-media-thumb">
                                        <img loading="lazy" decoding="async" src="{{ $project['image'] }}" alt="{{ $project['title'] }}">
                                    </div>
                                    <div class="srch-media-body">
                                        <h3>{{ $project['title'] }}</h3>
                                        <p>{{ $project['description'] }}</p>
                                        <div class="srch-tech-row">
                                            @foreach ($project['tech'] as $t)
                                                <span class="srch-tech-tag">{{ $t }}</span>
                                            @endforeach
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </section>
                @endif

                {{-- Blog Section --}}
                @if (count($posts) > 0)
                    <section>
                        <h2 class="srch-section-title">Blog Articles ({{ count($posts) }})</h2>
                        <div class="srch-grid-cards">
                            @foreach ($posts as $post)
                                <a href="/blog" class="srch-media-card srch-post-card">
                                    <div class="srch-media-thumb">
                                        <img loading="lazy" decoding="async" src="{{ $post['image'] }}" alt="{{ $post['title'] }}">
                                    </div>
                                    <div class="srch-media-body">
                                        <span class="srch-post-tag">{{ $post['tag'] }}</span>
                                        <h3>{{ $post['title'] }}</h3>
                                        <p>{{ $post['excerpt'] }}</p>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </section>
                @endif

                {{-- Staff Section --}}
                @if (count($staff) > 0)
                    <section>
                        <h2 class="srch-section-title">Team Members ({{ count($staff) }})</h2>
                        <div class="srch-grid-staff">
                            @foreach ($staff as $emp)
                                <div class="srch-staff-card">
                                    <div class="srch-staff-avatar">
                                        <img loading="lazy" decoding="async" src="{{ $emp['img'] }}" alt="{{ $emp['name'] }}">
                                    </div>
                                    <h3>{{ $emp['name'] }}</h3>
                                    <p class="srch-staff-role">{{ $emp['role'] }}</p>
                                    <span class="srch-staff-tag">Expertise: {{ $emp['tag'] }}</span>
                                </div>
                            @endforeach
                        </div>
                    </section>
                @endif
            </div>
        @endif
    </main>
</div>
@endsection
