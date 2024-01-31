<?php declare(strict_types=1);

namespace App\Controllers;
class HelloController extends Controller {

    public function index() 
    {
        return 'Hello world';
    }

    public function hello(string $name)
    {
    echo 'Hello ' . $name;
    }
    
}