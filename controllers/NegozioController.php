<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

require_once (__DIR__.'/../Negozio.php');

class NegozioController{
    function dati(Request $request, Response $response, $args){
        $negozio = new Oggetto();
        $message = $negozio->jsonNegozio();
        $response->getBody()->write(json_encode($message));
        return $response->withHeader("Content-type", "application/json")->withStatus(200);
    }
}