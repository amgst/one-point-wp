<?php
/**
 * Footer Security Theme Functions
 * 
 * Main functions file for the Footer Security WordPress theme
 * Includes theme setup, custom post types, enqueued scripts/styles, and custom functionality
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Temporary: Update admin email for localhost (remove after first page load)
add_action('init', function() {
    if (is_admin() && current_user_can('administrator')) {
        update_option('admin_email', 'your-email@example.com'); // Change this to your email
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
        echo '<!-- Asset Debug Info:';
        echo 'Template Directory: ' . get_template_directory();
        echo 'Template Directory URI: ' . get_template_directory_uri();
        echo 'Header Logo Path: ' . get_template_directory() . '/assets/images/logo.png';
        echo 'Header Logo URL: ' . footer_theme_image('logo.png');
        echo 'Header Logo Exists: ' . (file_exists(get_template_directory() . '/assets/images/logo.png') ? 'Yes' : 'No');
        echo 'Footer Logo Path: ' . get_template_directory() . '/assets/images/logo-footer.png';
        echo 'Footer Logo URL: ' . footer_theme_image('logo-footer.png');
        echo 'Footer Logo Exists: ' . (file_exists(get_template_directory() . '/assets/images/logo-footer.png') ? 'Yes' : 'No');
        echo '-->';
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
        
        // Send email
        $to = get_option('admin_email');
        $subject = 'Contact Form Submission from ' . $name;
        $body = "Name: $name\nEmail: $email\nMessage: $message";
        $headers = array('Content-Type: text/html; charset=UTF-8');
        
        if (wp_mail($to, $subject, $body, $headers)) {
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
}
add_action('customize_register', 'footer_theme_customize_register');

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
    echo 'Thank you for using Footer Security Theme | <a href="https://wordpress.org/" target="_blank">WordPress</a>';
}
add_filter('admin_footer_text', 'footer_theme_admin_footer_text');
?>
