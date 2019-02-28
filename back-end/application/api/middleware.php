<?php
$except = [
    'user' => [
        'register',
        'login'
    ]
];
return [
    [\app\common\middleware\Auth::class, $except]
];
