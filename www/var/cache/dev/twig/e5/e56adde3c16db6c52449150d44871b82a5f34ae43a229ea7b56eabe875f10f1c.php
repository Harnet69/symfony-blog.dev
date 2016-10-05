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
        $__internal_fbd26baeab01235fde1dfe057b06ef1b883f895be5e827df8924a8aab33121a5 = $this->env->getExtension("native_profiler");
        $__internal_fbd26baeab01235fde1dfe057b06ef1b883f895be5e827df8924a8aab33121a5->enter($__internal_fbd26baeab01235fde1dfe057b06ef1b883f895be5e827df8924a8aab33121a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:post:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbd26baeab01235fde1dfe057b06ef1b883f895be5e827df8924a8aab33121a5->leave($__internal_fbd26baeab01235fde1dfe057b06ef1b883f895be5e827df8924a8aab33121a5_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_17a2554735af5c6aa3f4ab290e48bdafc00424698afdbebb45b9cee28ff0c42d = $this->env->getExtension("native_profiler");
        $__internal_17a2554735af5c6aa3f4ab290e48bdafc00424698afdbebb45b9cee28ff0c42d->enter($__internal_17a2554735af5c6aa3f4ab290e48bdafc00424698afdbebb45b9cee28ff0c42d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Админка";
        
        $__internal_17a2554735af5c6aa3f4ab290e48bdafc00424698afdbebb45b9cee28ff0c42d->leave($__internal_17a2554735af5c6aa3f4ab290e48bdafc00424698afdbebb45b9cee28ff0c42d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d2ae4b250b127bebc28bc25be74cf22488f64439d120d99c8f113ff54747807 = $this->env->getExtension("native_profiler");
        $__internal_4d2ae4b250b127bebc28bc25be74cf22488f64439d120d99c8f113ff54747807->enter($__internal_4d2ae4b250b127bebc28bc25be74cf22488f64439d120d99c8f113ff54747807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_4d2ae4b250b127bebc28bc25be74cf22488f64439d120d99c8f113ff54747807->leave($__internal_4d2ae4b250b127bebc28bc25be74cf22488f64439d120d99c8f113ff54747807_prof);

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
        return array (  122 => 39,  115 => 34,  103 => 28,  97 => 25,  88 => 21,  84 => 20,  80 => 19,  74 => 18,  71 => 17,  67 => 16,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'BlogBundle:Pages:layout.html.twig' %}*/
/* {% block title %}Админка{% endblock %}*/
/* {% block body %}*/
/*     <h1>Блог в админке</h1>*/
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
