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

/* competions/new.html.twig */
class __TwigTemplate_8946323898e42800c7a0c8b292e2affba1437fc00a49ed96e0037bd1ff4eaa7d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "competions/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "competions/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "competions/new.html.twig", 1);
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
        echo "    <h1>Competion creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
    <b>Titre</b>
    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", []), 'widget', ["attr" => ["class" => "uk-input", "required" => "true"]]);
        echo "<br><br>
    <div class=\"uk-margin uk-grid-small uk-child-width-auto uk-grid\">
        <label><input class=\"uk-radio\" id=\"confedration\" type=\"radio\" name=\"status\" checked value=\"1\"> Conféderation</label>
        <label><input class=\"uk-radio\" id=\"ligue\" type=\"radio\" name=\"status\" value=\"2\"> Ligue</label>
    </div>
    <div id=\"content\" style=\"display: none;margin-bottom: 20px;\">
        <div class=\"uk-child-width-1-2 uk-text-center\" uk-grid>
            <div>
                <b>Journée</b>
                <textarea name=\"content\" class=\"ckeditor\"></textarea>
            </div>
            <div>
                <b>Classement</b>
                <textarea name=\"contentClassement\" class=\"ckeditor\"></textarea>
            </div>
        </div>
    </div>
        <input type=\"submit\" value=\"Enregistrer\" class=\"uk-button uk-button-primary\"/>
        <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_competitions_index");
        echo "\" class=\"uk-button uk-button-default\">Liste des compétitions</a>
    ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 29
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 30
        echo "    <script>
        \$('#ligue').change(function() {
            if(\$('#ligue').is(':checked')) { \$('#content').show(); }
         });
         \$('#confedration').change(function() {
            if(\$('#confedration').is(':checked')) { \$('#content').hide(); }
         });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "competions/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 30,  107 => 29,  95 => 27,  91 => 26,  70 => 8,  65 => 6,  61 => 4,  52 => 3,  30 => 1,);
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
    <h1>Competion creation</h1>

    {{ form_start(form) }}
    <b>Titre</b>
    {{ form_widget(form.title, {'attr': {'class': 'uk-input', 'required': 'true'},}) }}<br><br>
    <div class=\"uk-margin uk-grid-small uk-child-width-auto uk-grid\">
        <label><input class=\"uk-radio\" id=\"confedration\" type=\"radio\" name=\"status\" checked value=\"1\"> Conféderation</label>
        <label><input class=\"uk-radio\" id=\"ligue\" type=\"radio\" name=\"status\" value=\"2\"> Ligue</label>
    </div>
    <div id=\"content\" style=\"display: none;margin-bottom: 20px;\">
        <div class=\"uk-child-width-1-2 uk-text-center\" uk-grid>
            <div>
                <b>Journée</b>
                <textarea name=\"content\" class=\"ckeditor\"></textarea>
            </div>
            <div>
                <b>Classement</b>
                <textarea name=\"contentClassement\" class=\"ckeditor\"></textarea>
            </div>
        </div>
    </div>
        <input type=\"submit\" value=\"Enregistrer\" class=\"uk-button uk-button-primary\"/>
        <a href=\"{{ path('admin_competitions_index') }}\" class=\"uk-button uk-button-default\">Liste des compétitions</a>
    {{ form_end(form) }}
{% endblock %}
{% block javascripts %}
    <script>
        \$('#ligue').change(function() {
            if(\$('#ligue').is(':checked')) { \$('#content').show(); }
         });
         \$('#confedration').change(function() {
            if(\$('#confedration').is(':checked')) { \$('#content').hide(); }
         });
    </script>
{% endblock %}
", "competions/new.html.twig", "/var/www/html/ggscore/app/Resources/views/competions/new.html.twig");
    }
}
