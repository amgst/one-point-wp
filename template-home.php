<?php
/*
Template Name: Home
*/
get_header();
?>

    <section id="home" class="relative pt-20 text-white bg-cover bg-center" style="background-image: url('<?php echo footer_theme_asset('images/home.jpg'); ?>');">
        <div class="absolute inset-0 bg-black opacity-60"></div>
        <div class="relative max-w-7xl mx-auto px-4 py-20">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <h1 class="text-4xl md:text-5xl font-bold mb-6 leading-tight">
                        RELIABLE SECURITY SOLUTIONS FOR YOUR PEACE OF MIND
                    </h1>
                    <p class="text-lg md:text-xl mb-6">
                        At ON POINT SECURITY, we provide expert security services across Australia. Whether you need protection for a commercial property, a special event, or a construction site, our skilled experts design tailored solutions to secure your premises effectively.
                    </p>
                    <p class="text-lg md:text-xl mb-8">
                        With years of experience and a commitment to excellence, our professional security team delivers 24/7 protection using the latest technology and proven strategies. Trust us to safeguard what matters most to you.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="contact" class="bg-stone-500 hover:bg-stone-600 text-white font-bold py-3 px-8 rounded-lg transition duration-300">
                            Get a Quote
                        </a>
                        <a href="tel:<?php echo esc_attr(str_replace(['(', ')', ' ', '-'], '', get_theme_mod('company_phone', '(123) 456-7890'))); ?>" class="border-2 border-white hover:bg-white hover:text-slate-800 text-white font-bold py-3 px-8 rounded-lg transition duration-300 flex items-center justify-center">
                            <i class="fas fa-phone mr-2"></i> <?php echo esc_html(get_theme_mod('company_phone', '(123) 456-7890')); ?>
                        </a>
                    </div>
                </div>

                <div class="bg-white p-8 rounded-lg shadow-lg text-gray-800">
                    <h2 class="text-2xl font-bold mb-6 text-center text-slate-800">Get Your Security Quote Now</h2>
                    
                    <?php
                    // Handle form submission for home page
                    $quote_success = false;
                    $quote_error = '';
                    
                    if ($_POST && isset($_POST['quote_form_submit'])) {
                        $first_name = sanitize_text_field($_POST['first-name']);
                        $last_name = sanitize_text_field($_POST['last-name']);
                        $job_address = sanitize_text_field($_POST['job-address']);
                        $email = sanitize_email($_POST['email']);
                        $phone = sanitize_text_field($_POST['phone']);
                        $company = sanitize_text_field($_POST['company-name']);
                        $service = sanitize_text_field($_POST['service-required']);
                        $job_description = sanitize_textarea_field($_POST['job-description']);
                        
                        if ($first_name && $last_name && $job_address && $email && $phone && $service && $job_description) {
                            $to = get_theme_mod('form_submission_email', get_option('admin_email'));
                            $subject = 'New Quote Request - ' . get_bloginfo('name');
                            $email_message = '<h2 style="font-size: 24px; font-weight: bold; color: #1e293b; margin-bottom: 20px;">New Quote Request</h2>';
                            $email_message .= '<p><strong>Name:</strong> ' . esc_html($first_name) . ' ' . esc_html($last_name) . '</p>';
                            $email_message .= '<p><strong>Email:</strong> ' . esc_html($email) . '</p>';
                            $email_message .= '<p><strong>Phone:</strong> ' . esc_html($phone) . '</p>';
                            $email_message .= '<p><strong>Company:</strong> ' . esc_html($company) . '</p>';
                            $email_message .= '<p><strong>Job Address:</strong> ' . esc_html($job_address) . '</p>';
                            $email_message .= '<p><strong>Service:</strong> ' . esc_html($service) . '</p>';
                            $email_message .= '<p><strong>Job Description:</strong><br>' . nl2br(esc_html($job_description)) . '</p>';
                            
                            if (footer_send_secure_email($to, $subject, $email_message, $email, $first_name . ' ' . $last_name)) {
                                $quote_success = true;
                            } else {
                                $quote_error = 'Sorry, there was an error sending your quote request. Please try again.';
                            }
                        } else {
                            $quote_error = 'Please fill in all required fields.';
                        }
                    }
                    ?>
                    
                    <?php if ($quote_success): ?>
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                            <strong>Success!</strong> Your quote request has been sent. We'll get back to you soon.
                        </div>
                    <?php endif; ?>
                    
                    <?php if ($quote_error): ?>
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
                            <strong>Error:</strong> <?php echo $quote_error; ?>
                        </div>
                    <?php endif; ?>
                    
                    <form action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>" method="POST">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label for="first-name" class="block text-sm font-medium text-gray-700">First Name <span class="text-red-500">*</span></label>
                                <input type="text" name="first-name" id="first-name" required class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-stone-400 focus:border-stone-400" value="<?php echo isset($_POST['first-name']) ? esc_attr($_POST['first-name']) : ''; ?>">
                            </div>
                            <div>
                                <label for="last-name" class="block text-sm font-medium text-gray-700">Last Name <span class="text-red-500">*</span></label>
                                <input type="text" name="last-name" id="last-name" required class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-stone-400 focus:border-stone-400" value="<?php echo isset($_POST['last-name']) ? esc_attr($_POST['last-name']) : ''; ?>">
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="job-address" class="block text-sm font-medium text-gray-700">Full Address <span class="text-red-500">*</span></label>
                            <input type="text" name="job-address" id="job-address" required class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-stone-400 focus:border-stone-400" value="<?php echo isset($_POST['job-address']) ? esc_attr($_POST['job-address']) : ''; ?>">
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700">Email <span class="text-red-500">*</span></label>
                                <input type="email" name="email" id="email" required class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-stone-400 focus:border-stone-400" value="<?php echo isset($_POST['email']) ? esc_attr($_POST['email']) : ''; ?>">
                            </div>
                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700">Phone <span class="text-red-500">*</span></label>
                                <input type="tel" name="phone" id="phone" required class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-stone-400 focus:border-stone-400" value="<?php echo isset($_POST['phone']) ? esc_attr($_POST['phone']) : ''; ?>">
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="company-name" class="block text-sm font-medium text-gray-700">Company Name</label>
                            <input type="text" name="company-name" id="company-name" class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-stone-400 focus:border-stone-400" value="<?php echo isset($_POST['company-name']) ? esc_attr($_POST['company-name']) : ''; ?>">
                        </div>
                        <div class="mb-4">
                            <label for="service-required" class="block text-sm font-medium text-gray-700">Service Required <span class="text-red-500">*</span></label>
                            <select id="service-required" name="service-required" required class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-stone-400 focus:border-stone-400">
                                <option value="">Please select a service</option>
                                <option value="static-guard" <?php echo (isset($_POST['service-required']) && $_POST['service-required'] == 'static-guard') ? 'selected' : ''; ?>>Static Guard</option>
                                <option value="mobile-patrol" <?php echo (isset($_POST['service-required']) && $_POST['service-required'] == 'mobile-patrol') ? 'selected' : ''; ?>>Mobile Patrol</option>
                                <option value="crowd-control" <?php echo (isset($_POST['service-required']) && $_POST['service-required'] == 'crowd-control') ? 'selected' : ''; ?>>Crowd Control</option>
                                <option value="traffic-control" <?php echo (isset($_POST['service-required']) && $_POST['service-required'] == 'traffic-control') ? 'selected' : ''; ?>>Traffic Control</option>
                            </select>
                        </div>
                        <div class="mb-6">
                            <label for="job-description" class="block text-sm font-medium text-gray-700">Job Description <span class="text-red-500">*</span></label>
                            <textarea name="job-description" id="job-description" rows="3" required class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-stone-400 focus:border-stone-400"><?php echo isset($_POST['job-description']) ? esc_textarea($_POST['job-description']) : ''; ?></textarea>
                        </div>
                        <div>
                            <input type="hidden" name="quote_form_submit" value="1">
                            <button type="submit" class="w-full bg-slate-800 hover:bg-slate-700 text-white font-bold py-3 px-4 rounded-lg transition duration-300">
                                <i class="fas fa-paper-plane mr-2"></i>Get Quote
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-4">Our Security Services</h2>
                <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                    We offer a comprehensive suite of security services to meet the diverse needs of our clients. From static guards to traffic management, our team is equipped to ensure your safety and security.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-gray-50 p-8 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                    <div class="text-slate-800 text-4xl mb-4">
                        <i class="fas fa-user-shield"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-3">Static Guard</h3>
                    <p class="text-gray-600 mb-4">
                        Dedicated, licensed security guards to protect your premises, assets, and personnel around the clock.
                    </p>
                    <a href="<?php echo home_url('/static-guard'); ?>" class="text-stone-600 font-semibold hover:text-slate-800 transition-colors duration-300">Learn More About Static Guard Services <i class="fas fa-arrow-right ml-1"></i></a>
                </div>
                <div class="bg-gray-50 p-8 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                    <div class="text-slate-800 text-4xl mb-4">
                        <i class="fas fa-car-side"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-3">Mobile Patrol</h3>
                    <p class="text-gray-600 mb-4">
                        Regular, visible patrols to deter potential threats and provide rapid response to any incidents.
                    </p>
                    <a href="<?php echo home_url('/mobile-patrol'); ?>" class="text-stone-600 font-semibold hover:text-slate-800 transition-colors duration-300">Learn More About Mobile Patrol Services <i class="fas fa-arrow-right ml-1"></i></a>
                </div>
                <div class="bg-gray-50 p-8 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                    <div class="text-slate-800 text-4xl mb-4">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-3">Crowd Control</h3>
                    <p class="text-gray-600 mb-4">
                        Expert management of crowds for events of all sizes, ensuring a safe and orderly environment.
                    </p>
                    <a href="<?php echo home_url('/crowd-control'); ?>" class="text-stone-600 font-semibold hover:text-slate-800 transition-colors duration-300">Learn More About Crowd Control Services <i class="fas fa-arrow-right ml-1"></i></a>
                </div>
                <div class="bg-gray-50 p-8 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                    <div class="text-slate-800 text-4xl mb-4">
                        <i class="fas fa-traffic-light"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-3">Traffic Control</h3>
                    <p class="text-gray-600 mb-4">
                        Professional traffic management services to ensure smooth and safe flow of vehicles and pedestrians.
                    </p>
                    <a href="<?php echo home_url('/traffic-control'); ?>" class="text-stone-600 font-semibold hover:text-slate-800 transition-colors duration-300">Learn More About Traffic Control Services <i class="fas fa-arrow-right ml-1"></i></a>
                </div>
            </div>
        </div>
    </section>

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
                    <a href="about" class="bg-slate-800 text-white font-bold py-3 px-6 rounded-lg hover:bg-slate-700 transition duration-300">
                        Learn More About Us
                    </a>
                </div>
                <div>
                    <img src="<?php echo footer_theme_asset('images/mobile.jpg'); ?>" alt="Security team in a meeting" class="rounded-lg shadow-lg">
                </div>
            </div>
        </div>
    </section>

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

    <section class="py-20 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-4">Frequently Asked Questions</h2>
                <p class="text-gray-600 text-lg">Quick answers to common questions about our security services</p>
            </div>
            
            <div class="space-y-6">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-lg font-bold text-slate-800 mb-3">How quickly can you respond to security emergencies?</h3>
                    <p class="text-gray-600">Our emergency response team can typically arrive on-site within 15-30 minutes in metropolitan areas, depending on location and traffic conditions. We maintain 24/7 monitoring and rapid response capabilities.</p>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-lg font-bold text-slate-800 mb-3">Are your security guards licensed and insured?</h3>
                    <p class="text-gray-600">Yes, all our security personnel are fully licensed, bonded, and insured. They undergo comprehensive background checks, professional training, and regular certification updates to maintain the highest standards.</p>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-lg font-bold text-slate-800 mb-3">What's the difference between static guard and mobile patrol services?</h3>
                    <p class="text-gray-600">Static guards are stationed at your property providing continuous on-site presence, access control, and immediate response. Mobile patrols provide scheduled and random property checks, covering multiple locations efficiently.</p>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-lg font-bold text-slate-800 mb-3">Do you provide security services outside of major metropolitan areas?</h3>
                    <p class="text-gray-600">Yes, we provide security services across multiple cities and regions. Our coverage area continues to expand. Contact us to discuss your specific location and requirements.</p>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a href="<?php echo home_url('/faq'); ?>" class="bg-slate-800 hover:bg-slate-700 text-white font-bold py-3 px-8 rounded-lg transition duration-300">
                    <i class="fas fa-question-circle mr-2"></i>View All FAQs
                </a>
            </div>
        </div>
    </section>

    <section class="bg-slate-800 text-white">
        <div class="max-w-7xl mx-auto px-4 py-16 text-center">
            <h2 class="text-3xl font-bold mb-4">Ready to Secure Your Premises?</h2>
            <p class="text-lg mb-8">
                Contact us today for a free, no-obligation consultation and quote.
            </p>
            <a href="contact" class="bg-stone-500 text-white font-bold py-3 px-8 rounded-lg hover:bg-stone-600 transition duration-300">
                Contact Us
            </a>
        </div>
    </section>

<?php
get_footer();
?>