<?php
/*
Template Name: Contact
*/
get_header();
?>

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

    <section class="py-20">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <h2 class="text-3xl font-bold text-slate-800 mb-6">Send Us a Message</h2>

                    <?php
                    // Handle form submission
                    $form_success = false;
                    $form_error = '';

                    if ($_POST && isset($_POST['contact_form_submit'])) {
                        $first_name = sanitize_text_field($_POST['contact-first-name']);
                        $last_name = sanitize_text_field($_POST['contact-last-name']);
                        $email = sanitize_email($_POST['contact-email']);
                        $phone = sanitize_text_field($_POST['contact-phone']);
                        $company = sanitize_text_field($_POST['contact-company']);
                        $service = sanitize_text_field($_POST['contact-service']);
                        $message = sanitize_textarea_field($_POST['contact-message']);

                        if ($first_name && $last_name && $email && $phone && $service && $message) {
                            $to = get_theme_mod('form_submission_email', get_option('admin_email'));
                            $subject = 'New Contact Form Submission - ' . get_bloginfo('name');
                            $email_message = "New contact form submission:\n\n";
                            $email_message .= "Name: $first_name $last_name\n";
                            $email_message .= "Email: $email\n";
                            $email_message .= "Phone: $phone\n";
                            $email_message .= "Company: $company\n";
                            $email_message .= "Service: $service\n";
                            $email_message .= "Message: $message\n";

                            if (footer_send_secure_email($to, $subject, $email_message, $email, $first_name . ' ' . $last_name)) {
                                $form_success = true;
                            } else {
                                $form_error = 'Sorry, there was an error sending your message. Please try again.';
                            }
                        } else {
                            $form_error = 'Please fill in all required fields.';
                        }
                    }
                    ?>

                    <?php if ($form_success): ?>
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                            <strong>Success!</strong> Your message has been sent. We'll get back to you soon.
                        </div>
                    <?php endif; ?>

                    <?php if ($form_error): ?>
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
                            <strong>Error:</strong> <?php echo $form_error; ?>
                        </div>
                    <?php endif; ?>

                    <form action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>" method="POST" class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="contact-first-name" class="block text-sm font-medium text-gray-700 mb-2">First Name <span class="text-red-500">*</span></label>
                                <input type="text" name="contact-first-name" id="contact-first-name" required class="w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-stone-400 focus:border-stone-400" value="<?php echo isset($_POST['contact-first-name']) ? esc_attr($_POST['contact-first-name']) : ''; ?>">
                            </div>
                            <div>
                                <label for="contact-last-name" class="block text-sm font-medium text-gray-700 mb-2">Last Name <span class="text-red-500">*</span></label>
                                <input type="text" name="contact-last-name" id="contact-last-name" required class="w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-stone-400 focus:border-stone-400" value="<?php echo isset($_POST['contact-last-name']) ? esc_attr($_POST['contact-last-name']) : ''; ?>">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="contact-email" class="block text-sm font-medium text-gray-700 mb-2">Email <span class="text-red-500">*</span></label>
                                <input type="email" name="contact-email" id="contact-email" required class="w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-stone-400 focus:border-stone-400" value="<?php echo isset($_POST['contact-email']) ? esc_attr($_POST['contact-email']) : ''; ?>">
                            </div>
                            <div>
                                <label for="contact-phone" class="block text-sm font-medium text-gray-700 mb-2">Phone <span class="text-red-500">*</span></label>
                                <input type="tel" name="contact-phone" id="contact-phone" required class="w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-stone-400 focus:border-stone-400" value="<?php echo isset($_POST['contact-phone']) ? esc_attr($_POST['contact-phone']) : ''; ?>">
                            </div>
                        </div>

                        <div>
                            <label for="contact-company" class="block text-sm font-medium text-gray-700 mb-2">Company Name</label>
                            <input type="text" name="contact-company" id="contact-company" class="w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-stone-400 focus:border-stone-400" value="<?php echo isset($_POST['contact-company']) ? esc_attr($_POST['contact-company']) : ''; ?>">
                        </div>

                        <div>
                            <label for="contact-service" class="block text-sm font-medium text-gray-700 mb-2">Service Required <span class="text-red-500">*</span></label>
                            <select id="contact-service" name="contact-service" required class="w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-stone-400 focus:border-stone-400">
                                <option value="">Please select a service</option>
                                <option value="static-guard" <?php echo (isset($_POST['contact-service']) && $_POST['contact-service'] == 'static-guard') ? 'selected' : ''; ?>>Static Guard</option>
                                <option value="mobile-patrol" <?php echo (isset($_POST['contact-service']) && $_POST['contact-service'] == 'mobile-patrol') ? 'selected' : ''; ?>>Mobile Patrol</option>
                                <option value="crowd-control" <?php echo (isset($_POST['contact-service']) && $_POST['contact-service'] == 'crowd-control') ? 'selected' : ''; ?>>Crowd Control</option>
                                <option value="traffic-control" <?php echo (isset($_POST['contact-service']) && $_POST['contact-service'] == 'traffic-control') ? 'selected' : ''; ?>>Traffic Control</option>
                            </select>
                        </div>

                        <div>
                            <label for="contact-message" class="block text-sm font-medium text-gray-700 mb-2">Message <span class="text-red-500">*</span></label>
                            <textarea name="contact-message" id="contact-message" rows="5" required class="w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-stone-400 focus:border-stone-400" placeholder="Please describe your security requirements..."><?php echo isset($_POST['contact-message']) ? esc_textarea($_POST['contact-message']) : ''; ?></textarea>
                        </div>

                        <div>
                            <input type="hidden" name="contact_form_submit" value="1">
                            <button type="submit" class="w-full bg-slate-800 hover:bg-slate-700 text-white font-bold py-3 px-4 rounded-lg transition duration-300">
                                <i class="fas fa-paper-plane mr-2"></i>Send Message
                            </button>
                        </div>
                    </form>
                </div>

                <div class="space-y-8">
                    <div class="bg-white p-8 rounded-lg shadow-lg">
                        <h3 class="text-2xl font-bold text-slate-800 mb-6">Contact Information</h3>
                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="bg-slate-100 p-3 rounded-lg mr-4">
                                    <i class="fas fa-phone text-slate-800 text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-900 mb-1">Phone</h4>
                                    <p class="text-gray-600"><?php echo esc_html(get_theme_mod('company_phone', '(123) 456-7890')); ?></p>
                                    <p class="text-sm text-gray-500">24/7 Emergency Line</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="bg-slate-100 p-3 rounded-lg mr-4">
                                    <i class="fas fa-envelope text-slate-800 text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-900 mb-1">Email</h4>
                                    <p class="text-gray-600"><?php echo esc_html(get_theme_mod('company_email', 'info@company.com')); ?></p>
                                    <p class="text-sm text-gray-500">We respond as soon as possible</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="bg-slate-100 p-3 rounded-lg mr-4">
                                    <i class="fas fa-map-marker-alt text-slate-800 text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-900 mb-1">Address</h4>
                                    <p class="text-gray-600"><?php echo wp_kses_post(get_theme_mod('company_address', '123 Security Lane, Suite 100<br>Metropolis, ST 12345')); ?></p>
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

    <section class="py-20 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-4">Find Our Office</h2>
                <p class="text-gray-600 text-lg">Visit us at our Metropolis headquarters for in-person consultations</p>
            </div>

            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="h-96 bg-gray-200 flex items-center justify-center relative">
                    <svg width="600" height="400" viewBox="0 0 600 400" class="w-full h-full">
                        <rect width="600" height="400" fill="#e5e7eb"/>

                        <g stroke="#9ca3af" stroke-width="3" fill="none">
                            <line x1="0" y1="200" x2="600" y2="200"/>
                            <line x1="300" y1="0" x2="300" y2="400"/>
                            <line x1="150" y1="0" x2="150" y2="400"/>
                            <line x1="450" y1="0" x2="450" y2="400"/>
                            <line x1="0" y1="100" x2="600" y2="100"/>
                            <line x1="0" y1="300" x2="600" y2="300"/>
                        </g>

                        <g fill="#d1d5db">
                            <rect x="50" y="50" width="80" height="120" rx="5"/>
                            <rect x="170" y="80" width="100" height="90" rx="5"/>
                            <rect x="320" y="60" width="90" height="110" rx="5"/>
                            <rect x="470" y="70" width="80" height="100" rx="5"/>
                            <rect x="80" y="220" width="120" height="80" rx="5"/>
                            <rect x="320" y="240" width="100" height="120" rx="5"/>
                        </g>

                        <rect x="220" y="220" width="60" height="80" fill="#1c222c" rx="5"/>
                        <rect x="225" y="225" width="50" height="70" fill="#978d86" rx="3"/>

                        <g transform="translate(250,200)">
                            <path d="M0,0 L-10,20 L10,20 Z" fill="#ef4444"/>
                            <circle cx="0" cy="0" r="8" fill="#ef4444"/>
                            <circle cx="0" cy="0" r="4" fill="white"/>
                        </g>

                        <text x="10" y="195" fill="#6b7280" font-size="12" font-weight="bold">Security Lane</text>
                        <text x="305" y="15" fill="#6b7280" font-size="12" font-weight="bold" transform="rotate(90 305 15)">Main Avenue</text>

                        <text x="250" y="180" text-anchor="middle" fill="#1c222c" font-size="14" font-weight="bold">The One Point Security</text>
                        <text x="250" y="195" text-anchor="middle" fill="#1c222c" font-size="12">Head Office</text>
                    </svg>

                    <div class="absolute bottom-4 left-4 bg-white p-4 rounded-lg shadow-lg">
                        <h4 class="font-bold text-slate-800 mb-2">The One Point Security</h4>
                        <p class="text-gray-600 text-sm"><?php echo wp_kses_post(get_theme_mod('company_address', '123 Security Lane, Suite 100<br>Metropolis, ST 12345')); ?></p>
                        <a href="#" class="text-slate-600 hover:text-slate-800 text-sm underline mt-2 inline-block">
                            Get Directions
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

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

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.has('contact')) {
            const status = urlParams.get('contact');
            if (status === 'success') {
                console.log('Form submission status: Success! Email sent successfully.');
            } else if (status === 'error') {
                console.error('Form submission status: Error! There was a problem sending the email.');
            }
        }
    });
</script>
<?php
get_footer();
?>