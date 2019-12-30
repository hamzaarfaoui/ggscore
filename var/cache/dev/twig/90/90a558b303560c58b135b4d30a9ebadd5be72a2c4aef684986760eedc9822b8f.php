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
            'stylesheets' => [$this, 'block_stylesheets'],
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

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    <style>
        .level-linkk{
            width: 50%;
        }
        .level-linkk:hover{
            text-decoration: none;
        }
        .level-link:hover{
            
            border: 1px solid #0f6ecd;
            color: #0f6ecd;
            background-color: #FFF;
        }
        .level-link{
            border: 1px solid #0f6ecd;
            background-color: #0f6ecd;
            padding: 10px;
            color: #FFF;
            font-size: 16px;
            width: 50%;
            margin-left: 24%;
        }
        .competition-desc{
            width: 80%;text-align: center;margin-left: 10%;
        }
        @media screen and (max-width: 400px){
            .competition-desc{
                width: 100%;
                margin-left: 0;
            }
            .level-link{
                width: 93%;
                margin-left: 0;
            }
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 40
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 41
        echo "
    ";
        // line 42
        if (($this->getAttribute(($context["competion"] ?? $this->getContext($context, "competion")), "status", []) == 1)) {
            // line 43
            echo "        <div class=\"uk-child-width-1-1@m\" uk-grid>
            <div class=\"uk-inline uk-margin\">
                <div class=\"competition-desc\">
                    <h3>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute(($context["competion"] ?? $this->getContext($context, "competion")), "title", []), "html", null, true);
            echo "</h3>
                    <hr>
                    ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["competion"] ?? $this->getContext($context, "competion")), "levels", []));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["level"]) {
                // line 49
                echo "                        <a class=\"level-linkk\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("level_front_show", ["id" => $this->getAttribute($context["level"], "id", [])]), "html", null, true);
                echo "\"><h4 class=\"level-link\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["level"], "title", []), "html", null, true);
                echo "</h4></a>
                        ";
                // line 50
                if ( !$this->getAttribute($context["loop"], "last", [])) {
                    echo "<hr class=\"uk-divider-icon\">";
                }
                // line 51
                echo "                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "                </div>
            </div>
        </div>
    ";
        } elseif (($this->getAttribute(        // line 55
($context["competion"] ?? $this->getContext($context, "competion")), "status", []) == 2)) {
            // line 56
            echo "        <div class=\"uk-child-width-1-1@m\" uk-grid>
            <div class=\"uk-inline uk-margin\">
                <div class=\"uk-margin uk-card uk-card-default uk-card-body\">
                    <div class=\"uk-position-right uk-overlay uk-overlay-default\">
                        <h4>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute(($context["competion"] ?? $this->getContext($context, "competion")), "title", []), "html", null, true);
            echo "</h4>
                    </div>
                </div>
                <div class=\"uk-child-width-1-2 uk-text-center\" uk-grid>
                    <div>
                        <div class=\"uk-margin uk-card uk-card-default uk-card-body\">
                            ";
            // line 66
            echo $this->getAttribute(($context["competion"] ?? $this->getContext($context, "competion")), "contentClassement", []);
            echo "
                        </div>
                    </div>
                    <div>
                        <div class=\"uk-margin uk-card uk-card-default uk-card-body\">
                            ";
            // line 71
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
        return array (  203 => 71,  195 => 66,  186 => 60,  180 => 56,  178 => 55,  173 => 52,  159 => 51,  155 => 50,  148 => 49,  131 => 48,  126 => 46,  121 => 43,  119 => 42,  116 => 41,  107 => 40,  61 => 3,  52 => 2,  30 => 1,);
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
    <style>
        .level-linkk{
            width: 50%;
        }
        .level-linkk:hover{
            text-decoration: none;
        }
        .level-link:hover{
            
            border: 1px solid #0f6ecd;
            color: #0f6ecd;
            background-color: #FFF;
        }
        .level-link{
            border: 1px solid #0f6ecd;
            background-color: #0f6ecd;
            padding: 10px;
            color: #FFF;
            font-size: 16px;
            width: 50%;
            margin-left: 24%;
        }
        .competition-desc{
            width: 80%;text-align: center;margin-left: 10%;
        }
        @media screen and (max-width: 400px){
            .competition-desc{
                width: 100%;
                margin-left: 0;
            }
            .level-link{
                width: 93%;
                margin-left: 0;
            }
        }
    </style>
{% endblock %}
{% block body %}

    {% if(competion.status == 1) %}
        <div class=\"uk-child-width-1-1@m\" uk-grid>
            <div class=\"uk-inline uk-margin\">
                <div class=\"competition-desc\">
                    <h3>{{ competion.title }}</h3>
                    <hr>
                    {% for level in competion.levels %}
                        <a class=\"level-linkk\" href=\"{{ path('level_front_show', {id:level.id}) }}\"><h4 class=\"level-link\">{{ level.title }}</h4></a>
                        {% if(not loop.last) %}<hr class=\"uk-divider-icon\">{% endif %}
                    {% endfor %}
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
