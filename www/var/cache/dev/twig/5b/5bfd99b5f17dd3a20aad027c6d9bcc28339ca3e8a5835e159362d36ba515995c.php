<?php

/* BlogBundle:post:production.html.twig */
class __TwigTemplate_af4d0a65ae873f69aa61072d98723ead50bc7ed371ee33b45934889cd1a3b03c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "BlogBundle:post:production.html.twig", 1);
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
        $__internal_a9198680c1b243725e8610fafd4f8095eaab94bd41a619b561b34194bf945f3e = $this->env->getExtension("native_profiler");
        $__internal_a9198680c1b243725e8610fafd4f8095eaab94bd41a619b561b34194bf945f3e->enter($__internal_a9198680c1b243725e8610fafd4f8095eaab94bd41a619b561b34194bf945f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:post:production.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9198680c1b243725e8610fafd4f8095eaab94bd41a619b561b34194bf945f3e->leave($__internal_a9198680c1b243725e8610fafd4f8095eaab94bd41a619b561b34194bf945f3e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_eda8238864b6eb81ca12b4e528dec1273ba0119b30749bf026baef246ba9d6c0 = $this->env->getExtension("native_profiler");
        $__internal_eda8238864b6eb81ca12b4e528dec1273ba0119b30749bf026baef246ba9d6c0->enter($__internal_eda8238864b6eb81ca12b4e528dec1273ba0119b30749bf026baef246ba9d6c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_eda8238864b6eb81ca12b4e528dec1273ba0119b30749bf026baef246ba9d6c0->leave($__internal_eda8238864b6eb81ca12b4e528dec1273ba0119b30749bf026baef246ba9d6c0_prof);

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
        return array (  60 => 9,  56 => 8,  52 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
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
