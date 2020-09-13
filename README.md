# Okta Laravel JWT Demonstration

This repository is an example of adding JWT authentication using Okta to a Laravel API.

## Local development

Using Docker:

- Clone this repo to your local machine
- Install the packages: `docker run -v $(pwd):/app --rm composer install`
- Build the image: `docker build -t laravel-7 .`
- Add the `OKTA_` variables to your `.env` file.
- Set `DB_CONNECTION=sqlite` in your `.env` file.
- Run migrations: `docker run -v $(pwd):/var/www/html -it --rm laravel-7 php artisan migrate`
- Seed the database: `docker run -v $(pwd):/var/www/html -it --rm laravel-7 php artisan db:seed`
- Run with volume: `docker run -v $(pwd):/var/www/html -d --name=laravel-7 --rm -p 8000:80 laravel-7`

View the app at `localhost:8000`

## Endpoints

- GET `/api/locations` - Get all the locations in the database
- POST `/api/locations` - Add a new location to the database
- DELETE `/api/locations/:id` - Delete a location from the database

