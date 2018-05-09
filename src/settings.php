<?php
return [
  'settings' => [
    'displayErrorDetails' => true,
    'addContentLengthHeader' => false,

    // Renderer settings
    'renderer' => [
        'template_path' => __DIR__ . '/../templates/',
    ],

    'db' => [
      'host' => '127.0.0.1',
      'user' => 'root',
      'pass' => '',
      'dbname' => 'ppmb'
    ],

    // Monolog settings
    'logger' => [
        'name' => 'slim-app',
        'path' => isset($_ENV['docker']) ? 'php://stdout' : __DIR__ . '/../logs/app.log',
        'level' => \Monolog\Logger::DEBUG,
    ],
  ]
];
