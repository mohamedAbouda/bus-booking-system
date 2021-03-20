# Bus Booking System

Bus booking System is a simple app to book trip seats

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Prerequisites

What things you need to install the software and how to install them

```
PHP >= 7.3
```
```
Composer
```
```
Docker
```
```
Postman
```


### Installing

```
git clone https://github.com/mohamedAbouda/bus-booking-system.git
```
```
cd bus-booking-system
```
```
composer install
```
```
php artisan migrate
```
```
php artisan db:seed
```
```
php artisan key:generate
```
```
php artisan passport:install
```
```
docker-compose up -d
```
```
php artisan serve
```
### Installing

- after you running the seeder there will be (buses, trip, seats, routes and user in your database) so , you can book directly or check for seat
- this project contains 4 mains APIs (register, login, check seats availability and book trip seat).
- import the 2 postman files (collection file and enviroment file) and update them with your correct values , don't forget to update the bearer token with your token after registered or logged in successfully.

