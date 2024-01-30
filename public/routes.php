<?php declare(strict_types=1);

use MVC\Route;

return [
    Route::get('/', [HelloController::class, 'index'])
];