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

/* competions/showFront.html.twig */
class __TwigTemplate_721f5d12da516f3c4a174af872da5ca735a00ad3fb06e54f785e2e3abec8f991 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "competions/showFront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "competions/showFront.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "competions/showFront.html.twig", 1);
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
        echo "
    ";
        // line 5
        if (($this->getAttribute(($context["competion"] ?? $this->getContext($context, "competion")), "status", []) == 1)) {
            // line 6
            echo "        <div class=\"uk-child-width-1-1@m\" uk-grid>
            <div class=\"uk-inline uk-margin\">
                <div class=\"uk-position-right uk-overlay uk-overlay-default\">
                    <h4>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute(($context["competion"] ?? $this->getContext($context, "competion")), "title", []), "html", null, true);
            echo "</h4>

                    <ul  class=\"uk-list uk-list-divider\">
                        ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["competion"] ?? $this->getContext($context, "competion")), "levels", []));
            foreach ($context['_seq'] as $context["_key"] => $context["level"]) {
                // line 13
                echo "                            <li>
                                <a href=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("level_front_show", ["id" => $this->getAttribute($context["level"], "id", [])]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["level"], "title", []), "html", null, true);
                echo "</a>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "                    </ul>

                </div>
            </div>
        </div>
    ";
        } elseif (($this->getAttribute(        // line 22
($context["competion"] ?? $this->getContext($context, "competion")), "status", []) == 2)) {
            // line 23
            echo "        <div class=\"uk-child-width-1-1@m\" uk-grid>
            <div class=\"uk-inline uk-margin\">
                <div class=\"uk-margin uk-card uk-card-default uk-card-body\">
                    <div class=\"uk-position-right uk-overlay uk-overlay-default\">
                        <h4>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute(($context["competion"] ?? $this->getContext($context, "competion")), "title", []), "html", null, true);
            echo "</h4>
                    </div>
                </div>
                <div class=\"uk-child-width-1-2 uk-text-center\" uk-grid>
                    <div>
                        <div class=\"uk-margin uk-card uk-card-default uk-card-body\">
                            ";
            // line 33
            echo $this->getAttribute(($context["competion"] ?? $this->getContext($context, "competion")), "contentClassement", []);
            echo "
                        </div>
                    </div>
                    <div>
                        <div class=\"uk-margin uk-card uk-card-default uk-card-body\">
                            ";
            // line 38
            echo $this->getAttribute(($context["competion"] ?? $this->getContext($context, "competion")), "content", []);
            echo "
                        </div>
                    </div>
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
        return "competions/showFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 38,  118 => 33,  109 => 27,  103 => 23,  101 => 22,  94 => 17,  83 => 14,  80 => 13,  76 => 12,  70 => 9,  65 => 6,  63 => 5,  60 => 4,  51 => 3,  29 => 1,);
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

    {% if(competion.status == 1) %}
        <div class=\"uk-child-width-1-1@m\" uk-grid>
            <div class=\"uk-inline uk-margin\">
                <div class=\"uk-position-right uk-overlay uk-overlay-default\">
                    <h4>{{ competion.title }}</h4>

                    <ul  class=\"uk-list uk-list-divider\">
                        {% for level in competion.levels %}
                            <li>
                                <a href=\"{{ path('level_front_show', {id:level.id}) }}\">{{ level.title }}</a>
                            </li>
                        {% endfor %}
                    </ul>

                </div>
            </div>
        </div>
    {% elseif(competion.status == 2) %}
        <div class=\"uk-child-width-1-1@m\" uk-grid>
            <div class=\"uk-inline uk-margin\">
                <div class=\"uk-margin uk-card uk-card-default uk-card-body\">
                    <div class=\"uk-position-right uk-overlay uk-overlay-default\">
                        <h4>{{ competion.title }}</h4>
                    </div>
                </div>
                <div class=\"uk-child-width-1-2 uk-text-center\" uk-grid>
                    <div>
                        <div class=\"uk-margin uk-card uk-card-default uk-card-body\">
                            {{ competion.contentClassement|raw }}
                        </div>
                    </div>
                    <div>
                        <div class=\"uk-margin uk-card uk-card-default uk-card-body\">
                            {{ competion.content|raw }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {% endif %}
{% endblock %}
", "competions/showFront.html.twig", "/var/www/html/ggscore/app/Resources/views/competions/showFront.html.twig");
    }
}
