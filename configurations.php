  <?php
$database = array('default' => array('host'     => 'localhost',
                                     'user'     => 'root',
                                     'password' => 'root',
                                     'db'       => 'planetcrm'),
		              'site'    => array('host'     => '192.168.15.15',
                                     'user'     => 'root',
                                     'password' => 'gelite27',
                                     'db'       => 'mqplanet'));

$smtp = array('default' => array('host' => 'mail.mqplanet.com',
                                 'user' => 'members@mqplanet.com',
                                 'password' => 'sQA7Z$]z(%3A',
                                 'port' => '25',
                                 'sendto' => 'sales@mqplanet.com'));

$products = array('MT4 Addons' => array('MT4 Server Plugins' => array('MQsms Gateway',
                                                                      'Auto Leverage',
                                                                      'Multi Agents',
                                                                      'Rebate Plugin',
                                                                      'Storage Plugin',
                                                                      'Good Till Session',
                                                                      'Stopouts Hedger',
                                                                      'No Stop Outs',
                                                                      'Margin Checker',
                                                                      'Freezing Prices',
                                                                      'Commission Handler',
                                                                      'Antipip Trader'),

                                        'MT4 Applications' => array('MT4 Application 1',
                                                                    'MT4 Application 2',
                                                                    'MT4 Application 3',
                                                                    'MT4 Application 4')),

                  'MT5 Addons' => array('MT5 Server Plugins' => array('MT5 Plugin 1',
                                                                      'MT5 Plugin 2',
                                                                      'MT5 Plugin 3'),

                                        'MT5 Applications' => array('MT5 Application 1',
                                                                    'MT5 Application 2',
                                                                    'MT5 Application 3',
                                                                    'MT5 Application 4')),

                  'Web Applications' => array('Quotes Module','Economic Calendar','MT4 Web Registration'),
                  'Other Products/Services' => array('MT4 Consulting', 'MT5 Consulting', 'MT4 Toolskit'));



$menu= array('dashboard' => array(
	       	             'display' => 'Dashboard',
                         'id' => 'dashboard'
                         ),
              'account' => array(
                        'display' => 'Account',
                        'id'     => '#',
                        'sub'     => array(
                                   'company' => array(
                                             'display' =>'Company',
                                             'id'     => 'company',
                                             'sub'     => array(
                                                        'addlicense' => array (
                                                                     'display' => 'Add License',
                                                                     'id'      => 'add_license'
                                                        )
                                              )
                                   ),
                                   'contacts' => array (
                                              'display' => 'Contacts',
                                              'id'      => 'contacts',
                                              'sub'     => array(
                                                        'addcontact' => array (
                                                                     'display' => 'Add Contact',
                                                                     'id'      => 'add_contact'
                                                        )
                                              )
                                   ),
                                   'members' => array (
                                              'display' => 'Users Managment',
                                              'id'      => 'members',
                                              'sub'     => array(
                                                        'addmember' => array (
                                                                     'display' => 'Add User',
                                                                     'id'      => 'add_user'
                                                        )
                                              )
                                   ),
                                    'invoices' => array(
                                             'display' =>'Invoices',
                                             'id'     => 'invoices'
                                   )
                        )
              
              ),
              'hosting' => array(
                        'display' => 'Hosting Services',
                        'id'     => '#',
                        'sub'     => array(
                                   'servers' => array (
                                              'display' => 'Dedicated Servers',
                                              'id'      => 'servers',
                                              'sub'     => array(
                                                        'addserver' => array (
                                                                     'display' => 'Add Server',
                                                                     'id'      => 'add_server'
                                                        )
                                              )
                                   ),
                                   'webhosts' => array (
                                              'display' => 'Web Hosts',
                                              'id'      => 'webhosts',
                                              'sub'     => array(
                                                        'addwebhost' => array (
                                                                     'display' => 'Add WebHost',
                                                                     'id'      => 'add_webhost'
                                                        )
                                              )
                                   ),
                                   'domains' => array (
                                              'display' => 'Domains',
                                              'id'      => 'domains',
                                              'sub'     => array(
                                                        'adddomain' => array (
                                                                     'display' => 'Add Domain',
                                                                     'id'      => 'add_domain'
                                                        )
                                              )
                                   ),
                                 /*  'phoneredirection' => array (
                                             'display' => 'Phone Redirection',
                                              'id'      => 'redirection-info-get',
                                   )*/
                                   
                        )
              
              ),
              'products' => array(
                         'display' => 'Products',
                         'id' => '#',
                         'sub'     => array(
                                   'productslist' => array(
                                             'display' =>'Products List',
                                             'id'     => 'products'
                                   )
                         )
              ),
              'support' => array(
                         'display' => 'Support',
                         'id' => '#',
                         'sub'     => array(
                                   'newcase' => array(
                                             'display' =>'New Case',
                                             'id'     => 'new-case'
                                   ),
                                   'caseslist' => array(
                                             'display' =>'Open Cases',
                                             'id'     => 'open-cases'
                                   )
                         )
              ),
              'documents' =>array (
                          'display' => 'Documents',
                          'id' => '#',
                          'sub'     => array(
                                   'articles' => array(
                                             'display' =>'Articles',
                                             'id'     => 'find_articles'
                                   ),
                                   'manuals' => array(
                                             'display' =>'Manuals',
                                             'id'     => 'manuals'
                                   ),
                                   'faqs' => array(
                                             'display' =>'FAQs',
                                             'id'     => 'faqs'
                                   ),
                                   'news' => array(
                                             'display' =>'News',
                                             'id'     => 'news'
                                   )
                          )
              )
             );
              
?>
