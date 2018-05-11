<?php

use Slim\Http\Request;
use Slim\Http\Response;
use App\Fakultas;
use App\Prodi;
use App\Controllers;

// Middleware
$mw = function ($request, $response, $next) {
  $response->getBody()->write('AFTER');
  $response = $next($request, $response);
  $response->getBody()->write('AFTER');
  return $response;
};

// $app->get('/something', function ($request, $response, $args) {
// 	 return $this->renderer->render($response, 'index.phtml');
// })->add($mw);

$app->get('/', function ($request, $response, $args) {
    return $this->view->render($response, 'index.phtml');
})->setName('beranda');

$app->get('/login', App\Controllers\AuthController::class . ':form')->setName('login-form');
$app->post('/login', App\Controllers\AuthController::class . ':login')->setName('login');

$app->get('/tampil', App\Controllers\TampilController::class . ':tampil')->setName('tampil');

$app->get('/registrasi', App\Controllers\RegistrasiController::class . ':form')->setName('registrasi-form');
$app->post('/registrasi', App\Controllers\RegistrasiController::class . ':regis')->setName('registrasi');

$app->get('/books/{id}', App\Controllers\RegistrasiController::class . ':test');

$app->get('/lab', function ($request, $response, $args) use ($app) {

  echo "<pre>";
  // print_r($_SESSION);
  // echo "cookie";
  // print_r($_COOKIE);
  echo "cookie2";

  // session_unset();
  echo "</pre>";
});

$app->get('/clear', function ($request, $response, $args) {
  session_unset();
  setcookie('ppmb_unair_token', "", time()-100000, "/", $_SERVER['HTTP_HOST'], 0, 1);
  setcookie('ppmb_unair_email', "", time()-100000, "/", $_SERVER['HTTP_HOST'], 0, 1);
  unset($_COOKIE["ppmb_unair_token"]);
  unset($_COOKIE["ppmb_unair_email"]);
});


// Contoh penggunaan slim/flash
$app->get('/foo', function ($req, $res, $args) {
    // Set flash message for next request
    $this->flash->addMessage('Test', ['This is a message']);

    // Redirect
    return $res->withStatus(302)->withHeader('Location', '/bar');
});

$app->get('/bar', function ($req, $res, $args) {
    // Get flash messages from previous request
    $messages = $this->flash->getMessages();
    print_r($messages);

    // Get the first message from a specific key
    $test = $this->flash->getFirstMessage('Test');
    print_r($test);
});

$app->get('/log', function ($req, $res, $args) {
    $this->logger->warning('foo');
    $this->logger->error('bar');
});
