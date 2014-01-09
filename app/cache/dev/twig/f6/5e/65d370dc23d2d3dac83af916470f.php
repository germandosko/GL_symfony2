<?php

/* AcmeGraphicBundle:Welcome:bienvenida.html.twig */
class __TwigTemplate_f65e65d370dc23d2d3dac83af916470f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeGraphicBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeGraphicBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "\t<h1>Bienvenidaaaaaa ";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_history"), "html", null, true);
        echo "</h1>
";
    }

    public function getTemplateName()
    {
        return "AcmeGraphicBundle:Welcome:bienvenida.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,);
    }
}
