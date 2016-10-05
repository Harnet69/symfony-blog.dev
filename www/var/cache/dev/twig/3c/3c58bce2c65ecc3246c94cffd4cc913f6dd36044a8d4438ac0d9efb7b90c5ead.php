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
        $__internal_ce757dc4dbd427b1da3f24ddd1a05c34e136054ca52d5be6bbaf715e22d310da = $this->env->getExtension("native_profiler");
        $__internal_ce757dc4dbd427b1da3f24ddd1a05c34e136054ca52d5be6bbaf715e22d310da->enter($__internal_ce757dc4dbd427b1da3f24ddd1a05c34e136054ca52d5be6bbaf715e22d310da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
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
        
        $__internal_ce757dc4dbd427b1da3f24ddd1a05c34e136054ca52d5be6bbaf715e22d310da->leave($__internal_ce757dc4dbd427b1da3f24ddd1a05c34e136054ca52d5be6bbaf715e22d310da_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cdf1bc5aea25b4a1f3f7a187d809a84fe049af1f2858b575476dc4c707648b96 = $this->env->getExtension("native_profiler");
        $__internal_cdf1bc5aea25b4a1f3f7a187d809a84fe049af1f2858b575476dc4c707648b96->enter($__internal_cdf1bc5aea25b4a1f3f7a187d809a84fe049af1f2858b575476dc4c707648b96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Мой блог";
        
        $__internal_cdf1bc5aea25b4a1f3f7a187d809a84fe049af1f2858b575476dc4c707648b96->leave($__internal_cdf1bc5aea25b4a1f3f7a187d809a84fe049af1f2858b575476dc4c707648b96_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_aae7bdf83fcffeff5500d90983a86875160b7c1bd3bdb9de83dc86fd91951f58 = $this->env->getExtension("native_profiler");
        $__internal_aae7bdf83fcffeff5500d90983a86875160b7c1bd3bdb9de83dc86fd91951f58->enter($__internal_aae7bdf83fcffeff5500d90983a86875160b7c1bd3bdb9de83dc86fd91951f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"bundles/BlogBundle/css/symfony-blog.css\" />
        ";
        
        $__internal_aae7bdf83fcffeff5500d90983a86875160b7c1bd3bdb9de83dc86fd91951f58->leave($__internal_aae7bdf83fcffeff5500d90983a86875160b7c1bd3bdb9de83dc86fd91951f58_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_22d9d7e1350db40dc8d58ff69b77e022384c64c0d64f096e58d0de2b70a61fe4 = $this->env->getExtension("native_profiler");
        $__internal_22d9d7e1350db40dc8d58ff69b77e022384c64c0d64f096e58d0de2b70a61fe4->enter($__internal_22d9d7e1350db40dc8d58ff69b77e022384c64c0d64f096e58d0de2b70a61fe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_22d9d7e1350db40dc8d58ff69b77e022384c64c0d64f096e58d0de2b70a61fe4->leave($__internal_22d9d7e1350db40dc8d58ff69b77e022384c64c0d64f096e58d0de2b70a61fe4_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_114bfe6f6cdb3f9b166b15c6188e8f4daea6b6037e1df762057a98834b836e7b = $this->env->getExtension("native_profiler");
        $__internal_114bfe6f6cdb3f9b166b15c6188e8f4daea6b6037e1df762057a98834b836e7b->enter($__internal_114bfe6f6cdb3f9b166b15c6188e8f4daea6b6037e1df762057a98834b836e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_114bfe6f6cdb3f9b166b15c6188e8f4daea6b6037e1df762057a98834b836e7b->leave($__internal_114bfe6f6cdb3f9b166b15c6188e8f4daea6b6037e1df762057a98834b836e7b_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 13,  85 => 12,  77 => 7,  71 => 6,  59 => 5,  50 => 14,  47 => 13,  45 => 12,  38 => 9,  36 => 6,  32 => 5,  26 => 1,);
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
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
