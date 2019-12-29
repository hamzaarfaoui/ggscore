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

/* :posts:new.html.twig */
class __TwigTemplate_5a9ff01fd9ef8b7665915d9fc3f715aa1b98d5e7610146fce533de72e5c94d16 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", ":posts:new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", ":posts:new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", ":posts:new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/front/bootstrap.min.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"uk-margin\">
    <h1>Nouvel article</h1>
    
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["attr" => ["enctype" => "multipart/form-data"]]);
        echo "
        <div class=\"uk-margin\">
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", []), 'widget', ["attr" => ["class" => "uk-input", "required" => "true"]]);
        echo "
        </div>
        <div class=\"uk-margin\">
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "content", []), 'widget', ["attr" => ["class" => "ckeditor", "required" => "true"]]);
        echo "
        </div>
        <div class=\"uk-margin uk-grid-small uk-child-width-auto uk-grid\">
            <label><input class=\"uk-radio\" type=\"radio\" name=\"representation\" value=\"1\" checked> Vérticale</label>
            <label><input class=\"uk-radio\" type=\"radio\" name=\"representation\" value=\"0\"> Horizansale</label>
        </div>
        <div class=\"uk-margin\">
            <div class=\"file-loading\">
                <input id=\"kv-explorer\" class=\"file\" type=\"file\" name=\"image\">
            </div>
        </div>
        <input type=\"submit\" class=\"uk-button uk-button-primary\" value=\"Enregistrer\" />
        <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_posts_index");
        echo "\" class=\"uk-button uk-button-default\">Liste des articles</a>
    ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    <br><br><br>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 31
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 32
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/front/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(\"#kv-explorer\").fileinput({
            'theme': 'explorer-fa',
            'uploadUrl': '#',
            language: 'fr',
            allowedFileExtensions: ['jpg', 'png', 'gif', 'pdf', 'txt', 'csv', 'ods', 'xls', 'docx', 'jpeg'],
            overwriteInitial: false,
            initialPreviewAsData: true,
            ";
        // line 41
        if ($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "image", [])) {
            // line 42
            echo "            initialPreview: [
                \"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/articles/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "image", []), "html", null, true);
            echo "\"
            ],
            ";
        }
        // line 46
        echo "        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return ":posts:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 46,  160 => 43,  157 => 42,  155 => 41,  142 => 32,  133 => 31,  119 => 27,  115 => 26,  100 => 14,  94 => 11,  89 => 9,  84 => 6,  75 => 5,  62 => 3,  53 => 2,  31 => 1,);
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
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('assets/front/bootstrap.min.css')}}\">
{% endblock %}
{% block body %}
    <div class=\"uk-margin\">
    <h1>Nouvel article</h1>
    
    {{ form_start(form, { 'attr': {'enctype': 'multipart/form-data'} }) }}
        <div class=\"uk-margin\">
            {{ form_widget(form.title, {'attr': {'class': 'uk-input', 'required': 'true'},}) }}
        </div>
        <div class=\"uk-margin\">
            {{ form_widget(form.content, {'attr': {'class': 'ckeditor', 'required': 'true'},}) }}
        </div>
        <div class=\"uk-margin uk-grid-small uk-child-width-auto uk-grid\">
            <label><input class=\"uk-radio\" type=\"radio\" name=\"representation\" value=\"1\" checked> Vérticale</label>
            <label><input class=\"uk-radio\" type=\"radio\" name=\"representation\" value=\"0\"> Horizansale</label>
        </div>
        <div class=\"uk-margin\">
            <div class=\"file-loading\">
                <input id=\"kv-explorer\" class=\"file\" type=\"file\" name=\"image\">
            </div>
        </div>
        <input type=\"submit\" class=\"uk-button uk-button-primary\" value=\"Enregistrer\" />
        <a href=\"{{ path('admin_posts_index') }}\" class=\"uk-button uk-button-default\">Liste des articles</a>
    {{ form_end(form) }}
    <br><br><br>
    </div>
{% endblock %}
{% block javascripts %}
    <script src=\"{{ asset('assets/front/bootstrap.min.js')}}\"></script>
    <script>
        \$(\"#kv-explorer\").fileinput({
            'theme': 'explorer-fa',
            'uploadUrl': '#',
            language: 'fr',
            allowedFileExtensions: ['jpg', 'png', 'gif', 'pdf', 'txt', 'csv', 'ods', 'xls', 'docx', 'jpeg'],
            overwriteInitial: false,
            initialPreviewAsData: true,
            {% if(post.image) %}
            initialPreview: [
                \"{{ asset('uploads/articles/') }}{{ post.image }}\"
            ],
            {% endif %}
        });
    </script>
{% endblock %}
", ":posts:new.html.twig", "/var/www/html/ggscore/app/Resources/views/posts/new.html.twig");
    }
}
