<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* :competions:index.html.twig */
class __TwigTemplate_687e35476308885deea08fee4095d03920112b6004228bacd3910137a5e06e5a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", ":competions:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", ":competions:index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", ":competions:index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"uk-child-width-1-1@m\" uk-grid>
    <h1>Competitions</h1>
    <div class=\"uk-inline\">
        <div class=\"uk-position-left\">
            <a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_posts_index");
        echo "\" class=\"uk-button uk-button-default\">Articles</a>
        </div>
        <div class=\"uk-position-right\">
            <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_competitions_new");
        echo "\" class=\"uk-button uk-button-default\">Créer une compétition</a>
        </div>
    </div>
    <br><br><br>
    <table class=\"uk-table uk-table-striped\" id=\"zero_config\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Content</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["competions"] ?? $this->getContext($context, "competions")));
        foreach ($context['_seq'] as $context["_key"] => $context["competion"]) {
            // line 26
            echo "            <tr>
                <td><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_competitions_show", ["id" => $this->getAttribute($context["competion"], "id", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["competion"], "id", []), "html", null, true);
            echo "</a></td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["competion"], "title", []), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["competion"], "content", []), "html", null, true);
            echo "</td>
                <td>
                    <div class=\"uk-button-group\">
                    <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_competitions_show", ["id" => $this->getAttribute($context["competion"], "id", [])]), "html", null, true);
            echo "\" class=\"uk-button uk-button-secondary\" uk-icon=\"icon: search\"></a>
                    <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_competitions_edit", ["id" => $this->getAttribute($context["competion"], "id", [])]), "html", null, true);
            echo "\" class=\"uk-button uk-button-primary\" uk-icon=\"icon: pencil\"></a>
                    </div>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </tbody>
    </table>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return ":competions:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 38,  116 => 33,  112 => 32,  106 => 29,  102 => 28,  96 => 27,  93 => 26,  89 => 25,  72 => 11,  66 => 8,  60 => 4,  51 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"uk-child-width-1-1@m\" uk-grid>
    <h1>Competitions</h1>
    <div class=\"uk-inline\">
        <div class=\"uk-position-left\">
            <a href=\"{{ path('admin_posts_index') }}\" class=\"uk-button uk-button-default\">Articles</a>
        </div>
        <div class=\"uk-position-right\">
            <a href=\"{{ path('admin_competitions_new') }}\" class=\"uk-button uk-button-default\">Créer une compétition</a>
        </div>
    </div>
    <br><br><br>
    <table class=\"uk-table uk-table-striped\" id=\"zero_config\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Content</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for competion in competions %}
            <tr>
                <td><a href=\"{{ path('admin_competitions_show', { 'id': competion.id }) }}\">{{ competion.id }}</a></td>
                <td>{{ competion.title }}</td>
                <td>{{ competion.content }}</td>
                <td>
                    <div class=\"uk-button-group\">
                    <a href=\"{{ path('admin_competitions_show', { 'id': competion.id }) }}\" class=\"uk-button uk-button-secondary\" uk-icon=\"icon: search\"></a>
                    <a href=\"{{ path('admin_competitions_edit', { 'id': competion.id }) }}\" class=\"uk-button uk-button-primary\" uk-icon=\"icon: pencil\"></a>
                    </div>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    </div>
{% endblock %}
", ":competions:index.html.twig", "/var/www/html/ggscore/app/Resources/views/competions/index.html.twig");
    }
}
