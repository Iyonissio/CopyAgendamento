<?php


namespace App\controllers;


use Psr\Container\ContainerInterface;

class ClinicController
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
        $restaurantes = json_decode(file_get_contents(API . 'locations/find/clinica'));

        $vars['clinicas'] = $restaurantes->response;

        return $this->container->get('view')->render($response, 'clinic.php', $vars);
    }


    /**
     * @param $request
     * @param $response
     * @param $args
     * @return mixed|void
     */
    public function perfil($request, $response, $args)
    {
        $clinica = json_decode(file_get_contents(API . 'locations/find/clinica/' . $args['id']));

        $vars['clinica'] = $clinica->response;

        $vars['days'] = ["Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado", "Domingo"];

        return $this->container->get('view')->render($response, 'sectionClinic.php', $vars);
    }

}