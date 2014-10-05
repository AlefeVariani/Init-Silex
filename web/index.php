<?php

require_once __DIR__ . '/../vendor/autoload.php';

$app = new Silex\Application();

$app->get('/', function(){
	return 'Olá mundo!';
});

$app->get('/ola/{name}', function($name){
	return sprintf('Olá %s!', $name);
});

$app->run();