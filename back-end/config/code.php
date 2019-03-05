<?php

return [
    'default' => 0,
    'token' => [
        'no' => 1000,
        'error' => 1100
    ],
    'user' => [
        'create' => [
            'paramsRequire' => 2000
        ],
        'login' => [
            'no' => 2100,
            'error' => 2110
        ],
        'auth' => [
            'no' => 2200,
            'limit' => 2210
        ]
    ],
    'article' => [
        'create' => [
            'paramsRequire' => 3000
        ],
        'info' => [
            'paramsRequire' => 3100
        ]
    ]
];
