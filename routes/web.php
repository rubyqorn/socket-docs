<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Http\Controllers\Classes\ClassesViewController;
use App\Http\Controllers\Classes\ClassViewController;
use App\Http\Controllers\Configuration\ConfigurationViewController;
use App\Http\Controllers\Methods\MethodsViewController;
use App\Http\Controllers\Methods\MethodViewController;
use App\Repositories\ClassesRepository;
use App\Repositories\ConfigurationRepository;
use App\Repositories\MethodRepository;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', 'HomeViewController');

$router->get('/configuration', function() {
    $controller = new ConfigurationViewController(new ConfigurationRepository);
    return $controller->show();
});

$router->get('/methods', function() {
    $controller = new MethodsViewController(new MethodRepository);
    return $controller->show();
});

$router->get('/methods/{method}', function($method) {
    $controller = new MethodViewController(new MethodRepository);
    return $controller->show($method);
});

$router->get('/classes', function(){
    $controller = new ClassesViewController(new ClassesRepository);
    return $controller->show();
});

$router->get('/classes/{class}', function($class) {
    $controller = new ClassViewController(new ClassesRepository);
    return $controller->show($class);
});
