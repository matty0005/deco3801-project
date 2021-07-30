## Local Installation

-   create a local mysql database called AvailabilityPlanner
-   composer install
-   npm install
-   npm run watch
-   cp .env.example .env
-   php artisan key:generate
-   php artisan migrate:fresh --seed

Once this is complete, populate the .env file

# Running
To run the Web app, make sure npm run watch is running, then in a new terminal type in
```
php artisan serve
```



