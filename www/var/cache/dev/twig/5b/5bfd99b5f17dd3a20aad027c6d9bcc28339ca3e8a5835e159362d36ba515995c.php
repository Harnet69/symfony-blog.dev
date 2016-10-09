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
        $__internal_8d8c973090bcaae3423a402e1f26bf0b556fb53f31de123ef40ab037a525b41e = $this->env->getExtension("native_profiler");
        $__internal_8d8c973090bcaae3423a402e1f26bf0b556fb53f31de123ef40ab037a525b41e->enter($__internal_8d8c973090bcaae3423a402e1f26bf0b556fb53f31de123ef40ab037a525b41e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:post:production.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d8c973090bcaae3423a402e1f26bf0b556fb53f31de123ef40ab037a525b41e->leave($__internal_8d8c973090bcaae3423a402e1f26bf0b556fb53f31de123ef40ab037a525b41e_prof);

    }

    // line 2
    public function block_site_title($context, array $blocks = array())
    {
        $__internal_b4409f4dae446b6e45c60590f73285490e85680f129c1a14587cf9900661bdd2 = $this->env->getExtension("native_profiler");
        $__internal_b4409f4dae446b6e45c60590f73285490e85680f129c1a14587cf9900661bdd2->enter($__internal_b4409f4dae446b6e45c60590f73285490e85680f129c1a14587cf9900661bdd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "site_title"));

        // line 3
        echo "        <h1>The hornet's nest news</h1>
     ";
        
        $__internal_b4409f4dae446b6e45c60590f73285490e85680f129c1a14587cf9900661bdd2->leave($__internal_b4409f4dae446b6e45c60590f73285490e85680f129c1a14587cf9900661bdd2_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_e313fc37df4a5e7e19708099b1511c8f93027b4737f1d8c4efc16b084115c388 = $this->env->getExtension("native_profiler");
        $__internal_e313fc37df4a5e7e19708099b1511c8f93027b4737f1d8c4efc16b084115c388->enter($__internal_e313fc37df4a5e7e19708099b1511c8f93027b4737f1d8c4efc16b084115c388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_e313fc37df4a5e7e19708099b1511c8f93027b4737f1d8c4efc16b084115c388->leave($__internal_e313fc37df4a5e7e19708099b1511c8f93027b4737f1d8c4efc16b084115c388_prof);

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
