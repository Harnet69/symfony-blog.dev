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
        $__internal_d5ce49de4f3f802448bd4652f9c8d7a096fa4f94ed0cc7ed8afb83318991207f = $this->env->getExtension("native_profiler");
        $__internal_d5ce49de4f3f802448bd4652f9c8d7a096fa4f94ed0cc7ed8afb83318991207f->enter($__internal_d5ce49de4f3f802448bd4652f9c8d7a096fa4f94ed0cc7ed8afb83318991207f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5ce49de4f3f802448bd4652f9c8d7a096fa4f94ed0cc7ed8afb83318991207f->leave($__internal_d5ce49de4f3f802448bd4652f9c8d7a096fa4f94ed0cc7ed8afb83318991207f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6e66375b833d75293091cc9310298dce2e61860ea7452b092ab5920cdd0090e7 = $this->env->getExtension("native_profiler");
        $__internal_6e66375b833d75293091cc9310298dce2e61860ea7452b092ab5920cdd0090e7->enter($__internal_6e66375b833d75293091cc9310298dce2e61860ea7452b092ab5920cdd0090e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6e66375b833d75293091cc9310298dce2e61860ea7452b092ab5920cdd0090e7->leave($__internal_6e66375b833d75293091cc9310298dce2e61860ea7452b092ab5920cdd0090e7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6038eef6fca53805cb8c526a18b39b5678cd821265880af900c381766566a564 = $this->env->getExtension("native_profiler");
        $__internal_6038eef6fca53805cb8c526a18b39b5678cd821265880af900c381766566a564->enter($__internal_6038eef6fca53805cb8c526a18b39b5678cd821265880af900c381766566a564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6038eef6fca53805cb8c526a18b39b5678cd821265880af900c381766566a564->leave($__internal_6038eef6fca53805cb8c526a18b39b5678cd821265880af900c381766566a564_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_551b7a1f701aa43f9a74da7c70c3248804f2ff3e1d494fa50880e9f3d57c9b67 = $this->env->getExtension("native_profiler");
        $__internal_551b7a1f701aa43f9a74da7c70c3248804f2ff3e1d494fa50880e9f3d57c9b67->enter($__internal_551b7a1f701aa43f9a74da7c70c3248804f2ff3e1d494fa50880e9f3d57c9b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_551b7a1f701aa43f9a74da7c70c3248804f2ff3e1d494fa50880e9f3d57c9b67->leave($__internal_551b7a1f701aa43f9a74da7c70c3248804f2ff3e1d494fa50880e9f3d57c9b67_prof);

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
