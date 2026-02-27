# Go Vidnyan Sanshodhan Sanstha Website

## Project Overview

This project consists of a bilingual (Marathi/English) website for "गो विज्ञान संशोधन संस्था" (Go Vidnyan Sanshodhan Sanstha), a Pune-based NGO established in 2002 dedicated to cow science research and promoting sustainable livestock practices. The website showcases the organization's work, projects, research, and community initiatives.

## Project Structure

```
go-vidnyan/
├── dynamic_site/          # Laravel 12 dynamic website
├── static_site/           # Static HTML version
└── readme.md             # This documentation
```

## Major Changes Made

### 1. Project Restructuring and Professional Laravel Setup

**What was done:**

- Renamed `laravel_tempp` directory to `dynamic_site` for better naming convention
- Implemented professional Laravel folder structure with shared layouts
- Created `layouts/public.blade.php` as a shared layout for all public pages
- Moved all public blade templates from root `views/` to `views/pages/` directory
- Updated all routes in `routes/web.php` to use named routes pointing to `pages.*` views

**Why:**

- Professional Laravel applications use shared layouts to avoid code duplication
- Named routes provide better maintainability and URL generation
- Organized file structure improves scalability and developer experience
- Shared layout ensures consistent navigation and styling across all pages

### 2. Shared Layout Implementation

**What was done:**

- Created `layouts/public.blade.php` with:
  - Dynamic navigation with active state highlighting using `request()->is()`
  - Responsive mobile menu with hamburger toggle
  - Shared header/footer structure
  - Meta description support via `@yield('meta_description')`
  - Style and script stacking with `@push('styles')` and `@push('scripts')`
- Refactored all 11 public pages to extend the shared layout:
  - `pages/index.blade.php`
  - `pages/about.blade.php`
  - `pages/projects.blade.php`
  - `pages/lectures.blade.php`
  - `pages/research.blade.php`
  - `pages/nirmalya.blade.php`
  - `pages/awards.blade.php`
  - `pages/gallery.blade.php`
  - `pages/team.blade.php`
  - `pages/query.blade.php`
  - `pages/contact.blade.php`

**Why:**

- Eliminates ~100+ lines of duplicated HTML per page
- Ensures consistent branding and navigation
- Makes global changes (like navigation updates) apply to all pages instantly
- Improves maintainability and reduces code duplication

### 3. Static HTML Site Generation

**What was done:**

- Created `static_site/` directory with complete static HTML versions
- Generated 11 HTML files matching all public pages:
  - `index.html`, `about.html`, `projects.html`, `lectures.html`, `research.html`, `nirmalya.html`, `awards.html`, `gallery.html`, `query.html`, `team.html`, `contact.html`
- Copied all images from `dynamic_site/public/images/` with full directory structure
- Converted Blade syntax to plain HTML:
  - `{{ url('path') }}` → `path.html` or relative paths
  - `{{ asset('images/...') }}` → `images/...`
- Special handling for gallery page with hardcoded data from `GallerySeeder.php`

**Why:**

- Provides a lightweight, deployable version without server requirements
- Useful for CDNs, static hosting, or backup versions
- SEO-friendly static pages load faster
- Can be served via simple HTTP servers for testing

### 4. Gallery Mobile Optimization

**What was done:**

- **Mobile Column Fix**: Added `@media (max-width: 767px)` rule to force 3 columns on mobile/tablet screens
- **Text Overlay Removal**: Added `@media (max-width: 639px)` to hide `.gallery-overlay` completely on mobile
- **Dynamic Site**: Fixed duplicate CSS rules causing overlays to always display
- **Static Site**: Updated `gallery.html` with same mobile optimizations

**Why:**

- Mobile users couldn't see images due to obstructing text overlays
- 4-column layout was too cramped on small screens
- Ensures clean, image-focused mobile gallery experience
- Maintains desktop hover functionality while optimizing mobile UX

### 5. Navigation Enhancement and Consistency

**What was done:**

- **Desktop Navigation**: Added admin login icon between Gallery and Contact links
- **Mobile Navigation**: Enhanced mobile menu to match static site structure:
  - Added Query link
  - Added Admin login with icon and text
  - Added "विशेष प्रकल्प" (Special Projects) section with:
    - 📅 साप्ताहिक व्याख्याने (Weekly Lectures)
    - 🔬 संशोधन कार्य (Research Work)
    - ♻️ निर्माल्य प्रकल्प (Nirmalya Project)
- Updated route labels ("Projects" → "Work" in mobile to match static site)

**Why:**

- Provides consistent navigation experience across dynamic and static versions
- Admin access is easily discoverable for content management
- Special projects section highlights key organizational initiatives
- Mobile-first approach ensures all features are accessible on small screens

### 6. Technical Fixes and Performance

**What was done:**

- Cleared Laravel view cache (`php artisan view:clear`)
- Restarted development server to apply layout changes
- Removed duplicate CSS rules causing display issues
- Verified all routes return HTTP 200 status

**Why:**

- Laravel caches compiled views for performance, but changes to layouts require cache clearing
- Server restart ensures all changes are loaded fresh
- Duplicate CSS rules can cause unexpected behavior
- Status verification confirms all pages are working correctly

## Technical Stack

- **Backend**: Laravel 12, PHP 8.2+
- **Database**: SQLite with migrations and seeders
- **Frontend**: Tailwind CSS (CDN), Alpine.js 3.4.2
- **Authentication**: Laravel Breeze (admin only)
- **Email**: EmailJS integration for contact forms
- **Gallery**: Custom masonry layout with lightbox functionality
- **Fonts**: Inter + Tiro Devanagari Marathi (Google Fonts)

## File Structure Details

### Dynamic Site (`dynamic_site/`)

```
├── app/
│   ├── Http/Controllers/
│   │   ├── GalleryController.php
│   │   └── ...
│   └── Models/
│       ├── GalleryCategory.php
│       ├── GalleryImage.php
│       ├── GalleryVideo.php
│       └── User.php
├── database/
│   ├── migrations/
│   └── seeders/
│       ├── GallerySeeder.php
│       └── DatabaseSeeder.php
├── public/
│   └── images/          # All gallery and site images
├── resources/
│   ├── css/app.css
│   ├── js/
│   └── views/
│       ├── layouts/
│       │   ├── public.blade.php    # Shared public layout
│       │   └── admin.blade.php     # Admin layout
│       ├── pages/                  # All public pages
│       │   ├── index.blade.php
│       │   ├── gallery.blade.php
│       │   └── ...
│       └── partials/
│           └── cta.blade.php       # Reusable CTA component
├── routes/
│   └── web.php                     # All routes defined
└── vite.config.js
```

### Static Site (`static_site/`)

```
├── index.html              # Homepage
├── about.html             # About page
├── gallery.html           # Gallery with masonry layout
├── contact.html           # Contact form
├── images/               # All images (copied from dynamic)
└── [other pages].html    # All public pages as static HTML
```

## Gallery Features

- **Categories**: Projects, Research, Certificates, Agriculture, Nirmalya, Cows
- **Masonry Layout**: Responsive 3-4 column grid
- **Lightbox**: Full-screen image viewing with navigation
- **Mobile Optimized**: 3 columns, no text overlays on mobile
- **Video Integration**: YouTube embeds for video content
- **Admin Management**: Drag-and-drop reordering, category management

## How to Run

### Dynamic Site (Laravel)

```bash
cd dynamic_site
php artisan serve --host=0.0.0.0 --port=8001
```

- Visit: `http://localhost:8001`
- Admin panel: `http://localhost:8001/admin` (requires authentication)

### Static Site

```bash
cd static_site
python3 -m http.server 8002
# OR use any static file server
```

- Visit: `http://localhost:8002`

## Key Improvements Achieved

1. **Code Organization**: Eliminated code duplication with shared layouts
2. **Mobile Experience**: Optimized gallery and navigation for mobile devices
3. **Consistency**: Unified navigation and styling across all pages
4. **Performance**: Static version for fast loading and easy deployment
5. **Maintainability**: Centralized layout changes apply globally
6. **SEO**: Proper meta descriptions and semantic HTML structure
7. **Accessibility**: Responsive design and keyboard navigation support

## Development Notes

- All public pages use the shared `layouts.public` layout
- Gallery data is seeded from `GallerySeeder.php` for consistent content
- Admin routes are protected with authentication middleware
- Static site generation preserves all functionality except dynamic features
- Mobile navigation includes special projects section for organizational visibility
