<?php
// DIC configuration
$container = $app->getContainer();

// Register Twig View helper
$container['view'] = function ($c) {
    $view = new \Slim\Views\Twig(__DIR__ . '/../templates/', [
        'cache' => __DIR__ . '/../templates/cache/'
    ]);

    // Instantiate and add Slim specific extension
    $router = $c->get('router');
    $uri = \Slim\Http\Uri::createFromEnvironment(new \Slim\Http\Environment($_SERVER));
    $view->addExtension(new \Slim\Views\TwigExtension($router, $uri));

    return $view;
};

// monolog
$container['logger'] = function ($c) {
    // $settings = $c->get('settings')['logger'];
    // $logger = new Monolog\Logger($settings['name']);
    // $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    //
    // // the default date format is "Y-m-d H:i:s"
    // $dateFormat = "Y n j, g:i a";
    // // the default output format is "[%datetime%] %channel%.%level_name%: %message% %context% %extra%\n"
    // $output = "%datetime% > %level_name% > %message% %context% %extra%\n";
    // // finally, create a formatter
    // $formatter = new Monolog\Formatter\LineFormatter($output, $dateFormat);
    // $stream = new Monolog\Handler\StreamHandler($settings['path'], $settings['level']);
    // $stream->setFormatter($formatter);
    //
    // $logger->pushHandler($stream);
    // return $logger;

    $settings = $c->get('settings')['logger'];
    $logger = new Monolog\Logger($settings['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
    return $logger;
};

// Service factory for the ORM
$container['db'] = function ($container) {
    $capsule = new \Illuminate\Database\Capsule\Manager;
    $capsule->addConnection($container['settings']['db']);

    $capsule->setAsGlobal();
    $capsule->bootEloquent();

    return $capsule;
};

// Register provider
$container['flash'] = function () {
    return new \Slim\Flash\Messages();
};

$container['cookie'] = function ($container) {
    $request = $container->get('request');
    return new \Slim\Http\Cookies($request->getCookieParams());
};
