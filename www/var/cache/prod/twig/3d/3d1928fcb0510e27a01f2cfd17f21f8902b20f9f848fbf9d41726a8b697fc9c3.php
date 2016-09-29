<?php

/* BlogBundle:post:showpost.html.twig */
class __TwigTemplate_21f145636f2beb00a865d52fb7d168de5ae8b4ecc022f3080332c375a844c9cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "BlogBundle:post:showpost.html.twig", 1);
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
        echo "         <h2>";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title", array())), "html", null, true);
        echo "</h2>
        <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "description", array()), "html", null, true);
        echo "
        <p>";
        // line 6
        if ($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "datetime", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "datetime", array()), "Y-m-d H:i"), "html", null, true);
        }
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "BlogBundle:post:showpost.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  36 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*          <h2>{{ post.title|upper }}</h2>*/
/*         <p>{{ post.description }}*/
/*         <p>{% if post.datetime %}{{ post.datetime|date('Y-m-d H:i') }}{% endif %}</p>*/
/* {% endblock %}*/
