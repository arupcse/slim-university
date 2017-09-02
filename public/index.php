<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

// Donot include the trailing slash

define('DOCROOT', $_SERVER["DOCUMENT_ROOT"]);
define('APPPATH', DOCROOT. '/asarker/slim-university');
define('LIBPATH', DOCROOT. '/asarker');


require LIBPATH. '/vendor/autoload.php';

$app = new \Slim\App;

$app->get('/form', function(Request $request, Response $response){
  $name = $request->getAttribute('name');
  $response->getBody()->write("hello world");

  return $response;
});

$app-> run();
