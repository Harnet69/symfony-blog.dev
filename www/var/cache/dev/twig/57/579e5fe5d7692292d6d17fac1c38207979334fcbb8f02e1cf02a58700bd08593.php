<?php

/* post/production.html.twig */
class __TwigTemplate_25793bf327f2268289eabcb39a25a04f8297f0984aeafbee260f0c88cf411266 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "post/production.html.twig", 1);
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
        $__internal_67296da1ec9735458c4f90f1925d8daadacb0b1bf87d5e2724512d6296bb4baf = $this->env->getExtension("native_profiler");
        $__internal_67296da1ec9735458c4f90f1925d8daadacb0b1bf87d5e2724512d6296bb4baf->enter($__internal_67296da1ec9735458c4f90f1925d8daadacb0b1bf87d5e2724512d6296bb4baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/production.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67296da1ec9735458c4f90f1925d8daadacb0b1bf87d5e2724512d6296bb4baf->leave($__internal_67296da1ec9735458c4f90f1925d8daadacb0b1bf87d5e2724512d6296bb4baf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8bfd4c98636c6e0144c887e1089c87b11583f037a8e700d14331d7a532c5d34f = $this->env->getExtension("native_profiler");
        $__internal_8bfd4c98636c6e0144c887e1089c87b11583f037a8e700d14331d7a532c5d34f->enter($__internal_8bfd4c98636c6e0144c887e1089c87b11583f037a8e700d14331d7a532c5d34f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Мой блог на продакшене</h1>

    <table>
        <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Description</th>
            <th>Datetime</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("create_show", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            if ($this->getAttribute($context["post"], "datetime", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "datetime", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("create_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_8bfd4c98636c6e0144c887e1089c87b11583f037a8e700d14331d7a532c5d34f->leave($__internal_8bfd4c98636c6e0144c887e1089c87b11583f037a8e700d14331d7a532c5d34f_prof);

    }

    public function getTemplateName()
    {
        return "post/production.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 29,  86 => 24,  75 => 21,  71 => 20,  67 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Мой блог на продакшене</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*         <tr>*/
/*             <th>Id</th>*/
/*             <th>Title</th>*/
/*             <th>Description</th>*/
/*             <th>Datetime</th>*/
/*         </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for post in posts %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('create_show', { 'id': post.id }) }}">{{ post.id }}</a></td>*/
/*                 <td>{{ post.title }}</td>*/
/*                 <td>{{ post.description }}</td>*/
/*                 <td>{% if post.datetime %}{{ post.datetime|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('create_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
