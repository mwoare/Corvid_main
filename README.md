# Corvid Tax LLC Website

A professional services website for Corvid Tax LLC, an accounting firm specializing in tax return preparation and tax representation services.

## Features

- **Homepage** - Hero section with company introduction and service overview
- **Services Page** - Detailed information about Tax Return Preparation and Tax Representation services
- **About Us Page** - Company mission, credentials, and why choose Corvid Tax LLC
- **Contact Us Page** - Contact form and company contact information
- **Client Portal** - Placeholder page for future client portal functionality

## Technology Stack

- **PHP** - Server-side scripting (pure PHP, no framework)
- **Bootstrap 5** - Responsive CSS framework
- **Custom CSS** - Brand-specific styling with Steller's Jay logo color scheme
- **JavaScript** - Form validation and interactive features

## Project Structure

```
corvidtax/
├── index.php              # Homepage
├── services.php           # Services page
├── about.php              # About us page
├── contact.php            # Contact us page
├── portal.php             # Client portal (placeholder)
├── includes/
│   ├── header.php         # Site header with navigation
│   ├── footer.php         # Site footer
│   └── config.php         # Site configuration and constants
├── assets/
│   ├── css/
│   │   └── style.css      # Custom styles
│   ├── js/
│   │   └── main.js        # Custom JavaScript
│   └── images/
│       └── logo.png       # Steller's Jay logo
└── README.md              # Project documentation
```

## Setup Instructions

1. **Prerequisites**
   - XAMPP (or similar PHP development environment)
   - PHP 7.4 or higher
   - Web server (Apache)

2. **Installation**
   - Place the project files in your web server directory (e.g., `C:\xampp\htdocs\corvidtax`)
   - Ensure the `includes/` and `assets/` directories are properly created

3. **Configuration**
   - Edit `includes/config.php` to update:
     - Site URL (currently set to `http://localhost/corvidtax`)
     - Company contact information (email, phone, address)
     - Navigation items if needed

4. **Logo Setup**
   - Place your Steller's Jay logo file as `assets/images/logo.png`
   - Recommended size: 200x200px or larger (will be scaled as needed)

5. **Access the Website**
   - Start XAMPP Apache server
   - Navigate to `http://localhost/corvidtax` in your browser

## Customization

### Colors
The color scheme is defined in `assets/css/style.css` using CSS variables:
- `--primary-blue`: #0066cc
- `--navy-blue`: #003366
- `--medium-blue`: #4a90e2
- `--light-blue`: #e6f2ff

### Contact Form
The contact form in `contact.php` currently shows a success message on submission. To enable actual email sending:
1. Configure PHP mail settings in `php.ini`
2. Update the form handling code in `contact.php` to use `mail()` function or a library like PHPMailer

### Client Portal
The client portal page (`portal.php`) is currently a placeholder. Future enhancements could include:
- User authentication
- Document upload/download
- Secure messaging
- Tax return status tracking

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## License

Copyright © 2024 Corvid Tax LLC. All rights reserved.

## Support

For questions or support, please contact:
- Email: info@corvidtax.com
- Phone: (555) 123-4567

