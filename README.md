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
    - post method
    - url : `api/get_movies`
- An endpoint to expose all movies in a category
    - post method
    - url : `api/get_movie_by_category`
    - parameter
        - int: `category_id`
- An endpoint to expose all movies with a specific tag
    - post method
    - url : `api/get_movie_by_tag`
    - parameter
        - int: `tag_id`
- An endpoint to expose all users
    - post method
    - url : `api/get_users`
- An endpoint to expose one single user’s details (with movies)
    - post method
    - url : `api/get_user_with_detail`
    - parameter
        - int: `user_id`
