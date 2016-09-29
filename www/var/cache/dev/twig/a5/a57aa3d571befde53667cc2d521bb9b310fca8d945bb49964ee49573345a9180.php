<?php

/* post/new.html.twig */
class __TwigTemplate_d2f1bd6818a1c89b9ca565d55371ec2f9d3df13fde29c6bdc0d11ae442880f11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "post/new.html.twig", 1);
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
        $__internal_ee5b3a8deb6b5a96bb9022a4bcc40fe36d2b44ee0c6ae5eaa99a0682dab92318 = $this->env->getExtension("native_profiler");
        $__internal_ee5b3a8deb6b5a96bb9022a4bcc40fe36d2b44ee0c6ae5eaa99a0682dab92318->enter($__internal_ee5b3a8deb6b5a96bb9022a4bcc40fe36d2b44ee0c6ae5eaa99a0682dab92318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee5b3a8deb6b5a96bb9022a4bcc40fe36d2b44ee0c6ae5eaa99a0682dab92318->leave($__internal_ee5b3a8deb6b5a96bb9022a4bcc40fe36d2b44ee0c6ae5eaa99a0682dab92318_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d7396981c1d5348b7c42a9fa530a00e48c8ba634a4b60e20e7fed88eeee2fa91 = $this->env->getExtension("native_profiler");
        $__internal_d7396981c1d5348b7c42a9fa530a00e48c8ba634a4b60e20e7fed88eeee2fa91->enter($__internal_d7396981c1d5348b7c42a9fa530a00e48c8ba634a4b60e20e7fed88eeee2fa91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Post creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("create_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_d7396981c1d5348b7c42a9fa530a00e48c8ba634a4b60e20e7fed88eeee2fa91->leave($__internal_d7396981c1d5348b7c42a9fa530a00e48c8ba634a4b60e20e7fed88eeee2fa91_prof);

    }

    public function getTemplateName()
    {
        return "post/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Post creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('create_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
