<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6f1a61c2ebe7255ddcbf82ea8d982c97cd260383127aaf420c98a262e70e5f3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d1fc7f69039f343c4880301192e62797776e7913ef0ac5cd6f43792c9ce852e6 = $this->env->getExtension("native_profiler");
        $__internal_d1fc7f69039f343c4880301192e62797776e7913ef0ac5cd6f43792c9ce852e6->enter($__internal_d1fc7f69039f343c4880301192e62797776e7913ef0ac5cd6f43792c9ce852e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1fc7f69039f343c4880301192e62797776e7913ef0ac5cd6f43792c9ce852e6->leave($__internal_d1fc7f69039f343c4880301192e62797776e7913ef0ac5cd6f43792c9ce852e6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a29701af90f9be880f4f692f7382c93ae72b13d5321e6e5b7bd625e6afb7b6ef = $this->env->getExtension("native_profiler");
        $__internal_a29701af90f9be880f4f692f7382c93ae72b13d5321e6e5b7bd625e6afb7b6ef->enter($__internal_a29701af90f9be880f4f692f7382c93ae72b13d5321e6e5b7bd625e6afb7b6ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a29701af90f9be880f4f692f7382c93ae72b13d5321e6e5b7bd625e6afb7b6ef->leave($__internal_a29701af90f9be880f4f692f7382c93ae72b13d5321e6e5b7bd625e6afb7b6ef_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6a2b01e8b1a4f4543584c703e92c22f368124e58d87a7a9096441c326f1aec78 = $this->env->getExtension("native_profiler");
        $__internal_6a2b01e8b1a4f4543584c703e92c22f368124e58d87a7a9096441c326f1aec78->enter($__internal_6a2b01e8b1a4f4543584c703e92c22f368124e58d87a7a9096441c326f1aec78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6a2b01e8b1a4f4543584c703e92c22f368124e58d87a7a9096441c326f1aec78->leave($__internal_6a2b01e8b1a4f4543584c703e92c22f368124e58d87a7a9096441c326f1aec78_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a1f3d00eb9c5d30c54840a6f39a9a9655739873df8c8580aebaf246bc1243a4a = $this->env->getExtension("native_profiler");
        $__internal_a1f3d00eb9c5d30c54840a6f39a9a9655739873df8c8580aebaf246bc1243a4a->enter($__internal_a1f3d00eb9c5d30c54840a6f39a9a9655739873df8c8580aebaf246bc1243a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a1f3d00eb9c5d30c54840a6f39a9a9655739873df8c8580aebaf246bc1243a4a->leave($__internal_a1f3d00eb9c5d30c54840a6f39a9a9655739873df8c8580aebaf246bc1243a4a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
