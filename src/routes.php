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

$app->map(['GET', 'POST'], '/login', App\Controllers\AuthController::class . ':login')->setName('login');

$app->get('/tampil', App\Controllers\TampilController::class . ':tampil')->setName('tampil');

$app->map(['GET', 'POST'], '/registrasi', App\Controllers\RegistrasiController::class . ':regis')->setName('registrasi');

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
  session_start();
  session_unset();
  setcookie('ppmb_unair_token', "", time()-100000, "/", $_SERVER['HTTP_HOST'], 0, 1);
  setcookie('ppmb_unair_email', "", time()-100000, "/", $_SERVER['HTTP_HOST'], 0, 1);
  unset($_COOKIE["ppmb_unair_token"]);
  unset($_COOKIE["ppmb_unair_email"]);
});
