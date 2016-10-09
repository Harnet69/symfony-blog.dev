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
        $__internal_f7c1ec062a82e292c8bbf25ef610eace38b330c47c23465c0a71ca1066516dad = $this->env->getExtension("native_profiler");
        $__internal_f7c1ec062a82e292c8bbf25ef610eace38b330c47c23465c0a71ca1066516dad->enter($__internal_f7c1ec062a82e292c8bbf25ef610eace38b330c47c23465c0a71ca1066516dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7c1ec062a82e292c8bbf25ef610eace38b330c47c23465c0a71ca1066516dad->leave($__internal_f7c1ec062a82e292c8bbf25ef610eace38b330c47c23465c0a71ca1066516dad_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f91c7fe2a41197cc094927bbf02f44f6db938e97da151198e06d22fd5a1bf8dd = $this->env->getExtension("native_profiler");
        $__internal_f91c7fe2a41197cc094927bbf02f44f6db938e97da151198e06d22fd5a1bf8dd->enter($__internal_f91c7fe2a41197cc094927bbf02f44f6db938e97da151198e06d22fd5a1bf8dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f91c7fe2a41197cc094927bbf02f44f6db938e97da151198e06d22fd5a1bf8dd->leave($__internal_f91c7fe2a41197cc094927bbf02f44f6db938e97da151198e06d22fd5a1bf8dd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_77a514a3a012e9946d21b23e77cbe1a554f613d87b35fc703256afa8016a8e2b = $this->env->getExtension("native_profiler");
        $__internal_77a514a3a012e9946d21b23e77cbe1a554f613d87b35fc703256afa8016a8e2b->enter($__internal_77a514a3a012e9946d21b23e77cbe1a554f613d87b35fc703256afa8016a8e2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_77a514a3a012e9946d21b23e77cbe1a554f613d87b35fc703256afa8016a8e2b->leave($__internal_77a514a3a012e9946d21b23e77cbe1a554f613d87b35fc703256afa8016a8e2b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b571562c3c8804db1f993ec25a4a4485d14e92d559a074ee8d36f78966e9a83d = $this->env->getExtension("native_profiler");
        $__internal_b571562c3c8804db1f993ec25a4a4485d14e92d559a074ee8d36f78966e9a83d->enter($__internal_b571562c3c8804db1f993ec25a4a4485d14e92d559a074ee8d36f78966e9a83d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b571562c3c8804db1f993ec25a4a4485d14e92d559a074ee8d36f78966e9a83d->leave($__internal_b571562c3c8804db1f993ec25a4a4485d14e92d559a074ee8d36f78966e9a83d_prof);

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
