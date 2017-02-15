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
    'layoutAssetsFolder'=>'elite',


    'adminEmail' => 'mag@mqplanet.com',
    'pagination_size' => env('PAGINATION_SIZE', 25),
    'theme' => [
        'color' => 'default',
        'navbarFixed' => true,
        'menuFixed' => true,
        'menuAnimated' =>true,
    ],

   'admin_menu' => [



        [
            'route' => 'admin.company.index',
            'title' => 'company',
            'icon' => 'fa fa-gears',
            'subMenus' => [

        [
        'route' => 'admin.company.index',
        'title' => 'companyList',
        'icon' => 'fa fa-gears',
        ],
        [
        'route' => 'admin.company.create',
        'title' => 'companyCreate',
        'icon' => 'fa fa-gears',
        ]
            ]
        ],

        [
            'route' => 'admin.contacts.index',
            'title' => 'contacts',
            'icon' => 'fa fa-gears',
            'subMenus' => [

        [
        'route' => 'admin.contacts.index',
        'title' => 'contactsList',
        'icon' => 'fa fa-gears',
        ],
        [
        'route' => 'admin.contacts.create',
        'title' => 'contactsCreate',
        'icon' => 'fa fa-gears',
        ]
            ]
        ],

        [
            'route' => 'admin.contracts.index',
            'title' => 'contracts',
            'icon' => 'fa fa-gears',
            'subMenus' => [

        [
        'route' => 'admin.contracts.index',
        'title' => 'contractsList',
        'icon' => 'fa fa-gears',
        ],
        [
        'route' => 'admin.contracts.create',
        'title' => 'contractsCreate',
        'icon' => 'fa fa-gears',
        ]
            ]
        ],

        [
            'route' => 'admin.contracts_documents.index',
            'title' => 'contracts_documents',
            'icon' => 'fa fa-gears',
            'subMenus' => [

        [
        'route' => 'admin.contracts_documents.index',
        'title' => 'contracts_documentsList',
        'icon' => 'fa fa-gears',
        ],
        [
        'route' => 'admin.contracts_documents.create',
        'title' => 'contracts_documentsCreate',
        'icon' => 'fa fa-gears',
        ]
            ]
        ],

        [
            'route' => 'admin.contracts_renewal.index',
            'title' => 'contracts_renewal',
            'icon' => 'fa fa-gears',
            'subMenus' => [

        [
        'route' => 'admin.contracts_renewal.index',
        'title' => 'contracts_renewalList',
        'icon' => 'fa fa-gears',
        ],
        [
        'route' => 'admin.contracts_renewal.create',
        'title' => 'contracts_renewalCreate',
        'icon' => 'fa fa-gears',
        ]
            ]
        ],

        [
            'route' => 'admin.emails.index',
            'title' => 'emails',
            'icon' => 'fa fa-gears',
            'subMenus' => [

        [
        'route' => 'admin.emails.index',
        'title' => 'emailsList',
        'icon' => 'fa fa-gears',
        ],
        [
        'route' => 'admin.emails.create',
        'title' => 'emailsCreate',
        'icon' => 'fa fa-gears',
        ]
            ]
        ],

        [
            'route' => 'admin.licenses.index',
            'title' => 'licenses',
            'icon' => 'fa fa-gears',
            'subMenus' => [

        [
        'route' => 'admin.licenses.index',
        'title' => 'licensesList',
        'icon' => 'fa fa-gears',
        ],
        [
        'route' => 'admin.licenses.create',
        'title' => 'licensesCreate',
        'icon' => 'fa fa-gears',
        ]
            ]
        ],

       [
           'route' => 'admin.products.index',
           'title' => 'products',
           'icon' => 'fa fa-gears',
           'subMenus' => [

               [
                   'route' => 'admin.products.index',
                   'title' => 'productsList',
                   'icon' => 'fa fa-gears',
               ],
               [
                   'route' => 'admin.products.create',
                   'title' => 'productsCreate',
                   'icon' => 'fa fa-gears',
               ]
           ]
       ],

        [
            'route' => 'admin.products_list.index',
            'title' => 'products_list',
            'icon' => 'fa fa-gears',
            'subMenus' => [

        [
        'route' => 'admin.products_list.index',
        'title' => 'products_listList',
        'icon' => 'fa fa-gears',
        ],
        [
        'route' => 'admin.products_list.create',
        'title' => 'products_listCreate',
        'icon' => 'fa fa-gears',
        ]
            ]
        ],

        [
            'route' => 'admin.users.index',
            'title' => 'users',
            'icon' => 'fa fa-gears',
            'subMenus' => [

        [
        'route' => 'admin.users.index',
        'title' => 'usersList',
        'icon' => 'fa fa-gears',
        ],
        [
        'route' => 'admin.users.create',
        'title' => 'usersCreate',
        'icon' => 'fa fa-gears',
        ]
            ]
        ],

        [
            'route' => 'admin.versions.index',
            'title' => 'versions',
            'icon' => 'fa fa-gears',
            'subMenus' => [

        [
        'route' => 'admin.versions.index',
        'title' => 'versionsList',
        'icon' => 'fa fa-gears',
        ],
        [
        'route' => 'admin.versions.create',
        'title' => 'versionsCreate',
        'icon' => 'fa fa-gears',
        ]
            ]
        ],

    ],

   'client_menu' => [



        [
            'route' => 'client.company.index',
            'title' => 'company',
            'icon' => 'fa fa-building-o',
            'subMenus' => [

        [
        'route' => 'client.company.index',
        'title' => 'companyList',
        'icon' => 'fa fa-gears',
        ],
        [
        'route' => 'client.company.create',
        'title' => 'companyCreate',
        'icon' => 'fa fa-gears',
        ]
            ]
        ],


       [
           'route' => 'client.contacts.index',
           'title' => 'contacts',
           'icon' => 'fa fa-user',
           'subMenus' => [

               [
                   'route' => 'client.contacts.index',
                   'title' => 'contactsList',
                   'icon' => 'fa fa-gears',
               ],
               [
                   'route' => 'client.contacts.create',
                   'title' => 'contactsCreate',
                   'icon' => 'fa fa-gears',
               ]
           ]
       ],


       [
           'route' => 'client.licenses.index',
           'title' => 'licenses',
           'icon' => 'fa fa-bookmark',
           'subMenus' => [

               [
                   'route' => 'client.licenses.index',
                   'title' => 'licensesList',
                   'icon' => 'fa fa-gears',
               ],
               [
                   'route' => 'client.licenses.create',
                   'title' => 'licensesCreate',
                   'icon' => 'fa fa-gears',
               ]
           ]
       ],


       [
           'route' => 'client.products_list.index',
           'title' => 'products_list',
           'icon' => 'fa fa-cubes',
           'subMenus' => [

               [
                   'route' => 'client.products_list.index',
                   'title' => 'products_listList',
                   'icon' => 'fa fa-gears',
               ],
               [
                   'route' => 'client.products_list.create',
                   'title' => 'products_listCreate',
                   'icon' => 'fa fa-gears',
               ]
           ]
       ],


       [
           'route' => 'client.products.index',
           'title' => 'products',
           'icon' => 'fa fa-cube',
           'subMenus' => [

               [
                   'route' => 'client.products.index',
                   'title' => 'productsList',
                   'icon' => 'fa fa-gears',
               ],
               [
                   'route' => 'client.products.create',
                   'title' => 'productsCreate',
                   'icon' => 'fa fa-gears',
               ]
           ]
       ],

       [
           'route' => 'client.domains.index',
           'title' => 'domains',
           'icon' => 'fa fa-gears',
           'subMenus' => [

               [
                   'route' => 'client.domains.index',
                   'title' => 'domainsList',
                   'icon' => 'fa fa-gears',
               ],
               [
                   'route' => 'client.domains.create',
                   'title' => 'domainsCreate',
                   'icon' => 'fa fa-gears',
               ]
           ]
       ],
       [
           'route' => 'client.web_hosting_plans.index',
           'title' => 'web_hosting_plans',
           'icon' => 'fa fa-gears',
           'subMenus' => [

               [
                   'route' => 'client.web_hosting_plans.index',
                   'title' => 'web_hosting_plansList',
                   'icon' => 'fa fa-gears',
               ],
               [
                   'route' => 'client.web_hosting_plans.create',
                   'title' => 'web_hosting_plansCreate',
                   'icon' => 'fa fa-gears',
               ]
           ]
       ],




       [
           'route' => 'client.versions.index',
           'title' => 'versions',
           'icon' => 'fa fa-tags',
           'subMenus' => [

               [
                   'route' => 'client.versions.index',
                   'title' => 'versionsList',
                   'icon' => 'fa fa-gears',
               ],
               [
                   'route' => 'client.versions.create',
                   'title' => 'versionsCreate',
                   'icon' => 'fa fa-gears',
               ]
           ]
       ],

        [
            'route' => 'client.contracts.index',
            'title' => 'contracts',
            'icon' => 'fa fa-link',
            'subMenus' => [

        [
        'route' => 'client.contracts.index',
        'title' => 'contractsList',
        'icon' => 'fa fa-gears',
        ],
                [
                    'route' => 'client.contracts.create',
                    'title' => 'contractsCreate',
                    'icon' => 'fa fa-gears',
                ],
                [
                    'route' => 'client.contracts.expired',
                    'title' => 'expiredContracts',
                    'icon' => 'fa fa-gears',
                ]

            ]
        ],

//        [
//            'route' => 'client.contracts_documents.index',
//            'title' => 'contracts_documents',
//            'icon' => 'fa fa-gears',
//            'subMenus' => [
//
//        [
//        'route' => 'client.contracts_documents.index',
//        'title' => 'contracts_documentsList',
//        'icon' => 'fa fa-gears',
//        ],
//        [
//        'route' => 'client.contracts_documents.create',
//        'title' => 'contracts_documentsCreate',
//        'icon' => 'fa fa-gears',
//        ]
//            ]
//        ],

//        [
//            'route' => 'client.contracts_renewal.index',
//            'title' => 'contracts_renewal',
//            'icon' => 'fa fa-gears',
//            'subMenus' => [
//
//        [
//        'route' => 'client.contracts_renewal.index',
//        'title' => 'contracts_renewalList',
//        'icon' => 'fa fa-gears',
//        ],
//        [
//        'route' => 'client.contracts_renewal.create',
//        'title' => 'contracts_renewalCreate',
//        'icon' => 'fa fa-gears',
//        ]
//            ]
//        ],

//        [
//            'route' => 'client.emails.index',
//            'title' => 'emails',
//            'icon' => 'fa fa-gears',
//            'subMenus' => [
//
//        [
//        'route' => 'client.emails.index',
//        'title' => 'emailsList',
//        'icon' => 'fa fa-gears',
//        ],
//        [
//        'route' => 'client.emails.create',
//        'title' => 'emailsCreate',
//        'icon' => 'fa fa-gears',
//        ]
//            ]
//        ],



//        [
//            'route' => 'client.users.index',
//            'title' => 'users',
//            'icon' => 'fa fa-gears',
//            'subMenus' => [
//
//        [
//        'route' => 'client.users.index',
//        'title' => 'usersList',
//        'icon' => 'fa fa-gears',
//        ],
//        [
//        'route' => 'client.users.create',
//        'title' => 'usersCreate',
//        'icon' => 'fa fa-gears',
//        ]
//            ]
//        ],


    ],

];




























