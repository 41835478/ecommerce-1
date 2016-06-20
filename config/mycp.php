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



    'admin_menu' => [
        [

        ],

    ], 'client_menu' => [
        'route' => 'client.dashboard',
        'title' => 'dashboard',
        'icon' => 'fa fa-gears',
        'subMenus' => [

            [
                'route' => 'client.dashboard',
                'title' => 'dashboard',
                'icon' => 'fa fa-gears',
            ]
        ]
    ],

];




























