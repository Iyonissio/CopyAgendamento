<?php

use DI\Container;
use Slim\Factory\AppFactory;
use Slim\Flash\Messages;
use Slim\Views\PhpRenderer;
use Slim\Views\TwigMiddleware;
use Twig\Extra\Intl\IntlExtension;

error_reporting(1);
ini_set('display_errors', '1');
date_default_timezone_set('Europe/Berlin');

$container = new Container();

AppFactory::setContainer($container);

$app = AppFactory::create();

$container = $app->getContainer();

$container->set('flash', function () {
    return new Messages();
});

$container->set('view', function ($container) {
    $view = new PhpRenderer(HTMLPATH);
    $view->setAttributes(array('flash'=>$container->get('flash')));

    return $view;
});

$app->addBodyParsingMiddleware();

$app->addRoutingMiddleware();


$app->setBasePath("/pagina-agendamento");

require_once 'routes.php';

$app->run();