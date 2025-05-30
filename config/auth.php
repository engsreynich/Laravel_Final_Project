<?php

return [

   'guards' => [
    'web' => [
        'driver' => 'session',
        'provider' => 'users',
    ],
    'teacher' => [
        'driver' => 'session',
        'provider' => 'teachers',
    ],
],

'providers' => [
    'users' => [
        'driver' => 'eloquent',
        'model' => App\Models\User::class,
    ],
    'teachers' => [
        'driver' => 'eloquent',
        'model' => App\Models\Teacher::class,
    ],
],

'passwords' => [
    'users' => [
        'provider' => 'users',
        'table' => 'password_resets',
        'expire' => 60,
        'throttle' => 60,
    ],
    'teachers' => [
        'provider' => 'teachers',
        'table' => 'password_resets',
        'expire' => 60,
        'throttle' => 60,
    ],
],
];
