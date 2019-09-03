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
        echo "     
<nav class=\"uk-navbar uk-navbar-container uk-box-shadow-medium uk-hidden@m\" id=\"menu\" uk-navbar style=\"position: relative; z-index: 980;background-color: #212121;height: 50px;\">
    <div class=\"uk-navbar-left\">
        <a class=\"uk-navbar-toggle\" href=\"#\" uk-toggle=\"target: #menu-mobile\">
            <span uk-navbar-toggle-icon></span>
        </a>
    </div>
    <div class=\"uk-navbar-center\">
        <a href=\"/\" class=\"uk-navbar-item uk-logo\"><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("front_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ggs.png"), "html", null, true);
        echo "\" /></a></a>
    </div>
</nav>
<div class=\"uk-offcanvas-content\">
    <div id=\"menu-mobile\" uk-offcanvas=\"mode: push; overlay: true;flip: true\">
        <div class=\"uk-offcanvas-bar\">
            <button class=\"uk-offcanvas-close\" type=\"button\" uk-close></button>
            <ul uk-accordion>
                ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("FrontBundle:Default:competitionsResponsive"));
        // line 19
        echo "
            </ul>
        </div>
</div>
<!-- Menu desktop -->
<nav class=\"uk-navbar uk-navbar-container uk-box-shadow-medium uk-visible@l\" id=\"menu\" uk-navbar style=\"position: relative; z-index: 980;background-color: #212121;height: 50px;\">
    <div class=\"uk-navbar-center\">
        <a href=\"/\" class=\"uk-navbar-item uk-logo\"><a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("front_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ggs.png"), "html", null, true);
        echo "\" /></a></a>
        <ul class=\"uk-navbar-nav\">
            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("FrontBundle:Default:competitions"));
        // line 30
        echo "
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
        return array (  79 => 30,  77 => 28,  70 => 26,  61 => 19,  59 => 17,  46 => 9,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("     
<nav class=\"uk-navbar uk-navbar-container uk-box-shadow-medium uk-hidden@m\" id=\"menu\" uk-navbar style=\"position: relative; z-index: 980;background-color: #212121;height: 50px;\">
    <div class=\"uk-navbar-left\">
        <a class=\"uk-navbar-toggle\" href=\"#\" uk-toggle=\"target: #menu-mobile\">
            <span uk-navbar-toggle-icon></span>
        </a>
    </div>
    <div class=\"uk-navbar-center\">
        <a href=\"/\" class=\"uk-navbar-item uk-logo\"><a href=\"{{ path('front_homepage') }}\"><img src=\"{{ asset('ggs.png') }}\" /></a></a>
    </div>
</nav>
<div class=\"uk-offcanvas-content\">
    <div id=\"menu-mobile\" uk-offcanvas=\"mode: push; overlay: true;flip: true\">
        <div class=\"uk-offcanvas-bar\">
            <button class=\"uk-offcanvas-close\" type=\"button\" uk-close></button>
            <ul uk-accordion>
                {{ render(controller(
                        'FrontBundle:Default:competitionsResponsive'
                    )) }}
            </ul>
        </div>
</div>
<!-- Menu desktop -->
<nav class=\"uk-navbar uk-navbar-container uk-box-shadow-medium uk-visible@l\" id=\"menu\" uk-navbar style=\"position: relative; z-index: 980;background-color: #212121;height: 50px;\">
    <div class=\"uk-navbar-center\">
        <a href=\"/\" class=\"uk-navbar-item uk-logo\"><a href=\"{{ path('front_homepage') }}\"><img src=\"{{ asset('ggs.png') }}\" /></a></a>
        <ul class=\"uk-navbar-nav\">
            {{ render(controller(
                        'FrontBundle:Default:competitions'
                    )) }}
        </ul>
    </div>
</nav>", "includes/front/navbar.html.twig", "/var/www/html/ggscore/app/Resources/views/includes/front/navbar.html.twig");
    }
}
