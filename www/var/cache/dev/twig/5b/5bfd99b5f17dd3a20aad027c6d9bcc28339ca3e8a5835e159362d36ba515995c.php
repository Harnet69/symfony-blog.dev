<?php

/* BlogBundle:post:production.html.twig */
class __TwigTemplate_af4d0a65ae873f69aa61072d98723ead50bc7ed371ee33b45934889cd1a3b03c extends Twig_Template
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
        $__internal_8832503d42de86daca13bca87d92b1e217aa0c6e23fe42eb20c4961d6b10d34c = $this->env->getExtension("native_profiler");
        $__internal_8832503d42de86daca13bca87d92b1e217aa0c6e23fe42eb20c4961d6b10d34c->enter($__internal_8832503d42de86daca13bca87d92b1e217aa0c6e23fe42eb20c4961d6b10d34c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:post:production.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8832503d42de86daca13bca87d92b1e217aa0c6e23fe42eb20c4961d6b10d34c->leave($__internal_8832503d42de86daca13bca87d92b1e217aa0c6e23fe42eb20c4961d6b10d34c_prof);

    }

    // line 2
    public function block_site_title($context, array $blocks = array())
    {
        $__internal_cd42af6b222aa367b77ffee64b722431113fae2ccbc765d2c4ba44b8bfa5a77a = $this->env->getExtension("native_profiler");
        $__internal_cd42af6b222aa367b77ffee64b722431113fae2ccbc765d2c4ba44b8bfa5a77a->enter($__internal_cd42af6b222aa367b77ffee64b722431113fae2ccbc765d2c4ba44b8bfa5a77a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "site_title"));

        // line 3
        echo "        <h1>Мой блог на продакшене</h1>
     ";
        
        $__internal_cd42af6b222aa367b77ffee64b722431113fae2ccbc765d2c4ba44b8bfa5a77a->leave($__internal_cd42af6b222aa367b77ffee64b722431113fae2ccbc765d2c4ba44b8bfa5a77a_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_57b764ac28e594c17c8d976f6b45020f178573d0bc953d0b49acb3e44dc84545 = $this->env->getExtension("native_profiler");
        $__internal_57b764ac28e594c17c8d976f6b45020f178573d0bc953d0b49acb3e44dc84545->enter($__internal_57b764ac28e594c17c8d976f6b45020f178573d0bc953d0b49acb3e44dc84545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 7
            echo "                <h2>";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["post"], "title", array())), "html", null, true);
            echo "</h2>
                <p>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "description", array()), "html", null, true);
            echo "
                <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("create_showPost", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">...ещё</a></p>
                <p>";
            // line 10
            if ($this->getAttribute($context["post"], "datetime", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "datetime", array()), "Y-m-d H:i"), "html", null, true);
            }
            echo "</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "     ";
        
        $__internal_57b764ac28e594c17c8d976f6b45020f178573d0bc953d0b49acb3e44dc84545->leave($__internal_57b764ac28e594c17c8d976f6b45020f178573d0bc953d0b49acb3e44dc84545_prof);

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
        return array (  83 => 12,  73 => 10,  69 => 9,  65 => 8,  60 => 7,  55 => 6,  49 => 5,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends '::page.html.twig' %}*/
/*      {% block site_title %}*/
/*         <h1>Мой блог на продакшене</h1>*/
/*      {% endblock %}*/
/*      {% block main %}*/
/*         {% for post in posts %}*/
/*                 <h2>{{ post.title|upper }}</h2>*/
/*                 <p>{{ post.description }}*/
/*                 <a href="{{ path('create_showPost', { 'id': post.id }) }}">...ещё</a></p>*/
/*                 <p>{% if post.datetime %}{{ post.datetime|date('Y-m-d H:i') }}{% endif %}</p>*/
/*         {% endfor %}*/
/*      {% endblock %}*/
