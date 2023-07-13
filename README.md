# Zap-map Code Assessment

A test assessment wherein I create an API

```
/get-locations/{latitude}/{longitude}/{radius}
```

and the API will return a list of locations that are within the specified radius.

## Setup

First is you need to update .env and provide your database credentials

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=zap_map
DB_USERNAME=root
DB_PASSWORD=
```

After you confirm that the app is connected to your databse, you can now run the migration command

```
php artisan migration
```

Dont forget to run the composer command install as well

```
composer install
```

Then please run this command to import locations to the database

```
php artisan import:locations
```

After that you can now run the application

```
php artisan serve
```

Great! You can now do the tests by using this URL Example: `http://127.0.0.1:8000/get-location/51.475603934275675/-2.3807167145198114/100`

## Authors

-   [@captainmio](https://www.github.com/captainmio)
