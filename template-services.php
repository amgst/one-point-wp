<?php
/*
Template Name: Services
*/
get_header();
?>

    <!-- Hero Section -->
    <section class="pt-20 bg-cover bg-center" style="background-image: url('<?php echo footer_theme_asset('images/hero.jpg'); ?>');">        <div class="bg-black bg-opacity-60">
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
                    <a href="<?php echo home_url('/static-guard'); ?>" class="bg-slate-800 hover:bg-slate-700 text-white font-bold py-3 px-8 rounded-lg transition duration-300">
                        Learn More About Static Guard
                    </a>
                </div>
                <div class="flex justify-center">
                    <img src="<?php echo footer_theme_asset('images/static.jpg'); ?>" alt="Static Guard Security" class="w-full max-w-md rounded-lg shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- Mobile Patrol Section -->
    <section id="mobile-patrol" class="py-20 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="order-2 lg:order-1 flex justify-center">
                    <img src="<?php echo footer_theme_asset('images/mobile.jpg'); ?>" alt="Mobile Patrol Security" class="w-full max-w-md rounded-lg shadow-lg">
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
                    <a href="<?php echo home_url('/mobile-patrol'); ?>" class="bg-slate-800 hover:bg-slate-700 text-white font-bold py-3 px-8 rounded-lg transition duration-300">
                        Learn More About Mobile Patrol
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
                    <a href="<?php echo home_url('/crowd-control'); ?>" class="bg-slate-800 hover:bg-slate-700 text-white font-bold py-3 px-8 rounded-lg transition duration-300">
                        Learn More About Crowd Control
                    </a>
                </div>
                <div class="flex justify-center">
                    <img src="<?php echo footer_theme_asset('images/crowd.jpg'); ?>" alt="Crowd Control Security" class="w-full max-w-md rounded-lg shadow-lg">
                </div>
            </div>
        </div>
    </section>
    <!-- Traffic Control Section -->
    <section id="traffic-control" class="py-20 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="flex justify-center order-1 lg:order-1">
                    <img src="<?php echo footer_theme_asset('images/traffic.jpg'); ?>" alt="Traffic Control Security" class="w-full max-w-md rounded-lg shadow-lg">
                </div>
                <div class="order-2 lg:order-2">
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
                    <a href="<?php echo home_url('/traffic-control'); ?>" class="bg-slate-800 hover:bg-slate-700 text-white font-bold py-3 px-8 rounded-lg transition duration-300">
                        Learn More About Traffic Control
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
                Let The On Point Security provide you with the peace of mind you deserve. Our professional team is ready to tailor a security solution that fits your unique needs.
            </p>
            <a href="<?php echo home_url('/contact'); ?>" class="bg-stone-500 hover:bg-stone-600 text-slate-800 font-bold py-4 px-10 rounded-lg transition duration-300 text-lg">
                Get a Free Quote Today
            </a>
        </div>
    </section>

<?php
get_footer();
?>
