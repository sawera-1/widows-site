
<header class="sticky top-0 z-50 bg-jbobs-bg-1 w-full font-sans transition-all duration-500" id="main-header">
    <div class="max-w-[1920px] mx-auto px-6 lg:px-16 2xl:px-24 w-full">
        
        <div class="flex justify-between items-center py-6 lg:py-10 border-b border-black transition-all duration-500" id="header-inner">
            
            
            <div class="flex-1 flex justify-start items-center">
                <a href="/" class="focus:outline-none inline-block transition-opacity hover:opacity-80" aria-label="Home">
                    <?php echo $__env->make('partials.logo', ['type' => 'header'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                </a>
            </div>

            
            <nav class="hidden xl:flex justify-center space-x-10 2xl:space-x-14" aria-label="Primary navigation">
                <?php $__currentLoopData = config('site.nav_items'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(!empty($item['children'])): ?>
                        <div class="relative group flex items-center header-nav-item">
                            <a href="<?php echo e($item['href'] ?? '#'); ?>" class="text-jbobs-heading/80 hover:text-jbobs-heading font-medium text-[16px] tracking-wide inline-flex items-center focus:outline-none transition-colors" aria-expanded="false">
                                <span><?php echo e($item['label']); ?></span>
                                <svg class="ml-1.5 h-4 w-4 text-jbobs-heading/60 group-hover:text-jbobs-heading transition-colors" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </a>
                            
                            
                            <div class="absolute top-full left-1/2 -translate-x-1/2 mt-4 w-64 bg-white border border-gray-100 shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 ease-out z-50">
                                <div class="py-2">
                                    <?php $__currentLoopData = $item['children']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <a href="<?php echo e($child['href']); ?>" class="block px-6 py-3 text-sm text-gray-500 hover:bg-gray-50 hover:text-black transition-colors"><?php echo e($child['label']); ?></a>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </div>
                    <?php else: ?>
                        <a href="<?php echo e($item['href']); ?>" class="text-jbobs-heading/80 hover:text-jbobs-heading font-medium text-[16px] tracking-wide inline-flex items-center transition-colors header-nav-item">
                            <?php echo e($item['label']); ?>

                        </a>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </nav>

            
            <div class="flex-1 flex justify-end items-center space-x-6">
                
                <a href="/contact" class="hidden xl:inline-flex items-center justify-center px-8 py-3.5 border border-black text-sm font-medium tracking-widest uppercase text-white bg-black hover:bg-transparent hover:text-black rounded-none transition-all duration-300">
                    Request a Quote
                </a>
                
                
                <button type="button" class="xl:hidden inline-flex items-center justify-center p-2 rounded-md text-jbobs-heading/80 hover:text-jbobs-heading hover:bg-black/5 focus:outline-none transition-colors" aria-controls="mobile-menu" aria-expanded="false" id="mobile-menu-btn">
                    <span class="sr-only">Open main menu</span>
                    <svg class="block h-8 w-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true" id="mobile-menu-icon">
                        <path stroke-linecap="square" stroke-linejoin="miter" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    
    <div class="xl:hidden hidden bg-jbobs-bg-1 border-b border-black shadow-lg font-sans w-full" id="mobile-menu">
        <div class="px-6 pt-4 pb-8 space-y-1 max-w-[1920px] mx-auto">
            <?php $__currentLoopData = config('site.nav_items'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(!empty($item['children'])): ?>
                    <div class="space-y-1">
                        <button type="button" class="w-full text-left px-4 py-4 text-[17px] font-medium text-jbobs-heading flex justify-between items-center hover:bg-black/5 transition-colors mobile-dropdown-btn border-b border-black/10">
                            <?php echo e($item['label']); ?>

                            <svg class="h-5 w-5 text-jbobs-heading/50 transform transition-transform" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div class="hidden pl-8 py-3 space-y-2 mobile-dropdown-content">
                            <?php $__currentLoopData = $item['children']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="<?php echo e($child['href']); ?>" class="block px-4 py-3 text-[15px] font-medium text-jbobs-heading/70 hover:text-jbobs-heading hover:translate-x-1 transition-all"><?php echo e($child['label']); ?></a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                <?php else: ?>
                    <a href="<?php echo e($item['href']); ?>" class="block px-4 py-4 text-[17px] font-medium text-jbobs-heading hover:bg-black/5 transition-colors border-b border-black/10"><?php echo e($item['label']); ?></a>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            <div class="pt-8 pb-4 px-4">
                <a href="/contact" class="w-full flex items-center justify-center px-6 py-4 border border-black text-sm font-semibold tracking-widest uppercase text-white bg-black hover:bg-transparent hover:text-black rounded-none transition-colors">
                    Request a Quote
                </a>
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
            });
        }

        // Mobile Dropdown Toggle
        const dropdownBtns = document.querySelectorAll('.mobile-dropdown-btn');
        dropdownBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const content = btn.nextElementSibling;
                const icon = btn.querySelector('svg');
                content.classList.toggle('hidden');
                icon.classList.toggle('rotate-180');
            });
        });

        // Sticky Header shrink effect (optional, toned down for editorial feel)
        const header = document.getElementById('main-header');
        const inner = document.getElementById('header-inner');
        
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                inner.classList.replace('lg:py-10', 'lg:py-6');
                inner.classList.replace('py-6', 'py-4');
                header.classList.add('shadow-sm');
            } else {
                inner.classList.replace('lg:py-6', 'lg:py-10');
                inner.classList.replace('py-4', 'py-6');
                header.classList.remove('shadow-sm');
            }
        });
    });
</script>
<?php /**PATH D:\internship\JBOBS\jbobs-laravel\resources\views/partials/header.blade.php ENDPATH**/ ?>