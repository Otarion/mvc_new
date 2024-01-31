<?php declare(strict_types=1);

namespace App\Controllers;

// La classe HelloController étend une classe de base Controller (qui n'est pas fournie dans le code)
class HelloController extends Controller {

    // Méthode index pour gérer la requête à l'URI '/'
    public function index() 
    {
        // Retourne simplement la chaîne 'Hello world'
        return 'Hello world';
    }

    // Méthode hello pour gérer la requête à l'URI '/hello/{name}'
    public function hello(string $name)
    {
        // Affiche un message de salutation avec le paramètre $name
        echo 'Hello ' . $name;
    }
}
