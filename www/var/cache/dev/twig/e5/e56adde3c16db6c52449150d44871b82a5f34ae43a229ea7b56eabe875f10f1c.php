<?php

/* BlogBundle:post:index.html.twig */
class __TwigTemplate_d989a5ac9ad1d8afee06692c0ee604f523bc026bcdbefba537ea8f4e5bb3c68b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "BlogBundle:post:index.html.twig", 1);
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
        $__internal_f5ebce8369326c9d9ca75cf1e6d8f6c32d7452f947f5e1812ea44467cb5580c6 = $this->env->getExtension("native_profiler");
        $__internal_f5ebce8369326c9d9ca75cf1e6d8f6c32d7452f947f5e1812ea44467cb5580c6->enter($__internal_f5ebce8369326c9d9ca75cf1e6d8f6c32d7452f947f5e1812ea44467cb5580c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:post:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5ebce8369326c9d9ca75cf1e6d8f6c32d7452f947f5e1812ea44467cb5580c6->leave($__internal_f5ebce8369326c9d9ca75cf1e6d8f6c32d7452f947f5e1812ea44467cb5580c6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7fbc2de3e4632d9a88378a7a99be7ee5b49c6e0dbc42dbc7379ed0d7ef1ed88f = $this->env->getExtension("native_profiler");
        $__internal_7fbc2de3e4632d9a88378a7a99be7ee5b49c6e0dbc42dbc7379ed0d7ef1ed88f->enter($__internal_7fbc2de3e4632d9a88378a7a99be7ee5b49c6e0dbc42dbc7379ed0d7ef1ed88f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Блог в админке</h1>

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
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("create_show", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            if ($this->getAttribute($context["post"], "datetime", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "datetime", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("create_show", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
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
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("create_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_7fbc2de3e4632d9a88378a7a99be7ee5b49c6e0dbc42dbc7379ed0d7ef1ed88f->leave($__internal_7fbc2de3e4632d9a88378a7a99be7ee5b49c6e0dbc42dbc7379ed0d7ef1ed88f_prof);

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
        return array (  110 => 40,  103 => 35,  91 => 29,  85 => 26,  76 => 22,  72 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Блог в админке</h1>*/
/* */
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
/*             <a href="{{ path('create_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
