# Go Vidnyan Project Setup Instructions

Complete step-by-step guide for setting up the project on a fresh machine.

## Prerequisites
- PHP 8.2+
- Composer
- Node.js & npm
- SQLite (or configure your database in .env)

## Setup Commands (Run in Order)

### 1. Navigate to the dynamic_site directory
```bash
cd dynamic_site
```

### 2. Install PHP Dependencies
```bash
composer install
```
This downloads all Laravel packages and dependencies defined in `composer.json`.

### 3. Create Environment Configuration
```bash
cp .env.example .env
```
Creates a `.env` file with default configuration.

### 4. Generate Application Encryption Key
```bash
php artisan key:generate
```
Generates `APP_KEY` required for Laravel encryption. This key will be automatically added to `.env`.

### 5. Create Database Tables (Run Migrations)
```bash
php artisan migrate
```
Creates all necessary database tables (users, cache, jobs, gallery, etc.). If prompted about production environment, answer with `--force` flag:
```bash
php artisan migrate --force
```

### 6. (Optional) Populate Sample Data
Run this only if you want sample admin user and gallery data:
```bash
php artisan db:seed
```

**Sample Admin Credentials:**
- Email: `admin@govidnyan.org`
- Password: `admin123`

### 7. Install Frontend Dependencies
```bash
npm install
```
Installs Node.js packages for frontend assets (Vite, Tailwind CSS, etc.).

### 8. (Optional) Fix npm Vulnerabilities
```bash
npm audit fix
```
Fixes any security vulnerabilities in npm packages.

### 9. Start the Development Server
```bash
php artisan serve --host=127.0.0.1 --port=8000
```
Starts the Laravel development server at `http://127.0.0.1:8000`.

---

## Quick Setup Script (Copy & Paste All Commands)

```bash
cd dynamic_site
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --force
php artisan db:seed
npm install
npm audit fix
php artisan serve --host=127.0.0.1 --port=8000
```

---

## Alternative: Start Both Dev Servers (Optional)

If you want frontend asset watching with Vite:

**Terminal 1 (Laravel Server):**
```bash
cd dynamic_site
php artisan serve --host=127.0.0.1 --port=8000
```

**Terminal 2 (Vite Dev Server):**
```bash
cd dynamic_site
npm run dev
```

Then visit: `http://127.0.0.1:8000`

---

## Troubleshooting

### Problem: "No application encryption key has been specified"
**Solution:** Run `php artisan key:generate`

### Problem: "Failed opening required vendor/autoload.php"
**Solution:** Run `composer install`

### Problem: Database errors
**Solution:** Run `php artisan migrate --force`

### Problem: vite: command not found
**Solution:** Run `npm install`

### Problem: Port 8000 already in use
**Solution:** Use a different port:
```bash
php artisan serve --host=127.0.0.1 --port=8001
```

---

## Important Notes

1. ✅ **Never commit the `.env` file** to git - it's already in `.gitignore`
2. ✅ **Always run `composer install`** after pulling new code with dependency changes
3. ✅ **Always run `npm install`** after pulling new code with npm package changes
4. ✅ **Run `php artisan migrate`** after pulling migrations from other developers
5. ✅ **Keep `composer.lock` and `package-lock.json` committed** - they ensure consistent dependency versions

---

## Project Structure

```
dynamic_site/
├── app/              # Laravel application code
├── database/         # Migrations and seeders
├── resources/        # Views and assets
├── routes/           # API and web routes
├── public/           # Public files and images
├── storage/          # Logs and cache
├── config/           # Configuration files
├── vendor/           # PHP dependencies (auto-generated, not in git)
├── node_modules/     # JS dependencies (auto-generated, not in git)
├── .env              # Environment config (create from .env.example)
├── .env.example      # Example environment file
├── composer.json     # PHP dependencies list
├── composer.lock     # Locked PHP dependency versions
├── package.json      # JS dependencies list
└── package-lock.json # Locked JS dependency versions
```

---

## Default Admin Access

After running `php artisan db:seed`:
- **Login URL:** `http://127.0.0.1:8000/login`
- **Email:** `admin@govidnyan.org`
- **Password:** `admin123`

---

**For any issues, check the error logs:**
```bash
tail -100 storage/logs/laravel.log
```
