<?php
/*
Template Name: Mobile Patrol Service
*/
get_header();
?>

    <!-- Hero Section -->
    <section class="pt-20 bg-cover bg-center" style="background-image: url('<?php echo footer_theme_asset('images/hero.jpg'); ?>');">
    <div class="bg-black bg-opacity-60">
            <div class="max-w-7xl mx-auto px-4 py-24 text-center text-white">
                <h1 class="text-4xl md:text-6xl font-bold mb-4">Mobile Patrol Services</h1>
                <p class="text-xl md:text-2xl max-w-3xl mx-auto">
                    Dynamic security coverage with regular patrols and rapid response capabilities
                </p>
            </div>
        </div>
    </section>

    <!-- Service Overview -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-6">Professional Mobile Patrol Services</h2>
                    <p class="text-gray-600 text-lg mb-6">
                        Our mobile patrol services offer flexible and cost-effective security solutions through regular vehicle patrols. Our trained security officers cover larger areas efficiently, providing visible deterrence and rapid response to incidents across multiple locations.
                    </p>
                    <p class="text-gray-600 text-lg mb-6">
                        Perfect for businesses requiring periodic security checks, our mobile patrols can be customized to your specific schedule and security requirements, ensuring optimal coverage at the most vulnerable times.
                    </p>
                </div>
                <div class="flex justify-center">
                    <img src="<?php echo footer_theme_asset('images/mobile.jpg'); ?>" alt="Mobile Patrol Security" class="w-full max-w-md rounded-lg shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- Key Features -->
    <section class="py-20 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-4">Mobile Patrol Advantages</h2>
                <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                    Flexible security solutions that adapt to your needs and budget
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-xl shadow-lg hover-lift">
                    <div class="w-16 h-16 bg-slate-800 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-route text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-4">Random Patrols</h3>
                    <p class="text-gray-600">
                        Unpredictable patrol schedules that keep potential criminals guessing and maximize deterrent effect.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-xl shadow-lg hover-lift">
                    <div class="w-16 h-16 bg-slate-800 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-clock text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-4">24/7 Availability</h3>
                    <p class="text-gray-600">
                        Round-the-clock patrol services available to match your business hours and security requirements.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-xl shadow-lg hover-lift">
                    <div class="w-16 h-16 bg-slate-800 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-tachometer-alt text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-4">Rapid Response</h3>
                    <p class="text-gray-600">
                        Quick response times to alarms and incidents with mobile units strategically positioned in your area.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-xl shadow-lg hover-lift">
                    <div class="w-16 h-16 bg-slate-800 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-dollar-sign text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-4">Cost Effective</h3>
                    <p class="text-gray-600">
                        More affordable than static guards while still providing excellent security coverage for your property.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-xl shadow-lg hover-lift">
                    <div class="w-16 h-16 bg-slate-800 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-map-marked-alt text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-4">Wide Coverage</h3>
                    <p class="text-gray-600">
                        Ability to cover multiple locations and larger areas efficiently with coordinated patrol routes.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-xl shadow-lg hover-lift">
                    <div class="w-16 h-16 bg-slate-800 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-mobile-alt text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-4">Real-time Updates</h3>
                    <p class="text-gray-600">
                        GPS tracking and real-time communication to keep you informed of patrol activities and incidents.
                    </p>
                </div>
            </div>
        </div>
    </section>

    

    <!-- CTA Section -->
    <section class="py-20 bg-slate-800 text-white">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Start Your Mobile Patrol Service</h2>
            <p class="text-xl mb-8 max-w-3xl mx-auto">
                Get a custom mobile patrol plan designed for your property and security requirements.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="<?php echo home_url('/contact'); ?>" class="bg-stone-400 hover:bg-stone-300 text-slate-800 font-bold py-4 px-8 rounded-lg transition duration-300">
                    Get Free Assessment
                </a>
                <a href="tel:<?php echo esc_attr(str_replace(['(', ')', ' ', '-'], '', get_theme_mod('company_phone', '(123) 456-7890'))); ?>" class="border-2 border-white hover:bg-white hover:text-slate-800 text-white font-bold py-4 px-8 rounded-lg transition duration-300">
                    Call Now: <?php echo esc_html(get_theme_mod('company_phone', '(123) 456-7890')); ?>
                </a>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
