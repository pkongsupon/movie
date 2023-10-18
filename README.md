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

- An endpoint to expose all movies
    - POST method
    - URL : `api/get_movies`
- An endpoint to expose all movies in a category
    - POST method
    - URL : `api/get_movie_by_category`
    - Parameter
        - int: `category_id`
- An endpoint to expose all movies with a specific tag
    - POST method
    - URL : `api/get_movie_by_tag`
    - Parameter
        - int: `tag_id`
- An endpoint to expose all users
    - POST method
    - URL : `api/get_users`
- An endpoint to expose one single user’s details (with movies)
    - POST method
    - URL : `api/get_user_with_detail`
    - Parameter
        - int: `user_id`
