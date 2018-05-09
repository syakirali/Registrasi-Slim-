<?php

/* index.phtml */
class __TwigTemplate_1c3a92841971d1473d622d649c2df5695f3a7efca5ee38eab2cbfb72d842f560 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"gambar/icon.png\">

    <title>Beranda - Pendaftaran Mahasiswa Baru</title>

    <!-- Bootstrap core CSS -->
    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"css/index.css\" rel=\"stylesheet\">
  </head>

  <body class=\"text-center\">

    <div class=\"cover-container d-flex h-100 p-3 mx-auto flex-column\">
      <header class=\"masthead mb-auto\">
        <div class=\"inner\">
          <h3 class=\"masthead-brand\"><a href=\"\" style=\"text-decoration:none!important\">PMB Universitas Airlangga</a></h3>
          <nav class=\"nav nav-masthead justify-content-center\">
            <a class=\"nav-link active\" href=\"\">Beranda</a>
            <a class=\"nav-link\" href=\"tampil\">Tampil</a>
          </nav>
        </div>
      </header>

      <main role=\"main\" class=\"inner cover\">
        <h1 class=\"cover-heading\">PMB 2018</h1>
        <p class=\"lead\">Selamat datang di website resmi pendaftaran mahasiswa baru jalur mandiri Universitas Airlangga 2018</p>
        <p class=\"lead\">
          <a href=\"registrasi\" class=\"btn btn-lg\"
          style=\"color:#fff;text-shadow:none;background-color:#c12e3c;border: .05rem solid #c12e3c;\">
          Daftar Sekarang</a>
        </p>
      </main>

      <footer class=\"mastfoot mt-auto\">
        <div class=\"inner text-white\">
          <p>
            <a href=\"http://si.fst.unair.ac.id\">S1 Sistem Informasi Universitas Airlangga</a>
            <br>&copy; 2018
          </p>
        </div>
      </footer>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"js/jquery-3.3.1.slim.min.js\"></script>
    <script src=\"js/popper.min.js\"></script>
    <script src=\"js/bootstrap.min.js\"></script>
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "index.phtml";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.phtml", "/media/sam/Data/Project/Registrasi (Slim)2/templates/index.phtml");
    }
}
