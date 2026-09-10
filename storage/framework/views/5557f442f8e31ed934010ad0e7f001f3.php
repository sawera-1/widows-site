<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <title><?php echo $__env->yieldContent('title', 'Company Name — Web, Mobile, AI & Digital Marketing Agency'); ?></title>
    <meta name="description" content="<?php echo $__env->yieldContent('meta_description', 'Company Name builds high-performance websites, mobile apps, AI solutions and growth marketing. Engineering with vision — human + AI.'); ?>">
    <link rel="canonical" href="<?php echo e(url()->current()); ?>">
    <meta name="robots" content="<?php echo $__env->yieldContent('robots', 'index, follow, max-image-preview:large'); ?>">
    <meta name="theme-color" media="(prefers-color-scheme: light)" content="#ffffff">
    <meta name="theme-color" media="(prefers-color-scheme: dark)" content="#0b0b0d">

    
    <script>
        (function () {
            try {
                var t = localStorage.getItem('codecaks-theme');
                if (t !== 'light' && t !== 'dark') {
                    t = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
                }
                document.documentElement.setAttribute('data-theme', t);
            } catch (e) {
                document.documentElement.setAttribute('data-theme', 'dark');
            }
        })();
    </script>

    
    <style><?php echo file_get_contents(public_path('css/fonts.css')); ?></style>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'jbobs': {
                            'bg-1': '#faf5f1',
                            'bg-2': '#ffffff',
                            'heading': '#000000',
                            'heading-light': '#e2dedc',
                            'body': '#555555',
                            'body-light': '#666666'
                        }
                    },
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                        serif: ['Playfair Display', 'serif']
                    }
                }
            }
        }
    </script>
    <link rel="stylesheet" href="<?php echo e(asset_v('css/app.css')); ?>">
    <?php echo $__env->yieldPushContent('styles'); ?>

    
    <link rel="icon" href="/favicon.ico" sizes="32x32">
    <link rel="icon" href="/assets/logo/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    
    <meta property="og:site_name" content="Company Name">
    <meta property="og:type" content="<?php echo $__env->yieldContent('og_type', 'website'); ?>">
    <meta property="og:title" content="<?php echo $__env->yieldContent('title', 'Company Name — Web, Mobile, AI & Digital Marketing Agency'); ?>">
    <meta property="og:description" content="<?php echo $__env->yieldContent('meta_description', 'Company Name builds high-performance websites, mobile apps, AI solutions and growth marketing. Engineering with vision — human + AI.'); ?>">
    <meta property="og:url" content="<?php echo e(url()->current()); ?>">
    <meta property="og:image" content="<?php echo $__env->yieldContent('og_image', asset('assets/logo/og-image.png')); ?>">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:locale" content="en_US">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $__env->yieldContent('title', 'Company Name — Web, Mobile, AI & Digital Marketing Agency'); ?>">
    <meta name="twitter:description" content="<?php echo $__env->yieldContent('meta_description', 'Company Name builds high-performance websites, mobile apps, AI solutions and growth marketing. Engineering with vision — human + AI.'); ?>">
    <meta name="twitter:image" content="<?php echo $__env->yieldContent('og_image', asset('assets/logo/og-image.png')); ?>">

    
    <?php
        $ldOrg = [
            '@context' => 'https://schema.org',
            '@type' => 'Organization',
            'name' => 'Company Name',
            'url' => url('/'),
            'logo' => asset('assets/logo/logo.png'),
            'email' => 'info@example.com',
            'contactPoint' => [[
                '@type' => 'ContactPoint',
                'email' => 'info@example.com',
                'contactType' => 'customer support',
            ]],
        ];
        $ldSite = [
            '@context' => 'https://schema.org',
            '@type' => 'WebSite',
            'name' => 'Company Name',
            'url' => url('/'),
            'potentialAction' => [
                '@type' => 'SearchAction',
                'target' => ['@type' => 'EntryPoint', 'urlTemplate' => url('/search').'?q={search_term_string}'],
                'query-input' => 'required name=search_term_string',
            ],
        ];
    ?>
    <script type="application/ld+json"><?php echo json_encode($ldOrg, JSON_UNESCAPED_SLASHES); ?></script>
    <script type="application/ld+json"><?php echo json_encode($ldSite, JSON_UNESCAPED_SLASHES); ?></script>
    <?php if(count(request()->segments()) > 0): ?>
        <?php
            $bcLabels = [
                'about' => 'About', 'contact' => 'Contact', 'industry' => 'Industries',
                'blog' => 'Blog', 'detail' => 'Article', 'search' => 'Search',
                'staff' => 'Staff Augmentation', 'developer' => 'Hire Developers',
                'media' => 'Hire Social Media Experts', 'design' => 'Design',
                'marketing' => 'Marketing', 'services' => 'Services',
                'development' => 'Development', 'ai' => 'AI Solutions',
                'portfolio' => 'Portfolio',
            ];
            $bcItems = [['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => url('/')]];
            $bcPath = '';
            foreach (request()->segments() as $i => $seg) {
                $bcPath .= '/'.$seg;
                $bcItems[] = [
                    '@type' => 'ListItem',
                    'position' => $i + 2,
                    'name' => $bcLabels[$seg] ?? \Illuminate\Support\Str::title(str_replace('-', ' ', $seg)),
                    'item' => url($bcPath),
                ];
            }
            $ldCrumbs = ['@context' => 'https://schema.org', '@type' => 'BreadcrumbList', 'itemListElement' => $bcItems];
        ?>
        <script type="application/ld+json"><?php echo json_encode($ldCrumbs, JSON_UNESCAPED_SLASHES); ?></script>
    <?php endif; ?>
    <?php echo $__env->yieldPushContent('schema'); ?>
</head>
<body>
    <?php echo $__env->make('partials.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <div class="page-wrapper page-ready">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <?php echo $__env->make('partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <script src="<?php echo e(asset_v('js/app.js')); ?>" defer></script>
    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>
<?php /**PATH D:\internship\JBOBS\jbobs-laravel\resources\views/layouts/app.blade.php ENDPATH**/ ?>