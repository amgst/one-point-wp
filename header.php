<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class('bg-gray-100 font-sans'); ?>>
    <!-- Navigation -->
    <nav class="bg-white shadow-lg fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between h-20">
                <div class="flex logo ">
                    <a href="<?php echo home_url(); ?>" >
                        <?php echo footer_theme_logo(); ?>
                    </a>
                    <style> .logo a img {width: 161px; background: white}</style>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="<?php echo home_url(); ?>" class="<?php echo footer_theme_nav_class('home'); ?> flex items-center">
                        <i class="fas fa-home mr-2"></i>Home
                    </a>
                    <!-- Services Dropdown -->
                    <div class="relative group">
                        <a href="<?php echo home_url('/services'); ?>" class="<?php echo footer_theme_nav_class('services', 'text-slate-800 font-bold border-b-2 border-stone-400', 'text-gray-600 hover:text-slate-800 transition duration-300'); ?> flex items-center">
                            <i class="fas fa-shield-alt mr-2"></i>Services
                            <i class="fas fa-chevron-down ml-1 text-sm group-hover:rotate-180 transition-transform duration-200"></i>
                        </a>
                        <div class="absolute top-full left-0 mt-2 w-64 bg-white shadow-lg rounded-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                            <div class="py-2">
                                <a href="<?php echo home_url('/services'); ?>" class="block px-4 py-3 text-gray-600 hover:bg-gray-50 hover:text-slate-800 transition duration-200 border-b border-gray-100">
                                    <i class="fas fa-list mr-3"></i>All Services
                                </a>
                                <a href="<?php echo home_url('/static-guard'); ?>" class="block px-4 py-3 text-gray-600 hover:bg-gray-50 hover:text-slate-800 transition duration-200 border-b border-gray-100">
                                    <i class="fas fa-shield-alt mr-3"></i>Static Guard
                                </a>
                                <a href="<?php echo home_url('/mobile-patrol'); ?>" class="block px-4 py-3 text-gray-600 hover:bg-gray-50 hover:text-slate-800 transition duration-200 border-b border-gray-100">
                                    <i class="fas fa-car mr-3"></i>Mobile Patrol
                                </a>
                                <a href="<?php echo home_url('/crowd-control'); ?>" class="block px-4 py-3 text-gray-600 hover:bg-gray-50 hover:text-slate-800 transition duration-200 border-b border-gray-100">
                                    <i class="fas fa-users mr-3"></i>Crowd Control
                                </a>
                                <a href="<?php echo home_url('/traffic-control'); ?>" class="block px-4 py-3 text-gray-600 hover:bg-gray-50 hover:text-slate-800 transition duration-200">
                                    <i class="fas fa-traffic-light mr-3"></i>Traffic Control
                                </a>
                            </div>
                        </div>
                    </div>
                    <a href="<?php echo home_url('/about'); ?>" class="<?php echo footer_theme_nav_class('about'); ?> flex items-center">
                        <i class="fas fa-info-circle mr-2"></i>About
                    </a>
                    <a href="<?php echo home_url('/blog'); ?>" class="<?php echo footer_theme_nav_class('blog'); ?> flex items-center">
                        <i class="fas fa-blog mr-2"></i>Blog
                    </a>
                    <a href="<?php echo home_url('/faq'); ?>" class="<?php echo footer_theme_nav_class('faq'); ?> flex items-center">
                        <i class="fas fa-question-circle mr-2"></i>FAQ
                    </a>
                    <a href="<?php echo home_url('/contact'); ?>" class="<?php echo footer_theme_nav_class('contact'); ?> flex items-center">
                        <i class="fas fa-envelope mr-2"></i>Contact
                    </a>
                </div>
                <div class="md:hidden flex items-center">
                    <button class="mobile-menu-button text-slate-800">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile menu -->
        <div class="mobile-menu hidden md:hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 bg-white">
                <a href="<?php echo home_url(); ?>" class="text-slate-800 block px-3 py-2 font-bold flex items-center">
                    <i class="fas fa-home mr-3"></i>Home
                </a>
                <div class="mobile-services-dropdown">
                    <button class="mobile-services-toggle text-gray-600 block px-3 py-2 hover:text-slate-800 w-full text-left flex items-center justify-between">
                        <span class="flex items-center">
                            <i class="fas fa-shield-alt mr-3"></i>Services
                        </span>
                        <i class="fas fa-chevron-down text-sm transition-transform duration-200"></i>
                    </button>
                    <div class="mobile-services-menu hidden bg-gray-50 pl-4">
                        <a href="<?php echo home_url('/services'); ?>" class="text-gray-600 block px-3 py-2 hover:text-slate-800 flex items-center">
                            <i class="fas fa-list mr-3"></i>All Services
                        </a>
                        <a href="<?php echo home_url('/static-guard'); ?>" class="text-gray-600 block px-3 py-2 hover:text-slate-800 flex items-center">
                            <i class="fas fa-shield-alt mr-3"></i>Static Guard
                        </a>
                        <a href="<?php echo home_url('/mobile-patrol'); ?>" class="text-gray-600 block px-3 py-2 hover:text-slate-800 flex items-center">
                            <i class="fas fa-car mr-3"></i>Mobile Patrol
                        </a>
                        <a href="<?php echo home_url('/crowd-control'); ?>" class="text-gray-600 block px-3 py-2 hover:text-slate-800 flex items-center">
                            <i class="fas fa-users mr-3"></i>Crowd Control
                        </a>
                        <a href="<?php echo home_url('/traffic-control'); ?>" class="text-gray-600 block px-3 py-2 hover:text-slate-800 flex items-center">
                            <i class="fas fa-traffic-light mr-3"></i>Traffic Control
                        </a>
                    </div>
                </div>
                <a href="<?php echo home_url('/about'); ?>" class="text-gray-600 block px-3 py-2 hover:text-slate-800 flex items-center">
                    <i class="fas fa-info-circle mr-3"></i>About
                </a>
                <a href="<?php echo home_url('/blog'); ?>" class="text-gray-600 block px-3 py-2 hover:text-slate-800 flex items-center">
                    <i class="fas fa-blog mr-3"></i>Blog
                </a>
                <a href="<?php echo home_url('/faq'); ?>" class="text-gray-600 block px-3 py-2 hover:text-slate-800 flex items-center">
                    <i class="fas fa-question-circle mr-3"></i>FAQ
                </a>
                <a href="<?php echo home_url('/contact'); ?>" class="text-gray-600 block px-3 py-2 hover:text-slate-800 flex items-center">
                    <i class="fas fa-envelope mr-3"></i>Contact
                </a>
                </div>
                <a href="<?php echo home_url('/about'); ?>" class="text-gray-600 block px-3 py-2 hover:text-slate-800">About</a>
                <a href="<?php echo home_url('/blog'); ?>" class="text-gray-600 block px-3 py-2 hover:text-slate-800">Blog</a>
                <a href="<?php echo home_url('/contact'); ?>" class="text-gray-600 block px-3 py-2 hover:text-slate-800">Contact</a>
            </div>
        </div>
    </nav>
