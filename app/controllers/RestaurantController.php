<?php


namespace App\controllers;


use Psr\Container\ContainerInterface;

class RestaurantController
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
        $restaurantes = json_decode(file_get_contents(API . 'locations/find/restaurante'));

        $vars['restaurantes'] = $restaurantes->response;

        return $this->container->get('view')->render($response, 'restaurant.php', $vars);
    }

    /**
     * @param $request
     * @param $response
     * @return mixed|void
     */
    public function perfil($request, $response, $args)
    {
        $restaurantes = json_decode(file_get_contents(API . 'locations/find/restaurante/' . $args['id']));

        $vars['restaurante'] = $restaurantes->response;

        $vars['days'] = ["Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado", "Domingo"];

        return $this->container->get('view')->render($response, 'sectionRestaurant.php', $vars);
    }

}