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

/* @Front/Default/navItemsResponsive.html.twig */
class __TwigTemplate_06cbadb0b38c534278dd3f2fd72353bc91acc8269dc5aa139b1c24a9b5d92cfc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Front/Default/navItemsResponsive.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Front/Default/navItemsResponsive.html.twig"));

        // line 1
        echo "<li class=\"uk-open\">
    <a href=\"#\" class='uk-accordion-title'>دوري الأبطال</a>
    <div class=\"uk-accordion-content\">
        <ul class=\"uk-list uk-list-divider\">
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["competitions"] ?? $this->getContext($context, "competitions")));
        foreach ($context['_seq'] as $context["_key"] => $context["competition"]) {
            // line 6
            echo "                <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("competitions_show", ["id" => $this->getAttribute($context["competition"], "id", [])]), "html", null, true);
            echo "\" class=\"text-overlay\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["competition"], "title", []), "html", null, true);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </ul>
    </div>
</li>
<li>
    <a  class=\"uk-accordion-title\" href=\"#\">دوريات محلية</a>
    <div class=\"uk-accordion-content\">
        <ul class=\"uk-list uk-list-divider\">
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ligues"] ?? $this->getContext($context, "ligues")));
        foreach ($context['_seq'] as $context["_key"] => $context["competition"]) {
            // line 16
            echo "                <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("competitions_show", ["id" => $this->getAttribute($context["competition"], "id", [])]), "html", null, true);
            echo "\" class=\"text-overlay\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["competition"], "title", []), "html", null, true);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "        </ul>
    </div>
</li>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Front/Default/navItemsResponsive.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 18,  70 => 16,  66 => 15,  57 => 8,  46 => 6,  42 => 5,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<li class=\"uk-open\">
    <a href=\"#\" class='uk-accordion-title'>دوري الأبطال</a>
    <div class=\"uk-accordion-content\">
        <ul class=\"uk-list uk-list-divider\">
            {% for competition in competitions %}
                <li><a href=\"{{ path('competitions_show', {id:competition.id}) }}\" class=\"text-overlay\">{{ competition.title }}</a></li>
            {% endfor %}
        </ul>
    </div>
</li>
<li>
    <a  class=\"uk-accordion-title\" href=\"#\">دوريات محلية</a>
    <div class=\"uk-accordion-content\">
        <ul class=\"uk-list uk-list-divider\">
            {% for competition in ligues %}
                <li><a href=\"{{ path('competitions_show', {id:competition.id}) }}\" class=\"text-overlay\">{{ competition.title }}</a></li>
            {% endfor %}
        </ul>
    </div>
</li>

", "@Front/Default/navItemsResponsive.html.twig", "/var/www/html/ggscore/src/FrontBundle/Resources/views/Default/navItemsResponsive.html.twig");
    }
}
