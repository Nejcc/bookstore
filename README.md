
## Tutorial

Create a simple book store application

## Requirements
PHP 7.1+
Laravel 5.8
Vue 2.0
PHPUnit 7+

## setup

* git clone https://github.com/Nejcc/bookstore.git bookstore
* composer create-project --prefer-dist laravel/laravel bookstores "5.8.*"
* php artisan make:auth
* npm install
* composer require laravel/telescope  
    * (if you like u can run only on dev with flag --dev)
* create database/database.sqlite
    * test connection
* .env change DB_CONECTION to sqlite  and delete other rows for DB part
* php artisan telescope:install
* php artisan migrate
* npm run dev    -- or ( npm run watch)
    * if you have any trouble delete "node_modules" folder and try again with npm install - this sometime solve the problem
* php artisan serve --port 81

## Test Auth with predefined user
* php artisan make:seeder UsersTableSeeder
    * in DatabaseSeeder uncomment $this->call(UsersTableSeeder::class);
* Add code in seeder this time use DB instead User::class
* php artisan migrate:refresh --seed
* try to login via url /login
    * if you can then move to next step
    
## Step 1
##### The idea is to create books resource that contain all books    
* php artisan make:model Models/Book -a
    * this will create [controller, model, migration, factory] for you
*
## TDD
* php artisan make:test Http/Controllers/Api/BooksController




## License

The project is based on  [MIT license](https://opensource.org/licenses/MIT).
