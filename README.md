# Iproyal_task

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/master)

Clone the repository

```
git clone git@github.com:boyziusas/Iproyal_task.git
```

Switch to the repo folder

```
cd Iproyal_task
```

Install all the dependencies using composer

```
composer install
```

Copy the example env file and make the required configuration changes in the .env file

```
cp .env.example .env
```

Generate a new application key

```
php artisan key:generate
```

Run the database migrations (**Set the database connection in .env before migrating**)

```
php artisan migrate
```

Start the local development server

```
php artisan serve
```

You can now see the server running at http://127.0.0.1:8000

**(Also in the project there is a docker-compose.yml file that you can use to run this project with docker)**

And now you can test these endpoints:

```

POST: http://localhost:8080/api/orders
{
    "country": "de",
    "proxy_count": 75,
    "title": "firstorder"
}

GET: http://localhost:8080/api/orders

GET: http://localhost:8080/api/orders/{orderNumber}

```


**TL;DR command list**

```
git clone git@github.com:USER/PROJECT-NAME.git
cd PROJECT-NAME
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve 
```

**Make sure you set the correct database connection information before running the migrations**

```
php artisan migrate
php artisan serve
```

## Database seeding

**Populate the database with seed data with relationships. This can help you to quickly start testing using it with ready content.**

Open the DatabaseSeeder and set the property values as per your requirement

```
database/seeds/DatabaseSeeder.php
```

Run the database seeder and you're done

```
php artisan db:seed
```

***Note*** : It's recommended to have a clean database before seeding. You can refresh your migrations at any point to clean the database by running the following command

```
php artisan migrate:refresh
```

## Testing

You can run tests via phpunit

```
/vendor/bin/phpunit tests/Unit
```

In addition to the phpunit command, you may use the test Artisan command to run your tests. The Artisan test runner provides more information regarding the test that is currently running and will automatically stop on the first test failure

```
php artisan test
```

## Folders

- `app` - Contains the core code for the application
- `app/Http` - Contains controllers, middleware, resources and form requests
- `app/Models` - Contains all of Eloquent model classes
- `app/Providers` - Contains all of the service providers for the application
- `config` - Contains all of the application configuration files
- `database` - Contains database migrations, model factories and seeds
- `public` - Contains the index.php file, which is the entry point for all requests entering application and configures autoloading
- `resources` - Contains views as well as raw, un-compiled assets such as CSS or JavaScript
- `routes` - Contains all of the route definitions for application
- `storage` - Contains logs, compiled blade templates, file based sessions, file caches and other files generated by the framework
- `tests` - Contains automated tests
- `vendor` - Contains composer dependencies

## Environment variables

- `.env` - Environment variables can be set in this file

***Note*** : You can quickly set the database information and other variables in this file and have the application fully working.
