<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    protected $middleware = [
        // Global middleware
        \App\Http\Middleware\CheckForMaintenanceMode::class,
        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
        \App\Http\Middleware\TrimStrings::class,
        \Illuminate\Routing\Middleware\SubstituteBindings::class,
    ];

    protected $middlewareGroups = [
        'web' => [
            // Web middleware
        ],

        'api' => [
            'throttle:api',
            'bindings',
        ],
    ];

    protected $routeMiddleware = [
        // Your custom middleware
        'jwt' => \App\Http\Middleware\JwtMiddleware::class,
    ];
}
