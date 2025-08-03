<!-- Footer -->
    <footer class="bg-slate-900 text-white">
        <div class="max-w-7xl mx-auto px-4 py-16">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div class="lg:col-span-1">
                    <div class="mb-6">
                        <?php echo footer_theme_footer_logo(); ?>
                    </div>
                    <p class="text-stone-300 mb-4 leading-relaxed">
                        Your trusted partner in comprehensive security solutions. Protecting what matters most with professional, reliable, and certified security services.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-slate-800 rounded-full flex items-center justify-center hover:bg-stone-600 transition duration-300" aria-label="Facebook">
                            <i class="fab fa-facebook-f text-sm"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-slate-800 rounded-full flex items-center justify-center hover:bg-stone-600 transition duration-300" aria-label="Twitter">
                            <i class="fab fa-twitter text-sm"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-slate-800 rounded-full flex items-center justify-center hover:bg-stone-600 transition duration-300" aria-label="LinkedIn">
                            <i class="fab fa-linkedin-in text-sm"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-slate-800 rounded-full flex items-center justify-center hover:bg-stone-600 transition duration-300" aria-label="Instagram">
                            <i class="fab fa-instagram text-sm"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Quick Links -->
                <div>
                    <h3 class="font-bold text-lg mb-6 text-stone-100">Quick Links</h3>
                    <ul class="space-y-3">
                        <li><a href="<?php echo home_url(); ?>" class="text-stone-300 hover:text-stone-100 transition duration-300 flex items-center">
                            <i class="fas fa-chevron-right text-xs mr-2 text-stone-500"></i>Home
                        </a></li>
                        <li><a href="<?php echo home_url('/about'); ?>" class="text-stone-300 hover:text-stone-100 transition duration-300 flex items-center">
                            <i class="fas fa-chevron-right text-xs mr-2 text-stone-500"></i>About Us
                        </a></li>
                        <li><a href="<?php echo home_url('/services'); ?>" class="text-stone-300 hover:text-stone-100 transition duration-300 flex items-center">
                            <i class="fas fa-chevron-right text-xs mr-2 text-stone-500"></i>Services
                        </a></li>
                        <li><a href="<?php echo home_url('/blog'); ?>" class="text-stone-300 hover:text-stone-100 transition duration-300 flex items-center">
                            <i class="fas fa-chevron-right text-xs mr-2 text-stone-500"></i>Blog
                        </a></li>
                        <li><a href="<?php echo home_url('/contact'); ?>" class="text-stone-300 hover:text-stone-100 transition duration-300 flex items-center">
                            <i class="fas fa-chevron-right text-xs mr-2 text-stone-500"></i>Contact
                        </a></li>
                    </ul>
                </div>
                
                <!-- Security Services -->
                <div>
                    <h3 class="font-bold text-lg mb-6 text-stone-100">Our Services</h3>
                    <ul class="space-y-3">
                        <li><a href="<?php echo home_url('/static-guard'); ?>" class="text-stone-300 hover:text-stone-100 transition duration-300 flex items-center">
                            <i class="fas fa-shield-alt text-xs mr-2 text-stone-500"></i>Static Guard
                        </a></li>
                        <li><a href="<?php echo home_url('/mobile-patrol'); ?>" class="text-stone-300 hover:text-stone-100 transition duration-300 flex items-center">
                            <i class="fas fa-car text-xs mr-2 text-stone-500"></i>Mobile Patrol
                        </a></li>
                        <li><a href="<?php echo home_url('/crowd-control'); ?>" class="text-stone-300 hover:text-stone-100 transition duration-300 flex items-center">
                            <i class="fas fa-users text-xs mr-2 text-stone-500"></i>Crowd Control
                        </a></li>
                        <li><a href="<?php echo home_url('/traffic-control'); ?>" class="text-stone-300 hover:text-stone-100 transition duration-300 flex items-center">
                            <i class="fas fa-traffic-light text-xs mr-2 text-stone-500"></i>Traffic Control
                        </a></li>
                    </ul>
                    
                    <div class="mt-6 p-4 bg-slate-800 rounded-lg">
                        <h4 class="font-semibold text-stone-100 mb-2">24/7 Emergency</h4>
                        <p class="text-stone-300 text-sm mb-2">Need immediate security assistance?</p>
                        <a href="tel:+1234567890" class="text-stone-400 hover:text-stone-100 font-semibold">
                            <i class="fas fa-phone mr-1"></i>(123) 456-7890
                        </a>
                    </div>
                </div>
                
                <!-- Contact & Business Info -->
                <div>
                    <h3 class="font-bold text-lg mb-6 text-stone-100">Get In Touch</h3>
                    
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-slate-800 rounded-full flex items-center justify-center mr-3 mt-1 flex-shrink-0">
                                <i class="fas fa-map-marker-alt text-xs text-stone-400"></i>
                            </div>
                            <div>
                                <p class="text-stone-300 text-sm">
                                    <?php 
                                    $address = get_theme_mod('company_address', '123 Security Lane, Suite 100<br>Metropolis, ST 12345');
                                    echo wp_kses_post($address);
                                    ?>
                                </p>
                            </div>
                        </div>
                        
                        <div class="flex items-center">
                            <div class="w-8 h-8 bg-slate-800 rounded-full flex items-center justify-center mr-3 flex-shrink-0">
                                <i class="fas fa-envelope text-xs text-stone-400"></i>
                            </div>
                            <div>
                                <a href="mailto:<?php echo esc_attr(get_theme_mod('company_email', 'info@company.com')); ?>" 
                                   class="text-stone-300 hover:text-stone-100 transition duration-300 text-sm">
                                    <?php echo esc_html(get_theme_mod('company_email', 'info@company.com')); ?>
                                </a>
                            </div>
                        </div>
                        
                        <div class="flex items-center">
                            <div class="w-8 h-8 bg-slate-800 rounded-full flex items-center justify-center mr-3 flex-shrink-0">
                                <i class="fas fa-phone text-xs text-stone-400"></i>
                            </div>
                            <div>
                                <a href="tel:<?php echo esc_attr(str_replace(['(', ')', ' ', '-'], '', get_theme_mod('company_phone', '(123) 456-7890'))); ?>" 
                                   class="text-stone-300 hover:text-stone-100 transition duration-300 text-sm">
                                    <?php echo esc_html(get_theme_mod('company_phone', '(123) 456-7890')); ?>
                                </a>
                            </div>
                        </div>
                        
                        <div class="flex items-center">
                            <div class="w-8 h-8 bg-slate-800 rounded-full flex items-center justify-center mr-3 flex-shrink-0">
                                <i class="fas fa-clock text-xs text-stone-400"></i>
                            </div>
                            <div>
                                <p class="text-stone-300 text-sm">
                                    Available 24/7<br>
                                    <span class="text-stone-400">Emergency Response</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    

                </div>
            </div>
            

            
            <!-- Bottom Footer -->
            <div class="mt-8 pt-8 border-t border-slate-800">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <div class="flex flex-col md:flex-row items-center space-y-2 md:space-y-0 md:space-x-6">
                        <p class="text-stone-400 text-sm">
                            &copy; <?php echo date('Y'); ?> <?php echo esc_html(get_bloginfo('name')); ?>. All rights reserved.
                        </p>
                    </div>
                    <div class="mt-4 md:mt-0">
                        <p class="text-stone-500 text-xs">
                            Professional Security Services | developed by <a href="https://vancegraphix.com.au/" target="_blank" class="text-stone-400 hover:text-stone-300 transition duration-300">vgp</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>
