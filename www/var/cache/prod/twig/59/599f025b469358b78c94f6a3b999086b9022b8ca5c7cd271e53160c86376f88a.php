<?php

/* BlogBundle:post:production.html.twig */
class __TwigTemplate_0c259edd23a533db054e0fe062b59d68984919d61c958218ec9caeed4d42e59f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::page.html.twig", "BlogBundle:post:production.html.twig", 1);
        $this->blocks = array(
            'site_title' => array($this, 'block_site_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_site_title($context, array $blocks = array())
    {
        // line 3
        echo "        <h1>The hornet's nest news</h1>
     ";
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 7
            echo "                <h2><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("create_showPost", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["post"], "title", array())), "html", null, true);
            echo "</a></h2>
                <p id=\"post_date\">";
            // line 8
            if ($this->getAttribute($context["post"], "datetime", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "datetime", array()), "Y-m-d H:i"), "html", null, true);
            }
            echo "</p>
                <p>";
            // line 9
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["post"], "description", array()), 0, 300), "html", null, true);
            echo "
                <a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("create_showPost", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">...ещё</a></p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "     ";
    }

    public function getTemplateName()
    {
        return "BlogBundle:post:production.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 12,  62 => 10,  58 => 9,  52 => 8,  45 => 7,  40 => 6,  37 => 5,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends '::page.html.twig' %}*/
/*      {% block site_title %}*/
/*         <h1>The hornet's nest news</h1>*/
/*      {% endblock %}*/
/*      {% block main %}*/
/*         {% for post in posts %}*/
/*                 <h2><a href="{{ path('create_showPost', { 'id': post.id }) }}">{{ post.title|upper }}</a></h2>*/
/*                 <p id="post_date">{% if post.datetime %}{{ post.datetime|date('Y-m-d H:i') }}{% endif %}</p>*/
/*                 <p>{{ post.description|slice(0, 300) }}*/
/*                 <a href="{{ path('create_showPost', { 'id': post.id }) }}">...ещё</a></p>*/
/*         {% endfor %}*/
/*      {% endblock %}*/
