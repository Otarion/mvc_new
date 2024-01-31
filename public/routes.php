<?php declare(strict_types=1);

use MVC\Route;

// Configuration des routes de l'application

return [
    // Définition d'une route pour l'URI '/'
    Route::get('/', [App\Controllers\HelloController::class, 'index']),

    // Définition d'une route pour l'URI '/hello/{name}'
    Route::get('/hello/{name}', [App\Controllers\HelloController::class, 'hello']),
];