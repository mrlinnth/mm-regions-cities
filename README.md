# mm-regions-cities

API for Myanmar regions and cities data

## Notes

Created for Laravel 6.0 and above. A very simple and basic package that provides APIs to get Regions and Cities from Myanmar country. I am sure anyone with basic Laravel and package knowledge will understand (or anyone with PHP experience).

After installation you can retrieve the data by REST APIs. By default, the data are retrieved from Json files. However you can change the setting in config and try to retrieve from database.

---

## Installation

1. Run `composer require mrlinnth/mm-regions-cities`

2. Run `php artisan vendor:publish --tag=mmrc`

3. Done

**To retrieve data from database**

4. Run `php artisan migrate`

5. Import the two csv files found in your `storage/app/vendor/mmrc`

6. Update `config/mmrc.php` with `'use_json' => false`

7. Run `php artisan config:cache`

## Usage

1. Access `{APP_URL}/api/mmrc` to get all data

2. Access `{APP_URL}/api/mmrc/regions` to get all regions

3. Access `{APP_URL}/api/mmrc/regions/{region_id}` to get specific region data

4. Access `{APP_URL}/api/mmrc/cities` to get all cities

5. Access `{APP_URL}/api/mmrc/cities/{city_id}` to get specific city data

---

### To Do

[] vuejs dropdown component
[] CRUD for city

### Do not want a Laravel package

- there are csv files and json files in `publishable` folder. Download and use as you like.

### Do not want to use Laravel 6.0

- Fork and change the illuminate version in `composer.json` to your Laravel version.

### References

I have used the data from following links. I have added 4,5 missing cities but I am sure there are many more missing. So anyone is welcome to update the cities data.

- [https://en.wikipedia.org/wiki/List_of_cities_and_largest_towns_in_Myanmar](https://en.wikipedia.org/wiki/List_of_cities_and_largest_towns_in_Myanmar)

- [https://en.wikipedia.org/wiki/Administrative_divisions_of_Myanmar](https://en.wikipedia.org/wiki/Administrative_divisions_of_Myanmar)
