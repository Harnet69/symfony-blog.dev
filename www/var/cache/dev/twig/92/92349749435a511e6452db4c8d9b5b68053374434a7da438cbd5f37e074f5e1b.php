<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f17dac06382a54caef4e09b3caa5e4e52316498c292894d3f3a1890267ea75b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_06f33a138c0d7541b538df24ad79ff4bb759def79b1bd16b68f165dcc3e222f6 = $this->env->getExtension("native_profiler");
        $__internal_06f33a138c0d7541b538df24ad79ff4bb759def79b1bd16b68f165dcc3e222f6->enter($__internal_06f33a138c0d7541b538df24ad79ff4bb759def79b1bd16b68f165dcc3e222f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06f33a138c0d7541b538df24ad79ff4bb759def79b1bd16b68f165dcc3e222f6->leave($__internal_06f33a138c0d7541b538df24ad79ff4bb759def79b1bd16b68f165dcc3e222f6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6ecbd20200cabe4269311279153adc9f8a7853e60b7df81d6e3216cfc1f6e005 = $this->env->getExtension("native_profiler");
        $__internal_6ecbd20200cabe4269311279153adc9f8a7853e60b7df81d6e3216cfc1f6e005->enter($__internal_6ecbd20200cabe4269311279153adc9f8a7853e60b7df81d6e3216cfc1f6e005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6ecbd20200cabe4269311279153adc9f8a7853e60b7df81d6e3216cfc1f6e005->leave($__internal_6ecbd20200cabe4269311279153adc9f8a7853e60b7df81d6e3216cfc1f6e005_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f75025b53991bdf723b03c8c020b6f85d5d3ae9c9859bb132c183db2ba44e5c7 = $this->env->getExtension("native_profiler");
        $__internal_f75025b53991bdf723b03c8c020b6f85d5d3ae9c9859bb132c183db2ba44e5c7->enter($__internal_f75025b53991bdf723b03c8c020b6f85d5d3ae9c9859bb132c183db2ba44e5c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f75025b53991bdf723b03c8c020b6f85d5d3ae9c9859bb132c183db2ba44e5c7->leave($__internal_f75025b53991bdf723b03c8c020b6f85d5d3ae9c9859bb132c183db2ba44e5c7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_99f90a7d1252ebecc5946c279cd61a3ca500e4e2f44cad0bb8fae1d5466ecb58 = $this->env->getExtension("native_profiler");
        $__internal_99f90a7d1252ebecc5946c279cd61a3ca500e4e2f44cad0bb8fae1d5466ecb58->enter($__internal_99f90a7d1252ebecc5946c279cd61a3ca500e4e2f44cad0bb8fae1d5466ecb58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_99f90a7d1252ebecc5946c279cd61a3ca500e4e2f44cad0bb8fae1d5466ecb58->leave($__internal_99f90a7d1252ebecc5946c279cd61a3ca500e4e2f44cad0bb8fae1d5466ecb58_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
