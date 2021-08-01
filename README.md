## Local Installation
### Requirements
- PHP8
- composer (latest)
- npm v14.17.4
- docker (if using laravel Sail)

### Using Sail
- add `alias sail='[ -f sail ] && bash sail || bash vendor/bin/sail'` to end of .zshrc file (found at `~/.zshrc`) then run `source ~/.zshrc`
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
If you are not using Sail, To run the Web app, make sure npm run watch is running, then in a new terminal type in
```
php artisan serve
```

If you're using Sail, then this is taken care for you when you run `sail up`

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



