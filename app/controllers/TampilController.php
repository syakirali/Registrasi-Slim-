<?php
namespace App\Controllers;
use Slim\Container;
use App\Pendaftar;
use App\Controllers\AuthControllers;

class TampilController
{
    protected $container;
    protected $view;

    public function __construct(Container $container) {
        $this->container = $container;
        $this->view = $this->container->get('view');
    }

    public function tampil($request, $response, $args)
    {
        // print_r(AuthController::getUser());
        // die();
        if ( !AuthController::getUser() ) {
            return $response->withRedirect('/login');
            // die();
        }
        $pendaftar = Pendaftar::all();
        return $this->view->render($response, 'tampil.phtml', ['pendaftar' => $pendaftar]);
    }
}

?>
