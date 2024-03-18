<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

require_once (__DIR__.'/../Articolo.php');
require_once (__DIR__.'/../Negozio.php');

class ArticoloController{
    function array(Request $request, Response $response, $args){
        $negozio = new Negozio();
        $response->getBody()->write(json_encode($negozio->getArticolo(), JSON_PRETTY_PRINT));
        return $response->withStatus(200)->withHeader('Content-Type', 'application/json');
    }   

    function dati(Request $request, Response $response, $args){
        $negozio = new Negozio();
        if (isset($args['id']))
            $response->getBody()->write(json_encode($negozio->getProdotto($args['id']), JSON_PRETTY_PRINT));
        else
            $response->getBody()->write(json_encode($negozio->getArticolo(), JSON_PRETTY_PRINT));
        return $response->withStatus(200)->withHeader('Content-Type', 'application/json');
    }   
}