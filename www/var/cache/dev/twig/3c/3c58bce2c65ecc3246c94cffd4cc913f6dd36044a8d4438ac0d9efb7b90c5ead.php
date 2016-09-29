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
        $__internal_fad5b20a4c6c02238de8c0fe646c4bfa347bacea7636e7780939da2c10bea3db = $this->env->getExtension("native_profiler");
        $__internal_fad5b20a4c6c02238de8c0fe646c4bfa347bacea7636e7780939da2c10bea3db->enter($__internal_fad5b20a4c6c02238de8c0fe646c4bfa347bacea7636e7780939da2c10bea3db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
    <h1><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("create_prod");
        echo "\">Главная</a></h1>
        ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "    </body>
</html>
";
        
        $__internal_fad5b20a4c6c02238de8c0fe646c4bfa347bacea7636e7780939da2c10bea3db->leave($__internal_fad5b20a4c6c02238de8c0fe646c4bfa347bacea7636e7780939da2c10bea3db_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_dd84fea43739317cf9ec6a88d7e6330f54e5be634e368f2c9b086a366be2c0eb = $this->env->getExtension("native_profiler");
        $__internal_dd84fea43739317cf9ec6a88d7e6330f54e5be634e368f2c9b086a366be2c0eb->enter($__internal_dd84fea43739317cf9ec6a88d7e6330f54e5be634e368f2c9b086a366be2c0eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_dd84fea43739317cf9ec6a88d7e6330f54e5be634e368f2c9b086a366be2c0eb->leave($__internal_dd84fea43739317cf9ec6a88d7e6330f54e5be634e368f2c9b086a366be2c0eb_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_73e410e73ae9ecb25399952ca38d9d47e6aca7e8b233ac19ed5edaa5d402039c = $this->env->getExtension("native_profiler");
        $__internal_73e410e73ae9ecb25399952ca38d9d47e6aca7e8b233ac19ed5edaa5d402039c->enter($__internal_73e410e73ae9ecb25399952ca38d9d47e6aca7e8b233ac19ed5edaa5d402039c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_73e410e73ae9ecb25399952ca38d9d47e6aca7e8b233ac19ed5edaa5d402039c->leave($__internal_73e410e73ae9ecb25399952ca38d9d47e6aca7e8b233ac19ed5edaa5d402039c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_68eb93e4c2136167670a736bde6e615b05932bbc2ad5b8f3a763841c609f8ac9 = $this->env->getExtension("native_profiler");
        $__internal_68eb93e4c2136167670a736bde6e615b05932bbc2ad5b8f3a763841c609f8ac9->enter($__internal_68eb93e4c2136167670a736bde6e615b05932bbc2ad5b8f3a763841c609f8ac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_68eb93e4c2136167670a736bde6e615b05932bbc2ad5b8f3a763841c609f8ac9->leave($__internal_68eb93e4c2136167670a736bde6e615b05932bbc2ad5b8f3a763841c609f8ac9_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2bf365351ad1972281ae5480c7899109084fac094c7ab95537c84d9d83b49c27 = $this->env->getExtension("native_profiler");
        $__internal_2bf365351ad1972281ae5480c7899109084fac094c7ab95537c84d9d83b49c27->enter($__internal_2bf365351ad1972281ae5480c7899109084fac094c7ab95537c84d9d83b49c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2bf365351ad1972281ae5480c7899109084fac094c7ab95537c84d9d83b49c27->leave($__internal_2bf365351ad1972281ae5480c7899109084fac094c7ab95537c84d9d83b49c27_prof);

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
        return array (  97 => 12,  86 => 11,  75 => 6,  63 => 5,  54 => 13,  51 => 12,  49 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*     <h1><a href="{{ path('create_prod') }}">Главная</a></h1>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
