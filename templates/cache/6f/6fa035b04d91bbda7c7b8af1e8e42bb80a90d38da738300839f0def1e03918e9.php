<?php

/* registrasi.phtml */
class __TwigTemplate_1678a2ae3f4d3bfb9f63431d21e8d85cd92c6466b45b6faf587f916480a3fd2c extends Twig_Template
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
              <a class=\"nav-link active\" href=\"#\">Registrasi</a>
              <a class=\"nav-link\" href=\"/tampil\">Tampil</a>
            </nav>
          </div>
        </header>
      </div>
    </div>

    <div class=\"container col-md-6 col-sm-12\">
      <form method=\"post\">

        ";
        // line 38
        if (($context["pesan"] ?? null)) {
            // line 39
            echo "        <div class=\"alert mt-3 ";
            echo ((($context["error"] ?? null)) ? ("alert-danger") : ("alert-primary"));
            echo " alert-dismissible fade show\" role=\"alert\">
          ";
            // line 40
            echo twig_escape_filter($this->env, ($context["pesan"] ?? null));
            echo "
          <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
          </button>
        </div>
        ";
        }
        // line 46
        echo "
        <div class=\"containerku my-3 p-3 bg-white rounded box-shadow\">
          <h6 class=\"border-gray pb-2 mb-3\" style=\"border-bottom: 1px solid #c12e3c\">Data Diri</h6>

          <div class=\"form-group row\">
            <label for=\"form_nik\" class=\"col-md-5 col-form-table\">NIK</label>
            <div class=\"col-md-7\">
              <input id=\"form_nik\" type=\"text\" class=\"form-control form-control-sm\" placeholder=\"NIK\" name=\"nik\" value=\"\" required>
            </div>
          </div>

          <div class=\"form-group row\">
            <div class=\"col-md-5\">
              <label for=\"form_nama\">Nama</label>
            </div>
            <div class=\"col-md-7\">
              <input id=\"form_nama\" type=\"text\" class=\"form-control form-control-sm\" placeholder=\"Nama\" name=\"nama\" value=\"\" required>
            </div>
          </div>

          <div class=\"form-group row\">
            <div class=\"col-md-5\">
              <label for=\"form_tempat_lahir\">Tempat, tanggal Lahir</label>
            </div>
            <div class=\"col-md-3\">
              <input id=\"form_tempat_lahir\" type=\"text\" class=\"form-control form-control-sm\" placeholder=\"Tempat Lahir\" name=\"tempat_lahir\" value=\"\" required>
            </div>
            <div class=\"col-md-4\">
              <input id=\"form_tanggal_lahir\" type=\"date\" class=\"form-control form-control-sm\" placeholder=\"Tanggal Lahir\" name=\"tanggal_lahir\" value=\"\" required>
            </div>
          </div>

          <div class=\"form-group row\">
            <div class=\"col-md-5\">
              <label for=\"form_asal_sekolah\">Asal Sekolah</label>
            </div>
            <div class=\"col-md-7\">
              <input id=\"form_asal_sekolah\" type=\"text\" class=\"form-control form-control-sm\" placeholder=\"Asal Sekolah\" name=\"asal_sekolah\" value=\"\" required>
            </div>
          </div>

          <div class=\"form-group row\">
            <div class=\"col-md-5\">
              <label for=\"form_jenis_kelamin\">Jenis Kelamin</label>
            </div>
            <div class=\"col-md-7\">
              <select id=\"form_jenis_kelamin\"class=\"custom-select form-control-sm\" name=\"jenis_kelamin\">
                <option selected>Pilih</option>
                <option value=\"l\">Laki-laki</option>
                <option value=\"p\">Perempuan</option>
              </select>
            </div>
          </div>

          <div class=\"form-group row\">
            <div class=\"col-md-5\">
              <label for=\"form_agama\">Agama</label>
            </div>
            <div class=\"col-md-7\">
              <select id=\"form_agama\" class=\"custom-select form-control-sm\" name=\"agama\">
                <option selected>Pilih</option>
                <option value=\"islam\">Islam</option>
                <option value=\"katolik\">Katolik</option>
                <option value=\"katolik\">Kristen</option>
                <option value=\"hindu\">Hindu</option>
                <option value=\"budha\">Budha</option>
                <option value=\"konghucu\">Konghucu</option>
              </select>
            </div>
          </div>

          <div class=\"form-group row\">
            <div class=\"col-md-5\">
              <label for=\"form_seluler\">No. Seluler</label>
            </div>
            <div class=\"col-md-7\">
              <div class=\"input-group\">
                <span type=\"text\" class=\"input-group-text\" style=\"padding: .25rem .5rem;font-size: .875rem;line-height: 1.5;border-radius: .2rem;\">+62</span>
                <input type=\"number\" name=\"no_seluler\" class=\"form-control form-control-sm\" id=\"form_seluler\" placeholder=\"Nomor Seluler\" aria-describedby=\"inputGroupPrepend\" required>
              </div>
            </div>
          </div>

          <div class=\"form-group row\">
            <div class=\"col-md-5\">
              <label for=\"form_tlp_rumah\">Telpon Rumah</label>
            </div>
            <div class=\"col-md-7\">
              <div class=\"input-group\">
                <span type=\"text\" class=\"input-group-text\" style=\"padding: .25rem .5rem;font-size: .875rem;line-height: 1.5;border-radius: .2rem;\">0</span>
                <input type=\"number\" name=\"tlp_rumah\" class=\"form-control form-control-sm\" id=\"form_telp_rumah\" placeholder=\"Nomor Seluler\" aria-describedby=\"inputGroupPrepend\" required>
              </div>
            </div>
          </div>

          <div class=\"form-group row\">
            <div class=\"col-md-5\">
              <label for=\"form_email\">Email</label>
            </div>
            <div class=\"col-md-7\">
              <input type=\"email\" name=\"email\" id=\"form_email\" class=\"form-control form-control-sm\" placeholder=\"Email\" value=\"\" required>
            </div>
          </div>

          <div class=\"form-group row\">
            <div class=\"col-md-5\">
              <label for=\"form_alamat\">Alamat</label>
            </div>
            <div class=\"col-md-7\">
              <textarea type=\"text\" id=\"form_alamat\" class=\"form-control form-control-sm\" placeholder=\"Alamat\" name=\"alamat\" value=\"\" required></textarea>
            </div>
          </div>
        </div>

        <div class=\"containerku my-3 p-3 bg-white rounded box-shadow\">
          <h6 class=\"border-gray pb-2 mb-3\" style=\"border-bottom: 1px solid #c12e3c\">Pilihan Program Studi</h6>

          <div class=\"form-group row\">
            <div class=\"col-md-5\">
              <label class=\"pilihan1\" for=\"form_pilihan1\">Pilihan Pertama</label>
            </div>
            <div class=\"col-md-7\">
              <input type=\"text\" id=\"form_pilihan1\" placeholder=\"pilih\" class=\"form-control input-prodi form-control-sm\" name=\"pilihan1\" readonly required>
              <input type=\"hidden\" name=\"pil1\" id=\"pil1\" value=\"\">
            </div>
          </div>

          <div class=\"form-group row\">
            <div class=\"col-md-5\">
              <label class=\"pilihan2\" for=\"form_pilihan2\">Pilihan Kedua</label>
            </div>
            <div class=\"col-md-7\">
              <input type=\"text\" id=\"form_pilihan2\" class=\"form-control input-prodi form-control-sm\" name=\"pilihan2\" placeholder=\"pilih\" readonly required>
              <input type=\"hidden\" name=\"pil2\" id=\"pil2\" value=\"\">

              <div id=\"master-pilihan\" style=\"display:none\">
                <div class=\"list-group d-flex mt-3\" id=\"list-tab\" role=\"tablist\" style=\"flex-direction:row\">
                  <button class=\"btn btn-sm mr-1 dropdown-toggle\" id=\"list-home-list\" data-toggle=\"list\" href=\"#datas1\" role=\"tab\" aria-controls=\"home\">S1</button>
                  <button class=\"btn btn-sm mr-1 dropdown-toggle\" id=\"list-profile-list\" data-toggle=\"list\" href=\"#datad4\" role=\"tab\" aria-controls=\"profile\">D4</button>
                  <button class=\"btn btn-sm dropdown-toggle\" id=\"list-messages-list\" data-toggle=\"list\" href=\"#datad3\" role=\"tab\" aria-controls=\"messages\">D3</button>
                </div>

                <div class=\"d-flex mt-3\">
                  <div class=\"tab-content\" id=\"nav-tabContent\" style=\"width:100%\">

                    <div class=\"tab-pane fade show\" id=\"datas1\" role=\"tabpanel\" aria-labelledby=\"list-home-list\">
                      <div class=\"list-group\">
                        ";
        // line 193
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["s1"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 194
            echo "                            <button type='button' idprodi='";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "id", array()), "html", null, true);
            echo "' class='list-group-item list-group-item-action piljur'>S1 - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "nama", array()));
            echo " ";
            echo (((twig_get_attribute($this->env, $this->source, $context["p"], "fakultas", array()) == 16)) ? (" - PDD Banyuwangi") : (""));
            echo "</button>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 196
        echo "                      </div>
                    </div>

                    <div class=\"tab-pane fade\" id=\"datad4\" role=\"tabpanel\" aria-labelledby=\"list-profile-list\">
                      <div class=\"list-group\">
                        ";
        // line 201
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["d4"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 202
            echo "                            <button type='button' idprodi='";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "id", array()), "html", null, true);
            echo "' class='list-group-item list-group-item-action piljur'>D4 - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "nama", array()));
            echo " ";
            echo (((twig_get_attribute($this->env, $this->source, $context["p"], "fakultas", array()) == 16)) ? (" - PDD Banyuwangi") : (""));
            echo "</button>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 204
        echo "                      </div>
                    </div>

                    <div class=\"tab-pane fade\" id=\"datad3\" role=\"tabpanel\" aria-labelledby=\"list-messages-list\">
                      <div class=\"list-group\">
                        ";
        // line 209
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["d3"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 210
            echo "                            <button type='button' idprodi='";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "id", array()), "html", null, true);
            echo "' class='list-group-item list-group-item-action piljur'>D3 - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "nama", array()));
            echo " ";
            echo (((twig_get_attribute($this->env, $this->source, $context["p"], "fakultas", array()) == 16)) ? (" - PDD Banyuwangi") : (""));
            echo "</button>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 212
        echo "                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class=\"form-group row\">
            <div class=\"col-md-5\">
              <label class=\"pilihan3\" for=\"form_pilihan3\">Pilihan Ketiga</label>
            </div>
            <div class=\"col-md-7\">
              <input type=\"text\" id=\"form_pilihan3\" placeholder=\"pilih\" class=\"form-control input-prodi form-control-sm\" data-toggle=\"tooltip\" data-html=\"true\" title=\"Anda sudah memilih prodi ini di pilihan ketiga\" name=\"pilihan3\" readonly required>
              <input type=\"hidden\" name=\"pil3\" id=\"pil3\" value=\"\">
            </div>
          </div>

        </div>

        <div class=\"container mb-3\">
          <input type=\"submit\" class=\"btn btn-secondary\" value=\"Daftar\"
          style=\"color:#fff;text-shadow:none;background-color:#c12e3c;border: .05rem solid #c12e3c;\">
        </div>

      </form>
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
    <script type=\"text/javascript\">
        \$('.input-prodi').focus(function(){
            console.log(\"focus\");
            \$(this).parent().append(\$('#master-pilihan'));
            \$('#master-pilihan').removeAttr('style');
        });
        \$('.input-prodi').focusout(function(){
            console.log('focusout');
        });
        \$('.piljur').click(function(){
            var terpilih = \$(this).html();
            var input = \$(this).closest('.col-md-7').children().first();
            if (!\$(this).attr('id')) {
              if (\$('#'+input.attr('name')).length !== 0) {
                \$('#'+input.attr('name')).removeAttr('id');
              }
              input.val(terpilih);
              console.log(\"memilih : \" + terpilih);
              var idprodi = \$(this).attr('idprodi');
              input.parent().find('input').last().val(idprodi);
              console.log(input.parent().find('input').last());
              \$(this).attr('id', input.attr('name'));
              \$('#master-pilihan').css(\"display\", \"none\");
              \$('.tab-pane.fade.show.active').attr(\"class\", \"tab-pane fade\");
              \$('.btn.btn-sm.mr-1.dropdown-toggle.active.show').attr(\"class\", \"btn btn-sm mr-1 dropdown-toggle\").attr(\"aria-selected\", \"false\");
            } else {
              // var temp = '.' + \$(this).attr('id');
              // var option = 'Kamu sudah memilih prodi ini di ' + \$(temp).html();
              // console.log(option);
              switch (\$(this).attr('id')) {
                case 'pilihan1':
                  \$('#form_pilihan1').tooltip('show');
                  break;
                case 'pilihan2':
                  \$('#form_pilihan2').tooltip('show');
                  break;
                case 'pilihan3':
                  \$('#form_pilihan3').tooltip('show');
                  break;
                default:
                  break;
              }
            }
        });
    </script>
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "registrasi.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 212,  279 => 210,  275 => 209,  268 => 204,  255 => 202,  251 => 201,  244 => 196,  231 => 194,  227 => 193,  78 => 46,  69 => 40,  64 => 39,  62 => 38,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "registrasi.phtml", "/media/sam/Data/Project/Registrasi (Slim)2/templates/registrasi.phtml");
    }
}
