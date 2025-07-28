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
                <div class="flex items-center">
                    <a href="<?php echo home_url(); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/logo.png" alt="On Point Security Logo" class="h-16">
                    </a>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="<?php echo home_url(); ?>" class="text-slate-800 font-bold border-b-2 border-stone-400">Home</a>
                    <a href="<?php echo home_url('/services'); ?>" class="text-gray-600 hover:text-slate-800 transition duration-300">Services</a>
                    <a href="<?php echo home_url('/about'); ?>" class="text-gray-600 hover:text-slate-800 transition duration-300">About</a>
                    <a href="<?php echo home_url('/blog'); ?>" class="text-gray-600 hover:text-slate-800 transition duration-300">Blog</a>
                    <a href="<?php echo home_url('/contact'); ?>" class="text-gray-600 hover:text-slate-800 transition duration-300">Contact</a>
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
                <a href="<?php echo home_url(); ?>" class="text-slate-800 block px-3 py-2 font-bold">Home</a>
                <a href="<?php echo home_url('/services'); ?>" class="text-gray-600 block px-3 py-2 hover:text-slate-800">Services</a>
                <a href="<?php echo home_url('/about'); ?>" class="text-gray-600 block px-3 py-2 hover:text-slate-800">About</a>
                <a href="<?php echo home_url('/blog'); ?>" class="text-gray-600 block px-3 py-2 hover:text-slate-800">Blog</a>
                <a href="<?php echo home_url('/contact'); ?>" class="text-gray-600 block px-3 py-2 hover:text-slate-800">Contact</a>
            </div>
        </div>
    </nav>
