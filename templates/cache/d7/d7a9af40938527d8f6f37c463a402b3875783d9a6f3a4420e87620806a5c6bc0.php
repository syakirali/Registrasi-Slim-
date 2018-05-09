<?php

/* login.phtml */
class __TwigTemplate_f131f38d41ccc98c1436f3246fcc444e5d804f9ed799d85672c6300625971d30 extends Twig_Template
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

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"css/login.css\" rel=\"stylesheet\">
  </head>

  <body class=\"text-center\">
    <form id=\"login_form\" class=\"form-signin\" method=\"post\">
      <a class=\"mb-4\" href=\"/\">
        <img src=\"gambar/icon.png\" alt=\"\" width=\"72\" height=\"72\">
      </a>
      <h1 class=\"h3 mb-3 font-weight-normal\">Masuk</h1>
      <label for=\"inputEmail\" class=\"sr-only\">Email</label>
      <input type=\"email\" id=\"inputEmail\" class=\"form-control\" name=\"email\" placeholder=\"Alamat email\" required autofocus>
      <label for=\"inputPassword\" class=\"sr-only\">Kata Sandi</label>
      <input type=\"password\" id=\"inputPassword\" name=\"katasandi\" class=\"form-control\" placeholder=\"Kata sandi\" required>
      <div class=\"checkbox mb-3\">
        <label>
          <input type=\"checkbox\" name=\"simpan\" value=\"remember-me\"> Ingat saya
        </label>
      </div>
      <input type=\"submit\" class=\"btn btn-lg btn-block\" value=\"Masuk\"
      style=\"color:#fff;text-shadow:none;background-color:#c12e3c;border: .05rem solid #c12e3c;\">
      <p class=\"mt-5 mb-3 text-muted\">&copy; 2017-2018</p>
    </form>
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "login.phtml";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "login.phtml", "/media/sam/Data/Project/Registrasi (Slim)2/templates/login.phtml");
    }
}
