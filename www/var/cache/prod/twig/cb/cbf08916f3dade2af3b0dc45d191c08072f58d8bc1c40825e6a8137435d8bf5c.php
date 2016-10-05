<?php

/* @Blog/post/production.html.twig */
class __TwigTemplate_3375daaad72259281e11dcca94a08dcd33d4298fb10f323a3313e5a761c8e03b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle:Pages:layout.html.twig", "@Blog/post/production.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BlogBundle:Pages:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Блог на продакшне";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Мой блог на продакшене</h1>
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 6
            echo "            <h2>";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["post"], "title", array())), "html", null, true);
            echo "</h2>
            <p>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "description", array()), "html", null, true);
            echo "
            <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("create_showPost", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">...ещё</a></p>
            <p>";
            // line 9
            if ($this->getAttribute($context["post"], "datetime", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "datetime", array()), "Y-m-d H:i"), "html", null, true);
            }
            echo "</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "@Blog/post/production.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 9,  54 => 8,  50 => 7,  45 => 6,  41 => 5,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'BlogBundle:Pages:layout.html.twig' %}*/
/* {% block title %}Блог на продакшне{% endblock %}*/
/* {% block body %}*/
/*     <h1>Мой блог на продакшене</h1>*/
/*     {% for post in posts %}*/
/*             <h2>{{ post.title|upper }}</h2>*/
/*             <p>{{ post.description }}*/
/*             <a href="{{ path('create_showPost', { 'id': post.id }) }}">...ещё</a></p>*/
/*             <p>{% if post.datetime %}{{ post.datetime|date('Y-m-d H:i') }}{% endif %}</p>*/
/*     {% endfor %}*/
/* {% endblock %}*/
/* */
