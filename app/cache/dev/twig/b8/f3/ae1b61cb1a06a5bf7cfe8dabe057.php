<?php

/* AcmeGraphicBundle:Control:promotion.html.twig */
class __TwigTemplate_b8f3ae1b61cb1a06a5bf7cfe8dabe057 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmegraphic/css/promotion.css"), "html", null, true);
        echo "\" type=\"text/css\">
\t<link href='http://fonts.googleapis.com/css?family=Rum+Raisin|Spicy+Rice|Lobster|Bowlby+One+SC|Snowburst+One' rel='stylesheet' type='text/css'>
";
    }

    // line 6
    public function block_change($context, array $blocks = array())
    {
        // line 7
        echo "\t<div id='promotion_head'>
\t\t<div id='promotion_move'>
\t\t\t<span>IMPSUM</span>
\t\t</div>
\t</div>
\t<div id='promotion'>
\t\t<h1>Promocion 1</h1>
\t\t<span>Promotion 1</span><br/><br/><span>Promotion 2</span><br/><br/><span>Promotion 3</span><br/><br/><span>Promotion 4</span><br/><br/><span>Promotion 5</span>
\t\t<div id='price'>\$000</div>
\t</div>
\t<div id='promotion'>
\t\t<h1>Promocion 2</h1>
\t\t<span>Promotion 1</span><br/><br/><span>Promotion 2</span><br/><br/><span>Promotion 3</span><br/><br/><span>Promotion 4</span><br/><br/><span>Promotion 5</span>
\t\t<div id='price'>\$000</div>
\t</div>
\t<div id='promotion'>
\t\t<h1>Promocion 3</h1>
\t\t<span>Promotion 1</span><br/><br/><span>Promotion 2</span><br/><br/><span>Promotion 3</span><br/><br/><span>Promotion 4</span><br/><br/><span>Promotion 5</span>
\t\t<div id='price'>\$000</div>
\t</div>
\t<div class=\"clearfix\"></div>
";
    }

    public function getTemplateName()
    {
        return "AcmeGraphicBundle:Control:promotion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  32 => 3,  29 => 2,);
    }
}
