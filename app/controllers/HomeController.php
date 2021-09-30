<?php


namespace App\controllers;


use Psr\Container\ContainerInterface;

class HomeController
{
    /**
     * @var ContainerInterface
     */
    private $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     * @param $request
     * @param $response
     * @return mixed|void
     */
    public function index($request, $response)
    {
        return $this->container->get('view')->render($response, 'index.php');
    }



}