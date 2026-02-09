# Mason Grandusky Laravel Portfolio Website

A professional portfolio website built with Laravel showcasing Mason Grandusky's web development and security engineering expertise.

## Overview

This Laravel application features:
- Professional portfolio design
- Responsive layout (mobile-first approach)
- Skills and expertise showcase
- Project portfolio
- Client testimonials
- Professional experience highlights

## Features

- **Modern Laravel Framework**: Built on Laravel 12.x
- **Responsive Design**: Works seamlessly on desktop, tablet, and mobile devices
- **SEO Optimized**: Proper meta tags and semantic HTML structure
- **Clean Architecture**: Follows Laravel best practices and MVC pattern
- **Professional Styling**: Modern CSS3 with smooth animations and transitions

## Requirements

- PHP >= 8.2
- Composer
- Node.js & NPM (optional, for asset compilation)

## Installation

1. Clone the repository:
```bash
git clone https://github.com/mgrandusky/masongrandusky-laravel.git
cd masongrandusky-laravel
```

2. Install PHP dependencies:
```bash
composer install
```

3. Copy the environment file:
```bash
cp .env.example .env
```

4. Generate application key:
```bash
php artisan key:generate
```

5. Configure your `.env` file with appropriate settings (database, etc.)

6. Run the development server:
```bash
php artisan serve
```

7. Visit `http://localhost:8000` in your browser

## Project Structure

```
├── app/
│   └── Http/
│       └── Controllers/
│           └── HomeController.php    # Main controller
├── public/
│   ├── css/
│   │   └── style.css                 # Main stylesheet
│   └── js/
│       └── app.js                    # JavaScript interactions
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php         # Main layout template
│       └── home.blade.php            # Home page view
└── routes/
    └── web.php                       # Web routes
```

## Content Sections

The portfolio includes the following sections:

1. **Hero/About Section**: Professional headline and introduction
2. **Skills & Expertise**: Technical skills in web development and security
3. **Professional Highlights**: Key achievements and capabilities
4. **Experience**: Work history at major companies
5. **Project Portfolio**: Featured projects with links
6. **Client Testimonials**: Client feedback and reviews
7. **Professional Approach**: Development methodology

## Technologies Used

- **Backend**: Laravel 12.x, PHP 8.3
- **Frontend**: HTML5, CSS3, JavaScript
- **Templating**: Blade Templates
- **Styling**: Custom CSS with CSS Variables
- **Design**: Responsive, mobile-first approach

## Customization

### Updating Content

All portfolio content is managed in the `HomeController`:
```php
app/Http/Controllers/HomeController.php
```

### Styling

Modify the styles in:
```css
public/css/style.css
```

### Layout

Edit the main layout template:
```blade
resources/views/layouts/app.blade.php
```

## Development

For development with live reload:
```bash
php artisan serve
```

## Production Deployment

1. Set `APP_ENV=production` in `.env`
2. Set `APP_DEBUG=false` in `.env`
3. Configure your web server (Apache/Nginx)
4. Run optimizations:
```bash
composer install --optimize-autoloader --no-dev
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

## License

This project is proprietary and belongs to Mason Grandusky.

## Contact

For inquiries about web development services, please visit the website or contact through the provided channels.
