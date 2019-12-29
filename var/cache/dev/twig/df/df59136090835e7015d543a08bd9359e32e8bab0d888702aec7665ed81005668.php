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

/* :levels:edit.html.twig */
class __TwigTemplate_adc8252e3f23a2ff6fd3e8dd2dc80e508c7c2fdb81c24149b0ad35793067de76 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", ":levels:edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", ":levels:edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", ":levels:edit.html.twig", 1);
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
        echo "    <h1>Level edit</h1>

    <form action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_level_traitement", ["id" => $this->getAttribute(($context["level"] ?? $this->getContext($context, "level")), "id", [])]), "html", null, true);
        echo "\" method=\"post\">
    <b>Titre :</b>
        <input type=\"text\" name=\"title\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["level"] ?? $this->getContext($context, "level")), "title", []), "html", null, true);
        echo "\" class=\"uk-input\">
    <b>Contenu :</b>
    <textarea name=\"content\" class=\"ckeditor\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["level"] ?? $this->getContext($context, "level")), "content", []), "html", null, true);
        echo "</textarea>
      <input type=\"submit\" value=\"Enregistrer\" class=\"uk-button uk-button-primary\" /> 
        <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_competitions_show", ["id" => $this->getAttribute($this->getAttribute(($context["level"] ?? $this->getContext($context, "level")), "competition", []), "id", [])]), "html", null, true);
        echo "\"  class=\"uk-button uk-button-default\">Liste des phases</a>
        ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
            <input type=\"submit\" value=\"Supprimer\"  class=\"uk-button uk-button-danger\">
        ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
    </form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return ":levels:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 15,  83 => 13,  79 => 12,  74 => 10,  69 => 8,  64 => 6,  60 => 4,  51 => 3,  29 => 1,);
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
    <h1>Level edit</h1>

    <form action=\"{{ path('edit_level_traitement', {id: level.id}) }}\" method=\"post\">
    <b>Titre :</b>
        <input type=\"text\" name=\"title\" value=\"{{level.title}}\" class=\"uk-input\">
    <b>Contenu :</b>
    <textarea name=\"content\" class=\"ckeditor\">{{level.content}}</textarea>
      <input type=\"submit\" value=\"Enregistrer\" class=\"uk-button uk-button-primary\" /> 
        <a href=\"{{ path('admin_competitions_show', {id:level.competition.id}) }}\"  class=\"uk-button uk-button-default\">Liste des phases</a>
        {{ form_start(delete_form) }}
            <input type=\"submit\" value=\"Supprimer\"  class=\"uk-button uk-button-danger\">
        {{ form_end(delete_form) }}
    </form>
{% endblock %}
", ":levels:edit.html.twig", "/var/www/html/ggscore/app/Resources/views/levels/edit.html.twig");
    }
}
