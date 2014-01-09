<?php

/* AcmeGraphicBundle:Control:contact.html.twig */
class __TwigTemplate_154852b535bc4967807e296f1f043fc5 extends Twig_Template
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
        echo "\t<div id='contact'>
\t\t<div id='contact_left'>
\t\t\t<span class='titles'>TITLE</span><br/>
\t\t\t<span class='text'>All necessary information</span><br/><br/>\t
\t\t\t<span class='titles'>TITLE</span><br/>
\t\t\t<span class='text'>All necessary information</span><br/><br/>
\t\t\t<span class='titles'>TITLE</span><br/>
\t\t\t<span class='text'>All necessary information</span><br/><br/>
\t\t</div>
\t\t<div id='contact_right'>
\t\t\t<p>FORMULARIO CONTACTO</p>
\t\t\t<div id='line'></div>
\t\t\t<form action=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_contact"), "html", null, true);
        echo "\" method=\"post\" id=\"contactForm\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t\t\t\t";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t\t\t\t<input type=\"submit\" />
\t\t\t</form>
\t\t</div>\t
\t\t<div class=\"clearfix\"></div>
\t</div>
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
        return array (  62 => 19,  56 => 18,  42 => 6,  39 => 5,  32 => 3,  29 => 2,);
    }
}
