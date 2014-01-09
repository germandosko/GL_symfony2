<?php

/* AcmeGraphicBundle::layout.html.twig */
class __TwigTemplate_7e41af558b3378d099e7db3447414ca8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" sizes=\"16x16\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmegraphic/css/reset.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmegraphic/css/style.css"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <header>
\t\t\t<ul>
\t\t\t\t<li><a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_welcome"), "html", null, true);
        echo "\">Home</a></li>
\t\t\t\t<li><a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_history"), "html", null, true);
        echo "\">History</a></li>\t\t\t\t
\t\t\t\t<li><a href=\"\">Customers</a></li>\t\t\t\t
\t\t\t\t<li><a href=\"\">Contact</a></li>\t\t\t\t
\t\t\t</ul>
\t\t</header>\t\t
\t\t<div id=\"wrapper\">        
\t\t\t";
        // line 20
        $this->displayBlock('content', $context, $blocks);
        // line 21
        echo "\t\t</div>
\t\t<footer>
\t\t\t<p>Informaci&oacute;n 1458 - Ciudad de Rosario - Provincia de Santa Fe</p>
\t\t</footer>
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Graphics";
    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "AcmeGraphicBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 20,  72 => 5,  62 => 21,  60 => 20,  51 => 14,  47 => 13,  39 => 8,  35 => 7,  31 => 6,  27 => 5,  21 => 1,);
    }
}
