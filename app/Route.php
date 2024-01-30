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
        return new self($method, ...$params);
    }
}