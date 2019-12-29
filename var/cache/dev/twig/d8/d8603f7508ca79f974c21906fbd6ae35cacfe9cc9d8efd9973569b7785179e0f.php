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

/* @Front/Default/index.html.twig */
class __TwigTemplate_5dac746632b41bd793669436e9b8eeb72f7b02bc4650084ec3c80f2539fd2b5f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Front/Default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Front/Default/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Front/Default/index.html.twig", 1);
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
        /* Create two equal columns that floats next to each other */
            .column1 {
              float: left;
              width: 78%;
              padding: 10px;
              height: 300px; /* Should be removed. Only for demonstration */
            }
            
            .column2 {
              float: right;
              width: 18%;
              height: 300px; /* Should be removed. Only for demonstration */
            }

            /* Clear floats after the columns */
            .ligne:after {
              content: \"\";
              display: table;
              clear: both;
            }
        .text-overlay{
            font-size: 14px;
        }
        .uk-overlay{
            padding: 15px;
        }
        .uk-overlay>:last-child{
            text-align: right;
        }
        .text-overlay{
            text-align: right;
        }
        .slider-post{
            width: 77%;
            margin-left: 11%;
        }
        .slider-post .uk-width-3-4 {
            width: 80%;
        }
        .uk-slider-items .uk-panel img{
            width: 100%;
            height: 400px;
        }
        @media screen and (max-width: 400px){
            .text-overlay{
                font-size: 11px;
            }
            .uk-overlay>:last-child{
                font-size: 11px;
            }
            .uk-overlay{
                padding: 15px;
            }
            
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 61
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 62
        echo "    <div style=\"margin-bottom: 50px;\">
        <div style=\"margin-bottom: 50px;\" class=\"slider-post uk-position-relative uk-visible-toggle uk-light\" tabindex=\"-1\" uk-slider=\"clsActivated: uk-transition-active; center: true\">

            <ul class=\"uk-slider-items uk-grid\">
                ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 67
            echo "                <li class=\"uk-width-3-4\">
                    <div class=\"uk-panel\">
                        <img src=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/articles/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "image", []), "html", null, true);
            echo "\" alt=\"\">
                        <div class=\"uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom\">
                            <h3 class=\"uk-margin-remove\">";
            // line 71
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute($context["post"], "title", [])) > 70)) ? ((twig_slice($this->env, $this->getAttribute($context["post"], "title", []), 0, 70) . "...")) : ($this->getAttribute($context["post"], "title", []))), "html", null, true);
            echo "</h3>
                        </div>
                    </div>
                </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "            </ul>
            <a class=\"uk-position-center-left uk-position-small uk-hidden-hover\" href=\"#\" uk-slidenav-previous uk-slider-item=\"previous\"></a>
            <a class=\"uk-position-center-right uk-position-small uk-hidden-hover\" href=\"#\" uk-slidenav-next uk-slider-item=\"next\"></a>
        </div>
        <div class=\"uk-child-width-1-3@m\" uk-grid>
            ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 82
            echo "                <div>

                    <div class=\"uk-inline\" style=\"overflow: hidden;\">
                        <a href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("front_posts_show", ["id" => $this->getAttribute($context["post"], "id", [])]), "html", null, true);
            echo "\">
                            <img src=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/articles/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "image", []), "html", null, true);
            echo "\" alt=\"\" style=\"width: 584px;height: 350px;margin-top: -50px;transform: translateY(50px);\">
                        </a>
                        <a href=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("front_posts_show", ["id" => $this->getAttribute($context["post"], "id", [])]), "html", null, true);
            echo "\">
                            <div class=\"uk-overlay uk-overlay-primary uk-position-bottom\">
                                <p class=\"text-overlay\" style='color: #FFF;'>";
            // line 90
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute($context["post"], "title", [])) > 70)) ? ((twig_slice($this->env, $this->getAttribute($context["post"], "title", []), 0, 70) . "...")) : ($this->getAttribute($context["post"], "title", []))), "html", null, true);
            echo "</p>
                            </div>
                        </a>
                    </div>

                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Front/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 97,  199 => 90,  194 => 88,  188 => 86,  184 => 85,  179 => 82,  175 => 81,  168 => 76,  157 => 71,  151 => 69,  147 => 67,  143 => 66,  137 => 62,  128 => 61,  61 => 3,  52 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block stylesheets %}
    <style>
        /* Create two equal columns that floats next to each other */
            .column1 {
              float: left;
              width: 78%;
              padding: 10px;
              height: 300px; /* Should be removed. Only for demonstration */
            }
            
            .column2 {
              float: right;
              width: 18%;
              height: 300px; /* Should be removed. Only for demonstration */
            }

            /* Clear floats after the columns */
            .ligne:after {
              content: \"\";
              display: table;
              clear: both;
            }
        .text-overlay{
            font-size: 14px;
        }
        .uk-overlay{
            padding: 15px;
        }
        .uk-overlay>:last-child{
            text-align: right;
        }
        .text-overlay{
            text-align: right;
        }
        .slider-post{
            width: 77%;
            margin-left: 11%;
        }
        .slider-post .uk-width-3-4 {
            width: 80%;
        }
        .uk-slider-items .uk-panel img{
            width: 100%;
            height: 400px;
        }
        @media screen and (max-width: 400px){
            .text-overlay{
                font-size: 11px;
            }
            .uk-overlay>:last-child{
                font-size: 11px;
            }
            .uk-overlay{
                padding: 15px;
            }
            
        }
    </style>
{% endblock %}    
{% block body %}
    <div style=\"margin-bottom: 50px;\">
        <div style=\"margin-bottom: 50px;\" class=\"slider-post uk-position-relative uk-visible-toggle uk-light\" tabindex=\"-1\" uk-slider=\"clsActivated: uk-transition-active; center: true\">

            <ul class=\"uk-slider-items uk-grid\">
                {% for post in posts %}
                <li class=\"uk-width-3-4\">
                    <div class=\"uk-panel\">
                        <img src=\"{{ asset('uploads/articles/') }}{{ post.image }}\" alt=\"\">
                        <div class=\"uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom\">
                            <h3 class=\"uk-margin-remove\">{{ post.title|length>70?post.title|slice(0, 70)~'...':post.title }}</h3>
                        </div>
                    </div>
                </li>
                {% endfor %}
            </ul>
            <a class=\"uk-position-center-left uk-position-small uk-hidden-hover\" href=\"#\" uk-slidenav-previous uk-slider-item=\"previous\"></a>
            <a class=\"uk-position-center-right uk-position-small uk-hidden-hover\" href=\"#\" uk-slidenav-next uk-slider-item=\"next\"></a>
        </div>
        <div class=\"uk-child-width-1-3@m\" uk-grid>
            {% for post in posts %}
                <div>

                    <div class=\"uk-inline\" style=\"overflow: hidden;\">
                        <a href=\"{{ path('front_posts_show', { 'id': post.id }) }}\">
                            <img src=\"{{ asset('uploads/articles/') }}{{ post.image }}\" alt=\"\" style=\"width: 584px;height: 350px;margin-top: -50px;transform: translateY(50px);\">
                        </a>
                        <a href=\"{{ path('front_posts_show', { 'id': post.id }) }}\">
                            <div class=\"uk-overlay uk-overlay-primary uk-position-bottom\">
                                <p class=\"text-overlay\" style='color: #FFF;'>{{ post.title|length>70?post.title|slice(0, 70)~'...':post.title }}</p>
                            </div>
                        </a>
                    </div>

                </div>
            {% endfor %}
        </div>
    </div>
{% endblock %}    
", "@Front/Default/index.html.twig", "/var/www/html/ggscore/src/FrontBundle/Resources/views/Default/index.html.twig");
    }
}
