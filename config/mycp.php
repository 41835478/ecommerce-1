<?php

/*
  |--------------------------------------------------------------------------
  | Fxwebkit General Config
  |--------------------------------------------------------------------------
  |
  |	* Theme Colors:
  |		default, asphalt, purple-hills,
  |		adminflare, dust, frost, fresh,
  |		silver, clean, white
 */

return [
    'app_name' => env('APP_NAME', 'MYCP'),
   'pagination_size' => env('PAGINATION_SIZE', 25),

      'senderEmail' => 'm.hashim@mqplanet.com',
    'displayName' => 'Mqplanet',
    'layoutAssetsFolder'=>'mycp',


    'adminEmail' => 'mag@mqplanet.com',

    'theme' => [
        'color' => 'default',
        'navbarFixed' => true,
        'menuFixed' => true,
        'menuAnimated' =>true,
    ],

    'admin_menu' => [
        [

        ],

    ], 'client_menu' => [
        [
            'route' => 'client.index',
            'title' => 'dashboard',
            'icon' => 'fa fa-gears',
            'subMenus' => [

                [
                    'route' => 'client.index',
                    'title' => 'dashboard',
                    'icon' => 'fa fa-gears',
                ]
            ]
        ],
        [
            'route' => 'client.product_list.index',
            'title' => 'product_list',
            'icon' => 'fa fa-gears',
            'subMenus' => [

                [
                    'route' => 'client.product_list.index',
                    'title' => 'product_list',
                    'icon' => 'fa fa-gears',
                ]
            ]
        ]
    ],

];




























