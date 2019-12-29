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

/* :posts:showInFront.html.twig */
class __TwigTemplate_7f541f93804d64ed986f7919f12fb278641fa48338316dc14ae6282afaa0ae7d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", ":posts:showInFront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", ":posts:showInFront.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", ":posts:showInFront.html.twig", 1);
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
        echo "    ";
        // line 15
        echo "    ";
        // line 27
        echo "    ";
        if (($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "isVertical", []) == 1)) {
            // line 28
            echo "        <div class=\"uk-card uk-card-default\">
            <div class=\"uk-card-media-top\">
                <img class=\"img-v\" src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/articles/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "image", []), "html", null, true);
            echo "\" alt=\"\">
            </div>
            <div class=\"uk-card-body\">
                <h3 class=\"uk-card-title\" style=\"text-align: center;\">";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "title", []), "html", null, true);
            echo "</h3>
                <p style=\"text-align: center;\">";
            // line 34
            echo $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "content", []);
            echo "</p>
            </div>
        </div>
    ";
        } elseif (($this->getAttribute(        // line 37
($context["post"] ?? $this->getContext($context, "post")), "isVertical", []) == 0)) {
            // line 38
            echo "        <div class=\"uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin\" uk-grid>
            <div class=\"uk-card-media-left uk-cover-container\">
                <img src=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/articles/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "image", []), "html", null, true);
            echo "\" alt=\"\" uk-cover>
                <canvas width=\"600\" height=\"400\"></canvas>
            </div>
            <div>
                <div class=\"uk-card-body\">
                    <h3 class=\"uk-card-title\" style=\"text-align: right;\">";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "title", []), "html", null, true);
            echo "</h3>
                    <p style=\"text-align: right;\">";
            // line 46
            echo $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "content", []);
            echo "</p>
                </div>
            </div>
        </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return ":posts:showInFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 46,  103 => 45,  94 => 40,  90 => 38,  88 => 37,  82 => 34,  78 => 33,  71 => 30,  67 => 28,  64 => 27,  62 => 15,  60 => 4,  51 => 3,  29 => 1,);
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
    {#<div class=\"uk-flex uk-flex-center\">
        <div class=\"uk-card uk-card-default\">
            <div class=\"uk-card-media-top\">
                <img src=\"{{ asset('uploads/articles/') }}{{ post.image }}\" alt=\"\" style=\"width: 100%;height: 400px;\">
            </div>
            <div class=\"uk-card-body\">
                <h3 class=\"uk-card-title\">{{ post.title }}</h3>
                <p>{{ post.content|raw }}</p>
            </div>
        </div>
    </div>#}
    {#<div class=\"uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin\" uk-grid>
        <div class=\"uk-card-media-left uk-cover-container\">
            <img src=\"{{ asset('uploads/articles/') }}{{ post.image }}\">
            <canvas width=\"600\" height=\"400\"></canvas>
        </div>
        <div>
            <div class=\"uk-card-body\">
                <h3 class=\"uk-card-title\" style=\"text-align: right;\">{{ post.title }}</h3>
                <p style=\"text-align: justify; float: left;\">{{ post.content|raw }}</p>
            </div>
        </div>
    </div>#}
    {% if(post.isVertical == 1) %}
        <div class=\"uk-card uk-card-default\">
            <div class=\"uk-card-media-top\">
                <img class=\"img-v\" src=\"{{ asset('uploads/articles/') }}{{ post.image }}\" alt=\"\">
            </div>
            <div class=\"uk-card-body\">
                <h3 class=\"uk-card-title\" style=\"text-align: center;\">{{ post.title }}</h3>
                <p style=\"text-align: center;\">{{ post.content|raw }}</p>
            </div>
        </div>
    {% elseif(post.isVertical == 0) %}
        <div class=\"uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin\" uk-grid>
            <div class=\"uk-card-media-left uk-cover-container\">
                <img src=\"{{ asset('uploads/articles/') }}{{ post.image }}\" alt=\"\" uk-cover>
                <canvas width=\"600\" height=\"400\"></canvas>
            </div>
            <div>
                <div class=\"uk-card-body\">
                    <h3 class=\"uk-card-title\" style=\"text-align: right;\">{{ post.title }}</h3>
                    <p style=\"text-align: right;\">{{ post.content|raw }}</p>
                </div>
            </div>
        </div>
    {% endif %}
{% endblock %}
", ":posts:showInFront.html.twig", "/var/www/html/ggscore/app/Resources/views/posts/showInFront.html.twig");
    }
}
