<?php

return [

    'ads' => [
        ['url' => 'https://larajobs.com', 'image' => 'larajobs', 'alt' => 'LaraJobs', 'goal' => '9C3CAYKR'],
        ['url' => 'https://fullstackeurope.com/2022?utm_source=Laravel.io&utm_campaign=fseu22&utm_medium=advertisement', 'image' => 'fseu', 'alt' => 'Full Stack Europe', 'goal' => 'SRIK2PEE'],
        [
            'url' => 'https://www.cloudways.com/en/php-hosting.php?id=972670',
            'long-url' => 'https://www.cloudways.com/en/web-hosting-affiliate-program.php?id=972670&data1=cw_aff',
            'image' => 'cloudways',
            'alt' => 'Cloudways',
            'goal' => '4KV6VZZ6',
        ],
        ['url' => 'https://loadforge.com', 'image' => 'loadforge', 'alt' => 'LoadForge', 'goal' => '5KTDAJ04'],
    ],

    'horizon' => [
        'email' => env('LIO_HORIZON_EMAIL'),
        'webhook' => env('LIO_HORIZON_WEBHOOK'),
    ],

];
