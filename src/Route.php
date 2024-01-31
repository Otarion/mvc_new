<?php declare(strict_types=1);

namespace MVC;

class Route{
    protected $method; // Méthode HTTP associée à la route (GET, POST, etc.)
    protected $uri; // URI de la route
    protected $action; // Action associée à la route, généralement un tableau représentant le contrôleur et la méthode

    // Constructeur de la classe Route
    public function __construct(string $method, string $uri, array $action)
    {
        // Convertir la méthode HTTP en majuscules pour assurer la cohérence
        $this->method = strtoupper($method);
        $this->uri = $uri; // Stocker l'URI fourni
        $this->action = $action; // Stocker l'action fournie (généralement un tableau de contrôleur et méthode)
    }

    // Méthode magique appelée lorsqu'une méthode statique inaccessible est appelée
    public static function __callStatic($method, $params)
    {
        // Convertir l'URI en une expression régulière en utilisant la méthode convertUriToRegex
        $uri = self::convertUriToRegex($params[0]);
        // Retourner une nouvelle instance de la classe Route avec les paramètres fournis
        return new self($method, $uri, $params[1]);
    }

    // Méthode protégée pour convertir l'URI en expression régulière
    protected static function convertUriToRegex(string $uri): string
    {
        // Ajouter le début de la regex et la fin de la regex
        $regex = '/^' . str_replace('/', '\/', $uri) . '$/';
        
        // Remplacer les textes entre accolades par ([\w-]+)
        $regex = preg_replace('/\{([\w-]+)\}/', '([\w-]+)', $regex);

        // Retourner l'expression régulière résultante
        return $regex;
    }
}