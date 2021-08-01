## Local Installation
### Requirements
- PHP8
- composer (latest)
- npm v14.17.4
- docker (if using laravel Sail)

### Using Sail
- add `alias sail='[ -f sail ] && bash sail || bash vendor/bin/sail'` to end of .zshrc file (found at `~/.zshrc`)
- `cp .env.example .env`
- `composer install`
- `sail up`
- `sail php artisan key:generate`
- `sail php artisan migrate:fresh --seed`



### Not using Sail
-   create a local mysql database called DecoDB
-   `composer install`
-   `npm install`
-   `npm run watch`
-   `cp .env.example .env`
-   `php artisan key:generate`
-   `php artisan migrate:fresh --seed`

Once this is complete, populate the .env file

# Running
To run the Web app, make sure npm run watch is running, then in a new terminal type in
```
php artisan serve
```

## Test Users
|  Username             |  Password  |
| --------------------- | -----------|
| test@example.com      | password   |



