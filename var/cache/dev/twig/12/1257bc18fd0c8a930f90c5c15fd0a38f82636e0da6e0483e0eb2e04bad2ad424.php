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

/* competions/show.html.twig */
class __TwigTemplate_4a17209a6327d39c4fe911dd55ee195deff89e6666157ccd62f4bf7cf78fa017 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "competions/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "competions/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "competions/show.html.twig", 1);
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
    <h1>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["competion"] ?? $this->getContext($context, "competion")), "title", []), "html", null, true);
        echo "</h1>
    <div class=\"uk-inline\">
        <div class=\"uk-position-left\">
    <a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_competitions_index");
        echo "\" class=\"uk-button uk-button-default\">Listes des copétitions</a>
    </div>
    <div class=\"uk-position-right\">
        <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_levels_new", ["id" => $this->getAttribute(($context["competion"] ?? $this->getContext($context, "competion")), "id", [])]), "html", null, true);
        echo "\" class=\"uk-button uk-button-default\">Créer une phase</a>
    </div>
    </div>
    <br><br><br>
    <table class=\"uk-table uk-table-striped\" id=\"zero_config\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["competion"] ?? $this->getContext($context, "competion")), "levels", []));
        foreach ($context['_seq'] as $context["_key"] => $context["level"]) {
            // line 25
            echo "                <tr>
                    <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["level"], "id", []), "html", null, true);
            echo "</td>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["level"], "title", []), "html", null, true);
            echo "</td>
                    <td>
                        <div class=\"uk-button-group\">
                              <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_levels_show", ["id" => $this->getAttribute($context["level"], "id", [])]), "html", null, true);
            echo "\" class=\"uk-button uk-button-secondary\" uk-icon=\"icon: search\"></a>
                                <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_levels_edit", ["id" => $this->getAttribute($context["level"], "id", [])]), "html", null, true);
            echo "\" class=\"uk-button uk-button-primary\" uk-icon=\"icon: pencil\"></a>
                        </div>  
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_competitions_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_competitions_edit", ["id" => $this->getAttribute(($context["competion"] ?? $this->getContext($context, "competion")), "id", [])]), "html", null, true);
        echo "\">Edit</a>
        </li>
        ";
        // line 46
        if ((twig_length_filter($this->env, $this->getAttribute(($context["competion"] ?? $this->getContext($context, "competion")), "levels", [])) == 0)) {
            // line 47
            echo "            <li>
                ";
            // line 48
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
            echo "
                    <input type=\"submit\" value=\"Delete\">
                ";
            // line 50
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
            echo "
            </li>
        ";
        }
        // line 53
        echo "    </ul>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "competions/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 53,  151 => 50,  146 => 48,  143 => 47,  141 => 46,  136 => 44,  130 => 41,  123 => 36,  112 => 31,  108 => 30,  102 => 27,  98 => 26,  95 => 25,  91 => 24,  75 => 11,  69 => 8,  63 => 5,  60 => 4,  51 => 3,  29 => 1,);
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
    <h1>{{ competion.title }}</h1>
    <div class=\"uk-inline\">
        <div class=\"uk-position-left\">
    <a href=\"{{ path('admin_competitions_index') }}\" class=\"uk-button uk-button-default\">Listes des copétitions</a>
    </div>
    <div class=\"uk-position-right\">
        <a href=\"{{ path('admin_levels_new', {id:competion.id}) }}\" class=\"uk-button uk-button-default\">Créer une phase</a>
    </div>
    </div>
    <br><br><br>
    <table class=\"uk-table uk-table-striped\" id=\"zero_config\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            {% for level in competion.levels %}
                <tr>
                    <td>{{ level.id }}</td>
                    <td>{{ level.title }}</td>
                    <td>
                        <div class=\"uk-button-group\">
                              <a href=\"{{ path('admin_levels_show', { 'id': level.id }) }}\" class=\"uk-button uk-button-secondary\" uk-icon=\"icon: search\"></a>
                                <a href=\"{{ path('admin_levels_edit', { 'id': level.id }) }}\" class=\"uk-button uk-button-primary\" uk-icon=\"icon: pencil\"></a>
                        </div>  
                    </td>
                </tr>
            {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('admin_competitions_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('admin_competitions_edit', { 'id': competion.id }) }}\">Edit</a>
        </li>
        {% if competion.levels|length == 0 %}
            <li>
                {{ form_start(delete_form) }}
                    <input type=\"submit\" value=\"Delete\">
                {{ form_end(delete_form) }}
            </li>
        {% endif %}
    </ul>
    </div>
{% endblock %}
", "competions/show.html.twig", "/var/www/html/ggscore/app/Resources/views/competions/show.html.twig");
    }
}
