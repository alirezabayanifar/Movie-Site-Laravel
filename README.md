# 250 Top Movie => get them from imdb api

## Introduce
in this project we get new Movies or Series from api in imdb and put them into our database and show them in our site.

## How it works?
i defined two `commands` in Console, so when i call them they go and fetch data from api in imdb and put them in my
database.

The signature of Commands is like below:
```
    php artisan get:movie
```
and for series :
```
    php artisan get:series
```
