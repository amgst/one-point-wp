<?php
/*
Template Name: Services
*/
get_header();
?>

    <!-- Hero Section -->
    <section class="pt-20 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1519681393784-d120267933ba?q=80&w=2070&auto=format&fit=crop');">
        <div class="bg-black bg-opacity-60">
            <div class="max-w-7xl mx-auto px-4 py-24 text-center text-white">
                <h1 class="text-4xl md:text-6xl font-bold mb-4">Our Security Services</h1>
                <p class="text-xl md:text-2xl max-w-3xl mx-auto">
                    Delivering excellence and reliability in security solutions. We provide four core services to ensure your safety and peace of mind.
                </p>
            </div>
        </div>
    </section>

    <!-- Static Guard Section -->
    <section id="static-guard" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-6">1. Static Guard</h2>
                    <p class="text-gray-600 text-lg mb-6">
                        Our static guards provide a strong, visible security presence to protect your premises. Stationed at key locations, they are trained to manage access, deter threats, and respond swiftly to any incidents, ensuring the safety of your property and personnel.
                    </p>
                    <ul class="space-y-3 text-gray-600 mb-6">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-slate-800 mr-3 mt-1"></i>
                            <span>Dedicated on-site security personnel</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-slate-800 mr-3 mt-1"></i>
                            <span>Control of entry and exit points</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-slate-800 mr-3 mt-1"></i>
                            <span>Regular foot patrols of the area</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-slate-800 mr-3 mt-1"></i>
                            <span>Immediate response to alarms and emergencies</span>
                        </li>
                    </ul>
                    <a href="<?php echo home_url('/contact'); ?>" class="bg-slate-800 hover:bg-slate-700 text-white font-bold py-3 px-8 rounded-lg transition duration-300">
                        Book a Static Guard
                    </a>
                </div>
                <div class="flex justify-center">
                    <svg width="400" height="300" viewBox="0 0 400 300" class="w-full max-w-md">
                        <!-- Security guard figure -->
                        <g transform="translate(200,50)">
                            <!-- Head -->
                            <circle cx="0" cy="0" r="25" fill="#f4a261"/>
                            <!-- Hat -->
                            <ellipse cx="0" cy="-15" rx="30" ry="8" fill="#1c222c"/>
                            <rect x="-25" y="-20" width="50" height="10" fill="#1c222c"/>
                            <!-- Body -->
                            <rect x="-20" y="25" width="40" height="80" fill="#1c222c" rx="5"/>
                            <!-- Arms -->
                            <rect x="-35" y="35" width="15" height="50" fill="#1c222c" rx="7"/>
                            <rect x="20" y="35" width="15" height="50" fill="#1c222c" rx="7"/>
                            <!-- Legs -->
                            <rect x="-15" y="105" width="12" height="60" fill="#1c222c" rx="6"/>
                            <rect x="3" y="105" width="12" height="60" fill="#1c222c" rx="6"/>
                            <!-- Badge -->
                            <circle cx="-8" cy="50" r="6" fill="#978d86"/>
                            <!-- Radio -->
                            <rect x="25" y="45" width="8" height="15" fill="#374151" rx="2"/>
                            <!-- Flashlight -->
                            <rect x="-40" y="70" width="5" height="20" fill="#374151" rx="2"/>
                        </g>
                        
                        <!-- Building in background -->
                        <rect x="50" y="180" width="300" height="100" fill="#e5e7eb" opacity="0.7"/>
                        <rect x="70" y="200" width="20" height="30" fill="#978d86" opacity="0.8"/>
                        <rect x="110" y="200" width="20" height="30" fill="#978d86" opacity="0.8"/>
                        <rect x="150" y="200" width="20" height="30" fill="#978d86" opacity="0.8"/>
                        <rect x="250" y="200" width="20" height="30" fill="#978d86" opacity="0.8"/>
                        <rect x="290" y="200" width="20" height="30" fill="#978d86" opacity="0.8"/>
                        
                        <!-- Ground -->
                        <rect x="0" y="280" width="400" height="20" fill="#9ca3af"/>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <!-- Mobile Patrol Section -->
    <section id="mobile-patrol" class="py-20 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="order-2 lg:order-1 flex justify-center">
                    <svg width="400" height="300" viewBox="0 0 400 300" class="w-full max-w-md">
                        <!-- Security vehicle -->
                        <rect x="100" y="120" width="200" height="70" fill="#1c222c" rx="10"/>
                        <!-- Windows -->
                        <rect x="115" y="130" width="50" height="30" fill="#978d86" opacity="0.7"/>
                        <rect x="175" y="130" width="50" height="30" fill="#978d86" opacity="0.7"/>
                        <rect x="235" y="130" width="30" height="30" fill="#978d86" opacity="0.7"/>
                        <!-- Wheels -->
                        <circle cx="140" cy="200" r="20" fill="#374151"/>
                        <circle cx="260" cy="200" r="20" fill="#374151"/>
                        <circle cx="140" cy="200" r="12" fill="#6b7280"/>
                        <circle cx="260" cy="200" r="12" fill="#6b7280"/>
                        <!-- Light bar -->
                        <rect x="150" y="110" width="100" height="10" fill="#ef4444" rx="4"/>
                        <!-- Route path -->
                        <path d="M50,250 Q150,200 250,250 T450,250" 
                              stroke="#978d86" stroke-width="4" stroke-dasharray="15,10" fill="none" opacity="0.8"/>
                    </svg>
                </div>
                <div class="order-1 lg:order-2">
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-6">2. Mobile Patrol</h2>
                    <p class="text-gray-600 text-lg mb-6">
                        Our mobile patrol units offer a flexible and dynamic security solution, conducting regular and random checks on your property. This service is a cost-effective way to deter criminal activity and provide rapid response when needed.
                    </p>
                    <ul class="space-y-3 text-gray-600 mb-6">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-slate-800 mr-3 mt-1"></i>
                            <span>Marked security vehicles for high visibility</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-slate-800 mr-3 mt-1"></i>
                            <span>Scheduled and unscheduled property checks</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-slate-800 mr-3 mt-1"></i>
                            <span>GPS tracking for accountability</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-slate-800 mr-3 mt-1"></i>
                            <span>Alarm response and keyholding services</span>
                        </li>
                    </ul>
                    <a href="<?php echo home_url('/contact'); ?>" class="bg-slate-800 hover:bg-slate-700 text-white font-bold py-3 px-8 rounded-lg transition duration-300">
                        Arrange Mobile Patrol
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Crowd Control Section -->
    <section id="crowd-control" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-6">3. Crowd Control</h2>
                    <p class="text-gray-600 text-lg mb-6">
                        Effective crowd management is crucial for the success and safety of any event. Our experienced crowd controllers are skilled in managing large groups, preventing disturbances, and ensuring a secure and orderly environment for everyone.
                    </p>
                    <ul class="space-y-3 text-gray-600 mb-6">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-slate-800 mr-3 mt-1"></i>
                            <span>Event security and planning</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-slate-800 mr-3 mt-1"></i>
                            <span>Access and egress management</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-slate-800 mr-3 mt-1"></i>
                            <span>Conflict resolution and de-escalation</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-slate-800 mr-3 mt-1"></i>
                            <span>Coordination with event organizers and local authorities</span>
                        </li>
                    </ul>
                    <a href="<?php echo home_url('/contact'); ?>" class="bg-slate-800 hover:bg-slate-700 text-white font-bold py-3 px-8 rounded-lg transition duration-300">
                        Hire Crowd Controllers
                    </a>
                </div>
                <div class="flex justify-center">
                    <svg width="400" height="300" viewBox="0 0 400 300" class="w-full max-w-md">
                        <!-- Crowd of people -->
                        <g fill="#6b7280">
                            <circle cx="100" cy="150" r="15"/>
                            <circle cx="150" cy="140" r="15"/>
                            <circle cx="200" cy="150" r="15"/>
                            <circle cx="250" cy="140" r="15"/>
                            <circle cx="300" cy="150" r="15"/>
                            <circle cx="125" cy="180" r="15"/>
                            <circle cx="175" cy="170" r="15"/>
                            <circle cx="225" cy="180" r="15"/>
                            <circle cx="275" cy="170" r="15"/>
                        </g>
                        <!-- Security guards in crowd -->
                        <g fill="#1c222c">
                            <circle cx="80" cy="120" r="18"/>
                            <circle cx="320" cy="120" r="18"/>
                        </g>
                        <g fill="white" font-size="12" text-anchor="middle">
                            <text x="80" y="125">S</text>
                            <text x="320" y="125">S</text>
                        </g>
                        <!-- Barriers -->
                        <rect x="50" y="220" width="300" height="10" fill="#978d86" rx="5"/>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <!-- Access Control Section -->
        <!-- Traffic Control Section -->
        <!-- Traffic Control Section -->
    <section id="traffic-control" class="py-20 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="flex justify-center order-1 lg:order-2">
                    <svg width="400" height="300" viewBox="0 0 400 300" class="w-full max-w-md">
                        <!-- Road -->
                        <path d="M 0 250 Q 200 200 400 250" stroke="#6b7280" stroke-width="40" fill="none"/>
                        <path d="M 0 250 Q 200 200 400 250" stroke="white" stroke-width="2" stroke-dasharray="20 20" fill="none"/>
                        <!-- Car -->
                        <rect x="170" y="180" width="60" height="30" fill="#978d86" rx="5"/>
                        <rect x="180" y="170" width="40" height="10" fill="#a8a29e" rx="2"/>
                        <!-- Traffic light -->
                        <rect x="300" y="50" width="30" height="80" fill="#1c222c" rx="5"/>
                        <circle cx="315" cy="70" r="8" fill="red"/>
                        <circle cx="315" cy="95" r="8" fill="#6b7280"/>
                        <circle cx="315" cy="120" r="8" fill="#6b7280"/>
                        <!-- Stop sign -->
                        <polygon points="85,50 115,50 130,80 115,110 85,110 70,80" fill="red"/>
                        <text x="100" y="88" fill="white" font-size="20" font-weight="bold" text-anchor="middle">STOP</text>
                    </svg>
                </div>
                <div class="order-2 lg:order-1">
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-6">4. Traffic Control</h2>
                    <p class="text-gray-600 text-lg mb-6">
                        Our certified traffic controllers ensure the safe and efficient flow of vehicles and pedestrians around work sites, events, or any situation requiring professional traffic management. We provide comprehensive solutions to minimize disruptions and enhance safety.
                    </p>
                    <ul class="space-y-3 text-gray-600 mb-6">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-slate-800 mr-3 mt-1"></i>
                            <span>Construction site traffic management</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-slate-800 mr-3 mt-1"></i>
                            <span>Event traffic and parking coordination</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-slate-800 mr-3 mt-1"></i>
                            <span>Road closure and detour management</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-slate-800 mr-3 mt-1"></i>
                            <span>Pedestrian safety and control</span>
                        </li>
                    </ul>
                    <a href="<?php echo home_url('/contact'); ?>" class="bg-slate-800 hover:bg-slate-700 text-white font-bold py-3 px-8 rounded-lg transition duration-300">
                        Book Traffic Control
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-slate-800 text-white">
        <div class="max-w-7xl mx-auto px-4 py-16 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Ready to Secure Your Assets?</h2>
            <p class="text-lg text-slate-300 mb-8 max-w-2xl mx-auto">
                Let VGP Security provide you with the peace of mind you deserve. Our professional team is ready to tailor a security solution that fits your unique needs.
            </p>
            <a href="<?php echo home_url('/contact'); ?>" class="bg-stone-500 hover:bg-stone-600 text-slate-800 font-bold py-4 px-10 rounded-lg transition duration-300 text-lg">
                Get a Free Quote Today
            </a>
        </div>
    </section>

<?php
get_footer();
?>
