# Customs Clearance WordPress Theme

A professional, multilingual WordPress theme designed specifically for customs clearance and logistics companies. Features comprehensive support for French, English, and Arabic languages with automatic geolocation-based language detection.

## 📋 Table of Contents

- [Overview](#overview)
- [Features](#features)
- [Requirements](#requirements)
- [Installation](#installation)
- [Configuration](#configuration)
- [Multilingual System](#multilingual-system)
- [Custom Post Types](#custom-post-types)
- [Theme Options](#theme-options)
- [Page Templates](#page-templates)
- [Development](#development)
- [File Structure](#file-structure)
- [Usage Examples](#usage-examples)
- [Troubleshooting](#troubleshooting)
- [Support](#support)
- [License](#license)

## 🎯 Overview

The Customs Clearance theme is a modern, responsive WordPress theme built with TailwindCSS and optimized for customs clearance and logistics businesses. It provides a complete multilingual solution with automatic language detection based on user location, manual language switching, and full RTL (Right-to-Left) support for Arabic.

### Key Highlights

- 🌍 **Multilingual Support**: French, English, and Arabic with automatic detection
- 📱 **Responsive Design**: Mobile-first approach with modern UI/UX
- ⚡ **Performance Optimized**: Fast loading and SEO-friendly
- 🎨 **Modern Design**: Professional design with smooth animations
- 🔧 **Easy Customization**: Comprehensive theme options panel
- 📝 **Custom Post Types**: Services and Cities with translation support
- 🎯 **SEO Ready**: Optimized for search engines

## ✨ Features

### Core Features

- **Multilingual System**
  - Complete translation support for all content
  - Automatic language detection based on user's country
  - Manual language switching via dropdown
  - Language persistence using cookies
  - URL parameter support (`?lang=fr|en|ar`)

- **Custom Post Types**
  - **Services**: Custom post type for service offerings
  - **Cities**: Custom post type for city/location information
  - Automatic translation mapping
  - Custom meta fields and featured images

- **Contact Forms**
  - Contact Form 7 integration
  - Multilingual form fields
  - Automatic translation of placeholders and validation messages
  - WhatsApp integration

- **RTL Support**
  - Complete right-to-left layout for Arabic
  - Flexbox direction adjustments
  - Animation corrections for RTL
  - Typography optimization

- **Theme Customization**
  - Theme Options panel in WordPress admin
  - Header customization (colors, fonts, logo)
  - Homepage sections (hero, services, locations, testimonials)
  - Footer customization
  - Custom Gutenberg blocks

### Page Templates

- **Homepage**: Hero section, services grid, locations, testimonials
- **About Us**: Company information, mission, values, FAQ section
- **Services**: Service archive and single service pages
- **Cities**: City archive and location information
- **Quote**: Request a quote form with file upload
- **Blog**: Blog posts with sidebar
- **Contact**: Contact form and company information
- **404**: Custom 404 error page

## 📦 Requirements

### Minimum Requirements

- **WordPress**: 5.0 or higher
- **PHP**: 7.4 or higher
- **MySQL**: 5.6 or higher
- **Browser Support**: Modern browsers (Chrome, Firefox, Safari, Edge)

### Recommended Plugins

- **Contact Form 7**: For contact forms (required for contact functionality)
- **Elementor**: Optional, for page builder functionality

### Development Dependencies

- **Node.js**: 14.x or higher
- **npm**: 6.x or higher
- **TailwindCSS**: 4.x (included in package.json)

## 🚀 Installation

### Step 1: Upload Theme

1. Download or clone the theme
2. Upload the theme folder to: `/wp-content/themes/customsclearance/`
3. Ensure the folder structure is correct

### Step 2: Activate Theme

1. Log in to WordPress Admin
2. Navigate to **Appearance → Themes**
3. Find "Customs Clearance" theme
4. Click **Activate**

### Step 3: Install Required Plugins

1. Install **Contact Form 7** from WordPress plugin repository
2. (Optional) Install **Elementor** for page builder features

### Step 4: Configure Theme

1. Go to **Appearance → Theme Options**
2. Configure basic settings:
   - Header settings (colors, fonts, logo)
   - Homepage sections
   - Footer settings
   - Language preferences

### Step 5: Build Assets (Development)

If you're developing or customizing the theme:

```bash
# Install dependencies
npm install

# Build TailwindCSS
npm run build

# Watch for changes (development)
npm run watch
```

## ⚙️ Configuration

### Theme Options

Access theme options via **Appearance → Theme Options** in WordPress admin.

#### Header Settings

- `header_bg_color`: Header background color
- `menu_text_color`: Menu text color
- `header_font_size`: Header font size
- `header_font_family`: Header font family
- `custom_logo_text`: Logo text
- `custom_logo_url`: Logo URL
- `button_bg_color`: Button background color
- `button_text_color`: Button text color

#### Homepage Settings

- `hero_title_1`: First hero title
- `hero_title_2`: Second hero title
- `hero_subtitle`: Hero subtitle
- `hero_image`: Hero background image
- `service_card_title`: Service card title
- `service_card_description`: Service card description
- `location_title`: Location card title
- `location_description`: Location card description

#### About Us Settings

- `about_us_hero_title`: About page hero title
- `about_us_content_title`: About page content title
- `about_us_content_text_1`: About page content text 1
- `about_us_content_text_2`: About page content text 2
- `about_us_mission_title`: Mission section title
- `about_us_mission_text`: Mission section text
- `about_us_values_title`: Values section title
- `about_us_faq_title`: FAQ section title

### Accessing Options in Code

```php
// Get all theme options
$options = get_option('custom_clearance_theme_options');

// Get specific option with fallback
$hero_title = isset($options['hero_title_1']) ? $options['hero_title_1'] : 'Default Title';
```

## 🌍 Multilingual System

### Supported Languages

- **French (fr)**: Default language for Morocco
- **English (en)**: Fallback language
- **Arabic (ar)**: Full RTL support

### Language Detection Priority

1. **URL Parameter**: `?lang=en` (highest priority)
2. **Cookie**: `custom_clearance_lang` (30-day persistence)
3. **Auto-detection**: Based on user's country (lowest priority)

### Country Mapping

The theme automatically detects the user's country and sets the appropriate language:

- **Morocco (MA)**: French (default)
- **Algeria, Tunisia, Egypt, etc.**: Arabic
- **Other countries**: English

### Language Functions

```php
// Get current language
$current_lang = custom_clearance_get_current_language();

// Get translated text
$translated_text = custom_clearance_get_text('translation_key');

// Echo translated text
custom_clearance_e('translation_key');

// Check if RTL
$is_rtl = custom_clearance_is_rtl();
```

### Language Switcher

```php
// Dropdown switcher (header)
custom_clearance_render_language_switcher('dropdown');

// Flag switcher (footer)
custom_clearance_render_language_switcher('flags');

// Mobile switcher
custom_clearance_render_mobile_language_switcher();
```

### Adding New Translations

1. **Add translation key** in `inc/multilingual.php`:

```php
'new_translation_key' => array(
    'fr' => 'Texte français',
    'en' => 'English text',
    'ar' => 'النص العربي'
),
```

2. **Use in templates**:

```php
<?php custom_clearance_e('new_translation_key'); ?>
```

### Common Translation Keys

#### Navigation
- `nav_home`, `nav_about`, `nav_services`, `nav_cities`, `nav_quote`, `nav_blog`, `nav_contact`

#### Homepage
- `hero_title_1`, `hero_title_2`, `hero_subtitle`
- `service_card_title`, `service_card_description`
- `location_title`, `location_description`

#### Forms
- `contact_form_sending`, `contact_form_success`, `contact_form_error`
- `quote_form_success`, `quote_form_file_too_large`

For a complete list, see [QUICK_REFERENCE.md](QUICK_REFERENCE.md) or [MULTILINGUAL.md](MULTILINGUAL.md).

## 📝 Custom Post Types

### Services

**Slug**: `service`  
**Archive URL**: `/services/`

**Fields**:
- Title (used for translation mapping)
- Content (service description)
- Excerpt (short description)
- Featured Image
- Custom Meta: `_service_content` (WYSIWYG editor)

**Translation Mapping**:
```php
$service_mapping = array(
    'Customs Clearance' => 'service_customs_clearance_title',
    'Logistics' => 'service_logistics_title',
    'Consulting' => 'service_consulting_title',
    'Documentation' => 'service_documentation_title'
);
```

**Usage**:
```php
// Get translated service title
$title = custom_clearance_get_service_title($post_title);

// Get translated service description
$description = custom_clearance_get_service_description($post_title);
```

### Cities

**Slug**: `city`  
**Archive URL**: `/cities/`

**Fields**:
- Title (used for translation mapping)
- Content (city description)
- Excerpt (short description)
- Featured Image
- Custom Meta: `phone_number` (contact number)

**Translation Mapping**:
```php
$city_mapping = array(
    'Nador' => 'city_nador_title',
    'Casablanca' => 'city_casablanca_title',
    'Tanger' => 'city_tangier_title',
    'Agadir' => 'city_agadir_title'
);
```

**Usage**:
```php
// Get translated city title
$title = custom_clearance_get_city_title($post_title);

// Get translated city description
$description = custom_clearance_get_city_description($post_title);
```

## 📄 Page Templates

### Available Templates

- `page-about-us.php`: About Us page
- `page-blog.php`: Blog page
- `page-cities.php`: Cities page
- `page-contact.php`: Contact page
- `page-quote.php`: Quote request page
- `archive-service.php`: Services archive
- `single-service.php`: Single service template
- `404.php`: Custom 404 page

### Using Templates

1. Create a new page in WordPress admin
2. Select the desired template from the **Page Attributes** dropdown
3. Publish the page

## 💻 Development

### File Structure

```
customsclearance/
├── assets/
│   ├── css/
│   │   ├── admin/          # Admin stylesheets
│   │   └── page-*.css      # Page-specific styles
│   ├── images/             # Theme images
│   └── js/
│       ├── admin/          # Admin JavaScript
│       ├── ui/             # Frontend JavaScript
│       └── page-*.js       # Page-specific scripts
├── inc/
│   ├── multilingual.php                    # Core multilingual system
│   ├── language-switcher.php               # Language switcher components
│   ├── service-post-type.php               # Services CPT
│   ├── city-post-type.php                  # Cities CPT
│   ├── theme-options.php                   # Theme options panel
│   ├── gutenberg-blocks.php                # Custom Gutenberg blocks
│   ├── elementor-widgets.php               # Elementor widgets
│   ├── contact-form-7-multilingual.php     # CF7 translations
│   ├── header-function.php                 # Header functions
│   ├── home-page-function.php              # Homepage functions
│   └── footer-options.php                  # Footer functions
├── src/
│   ├── input.css           # TailwindCSS input
│   ├── output.css          # Compiled TailwindCSS
│   ├── rtl.css             # RTL-specific styles
│   ├── header.css          # Header styles
│   ├── footer.css          # Footer styles
│   └── language-switcher.css # Language switcher styles
├── template-parts/
│   ├── header-main.php     # Main header template
│   └── footer-main.php     # Main footer template
├── *.php                   # Page templates
├── functions.php           # Main theme functions
├── style.css               # Main stylesheet
├── tailwind.config.js      # TailwindCSS configuration
└── package.json            # Node.js dependencies
```

### Development Workflow

1. **Install Dependencies**:
   ```bash
   npm install
   ```

2. **Watch for Changes**:
   ```bash
   npm run watch
   ```

3. **Build for Production**:
   ```bash
   npm run build
   ```

### Hooks and Filters

#### Available Actions

```php
// Theme setup
add_action('after_setup_theme', 'custom_clearance_setup');

// Enqueue scripts
add_action('wp_enqueue_scripts', 'custom_clearance_scripts');

// Custom post types
add_action('init', 'custom_clearance_create_service_post_type');
add_action('init', 'custom_post_type_city');
```

#### Available Filters

```php
// Contact Form 7 translations
add_filter('wpcf7_form_elements', 'custom_clearance_translate_cf7_form');
add_filter('wpcf7_validation_error', 'custom_clearance_translate_cf7_validation_error');

// Logo class
add_filter('get_custom_logo', 'change_logo_class');

// Menu classes
add_filter('nav_menu_css_class', 'custom_primary_menu_li_flex_classes', 10, 4);
add_filter('nav_menu_link_attributes', 'custom_primary_menu_link_attributes', 10, 4);
```

### Adding Custom Functionality

1. **Create new include file** in `inc/` directory
2. **Require in functions.php**:
   ```php
   require_once get_template_directory() . '/inc/your-file.php';
   ```
3. **Follow WordPress coding standards**
4. **Use theme's translation functions** for multilingual support

## 📚 Usage Examples

### Basic Translation

```php
<!-- In template files -->
<h1><?php custom_clearance_e('hero_title_1'); ?></h1>

<!-- In PHP code -->
<?php
$title = custom_clearance_get_text('services_title');
echo $title;
?>
```

### Language Detection

```php
<?php
$current_lang = custom_clearance_get_current_language();
if ($current_lang === 'ar') {
    // Arabic-specific code
}
?>
```

### RTL Support

```php
<?php if (custom_clearance_is_rtl()): ?>
    <div class="rtl-content">
        <!-- RTL-specific content -->
    </div>
<?php endif; ?>
```

### Service Loop

```php
<?php
$services = new WP_Query(array(
    'post_type' => 'service',
    'posts_per_page' => -1
));

if ($services->have_posts()):
    while ($services->have_posts()): $services->the_post();
        $title = custom_clearance_get_service_title(get_the_title());
        $description = custom_clearance_get_service_description(get_the_title());
        ?>
        <div class="service-card">
            <h3><?php echo esc_html($title); ?></h3>
            <p><?php echo esc_html($description); ?></p>
        </div>
        <?php
    endwhile;
    wp_reset_postdata();
endif;
?>
```

### City Loop

```php
<?php
$cities = new WP_Query(array(
    'post_type' => 'city',
    'posts_per_page' => -1
));

if ($cities->have_posts()):
    while ($cities->have_posts()): $cities->the_post();
        $title = custom_clearance_get_city_title(get_the_title());
        $phone = get_post_meta(get_the_ID(), 'phone_number', true);
        ?>
        <div class="city-card">
            <h3><?php echo esc_html($title); ?></h3>
            <p><?php echo esc_html($phone); ?></p>
        </div>
        <?php
    endwhile;
    wp_reset_postdata();
endif;
?>
```

## 🔧 Troubleshooting

### Common Issues

#### Language Not Switching

**Problem**: Language switcher not working

**Solutions**:
1. Check if JavaScript is enabled
2. Clear browser cache and cookies
3. Check browser console for JavaScript errors
4. Verify language switcher CSS is loaded
5. Check if cookies are enabled

#### Content Not Translating

**Problem**: Some content remains in original language

**Solutions**:
1. Check if translation key exists in `inc/multilingual.php`
2. Verify the mapping function is called correctly
3. Clear any caching plugins
4. Check if content is hardcoded in templates
5. Verify language detection is working

#### RTL Layout Issues

**Problem**: Arabic text not displaying correctly

**Solutions**:
1. Ensure RTL CSS is loaded (`src/rtl.css`)
2. Check if `custom_clearance_is_rtl()` returns true
3. Verify Arabic font is available
4. Check CSS direction properties
5. Inspect element for RTL classes

#### Contact Form Not Translating

**Problem**: Contact Form 7 fields not translating

**Solutions**:
1. Ensure CF7 multilingual file is included
2. Check if filters are properly applied
3. Verify form field names match translation keys
4. Clear form cache
5. Check Contact Form 7 plugin is active

### Debug Mode

Enable debug mode by adding to `wp-config.php`:

```php
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
```

Debug functions:

```php
// Debug current language
echo 'Current Language: ' . custom_clearance_get_current_language();

// Debug translation
echo 'Translation: ' . custom_clearance_get_text('translation_key');

// Debug RTL
echo 'Is RTL: ' . (custom_clearance_is_rtl() ? 'Yes' : 'No');
```

### Performance Optimization

1. **Cache Translations**: Use WordPress transients
2. **Minify Assets**: Compress CSS/JS files
3. **Optimize Images**: Use WebP format
4. **CDN**: Use content delivery network
5. **Database**: Optimize database queries
6. **Lazy Loading**: Implement lazy loading for images

## 📖 Additional Documentation

For more detailed information, refer to:

- **[THEME_DOCUMENTATION.txt](THEME_DOCUMENTATION.txt)**: Complete theme documentation
- **[MULTILINGUAL.md](MULTILINGUAL.md)**: Detailed multilingual implementation guide
- **[QUICK_REFERENCE.md](QUICK_REFERENCE.md)**: Quick reference for functions and keys
- **[SECURITY.md](SECURITY.md)**: Security best practices

## 🆘 Support

### Getting Help

1. **Check Documentation**: Review this README and other documentation files
2. **WordPress Codex**: Check [WordPress Codex](https://codex.wordpress.org/) for general WordPress issues
3. **Theme Files**: Review theme file comments for specific implementations
4. **Debug Mode**: Enable debug mode to identify issues

### Reporting Issues

When reporting issues, please include:

1. WordPress version
2. PHP version
3. Theme version
4. Steps to reproduce
5. Expected vs actual behavior
6. Browser and device information
7. Error messages (if any)

### Feature Requests

For feature requests, please provide:

1. Detailed description
2. Use case
3. Expected behavior
4. Priority level

## 📝 Changelog

### Version 1.0.0

- Initial release
- Multilingual system (French, English, Arabic)
- Custom post types (Services, Cities)
- Contact Form 7 integration
- RTL support
- Theme options panel
- Responsive design
- SEO optimization
- TailwindCSS integration
- Custom Gutenberg blocks
- Elementor widgets support

## 📄 License

This theme is licensed under the **GPL v2 or later**.

```
Copyright (C) 2025 Customs Clearance Theme

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
```

## 👥 Contributing

Contributions are welcome! Please:

1. Follow WordPress coding standards
2. Test your changes thoroughly
3. Update documentation as needed
4. Submit pull requests with clear descriptions

## 🔗 Resources

- [WordPress Codex](https://codex.wordpress.org/)
- [Contact Form 7](https://contactform7.com/)
- [Elementor](https://elementor.com/)
- [TailwindCSS](https://tailwindcss.com/)
- [AOS Animation](https://michalsnik.github.io/aos/)

---

**Last Updated**: January 2025  
**Theme Version**: 1.0.0  
**WordPress Compatibility**: 5.0+  
**PHP Compatibility**: 7.4+
