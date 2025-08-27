# Consoles.dev

Add new consoles in `app/Console.php`

### Installation 

1. Clone the repository locally.
2. Install dependencies with `composer install`.
3. Copy `.env.example`to `.env` and modify its contents to reflect your local environment.
4. Generate an application key with `php artisan key:generate`.
5. Install frontend dependencies with `npm install`.
6. If you're not using a tool like Valet or Herd, configure a web server, such as the built-in PHP web server, to serve the site using the `public` directory as the document root: `php -S localhost:8080 -t public`.
7. Run tests with `php artisan test`.
