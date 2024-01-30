<?php declare(strict_types=1);

use App\Controllers\HelloController;
use MVC\Route; // N'existe pas encore mais ça va venir !

return [
    Route::get('/', [HelloController::class, 'index']),
];