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
           'route' => 'admin.cms_page.index',
           'title' => 'cms_page',
           'icon' => 'fa fa-file-o',
           'subMenus' => [

               [
                   'route' => 'admin.cms_page.index',
                   'title' => 'cms_page',
                   'icon' => 'fa fa-gears',
               ],
               [
                   'route' => 'admin.cms_page.create',
                   'title' => 'cms_pageCreate',
                   'icon' => 'fa fa-gears',
               ],

               [
                   'route' => 'admin.cms_page_content.index',
                   'title' => 'cms_page_content',
                   'icon' => 'fa fa-gears',
               ],
               [
                   'route' => 'admin.cms_page_content.create',
                   'title' => 'cms_page_contentCreate',
                   'icon' => 'fa fa-gears',
               ],

               [
                   'route' => 'admin.cms_page_content_page.index',
                   'title' => 'cms_page_content_page',
                   'icon' => 'fa fa-gears',
               ],
               [
                   'route' => 'admin.cms_page_content_page.create',
                   'title' => 'cms_page_content_pageCreate',
                   'icon' => 'fa fa-gears',
               ]



           ]
       ],

       [
           'route' => 'admin.cms_article.index',
           'title' => 'cms_article',
           'icon' => 'fa fa-file-word-o',
           'subMenus' => [

               [
                   'route' => 'admin.cms_article.index',
                   'title' => 'cms_article',
                   'icon' => 'fa fa-gears',
               ],
               [
                   'route' => 'admin.cms_article.create',
                   'title' => 'cms_articleCreate',
                   'icon' => 'fa fa-gears',
               ],
               [
                   'route' => 'admin.cms_article_language.index',
                   'title' => 'cms_article_language',
                   'icon' => 'fa fa-gears',
               ],
               [
                   'route' => 'admin.cms_article_language.create',
                   'title' => 'cms_article_languageCreate',
                   'icon' => 'fa fa-gears',
               ]
           ]
       ],



       [
           'route' => 'admin.cms_content.index',
           'title' => 'cms_content',
           'icon' => 'fa fa-gears',
           'subMenus' => [

               [
                   'route' => 'admin.cms_content.index',
                   'title' => 'cms_content',
                   'icon' => 'fa fa-gears',
               ],
               [
                   'route' => 'admin.cms_content.create',
                   'title' => 'cms_contentCreate',
                   'icon' => 'fa fa-gears',
               ]
           ]
       ],

       [
           'route' => 'admin.cms_html.index',
           'title' => 'cms_html',
           'icon' => 'fa fa-code',
           'subMenus' => [

               [
                   'route' => 'admin.cms_html.index',
                   'title' => 'cms_html',
                   'icon' => 'fa fa-gears',
               ],
               [
                   'route' => 'admin.cms_html.create',
                   'title' => 'cms_htmlCreate',
                   'icon' => 'fa fa-gears',
               ],
               [
                   'route' => 'admin.cms_html_language.index',
                   'title' => 'cms_html_language',
                   'icon' => 'fa fa-gears',
               ],
               [
                   'route' => 'admin.cms_html_language.create',
                   'title' => 'cms_html_languageCreate',
                   'icon' => 'fa fa-gears',
               ]
           ]
       ],


       [
           'route' => 'admin.cms_form.index',
           'title' => 'cms_form',
           'icon' => 'fa fa-th-list',
           'subMenus' => [

               [
                   'route' => 'admin.cms_form.index',
                   'title' => 'cms_form',
                   'icon' => 'fa fa-gears',
               ],
               [
                   'route' => 'admin.cms_form.create',
                   'title' => 'cms_formCreate',
                   'icon' => 'fa fa-gears',
               ],

               [
                   'route' => 'admin.cms_form_field.index',
                   'title' => 'cms_form_field',
                   'icon' => 'fa fa-gears',
               ],
               [
                   'route' => 'admin.cms_form_field.create',
                   'title' => 'cms_form_fieldCreate',
                   'icon' => 'fa fa-gears',
               ]
           ]
       ],




       [
           'route' => 'admin.cms_menu.index',
           'title' => 'cms_menu',
           'icon' => 'fa fa-list-ol',
           'subMenus' => [

               [
                   'route' => 'admin.cms_menu.index',
                   'title' => 'cms_menu',
                   'icon' => 'fa fa-gears',
               ],
               [
                   'route' => 'admin.cms_menu.create',
                   'title' => 'cms_menuCreate',
                   'icon' => 'fa fa-gears',
               ],

               [
                   'route' => 'admin.cms_menu_item.index',
                   'title' => 'cms_menu_item',
                   'icon' => 'fa fa-gears',
               ],
               [
                   'route' => 'admin.cms_menu_item.create',
                   'title' => 'cms_menu_itemCreate',
                   'icon' => 'fa fa-gears',
               ],

               [
                   'route' => 'admin.cms_menu_item_language.index',
                   'title' => 'cms_menu_item_language',
                   'icon' => 'fa fa-gears',
               ],
               [
                   'route' => 'admin.cms_menu_item_language.create',
                   'title' => 'cms_menu_item_languageCreate',
                   'icon' => 'fa fa-gears',
               ]
           ]
       ],








       [
           'route' => 'admin.cms_category.index',
           'title' => 'cms_category',
           'icon' => 'fa-cubes',
           'subMenus' => [

               [
                   'route' => 'admin.cms_category.index',
                   'title' => 'cms_category',
                   'icon' => 'fa fa-gears',
               ],
               [
                   'route' => 'admin.cms_category.create',
                   'title' => 'cms_categoryCreate',
                   'icon' => 'fa fa-gears',
               ],

               [
                   'route' => 'admin.cms_category_description.index',
                   'title' => 'cms_category_description',
                   'icon' => 'fa fa-gears',
               ],
               [
                   'route' => 'admin.cms_category_description.create',
                   'title' => 'cms_category_descriptionCreate',
                   'icon' => 'fa fa-gears',
               ]
           ]
       ],



       [
           'route' => 'admin.cms_product.index',
           'title' => 'cms_product',
           'icon' => 'fa fa-cube',
           'subMenus' => [

               [
                   'route' => 'admin.cms_product.index',
                   'title' => 'cms_product',
                   'icon' => 'fa fa-gears',
               ],
               [
                   'route' => 'admin.cms_product.create',
                   'title' => 'cms_productCreate',
                   'icon' => 'fa fa-gears',
               ],
               [
                   'route' => 'admin.cms_product_description.index',
                   'title' => 'cms_product_description',
                   'icon' => 'fa fa-gears',
               ],
               [
                   'route' => 'admin.cms_product_description.create',
                   'title' => 'cms_product_descriptionCreate',
                   'icon' => 'fa fa-gears',
               ]
           ]
       ],



       [
           'route' => 'admin.cms_cart.index',
           'title' => 'cms_cart',
           'icon' => 'fa-shopping-cart ',
           'subMenus' => [

               [
                   'route' => 'admin.cms_cart.index',
                   'title' => 'cms_cart',
                   'icon' => 'fa fa-gears',
               ],
               [
                   'route' => 'admin.cms_cart.create',
                   'title' => 'cms_cartCreate',
                   'icon' => 'fa fa-gears',
               ],
               [
                   'route' => 'admin.cms_wishlist.index',
                   'title' => 'cms_wishlist',
                   'icon' => 'fa fa-gears',
               ],
               [
                   'route' => 'admin.cms_wishlist.create',
                   'title' => 'cms_wishlistCreate',
                   'icon' => 'fa fa-gears',
               ],

               [
                   'route' => 'admin.cms_compare_list.index',
                   'title' => 'cms_compare_list',
                   'icon' => 'fa fa-gears',
               ],
               [
                   'route' => 'admin.cms_compare_list.create',
                   'title' => 'cms_compare_listCreate',
                   'icon' => 'fa fa-gears',
               ]
           ]
       ],












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




























