
# Requirements
- PHP 7.3 or higher
- PHP 8.0 or higher

# Installation

#### Install composer dependencies
````
~ composer install
````

#### Create .env file
````
~ cp .env.example .env
````

#### Generate application key
````
~ php artisan key:generate
````

#### Install and compile local resources
````
~ npm install && npm run prod
````

#### Create database file
````
~ touch database/database.sqlite
````

#### Run migrations and seed the database
````
~ php artisan migrate --seed
````

#### Start development server
````
~ php artisan serve
````
