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
        $__internal_54f0236d028ee8a8a283e80775ac3654cc60f9f1f980d8e2e2fd6811d34b31ba = $this->env->getExtension("native_profiler");
        $__internal_54f0236d028ee8a8a283e80775ac3654cc60f9f1f980d8e2e2fd6811d34b31ba->enter($__internal_54f0236d028ee8a8a283e80775ac3654cc60f9f1f980d8e2e2fd6811d34b31ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_54f0236d028ee8a8a283e80775ac3654cc60f9f1f980d8e2e2fd6811d34b31ba->leave($__internal_54f0236d028ee8a8a283e80775ac3654cc60f9f1f980d8e2e2fd6811d34b31ba_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_961d1a29a97171f7af5d92eac5e38fa16cacd524f3ce858a0b8fa66d82858df7 = $this->env->getExtension("native_profiler");
        $__internal_961d1a29a97171f7af5d92eac5e38fa16cacd524f3ce858a0b8fa66d82858df7->enter($__internal_961d1a29a97171f7af5d92eac5e38fa16cacd524f3ce858a0b8fa66d82858df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Мой блог";
        
        $__internal_961d1a29a97171f7af5d92eac5e38fa16cacd524f3ce858a0b8fa66d82858df7->leave($__internal_961d1a29a97171f7af5d92eac5e38fa16cacd524f3ce858a0b8fa66d82858df7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c704b73870eed47b6d48e3d14b398e6c518859a33c6dadaf137cd1554755f178 = $this->env->getExtension("native_profiler");
        $__internal_c704b73870eed47b6d48e3d14b398e6c518859a33c6dadaf137cd1554755f178->enter($__internal_c704b73870eed47b6d48e3d14b398e6c518859a33c6dadaf137cd1554755f178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/BlogBundle/css/symfony-blog.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_c704b73870eed47b6d48e3d14b398e6c518859a33c6dadaf137cd1554755f178->leave($__internal_c704b73870eed47b6d48e3d14b398e6c518859a33c6dadaf137cd1554755f178_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e54bbfbb5ffd43c65743003aa5c126a20ca2aeb53229259d9a779fed1d34656 = $this->env->getExtension("native_profiler");
        $__internal_4e54bbfbb5ffd43c65743003aa5c126a20ca2aeb53229259d9a779fed1d34656->enter($__internal_4e54bbfbb5ffd43c65743003aa5c126a20ca2aeb53229259d9a779fed1d34656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4e54bbfbb5ffd43c65743003aa5c126a20ca2aeb53229259d9a779fed1d34656->leave($__internal_4e54bbfbb5ffd43c65743003aa5c126a20ca2aeb53229259d9a779fed1d34656_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_57e0ccced52ce5fc84a7bdea903ed5ba6682b3218568d2485503d07fc5bb4bcb = $this->env->getExtension("native_profiler");
        $__internal_57e0ccced52ce5fc84a7bdea903ed5ba6682b3218568d2485503d07fc5bb4bcb->enter($__internal_57e0ccced52ce5fc84a7bdea903ed5ba6682b3218568d2485503d07fc5bb4bcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_57e0ccced52ce5fc84a7bdea903ed5ba6682b3218568d2485503d07fc5bb4bcb->leave($__internal_57e0ccced52ce5fc84a7bdea903ed5ba6682b3218568d2485503d07fc5bb4bcb_prof);

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
