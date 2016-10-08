<?php

/* BlogBundle:post:production.html.twig */
class __TwigTemplate_af4d0a65ae873f69aa61072d98723ead50bc7ed371ee33b45934889cd1a3b03c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::page.html.twig", "BlogBundle:post:production.html.twig", 1);
        $this->blocks = array(
            'site_title' => array($this, 'block_site_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_feb4af1a55bd66518f7c87f81abec8d9d2dae7f55364d7aced58e300a772e5c2 = $this->env->getExtension("native_profiler");
        $__internal_feb4af1a55bd66518f7c87f81abec8d9d2dae7f55364d7aced58e300a772e5c2->enter($__internal_feb4af1a55bd66518f7c87f81abec8d9d2dae7f55364d7aced58e300a772e5c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:post:production.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_feb4af1a55bd66518f7c87f81abec8d9d2dae7f55364d7aced58e300a772e5c2->leave($__internal_feb4af1a55bd66518f7c87f81abec8d9d2dae7f55364d7aced58e300a772e5c2_prof);

    }

    // line 2
    public function block_site_title($context, array $blocks = array())
    {
        $__internal_ebe4ff055acfad5565c680ded75ee347cd3db8a904e3f22cca7901a80a835e79 = $this->env->getExtension("native_profiler");
        $__internal_ebe4ff055acfad5565c680ded75ee347cd3db8a904e3f22cca7901a80a835e79->enter($__internal_ebe4ff055acfad5565c680ded75ee347cd3db8a904e3f22cca7901a80a835e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "site_title"));

        // line 3
        echo "        <h1>The hornet's nest news</h1>
     ";
        
        $__internal_ebe4ff055acfad5565c680ded75ee347cd3db8a904e3f22cca7901a80a835e79->leave($__internal_ebe4ff055acfad5565c680ded75ee347cd3db8a904e3f22cca7901a80a835e79_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_99e5c1c98baaf709c88aca778dbc735360e038574d20d24a44b27e9878202478 = $this->env->getExtension("native_profiler");
        $__internal_99e5c1c98baaf709c88aca778dbc735360e038574d20d24a44b27e9878202478->enter($__internal_99e5c1c98baaf709c88aca778dbc735360e038574d20d24a44b27e9878202478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 7
            echo "            <div class=\"main_post\">
                <h2><a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("create_showPost", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["post"], "title", array())), "html", null, true);
            echo "</a></h2>
                <p id=\"post_date\">";
            // line 9
            if ($this->getAttribute($context["post"], "datetime", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "datetime", array()), "Y-m-d H:i"), "html", null, true);
            }
            echo "</p>
                <p>";
            // line 10
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["post"], "description", array()), 0, 300), "html", null, true);
            echo "
                <a id=\"main_post_next\" href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("create_showPost", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">...ещё</a></p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
     ";
        
        $__internal_99e5c1c98baaf709c88aca778dbc735360e038574d20d24a44b27e9878202478->leave($__internal_99e5c1c98baaf709c88aca778dbc735360e038574d20d24a44b27e9878202478_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:post:production.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 14,  79 => 11,  75 => 10,  69 => 9,  63 => 8,  60 => 7,  55 => 6,  49 => 5,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends '::page.html.twig' %}*/
/*      {% block site_title %}*/
/*         <h1>The hornet's nest news</h1>*/
/*      {% endblock %}*/
/*      {% block main %}*/
/*         {% for post in posts %}*/
/*             <div class="main_post">*/
/*                 <h2><a href="{{ path('create_showPost', { 'id': post.id }) }}">{{ post.title|upper }}</a></h2>*/
/*                 <p id="post_date">{% if post.datetime %}{{ post.datetime|date('Y-m-d H:i') }}{% endif %}</p>*/
/*                 <p>{{ post.description|slice(0, 300) }}*/
/*                 <a id="main_post_next" href="{{ path('create_showPost', { 'id': post.id }) }}">...ещё</a></p>*/
/*             </div>*/
/*         {% endfor %}*/
/* */
/*      {% endblock %}*/
