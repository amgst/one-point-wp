<?php
/*
Template Name: Home
*/
get_header();
?>

    <!-- Hero Section -->
    <section id="home" class="relative pt-20 text-white bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1521791136064-7986c2920216?q=80&w=2070&auto=format&fit=crop');">
        <div class="absolute inset-0 bg-black opacity-60"></div>
        <div class="relative max-w-7xl mx-auto px-4 py-20">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <!-- Left Side: Content -->
                <div>
                    <h1 class="text-4xl md:text-5xl font-bold mb-6 leading-tight">
                        Reliable Security Solutions for Your Peace of Mind
                    </h1>
                    <p class="text-lg md:text-xl mb-8">
                        At ON POINT SECURITY, we provide expert security services across Australia. Whether you need protection for a commercial property, a special event, or a construction site, our skilled experts design tailored solutions to secure your premises effectively.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="contact.html" class="bg-stone-500 hover:bg-stone-600 text-white font-bold py-3 px-8 rounded-lg transition duration-300">
                            Get a Quote
                        </a>
                        <a href="tel:+61212345678" class="border-2 border-white hover:bg-white hover:text-slate-800 text-white font-bold py-3 px-8 rounded-lg transition duration-300 flex items-center justify-center">
                            <i class="fas fa-phone mr-2"></i> +61 2 1234 5678
                        </a>
                    </div>
                </div>

                <!-- Right Side: Quote Form -->
                <div class="bg-white p-8 rounded-lg shadow-lg text-gray-800">
                    <h2 class="text-2xl font-bold mb-6 text-center text-slate-800">Get Your Security Quote Now</h2>
                    <form action="#" method="POST">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label for="first-name" class="block text-sm font-medium text-gray-700">First Name <span class="text-red-500">*</span></label>
                                <input type="text" name="first-name" id="first-name" required class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-stone-400 focus:border-stone-400">
                            </div>
                            <div>
                                <label for="last-name" class="block text-sm font-medium text-gray-700">Last Name <span class="text-red-500">*</span></label>
                                <input type="text" name="last-name" id="last-name" required class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-stone-400 focus:border-stone-400">
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="job-address" class="block text-sm font-medium text-gray-700">Full Job Address <span class="text-red-500">*</span></label>
                            <input type="text" name="job-address" id="job-address" required class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-stone-400 focus:border-stone-400">
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700">Email <span class="text-red-500">*</span></label>
                                <input type="email" name="email" id="email" required class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-stone-400 focus:border-stone-400">
                            </div>
                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700">Phone <span class="text-red-500">*</span></label>
                                <input type="tel" name="phone" id="phone" required class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-stone-400 focus:border-stone-400">
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="company-name" class="block text-sm font-medium text-gray-700">Company Name</label>
                            <input type="text" name="company-name" id="company-name" class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-stone-400 focus:border-stone-400">
                        </div>
                        <div class="mb-4">
                            <label for="service-required" class="block text-sm font-medium text-gray-700">Service Required <span class="text-red-500">*</span></label>
                            <select id="service-required" name="service-required" required class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-stone-400 focus:border-stone-400">
                                <option value="">Please select a service</option>
                                <option value="static-guard">Static Guard</option>
                                <option value="mobile-patrol">Mobile Patrol</option>
                                <option value="crowd-control">Crowd Control</option>
                                <option value="traffic-control">Traffic Control</option>
                            </select>
                        </div>
                        <div class="mb-6">
                            <label for="job-description" class="block text-sm font-medium text-gray-700">Job Description <span class="text-red-500">*</span></label>
                            <textarea name="job-description" id="job-description" rows="3" required class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-stone-400 focus:border-stone-400"></textarea>
                        </div>
                        <div>
                            <button type="submit" class="w-full bg-slate-800 hover:bg-slate-700 text-white font-bold py-3 px-4 rounded-lg transition duration-300">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-4">Our Security Services</h2>
                <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                    We offer a comprehensive suite of security services to meet the diverse needs of our clients. From static guards to traffic management, our team is equipped to ensure your safety and security.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Static Guard -->
                <div class="bg-gray-50 p-8 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                    <div class="text-slate-800 text-4xl mb-4">
                        <i class="fas fa-user-shield"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-3">Static Guard</h3>
                    <p class="text-gray-600 mb-4">
                        Dedicated, licensed security guards to protect your premises, assets, and personnel around the clock.
                    </p>
                    <a href="services.html#static-guard" class="text-stone-600 font-semibold hover:text-slate-800 transition-colors duration-300">Learn More <i class="fas fa-arrow-right ml-1"></i></a>
                </div>
                <!-- Mobile Patrol -->
                <div class="bg-gray-50 p-8 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                    <div class="text-slate-800 text-4xl mb-4">
                        <i class="fas fa-car-side"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-3">Mobile Patrol</h3>
                    <p class="text-gray-600 mb-4">
                        Regular, visible patrols to deter potential threats and provide rapid response to any incidents.
                    </p>
                    <a href="services.html#mobile-patrol" class="text-stone-600 font-semibold hover:text-slate-800 transition-colors duration-300">Learn More <i class="fas fa-arrow-right ml-1"></i></a>
                </div>
                <!-- Crowd Control -->
                <div class="bg-gray-50 p-8 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                    <div class="text-slate-800 text-4xl mb-4">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-3">Crowd Control</h3>
                    <p class="text-gray-600 mb-4">
                        Expert management of crowds for events of all sizes, ensuring a safe and orderly environment.
                    </p>
                    <a href="services.html#crowd-control" class="text-stone-600 font-semibold hover:text-slate-800 transition-colors duration-300">Learn More <i class="fas fa-arrow-right ml-1"></i></a>
                </div>
                <!-- Traffic Control -->
                <div class="bg-gray-50 p-8 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                    <div class="text-slate-800 text-4xl mb-4">
                        <i class="fas fa-traffic-light"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-3">Traffic Control</h3>
                    <p class="text-gray-600 mb-4">
                        Professional traffic management services to ensure smooth and safe flow of vehicles and pedestrians.
                    </p>
                    <a href="services.html#traffic-control" class="text-stone-600 font-semibold hover:text-slate-800 transition-colors duration-300">Learn More <i class="fas fa-arrow-right ml-1"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-6">About ON POINT SECURITY</h2>
                    <p class="text-gray-600 mb-4">
                        ON POINT SECURITY PTY LTD is a leading provider of professional security services in Australia. We are committed to delivering reliable and effective security solutions to a diverse range of clients.
                    </p>
                    <p class="text-gray-600 mb-6">
                        Our team consists of highly trained, licensed, and experienced security professionals who are dedicated to ensuring the safety and security of your premises. We pride ourselves on our integrity, professionalism, and commitment to excellence.
                    </p>
                    <a href="about.html" class="bg-slate-800 text-white font-bold py-3 px-6 rounded-lg hover:bg-slate-700 transition duration-300">
                        Learn More About Us
                    </a>
                </div>
                <div>
                    <img src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?q=80&w=2070&auto=format&fit=crop" alt="Security team in a meeting" class="rounded-lg shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section id="why-choose-us" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-4">Why Choose Us?</h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    Discover the advantages of partnering with ON POINT SECURITY for your security needs.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center p-6">
                    <div class="text-slate-800 text-4xl mb-4">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-2">Experienced Professionals</h3>
                    <p class="text-gray-600">
                        Our team is composed of highly trained and experienced security experts.
                    </p>
                </div>
                <div class="text-center p-6">
                    <div class="text-slate-800 text-4xl mb-4">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-2">Customized Solutions</h3>
                    <p class="text-gray-600">
                        We tailor our security services to meet the specific needs of each client.
                    </p>
                </div>
                <div class="text-center p-6">
                    <div class="text-slate-800 text-4xl mb-4">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-2">24/7 Support</h3>
                    <p class="text-gray-600">
                        We provide round-the-clock support to ensure your continuous safety.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-slate-800 text-white">
        <div class="max-w-7xl mx-auto px-4 py-16 text-center">
            <h2 class="text-3xl font-bold mb-4">Ready to Secure Your Premises?</h2>
            <p class="text-lg mb-8">
                Contact us today for a free, no-obligation consultation and quote.
            </p>
            <a href="contact.html" class="bg-stone-500 text-white font-bold py-3 px-8 rounded-lg hover:bg-stone-600 transition duration-300">
                Contact Us
            </a>
        </div>
    </section>

<?php
get_footer();
?>
