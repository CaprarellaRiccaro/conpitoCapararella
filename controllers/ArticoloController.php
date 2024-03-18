<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

require_once (__DIR__.'/../Negozio.php');

class ArticoloController{
    function array(Request $request, Response $response, $args){
        $negozio = new Negozio();
        if (isset($args['identificativo']))
            $response->getBody()->write(json_encode($negozio->getDispositivoDiAllarme($args['identificativo']), JSON_PRETTY_PRINT));
        else
            $response->getBody()->write(json_encode($negozio->getDispositiviDiAllarme(), JSON_PRETTY_PRINT));
        return $response->withStatus(200)->withHeader('Content-Type', 'application/json');

    }   

    function dati(Request $request, Response $response, $args){
        $articolo = new Oggetto();
        $message = $negozio->jsonArticolo();
        $response->getBody()->write(json_encode($message));
        return $response->withHeader("Content-type", "application/json")->withStatus(200);
    }
}