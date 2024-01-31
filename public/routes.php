<?php declare(strict_types=1);

use MVC\Route;

return [
    Route::get('/', [App\Controllers\HelloController::class, 'index']),
    Route::get('/hello/{name}', [App\Controllers\HelloController::class, 'hello'])
];