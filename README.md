Iniciando Com O Micro-framework Silex
=====================================

Post original, escrito por Paulo Martinhago
-------------------------------------------

- http://frameworksphp.com.br/iniciando-com-o-micro-framework-silex-parte-1/

Primeiro Passo
--------------

Criar um arquivo init-silex/composer.json

    {
		"require": 
		{
			"silex/silex": "~1.1"
		}
	}

Segundo Passo
-------------

Baixar o composer dentro da sua pasta Ex:init-silex

    php -r "readfile('https://getcomposer.org/installer');" | php

Terceiro Passo
--------------

Instalar as dependências através do composer

    php composer.phar install

Quarto Passo
------------

Criar uma pasta chamada web, não necessariamente esse nome e dentro dela o arquivo php index.php
Com o seguinte código

    <?php
	require_once __DIR__ . '/../vendor/autoload.php';
	 
	$app = new Silex\Application();
	 
	$app->get('/', function(){
	return 'Olá mundo!';
	});
	 
	$app->run();

Depois basta rodar o servidor web do php e verificar no browser

    php -S localhost:8080 -t web

Por padrão o php irá encontrar o arquivo index.php, se nenhum arquivo for solicitado    



