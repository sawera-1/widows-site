
<footer class="bg-black text-white font-sans w-full" aria-labelledby="footer-heading">
    <h2 id="footer-heading" class="sr-only">Footer</h2>
    
    <div class="max-w-[1920px] mx-auto px-6 lg:px-16 2xl:px-24 pt-24 lg:pt-32">
        
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 lg:gap-24 mb-16 lg:mb-24">
            
            
            <div class="lg:col-span-8 flex flex-col">
                
                <div class="mb-16 lg:mb-24">
                    <a href="/" class="focus:outline-none inline-block hover:opacity-80 transition-opacity">
                        <?php echo $__env->make('partials.logo', ['type' => 'footer'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    </a>
                </div>
                
                
                <div class="flex flex-col sm:flex-row flex-wrap gap-12 lg:gap-20">
                    <div class="flex-1 min-w-[200px] lg:max-w-[320px]">
                        <h3 class="text-[14px] font-sans font-semibold text-[#e2dedc] uppercase tracking-[2px] mb-4">About</h3>
                        <p class="font-serif text-lg text-white leading-[1.6]">
                            We have been in acrylic business for 20 years and everything is always made in the USA. JBob’s Designs is an industry leader in acrylic awards, promotional products and acrylic fabrication.
                        </p>
                    </div>
                    
                    <div class="flex-1 min-w-[200px]">
                        <h3 class="text-[14px] font-sans font-semibold text-[#e2dedc] uppercase tracking-[2px] mb-4">Location</h3>
                        <p class="font-serif text-lg text-white leading-[1.5] mb-8">
                            JBOB’S DESIGNS<br>
                            125 NE 26th St, Grand Prairie, TX, 75050
                        </p>
                        
                        <h3 class="text-[14px] font-sans font-semibold text-[#e2dedc] uppercase tracking-[2px] mb-4">Toll Free</h3>
                        <p class="font-serif text-xl lg:text-2xl text-white leading-[1.4]">
                            <a href="tel:+18772845262" class="hover:text-jbobs-heading-light transition-colors">877-284-5262</a>
                        </p>
                    </div>
                    
                    <div class="flex-1 min-w-[200px]">
                        <h3 class="text-[14px] font-sans font-semibold text-[#e2dedc] uppercase tracking-[2px] mb-4">Lines</h3>
                        <p class="font-serif text-lg text-white leading-[1.6]">
                            Products catalog<br>
                            Corporate Awards<br>
                            Industrial Fabrication<br>
                            Retail &amp; POP Displays
                        </p>
                    </div>
                </div>
            </div>

            
            <div class="lg:col-span-4 flex flex-col justify-end lg:pl-8">
                <h3 class="text-[28px] lg:text-[40px] font-serif font-medium text-white mb-8 leading-[1.2] opacity-0 hidden lg:block">
                    Map
                </h3>
                
                
                <div class="w-full h-64 lg:h-56 bg-white/5 border border-white/10 overflow-hidden relative" style="border-radius: 3px;">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d107380.93290687796!2d-97.09849503460613!3d32.74797087968537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864e62d2e40898d3%3A0xb5ef6ac1fa05351!2sGrand%20Prairie%2C%20TX!5e0!3m2!1sen!2sus!4v1714589254848!5m2!1sen!2sus" 
                        width="100%" 
                        height="100%" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade"
                        title="JBOBS Location Map">
                    </iframe>
                </div>
            </div>
        </div>

        
        <div class="border-t border-white pt-8 pb-12 flex flex-col md:flex-row justify-between items-center gap-6">
            
            
            <p class="text-[14px] text-jbobs-body-light">
                &copy; <?php echo e(date('Y')); ?> JBOBS. All Rights Reserved.
            </p>
            
            
            <nav class="flex flex-wrap justify-center items-center gap-x-4 gap-y-2 text-[14px] text-white" aria-label="Footer secondary navigation">
                <a href="/about" class="hover:text-jbobs-body-light transition-colors">About</a>
                <span class="text-white/30">|</span>
                <a href="/services" class="hover:text-jbobs-body-light transition-colors">Services</a>
                <span class="text-white/30">|</span>
                <a href="/projects" class="hover:text-jbobs-body-light transition-colors">Case Studies</a>
                <span class="text-white/30">|</span>
                <a href="/catalog" class="hover:text-jbobs-body-light transition-colors">Catalog</a>
                <span class="text-white/30">|</span>
                <a href="/contact" class="hover:text-jbobs-body-light transition-colors">Contact</a>
            </nav>
            
        </div>
    </div>
</footer>
<?php /**PATH D:\internship\JBOBS\jbobs-laravel\resources\views/partials/footer.blade.php ENDPATH**/ ?>