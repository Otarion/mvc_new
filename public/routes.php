<?php declare(strict_types=1);

use MVC\Route;

// Configuration des routes de l'application

return [
    // Définition d'une route pour l'URI '/'
    Route::get('/', [App\Controllers\HelloController::class, 'index']),

    // Définition d'une route pour l'URI '/hello/{name}'
    Route::get('/hello/{name}', [App\Controllers\HelloController::class, 'hello']),
];

/*
  Commentaires explicatifs :
  
  1. Ce fichier sert à configurer les routes de l'application web.
  
  2. La première route est définie pour l'URI '/', associée à la méthode HTTP GET.
     Elle pointe vers la méthode 'index' du contrôleur 'HelloController' du namespace 'App\Controllers'.

  3. La deuxième route est définie pour l'URI '/hello/{name}', associée à la méthode HTTP GET.
     La partie dynamique '{name}' de l'URI permet de capturer un paramètre dans l'URL.
     Cette route pointe vers la méthode 'hello' du contrôleur 'HelloController' du namespace 'App\Controllers'.
*/
