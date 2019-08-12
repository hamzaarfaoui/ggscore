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

/* includes/front/navbar.html.twig */
class __TwigTemplate_016bc99399c53976c7d59fcff3ddf01ac9e67a1637126442f2f121d779810ec6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/front/navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/front/navbar.html.twig"));

        // line 1
        echo "<nav class=\"uk-navbar-container\" uk-navbar style=\"background-color: #bdbdbd;\">

    <div class=\"uk-navbar-left\">

        <ul class=\"uk-navbar-nav\">
            <li class=\"uk-active\">
                <a href=\"#\"><img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ggs.png"), "html", null, true);
        echo "\" /></a>
            </li>
        </ul>

    </div>

    <div class=\"uk-navbar-right\">

        <ul class=\"uk-navbar-nav\">
            <li class=\"uk-active\"><a href=\"#\">Active</a></li>
            <li>
                <a href=\"#\">Parent</a>
                <div class=\"uk-navbar-dropdown\">
                    <ul class=\"uk-nav uk-navbar-dropdown-nav\">
                        <li class=\"uk-active\"><a href=\"#\">Active</a></li>
                        <li><a href=\"#\">Item</a></li>
                        <li><a href=\"#\">Item</a></li>
                    </ul>
                </div>
            </li>
            <li><a href=\"#\">Item</a></li>
        </ul>

    </div>

</nav>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "includes/front/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 7,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"uk-navbar-container\" uk-navbar style=\"background-color: #bdbdbd;\">

    <div class=\"uk-navbar-left\">

        <ul class=\"uk-navbar-nav\">
            <li class=\"uk-active\">
                <a href=\"#\"><img src=\"{{ asset('ggs.png') }}\" /></a>
            </li>
        </ul>

    </div>

    <div class=\"uk-navbar-right\">

        <ul class=\"uk-navbar-nav\">
            <li class=\"uk-active\"><a href=\"#\">Active</a></li>
            <li>
                <a href=\"#\">Parent</a>
                <div class=\"uk-navbar-dropdown\">
                    <ul class=\"uk-nav uk-navbar-dropdown-nav\">
                        <li class=\"uk-active\"><a href=\"#\">Active</a></li>
                        <li><a href=\"#\">Item</a></li>
                        <li><a href=\"#\">Item</a></li>
                    </ul>
                </div>
            </li>
            <li><a href=\"#\">Item</a></li>
        </ul>

    </div>

</nav>", "includes/front/navbar.html.twig", "/var/www/html/ggscore/app/Resources/views/includes/front/navbar.html.twig");
    }
}
