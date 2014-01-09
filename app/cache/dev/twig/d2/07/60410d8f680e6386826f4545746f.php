<?php

/* AcmeGraphicBundle:Control:baptism.html.twig */
class __TwigTemplate_d20760410d8f680e6386826f4545746f extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmegraphic/css/galleriffic-3.css"), "html", null, true);
        echo "\" type=\"text/css\">
";
    }

    // line 5
    public function block_javascripts($context, array $blocks = array())
    {
        // line 6
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmegraphic/js/libs/jquery.galleriffic.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmegraphic/js/libs/jquery.opacityrollover.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmegraphic/js/libs/action_gallery.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 10
    public function block_change($context, array $blocks = array())
    {
        // line 11
        echo "<div id=\"title_gallery\"><span>Sample Designs</span></div>
<!-- Start Advanced Gallery Html Containers -->
<div id=\"gallery\" class=\"content\">
\t<div id=\"controls\" class=\"controls\"></div>
\t<div class=\"slideshow-container\">
\t\t<div id=\"loading\" class=\"loader\"></div>
\t\t<div id=\"slideshow\" class=\"slideshow\"></div>
\t</div>
\t<div id=\"caption\" class=\"caption-container\"></div>
</div>
<div id=\"thumbs\" class=\"navigation\">
\t<ul class=\"thumbs noscript\">\t\t\t\t
\t\t<li>
\t\t\t<a class=\"thumb\" name=\"leaf\" href=\"<?php echo \"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmegraphic/img/galleries/baptism/tarjeta_bautismo_m_1.png"), "html", null, true);
        echo "\"?>\" title=\"Title #0\">
\t\t\t\t<img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmegraphic/img/galleries/baptism/tarjeta_bautismo_c_1.png"), "html", null, true);
        echo "\" alt=\"Title #0\" />
\t\t\t</a>
\t\t\t<div class=\"caption\">
\t\t\t\t<div class=\"image-title\">Title #0</div>
\t\t\t\t<div class=\"image-desc\">Description</div>
\t\t\t</div>
\t\t</li>
\t</ul>\t\t\t\t\t
</div>
<!-- End Advanced Gallery Html Containers -->
<div style=\"clear: both;\"></div>
";
    }

    public function getTemplateName()
    {
        return "AcmeGraphicBundle:Control:baptism.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 25,  76 => 24,  61 => 11,  58 => 10,  52 => 8,  48 => 7,  43 => 6,  40 => 5,  33 => 3,  30 => 2,);
    }
}
