<?php

use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';
require_once __DIR__.'/controllers/NegozioController.php';
require_once __DIR__.'/controllers/ArticoloController.php';

$app = AppFactory::create();

$app->get('/negozio','NegozioController:dati');

$app->get('/articolo','ArticoloController:array');
$app->get('/articolo/{id}','ArticoloController:dati');

$app->get('/ordini','');
$app->get('/ordini/{numero_ordine}','');
$app->get('/ordini/{numero_ordine}/articoli_venduti','');
$app->get(' /ordini/{numero_ordine}/articoli_venduti/{id}','');

$app->get('/ordini/{numero_ordine}/verifica ','');
$app->get(' /ordini/{numero_ordine}/sconto','');


$app->run();
