<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

require_once (__DIR__.'/../Articolo.php');

class NegozioController{
    function array(Request $request, Response $response, $args){
        $articolo = new Oggetto();
        $message = $articolo->jsonArticolo();
        $response->getBody()->write(json_encode($message));
        return $response->withHeader("Content-type", "application/json")->withStatus(200);
    }

    function dati(Request $request, Response $response, $args){
        $articolo = new Oggetto();
        $message = $negozio->jsonArticolo();
        $response->getBody()->write(json_encode($message));
        return $response->withHeader("Content-type", "application/json")->withStatus(200);
    }
}