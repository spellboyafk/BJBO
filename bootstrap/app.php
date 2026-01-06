<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\IsAdmin;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
<<<<<<< HEAD
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'admin' => \App\Http\Middleware\AdminMiddleware::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
=======

    ->withMiddleware(function ($middleware) {
        $middleware->alias([
            'admin' => IsAdmin::class,
        ]);
    })

    ->withExceptions(function (Exceptions $exceptions): void {
>>>>>>> 3b1ca24dfc0c2799b402a40dff19dc1006adde2d
        //
    })->create();
