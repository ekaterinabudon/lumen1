<?php

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

$router->get('/', function () use ($router) {
    return $router->app->version();
});
$router->get('/hello', function () use ($router) {
    return '<h1>Hello!</h1>';
});
$router->get('/sum/{n1}/{n2}', function ($n1, $n2) {
    return '<h1>Сумма:</h1><h2>' . ($n1+$n2) . '</h2>';
});

