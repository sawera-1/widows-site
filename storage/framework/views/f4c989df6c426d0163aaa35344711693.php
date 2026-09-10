<?php 
    $type = $type ?? 'header';
    $src = $type === 'footer' ? '/assets/logo/light%20logo.png' : '/assets/logo/dark%20logo.png';
    $sizeClass = $type === 'footer' ? 'h-24 sm:h-32 lg:h-40' : 'h-16 sm:h-20 lg:h-24';
?>
<img src="<?php echo e($src); ?>" alt="JBOBS Logo" class="<?php echo e($sizeClass); ?> w-auto object-contain object-left block" />
<?php /**PATH D:\internship\JBOBS\jbobs-laravel\resources\views/partials/logo.blade.php ENDPATH**/ ?>