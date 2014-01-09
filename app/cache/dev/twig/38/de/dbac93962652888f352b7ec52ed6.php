<?php

/* AcmeGraphicBundle:Control:index.html.twig */
class __TwigTemplate_38dedbac93962652888f352b7ec52ed6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'change' => array($this, 'block_change'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmegraphic/css/feature-carousel.css"), "html", null, true);
        echo "\" type=\"text/css\">
";
    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        // line 7
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmegraphic/js/libs/jquery-1.7.1.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmegraphic/js/libs/jquery-ui-1.10.1.custom.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmegraphic/js/libs/jquery.featureCarousel.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmegraphic/js/libs/carousel_ready.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 13
    public function block_change($context, array $blocks = array())
    {
        // line 14
        echo "\t<div>
\t\t<h2 class=\"title_company\">Quienes Somos?</h2>
\t\t<p class=\"description_company\">Somos un grupo de jovenes profesionales dedicados a brindar a nuestros clientes soluciones efectivas en el &aacute;rea de la comunicaci&oacute;n y el dise&ntilde;o. Conformamos un equipo de trabajo responsable en el manejo de nuestras tareas y nos comprometemos con los requerimientos de nuestros clientes, trabajando en conjunto para poder brindarles soluciones gr&aacute;ficas de alto impacto.</p>\t\t
\t</div>
\t<a id=\"but_prev\" href=\"#\">PREV</a> | <a id=\"but_pause\" href=\"#\">PAUSE</a> | <a id=\"but_start\" href=\"#\">START</a> | <a id=\"but_next\" href=\"#\">NEXT</a> 
\t<div class=\"carousel-container\">
\t\t<div id=\"carousel\">
\t\t\t<div class=\"carousel-feature\">
\t\t\t\t<a href=\"#\"><img class=\"carousel-image\" alt=\"Image Caption\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmegraphic/img/sample1.jpg"), "html", null, true);
        echo "\"></a>
\t\t\t</div>
\t\t\t<div class=\"carousel-feature\">
\t\t\t\t<a href=\"#\"><img class=\"carousel-image\" alt=\"Image Caption\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmegraphic/img/sample2.jpg"), "html", null, true);
        echo "\"></a>
\t\t\t</div>
\t\t\t<div class=\"carousel-feature\">
\t\t\t\t<a href=\"#\"><img class=\"carousel-image\" alt=\"Image Caption\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmegraphic/img/sample3.jpg"), "html", null, true);
        echo "\"></a>
\t\t\t</div>
\t\t\t<div class=\"carousel-feature\">
\t\t\t\t<a href=\"#\"><img class=\"carousel-image\" alt=\"Image Caption\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmegraphic/img/sample4.jpg"), "html", null, true);
        echo "\"></a>
\t\t\t</div>
\t\t</div>
\t\t<div id=\"carousel-left\"><img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmegraphic/img/arrow-left.png"), "html", null, true);
        echo "\" /></div>
\t\t<div id=\"carousel-right\"><img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmegraphic/img/arrow-right.png"), "html", null, true);
        echo "\" /></div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "AcmeGraphicBundle:Control:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 35,  99 => 34,  93 => 31,  87 => 28,  81 => 25,  75 => 22,  65 => 14,  62 => 13,  56 => 10,  52 => 9,  48 => 8,  43 => 7,  40 => 6,  33 => 3,  30 => 2,);
    }
}
