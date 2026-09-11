<?php $__env->startSection('title', $article->meta_title ?? $article->title . ' — Advice Centre'); ?>
<?php $__env->startSection('meta_description', $article->meta_description ?? $article->excerpt); ?>

<?php $__env->startPush('styles'); ?>
<style>
    /* ===== GLOBAL CONTAINER ===== */
    .article-gc { width:100%; max-width:1280px; margin-inline:auto; padding-inline:20px; }
    @media(min-width:768px){ .article-gc { padding-inline:24px; } }

    .article-page {
        padding: clamp(40px, 6vw, 80px) 0;
        background: #fff;
        color: #000;
    }
    .dark .article-page { background: #000; color: #fff; }

    /* ===== BREADCRUMBS ===== */
    .breadcrumbs {
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 0.85rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        color: #6b7280;
        margin-bottom: 40px;
        flex-wrap: wrap;
    }
    .dark .breadcrumbs { color: #9ca3af; }
    .breadcrumbs a { color: #000; text-decoration: none; transition: color 0.2s; }
    .dark .breadcrumbs a { color: #fff; }
    .breadcrumbs a:hover { color: #6b7280; }
    .dark .breadcrumbs a:hover { color: #9ca3af; }
    .breadcrumbs span { color: #9ca3af; }
    .dark .breadcrumbs span { color: #6b7280; }

    /* ===== LAYOUT ===== */
    .article-layout {
        display: grid;
        grid-template-columns: 1fr;
        gap: 60px;
    }
    @media(min-width: 1024px) {
        .article-layout { grid-template-columns: 1fr 320px; }
    }

    /* ===== MAIN CONTENT AREA ===== */
    .article-header {
        margin-bottom: 40px;
    }
    .article-cat {
        display: inline-block;
        font-size: 0.85rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: #6b7280;
        margin-bottom: 16px;
    }
    .dark .article-cat { color: #9ca3af; }
    .article-title {
        font-size: clamp(2rem, 4vw, 3.5rem);
        font-weight: 800;
        line-height: 1.15;
        margin-bottom: 24px;
    }
    .article-date {
        font-size: 0.9rem;
        font-weight: 600;
        color: #9ca3af;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    .dark .article-date { color: #6b7280; }

    .article-featured-img {
        width: 100%;
        max-height: 600px;
        object-fit: cover;
        margin-bottom: 48px;
        border: 1px solid #e5e7eb;
    }
    .dark .article-featured-img { border-color: #333; }

    /* Rich Content Styles */
    .article-content {
        max-width: 850px;
        font-size: 1.1rem;
        line-height: 1.8;
        color: #333;
    }
    .dark .article-content { color: #ccc; }
    .article-content h2 {
        font-size: 2rem;
        font-weight: 800;
        margin: 48px 0 24px 0;
        color: #000;
        line-height: 1.3;
    }
    .dark .article-content h2 { color: #fff; }
    .article-content h3 {
        font-size: 1.5rem;
        font-weight: 700;
        margin: 40px 0 20px 0;
        color: #000;
    }
    .dark .article-content h3 { color: #fff; }
    .article-content p {
        margin-bottom: 24px;
    }
    .article-content ul, .article-content ol {
        margin: 0 0 24px 0;
        padding-left: 24px;
    }
    .article-content li {
        margin-bottom: 12px;
    }
    .article-content a {
        color: #000;
        text-decoration: underline;
        font-weight: 600;
    }
    .dark .article-content a { color: #fff; }
    .article-content a:hover { color: #666; }
    .dark .article-content a:hover { color: #aaa; }
    .article-content blockquote {
        margin: 40px 0;
        padding: 24px 32px;
        background: #f9fafb;
        border-left: 4px solid #000;
        font-size: 1.25rem;
        font-style: italic;
        color: #111;
    }
    .dark .article-content blockquote {
        background: #111; border-color: #fff; color: #eee;
    }
    .article-content img {
        max-width: 100%;
        height: auto;
        margin: 32px 0;
        border: 1px solid #e5e7eb;
    }
    .dark .article-content img { border-color: #333; }

    /* ===== SIDEBAR ===== */
    .article-sidebar {
        display: flex;
        flex-direction: column;
        gap: 48px;
    }
    .sidebar-widget-title {
        font-size: 1.1rem;
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 24px;
        padding-bottom: 12px;
        border-bottom: 2px solid #000;
        color: #000;
    }
    .dark .sidebar-widget-title { border-color: #fff; color: #fff; }
    
    .sidebar-cats {
        list-style: none;
        padding: 0; margin: 0;
    }
    .sidebar-cats li {
        margin-bottom: 12px;
    }
    .sidebar-cats a {
        font-size: 0.95rem;
        font-weight: 600;
        color: #555;
        text-decoration: none;
        transition: color 0.2s;
        display: block;
    }
    .dark .sidebar-cats a { color: #aaa; }
    .sidebar-cats a:hover { color: #000; }
    .dark .sidebar-cats a:hover { color: #fff; }    /* ===== SIDEBAR RELATED ARTICLES & CTA BOX ===== */
    .sidebar-related-title {
        font-size: 1.1rem;
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 20px;
        padding-bottom: 12px;
        border-bottom: 2px solid #000;
        color: #000;
    }
    .dark .sidebar-related-title { border-color: #fff; color: #fff; }
    
    .sidebar-articles-box {
        display: flex;
        flex-direction: column;
        gap: 16px;
        margin-bottom: 36px;
    }
    
    .sidebar-text-card {
        display: flex;
        flex-direction: column;
        gap: 12px;
        padding: 20px;
        border: 1px solid #e5e7eb;
        background: #fff;
        text-decoration: none;
        color: inherit;
        transition: border-color 0.2s, box-shadow 0.2s;
    }
    .dark .sidebar-text-card { background: #000; border-color: #333; }
    .sidebar-text-card:hover { border-color: #000; box-shadow: 0 4px 16px rgba(0,0,0,0.05); }
    .dark .sidebar-text-card:hover { border-color: #fff; }
    
    .sidebar-text-card-title {
        font-size: 1rem;
        font-weight: 800;
        line-height: 1.35;
        color: #000;
        margin: 0;
    }
    .dark .sidebar-text-card-title { color: #fff; }
    
    .sidebar-text-card-btn {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        font-size: 0.8rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: #000;
    }
    .dark .sidebar-text-card-btn { color: #fff; }
    .sidebar-text-card-btn svg { width: 14px; height: 14px; transition: transform 0.2s; }
    .sidebar-text-card:hover .sidebar-text-card-btn svg { transform: translateX(4px); }

    /* Sidebar Quote Box */
    .sidebar-quote-box {
        border: 1px solid #000;
        background: #000;
        color: #fff;
        padding: 28px 24px;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
    }
    .dark .sidebar-quote-box { background: #fff; color: #000; border-color: #fff; }
    
    .sidebar-quote-icon {
        width: 48px;
        height: 48px;
        border: 2px solid #fff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 16px;
    }
    .dark .sidebar-quote-icon { border-color: #000; }
    .sidebar-quote-icon svg { width: 22px; height: 22px; stroke: #fff; }
    .dark .sidebar-quote-icon svg { stroke: #000; }
    
    .sidebar-quote-title {
        font-size: 1.2rem;
        font-weight: 800;
        margin-bottom: 10px;
        color: #fff;
    }
    .dark .sidebar-quote-title { color: #000; }
    
    .sidebar-quote-text {
        font-size: 0.88rem;
        line-height: 1.6;
        color: #ccc;
        margin-bottom: 20px;
    }
    .dark .sidebar-quote-text { color: #444; }
    
    .sidebar-quote-btn {
        display: inline-block;
        width: 100%;
        padding: 12px 20px;
        background: #fff;
        color: #000;
        font-weight: 700;
        font-size: 0.8rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        text-decoration: none;
        text-align: center;
        transition: background 0.2s;
    }
    .sidebar-quote-btn:hover { background: #e5e7eb; }
    .dark .sidebar-quote-btn { background: #000; color: #fff; }
    .dark .sidebar-quote-btn:hover { background: #222; }

    /* ===== FINAL CTA — centered card (No top border/line) ===== */
    .final-cta {
        padding: clamp(48px, 6vw, 80px) 0;
        background: #fff;
        border-top: none;
    }
    .dark .final-cta { background: #000; border-top: none; }
    .final-cta-card {
        max-width: 1200px;
        margin-inline: auto;
        padding-inline: 20px;
        border: 1px solid #e5e7eb;
        display: grid;
        grid-template-columns: 1fr;
        overflow: hidden;
        box-shadow: 0 4px 32px rgba(0,0,0,0.07);
    }
    .dark .final-cta-card { border-color: #333; box-shadow: none; }
    @media(min-width: 768px) {
        .final-cta-card { grid-template-columns: 1fr 1fr; padding-inline: 0; }
    }
    .final-cta-inner {
        display: contents;
    }
    .final-cta-img {
        width: 100%;
        height: 100%;
        min-height: 260px;
        object-fit: cover;
        display: block;
    }
    .final-cta-content {
        padding: clamp(36px, 5vw, 64px);
        display: flex;
        flex-direction: column;
        justify-content: center;
        background: #fff;
    }
    .dark .final-cta-content { background: #000; }
    .final-cta-eyebrow {
        font-size: 0.75rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 3px;
        color: #6b7280;
        margin-bottom: 14px;
    }
    .dark .final-cta-eyebrow { color: #9ca3af; }
    .final-cta-heading {
        font-size: clamp(1.4rem, 2.5vw, 2rem);
        font-weight: 800;
        line-height: 1.15;
        margin-bottom: 16px;
        color: #000;
    }
    .dark .final-cta-heading { color: #fff; }
    .final-cta-text {
        font-size: 0.95rem;
        color: #555;
        line-height: 1.7;
        margin-bottom: 28px;
    }
    .dark .final-cta-text { color: #aaa; }
    .cta-buttons {
        display: flex;
        flex-direction: column;
        gap: 12px;
        align-items: flex-start;
    }
    @media(min-width: 480px) { .cta-buttons { flex-direction: row; } }
    .btn-cta-black {
        display: inline-block; padding: 13px 26px; background: #000; color: #fff; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; text-decoration: none; transition: background 0.2s; border: 1px solid #000;
    }
    .btn-cta-black:hover { background: #333; }
    .dark .btn-cta-black { background: #fff; color: #000; border-color: #fff; }
    .dark .btn-cta-black:hover { background: #ddd; }
    .btn-cta-outline {
        display: inline-block; padding: 13px 26px; background: transparent; color: #000; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; text-decoration: none; transition: all 0.2s; border: 1px solid #000;
    }
    .btn-cta-outline:hover { background: #000; color: #fff; }
    .dark .btn-cta-outline { color: #fff; border-color: #fff; }
    .dark .btn-cta-outline:hover { background: #fff; color: #000; }
</style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

<article class="article-page">
    <div class="article-gc">

        <div class="article-layout">
            
            <div class="article-main">
                <div class="article-header">
                    <span class="article-cat"><?php echo e($article->category->name ?? 'General'); ?></span>
                    <h1 class="article-title"><?php echo e($article->title); ?></h1>
                    <div class="article-date">
                        <?php echo e($article->published_at ? $article->published_at->format('jS F Y') : 'Draft'); ?>

                    </div>
                </div>

                <?php if($article->featured_image): ?>
                    <img src="<?php echo e(asset($article->featured_image)); ?>" alt="<?php echo e($article->title); ?>" class="article-featured-img">
                <?php endif; ?>

                <div class="article-content">
                    <?php echo $article->content; ?>

                </div>
            </div>

            
            <aside class="article-sidebar">
                <?php if($relatedArticles->count() > 0): ?>
                <div>
                    <h3 class="sidebar-related-title">Related Articles</h3>
                    <div class="sidebar-articles-box">
                        <?php $__currentLoopData = $relatedArticles->take(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $relItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(route('advice.show', $relItem->slug)); ?>" class="sidebar-text-card">
                            <h4 class="sidebar-text-card-title"><?php echo e($relItem->title); ?></h4>
                            <span class="sidebar-text-card-btn">
                                Read Article
                                <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                            </span>
                        </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <?php endif; ?>

                
                <div class="sidebar-quote-box">
                    <div class="sidebar-quote-icon">
                        <svg fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                            <path d="M9 12h6M9 16h6M13 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V9l-5-7z"/>
                        </svg>
                    </div>
                    <h3 class="sidebar-quote-title">Get a Free Quote</h3>
                    <p class="sidebar-quote-text">Ready to upgrade your windows or doors? Contact our expert team for a custom quote.</p>
                    <a href="<?php echo e(route('contact')); ?>" class="sidebar-quote-btn">Contact Us</a>
                </div>
            </aside>
        </div>

    </div>
</article>


<section class="final-cta">
    <div class="final-cta-card">
        <img src="<?php echo e(asset('assets/about/window5.png')); ?>" alt="Get a free quote" class="final-cta-img">
        <div class="final-cta-content">
            <span class="final-cta-eyebrow">Get Started Today</span>
            <h2 class="final-cta-heading">Need help choosing your windows or doors?</h2>
            <p class="final-cta-text">Explore our online design and pricing system or contact our expert team for personalised guidance.</p>
            <div class="cta-buttons">
                <a href="<?php echo e(route('contact')); ?>" class="btn-cta-black">Design &amp; Price</a>
                <a href="<?php echo e(route('contact')); ?>" class="btn-cta-outline">Contact Us</a>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\internship\windows site\windows-laravel\resources\views/pages/advice/show.blade.php ENDPATH**/ ?>