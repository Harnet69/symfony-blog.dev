<?php

/* BlogBundle:post:edit.html.twig */
class __TwigTemplate_8a3fb2b409bbe548d6955b8587522ec14ccae0bc555512e18027212de257fdfa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "BlogBundle:post:edit.html.twig", 1);
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
        $__internal_0f622df9b2e15e87efbe4c8a489a5a2d83a00161f197efb73ced39516ecdff0d = $this->env->getExtension("native_profiler");
        $__internal_0f622df9b2e15e87efbe4c8a489a5a2d83a00161f197efb73ced39516ecdff0d->enter($__internal_0f622df9b2e15e87efbe4c8a489a5a2d83a00161f197efb73ced39516ecdff0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:post:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f622df9b2e15e87efbe4c8a489a5a2d83a00161f197efb73ced39516ecdff0d->leave($__internal_0f622df9b2e15e87efbe4c8a489a5a2d83a00161f197efb73ced39516ecdff0d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8dd2381bd28c1c69858ead899a608892626752a64068c458515763bcbcd60041 = $this->env->getExtension("native_profiler");
        $__internal_8dd2381bd28c1c69858ead899a608892626752a64068c458515763bcbcd60041->enter($__internal_8dd2381bd28c1c69858ead899a608892626752a64068c458515763bcbcd60041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Post edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("create_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_8dd2381bd28c1c69858ead899a608892626752a64068c458515763bcbcd60041->leave($__internal_8dd2381bd28c1c69858ead899a608892626752a64068c458515763bcbcd60041_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:post:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Post edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('create_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
