<?php
namespace App\Controllers;
use Slim\Container;
use App\User;

class AuthController
{
    protected $container;
    protected $view;
    public static $user;

    public function __construct(Container $container) {
        $this->container = $container;
        $this->view = $this->container->get('view');
        $this->logger = $this->container->get('logger');
    }

    public function login($request, $response, $args) {
        if (isset ($_POST['email']) && isset ($_POST['katasandi'])) {
            $user = User::where('email', $_POST['email'])
                        ->where('password', $_POST['katasandi']);

            if ($user = $user->first()) {
                $token = md5(date('Y-m-d H:i:s'));
                $user->token = $token;
                $user->save();
                if (isset($_POST['simpan'])) {
                  setcookie('ppmb_unair_token', $token, time()+86400, "/", $_SERVER['HTTP_HOST'], 0, 1);
                  setcookie('ppmb_unair_email', $user->email, time()+86400, "/", $_SERVER['HTTP_HOST'], 0, 1);
                  $_SESSION['ppmb_unair_token'] = $token;
                  $_SESSION['ppmb_unair_email'] = $user->email;
                } else {
                  $_SESSION['ppmb_unair_token'] = $token;
                  $_SESSION['ppmb_unair_email'] = $user->email;
                }
                return $response->withRedirect('/tampil');
            }
            $this->logger->warning('email:' . $_POST['email'] . ', katasandi:' . $_POST['katasandi']);
        }
        return $this->view->render($response, 'login.phtml');
    }

    public function form($request, $response, $args)
    {
        if (self::getUser()) {
            return $response->withStatus(302)->withHeader('Location', '/tampil');
        }
        return $this->view->render($response, 'login.phtml');
    }

    public static function getUser() {
        $email;
        $token;
        if (isset($_SESSION['ppmb_unair_token'])) {
          if (isset($_SESSION['ppmb_unair_email'])) {
            $email = $_SESSION['ppmb_unair_email'];
            $token = $_SESSION['ppmb_unair_token'];
          }
        } else if (isset($_COOKIE['ppmb_unair_token'])) {
          if (isset($_COOKIE['ppmb_unair_email'])) {
            $email = $_COOKIE['ppmb_unair_email'];
            $token = $_COOKIE['ppmb_unair_token'];
          }
        } else {
            return false;
        }
        $user = User::where('email', $email)
                    ->where('token', $token)
                    ->first();
        return $user;
    }

}
