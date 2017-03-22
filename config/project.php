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
    'app_name' => env('APP_NAME', 'app'),
   'pagination_size' => env('PAGINATION_SIZE', 25),

      'senderEmail' => 'm.hashim@mqplanet.com',
    'displayName' => 'Mqplanet',
    'layoutAssetsFolder'=>'elite',


    'adminEmail' => 'mag@mqplanet.com',
    'pagination_size' => env('PAGINATION_SIZE', 25),
    'theme' => [
        'color' => 'default',
        'navbarFixed' => true,
        'menuFixed' => true,
        'menuAnimated' =>true,
    ],

   'client_menu' => [
       [
           'route' => 'dashboard.index',
           'title' => 'dashboard',
           'icon' => 'fa fa-dashboard',
           'subMenus' => [

               [
                   'route' => 'dashboard.index',
                   'title' => 'dashboard',
                   'icon' => 'fa fa-dashboard',
               ],
           ]
       ],




       [
           'route' => 'common.email_template.index',
           'title' => 'email_template',
           'icon' => 'fa  fa-envelope-o',
           'subMenus' => [

               [
                   'route' => 'common.email_template.index',
                   'title' => 'email_template',
                   'icon' => 'fa fa-gears',
               ],


               [
                   'route' => 'common.email_mass_template.index',
                   'title' => 'email_mass_template',
                   'icon' => 'fa fa-gears',
               ],

//               [
//                   'route' => 'common.email_mass_queue.index',
//                   'title' => 'email_mass_queue',
//                   'icon' => 'fa fa-gears',
//               ],


               [
                   'route' => 'common.email_group.index',
                   'title' => 'email_group',
                   'icon' => 'fa fa-gears',
               ],



//               [
//                   'route' => 'common.email_group_users.index',
//                   'title' => 'email_group_users',
//                   'icon' => 'fa fa-gears',
//               ],


           ]
       ],





       [
           'route' => 'common.roles.index',
           'title' => 'settings',
           'icon' => 'fa fa-gears',
           'subMenus' => [

               [
                   'route' => 'common.roles.index',
                   'title' => 'rolesList',
                   'icon' => 'fa fa-gears',
               ],
               [
                   'route' => 'common.roles.create',
                   'title' => 'rolesCreate',
                   'icon' => 'fa fa-gears',
               ],
               [
                   'route' => 'common.language.translate',
                   'title' => 'language',
                   'icon' => 'fa fa-language',
               ],
           ]
       ],


       [
           'route' => 'common.users.index',
           'title' => 'users',
           'icon' => 'fa fa-users',
           'subMenus' => [

               [
                   'route' => 'common.users.index',
                   'title' => 'users',
                   'icon' => 'fa fa-gears',
               ],
               [
                   'route' => 'common.users.create',
                   'title' => 'usersCreate',
                   'icon' => 'fa fa-gears',
               ]
           ]
       ],

   ],
];




























