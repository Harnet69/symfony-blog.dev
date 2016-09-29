<?php

/* BlogBundle:Blog:blog.html.twig */
class __TwigTemplate_73b8ad5b89341d13610463fe0daefaf7146b004a1edbe136b22096a835cdd9f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "BlogBundle:Blog:blog.html.twig", 1);
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
        $__internal_d4d0c13df249e427c45ca7f4971973cf5cbff1e5c61f757644db18a5b952641a = $this->env->getExtension("native_profiler");
        $__internal_d4d0c13df249e427c45ca7f4971973cf5cbff1e5c61f757644db18a5b952641a->enter($__internal_d4d0c13df249e427c45ca7f4971973cf5cbff1e5c61f757644db18a5b952641a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Blog:blog.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4d0c13df249e427c45ca7f4971973cf5cbff1e5c61f757644db18a5b952641a->leave($__internal_d4d0c13df249e427c45ca7f4971973cf5cbff1e5c61f757644db18a5b952641a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f475b3f9fe8cfbc8f3c0d49284d617462f73b66fcfd92cf5dc93cda021e5df35 = $this->env->getExtension("native_profiler");
        $__internal_f475b3f9fe8cfbc8f3c0d49284d617462f73b66fcfd92cf5dc93cda021e5df35->enter($__internal_f475b3f9fe8cfbc8f3c0d49284d617462f73b66fcfd92cf5dc93cda021e5df35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "        <h1>Мой блог</h1>
    ";
        
        $__internal_f475b3f9fe8cfbc8f3c0d49284d617462f73b66fcfd92cf5dc93cda021e5df35->leave($__internal_f475b3f9fe8cfbc8f3c0d49284d617462f73b66fcfd92cf5dc93cda021e5df35_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Blog:blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* */
/* 	{% block body %}*/
/*         <h1>Мой блог</h1>*/
/*     {% endblock %}*/
