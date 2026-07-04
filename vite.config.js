import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/pages/contact.css',
                'resources/js/pages/contact.js',
                'resources/css/pages/about.css',
                'resources/js/pages/about.js',
                'resources/css/pages/blog.css',
                'resources/js/pages/blog.js',
                'resources/css/pages/blog-detail.css',
                'resources/js/pages/blog-detail.js',
                'resources/css/pages/industries.css',
                'resources/js/pages/industries.js',
                'resources/css/pages/hire.css',
                'resources/js/pages/hire.js',
                'resources/css/pages/hire-developer.css',
                'resources/js/pages/hire-developer.js',
                'resources/css/pages/hire-media.css',
                'resources/js/pages/hire-media.js',
                'resources/css/pages/hire-designer.css',
                'resources/js/pages/hire-designer.js',
                'resources/css/pages/hire-marketing.css',
                'resources/js/pages/hire-marketing.js',
                'resources/css/pages/services.css',
                'resources/js/pages/services.js',
                'resources/css/pages/service-development.css',
                'resources/js/pages/service-development.js',
                'resources/css/pages/service-design.css',
                'resources/js/pages/service-design.js',
                'resources/css/pages/service-market.css',
                'resources/js/pages/service-market.js',
                'resources/css/pages/service-ai.css',
                'resources/js/pages/service-ai.js',
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
    server: {
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
});
