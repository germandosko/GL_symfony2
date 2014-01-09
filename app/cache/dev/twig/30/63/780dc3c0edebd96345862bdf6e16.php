<?php

/* ::base.html.twig */
class __TwigTemplate_3063780dc3c0edebd96345862bdf6e16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'change' => array($this, 'block_change'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
\t<head profile=\"http://www.w3.org/2005/10/profile\">
\t\t<title>Lion Graphics</title>
\t\t<meta charset=\"UTF-8\" />
\t\t<link rel=\"icon\" type=\"image/png\" href=\"../resources/img/favicon.png\"/>
\t\t<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmegraphic/css/reset.css"), "html", null, true);
        echo "\" type=\"text/css\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmegraphic/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\">\t\t
\t\t<link href='http://fonts.googleapis.com/css?family=Patrick+Hand+SC' rel='stylesheet' type='text/css'>
\t\t";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "\t\t";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "\t</head>
\t<body>
\t\t<div id=\"header\">
\t\t\t<a id=\"contacto\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_contact"), "html", null, true);
        echo "\">Contacto</a>
\t\t\t<div id=\"content_block\">
\t\t\t\t<div id=\"block_logo\"></div>
\t\t\t\t<div id=\"block_menu\">
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<nav>
\t\t\t\t\t\t<ul id=\"menu\">
\t\t\t\t\t\t\t<li><a style=\"border-top-left-radius:25px\" href=\"#\">Tarjetas</a>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Personales</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">15 A&ntilde;os</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Bautismo</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Casamiento</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Comunion</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li><a href=\"#\">Folletos</a>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Tinta Negra</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">1 Color</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Full Color</a></li>\t
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li><a href=\"#\">Talonarios</a>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Facturas</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Presupuestos</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Anotadores</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Recibos</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li><a href=\"#\">Otros</a>
\t\t\t\t\t\t\t\t<ul >
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Etiquetas</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Imanes</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Sobres</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Membretada</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Rifas</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Carpetas</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"last\"><a href=\"#\" style=\"border-top-right-radius:25px; border-right:none\">Dise&ntilde;os</a>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Dise&ntilde;os 1</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Dise&ntilde;os 2</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Dise&ntilde;os 3</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Dise&ntilde;os 4</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Dise&ntilde;os 5</a></li>\t\t
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t</div>
\t\t\t<div id=\"content\" style=\"border:none\">
\t\t\t\t";
        // line 72
        $this->displayBlock('change', $context, $blocks);
        // line 74
        echo "\t\t\t</div>
\t\t</div>\t\t
\t\t<div class=\"clearfix\"></div>
\t\t<div id=\"footer\">\t\t\t
\t\t\t<div id=\"info\">
\t\t\t\t<p id=\"footer_info_small\">Tel.: (0341) 4925877 - graficaleon@gmail.com - Face:Grafika Leon</p>
\t\t\t\t<div class='footer_info'>
\t\t\t\t\t<div id='phone_image' class='footer_image'></div>
\t\t\t\t\t<div class='footer_text'>
\t\t\t\t\t\t<span>Tel.: (0341) 4925877</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t</div>
\t\t\t\t<div class='footer_info'>
\t\t\t\t\t<div id='email_image' class='footer_image'></div>
\t\t\t\t\t<div class='footer_text'>
\t\t\t\t\t\t<span>graficaleon@gmail.com</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t</div>
\t\t\t\t<div class='footer_info'>
\t\t\t\t\t<div id='face_image' class='footer_image'></div>
\t\t\t\t\t<div class='footer_text'>
\t\t\t\t\t\t<span><a  href=\"https://www.facebook.com/grafika.leon\">Grafika Leon</a></span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t</div>
\t\t</div>\t\t
\t</body>
</html>";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 72
    public function block_change($context, array $blocks = array())
    {
        // line 73
        echo "\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 73,  156 => 72,  151 => 11,  146 => 10,  111 => 74,  109 => 72,  49 => 15,  44 => 12,  41 => 11,  39 => 10,  34 => 8,  22 => 1,  103 => 35,  99 => 34,  93 => 31,  87 => 28,  81 => 25,  75 => 22,  65 => 14,  62 => 13,  56 => 10,  52 => 9,  48 => 8,  43 => 7,  40 => 6,  33 => 3,  30 => 7,);
    }
}
