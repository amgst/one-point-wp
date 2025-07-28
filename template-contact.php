<?php
/*
Template Name: Contact
*/
get_header();
?>

    <!-- Hero Section -->
    <section class="pt-20 bg-slate-800 text-white">
        <div class="max-w-7xl mx-auto px-4 py-20">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold mb-6">
                    Get In <span class="text-stone-400">Touch</span>
                </h1>
                <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">
                    Ready to secure your property? Contact our security experts for a free consultation and customized security solution.
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Form & Info Section -->
    <section class="py-20">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <h2 class="text-3xl font-bold text-slate-800 mb-6">Send Us a Message</h2>
                    <?php echo do_shortcode('[contact-form-7 id="1b29117" title="Contact Us"]'); ?>
                </div>

                <!-- Contact Information -->
                <div class="space-y-8">
                    <!-- Contact Details -->
                    <div class="bg-white p-8 rounded-lg shadow-lg">
                        <h3 class="text-2xl font-bold text-slate-800 mb-6">Contact Information</h3>
                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="bg-slate-100 p-3 rounded-lg mr-4">
                                    <i class="fas fa-phone text-slate-800 text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-900 mb-1">Phone</h4>
                                    <p class="text-gray-600">(123) 456-7890</p>
                                    <p class="text-sm text-gray-500">24/7 Emergency Line</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="bg-slate-100 p-3 rounded-lg mr-4">
                                    <i class="fas fa-envelope text-slate-800 text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-900 mb-1">Email</h4>
                                    <p class="text-gray-600">info@vgpsecurity.com</p>
                                    <p class="text-sm text-gray-500">We respond within 2 hours</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="bg-slate-100 p-3 rounded-lg mr-4">
                                    <i class="fas fa-map-marker-alt text-slate-800 text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-900 mb-1">Address</h4>
                                    <p class="text-gray-600">123 Security Lane, Suite 100<br>Metropolis, ST 12345</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="bg-slate-100 p-3 rounded-lg mr-4">
                                    <i class="fas fa-clock text-slate-800 text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-900 mb-1">Business Hours</h4>
                                    <p class="text-gray-600">Monday - Friday: 8:00 AM - 6:00 PM<br>Saturday: 9:00 AM - 4:00 PM<br>Sunday: Emergency calls only</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Emergency Contact -->
                    <div class="bg-red-50 border border-red-200 p-6 rounded-lg">
                        <div class="flex items-center mb-4">
                            <i class="fas fa-exclamation-triangle text-red-600 text-2xl mr-3"></i>
                            <h3 class="text-xl font-bold text-red-800">Emergency Contact</h3>
                        </div>
                        <p class="text-red-700 mb-3">For immediate security emergencies or urgent assistance:</p>
                        <div class="space-y-2">
                            <p class="text-red-800 font-bold text-lg">
                                <i class="fas fa-phone mr-2"></i>
                                Emergency: (123) 456-7999
                            </p>
                            <p class="text-red-600 text-sm">Available 24/7 for existing clients</p>
                        </div>
                    </div>

                    <!-- Service Areas -->
                    <div class="bg-white p-8 rounded-lg shadow-lg">
                        <h3 class="text-2xl font-bold text-slate-800 mb-6">Service Areas</h3>
                        <div class="grid grid-cols-2 gap-4 text-gray-600">
                            <div>
                                <h4 class="font-bold text-gray-900 mb-2">New South Wales</h4>
                                <ul class="space-y-1 text-sm">
                                    <li>• Sydney CBD</li>
                                    <li>• North Shore</li>
                                    <li>• Western Sydney</li>
                                    <li>• South Sydney</li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-2">Other States</h4>
                                <ul class="space-y-1 text-sm">
                                    <li>• Melbourne, VIC</li>
                                    <li>• Brisbane, QLD</li>
                                    <li>• Perth, WA</li>
                                    <li>• Adelaide, SA</li>
                                </ul>
                            </div>
                        </div>
                        <p class="text-sm text-gray-500 mt-4">Contact us for services in other areas</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="py-20 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-4">Find Our Office</h2>
                <p class="text-gray-600 text-lg">Visit us at our Metropolis headquarters for in-person consultations</p>
            </div>
            
            <!-- Map Placeholder -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="h-96 bg-gray-200 flex items-center justify-center relative">
                    <svg width="600" height="400" viewBox="0 0 600 400" class="w-full h-full">
                        <!-- Map background -->
                        <rect width="600" height="400" fill="#e5e7eb"/>
                        
                        <!-- Streets -->
                        <g stroke="#9ca3af" stroke-width="3" fill="none">
                            <line x1="0" y1="200" x2="600" y2="200"/>
                            <line x1="300" y1="0" x2="300" y2="400"/>
                            <line x1="150" y1="0" x2="150" y2="400"/>
                            <line x1="450" y1="0" x2="450" y2="400"/>
                            <line x1="0" y1="100" x2="600" y2="100"/>
                            <line x1="0" y1="300" x2="600" y2="300"/>
                        </g>
                        
                        <!-- Buildings -->
                        <g fill="#d1d5db">
                            <rect x="50" y="50" width="80" height="120" rx="5"/>
                            <rect x="170" y="80" width="100" height="90" rx="5"/>
                            <rect x="320" y="60" width="90" height="110" rx="5"/>
                            <rect x="470" y="70" width="80" height="100" rx="5"/>
                            <rect x="80" y="220" width="120" height="80" rx="5"/>
                            <rect x="320" y="240" width="100" height="120" rx="5"/>
                        </g>
                        
                        <!-- Our building (highlighted) -->
                        <rect x="220" y="220" width="60" height="80" fill="#1c222c" rx="5"/>
                        <rect x="225" y="225" width="50" height="70" fill="#978d86" rx="3"/>
                        
                        <!-- Location marker -->
                        <g transform="translate(250,200)">
                            <path d="M0,0 L-10,20 L10,20 Z" fill="#ef4444"/>
                            <circle cx="0" cy="0" r="8" fill="#ef4444"/>
                            <circle cx="0" cy="0" r="4" fill="white"/>
                        </g>
                        
                        <!-- Street labels -->
                        <text x="10" y="195" fill="#6b7280" font-size="12" font-weight="bold">Security Lane</text>
                        <text x="305" y="15" fill="#6b7280" font-size="12" font-weight="bold" transform="rotate(90 305 15)">Main Avenue</text>
                        
                        <!-- Office label -->
                        <text x="250" y="180" text-anchor="middle" fill="#1c222c" font-size="14" font-weight="bold">VGP Security</text>
                        <text x="250" y="195" text-anchor="middle" fill="#1c222c" font-size="12">Head Office</text>
                    </svg>
                    
                    <!-- Map overlay info -->
                    <div class="absolute bottom-4 left-4 bg-white p-4 rounded-lg shadow-lg">
                        <h4 class="font-bold text-slate-800 mb-2">VGP Security</h4>
                        <p class="text-gray-600 text-sm">123 Security Lane, Suite 100<br>Metropolis, ST 12345</p>
                        <a href="#" class="text-slate-600 hover:text-slate-800 text-sm underline mt-2 inline-block">
                            Get Directions
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-white">
        <div class="max-w-4xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-4">Frequently Asked Questions</h2>
                <p class="text-gray-600 text-lg">Quick answers to common questions about our security services</p>
            </div>
            
            <div class="space-y-6">
                <div class="bg-gray-50 p-6 rounded-lg">
                    <h3 class="text-lg font-bold text-slate-800 mb-3">How quickly can you respond to security emergencies?</h3>
                    <p class="text-gray-600">Our emergency response team can typically arrive on-site within 15-30 minutes in metropolitan areas, depending on location and traffic conditions. We maintain 24/7 monitoring and rapid response capabilities.</p>
                </div>
                
                <div class="bg-gray-50 p-6 rounded-lg">
                    <h3 class="text-lg font-bold text-slate-800 mb-3">Are your security guards licensed and insured?</h3>
                    <p class="text-gray-600">Yes, all our security personnel are fully licensed, bonded, and insured. They undergo comprehensive background checks, professional training, and regular certification updates to maintain the highest standards.</p>
                </div>
                
                <div class="bg-gray-50 p-6 rounded-lg">
                    <h3 class="text-lg font-bold text-slate-800 mb-3">Do you provide security services outside of Metropolis?</h3>
                    <p class="text-gray-600">Yes, we provide security services across major cities. Contact us to discuss your specific location and requirements.</p>
                </div>
                
                <div class="bg-gray-50 p-6 rounded-lg">
                    <h3 class="text-lg font-bold text-slate-800 mb-3">What is included in a security assessment?</h3>
                    <p class="text-gray-600">Our comprehensive security assessment includes property evaluation, risk analysis, vulnerability identification, and customized security recommendations. We provide a detailed report with implementation timelines and cost estimates.</p>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
?>
