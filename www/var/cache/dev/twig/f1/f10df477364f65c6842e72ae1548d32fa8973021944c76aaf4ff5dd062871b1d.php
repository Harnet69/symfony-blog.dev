<?php

/* BlogBundle:post:showpost.html.twig */
class __TwigTemplate_7c2fb2a34ede6d16087e656e266939faa8d20cd92d6d04e8e053dd5a0081aa99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::page.html.twig", "BlogBundle:post:showpost.html.twig", 1);
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
        $__internal_9b3e0e4678286b908e70106a8e6dc00edab20a87d27a045ec715bfbe7e3cd136 = $this->env->getExtension("native_profiler");
        $__internal_9b3e0e4678286b908e70106a8e6dc00edab20a87d27a045ec715bfbe7e3cd136->enter($__internal_9b3e0e4678286b908e70106a8e6dc00edab20a87d27a045ec715bfbe7e3cd136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:post:showpost.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b3e0e4678286b908e70106a8e6dc00edab20a87d27a045ec715bfbe7e3cd136->leave($__internal_9b3e0e4678286b908e70106a8e6dc00edab20a87d27a045ec715bfbe7e3cd136_prof);

    }

    // line 2
    public function block_site_title($context, array $blocks = array())
    {
        $__internal_d41b877e316f7fb3d96c920b14d53c2ae77e12b6380542c81c1d98b086ce1562 = $this->env->getExtension("native_profiler");
        $__internal_d41b877e316f7fb3d96c920b14d53c2ae77e12b6380542c81c1d98b086ce1562->enter($__internal_d41b877e316f7fb3d96c920b14d53c2ae77e12b6380542c81c1d98b086ce1562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "site_title"));

        // line 3
        echo "         <h1>Мой блог на продакшене</h1>
     ";
        
        $__internal_d41b877e316f7fb3d96c920b14d53c2ae77e12b6380542c81c1d98b086ce1562->leave($__internal_d41b877e316f7fb3d96c920b14d53c2ae77e12b6380542c81c1d98b086ce1562_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_2a3f7ce3e651e22fd8f7645824a0d0f2e5ee6914203288ea88b617908b697393 = $this->env->getExtension("native_profiler");
        $__internal_2a3f7ce3e651e22fd8f7645824a0d0f2e5ee6914203288ea88b617908b697393->enter($__internal_2a3f7ce3e651e22fd8f7645824a0d0f2e5ee6914203288ea88b617908b697393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "             <h2>";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "title", array())), "html", null, true);
        echo "</h2>
             <p>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "description", array()), "html", null, true);
        echo "
             <p>";
        // line 8
        if ($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "datetime", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "datetime", array()), "Y-m-d H:i"), "html", null, true);
        }
        echo "</p>
     ";
        
        $__internal_2a3f7ce3e651e22fd8f7645824a0d0f2e5ee6914203288ea88b617908b697393->leave($__internal_2a3f7ce3e651e22fd8f7645824a0d0f2e5ee6914203288ea88b617908b697393_prof);

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
        return array (  64 => 8,  60 => 7,  55 => 6,  49 => 5,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends '::page.html.twig' %}*/
/*      {% block site_title %}*/
/*          <h1>Мой блог на продакшене</h1>*/
/*      {% endblock %}*/
/*      {% block main %}*/
/*              <h2>{{ post.title|upper }}</h2>*/
/*              <p>{{ post.description }}*/
/*              <p>{% if post.datetime %}{{ post.datetime|date('Y-m-d H:i') }}{% endif %}</p>*/
/*      {% endblock %}*/
