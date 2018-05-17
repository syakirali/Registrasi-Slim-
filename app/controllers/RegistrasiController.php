<?php
namespace App\Controllers;
use App\Prodi;
use App\Pendaftar;
use Slim\Container;

class RegistrasiController
{
    protected $container;
    protected $view;
    protected $flash;

    public function __construct(Container $container) {
        $this->container = $container;
        $this->view = $this->container->get('view');
        $this->flash = $this->container->get('flash');
    }

    /**
    *
    */
    public function regis($request, $response, $args)
    {
        if (isset($_POST['nik'])) {
            // if (($key = array_search($del_val, $messages)) !== false) {
            //     unset($messages[$key]);
            // }
            // unset($_POST);
            // foreach ($_POST as $key) {
            //   unset($_POST[array_search($key, $_POST)]);
              // print_r('<br>');
              // print_r($key . '<br>');
            // }
            // echo "<pre>";
            // print_r($_POST);
            // echo "<br>";
            // $a = array_keys($_POST);
            // for ($i=0; $i < count($a); $i++) {
            //   $_POST[$a[$i]] = '';
            // }
            // echo "<br>";
            // print_r($_POST);
            // print_r($a);
            // if (isset($_POST['nim'])) echo "string";
            // else echo "gak ada";
            // echo "</pre>";
            // die();
            $old = [];
            try {
                $pendaftar = Pendaftar::find($_POST['nik']);
                if ($pendaftar) {
                  $this->flash->addMessage('hasil', [
                    'pesan' => 'NIK' . $pendaftar->nik . ' sudah ada di database !', 'error' => true
                  ]);
                } else if (!is_numeric($_POST['nik'])) {
                    $this->flash->addMessage('hasil', [
                      'pesan' => 'NIK ' . $_POST['nik'] . ' tidak valid !', 'error' => true
                    ]);
                } else if (!is_numeric($_POST['no_seluler'])) {
                    $this->flash->addMessage('hasil', [
                      'pesan' => 'Nomor Seluler ' . $_POST['no_seluler'] . ' tidak valid !', 'error' => true
                    ]);
                } else if (!is_numeric($_POST['tlp_rumah'])) {
                    $this->flash->addMessage('hasil', [
                      'pesan' => 'Telpon Rumah ' . $_POST['telp_rumah'] . ' tidak valid !', 'error' => true
                    ]);
                } else {
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
                    $pendaftar->save();
                    $this->flash->addMessage('hasil', [
                      'pesan' => $pendaftar->nama . ' berhasil didaftarkan !', 'error' => false
                    ]);
                }
            } catch (Exception $e) {
                $this->flash->addMessage('hasil', [
                  'pesan' => 'gagal mendaftarkan ' . $_POST['nama'] . ' !', 'error' => true,
                ]);
            }

        }
        $this->flash->addMessage('old', $_POST);
        return $response->withStatus(302)->withHeader('Location', '/registrasi');
    }

    public function form($request, $response, $args) {
        $pesan = $this->flash->getFirstMessage('hasil')['pesan'];
        $error = $this->flash->getFirstMessage('hasil')['error'];
        $data_lama = $this->flash->getFirstMessage('old');
        $s1 = Prodi::where('jenjang', 'S1')->orderBy('nama')->get();
        $d4 = Prodi::where('jenjang', 'D4')->orderBy('nama')->get();
        $d3 = Prodi::where('jenjang', 'D3')->orderBy('nama')->get();
        if (!$error && isset($data_lama)) {
          $a = array_keys($data_lama);
          for ($i=0; $i < count($a); $i++) {
            $data_lama[$a[$i]] = '';
          }
        }
        $old = $data_lama;
        // $old['pilihan1'] = 'S1 - Akuntansi';
        // $old['pil1'] = '75';
        // $old['jenis_kelamin'] = 'l';
        // $old['agama'] = 'islam';
        // $old['nama'] = 'ajsf askjfaksjf sfd';
        // $old['nik'] = '09327892';
        // $old['tempat_lahir'] = 'afjlkjas fka';
        // $old['tanggal_lahir'] = '2018-05-09';
        // $old['asal_sekolah'] = 'afkjasf askfj';
        // $old['email'] = 'islam@afa.voj';
        // $old['alamat'] = 'ashflkajs fkasjfas f';
        // $old['no_seluler'] = '87528752702';
        // $old['tlp_rumah'] = '238298526';
        return $this->view->render($response, 'registrasi.phtml', [
          's1' => $s1, 'd4' => $d4, 'd3' => $d3, 'pesan' => $pesan, 'error' => $error, 'data_lama' => $old
        ]);
    }

    public function test($request, $response, $args)
    {
        // echo "<pre>";
        // print_r($app);
        // echo "</pre>";
        // print_r($router->getRoutes());
        // die();
        return $response->withRedirect("/registrasi", 'registrasi', 200);
    }
}

?>
