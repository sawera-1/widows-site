@php
$techStack = [
    ['name' => 'React', 'icon' => 'https://cdn.simpleicons.org/react'],
    ['name' => 'Node.js', 'icon' => 'https://cdn.simpleicons.org/nodedotjs'],
    ['name' => 'Laravel', 'icon' => 'https://cdn.simpleicons.org/laravel'],
    ['name' => 'Vue.js', 'icon' => 'https://cdn.simpleicons.org/vuedotjs'],
    ['name' => 'TypeScript', 'icon' => 'https://cdn.simpleicons.org/typescript'],
    ['name' => 'JavaScript', 'icon' => 'https://cdn.simpleicons.org/javascript'],
    ['name' => 'PHP', 'icon' => 'https://cdn.simpleicons.org/php'],
    ['name' => 'Next.js', 'icon' => 'https://cdn.simpleicons.org/nextdotjs'],
    ['name' => 'TailwindCSS', 'icon' => 'https://cdn.simpleicons.org/tailwindcss'],
    ['name' => 'HTML5', 'icon' => 'https://cdn.simpleicons.org/html5'],
    ['name' => 'CSS3', 'icon' => 'https://cdn.simpleicons.org/html5'],
    ['name' => 'Python', 'icon' => 'https://cdn.simpleicons.org/python'],
    ['name' => 'Express', 'icon' => 'https://cdn.simpleicons.org/express'],
    ['name' => 'MongoDB', 'icon' => 'https://cdn.simpleicons.org/mongodb'],
    ['name' => 'MySQL', 'icon' => 'https://cdn.simpleicons.org/mysql'],
    ['name' => 'Firebase', 'icon' => 'https://cdn.simpleicons.org/firebase'],
    ['name' => 'Docker', 'icon' => 'https://cdn.simpleicons.org/docker'],
    ['name' => 'Git', 'icon' => 'https://cdn.simpleicons.org/git'],
    ['name' => 'GitHub', 'icon' => 'https://cdn.simpleicons.org/github'],
    ['name' => 'Vercel', 'icon' => 'https://cdn.simpleicons.org/vercel'],
    ['name' => 'GraphQL', 'icon' => 'https://cdn.simpleicons.org/graphql'],
    ['name' => 'Figma', 'icon' => 'https://cdn.simpleicons.org/figma']
];

// Tripled to ensure smooth infinite scrolling
$tripled = array_merge($techStack, $techStack, $techStack);
@endphp

<section class="tt-section">
    <div class="tt-header">
        <h2 class="tt-title">
            Our <span class="tt-accent">Technology</span> Stack
        </h2>
    </div>

    <div class="tt-viewport">
        <div class="tt-track">
            @foreach($tripled as $tech)
                <div class="tt-card">
                    <div class="tt-icon">
                        <div style="width: 100%; height: 100%; background-color: currentColor; -webkit-mask: url({{ $tech['icon'] }}) no-repeat center / contain; mask: url({{ $tech['icon'] }}) no-repeat center / contain;"></div>
                    </div>
                    <span class="tt-label">{{ $tech['name'] }}</span>
                </div>
            @endforeach
        </div>
    </div>
</section>
