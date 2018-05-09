<?php
namespace App\Controllers;
use App\Prodi;
use App\Pendaftar;
use Slim\Container;
use Slim\Router;

class RegistrasiController
{
    protected $container;
    protected $view;

    public function __construct(Container $container) {
        $this->container = $container;
        $this->view = $this->container->get('view');
    }

    /**
    *
    */
    public function regis($request, $response, $args)
    {
        // $pesan = "asfasdfs asdfkasfh";
        // $error = true;
        $pesan;
        if (isset($_POST['nik'])) {
            $pendaftar = new Pendaftar;
            $pendaftar->nik = $_POST['nik'];
            $pendaftar->nama = $_POST['nama'];
            $pendaftar->tempat_lahir = $_POST['tempat_lahir'];
            $pendaftar->tanggal_lahir = $_POST['tanggal_lahir'];
            $pendaftar->asal_sekolah = $_POST['asal_sekolah'];
            $pendaftar->jenis_kelamin = $_POST['jenis_kelamin'];
            $pendaftar->agama = $_POST['agama'];
            $pendaftar->no_seluler = $_POST['no_seluler'];
            $pendaftar->tlp_rumah = $_POST['tlp_rumah'];
            $pendaftar->email = $_POST['email'];
            $pendaftar->alamat = $_POST['alamat'];
            $pendaftar->pilihan1 = $_POST['pil1'];
            $pendaftar->pilihan2 = $_POST['pil2'];
            $pendaftar->pilihan3 = $_POST['pil3'];
            if ($pendaftar->save()) {
                $pesan = $pendaftar->nama . ' berhasil didaftarkan !';
            } else {
                $pesan = 'gagal mendaftarkan ' . $pendaftar->nama . ' !';
                $error = true;
            }
        }
        $s1 = Prodi::where('jenjang', 'S1')->orderBy('nama')->get();
        $d4 = Prodi::where('jenjang', 'D4')->orderBy('nama')->get();
        $d3 = Prodi::where('jenjang', 'D3')->orderBy('nama')->get();
        return $this->view->render($response, 'registrasi.phtml', [
          's1' => $s1, 'd4' => $d4, 'd3' => $d3, 'pesan' => $pesan, 'error' => $error
        ]);
    }

    public function form($request, $response, $args) {

        $s1 = Prodi::where('jenjang', 'S1')->orderBy('nama')->get();
        $d4 = Prodi::where('jenjang', 'D4')->orderBy('nama')->get();
        $d3 = Prodi::where('jenjang', 'D3')->orderBy('nama')->get();
        return $this->view->render($response, 'registrasi.phtml', ['s1' => $s1, 'd4' => $d4, 'd3' => $d3]);
    }

    public function test($request, $response, $args)
    {
        // $router = new Router;
        // echo "<pre>";
        // print_r($app);
        // echo "</pre>";
        // print_r($router->getRoutes());
        // die();
        // $url = $router->pathFor('/registrasi', ['databaru' => true]);
        // return $response->withStatus(302)->withHeader('Location', $url);
        // die();
        // return $response;
        return $response->withRedirect("/registrasi", 'registrasi', 200);
        // die();
        // $this->form($request, $response, $args);
        // return $response->withRedirect('/');
        // return $container->redirect('/');
    }
}

?>