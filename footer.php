    <!-- Footer -->
    <footer class="bg-slate-800 text-white">
        <div class="max-w-7xl mx-auto px-4 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div class="md:col-span-1">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/logo.png" alt="VGP Security Logo" class="h-10 mb-4">
                    <p class="text-stone-400">Your trusted partner in comprehensive security solutions.</p>
                </div>
                
                <!-- Quick Links -->
                <div>
                    <h3 class="font-bold text-lg mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="<?php echo home_url(); ?>" class="text-stone-400 hover:text-white">Home</a></li>
                        <li><a href="<?php echo home_url('/about'); ?>" class="text-stone-400 hover:text-white">About Us</a></li>
                        <li><a href="<?php echo home_url('/services'); ?>" class="text-stone-400 hover:text-white">Services</a></li>
                        <li><a href="<?php echo home_url('/blog'); ?>" class="text-stone-400 hover:text-white">Blog</a></li>
                        <li><a href="<?php echo home_url('/contact'); ?>" class="text-stone-400 hover:text-white">Contact</a></li>
                    </ul>
                </div>
                
                <!-- Services -->
                <div>
                    <h3 class="font-bold text-lg mb-4">Services</h3>
                    <ul class="space-y-2">
                        <li><a href="<?php echo home_url('/services#static-guard'); ?>" class="text-stone-400 hover:text-white">Static Guard</a></li>
                        <li><a href="<?php echo home_url('/services#mobile-patrol'); ?>" class="text-stone-400 hover:text-white">Mobile Patrol</a></li>
                        <li><a href="<?php echo home_url('/services#crowd-control'); ?>" class="text-stone-400 hover:text-white">Crowd Control</a></li>
                        <li><a href="<?php echo home_url('/services#traffic-control'); ?>" class="text-stone-400 hover:text-white">Traffic Control</a></li>
                    </ul>
                </div>
                
                <!-- Contact Info -->
                <div>
                    <h3 class="font-bold text-lg mb-4">Contact Us</h3>
                    <address class="not-italic text-stone-400 space-y-2">
                        <p>123 Security Lane, Suite 100<br>Metropolis, ST 12345</p>
                        <p>Email: <a href="mailto:info@vgpsecurity.com" class="hover:text-white">info@vgpsecurity.com</a></p>
                        <p>Phone: <a href="tel:+1234567890" class="hover:text-white">(123) 456-7890</a></p>
                    </address>
                </div>
            </div>
            
            <div class="mt-8 pt-8 border-t border-slate-700 flex flex-col md:flex-row justify-between items-center">
                <p class="text-stone-400 text-sm">&copy; <?php echo date('Y'); ?> VGP Security. All rights reserved.</p>
                <div class="flex space-x-4 mt-4 md:mt-0">
                    <a href="#" class="text-stone-400 hover:text-white"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-stone-400 hover:text-white"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-stone-400 hover:text-white"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>
