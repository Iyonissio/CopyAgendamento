<?php

namespace App\listeners;

use Slim\Http\Response;

class CustomResponseListener
{
    public function is200Response(Response $response, $responseMessage, $container = null, $page = "")
    {
        if (!empty($container)) {
            $container->get('flash')->addMessage('success', $responseMessage);
            return $response->withStatus(302)->withHeader('Location', PATH . $page . "/");
        }

        $responseMessage = json_encode(["success" => true, "response" => $responseMessage]);
        $response->getBody()->write($responseMessage);
        return $response->withHeader("Content-Type", "application/json")
            ->withStatus(200);
    }


    public function is400Response(Response $response, $responseMessage)
    {
        $responseMessage = json_encode(["success" => false, "response" => $responseMessage]);
        $response->getBody()->write($responseMessage);
        return $response->withHeader("Content-Type", "application/json")
            ->withStatus(400);
    }

    public function is422Response(Response $response, $responseMessage, $container = null)
    {
        if (!empty($container)) {
            $container->get('flash')->addMessage('error', $responseMessage);
            return $response
                ->withStatus(302)->withHeader('Content-Type', 'text/html')->write('<script>history.back()</script>');
        }

        $responseMessage = json_encode(["success" => true, "response" => $responseMessage]);
        $response->getBody()->write($responseMessage);
        return $response->withHeader("Content-Type", "application/json")
            ->withStatus(422);
    }

}