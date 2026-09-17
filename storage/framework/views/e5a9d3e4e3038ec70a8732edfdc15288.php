 
<header class="sticky top-0 z-50 bg-white border-b border-black w-full font-sans transition-all duration-300 shadow-sm dark:bg-black dark:border-white" id="main-header">
    <div class="w-full">
        
        
        <div class="border-b border-gray-200 dark:border-gray-800 transition-all duration-300" id="header-top-row">
        <div class="max-w-[1920px] mx-auto flex justify-between items-center px-4 md:px-6 py-4 lg:py-5">
            
            
            <div class="flex-1 flex justify-start items-center">
                <a href="/" class="focus:outline-none inline-block transition-opacity hover:opacity-70" aria-label="Home">
                    <?php echo $__env->make('partials.logo', ['type' => 'header'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                </a>
            </div>

            
            <div class="hidden md:flex flex-1 justify-center items-center space-x-6">
                <a href="tel:01455639739" class="flex items-center space-x-2 text-black dark:text-white hover:text-gray-500 transition-colors group">
                    <svg class="w-5 h-5 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    <span class="font-medium tracking-wide text-sm whitespace-nowrap">01455 639 739</span>
                </a>
                <a href="mailto:info@ModernUPVCwindows.co.uk" class="hidden lg:flex items-center space-x-2 text-black dark:text-white hover:text-gray-500 transition-colors group">
                    <svg class="w-5 h-5 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    <span class="font-medium tracking-wide text-sm whitespace-nowrap">info@ModernUPVCwindows.co.uk</span>
                </a>
            </div>

            
            <div class="flex-1 flex justify-end items-center space-x-4">
                
                
                <div class="hidden lg:block relative">
                    <form action="/search" method="GET" class="flex items-center">
                        <input type="text" name="q" placeholder="Search..." class="w-48 xl:w-64 bg-gray-50 border border-gray-300 text-black text-sm px-4 py-2 focus:outline-none focus:border-black focus:ring-1 focus:ring-black transition-colors rounded-none placeholder-gray-400 dark:bg-black dark:border-gray-700 dark:text-white dark:focus:border-white dark:placeholder-gray-600">
                        <button type="submit" class="absolute right-0 top-0 h-full px-3 text-gray-500 hover:text-black dark:hover:text-white transition-colors" aria-label="Submit search">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        </button>
                    </form>
                </div>

                
                <a href="/search" class="lg:hidden p-2 text-black dark:text-white hover:text-gray-500 transition-colors" aria-label="Search">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </a>

                
                <a href="<?php echo e(route('admin.login')); ?>" class="p-2 text-black dark:text-white hover:text-gray-500 transition-colors" aria-label="Login">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                </a>

                
                <button type="button" class="xl:hidden inline-flex items-center justify-center p-2 text-black dark:text-white hover:text-gray-500 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none transition-colors" aria-controls="mobile-menu" aria-expanded="false" id="mobile-menu-btn">
                    <span class="sr-only">Open main menu</span>
                    <svg class="block h-7 w-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true" id="mobile-menu-icon">
                        <path stroke-linecap="square" stroke-linejoin="miter" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
        </div>

        
        <nav class="hidden xl:block w-full bg-white dark:bg-black" aria-label="Primary navigation">
        <div class="max-w-[1920px] mx-auto flex justify-center items-center space-x-1 px-4 md:px-6">
            <?php $__currentLoopData = config('site.nav_items'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $isActive = request()->is(ltrim($item['href'], '/')) || (request()->is('/') && $item['href'] === '/');
                ?>
                
                <a href="<?php echo e($item['href']); ?>" class="relative group py-4 px-5 text-sm font-semibold tracking-wide uppercase text-black dark:text-white transition-colors whitespace-nowrap <?php echo e($isActive ? 'bg-black text-white dark:bg-white dark:text-black' : 'hover:bg-black hover:text-white dark:hover:bg-white dark:hover:text-black'); ?>">
                    <?php echo e($item['label']); ?>

                    <?php if($isActive): ?>
                        <span class="absolute bottom-0 left-0 w-full h-0.5 bg-black dark:bg-white hidden"></span>
                    <?php endif; ?>
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        </nav>
    </div>

    
    <div class="xl:hidden hidden bg-white dark:bg-black border-b border-black dark:border-white shadow-xl font-sans w-full max-h-[calc(100vh-80px)] overflow-y-auto" id="mobile-menu">
        <div class="px-0 pt-0 pb-6 w-full">
            
            
            <div class="bg-gray-50 dark:bg-gray-900 border-b border-gray-200 dark:border-gray-800 p-4 flex flex-col space-y-3">
                <a href="tel:01455639739" class="flex items-center space-x-3 text-black dark:text-white">
                    <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    <span class="font-semibold text-lg tracking-wide">01455 639 739</span>
                </a>
                <a href="mailto:info@ModernUPVCwindows.co.uk" class="flex items-center space-x-3 text-black dark:text-white">
                    <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    <span class="font-medium">info@ModernUPVCwindows.co.uk</span>
                </a>
            </div>

            
            <div class="flex flex-col w-full">
                <?php $__currentLoopData = config('site.nav_items'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $isActive = request()->is(ltrim($item['href'], '/')) || (request()->is('/') && $item['href'] === '/');
                    ?>
                    <a href="<?php echo e($item['href']); ?>" class="w-full block px-6 py-4 text-base font-semibold tracking-wide uppercase border-b border-gray-100 dark:border-gray-800 transition-colors <?php echo e($isActive ? 'bg-black text-white dark:bg-white dark:text-black' : 'text-black dark:text-white hover:bg-gray-50 dark:hover:bg-gray-900'); ?>">
                        <?php echo e($item['label']); ?>

                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            
            
            <div class="px-6 pt-6 pb-2">
                <form action="/search" method="GET" class="flex items-center w-full relative">
                    <input type="text" name="q" placeholder="Search for products or advice..." class="w-full bg-white dark:bg-black border border-black dark:border-white text-black dark:text-white text-sm px-4 py-3 focus:outline-none rounded-none placeholder-gray-500">
                    <button type="submit" class="absolute right-0 top-0 h-full px-4 text-black dark:text-white hover:bg-black hover:text-white dark:hover:bg-white dark:hover:text-black transition-colors border-l border-black dark:border-white" aria-label="Submit search">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Mobile Menu Toggle
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');
        
        if (btn && menu) {
            btn.addEventListener('click', () => {
                const isExpanded = btn.getAttribute('aria-expanded') === 'true';
                btn.setAttribute('aria-expanded', !isExpanded);
                menu.classList.toggle('hidden');
                
                // Toggle burger icon to X (simple visual change)
                const iconPath = btn.querySelector('path');
                if (!isExpanded) {
                    iconPath.setAttribute('d', 'M6 18L18 6M6 6l12 12'); // X icon
                } else {
                    iconPath.setAttribute('d', 'M4 6h16M4 12h16M4 18h16'); // Burger icon
                }
            });
        }
    });
</script>
<?php /**PATH D:\internship\windows site\windows-laravel\resources\views/partials/header.blade.php ENDPATH**/ ?>