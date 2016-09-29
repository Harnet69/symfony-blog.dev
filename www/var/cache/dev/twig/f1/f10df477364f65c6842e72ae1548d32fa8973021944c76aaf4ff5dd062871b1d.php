<?php

/* BlogBundle:post:showpost.html.twig */
class __TwigTemplate_7c2fb2a34ede6d16087e656e266939faa8d20cd92d6d04e8e053dd5a0081aa99 extends Twig_Template
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
        $__internal_3568202d6644b6e89b97e559d5174f086e7d1597a5803c26f7b5f91341c5c1be = $this->env->getExtension("native_profiler");
        $__internal_3568202d6644b6e89b97e559d5174f086e7d1597a5803c26f7b5f91341c5c1be->enter($__internal_3568202d6644b6e89b97e559d5174f086e7d1597a5803c26f7b5f91341c5c1be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:post:showpost.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3568202d6644b6e89b97e559d5174f086e7d1597a5803c26f7b5f91341c5c1be->leave($__internal_3568202d6644b6e89b97e559d5174f086e7d1597a5803c26f7b5f91341c5c1be_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_50a96fd5f5bd56db836e431d83c3f31a6cf7355323bd69c94966bb7c5fd991a7 = $this->env->getExtension("native_profiler");
        $__internal_50a96fd5f5bd56db836e431d83c3f31a6cf7355323bd69c94966bb7c5fd991a7->enter($__internal_50a96fd5f5bd56db836e431d83c3f31a6cf7355323bd69c94966bb7c5fd991a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "         <h2>";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "title", array())), "html", null, true);
        echo "</h2>
        <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "description", array()), "html", null, true);
        echo "
        <p>";
        // line 6
        if ($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "datetime", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "datetime", array()), "Y-m-d H:i"), "html", null, true);
        }
        echo "</p>
";
        
        $__internal_50a96fd5f5bd56db836e431d83c3f31a6cf7355323bd69c94966bb7c5fd991a7->leave($__internal_50a96fd5f5bd56db836e431d83c3f31a6cf7355323bd69c94966bb7c5fd991a7_prof);

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
        return array (  49 => 6,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*          <h2>{{ post.title|upper }}</h2>*/
/*         <p>{{ post.description }}*/
/*         <p>{% if post.datetime %}{{ post.datetime|date('Y-m-d H:i') }}{% endif %}</p>*/
/* {% endblock %}*/
