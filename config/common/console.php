<?php

use App\Console;

return [
    'config' => [
        'console' => [
            'commands' => [
                Console\LoadWeatherCommand::class,
            ],
        ],
    ],
];
