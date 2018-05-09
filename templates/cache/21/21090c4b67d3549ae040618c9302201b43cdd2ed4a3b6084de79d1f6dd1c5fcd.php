<?php

/* tampil.phtml */
class __TwigTemplate_8d0a23990a6630d16669b8c6982533c07e908252195f6d64122cf13ee80f92f3 extends Twig_Template
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
<html lang=\"en\" dir=\"ltr\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"gambar/icon.png\">

    <!-- Bootstrap core CSS -->
    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"css/registrasi.css\" rel=\"stylesheet\">

    <link href=\"css/jquery.dataTables.min.css\" rel=\"stylesheet\">
    <title>Daftar - Pendaftaran Mahasiswa Baru Universitas Airlangga</title>
  </head>
  <body>
    <div class=\"row text-white\" style=\"background-color:#c12e3c\">
      <div class=\"container col-md-6 col-sm-12 cover-container d-flex h-100 p-3 mx-auto flex-column\">
        <header class=\"masthead mb-auto\">
          <div class=\"inner\">
            <a href=\"/\">
              <h3 class=\"masthead-brand\">PMB Universitas Airlangga</h3>
            </a>
            <nav class=\"nav nav-masthead justify-content-center\">
              <a class=\"nav-link\" href=\"/\">Beranda</a>
              <a class=\"nav-link\" href=\"/registrasi\">Registrasi</a>
              <a class=\"nav-link active\" href=\"/tampil\">Tampil</a>
            </nav>
          </div>
        </header>
      </div>
    </div>

    <div class=\"container col-md-12 col-sm-12\">
      <div class=\"containerku my-3 p-3 bg-white rounded box-shadow\">
        <h6 class=\"border-gray pb-2 mb-3\" style=\"border-bottom: 1px solid #c12e3c\">Data Pendaftar</h6>
        <div class=\"form-group row col-md-12\" style=\"font-size:0.875rem\">
          <table id=\"tabel-ppmb\" class=\"table table-hover table-responsive\">
            <thead>
              <tr>
                <th scope=\"col\">NIK</th>
                <th scope=\"col\">Nama</th>
                <th scope=\"col\">Asal Sekolah</th>
                <th scope=\"col\">#</th>
                <th scope=\"col\">No. Seluler</th>
                <th scope=\"col\">Email</th>
                <th scope=\"col\">Agama</th>
                <th scope=\"col\">Alamat</th>
                <th scope=\"col\">Pilihan I</th>
                <th scope=\"col\">Pilihan II</th>
                <th scope=\"col\">Pilihan III</th>
              </tr>
            </thead>
            <tbody>
              ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pendaftar"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 59
            echo "              <tr>
                <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "nik", array()));
            echo "</td>
                <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "nama", array()));
            echo "</td>
                <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "asal_sekolah", array()));
            echo "</td>
                <td>";
            // line 63
            echo (((twig_get_attribute($this->env, $this->source, $context["p"], "jenis_kelamin", array()) == "l")) ? ("Laki-laki") : ("Perempuan"));
            echo "</td>
                <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "no_seluler", array()));
            echo "</td>
                <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "email", array()));
            echo "</td>
                <td>";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "agama", array()));
            echo "</td>
                <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "alamat", array()));
            echo "</td>
                <td>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "pilihan1", array(), "method"), "nama", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "pilihan2", array(), "method"), "nama", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "pilihan3", array(), "method"), "nama", array()), "html", null, true);
            echo "</td>
              </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "            </tbody>
          </table>
        </div>
      </div>
    </div>

    <footer class=\"mastfoot mt-auto\">
      <div class=\"container\">
        <div class=\"inner\">
          <p>&copy; 2018 <a href=\"http://si.fst.unair.ac.id\">S1 Sistem Informasi Universitas Airlangga</a></p>
        </div>
      </div>
    </footer>

    <script src=\"js/jquery-3.3.1.slim.min.js\"></script>
    <script src=\"js/popper.min.js\"></script>
    <script src=\"js/bootstrap.min.js\"></script>
    <script src=\"js/jquery.dataTables.min.js\"></script>
    <script type=\"text/javascript\">
    \$(document).ready( function () {
      \$('#tabel-ppmb').DataTable();
    });
    </script>
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "tampil.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 73,  129 => 70,  125 => 69,  121 => 68,  117 => 67,  113 => 66,  109 => 65,  105 => 64,  101 => 63,  97 => 62,  93 => 61,  89 => 60,  86 => 59,  82 => 58,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "tampil.phtml", "/media/sam/Data/Project/Registrasi (Slim)2/templates/tampil.phtml");
    }
}
