<?php
/**
 * Security Theme Functions
 *
 * Main functions file for the Security WordPress theme
 * Includes theme setup, custom post types, enqueued scripts/styles, and custom functionality
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Temporary: Update admin email for localhost (remove after first page load)
add_action('init', function() {
    if (is_admin() && current_user_can('administrator')) {
        update_option('admin_email', 'support@onpointsec.com.au'); // Change this to your email
        // Comment out or remove this entire block after first use
    }
});

/**
 * Theme Setup
 */
function footer_theme_setup() {
    // Add theme support for various WordPress features
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    add_theme_support('custom-logo');
    add_theme_support('wp-block-styles');
    add_theme_support('align-wide');
    add_theme_support('customize-selective-refresh-widgets');
    
    // Add excerpt support to pages
    add_post_type_support('page', 'excerpt');
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'footer-theme'),
        'footer' => __('Footer Menu', 'footer-theme'),
        'services' => __('Services Menu', 'footer-theme')
    ));
    
    // Set content width
    global $content_width;
    if (!isset($content_width)) {
        $content_width = 1200;
    }
}
add_action('after_setup_theme', 'footer_theme_setup');

/**
 * Enqueue Scripts and Styles
 */
function footer_theme_scripts() {
    // Enqueue main stylesheet
    wp_enqueue_style('footer-style', get_stylesheet_uri(), array(), '1.0.0');
    
    // Enqueue Tailwind CSS
    wp_enqueue_style('tailwind-css', 'https://cdn.tailwindcss.com', array(), '3.4.0');
    
    // Enqueue Font Awesome
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0');
    
    // Enqueue custom CSS from assets folder
    wp_enqueue_style('footer-custom-css', get_template_directory_uri() . '/assets/css/custom.css', array('tailwind-css'), '1.0.0');
    
    // Enqueue custom JavaScript from assets folder
    wp_enqueue_script('footer-custom-js', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), '1.0.0', true);
    
    // Localize script for AJAX
    wp_localize_script('footer-custom-js', 'footer_ajax', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('footer_nonce')
    ));
}
add_action('wp_enqueue_scripts', 'footer_theme_scripts');

/**
 * Add favicon to site
 */
function footer_theme_favicon() {
    $favicon_url = footer_theme_image('favicon.png');
    $favicon_path = get_template_directory() . '/assets/images/favicon.png';
    
    // Check if favicon file exists
    if (file_exists($favicon_path)) {
        echo '<link rel="icon" type="image/png" href="' . esc_url($favicon_url) . '">' . "\n";
        echo '<link rel="shortcut icon" type="image/png" href="' . esc_url($favicon_url) . '">' . "\n";
    }
}
add_action('wp_head', 'footer_theme_favicon');

/**
 * Helper function to get active navigation class
 */
function footer_theme_nav_class($page_slug, $active_classes = 'text-slate-800 font-bold border-b-2 border-stone-400', $default_classes = 'text-gray-600 hover:text-slate-800 transition duration-300') {
    global $post;
    
    // Get current page info
    $current_slug = '';
    
    if (is_front_page() || is_home()) {
        $current_slug = 'home';
    } elseif (is_page()) {
        $current_slug = $post->post_name;
        
        // Check if it's a service page
        $service_pages = array('services', 'static-guard', 'mobile-patrol', 'crowd-control', 'traffic-control');
        if (in_array($current_slug, $service_pages) && $page_slug === 'services') {
            $current_slug = 'services';
        }
    } elseif (is_singular('post') || is_category() || is_tag()) {
        $current_slug = 'blog';
    }
    
    // Check if current page matches the navigation item
    if ($current_slug === $page_slug) {
        return $active_classes;
    }
    
    return $default_classes;
}

/**
 * Helper function to get theme asset URL
 */
function footer_theme_asset($path) {
    return get_template_directory_uri() . '/assets/' . $path;
}

/**
 * Helper function to get theme image URL
 */
function footer_theme_image($filename) {
    $image_url = get_template_directory_uri() . '/assets/images/' . $filename;
    return $image_url;
}

/**
 * Enhanced logo function with fallback (for header)
 */
function footer_theme_logo() {
    $logo_url = footer_theme_image('logo.png');
    $logo_path = get_template_directory() . '/assets/images/logo.png';
    
    // Check if custom logo is set in customizer
    if (function_exists('get_custom_logo') && has_custom_logo()) {
        return get_custom_logo();
    }
    
    // Check if our theme logo file exists
    if (file_exists($logo_path)) {
        return '<img src="' . esc_url($logo_url) . '" alt="' . esc_attr(get_bloginfo('name')) . '">';
    }
    
    // Fallback to site title
    return '<h1 class="text-2xl font-bold text-slate-800">' . get_bloginfo('name') . '</h1>';
}

/**
 * Footer logo function with dedicated footer logo
 */
function footer_theme_footer_logo() {
    $footer_logo_url = footer_theme_image('logo-footer.png');
    $footer_logo_path = get_template_directory() . '/assets/images/logo-footer.png';
    
    // Check if footer logo file exists
    if (file_exists($footer_logo_path)) {
        return '<img src="' . esc_url($footer_logo_url) . '" alt="' . esc_attr(get_bloginfo('name')) . '" class="h-36">';
    }
    
    // Fallback to regular logo
    $regular_logo_url = footer_theme_image('logo.png');
    $regular_logo_path = get_template_directory() . '/assets/images/logo.png';
    
    if (file_exists($regular_logo_path)) {
        return '<img src="' . esc_url($regular_logo_url) . '" alt="' . esc_attr(get_bloginfo('name')) . '" class="h-12 mb-4">';
    }
    
    // Final fallback to site title
    return '<h2 class="text-2xl font-bold text-white mb-4">' . get_bloginfo('name') . '</h2>';
}

/**
 * Debug function for asset URLs (remove in production)
 */
function footer_theme_debug_assets() {
    if (current_user_can('administrator') && isset($_GET['debug_assets'])) {
        echo '';
    }
}
add_action('wp_head', 'footer_theme_debug_assets');

/**
 * Add custom image sizes
 */
function footer_theme_image_sizes() {
    add_image_size('blog-thumbnail', 400, 250, true);
    add_image_size('blog-featured', 800, 400, true);
    add_image_size('service-hero', 1200, 600, true);
    add_image_size('team-member', 300, 300, true);
}
add_action('after_setup_theme', 'footer_theme_image_sizes');

/**
 * Custom Styles (now moved to assets/css/custom.css)
 */
// Custom styles have been moved to assets/css/custom.css and are enqueued in footer_theme_scripts()

/**
 * Custom JavaScript (now moved to assets/js/custom.js)
 */
// JavaScript has been moved to assets/js/custom.js and is enqueued in footer_theme_scripts()

/**
 * Widget Areas
 */
function footer_theme_widgets_init() {
    register_sidebar(array(
        'name'          => __('Footer Widget Area', 'footer-theme'),
        'id'            => 'footer-widgets',
        'description'   => __('Widgets in this area will be shown in the footer.', 'footer-theme'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    
    register_sidebar(array(
        'name'          => __('Sidebar', 'footer-theme'),
        'id'            => 'sidebar-1',
        'description'   => __('Main sidebar for blog and pages.', 'footer-theme'),
        'before_widget' => '<div id="%1$s" class="widget %2$s mb-8">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title text-xl font-bold mb-4">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'footer_theme_widgets_init');

/**
 * Custom Post Types
 */
function footer_theme_custom_post_types() {
    // Testimonials Post Type
    register_post_type('testimonials', array(
        'labels' => array(
            'name' => __('Testimonials', 'footer-theme'),
            'singular_name' => __('Testimonial', 'footer-theme'),
            'add_new' => __('Add New Testimonial', 'footer-theme'),
            'add_new_item' => __('Add New Testimonial', 'footer-theme'),
            'edit_item' => __('Edit Testimonial', 'footer-theme'),
            'new_item' => __('New Testimonial', 'footer-theme'),
            'view_item' => __('View Testimonial', 'footer-theme'),
            'search_items' => __('Search Testimonials', 'footer-theme'),
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-format-quote',
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'show_in_rest' => true,
    ));
    
    // Team Members Post Type
    register_post_type('team', array(
        'labels' => array(
            'name' => __('Team Members', 'footer-theme'),
            'singular_name' => __('Team Member', 'footer-theme'),
            'add_new' => __('Add New Team Member', 'footer-theme'),
            'add_new_item' => __('Add New Team Member', 'footer-theme'),
            'edit_item' => __('Edit Team Member', 'footer-theme'),
            'new_item' => __('New Team Member', 'footer-theme'),
            'view_item' => __('View Team Member', 'footer-theme'),
            'search_items' => __('Search Team Members', 'footer-theme'),
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-groups',
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'show_in_rest' => true,
    ));
}
add_action('init', 'footer_theme_custom_post_types');

/**
 * Custom Taxonomies
 */
function footer_theme_custom_taxonomies() {
    // Service Categories
    register_taxonomy('service_category', array('post'), array(
        'labels' => array(
            'name' => __('Service Categories', 'footer-theme'),
            'singular_name' => __('Service Category', 'footer-theme'),
        ),
        'hierarchical' => true,
        'public' => true,
        'show_in_rest' => true,
    ));
}
add_action('init', 'footer_theme_custom_taxonomies');

/**
 * Excerpt Length
 */
function footer_theme_excerpt_length($length) {
    return 25;
}
add_filter('excerpt_length', 'footer_theme_excerpt_length');

/**
 * Excerpt More
 */
function footer_theme_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'footer_theme_excerpt_more');

/**
 * Custom Logo Support
 */
function footer_theme_custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array('site-title', 'site-description'),
    );
    add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'footer_theme_custom_logo_setup');

/**
 * Contact Form Handler
 */
function footer_theme_handle_contact_form() {
    if (isset($_POST['contact_form_nonce']) && wp_verify_nonce($_POST['contact_form_nonce'], 'contact_form')) {
        $name = sanitize_text_field($_POST['name']);
        $email = sanitize_email($_POST['email']);
        $message = sanitize_textarea_field($_POST['message']);
        
        // Hardcoded recipient email address
        $to = 'admin@onpointsec.com.au';
        $subject = 'Contact Form Submission from ' . $name;
        $body = "Name: $name\nEmail: $email\nMessage: $message";
        
        if (footer_send_secure_email($to, $subject, $body, $email, $name)) {
            wp_redirect(add_query_arg('contact', 'success', wp_get_referer()));
        } else {
            wp_redirect(add_query_arg('contact', 'error', wp_get_referer()));
        }
        exit;
    }
}
add_action('admin_post_contact_form', 'footer_theme_handle_contact_form');
add_action('admin_post_nopriv_contact_form', 'footer_theme_handle_contact_form');

/**
 * Add blog categories if they don't exist
 */
function footer_theme_create_default_categories() {
    $categories = array(
        'Security Guards' => 'security-guards',
        'Technology' => 'technology',
        'Access Control' => 'access-control',
        'Surveillance' => 'surveillance',
        'Industry News' => 'industry-news',
        'Mobile Patrol' => 'mobile-patrol',
        'Crowd Control' => 'crowd-control',
        'Traffic Control' => 'traffic-control'
    );
    
    foreach ($categories as $name => $slug) {
        if (!term_exists($name, 'category')) {
            wp_insert_term($name, 'category', array('slug' => $slug));
        }
    }
}
add_action('after_setup_theme', 'footer_theme_create_default_categories');

/**
 * Security Enhancements
 */
// Remove WordPress version from head
remove_action('wp_head', 'wp_generator');

// Hide login errors
function footer_theme_hide_login_errors() {
    return 'Something is wrong!';
}
add_filter('login_errors', 'footer_theme_hide_login_errors');

/**
 * Performance Optimizations
 */
// Remove emoji scripts
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

// Remove Windows Live Writer support
remove_action('wp_head', 'wlwmanifest_link');

// Remove RSD link
remove_action('wp_head', 'rsd_link');

/**
 * Theme Customizer
 */
function footer_theme_customize_register($wp_customize) {
    // Company Info Section
    $wp_customize->add_section('company_info', array(
        'title' => __('Company Information', 'footer-theme'),
        'priority' => 30,
    ));
    
    // Phone Number
    $wp_customize->add_setting('company_phone', array(
        'default' => '(123) 456-7890',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('company_phone', array(
        'label' => __('Phone Number', 'footer-theme'),
        'section' => 'company_info',
        'type' => 'text',
    ));
    
    // Email Address
    $wp_customize->add_setting('company_email', array(
        'default' => 'info@company.com',
        'sanitize_callback' => 'sanitize_email',
    ));
    $wp_customize->add_control('company_email', array(
        'label' => __('Email Address', 'footer-theme'),
        'section' => 'company_info',
        'type' => 'email',
    ));
    
    // Address
    $wp_customize->add_setting('company_address', array(
        'default' => '123 Main St, City, State 12345',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('company_address', array(
        'label' => __('Address', 'footer-theme'),
        'section' => 'company_info',
        'type' => 'textarea',
    ));
    
    // Custom Form Submission Email
    $wp_customize->add_setting('form_submission_email', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_email',
    ));
    $wp_customize->add_control('form_submission_email', array(
        'label' => __('Form Submission Email', 'footer-theme'),
        'description' => __('Enter the email address where all form submissions will be sent. Leave blank to use the default WordPress admin email.', 'footer-theme'),
        'section' => 'company_info',
        'type' => 'email',
    ));
}
add_action('customize_register', 'footer_theme_customize_register');

/**
 * Theme Update Customizer Registration
 */
function footer_theme_update_customize_register($wp_customize) {
    /**
     * Custom Update Button Control Class
     */
    class WP_Customize_Git_Init_Control extends WP_Customize_Control {
    public $type = 'git_init_button';
    
    public function render_content() {
        ?>
        <label>
            <span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
            <?php if (!empty($this->description)) : ?>
                <span class="description customize-control-description"><?php echo $this->description; ?></span>
            <?php endif; ?>
        </label>
        
        <div id="git-init-controls">
            <button type="button" id="git-init-btn" class="button button-primary" style="margin-top: 10px;">
                <?php _e('Initialize Git Repository', 'footer-theme'); ?>
            </button>
            <span id="git-init-spinner" class="spinner" style="float: none; margin-left: 10px;"></span>
        </div>
        
        <div id="git-init-status" style="margin-top: 10px; padding: 10px; border-radius: 3px; display: none;"></div>
        
        <style>
        #git-init-status.success {
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
            color: #155724;
        }
        #git-init-status.error {
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
            color: #721c24;
        }
        #git-init-status.info {
            background-color: #d1ecf1;
            border: 1px solid #bee5eb;
            color: #0c5460;
        }
        </style>
        
        <script>
        jQuery(document).ready(function($) {
            $('#git-init-btn').on('click', function() {
                var button = $(this);
                var spinner = $('#git-init-spinner');
                var status = $('#git-init-status');
                var repoUrl = $('input[data-customize-setting-link="theme_git_repo_url"]').val();
                
                if (!repoUrl) {
                    status.removeClass('success info').addClass('error').html('✗ Please enter a Git repository URL first.').show();
                    return;
                }
                
                button.prop('disabled', true);
                spinner.addClass('is-active');
                status.removeClass('success error info').addClass('info').html('Initializing Git repository...').show();
                
                $.ajax({
                    url: ajaxurl,
                    type: 'POST',
                    data: {
                        action: 'init_git_repo',
                        repo_url: repoUrl,
                        nonce: '<?php echo wp_create_nonce("theme_update_nonce"); ?>'
                    },
                    success: function(response) {
                        spinner.removeClass('is-active');
                        button.prop('disabled', false);
                        
                        if (response.success) {
                            status.removeClass('info error').addClass('success').html('✓ ' + response.data.message).show();
                            // Refresh the page after successful initialization
                            setTimeout(function() {
                                wp.customize.previewer.refresh();
                                location.reload();
                            }, 2000);
                        } else {
                            status.removeClass('info success').addClass('error').html('✗ ' + response.data.message).show();
                        }
                    },
                    error: function() {
                        spinner.removeClass('is-active');
                        button.prop('disabled', false);
                        status.removeClass('info success').addClass('error').html('✗ Network error occurred').show();
                    }
                });
            });
        });
        </script>
        <?php
    }
}

class WP_Customize_Update_Button_Control extends WP_Customize_Control {
    public $type = 'update_button';
    
    public function render_content() {
        ?>
        <label>
            <span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
            <?php if (!empty($this->description)) : ?>
                <span class="description customize-control-description"><?php echo $this->description; ?></span>
            <?php endif; ?>
            <div class="theme-update-controls">
                <button type="button" class="button button-primary" id="theme-update-btn">
                    <?php _e('Update Theme Now', 'footer-theme'); ?>
                </button>
                <span class="spinner" id="theme-update-spinner"></span>
                <div id="theme-update-status" class="update-status"></div>
            </div>
        </label>
        <style>
            .theme-update-controls {
                margin-top: 10px;
            }
            .theme-update-controls .spinner {
                float: none;
                margin: 0 10px;
            }
            .update-status {
                margin-top: 10px;
                padding: 10px;
                border-radius: 3px;
                display: none;
            }
            .update-status.success {
                background: #d4edda;
                color: #155724;
                border: 1px solid #c3e6cb;
                display: block;
            }
            .update-status.error {
                background: #f8d7da;
                color: #721c24;
                border: 1px solid #f5c6cb;
                display: block;
            }
            .update-status.info {
                background: #d1ecf1;
                color: #0c5460;
                border: 1px solid #bee5eb;
                display: block;
            }
        </style>
        <script>
        jQuery(document).ready(function($) {
            // Check for updates on page load
            function checkForUpdates() {
                $.ajax({
                    url: ajaxurl,
                    type: 'POST',
                    data: {
                        action: 'check_theme_updates',
                        nonce: '<?php echo wp_create_nonce("theme_update_nonce"); ?>'
                    },
                    success: function(response) {
                        if (response.success) {
                            var data = response.data;
                            var statusHtml = '<strong>Current:</strong> ' + data.current_commit + '<br>';
                            
                            if (data.updates_available) {
                                statusHtml += '<span style="color: #f56e28;">⚠ ' + data.update_count + ' update(s) available</span>';
                                $('#theme-update-btn').prop('disabled', false);
                            } else {
                                statusHtml += '<span style="color: #46b450;">✓ Theme is up to date</span>';
                                $('#theme-update-btn').prop('disabled', true);
                            }
                            
                            $('#theme-update-status').addClass('info').html(statusHtml).show();
                        } else {
                            var errorMsg = response.data.message;
                            var helpText = '';
                            
                            if (errorMsg.includes('Git is not available') || errorMsg.includes('Not a Git repository')) {
                                helpText = '<br><small style="color: #666;">Git updates are not available. Enter your Git repository URL above and click "Initialize Git Repository" to enable Git updates, or use FTP/SFTP for manual updates.</small>';
                                $('#theme-update-btn').hide();
                            }
                            
                            $('#theme-update-status').addClass('error').html('✗ ' + errorMsg + helpText).show();
                        }
                    }
                });
            }
            
            // Load update log
            function loadUpdateLog() {
                var log = '<?php echo esc_js(get_theme_update_log()); ?>';
                if (log) {
                    $('#theme-update-log').val(log);
                }
            }
            
            // Initialize
            checkForUpdates();
            loadUpdateLog();
            
            // Update button click handler
            $('#theme-update-btn').on('click', function() {
                var button = $(this);
                var spinner = $('#theme-update-spinner');
                var status = $('#theme-update-status');
                
                button.prop('disabled', true);
                spinner.addClass('is-active');
                status.removeClass('success error info').addClass('info').html('Updating theme...').show();
                
                $.ajax({
                    url: ajaxurl,
                    type: 'POST',
                    data: {
                        action: 'theme_git_update',
                        nonce: '<?php echo wp_create_nonce("theme_update_nonce"); ?>'
                    },
                    success: function(response) {
                        spinner.removeClass('is-active');
                        button.prop('disabled', false);
                        
                        if (response.success) {
                            status.removeClass('info error').addClass('success').html('✓ ' + response.data.message).show();
                            if (response.data.log) {
                                $('#theme-update-log').val(response.data.log);
                            }
                            // Refresh status after successful update
                            setTimeout(checkForUpdates, 2000);
                            // Refresh the customizer after successful update
                            setTimeout(function() {
                                wp.customize.previewer.refresh();
                            }, 3000);
                        } else {
                            var errorMsg = response.data.message || 'Update failed';
                            var helpText = '';
                            
                            if (errorMsg.includes('Git is not available') || errorMsg.includes('Not a Git repository')) {
                                 helpText = '<br><small style="color: #666;">Git updates are not available. Enter your Git repository URL above and click "Initialize Git Repository" to enable Git updates, or use FTP/SFTP for manual updates.</small>';
                                 $('#theme-update-btn').hide();
                             }
                            
                            status.removeClass('info success').addClass('error').html('✗ ' + errorMsg + helpText).show();
                        }
                    },
                    error: function() {
                        spinner.removeClass('is-active');
                        button.prop('disabled', false);
                        status.removeClass('info success').addClass('error').html('✗ Network error occurred').show();
                    }
                });
            });
            
            // Add refresh button functionality
            $('<button type="button" class="button" style="margin-left: 10px;">Check for Updates</button>')
                .insertAfter('#theme-update-btn')
                .click(function(e) {
                    e.preventDefault();
                    checkForUpdates();
                    loadUpdateLog();
                });
        });
        </script>
        <?php
    }
}

    // Add Theme Update Section
    $wp_customize->add_section('theme_update', array(
        'title' => __('Theme Updates', 'footer-theme'),
        'description' => __('Manage theme updates from Git repository', 'footer-theme'),
        'priority' => 30,
    ));
    
    // Add Git Repository URL Setting
    $wp_customize->add_setting('theme_git_repo_url', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
        'transport' => 'refresh',
    ));
    
    // Add Git Repository URL Control
     $wp_customize->add_control('theme_git_repo_url', array(
         'label' => __('Git Repository URL', 'footer-theme'),
         'description' => __('Enter your Git repository URL (e.g., https://github.com/username/repo.git) to enable Git updates on this server.', 'footer-theme'),
         'section' => 'theme_update',
         'type' => 'url',
         'priority' => 5,
     ));
     
     // Add Git Initialize Button Setting
     $wp_customize->add_setting('theme_git_init', array(
         'default' => '',
         'sanitize_callback' => 'sanitize_text_field',
         'transport' => 'postMessage',
     ));
     
     // Add Git Initialize Button Control
     $wp_customize->add_control(new WP_Customize_Git_Init_Control(
         $wp_customize,
         'theme_git_init_button',
         array(
             'label' => __('Initialize Git Repository', 'footer-theme'),
             'description' => __('Click to initialize Git repository with the URL above. This enables Git updates on servers without Git deployment.', 'footer-theme'),
             'section' => 'theme_update',
             'settings' => 'theme_git_init',
             'priority' => 6,
         )
     ));
    
    // Add Update Status Setting
    $wp_customize->add_setting('theme_update_status', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    
    // Add Update Button Control
    $wp_customize->add_control(new WP_Customize_Update_Button_Control(
        $wp_customize,
        'theme_update_button',
        array(
            'label' => __('Update Theme', 'footer-theme'),
            'description' => __('Click to update the theme from the Git repository. This will overwrite any local changes.', 'footer-theme'),
            'section' => 'theme_update',
            'settings' => 'theme_update_status',
        )
    ));
    
    // Add Update Log Setting
    $wp_customize->add_setting('theme_update_log', array(
        'default' => '',
        'sanitize_callback' => 'wp_kses_post',
        'transport' => 'postMessage',
    ));
    
    // Add Update Log Control
    $wp_customize->add_control('theme_update_log', array(
        'label' => __('Update Log', 'footer-theme'),
        'section' => 'theme_update',
        'type' => 'textarea',
        'input_attrs' => array(
            'readonly' => 'readonly',
            'rows' => 10,
            'id' => 'theme-update-log',
        ),
    ));
}
add_action('customize_register', 'footer_theme_update_customize_register');

/**
 * AJAX Handler for Theme Git Update
 */
function handle_theme_git_update() {
    // Verify nonce for security
    if (!wp_verify_nonce($_POST['nonce'], 'theme_update_nonce')) {
        wp_die('Security check failed');
    }
    
    // Check user permissions
    if (!current_user_can('manage_options')) {
        wp_send_json_error(array('message' => 'Insufficient permissions'));
    }
    
    try {
        $theme_dir = get_template_directory();
        
        // Change to theme directory
        if (!chdir($theme_dir)) {
            throw new Exception('Could not change to theme directory');
        }
        
        // Check if git is available
        $git_path = 'git'; // Default git command
        
        // Try different possible Git paths for Windows/Local environments
        $possible_paths = [
            'git',
            'C:\\Program Files\\Git\\bin\\git.exe',
            'C:\\Program Files (x86)\\Git\\bin\\git.exe',
            'C:\\Git\\bin\\git.exe'
        ];
        
        $git_available = false;
        foreach ($possible_paths as $path) {
            exec("\"$path\" --version 2>&1", $output, $return_code);
            if ($return_code === 0) {
                $git_path = $path;
                $git_available = true;
                break;
            }
            $output = []; // Reset output for next iteration
        }
        
        if (!$git_available) {
            throw new Exception('Git is not available on this server. This theme appears to be deployed in a non-Git environment. Please use FTP/SFTP to manually update theme files, or contact your hosting provider to enable Git support.');
        }
        
        // Check if current directory is a Git repository
        exec("\"$git_path\" rev-parse --git-dir 2>&1", $git_check_output, $git_check_code);
        if ($git_check_code !== 0) {
            throw new Exception('This theme directory is not a Git repository. The Git update feature only works when the theme is deployed via Git. Please use manual file upload methods to update your theme.');
        }
        
        // Fetch latest changes
        exec("\"$git_path\" fetch origin 2>&1", $fetch_output, $fetch_code);
        if ($fetch_code !== 0) {
            throw new Exception('Failed to fetch from repository: ' . implode('\n', $fetch_output));
        }
        
        // Check if there are updates available
        exec("\"$git_path\" log HEAD..origin/main --oneline 2>&1", $log_output, $log_code);
        if (empty($log_output)) {
            wp_send_json_success(array(
                'message' => 'Theme is already up to date. No updates available.',
                'log' => 'No new commits found.'
            ));
            return;
        }
        
        // Get current commit for logging
        exec("\"$git_path\" log -1 --oneline 2>&1", $current_commit);
        
        // Reset to latest commit (this will overwrite local changes)
        exec("\"$git_path\" reset --hard origin/main 2>&1", $reset_output, $reset_code);
        if ($reset_code !== 0) {
            throw new Exception('Failed to update theme: ' . implode('\n', $reset_output));
        }
        
        // Get new commit info
        exec("\"$git_path\" log -1 --oneline 2>&1", $new_commit);
        
        // Log the update
        $log_entry = date('Y-m-d H:i:s') . " - Theme updated successfully\n";
        $log_entry .= "From: " . (isset($current_commit[0]) ? $current_commit[0] : 'Unknown') . "\n";
        $log_entry .= "To: " . (isset($new_commit[0]) ? $new_commit[0] : 'Unknown') . "\n";
        $log_entry .= "Changes applied: " . count($log_output) . " commits\n\n";
        
        // Save log to file
        $log_file = $theme_dir . '/theme-update.log';
        file_put_contents($log_file, $log_entry, FILE_APPEND | LOCK_EX);
        
        // Clear any WordPress caches
        if (function_exists('wp_cache_flush')) {
            wp_cache_flush();
        }
        
        wp_send_json_success(array(
            'message' => 'Theme updated successfully! Applied ' . count($log_output) . ' new commits.',
            'log' => $log_entry,
            'commits' => $log_output
        ));
        
    } catch (Exception $e) {
        // Log the error
        $error_log = date('Y-m-d H:i:s') . " - Update failed: " . $e->getMessage() . "\n";
        $log_file = get_template_directory() . '/theme-update.log';
        file_put_contents($log_file, $error_log, FILE_APPEND | LOCK_EX);
        
        wp_send_json_error(array(
            'message' => 'Update failed: ' . $e->getMessage()
        ));
    }
}
add_action('wp_ajax_theme_git_update', 'handle_theme_git_update');
add_action('wp_ajax_check_theme_updates', 'get_theme_update_status');
add_action('wp_ajax_init_git_repo', 'handle_init_git_repo');

/**
 * Handle Git repository initialization
 */
function handle_init_git_repo() {
    // Verify nonce
    if (!wp_verify_nonce($_POST['nonce'], 'theme_update_nonce')) {
        wp_send_json_error(array('message' => 'Security check failed'));
        return;
    }
    
    // Check user permissions
    if (!current_user_can('manage_options')) {
        wp_send_json_error(array('message' => 'Insufficient permissions'));
        return;
    }
    
    $repo_url = sanitize_text_field($_POST['repo_url']);
    if (empty($repo_url)) {
        wp_send_json_error(array('message' => 'Repository URL is required'));
        return;
    }
    
    try {
        // Change to theme directory
        $theme_dir = get_template_directory();
        if (!chdir($theme_dir)) {
            throw new Exception('Failed to change to theme directory');
        }
        
        // Check if git is available
        $git_path = 'git'; // Default git command
        
        // Try different possible Git paths for Windows/Local environments
        $possible_paths = [
            'git',
            'C:\\Program Files\\Git\\bin\\git.exe',
            'C:\\Program Files (x86)\\Git\\bin\\git.exe',
            'C:\\Git\\bin\\git.exe'
        ];
        
        $git_available = false;
        foreach ($possible_paths as $path) {
            exec("\"$path\" --version 2>&1", $output, $return_code);
            if ($return_code === 0) {
                $git_path = $path;
                $git_available = true;
                break;
            }
            $output = []; // Reset output for next iteration
        }
        
        if (!$git_available) {
            throw new Exception('Git is not available on this server. Please install Git first.');
        }
        
        // Check if already a git repository
        exec("\"$git_path\" rev-parse --git-dir 2>&1", $git_check_output, $git_check_code);
        if ($git_check_code === 0) {
            // Already a git repo, just add the remote
            exec("\"$git_path\" remote remove origin 2>&1", $remove_output, $remove_code);
            exec("\"$git_path\" remote add origin \"$repo_url\" 2>&1", $remote_output, $remote_code);
            if ($remote_code !== 0) {
                throw new Exception('Failed to add remote origin: ' . implode('\n', $remote_output));
            }
        } else {
            // Initialize new git repository
            exec("\"$git_path\" init 2>&1", $init_output, $init_code);
            if ($init_code !== 0) {
                throw new Exception('Failed to initialize Git repository: ' . implode('\n', $init_output));
            }
            
            // Add remote origin
            exec("\"$git_path\" remote add origin \"$repo_url\" 2>&1", $remote_output, $remote_code);
            if ($remote_code !== 0) {
                throw new Exception('Failed to add remote origin: ' . implode('\n', $remote_output));
            }
            
            // Add all files
            exec("\"$git_path\" add . 2>&1", $add_output, $add_code);
            if ($add_code !== 0) {
                throw new Exception('Failed to add files: ' . implode('\n', $add_output));
            }
            
            // Initial commit
            exec("\"$git_path\" commit -m \"Initial commit from live server\" 2>&1", $commit_output, $commit_code);
            // Don't fail if commit fails (might be nothing to commit)
        }
        
        // Fetch from remote
        exec("\"$git_path\" fetch origin 2>&1", $fetch_output, $fetch_code);
        if ($fetch_code !== 0) {
            throw new Exception('Failed to fetch from repository. Please check the URL and ensure it\'s accessible: ' . implode('\n', $fetch_output));
        }
        
        // Save the repository URL to WordPress options
        update_option('theme_git_repo_url', $repo_url);
        
        wp_send_json_success(array(
            'message' => 'Git repository initialized successfully! You can now use Git updates.',
            'log' => 'Repository URL: ' . $repo_url . "\n" . 'Git repository initialized and connected.'
        ));
        
    } catch (Exception $e) {
        wp_send_json_error(array('message' => $e->getMessage()));
    }
}

/**
 * Get Theme Update Status
 */
function get_theme_update_status() {
    try {
        $theme_dir = get_template_directory();
        
        // Change to theme directory
        if (!chdir($theme_dir)) {
            return array('error' => 'Could not access theme directory');
        }
        
        // Check if git is available
        $git_path = 'git'; // Default git command
        
        // Try different possible Git paths for Windows/Local environments
        $possible_paths = [
            'git',
            'C:\\Program Files\\Git\\bin\\git.exe',
            'C:\\Program Files (x86)\\Git\\bin\\git.exe',
            'C:\\Git\\bin\\git.exe'
        ];
        
        $git_available = false;
        foreach ($possible_paths as $path) {
            exec("\"$path\" --version 2>&1", $output, $return_code);
            if ($return_code === 0) {
                $git_path = $path;
                $git_available = true;
                break;
            }
            $output = []; // Reset output for next iteration
        }
        
        if (!$git_available) {
            return array('error' => 'Git is not available on this server');
        }
        
        // Check if current directory is a Git repository
        exec("\"$git_path\" rev-parse --git-dir 2>&1", $git_check_output, $git_check_code);
        if ($git_check_code !== 0) {
            return array('error' => 'Not a Git repository');
        }
        
        // Get current commit
        exec("\"$git_path\" log -1 --oneline 2>&1", $current_commit);
        
        // Fetch latest changes (silently)
        exec("\"$git_path\" fetch origin 2>&1", $fetch_output, $fetch_code);
        
        // Check for available updates
        exec("\"$git_path\" log HEAD..origin/main --oneline 2>&1", $log_output, $log_code);
        
        $status = array(
            'current_commit' => isset($current_commit[0]) ? $current_commit[0] : 'Unknown',
            'updates_available' => !empty($log_output),
            'update_count' => count($log_output),
            'pending_commits' => $log_output
        );
        
        return $status;
        
    } catch (Exception $e) {
        return array('error' => $e->getMessage());
    }
}

/**
 * AJAX Handler for Checking Updates
 */
function handle_check_theme_updates() {
    // Verify nonce for security
    if (!wp_verify_nonce($_POST['nonce'], 'theme_update_nonce')) {
        wp_die('Security check failed');
    }
    
    // Check user permissions
    if (!current_user_can('manage_options')) {
        wp_send_json_error(array('message' => 'Insufficient permissions'));
    }
    
    $status = get_theme_update_status();
    
    if (isset($status['error'])) {
        wp_send_json_error(array('message' => $status['error']));
    } else {
        wp_send_json_success($status);
    }
}
add_action('wp_ajax_check_theme_updates', 'handle_check_theme_updates');

/**
 * Get Theme Update Log
 */
function get_theme_update_log() {
    $log_file = get_template_directory() . '/theme-update.log';
    
    if (file_exists($log_file)) {
        $log_content = file_get_contents($log_file);
        // Return last 20 lines for display
        $lines = explode("\n", $log_content);
        $recent_lines = array_slice($lines, -20);
        return implode("\n", $recent_lines);
    }
    
    return 'No update log available yet.';
}

/**
 * Admin Customizations
 */
function footer_theme_admin_styles() {
    echo '<style>
        .wp-admin .update-nag { display: none; }
        #dashboard_primary { display: none; }
    </style>';
}
add_action('admin_head', 'footer_theme_admin_styles');

/**
 * Custom Footer Text
 */
function footer_theme_admin_footer_text() {
    return 'Thank you for using Security Theme | <a href="https://wordpress.org/" target="_blank">WordPress</a>';
}
add_filter('admin_footer_text', 'footer_theme_admin_footer_text');

/**
 * Secure Email Sending Function
 */
function footer_send_secure_email($to, $subject, $message, $from_email = null, $from_name = null) {
    // Set a default from name and email
    $blog_name = get_bloginfo('name');
    
    // Use provided from name or fall back to blog name
    $from_name = $from_name ? $from_name : $blog_name;
    
    // The Reply-To header should contain the user's actual email for replies
    $reply_to_email = $from_email ? $from_email : get_option('admin_email');
    
    // Build the headers array
    $headers = array(
        'Content-Type: text/html; charset=UTF-8',
        'From: ' . $from_name . ' <support@onpointsec.com.au>', // Hardcoded from email as requested
        'Reply-To: ' . $reply_to_email
    );

    // Send the email
    return wp_mail($to, $subject, $message, $headers);
}