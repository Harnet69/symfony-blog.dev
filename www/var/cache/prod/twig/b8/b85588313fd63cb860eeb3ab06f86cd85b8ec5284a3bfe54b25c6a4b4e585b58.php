<?php

/* @Blog/Blog/blog.html.twig */
class __TwigTemplate_b1aa49c296b18d7b3d46f8a226016f314e348c2796f7f72a524264244aaca0db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Blog/Blog/blog.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "        <h1>Мой блог</h1>
    ";
    }

    public function getTemplateName()
    {
        return "@Blog/Blog/blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* */
/* 	{% block body %}*/
/*         <h1>Мой блог</h1>*/
/*     {% endblock %}*/
