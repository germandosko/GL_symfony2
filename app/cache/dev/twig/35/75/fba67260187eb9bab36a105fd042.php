<?php

/* AcmeGraphicBundle:Control:index.html.twig */
class __TwigTemplate_3575fba67260187eb9bab36a105fd042 extends Twig_Template
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
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmegraphic/css/index.css"), "html", null, true);
        echo "\" type=\"text/css\">\t
";
    }

    // line 5
    public function block_javascripts($context, array $blocks = array())
    {
        // line 6
        echo "\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmegraphic/js/libs/effectsIndex.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 8
    public function block_change($context, array $blocks = array())
    {
        // line 9
        echo "\t<div id=\"presentation\"> <!-- BORRAR DISPLAY-->
\t\t<div id=\"roundLogo\">
\t\t</div>\t\t\t\t\t
\t\t<div id=\"imagen_presentacion\">
\t\t\t<div id=\"imagen_1\"></div>\t\t\t\t
\t\t\t<div id=\"imagen_2\"></div>
\t\t\t<div id=\"imagen_3\"></div>
\t\t\t<div id=\"marca_1\"></div>
\t\t\t<div id=\"marca_2\"></div>\t\t\t\t
\t\t\t<div id=\"marca_3\"></div>
\t\t</div>
\t\t<div class=\"clearfix\"></div>
\t</div>
\t<div class=\"clearfix\"></div>\t
\t<p class=\"titles\">Welcome!!</p>
\t<p class=\"text\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\t\t\t\t
\t<div id=\"options\">
\t\t<div id=\"line\"></div>
\t\t<a id='effect1' class='effects'>Lorem</a>
\t\t<a id='effect2' class='effects'>Lorem</a>
\t\t<a id='effect3' class='effects'>Lorem</a>
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
        return array (  53 => 9,  50 => 8,  43 => 6,  40 => 5,  33 => 3,  30 => 2,);
    }
}
