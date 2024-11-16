# Rent It

A home rental website 

## Installation

```
git clone  https://github.com/rezwanakarim/rent-it.git
```
```
copy .env.example .env
```
Set up database as you want in `.env`

```
composer update
php artisan key:generate
php artisan migrate
php artisan db:seed
php artisan serve
```

#### Important
Spatie's Media Library used for image manipulation. After following the above instruction use:
`php artisan vendor:publish` and publish the `Spatie\MediaLibrary\MediaLibraryServiceProvider` and run
`php artisan migrate` again.
Make sure in your env `APP_URL` is matching with the port you `serve` with. like `http://localhost:8000`