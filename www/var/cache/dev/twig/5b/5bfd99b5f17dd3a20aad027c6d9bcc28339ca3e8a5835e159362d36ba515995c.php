<?php

/* BlogBundle:post:production.html.twig */
class __TwigTemplate_af4d0a65ae873f69aa61072d98723ead50bc7ed371ee33b45934889cd1a3b03c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "BlogBundle:post:production.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_921245becc4407aad4d89824536e24327d95cb5ed10a829f39b0219709bbf25e = $this->env->getExtension("native_profiler");
        $__internal_921245becc4407aad4d89824536e24327d95cb5ed10a829f39b0219709bbf25e->enter($__internal_921245becc4407aad4d89824536e24327d95cb5ed10a829f39b0219709bbf25e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:post:production.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_921245becc4407aad4d89824536e24327d95cb5ed10a829f39b0219709bbf25e->leave($__internal_921245becc4407aad4d89824536e24327d95cb5ed10a829f39b0219709bbf25e_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_dbcc9e11e72164673fd288b04fcfadf859433962d25cf4009da8b804b1349356 = $this->env->getExtension("native_profiler");
        $__internal_dbcc9e11e72164673fd288b04fcfadf859433962d25cf4009da8b804b1349356->enter($__internal_dbcc9e11e72164673fd288b04fcfadf859433962d25cf4009da8b804b1349356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Блог на продакшне";
        
        $__internal_dbcc9e11e72164673fd288b04fcfadf859433962d25cf4009da8b804b1349356->leave($__internal_dbcc9e11e72164673fd288b04fcfadf859433962d25cf4009da8b804b1349356_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_abc6c283c58d370507d048ca41074317a60f6028e6f3365663ba86ae5d0eb021 = $this->env->getExtension("native_profiler");
        $__internal_abc6c283c58d370507d048ca41074317a60f6028e6f3365663ba86ae5d0eb021->enter($__internal_abc6c283c58d370507d048ca41074317a60f6028e6f3365663ba86ae5d0eb021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Мой блог на продакшене</h1>
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
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
        
        $__internal_abc6c283c58d370507d048ca41074317a60f6028e6f3365663ba86ae5d0eb021->leave($__internal_abc6c283c58d370507d048ca41074317a60f6028e6f3365663ba86ae5d0eb021_prof);

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
        return array (  73 => 9,  69 => 8,  65 => 7,  60 => 6,  56 => 5,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
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
