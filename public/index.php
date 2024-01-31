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

/*
  Commentaires explicatifs :
  
  1. Ce script PHP sert de point d'entrée principal (front controller) où toutes les requêtes de l'application passent.

  2. L'autoloader de Composer est inclus pour charger automatiquement les classes nécessaires.

  3. Une instance de la classe App est obtenue à l'aide de la méthode statique 'getInstance'. Il semble que la classe App soit un singleton, limitant la création d'une seule instance.

  4. La méthode 'boot' de l'instance de la classe App est appelée. Cela peut impliquer l'initialisation de certains services ou configurations nécessaires à l'application.

  5. Deux services 'foo' et 'bar' sont ajoutés au conteneur de dépendances à l'aide de la méthode 'singleton'. Ces services sont des instances anonymes de classes.

  6. La fonction 'dd' est utilisée pour afficher de manière structurée et arrêter l'exécution du script. Elle affiche l'instance de la classe App, une instance du service 'bar', une instance du service 'request', et récupère la configuration des routes depuis un fichier externe.
*/
