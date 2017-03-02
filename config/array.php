<?php
return [
    'company_status'=>[
        0=>'active',
        1=>'not active',
        2=>'target',
        3=>'closed',
        4=>'other'
    ],
    'contacts_status'=>[
        0=>'active',
        1=>'not active',
        2=>'other'
    ],
    'licenses_status'=>[
        0=>'active',
        1=>'not active',
        2=>'other'
    ],
'domains_providers'=>[
    0=>'GoDaddy',
    1=>'blueHost'
],
    'modules_type'=>[
        0=>'Products',
        1=>'Domains',
        2=>'Web Hosting Plans',
        3=>'Server',
        4=>'Support Contract',
    ],
    'productsTypeIndex'=>0,
    'domainsTypeIndex'=>1,
    'webHostingPlansTypeIndex'=>2,
    'serverTypeIndex'=>3,
    'supportTypeIndex'=>4,

    'server_spec_raid'=>[
        0=>'raid 1',
        1=>'raid 2',
        2=>'raid 1 - raid 2'
    ],
    'server_detail_systems'=>[
        0=>'Windows',
        1=>'Linux',
        2=>'windows/linux',
        3=>'Other'
    ],
    'server_detail_panel'=>[
        0=>'None',
        1=>'CPanel',
        2=>'Plesk',
        3=>'Other'
    ],
    'server_ip_type'=>[
       0=> 'Default',
        1=>'IPMI',
        2=>'IDRAC',
        3=>'Additional'
    ],
    'server_ip_display'=>[
        0=>'Show',
        1=>'Hide'
    ],
    'server_access_type'=>[

        0=>'RDP',
        1=>'SSH',
        2=>'KPM'
    ],
    'server_locations'=>[

        0=>'USD',
        1=>'UK',
    ],
    'ticket_type'=>
        [
            0=>'bug',
            1=>'error',
            2=>'new feature',
            3=>'uncompleted task'
        ],
    'ticket_status'=>
        [
            0=>'open',
            1=>'close',
            2=>'pending admin',
            3=>'pending client'

        ],
    'documents_type'=>[
        0=>'article',
        1=>'manual',
        2=>'news',
        3=>'other'],
    'files_type'=>[
        0=>'pdf',
        1=>'contract',
        2=>'identity',
        3=>'receipt',
        4=>'other'
    ]
];