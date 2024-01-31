<?php

// Front controller (toutes les requêtes passent par ici)

// Autoloader de Composer
require_once __DIR__ . '/../vendor/autoload.php';

// On récupère une instance de la classe App
$app = MVC\App::getInstance();

// Servira à ajouter mes services au conteneur
$app->boot();

// Test d'ajout de 2 services
$app->singleton('foo', fn(MVC\App $app) => new class () {});
$app->singleton('bar', fn(MVC\App $app) => new class () {});

// Utilisation de la fonction dd pour afficher et arrêter l'exécution avec les résultats
dd(
    $app,                                                                                // Affiche l'instance de la classe App
    $app->make('bar'),                                                          // Affiche une instance du service 'bar' depuis le conteneur de dépendances
    $app->make('request'),                                                   // Affiche une instance du service 'request' depuis le conteneur de dépendances (peut être une gestion de la requête HTTP)
    $routes = require_once __DIR__ .'/../public/routes.php'  // Affiche et récupère la configuration des routes depuis un fichier externe
);