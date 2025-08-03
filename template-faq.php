<?php
/*
Template Name: FAQ
*/
get_header();
?>

    <!-- Hero Section -->
    <section class="pt-20 bg-slate-800 text-white">
        <div class="max-w-7xl mx-auto px-4 py-20">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold mb-6">
                    Frequently Asked <span class="text-stone-400">Questions</span>
                </h1>
                <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">
                    Find answers to common questions about our professional security services and solutions.
                </p>
            </div>
        </div>
    </section>

    <!-- FAQ Categories -->
    <section class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <button class="faq-category-btn active bg-slate-800 text-white px-4 py-3 rounded-lg font-semibold hover:bg-slate-700 transition duration-300" data-category="general">
                    <i class="fas fa-question-circle mr-2"></i>General
                </button>
                <button class="faq-category-btn bg-white text-slate-800 px-4 py-3 rounded-lg font-semibold hover:bg-slate-100 transition duration-300" data-category="services">
                    <i class="fas fa-shield-alt mr-2"></i>Services
                </button>
                <button class="faq-category-btn bg-white text-slate-800 px-4 py-3 rounded-lg font-semibold hover:bg-slate-100 transition duration-300" data-category="pricing">
                    <i class="fas fa-dollar-sign mr-2"></i>Pricing
                </button>
                <button class="faq-category-btn bg-white text-slate-800 px-4 py-3 rounded-lg font-semibold hover:bg-slate-100 transition duration-300" data-category="emergency">
                    <i class="fas fa-exclamation-triangle mr-2"></i>Emergency
                </button>
            </div>
        </div>
    </section>

    <!-- FAQ Content -->
    <section class="py-20 bg-white">
        <div class="max-w-4xl mx-auto px-4">
            
            <!-- General FAQs -->
            <div class="faq-category-content" id="category-general">
                <h2 class="text-3xl font-bold text-slate-800 mb-8 text-center">General Questions</h2>
                <div class="space-y-6">
                    <div class="faq-item bg-gray-50 p-6 rounded-lg cursor-pointer hover:bg-gray-100 transition duration-300">
                        <div class="faq-question flex justify-between items-center">
                            <h3 class="text-lg font-bold text-slate-800">How quickly can you respond to security emergencies?</h3>
                            <i class="fas fa-chevron-down text-slate-600 transform transition-transform duration-300"></i>
                        </div>
                        <div class="faq-answer mt-4 text-gray-600 hidden">
                            <p>Our emergency response team can typically arrive on-site within 15-30 minutes in metropolitan areas, depending on location and traffic conditions. We maintain 24/7 monitoring and rapid response capabilities for all our clients.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item bg-gray-50 p-6 rounded-lg cursor-pointer hover:bg-gray-100 transition duration-300">
                        <div class="faq-question flex justify-between items-center">
                            <h3 class="text-lg font-bold text-slate-800">Are your security guards licensed and insured?</h3>
                            <i class="fas fa-chevron-down text-slate-600 transform transition-transform duration-300"></i>
                        </div>
                        <div class="faq-answer mt-4 text-gray-600 hidden">
                            <p>Yes, all our security personnel are fully licensed, bonded, and insured. They undergo comprehensive background checks, professional training, and regular certification updates to maintain the highest standards in the industry.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item bg-gray-50 p-6 rounded-lg cursor-pointer hover:bg-gray-100 transition duration-300">
                        <div class="faq-question flex justify-between items-center">
                            <h3 class="text-lg font-bold text-slate-800">Do you provide security services outside of major metropolitan areas?</h3>
                            <i class="fas fa-chevron-down text-slate-600 transform transition-transform duration-300"></i>
                        </div>
                        <div class="faq-answer mt-4 text-gray-600 hidden">
                            <p>Yes, we provide security services across multiple cities and regions. Our coverage area continues to expand. Contact us to discuss your specific location and requirements, and we'll let you know about service availability in your area.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item bg-gray-50 p-6 rounded-lg cursor-pointer hover:bg-gray-100 transition duration-300">
                        <div class="faq-question flex justify-between items-center">
                            <h3 class="text-lg font-bold text-slate-800">What is included in a security assessment?</h3>
                            <i class="fas fa-chevron-down text-slate-600 transform transition-transform duration-300"></i>
                        </div>
                        <div class="faq-answer mt-4 text-gray-600 hidden">
                            <p>Our comprehensive security assessment includes property evaluation, risk analysis, vulnerability identification, and customized security recommendations. We provide a detailed report with implementation timelines, cost estimates, and ongoing security strategies.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Services FAQs -->
            <div class="faq-category-content hidden" id="category-services">
                <h2 class="text-3xl font-bold text-slate-800 mb-8 text-center">Service Questions</h2>
                <div class="space-y-6">
                    <div class="faq-item bg-gray-50 p-6 rounded-lg cursor-pointer hover:bg-gray-100 transition duration-300">
                        <div class="faq-question flex justify-between items-center">
                            <h3 class="text-lg font-bold text-slate-800">What's the difference between static guard and mobile patrol services?</h3>
                            <i class="fas fa-chevron-down text-slate-600 transform transition-transform duration-300"></i>
                        </div>
                        <div class="faq-answer mt-4 text-gray-600 hidden">
                            <p>Static guards are stationed at your property providing continuous on-site presence, access control, and immediate response. Mobile patrols provide scheduled and random property checks, covering multiple locations efficiently and offering a cost-effective security solution for larger areas.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item bg-gray-50 p-6 rounded-lg cursor-pointer hover:bg-gray-100 transition duration-300">
                        <div class="faq-question flex justify-between items-center">
                            <h3 class="text-lg font-bold text-slate-800">Do you provide crowd control for private events?</h3>
                            <i class="fas fa-chevron-down text-slate-600 transform transition-transform duration-300"></i>
                        </div>
                        <div class="faq-answer mt-4 text-gray-600 hidden">
                            <p>Yes, we specialize in crowd control for various events including corporate functions, private parties, concerts, and public gatherings. Our trained personnel manage crowd flow, access control, and maintain safety protocols throughout your event.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item bg-gray-50 p-6 rounded-lg cursor-pointer hover:bg-gray-100 transition duration-300">
                        <div class="faq-question flex justify-between items-center">
                            <h3 class="text-lg font-bold text-slate-800">Can you provide traffic control for construction sites?</h3>
                            <i class="fas fa-chevron-down text-slate-600 transform transition-transform duration-300"></i>
                        </div>
                        <div class="faq-answer mt-4 text-gray-600 hidden">
                            <p>Absolutely. Our certified traffic controllers manage vehicle and pedestrian flow around construction sites, roadwork, and special events. We coordinate with local authorities and provide all necessary equipment and signage for safe traffic management.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item bg-gray-50 p-6 rounded-lg cursor-pointer hover:bg-gray-100 transition duration-300">
                        <div class="faq-question flex justify-between items-center">
                            <h3 class="text-lg font-bold text-slate-800">Do you offer customized security solutions?</h3>
                            <i class="fas fa-chevron-down text-slate-600 transform transition-transform duration-300"></i>
                        </div>
                        <div class="faq-answer mt-4 text-gray-600 hidden">
                            <p>Yes, we understand that every client has unique security needs. We develop customized security plans combining multiple services, specialized equipment, and tailored protocols to meet your specific requirements and budget.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pricing FAQs -->
            <div class="faq-category-content hidden" id="category-pricing">
                <h2 class="text-3xl font-bold text-slate-800 mb-8 text-center">Pricing Questions</h2>
                <div class="space-y-6">
                    <div class="faq-item bg-gray-50 p-6 rounded-lg cursor-pointer hover:bg-gray-100 transition duration-300">
                        <div class="faq-question flex justify-between items-center">
                            <h3 class="text-lg font-bold text-slate-800">How do you calculate security service pricing?</h3>
                            <i class="fas fa-chevron-down text-slate-600 transform transition-transform duration-300"></i>
                        </div>
                        <div class="faq-answer mt-4 text-gray-600 hidden">
                            <p>Our pricing is based on several factors including service type, duration, location, required personnel, equipment needs, and specific client requirements. We provide transparent, competitive pricing with no hidden fees and offer both hourly and contract rates.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item bg-gray-50 p-6 rounded-lg cursor-pointer hover:bg-gray-100 transition duration-300">
                        <div class="faq-question flex justify-between items-center">
                            <h3 class="text-lg font-bold text-slate-800">Do you offer discounts for long-term contracts?</h3>
                            <i class="fas fa-chevron-down text-slate-600 transform transition-transform duration-300"></i>
                        </div>
                        <div class="faq-answer mt-4 text-gray-600 hidden">
                            <p>Yes, we offer competitive rates for long-term contracts and ongoing security arrangements. Multi-service packages and extended contracts often qualify for significant discounts. Contact us for a customized quote based on your specific needs.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item bg-gray-50 p-6 rounded-lg cursor-pointer hover:bg-gray-100 transition duration-300">
                        <div class="faq-question flex justify-between items-center">
                            <h3 class="text-lg font-bold text-slate-800">Is there a minimum service commitment required?</h3>
                            <i class="fas fa-chevron-down text-slate-600 transform transition-transform duration-300"></i>
                        </div>
                        <div class="faq-answer mt-4 text-gray-600 hidden">
                            <p>We offer flexible arrangements to meet your needs. While some services have minimum requirements (typically 4-hour shifts), we also provide one-time event security and emergency response services without long-term commitments.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item bg-gray-50 p-6 rounded-lg cursor-pointer hover:bg-gray-100 transition duration-300">
                        <div class="faq-question flex justify-between items-center">
                            <h3 class="text-lg font-bold text-slate-800">Are there additional costs for equipment or uniforms?</h3>
                            <i class="fas fa-chevron-down text-slate-600 transform transition-transform duration-300"></i>
                        </div>
                        <div class="faq-answer mt-4 text-gray-600 hidden">
                            <p>Basic equipment and professional uniforms are included in our standard service rates. Specialized equipment, technology solutions, or custom requirements may incur additional costs, which are always discussed and approved in advance.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Emergency FAQs -->
            <div class="faq-category-content hidden" id="category-emergency">
                <h2 class="text-3xl font-bold text-slate-800 mb-8 text-center">Emergency Questions</h2>
                <div class="space-y-6">
                    <div class="faq-item bg-gray-50 p-6 rounded-lg cursor-pointer hover:bg-gray-100 transition duration-300">
                        <div class="faq-question flex justify-between items-center">
                            <h3 class="text-lg font-bold text-slate-800">What constitutes a security emergency?</h3>
                            <i class="fas fa-chevron-down text-slate-600 transform transition-transform duration-300"></i>
                        </div>
                        <div class="faq-answer mt-4 text-gray-600 hidden">
                            <p>Security emergencies include break-ins, theft in progress, vandalism, threats to personnel, medical emergencies on premises, fire or safety hazards, and any situation requiring immediate security intervention or law enforcement notification.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item bg-gray-50 p-6 rounded-lg cursor-pointer hover:bg-gray-100 transition duration-300">
                        <div class="faq-question flex justify-between items-center">
                            <h3 class="text-lg font-bold text-slate-800">Do you coordinate with local law enforcement?</h3>
                            <i class="fas fa-chevron-down text-slate-600 transform transition-transform duration-300"></i>
                        </div>
                        <div class="faq-answer mt-4 text-gray-600 hidden">
                            <p>Yes, we maintain close relationships with local law enforcement agencies and emergency services. Our personnel are trained to coordinate effectively with police, fire departments, and medical responders when situations require their involvement.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item bg-gray-50 p-6 rounded-lg cursor-pointer hover:bg-gray-100 transition duration-300">
                        <div class="faq-question flex justify-between items-center">
                            <h3 class="text-lg font-bold text-slate-800">How do I report an emergency to your team?</h3>
                            <i class="fas fa-chevron-down text-slate-600 transform transition-transform duration-300"></i>
                        </div>
                        <div class="faq-answer mt-4 text-gray-600 hidden">
                            <p>Call our 24/7 emergency line at (123) 456-7999. For life-threatening emergencies, call 911 first, then contact us. Our dispatch center is staffed around the clock and can immediately coordinate response efforts.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item bg-gray-50 p-6 rounded-lg cursor-pointer hover:bg-gray-100 transition duration-300">
                        <div class="faq-question flex justify-between items-center">
                            <h3 class="text-lg font-bold text-slate-800">Do you provide incident reports after emergencies?</h3>
                            <i class="fas fa-chevron-down text-slate-600 transform transition-transform duration-300"></i>
                        </div>
                        <div class="faq-answer mt-4 text-gray-600 hidden">
                            <p>Yes, we provide detailed incident reports for all emergency responses and security events. Reports include timeline of events, actions taken, personnel involved, and recommendations for future prevention. Reports are typically delivered within 24 hours.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact CTA -->
    <section class="py-20 bg-slate-800 text-white">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Still Have Questions?</h2>
            <p class="text-xl text-stone-300 mb-8 max-w-2xl mx-auto">
                Our security experts are here to help. Contact us for personalized answers and custom security solutions.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="<?php echo home_url('/contact'); ?>" class="bg-stone-500 hover:bg-stone-400 text-slate-800 font-bold py-4 px-8 rounded-lg transition duration-300">
                    Contact Us
                </a>
                <a href="tel:+1234567890" class="border-2 border-stone-400 hover:bg-stone-400 hover:text-slate-800 text-stone-400 font-bold py-4 px-8 rounded-lg transition duration-300">
                    Call: (123) 456-7890
                </a>
            </div>
        </div>
    </section>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // FAQ Category Switching
        const categoryBtns = document.querySelectorAll('.faq-category-btn');
        const categoryContents = document.querySelectorAll('.faq-category-content');
        
        categoryBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                const category = this.dataset.category;
                
                // Update button states
                categoryBtns.forEach(b => {
                    b.classList.remove('active', 'bg-slate-800', 'text-white');
                    b.classList.add('bg-white', 'text-slate-800');
                });
                this.classList.remove('bg-white', 'text-slate-800');
                this.classList.add('active', 'bg-slate-800', 'text-white');
                
                // Show/hide content
                categoryContents.forEach(content => {
                    content.classList.add('hidden');
                });
                document.getElementById('category-' + category).classList.remove('hidden');
            });
        });
        
        // FAQ Item Toggle
        const faqItems = document.querySelectorAll('.faq-item');
        
        faqItems.forEach(item => {
            item.addEventListener('click', function() {
                const answer = this.querySelector('.faq-answer');
                const icon = this.querySelector('.faq-question i');
                
                if (answer.classList.contains('hidden')) {
                    answer.classList.remove('hidden');
                    icon.classList.add('rotate-180');
                } else {
                    answer.classList.add('hidden');
                    icon.classList.remove('rotate-180');
                }
            });
        });
    });
    </script>

<?php get_footer(); ?>
