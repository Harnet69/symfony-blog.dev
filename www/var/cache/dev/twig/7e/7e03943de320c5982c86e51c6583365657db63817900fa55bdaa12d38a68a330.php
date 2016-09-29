<?php

/* BlogBundle:post:show.html.twig */
class __TwigTemplate_b22200e65e472ab863fd2bd8c067dd8cdf220f9fd93344f3efa7bcb13ee29dea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "BlogBundle:post:show.html.twig", 1);
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
        $__internal_93ea3cd25c048e2970c80bbe9fff9d316d05302384e76a32373a0ff30973d38f = $this->env->getExtension("native_profiler");
        $__internal_93ea3cd25c048e2970c80bbe9fff9d316d05302384e76a32373a0ff30973d38f->enter($__internal_93ea3cd25c048e2970c80bbe9fff9d316d05302384e76a32373a0ff30973d38f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:post:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93ea3cd25c048e2970c80bbe9fff9d316d05302384e76a32373a0ff30973d38f->leave($__internal_93ea3cd25c048e2970c80bbe9fff9d316d05302384e76a32373a0ff30973d38f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5d98581d922bc3acc1d5c0567f9749ef6b227725bd2d8f5f330ec1d596366276 = $this->env->getExtension("native_profiler");
        $__internal_5d98581d922bc3acc1d5c0567f9749ef6b227725bd2d8f5f330ec1d596366276->enter($__internal_5d98581d922bc3acc1d5c0567f9749ef6b227725bd2d8f5f330ec1d596366276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Post</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "title", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datetime</th>
                <td>";
        // line 22
        if ($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "datetime", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "datetime", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("create_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("create_edit", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_5d98581d922bc3acc1d5c0567f9749ef6b227725bd2d8f5f330ec1d596366276->leave($__internal_5d98581d922bc3acc1d5c0567f9749ef6b227725bd2d8f5f330ec1d596366276_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:post:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 37,  93 => 35,  87 => 32,  81 => 29,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Post</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ post.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Title</th>*/
/*                 <td>{{ post.title }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Description</th>*/
/*                 <td>{{ post.description }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Datetime</th>*/
/*                 <td>{% if post.datetime %}{{ post.datetime|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('create_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('create_edit', { 'id': post.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
