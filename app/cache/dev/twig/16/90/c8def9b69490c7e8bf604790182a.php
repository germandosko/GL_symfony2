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
            'javascripts' => array($this, 'block_javascripts'),
            'change' => array($this, 'block_change'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head profile=\"http://www.w3.org/2005/10/profile\">
\t\t<title>Test Web Site</title>
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
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmegraphic/js/libs/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmegraphic/js/libs/menu.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmegraphic/js/libs/jquery-ui-1.10.1.custom.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmegraphic/js/libs/effects.js"), "html", null, true);
        echo "\"></script>
\t\t";
        // line 15
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
        echo "\t</head>
\t<body>\t
\t\t<header>
\t\t\t<div id=\"header_nav\">
\t\t\t\t<div id=\"logo\">
\t\t\t\t\t<div class=\"center\">
\t\t\t\t\t\t<span>TEST WEBPAGE</span>
\t\t\t\t\t</div>\t
\t\t\t\t</div>
\t\t\t\t<nav>
\t\t\t\t\t<ul class=\"menu\">
\t\t\t\t\t\t<li><a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_index"), "html", null, true);
        echo "\"><span id=\"IL_AD6\" class=\"IL_AD\">Inicio</span></a></li>
\t\t\t\t\t\t<li><a id=\"trabajos\" href=\"#\">Dise&ntilde;os</a>
\t\t\t\t\t\t\t<ul id='firstList'>
\t\t\t\t\t\t\t\t<li><a id=\"card\" href=\"#\">Tarjetas</a>
\t\t\t\t\t\t\t\t\t<ul id=\"cardList\" class='secondList'>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Personales</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wedding"), "html", null, true);
        echo "\">Casamiento</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_baptism"), "html", null, true);
        echo "\">Bautismo</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_communion"), "html", null, true);
        echo "\">Comuni&oacute;n</a></li>
\t\t\t\t\t\t\t\t\t</ul>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a id=\"brochure\" href=\"#\">Folletos</a>
\t\t\t\t\t\t\t\t\t<ul id=\"brochureList\" class='secondList'>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Personales</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wedding"), "html", null, true);
        echo "\">Casamiento</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_baptism"), "html", null, true);
        echo "\">Bautismo</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_communion"), "html", null, true);
        echo "\">Comuni&oacute;n</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Talonarios AFIP</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Otros</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li><a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_promotion"), "html", null, true);
        echo "\">Promociones</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_contact"), "html", null, true);
        echo "\">Contacto</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<a id='linkFactura' href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_invoice"), "html", null, true);
        echo "\">Lorem Ipsum</a>
\t\t\t\t</nav>\t\t\t
\t\t\t</div>
\t\t</header>
\t\t<div id=\"center\">
\t\t\t<div id=\"content\">\t\t\t
\t\t\t\t";
        // line 60
        $this->displayBlock('change', $context, $blocks);
        // line 61
        echo "\t
\t\t\t</div>
\t\t</div>\t
\t\t<div class=\"clearfix\"></div>
\t\t<footer>\t\t\t
\t\t\t<div id=\"info\">
\t\t\t\t<span class=\"footerText\">Rosario- Santa Fe - Argentina</span>
\t\t\t\t<span class=\"footerText\">Tel.: (0341) 4925877   e-mail: graphics@gmail.com </span>
\t\t\t</div>
\t\t</footer>\t\t
\t</body>
</html>";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 60
    public function block_change($context, array $blocks = array())
    {
        // line 61
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
        return array (  166 => 61,  163 => 60,  158 => 15,  153 => 10,  138 => 61,  136 => 60,  127 => 54,  121 => 51,  117 => 50,  107 => 43,  103 => 42,  99 => 41,  90 => 35,  86 => 34,  82 => 33,  73 => 27,  60 => 16,  58 => 15,  54 => 14,  46 => 12,  41 => 11,  39 => 10,  34 => 8,  22 => 1,  53 => 9,  50 => 13,  43 => 6,  40 => 5,  33 => 3,  30 => 7,);
    }
}
