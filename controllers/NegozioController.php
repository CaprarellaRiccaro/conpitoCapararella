<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

require_once (__DIR__.'/../Negozio.php');

class NegozioController{
    function dati(Request $request, Response $response, $args){
        $impianto = new Negozio();
        $response->getBody()->write(json_encode($impianto, JSON_PRETTY_PRINT));
        return $response->withStatus(200)->withHeader('Content-Type', 'application/json');
    }
}