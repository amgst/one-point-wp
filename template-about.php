<?php
/*
Template Name: About
*/
get_header();
?>

    <!-- Hero Section -->
    <section class="pt-20 bg-slate-800 text-white">
        <div class="max-w-7xl mx-auto px-4 py-20">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold mb-6">
                    About <span class="text-stone-400">The One Point Security</span>
                </h1>
                <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">
                    Your trusted security partner with years of experience protecting what matters most.
                </p>
            </div>
        </div>
    </section>

    <!-- Company Story Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-6">Our Story</h2>
                    <p class="text-gray-600 text-lg mb-6">
                        Founded in 2019, The One Point Security emerged from a vision to provide uncompromising security services across Australia. Our founders, with decades of combined experience in law enforcement and private security, recognized the need for a security company that truly understands the unique challenges facing Australian businesses and communities.
                    </p>
                    <p class="text-gray-600 text-lg mb-6">
                        From our humble beginnings as a small team of dedicated professionals, we have grown into one of Australia's most trusted security providers, serving hundreds of satisfied clients across residential, commercial, and industrial sectors.
                    </p>
                    <p class="text-gray-600 text-lg">
                        Today, we continue to uphold our founding principles of integrity, professionalism, and unwavering commitment to our clients' safety and security.
                    </p>
                </div>
                <div class="flex justify-center">
                    <svg width="400" height="300" viewBox="0 0 400 300" class="w-full max-w-md">
                        <!-- Building silhouette -->
                        <rect x="50" y="150" width="80" height="120" fill="#1c222c" opacity="0.8"/>
                        <rect x="150" y="100" width="100" height="170" fill="#1c222c" opacity="0.9"/>
                        <rect x="270" y="130" width="80" height="140" fill="#1c222c" opacity="0.7"/>
                        
                        <!-- Windows -->
                        <rect x="60" y="160" width="15" height="20" fill="#978d86"/>
                        <rect x="85" y="160" width="15" height="20" fill="#978d86"/>
                        <rect x="60" y="190" width="15" height="20" fill="#978d86"/>
                        <rect x="85" y="190" width="15" height="20" fill="#978d86"/>
                        
                        <rect x="165" y="120" width="15" height="20" fill="#978d86"/>
                        <rect x="190" y="120" width="15" height="20" fill="#978d86"/>
                        <rect x="215" y="120" width="15" height="20" fill="#978d86"/>
                        <rect x="165" y="150" width="15" height="20" fill="#978d86"/>
                        <rect x="190" y="150" width="15" height="20" fill="#978d86"/>
                        <rect x="215" y="150" width="15" height="20" fill="#978d86"/>
                        
                        <rect x="285" y="150" width="15" height="20" fill="#978d86"/>
                        <rect x="310" y="150" width="15" height="20" fill="#978d86"/>
                        <rect x="285" y="180" width="15" height="20" fill="#978d86"/>
                        <rect x="310" y="180" width="15" height="20" fill="#978d86"/>
                        
                        <!-- Security shield -->
                        <g transform="translate(200,50)">
                            <path d="M0,0 L-20,10 L-20,40 Q-20,60 0,70 Q20,60 20,40 L20,10 Z" fill="#978d86"/>
                            <path d="M0,10 L-15,18 L-15,42 Q-15,58 0,65 Q15,58 15,42 L15,18 Z" fill="#1c222c"/>
                            <circle cx="0" cy="35" r="8" fill="#978d86"/>
                            <path d="M-4,35 L-2,37 L4,31" stroke="#1c222c" stroke-width="2" fill="none"/>
                        </g>
                        
                        <!-- Ground line -->
                        <line x1="0" y1="270" x2="400" y2="270" stroke="#374151" stroke-width="2"/>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
   <!--  <section class="py-20 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-4">Our Leadership Team</h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    Meet the experienced professionals who lead our commitment to excellence in security services.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-md text-center">
                    <div class="mb-6">
                        <svg width="120" height="120" viewBox="0 0 120 120" class="mx-auto">
                            <circle cx="60" cy="60" r="60" fill="#1c222c"/>
                            <circle cx="60" cy="45" r="20" fill="#978d86"/>
                            <path d="M30,90 Q30,70 60,70 Q90,70 90,90 L90,120 L30,120 Z" fill="#978d86"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-2">Michael Thompson</h3>
                    <p class="text-gray-600 mb-4">Chief Executive Officer</p>
                    <p class="text-gray-600 text-sm">
                        Former NSW Police Detective with 20+ years experience in security and law enforcement.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-md text-center">
                    <div class="mb-6">
                        <svg width="120" height="120" viewBox="0 0 120 120" class="mx-auto">
                            <circle cx="60" cy="60" r="60" fill="#1c222c"/>
                            <circle cx="60" cy="45" r="20" fill="#978d86"/>
                            <path d="M30,90 Q30,70 60,70 Q90,70 90,90 L90,120 L30,120 Z" fill="#978d86"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-2">Sarah Mitchell</h3>
                    <p class="text-gray-600 mb-4">Operations Director</p>
                    <p class="text-gray-600 text-sm">
                        Security industry veteran with expertise in risk assessment and operational management.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-md text-center">
                    <div class="mb-6">
                        <svg width="120" height="120" viewBox="0 0 120 120" class="mx-auto">
                            <circle cx="60" cy="60" r="60" fill="#1c222c"/>
                            <circle cx="60" cy="45" r="20" fill="#978d86"/>
                            <path d="M30,90 Q30,70 60,70 Q90,70 90,90 L90,120 L30,120 Z" fill="#978d86"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-2">David Chen</h3>
                    <p class="text-gray-600 mb-4">Technology Director</p>
                    <p class="text-gray-600 text-sm">
                        Leading our technological advancement in surveillance and security systems.
                    </p>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Values Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-4">Our Core Values</h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    The principles that guide everything we do and define who we are as a company.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="mb-6">
                        <svg width="80" height="80" viewBox="0 0 80 80" class="mx-auto">
                            <circle cx="40" cy="40" r="35" fill="#1c222c" opacity="0.1"/>
                            <path d="M40,10 L50,25 L65,25 L55,35 L60,50 L40,42 L20,50 L25,35 L15,25 L30,25 Z" fill="#978d86"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-3">Excellence</h3>
                    <p class="text-gray-600">We strive for the highest standards in everything we do.</p>
                </div>
                <div class="text-center">
                    <div class="mb-6">
                        <svg width="80" height="80" viewBox="0 0 80 80" class="mx-auto">
                            <circle cx="40" cy="40" r="35" fill="#1c222c" opacity="0.1"/>
                            <path d="M40,15 L25,25 L25,55 Q25,65 40,70 Q55,65 55,55 L55,25 Z" fill="#978d86"/>
                            <circle cx="40" cy="40" r="8" fill="#1c222c"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-3">Integrity</h3>
                    <p class="text-gray-600">Honesty and transparency in all our business dealings.</p>
                </div>
                <div class="text-center">
                    <div class="mb-6">
                        <svg width="80" height="80" viewBox="0 0 80 80" class="mx-auto">
                            <circle cx="40" cy="40" r="35" fill="#1c222c" opacity="0.1"/>
                            <circle cx="30" cy="35" r="12" fill="#978d86"/>
                            <circle cx="50" cy="35" r="12" fill="#978d86"/>
                            <path d="M20,50 Q40,65 60,50" stroke="#978d86" stroke-width="3" fill="none"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-3">Reliability</h3>
                    <p class="text-gray-600">Consistent, dependable service you can count on.</p>
                </div>
                <div class="text-center">
                    <div class="mb-6">
                        <svg width="80" height="80" viewBox="0 0 80 80" class="mx-auto">
                            <circle cx="40" cy="40" r="35" fill="#1c222c" opacity="0.1"/>
                            <path d="M25,35 L35,45 L55,25" stroke="#978d86" stroke-width="4" fill="none"/>
                            <circle cx="40" cy="40" r="30" stroke="#978d86" stroke-width="2" fill="none"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-3">Innovation</h3>
                    <p class="text-gray-600">Embracing new technologies to enhance security solutions.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="py-20 bg-slate-800 text-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Our Track Record</h2>
                <p class="text-gray-300 text-lg max-w-2xl mx-auto">
                    Numbers that speak to our commitment and success in the security industry.
                </p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="text-4xl md:text-5xl font-bold text-stone-400 mb-2">500+</div>
                    <div class="text-gray-300">Satisfied Clients</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl md:text-5xl font-bold text-stone-400 mb-2">24/7</div>
                    <div class="text-gray-300">Monitoring</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl md:text-5xl font-bold text-stone-400 mb-2">5+</div>
                    <div class="text-gray-300">Years Experience</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl md:text-5xl font-bold text-stone-400 mb-2">100%</div>
                    <div class="text-gray-300">Licensed</div>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
?>
