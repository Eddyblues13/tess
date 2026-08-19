# Boostelix

Laravel 12 application (Tes Options investment / stock trading platform) with a public
site, a user dashboard, and an admin panel.

## Requirements

- PHP 8.2+ (developed against 8.4) with `pdo_sqlite` (or `pdo_mysql`), `mbstring`, `gd`, `zip`
- Composer 2
- Node.js 20+ / npm

## Local setup

```bash
# 1. PHP dependencies
composer install            # or: unzip vendor.zip -d .  (vendored snapshot)

# 2. Environment
cp .env.example .env
php artisan key:generate

# 3. Database — .env ships with SQLite so no DB server is needed
touch database/database.sqlite
php artisan migrate --seed

# 4. Frontend assets
npm install
npm run build               # or: npm run dev  for hot reload

# 5. Storage symlink (public/storage -> storage/app/public)
php artisan storage:link

# 6. Serve
php artisan serve           # http://localhost:8000
```

`composer dev` runs the server, queue listener and Vite together.

### Using MySQL instead of SQLite

`.env` has the MySQL block commented out. Uncomment it, comment the two
`DB_CONNECTION=sqlite` / `DB_FOREIGN_KEYS` lines, create the database, and
re-run `php artisan migrate --seed`.

### Seeded accounts

| Role  | Email             | Password    |
|-------|-------------------|-------------|
| Admin | admin@mail.com    | 12345678    |
| User  | test@example.com  | password    |

Change the admin password before deploying anywhere public.

### Environment variables worth noting

- `FRONTEND_URL` — public site URL used when building links (`config/frontend.php`)
- `FLUTTERWAVE_PUBLIC_KEY` / `FLUTTERWAVE_SECRET_KEY` / `FLUTTERWAVE_ENCRYPTION_KEY` —
  payment credentials (`config/services.php`); blank locally, so payment calls fail until set
- `MAIL_MAILER=log` writes outgoing mail to `storage/logs/laravel.log` instead of sending

Stock quotes and market news come from free, keyless Yahoo Finance endpoints and
fall back to static data if unreachable.

## Tests

```bash
php artisan test
```

---

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
