<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Use json or database
    |--------------------------------------------------------------------------
    |
    | Option: true, false.
    | Default: true.
    |
     */

    'use_json' => true,

    'json_paths' => [
        'regions' => 'vendor/mmrc/mmrc_regions.json',
        'cities' => 'vendor/mmrc/mmrc_cities.json',
    ],

    /*
    |--------------------------------------------------------------------------
    | Number of items to show
    |--------------------------------------------------------------------------
    |
    | Option: integer
    | Default: 20.
    |
     */

    'items_per_page' => 20,

];
