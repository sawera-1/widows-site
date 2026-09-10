<?php $__env->startSection('title', 'Product Detail — Modern UPVC Windows'); ?>
<?php $__env->startSection('meta_description', 'Learn more about this premium uPVC window or door product. Explore options, features and get an instant price online.'); ?>

<?php $__env->startSection('content'); ?>


<section style="min-height:60vh; display:flex; align-items:center; justify-content:center; padding: 80px 20px; text-align:center;">
    <div style="max-width: 560px;">
        <h1 style="font-size: clamp(2rem, 4vw, 3rem); font-weight: 700; margin-bottom: 20px;">Product Detail</h1>
        <p style="font-size: 1.1rem; line-height: 1.7; color: #555; margin-bottom: 32px;">
            Detailed information about this product is coming soon. In the meantime, browse all products or contact us for advice.
        </p>
        <a href="<?php echo e(route('info')); ?>" style="display:inline-block; padding: 14px 32px; background:#000; color:#fff; font-weight:600; text-decoration:none; margin-right: 12px; transition: background 0.2s;">
            ← All Products
        </a>
        <a href="<?php echo e(route('contact')); ?>" style="display:inline-block; padding: 14px 32px; border: 2px solid #000; color:#000; font-weight:600; text-decoration:none; transition: background 0.2s, color 0.2s;">
            Contact Us
        </a>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\internship\windows site\windows-laravel\resources\views/pages/infodetail.blade.php ENDPATH**/ ?>