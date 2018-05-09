<?php
if (PHP_SAPI == 'cli-server') {
    // To help the built-in PHP dev server, check if the request was actually for
    // something which should probably be served as a static file
    $url  = parse_url($_SERVER['REQUEST_URI']);
    $file = __DIR__ . $url['path'];
    if (is_file($file)) {
        return false;
    }
}

session_start();

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require __DIR__ . '/../vendor/autoload.php';

$settings = require __DIR__ . '/../src/settings.php';

new App\Database($settings['settings']['db']);

$app = new \Slim\App($settings);

// dependencies
require __DIR__ . '/../src/dependencies.php';

// routes
require __DIR__ . '/../src/routes.php';

$app->run();
