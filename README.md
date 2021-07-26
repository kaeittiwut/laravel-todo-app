# laravel-todo-app

In this project, I built a Todo app when I studied Vue.js that uses the API service provided by Laravel with instructor Andre Madarang. This will give me a practical approach to learning how to use Laravel API, Passport, Authentication, Validation and etc.

Official Project Repository from instructor Andre Madarang. (https://github.com/drehimself/todo-laravel)

> Using "php artisan serve", it uses a PHP built-in webserver which is single-threaded process, So PHP applications will stall or freezing if a request is blocked. When making calls to itself the thread blocked waiting for its own reply.
>
> The solution is to either separate the providing application and consuming application into their own instance or run it on a multi-threaded webserver such as Apache or NGINX. Or if you are looking for a quick fix to test your updates - you can get this done by opening up two terminal.

## Install all dependencies and migrate database

```bash
$ cp .env.example .env

$ composer install

$ php artisan key:generate

$ php artisan migrate --seed

$ php artisan serve
```

## Set Passport client_id and client secret in .env file

```
PASSPORT_LOGIN_ENDPOINT=http://localhost:8001/oauth/token
PASSPORT_CLIENT_ID= ??
PASSPORT_CLIENT_SECRET= ??
```

## Run second terminal for Passport Oauth2 [port:8001]

```
$ php artisan serve --port=8001
```

## Running Migrations

Run all of your outstanding migrations with seeder:

```bash
$ php artisan migrate --seed
```

If you would like to see which migrations have run thus far:

```bash
$ php artisan migrate:status
```

Roll back the latest migration operation. This command will rolls back the last "batch" of migrations, which may include multiple migration files:

```bash
$ php artisan migrate:rollback
```

Roll back all of your application's migrations:

```bash
$ php artisan migrate:reset
```

If you want to drop all table before seeding, you can use this command:

```bash
$ php artisan migrate:fresh --seed
```

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

-   [Simple, fast routing engine](https://laravel.com/docs/routing).
-   [Powerful dependency injection container](https://laravel.com/docs/container).
-   Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
-   Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
-   Database agnostic [schema migrations](https://laravel.com/docs/migrations).
-   [Robust background job processing](https://laravel.com/docs/queues).
-   [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

-   **[Vehikl](https://vehikl.com/)**
-   **[Tighten Co.](https://tighten.co)**
-   **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
-   **[64 Robots](https://64robots.com)**
-   **[Cubet Techno Labs](https://cubettech.com)**
-   **[Cyber-Duck](https://cyber-duck.co.uk)**
-   **[Many](https://www.many.co.uk)**
-   **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
-   **[DevSquad](https://devsquad.com)**
-   **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
-   **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
