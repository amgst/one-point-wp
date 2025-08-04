# Security Theme Assets

This folder contains all the theme assets organized in a standard WordPress theme structure.

## Folder Structure

```
assets/
├── css/
│   └── custom.css          # Custom theme styles
├── js/
│   └── custom.js           # Custom theme JavaScript
└── images/
    └── logo.png            # Theme logo and other images
```

## Usage

### In PHP Templates
Use the helper functions provided in functions.php:

```php
// Get any asset URL
<?php echo footer_theme_asset('css/custom.css'); ?>

// Get image URL specifically
<img src="<?php echo footer_theme_image('logo.png'); ?>" alt="Logo">

// Or use the WordPress way
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Logo">
```

### CSS Files
All custom CSS is in `assets/css/custom.css` and is properly enqueued through `functions.php`.

### JavaScript Files
All custom JavaScript is in `assets/js/custom.js` and is properly enqueued through `functions.php` with jQuery dependency.

### Images
Store all theme images in `assets/images/` folder. This includes:
- Logo files
- Hero background images
- Icon files
- Any other theme-specific images

## Benefits of This Structure

1. **Organization**: All assets are properly organized and easy to find
2. **Performance**: Assets are properly enqueued with WordPress standards
3. **Caching**: External files can be cached by browsers
4. **Maintainability**: Easier to update and maintain code
5. **Development**: Better separation of concerns
6. **Security**: Following WordPress best practices
