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

/* :posts:index.html.twig */
class __TwigTemplate_c9fa86f82031a11e5770f9a53e081fe62ff2296fbcf0a5b3db4fe0eb89d847cf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", ":posts:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", ":posts:index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", ":posts:index.html.twig", 1);
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
        <h1>Articles</h1>
        <div class=\"uk-inline\">
            <div class=\"uk-position-right\">
                <a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_posts_new");
        echo "\" class=\"uk-button uk-button-default\">Créer un articles</a>
                <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_competitions_index");
        echo "\" class=\"uk-button uk-button-default\">Competitions</a>
            </div>
        </div>
        <br><br><br>
        <div class=\"uk-margin\">
        <table class=\"uk-table uk-table-striped\" id=\"zero_config\">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Image</th>
                    <th>Createdat</th>
                    <th>Updatedat</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 28
            echo "                <tr>
                    <td><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_posts_show", ["id" => $this->getAttribute($context["post"], "id", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", []), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", []), "html", null, true);
            echo "</td>
                    <td>";
            // line 31
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute($context["post"], "title", [])) > 70)) ? ((twig_slice($this->env, $this->getAttribute($context["post"], "title", []), 0, 70) . "...")) : ($this->getAttribute($context["post"], "title", []))), "html", null, true);
            echo "</td>
                    <td><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/articles/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "image", []), "html", null, true);
            echo "\">Image</a></td>
                    <td>";
            // line 33
            if ($this->getAttribute($context["post"], "createdAt", [])) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "createdAt", []), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                    <td>";
            // line 34
            if ($this->getAttribute($context["post"], "updatedAt", [])) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "updatedAt", []), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                    <td>
                        <div class=\"uk-button-group\">
                            <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_posts_show", ["id" => $this->getAttribute($context["post"], "id", [])]), "html", null, true);
            echo "\" class=\"uk-button uk-button-secondary\" uk-icon=\"icon: search\"></a>
                            <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_posts_edit", ["id" => $this->getAttribute($context["post"], "id", [])]), "html", null, true);
            echo "\" class=\"uk-button uk-button-primary\" uk-icon=\"icon: pencil\"></a>
                        </div>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "            </tbody>
        </table>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return ":posts:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 43,  135 => 38,  131 => 37,  123 => 34,  117 => 33,  112 => 32,  108 => 31,  104 => 30,  98 => 29,  95 => 28,  91 => 27,  70 => 9,  66 => 8,  60 => 4,  51 => 3,  29 => 1,);
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
        <h1>Articles</h1>
        <div class=\"uk-inline\">
            <div class=\"uk-position-right\">
                <a href=\"{{ path('admin_posts_new') }}\" class=\"uk-button uk-button-default\">Créer un articles</a>
                <a href=\"{{ path('admin_competitions_index') }}\" class=\"uk-button uk-button-default\">Competitions</a>
            </div>
        </div>
        <br><br><br>
        <div class=\"uk-margin\">
        <table class=\"uk-table uk-table-striped\" id=\"zero_config\">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Image</th>
                    <th>Createdat</th>
                    <th>Updatedat</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {% for post in posts %}
                <tr>
                    <td><a href=\"{{ path('admin_posts_show', { 'id': post.id }) }}\">{{ post.id }}</a></td>
                    <td>{{ post.title }}</td>
                    <td>{{ post.title|length>70?post.title|slice(0, 70)~'...':post.title }}</td>
                    <td><a href=\"{{ asset('uploads/articles/') }}{{ post.image }}\">Image</a></td>
                    <td>{% if post.createdAt %}{{ post.createdAt|date('Y-m-d H:i:s') }}{% endif %}</td>
                    <td>{% if post.updatedAt %}{{ post.updatedAt|date('Y-m-d H:i:s') }}{% endif %}</td>
                    <td>
                        <div class=\"uk-button-group\">
                            <a href=\"{{ path('admin_posts_show', { 'id': post.id }) }}\" class=\"uk-button uk-button-secondary\" uk-icon=\"icon: search\"></a>
                            <a href=\"{{ path('admin_posts_edit', { 'id': post.id }) }}\" class=\"uk-button uk-button-primary\" uk-icon=\"icon: pencil\"></a>
                        </div>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
        </div>
    </div>
{% endblock %}
", ":posts:index.html.twig", "/var/www/html/ggscore/app/Resources/views/posts/index.html.twig");
    }
}
