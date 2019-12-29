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

/* :competions:indexFront.html.twig */
class __TwigTemplate_ddfbd067161f21abd920316e1d09f62d2e3a17459ba23c12bf5bb17b7a94ee8a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", ":competions:indexFront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", ":competions:indexFront.html.twig"));

        // line 1
        echo "<div class=\"uk-card uk-card-secondary uk-card-body\" style=\"padding: 20px;    margin-top: 10px;\">
    <h3 class=\"uk-card-title\" style='float: right;'>بطولات</h3><br>
<ul class=\"uk-list uk-list-divider \">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["competitions"] ?? $this->getContext($context, "competitions")));
        foreach ($context['_seq'] as $context["_key"] => $context["competition"]) {
            // line 5
            echo "        <li class='uk-flex-right'>
            <a style=\"font-size: 11px;\" href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("competitions_show", ["id" => $this->getAttribute($context["competition"], "id", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["competition"], "title", []), "html", null, true);
            echo "</a>
            
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</ul>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return ":competions:indexFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 10,  48 => 6,  45 => 5,  41 => 4,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"uk-card uk-card-secondary uk-card-body\" style=\"padding: 20px;    margin-top: 10px;\">
    <h3 class=\"uk-card-title\" style='float: right;'>بطولات</h3><br>
<ul class=\"uk-list uk-list-divider \">
    {% for competition in competitions %}
        <li class='uk-flex-right'>
            <a style=\"font-size: 11px;\" href=\"{{ path('competitions_show', {id:competition.id}) }}\">{{ competition.title }}</a>
            
        </li>
    {% endfor %}
</ul>
</div>", ":competions:indexFront.html.twig", "/var/www/html/ggscore/app/Resources/views/competions/indexFront.html.twig");
    }
}
