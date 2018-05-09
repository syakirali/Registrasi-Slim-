<?php
namespace App;
use Illuminate\Database\Capsule\Manager as Capsule;

class Database {

    function __construct($settings) {
    $capsule = new Capsule;
    $capsule->addConnection([
       'driver' => 'mysql',
       'host' => $settings['host'],
       'database' => $settings['dbname'],
       'username' => $settings['user'],
       'password' => $settings['pass'],
       'charset' => 'utf8',
       'collation' => 'utf8_unicode_ci',
       'prefix' => '',
    ]);
    // Setup the Eloquent ORM…
    $capsule->bootEloquent();
}

}
