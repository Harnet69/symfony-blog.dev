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
        $__internal_e10831a584780d03ccdf64e7d779f4dc57518d01587a5c251d716cc32fe7f3a8 = $this->env->getExtension("native_profiler");
        $__internal_e10831a584780d03ccdf64e7d779f4dc57518d01587a5c251d716cc32fe7f3a8->enter($__internal_e10831a584780d03ccdf64e7d779f4dc57518d01587a5c251d716cc32fe7f3a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:post:showpost.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e10831a584780d03ccdf64e7d779f4dc57518d01587a5c251d716cc32fe7f3a8->leave($__internal_e10831a584780d03ccdf64e7d779f4dc57518d01587a5c251d716cc32fe7f3a8_prof);

    }

    // line 2
    public function block_site_title($context, array $blocks = array())
    {
        $__internal_f42b0da8d71b4f76a90714035e4d7ec31105ca5cf6771c33bdc40fe50695cd58 = $this->env->getExtension("native_profiler");
        $__internal_f42b0da8d71b4f76a90714035e4d7ec31105ca5cf6771c33bdc40fe50695cd58->enter($__internal_f42b0da8d71b4f76a90714035e4d7ec31105ca5cf6771c33bdc40fe50695cd58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "site_title"));

        // line 3
        echo "         <h2>";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "title", array())), "html", null, true);
        echo "</h2>
     ";
        
        $__internal_f42b0da8d71b4f76a90714035e4d7ec31105ca5cf6771c33bdc40fe50695cd58->leave($__internal_f42b0da8d71b4f76a90714035e4d7ec31105ca5cf6771c33bdc40fe50695cd58_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_46b321b113c321f8dff2cc3f6d9012d5511afe318bf441490e80aa0873f777c8 = $this->env->getExtension("native_profiler");
        $__internal_46b321b113c321f8dff2cc3f6d9012d5511afe318bf441490e80aa0873f777c8->enter($__internal_46b321b113c321f8dff2cc3f6d9012d5511afe318bf441490e80aa0873f777c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "              <p>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "description", array()), "html", null, true);
        echo "</p>
             <p>";
        // line 7
        if ($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "datetime", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "datetime", array()), "Y-m-d H:i"), "html", null, true);
        }
        echo "</p>
     ";
        
        $__internal_46b321b113c321f8dff2cc3f6d9012d5511afe318bf441490e80aa0873f777c8->leave($__internal_46b321b113c321f8dff2cc3f6d9012d5511afe318bf441490e80aa0873f777c8_prof);

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
        return array (  62 => 7,  57 => 6,  51 => 5,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends '::page.html.twig' %}*/
/*      {% block site_title %}*/
/*          <h2>{{ post.title|upper }}</h2>*/
/*      {% endblock %}*/
/*      {% block main %}*/
/*               <p>{{ post.description }}</p>*/
/*              <p>{% if post.datetime %}{{ post.datetime|date('Y-m-d H:i') }}{% endif %}</p>*/
/*      {% endblock %}*/
