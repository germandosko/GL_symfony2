<?php

/* ::base.html.twig */
class __TwigTemplate_1690c8def9b69490c7e8bf604790182a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'change' => array($this, 'block_change'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head profile=\"http://www.w3.org/2005/10/profile\">
\t<title>Test Web Site</title>
\t <meta charset=\"UTF-8\" />
\t<link rel=\"icon\" type=\"image/png\" href=\"../resources/img/favicon.png\"/>
\t<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmegraphic/css/reset.css"), "html", null, true);
        echo "\" type=\"text/css\">
\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmegraphic/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\">\t\t
\t";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmegraphic/js/libs/jquery-1.7.1.min.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmegraphic/js/libs/jquery.corner.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmegraphic/js/libs/menu.js"), "html", null, true);
        echo "\"></script>
\t</head>
\t<body>\t
\t\t<div id=\"header_nav_body\">
\t\t\t<div id=\"header_nav\">
\t\t\t\t<div id=\"logo\">
\t\t\t\t\t<div class=\"center\">
\t\t\t\t\t\t<span>TEST WEBPAGE</span>
\t\t\t\t\t</div>\t
\t\t\t\t</div>
\t\t\t\t<div id=\"nav_bar\">
\t\t\t\t\t<ul class=\"menu\">
\t\t\t\t\t\t<li><a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_index"), "html", null, true);
        echo "\"><span id=\"IL_AD6\" class=\"IL_AD\">Inicio</span></a></li>
\t\t\t\t\t\t<li><a id=\"trabajos\" href=\"#\">Dise&ntilde;os</a>
\t\t\t\t\t\t\t<ul id='firstList'>
\t\t\t\t\t\t\t\t<li><a id=\"card\" href=\"#\">Tarjetas</a>
\t\t\t\t\t\t\t\t\t<ul id=\"cardList\" class='secondList'>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Personales</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"weddingGallery.php\">Casamiento</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"baptismGallery.php\">Bautismo</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"communionGallery.php\">Comuni&oacute;n</a></li>
\t\t\t\t\t\t\t\t\t</ul>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Folletos</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Talonarios AFIP</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Otros</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li><a href=\"#\">Promociones</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Ubicacion</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_contact"), "html", null, true);
        echo "\">Contacto</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t</div>\t\t\t
\t\t\t</div>
\t\t</div>
\t\t<div id=\"header\">
\t\t\t<div id=\"content\">
\t\t\t\t<div id=\"presentation\" style=\"display:none;\"> <!-- BORRAR DISPLAY-->
\t\t\t\t\t<div id=\"roundLogo\">
\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t<div id=\"imagen_presentacion\">
\t\t\t\t\t\t<div id=\"imagen_1\"></div>\t\t\t\t
\t\t\t\t\t\t<div id=\"imagen_2\"></div>
\t\t\t\t\t\t<div id=\"imagen_3\"></div>
\t\t\t\t\t\t<div id=\"marca_1\"></div>
\t\t\t\t\t\t<div id=\"marca_2\"></div>\t\t\t\t
\t\t\t\t\t\t<div id=\"marca_3\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix\"></div>\t\t\t\t
\t\t\t\t";
        // line 64
        $this->displayBlock('change', $context, $blocks);
        // line 65
        echo "\t
\t\t\t</div>
\t\t</div>\t
\t\t<div class=\"clearfix\"></div>
\t\t<div id=\"footer\">\t\t\t
\t\t\t<div id=\"info\">
\t\t\t\t<span class=\"footerText\">Rosario- Santa Fe - Argentina</span>
\t\t\t\t<span class=\"footerText\">Tel.: (0341) 4925877   e-mail: graphics@gmail.com </span>
\t\t\t</div>
\t\t</div>\t\t
\t</body>
</html>";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 64
    public function block_change($context, array $blocks = array())
    {
        // line 65
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
        return array (  134 => 65,  37 => 9,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 67,  181 => 66,  176 => 65,  170 => 61,  168 => 60,  146 => 58,  142 => 56,  131 => 64,  128 => 50,  125 => 44,  107 => 36,  38 => 6,  155 => 58,  144 => 53,  141 => 51,  139 => 55,  135 => 47,  126 => 9,  109 => 64,  103 => 37,  101 => 32,  70 => 20,  67 => 15,  61 => 13,  47 => 9,  105 => 24,  96 => 21,  93 => 28,  83 => 18,  76 => 16,  72 => 14,  68 => 12,  50 => 10,  27 => 4,  91 => 20,  84 => 42,  74 => 16,  66 => 15,  55 => 15,  94 => 39,  88 => 6,  79 => 17,  59 => 22,  21 => 1,  46 => 7,  29 => 7,  44 => 11,  35 => 5,  31 => 5,  43 => 7,  28 => 3,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 79,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  163 => 59,  159 => 61,  154 => 59,  147 => 55,  132 => 48,  127 => 46,  121 => 45,  118 => 44,  114 => 42,  104 => 36,  100 => 34,  78 => 21,  75 => 23,  71 => 19,  63 => 24,  58 => 9,  41 => 7,  34 => 11,  26 => 6,  24 => 3,  32 => 3,  25 => 3,  22 => 2,  19 => 1,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 60,  153 => 54,  151 => 53,  143 => 54,  138 => 51,  136 => 50,  133 => 43,  130 => 47,  122 => 43,  119 => 42,  116 => 35,  111 => 65,  108 => 31,  102 => 30,  98 => 31,  95 => 34,  92 => 33,  89 => 19,  85 => 25,  81 => 40,  73 => 19,  64 => 17,  60 => 23,  57 => 11,  54 => 10,  51 => 8,  48 => 12,  45 => 7,  42 => 6,  39 => 10,  36 => 5,  33 => 8,  30 => 7,);
    }
}
