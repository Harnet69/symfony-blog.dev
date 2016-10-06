<?php

/* base.html.twig */
class __TwigTemplate_ccdc4b2a4833658c7e1b5ecefeebe7cc177c834a9e6b604dc3096d698085071b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_466a4b6537f685a5102726f2f4804a14780fbaeef67d0abd1cb30dc6fdfdacdf = $this->env->getExtension("native_profiler");
        $__internal_466a4b6537f685a5102726f2f4804a14780fbaeef67d0abd1cb30dc6fdfdacdf->enter($__internal_466a4b6537f685a5102726f2f4804a14780fbaeef67d0abd1cb30dc6fdfdacdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"/bundles/BlogBundle/images/hornet_logo.ico\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 14
        echo "    </body>
</html>
";
        
        $__internal_466a4b6537f685a5102726f2f4804a14780fbaeef67d0abd1cb30dc6fdfdacdf->leave($__internal_466a4b6537f685a5102726f2f4804a14780fbaeef67d0abd1cb30dc6fdfdacdf_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3199ae691285d32d48ff83d6241b49969a884143e0d1dcd5d17b2da16ba34022 = $this->env->getExtension("native_profiler");
        $__internal_3199ae691285d32d48ff83d6241b49969a884143e0d1dcd5d17b2da16ba34022->enter($__internal_3199ae691285d32d48ff83d6241b49969a884143e0d1dcd5d17b2da16ba34022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Мой блог";
        
        $__internal_3199ae691285d32d48ff83d6241b49969a884143e0d1dcd5d17b2da16ba34022->leave($__internal_3199ae691285d32d48ff83d6241b49969a884143e0d1dcd5d17b2da16ba34022_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9dfb2136a178b8ed0dc8ecb9204957ab5da0ceb9648a52e40a7b6c9eaa00c5a9 = $this->env->getExtension("native_profiler");
        $__internal_9dfb2136a178b8ed0dc8ecb9204957ab5da0ceb9648a52e40a7b6c9eaa00c5a9->enter($__internal_9dfb2136a178b8ed0dc8ecb9204957ab5da0ceb9648a52e40a7b6c9eaa00c5a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"bundles/BlogBundle/css/symfony-blog.css\" />
        ";
        
        $__internal_9dfb2136a178b8ed0dc8ecb9204957ab5da0ceb9648a52e40a7b6c9eaa00c5a9->leave($__internal_9dfb2136a178b8ed0dc8ecb9204957ab5da0ceb9648a52e40a7b6c9eaa00c5a9_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_b01bdc801f2821c554c36f61520ed6b887e74a68bba8ece3e6361e4a9f457e43 = $this->env->getExtension("native_profiler");
        $__internal_b01bdc801f2821c554c36f61520ed6b887e74a68bba8ece3e6361e4a9f457e43->enter($__internal_b01bdc801f2821c554c36f61520ed6b887e74a68bba8ece3e6361e4a9f457e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b01bdc801f2821c554c36f61520ed6b887e74a68bba8ece3e6361e4a9f457e43->leave($__internal_b01bdc801f2821c554c36f61520ed6b887e74a68bba8ece3e6361e4a9f457e43_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ac60aa3b163fd6d2e033d9886bf4519b0d48fb5a55c5e9340ab7ca7f008d891f = $this->env->getExtension("native_profiler");
        $__internal_ac60aa3b163fd6d2e033d9886bf4519b0d48fb5a55c5e9340ab7ca7f008d891f->enter($__internal_ac60aa3b163fd6d2e033d9886bf4519b0d48fb5a55c5e9340ab7ca7f008d891f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ac60aa3b163fd6d2e033d9886bf4519b0d48fb5a55c5e9340ab7ca7f008d891f->leave($__internal_ac60aa3b163fd6d2e033d9886bf4519b0d48fb5a55c5e9340ab7ca7f008d891f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  83 => 12,  75 => 7,  69 => 6,  57 => 5,  48 => 14,  45 => 13,  43 => 12,  38 => 9,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Мой блог{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="bundles/BlogBundle/css/symfony-blog.css" />*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="/bundles/BlogBundle/images/hornet_logo.ico" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
