<?php

/* BlogBundle:post:index.html.twig */
class __TwigTemplate_d989a5ac9ad1d8afee06692c0ee604f523bc026bcdbefba537ea8f4e5bb3c68b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle:Pages:layout.html.twig", "BlogBundle:post:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BlogBundle:Pages:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b6b13aa9a73818caa04edd438821c4f88c83656137f2858f450d732927c3a89 = $this->env->getExtension("native_profiler");
        $__internal_2b6b13aa9a73818caa04edd438821c4f88c83656137f2858f450d732927c3a89->enter($__internal_2b6b13aa9a73818caa04edd438821c4f88c83656137f2858f450d732927c3a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:post:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b6b13aa9a73818caa04edd438821c4f88c83656137f2858f450d732927c3a89->leave($__internal_2b6b13aa9a73818caa04edd438821c4f88c83656137f2858f450d732927c3a89_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_022b4db274c96e9696e276a1d9ac957f26d8517ba52ab4562f05379974d1f1f8 = $this->env->getExtension("native_profiler");
        $__internal_022b4db274c96e9696e276a1d9ac957f26d8517ba52ab4562f05379974d1f1f8->enter($__internal_022b4db274c96e9696e276a1d9ac957f26d8517ba52ab4562f05379974d1f1f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin area";
        
        $__internal_022b4db274c96e9696e276a1d9ac957f26d8517ba52ab4562f05379974d1f1f8->leave($__internal_022b4db274c96e9696e276a1d9ac957f26d8517ba52ab4562f05379974d1f1f8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b0068ea3c047e173d519555cf6bcdb2815ca70a9b9b89f0ecd25dfe032ef2eb2 = $this->env->getExtension("native_profiler");
        $__internal_b0068ea3c047e173d519555cf6bcdb2815ca70a9b9b89f0ecd25dfe032ef2eb2->enter($__internal_b0068ea3c047e173d519555cf6bcdb2815ca70a9b9b89f0ecd25dfe032ef2eb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Admin area</h1>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Description</th>
                <th>Datetime</th>
                <th>Actions</th>
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
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("create_show", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("create_edit", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("create_new");
        echo "\">Add new post</a>
        </li>
        <li>    <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("create_prod");
        echo "\">Production area</a></li>
    </ul>
";
        
        $__internal_b0068ea3c047e173d519555cf6bcdb2815ca70a9b9b89f0ecd25dfe032ef2eb2->leave($__internal_b0068ea3c047e173d519555cf6bcdb2815ca70a9b9b89f0ecd25dfe032ef2eb2_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:post:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 41,  122 => 39,  115 => 34,  103 => 28,  97 => 25,  88 => 21,  84 => 20,  80 => 19,  74 => 18,  71 => 17,  67 => 16,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'BlogBundle:Pages:layout.html.twig' %}*/
/* {% block title %}Admin area{% endblock %}*/
/* {% block body %}*/
/*     <h1>Admin area</h1>*/
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Title</th>*/
/*                 <th>Description</th>*/
/*                 <th>Datetime</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for post in posts %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('create_show', { 'id': post.id }) }}">{{ post.id }}</a></td>*/
/*                 <td>{{ post.title }}</td>*/
/*                 <td>{{ post.description }}</td>*/
/*                 <td>{% if post.datetime %}{{ post.datetime|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('create_show', { 'id': post.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('create_edit', { 'id': post.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('create_new') }}">Add new post</a>*/
/*         </li>*/
/*         <li>    <a href="{{ path('create_prod') }}">Production area</a></li>*/
/*     </ul>*/
/* {% endblock %}*/
