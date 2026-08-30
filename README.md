# AICYBER 2026 - PHP Website

A professional, modular PHP website for the AICYBER 2026 International Conference on AI-Driven Cybersecurity.

## Overview

This is a converted version of the original HTML/CSS/JavaScript website, restructured for PHP with:
- **Modular Template System**: Each section as a separate PHP include
- **Centralized Configuration**: All conference data in `config.php`
- **Helper Functions**: Reusable PHP utilities in `helpers.php`
- **Clean Architecture**: Organized folder structure for easy maintenance

## Project Structure

```
aicyber2026-php/
├── index.php                      # Main entry point
├── includes/
│   ├── config.php                 # Configuration & constants
│   ├── helpers.php                # Helper functions
│   ├── navigation.php             # Navigation component
│   ├── hero.php                   # Hero section
│   ├── about.php                  # About section
│   ├── tracks.php                 # Tracks/Call for Papers
│   ├── dates.php                  # Important Dates
│   ├── details.php                # Conference Details
│   ├── registration.php           # Registration & Pricing
│   ├── venue.php                  # Venue Information
│   ├── sponsors.php               # Partners/Sponsors
│   ├── committee.php              # Committee Members
│   ├── contact.php                # Contact Information
│   └── footer.php                 # Footer
├── assets/
│   ├── css/
│   │   └── styles.css             # All styling (unchanged from original)
│   └── js/
│       └── script.js              # All JavaScript (unchanged from original)
├── images/                        # Conference logos and images
├── .htaccess                      # Apache configuration (optional)
└── README.md                      # This file
```

## Installation & Setup

### Requirements
- PHP 7.0 or higher
- Web server (Apache, Nginx, etc.)
- Images folder with logo files (IEEE.png, IEEE_MS.png, etc.)

### Steps

1. **Copy Project Files**
   - Upload all files to your web server root or a subdirectory
   - Ensure write permissions on `images/` folder

2. **Add Logo Files**
   - Place your logo files in the `images/` folder:
     - `IEEE.png`
     - `IEEE_MS.png`
     - `IEEE_CS.png`
     - `IEEE_PC.png`
     - `CAS.png`
     - `SAEC.png`

3. **Configure (if needed)**
   - Edit `includes/config.php` to update:
     - Conference dates and times
     - Contact information
     - Coordinator details
     - URLs and links

4. **Test Locally**
   ```bash
   php -S localhost:8000
   ```
   Visit `http://localhost:8000` in your browser

5. **Deploy to Server**
   - Upload files via FTP, SSH, or control panel
   - No database setup required (static site)

## Key Features

### 1. Dynamic Data from Config
All conference information is centralized in `includes/config.php`:
```php
define('CONF_DATE_START', 'December 28, 2026');
define('CONF_EMAIL', 'saec@saec.ac.in');

$coordinators = array(
    array('name' => 'Mr. R. Aravinth Kumar', ...)
);
```

### 2. Reusable Helper Functions
```php
getCountdownData()           # Calculate countdown timer
formatCountdown($val, $len)  # Format with zero-padding
renderTrackCard($track)      # Generate track cards
sanitize($text)              # Prevent XSS attacks
renderBadge($icon, $text)    # Create badge elements
```

### 3. Modular Section Templates
Each section is in its own file:
- Include: `<?php include 'includes/hero.php'; ?>`
- Modify: Edit just one section without touching others
- Reuse: Sections can be rearranged or duplicated easily

### 4. Server-Side Processing
PHP handles:
- Dynamic countdown calculations
- Safe output encoding (prevents XSS)
- Configuration centralization
- Easy data updates without touching HTML

## Customization Guide

### Update Conference Dates
Edit `includes/config.php`:
```php
define('CONF_DATE_START', 'December 28, 2026');
define('CONF_DATE_TIMESTAMP', 'December 28, 2026 09:00:00 GMT+0530');
```

### Add/Modify Tracks
Edit `includes/config.php`:
```php
$tracks = array(
    array(
        'number' => '07',
        'title' => 'Your New Track',
        'topics' => array('Topic 1', 'Topic 2', ...)
    )
);
```

### Update Committee Members
Edit `includes/committee.php` or `includes/config.php` (if stored there)

### Change Contact Information
Edit `includes/config.php`:
```php
define('CONF_EMAIL', 'newemail@domain.com');
define('CONF_PHONE_1', '+91 XXXXXXXXXX');
```

### Add New Section
1. Create `includes/newsection.php`
2. Add include in `index.php`: `<?php include 'includes/newsection.php'; ?>`
3. Add navigation link if needed in `includes/navigation.php`

## Security Considerations

✅ **Already Implemented:**
- `sanitize()` function escapes all user-facing output
- No database queries (no SQL injection risk)
- No user input processing (no form submissions)

⚠️ **If Adding Forms:**
- Always sanitize inputs with `htmlspecialchars()`
- Validate email addresses with `filter_var()`
- Use CSRF tokens for forms
- Implement rate limiting

## Browser Compatibility

- Chrome/Edge 90+
- Firefox 88+
- Safari 14+
- Mobile browsers (responsive design via CSS)

## Performance Notes

- No database queries → Fast page loads
- CSS and JS unchanged from original
- Uses Google Fonts CDN (cached in browser)
- Font Awesome icons via CDN

## JavaScript Functionality

The original `script.js` is preserved and includes:
- **Countdown Timer**: Updates every second
- **Mobile Menu Toggle**: Responsive navigation
- **Accordion Controls**: Expandable sections
- **Smooth Scrolling**: Anchor link navigation
- **Image Fallbacks**: Graceful handling of missing images

## Deployment Checklist

- [ ] Upload all PHP files to server
- [ ] Ensure `includes/` directory exists
- [ ] Upload logo images to `images/` folder
- [ ] Test all navigation links
- [ ] Verify countdown timer works
- [ ] Test responsive design on mobile
- [ ] Check all external links (CMT, IEEE, etc.)
- [ ] Verify email addresses and contact info

## Support & Maintenance

### Common Issues

**Q: PHP files showing as plain text**
- A: Ensure PHP is installed and enabled on server

**Q: Images not loading**
- A: Check `images/` folder path and file names (case-sensitive on Linux)

**Q: Countdown not updating**
- A: JavaScript must be enabled; check browser console for errors

### Regular Updates

- Update `CONF_DATE_TIMESTAMP` as conference approaches
- Keep coordinator contact info current
- Review and update speaker/committee lists
- Update registration fees closer to event
- Maintain links to external sites (CMT, IEEE, etc.)

## License & Credit

- Original HTML/CSS/JS: AICYBER 2026 Team
- PHP Conversion: Claude AI Assistant
- Fonts: Google Fonts (Fraunces, Inter, IBM Plex Mono)
- Icons: Font Awesome 6.5.1

---

**Questions or Issues?** Contact the organizing committee via the information in `includes/config.php`
