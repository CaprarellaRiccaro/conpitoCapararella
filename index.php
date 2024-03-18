<?php

use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';
require_once __DIR__.'/controllers/NegozioController.php';

$app = AppFactory::create();

$app->get('/negozio','NegozioController:dati');

$app->get('/articoli','ArticoliController:array');
$app->get('/articoli/{id}','ArticolliController:dati');

$app->get('/ordini','');
$app->get('/ordini/{numero_ordine}','');
$app->get('/ordini/{numero_ordine}/articoli_venduti','');
$app->get(' /ordini/{numero_ordine}/articoli_venduti/{id}','');

$app->get('/ordini/{numero_ordine}/verifica ','');
$app->get(' /ordini/{numero_ordine}/sconto','');


$app->run();
