<?php

use Slim\Routing\RouteCollectorProxy;

defined('FCPATH') or exit('No direct script access allowed');

$app->get('[/]', 'App\controllers\HomeController:index');

$app->group('/clinicas', function (RouteCollectorProxy $group) {
    $group->get('[/]', 'App\controllers\ClinicController:index');
    $group->get('/perfil/{id}[/]', 'App\controllers\ClinicController:perfil');
});

$app->group('/restaurantes', function (RouteCollectorProxy $group) {
    $group->get('[/]', 'App\controllers\RestaurantController:index');
    $group->get('/perfil/{id}[/]', 'App\controllers\RestaurantController:perfil');
});

$app->group('/saloes', function (RouteCollectorProxy $group) {
    $group->get('[/]', 'App\controllers\SalonController:index');
    $group->get('/perfil/{id}[/]', 'App\controllers\SalonController:perfil');
});

$app->group('/empresas', function (RouteCollectorProxy $group) {
    $group->get('[/]', 'App\controllers\EmpresaController:index');
    $group->group('/planos', function (RouteCollectorProxy $app) {
        $app->get('/basico[/]', 'App\controllers\EmpresaController:basico');
        $app->get('/essencial[/]', 'App\controllers\EmpresaController:essencial');
        $app->get('/profissional[/]', 'App\controllers\EmpresaController:profissional');
    });
});


