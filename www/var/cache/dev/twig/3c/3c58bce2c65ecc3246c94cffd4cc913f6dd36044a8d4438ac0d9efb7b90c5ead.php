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
        $__internal_ae7314d8970d6f68a1747359b6d8cc54c989c09ea0d052de234f436fdfc42c2e = $this->env->getExtension("native_profiler");
        $__internal_ae7314d8970d6f68a1747359b6d8cc54c989c09ea0d052de234f436fdfc42c2e->enter($__internal_ae7314d8970d6f68a1747359b6d8cc54c989c09ea0d052de234f436fdfc42c2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_ae7314d8970d6f68a1747359b6d8cc54c989c09ea0d052de234f436fdfc42c2e->leave($__internal_ae7314d8970d6f68a1747359b6d8cc54c989c09ea0d052de234f436fdfc42c2e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ae5432596b80d4033af811adeb9df5c8b83bcad1cab5dd016e1fc120212dec71 = $this->env->getExtension("native_profiler");
        $__internal_ae5432596b80d4033af811adeb9df5c8b83bcad1cab5dd016e1fc120212dec71->enter($__internal_ae5432596b80d4033af811adeb9df5c8b83bcad1cab5dd016e1fc120212dec71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Мой блог";
        
        $__internal_ae5432596b80d4033af811adeb9df5c8b83bcad1cab5dd016e1fc120212dec71->leave($__internal_ae5432596b80d4033af811adeb9df5c8b83bcad1cab5dd016e1fc120212dec71_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_04129947df506e465dbdd70c537a58b9b1d1b7045f0bb31ec90b64f401e071f3 = $this->env->getExtension("native_profiler");
        $__internal_04129947df506e465dbdd70c537a58b9b1d1b7045f0bb31ec90b64f401e071f3->enter($__internal_04129947df506e465dbdd70c537a58b9b1d1b7045f0bb31ec90b64f401e071f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/BlogBundle/css/symfony-blog.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_04129947df506e465dbdd70c537a58b9b1d1b7045f0bb31ec90b64f401e071f3->leave($__internal_04129947df506e465dbdd70c537a58b9b1d1b7045f0bb31ec90b64f401e071f3_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_e4871612467927232c78c21f517cf9a151f686e27dfe09a6f3a5560fa8923578 = $this->env->getExtension("native_profiler");
        $__internal_e4871612467927232c78c21f517cf9a151f686e27dfe09a6f3a5560fa8923578->enter($__internal_e4871612467927232c78c21f517cf9a151f686e27dfe09a6f3a5560fa8923578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e4871612467927232c78c21f517cf9a151f686e27dfe09a6f3a5560fa8923578->leave($__internal_e4871612467927232c78c21f517cf9a151f686e27dfe09a6f3a5560fa8923578_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2bb017e0d9c3a70d7552957706fc547aebf0c9da244848124d34d375aff4aeb7 = $this->env->getExtension("native_profiler");
        $__internal_2bb017e0d9c3a70d7552957706fc547aebf0c9da244848124d34d375aff4aeb7->enter($__internal_2bb017e0d9c3a70d7552957706fc547aebf0c9da244848124d34d375aff4aeb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2bb017e0d9c3a70d7552957706fc547aebf0c9da244848124d34d375aff4aeb7->leave($__internal_2bb017e0d9c3a70d7552957706fc547aebf0c9da244848124d34d375aff4aeb7_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  96 => 13,  85 => 12,  75 => 7,  69 => 6,  57 => 5,  48 => 14,  45 => 13,  43 => 12,  38 => 9,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Мой блог{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="{{asset("bundles/BlogBundle/css/symfony-blog.css") }}" />*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="/bundles/BlogBundle/images/hornet_logo.ico" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
