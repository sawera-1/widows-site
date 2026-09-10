<?php 
    $type = $type ?? 'header';
    // The logo uses the Inter font (which is the default sans font in our Tailwind config)
?>
<div class="flex flex-col">
    <span class="font-sans font-bold tracking-tight uppercase leading-none text-black dark:text-white <?php echo e($type === 'footer' ? 'text-3xl sm:text-4xl' : 'text-2xl sm:text-3xl'); ?>">Burbage Custom</span>
    <span class="font-sans font-medium tracking-widest uppercase text-gray-500 <?php echo e($type === 'footer' ? 'text-sm mt-1' : 'text-[0.65rem] mt-0.5'); ?>">Windows Ltd</span>
</div>
<?php /**PATH D:\internship\windows site\windows-laravel\resources\views/partials/logo.blade.php ENDPATH**/ ?>