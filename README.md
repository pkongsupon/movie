## Movie API

## Installing

install with composer : `composer install`

## Database

- Generating Database
    - create database : `php artisan mysql:createdb`
    - migrate database : `php artisan migrate`
    - mock up fake data : `php artisan db:seed`
- Copy Database
    - mock database in folder `mock_database`

## API

- An endpoint to expose all movies : `api/get_movies`
- An endpoint to expose all movies in a category : `api/get_movie_by_category`
- An endpoint to expose all movies with a specific tag : `api/get_movie_by_tag`
- An endpoint to expose all users : `api/get_users`
- An endpoint to expose one single user’s details (with movies) : `api/get_user_with_detail`
