<?php


namespace App\controllers;


use Psr\Container\ContainerInterface;

class SalonController
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
        $restaurantes = json_decode(file_get_contents(API . 'locations/find/salao'));

        $vars['saloes'] = $restaurantes->response;

        return $this->container->get('view')->render($response, 'salon.php', $vars);
    }

    /**
     * @param $request
     * @param $response
     * @return mixed|void
     */
    public function perfil($request, $response, $args)
    {
        $restaurantes = json_decode(file_get_contents(API . 'locations/find/salao/' . $args['id']));

        $vars['salao'] = $restaurantes->response;

        $vars['days'] = ["Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado", "Domingo"];

        return $this->container->get('view')->render($response, 'sectionSalon.php', $vars);
    }

}