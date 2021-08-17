## Local Installation
### Requirements
- PHP8
- composer (latest)
- npm
- node v14.17.4 
- docker (if using laravel Sail)

### Setting up
-   create a local mysql database called DecoDB
-   `composer install`
-   `npm install`
-   `npm run watch`
-   `cp .env.example .env`
-   `php artisan key:generate`
-   `php artisan migrate:fresh --seed`

Once this is complete, populate the .env file

# Running
```
php artisan serve
```

```
npm run watch
```

# Commiting code
Please note before commiting code - especially when to staging or main branch, you need to run 
```
npm run prod
```
This builds all the assets for the server


## Test Users
|  Username             |  Password  |
| --------------------- | -----------|
| test@example.com      | password   |



