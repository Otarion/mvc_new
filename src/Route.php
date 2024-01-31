<?php declare(strict_types=1);

namespace MVC;

class Route{
    protected $method;
    protected $uri;
    protected $action;

    public function __construct(string $method, string $uri, array $action)
    {
        $this->method = strtoupper($method);
        $this->uri = $uri;
        $this->action = $action;
    }

    public static function __callStatic($method, $params)
    {
        $uri = self::convertUriToRegex($params[0]);
        return new self($method, $uri, $params[1]);
    }

    protected static function convertUriToRegex(string $uri): string
    {
        // Ajouter le début de la regex et la fin de la regex
        $regex = '/^' . str_replace('/', '\/', $uri) . '$/';
        
        // Remplacer les textes entre accolades par ([\w-]+)
        $regex = preg_replace('/\{([\w-]+)\}/', '([\w-]+)', $regex);

        return $regex;
    }
}