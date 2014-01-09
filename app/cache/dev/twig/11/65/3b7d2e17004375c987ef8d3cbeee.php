<?php

/* AcmeGraphicBundle:Control:contact.html.twig */
class __TwigTemplate_11653b7d2e17004375c987ef8d3cbeee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmegraphic/css/contact.css"), "html", null, true);
        echo "\" type=\"text/css\">\t
";
    }

    // line 5
    public function block_change($context, array $blocks = array())
    {
        // line 6
        echo "\t\t\t<div id=\"administration\">
\t\t\t\t<a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_index"), "html", null, true);
        echo "\" title=\"back\" id=\"back_inicio\">
\t\t\t\t\t<img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmegraphic/img/back.png"), "html", null, true);
        echo "\" alt=\"Volver\" />
\t\t\t\t</a>
\t\t\t</div>\t
\t\t\t<div id='contact'>
\t\t\t\t\t<div id='contact_right'>
\t\t\t\t\t\t<h2>FORMULARIO CONTACTO</h2>
\t\t\t\t\t\t<div id='line'></div>
\t\t\t\t\t\t<form action=\"\" method=\"post\" id=\"contactForm\">
\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t<label for=\"name\" class=\"black\">Nombre</label>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" id=\"name\" class=\"shadow\" required/>
\t\t\t\t\t\t\t\t<label for=\"email\" class=\"black\">E-mail</label>
\t\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" id=\"email\" class=\"shadow\" required/>
\t\t\t\t\t\t\t\t<label for=\"telephone\" class=\"black\">Tel&eacute;fono</label>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"telephone\" id=\"telephone\" class=\"shadow\" />
\t\t\t\t\t\t\t\t<label for=\"question\" class=\"black\">Consulta</label>
\t\t\t\t\t\t\t\t<textarea name=\"question\" id=\"question\" class=\"shadow\" required></textarea>
\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"Enviar\" />
\t\t\t\t\t\t\t</fieldset>\t\t\t\t\t\t\t
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>\t
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t</div>
";
    }

    public function getTemplateName()
    {
        return "AcmeGraphicBundle:Control:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 8,  45 => 7,  42 => 6,  39 => 5,  32 => 3,  29 => 2,);
    }
}
