<?php


namespace App\controllers;


use Psr\Container\ContainerInterface;

class EmpresaController
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
        return $this->container->get('view')->render($response, 'empresa.php');
    }


    /**
     * @param $request
     * @param $response
     * @return mixed|void
     */
    public function basico($request, $response)
    {
        return $this->container->get('view')->render($response, 'planoBasico.php');
    }


    /**
     * @param $request
     * @param $response
     * @return mixed|void
     */
    public function essencial($request, $response)
    {
        return $this->container->get('view')->render($response, 'planoEssencial.php');
    }

    /**
     * @param $request
     * @param $response
     * @return mixed|void
     */
    public function profissional($request, $response)
    {
        return $this->container->get('view')->render($response, 'planoProfissional.php');
    }

}