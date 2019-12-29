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

/* posts/edit.html.twig */
class __TwigTemplate_88d03abf4ac18af3cd17b49ba92be877547aa1a881810a4f02ede301b60ec673 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "posts/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "posts/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "posts/edit.html.twig", 1);
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
        echo "    <h1>Post edit</h1>
    <div class=\"row\">
        <div class=\"col-md-12\">
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
            <label><input class=\"uk-radio\" type=\"radio\" name=\"representation\" value=\"1\" ";
        // line 18
        echo ((($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "isVertical", []) == 1)) ? ("checked") : (""));
        echo "> Vérticale</label>
            <label><input class=\"uk-radio\" type=\"radio\" name=\"representation\" value=\"0\" ";
        // line 19
        echo ((($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "isVertical", []) == 0)) ? ("checked") : (""));
        echo "> Horizansale</label>
        </div>
        <div class=\"uk-margin\">
            <div class=\"file-loading\">
                <input id=\"kv-explorer\" class=\"file\" type=\"file\" name=\"image\">
            </div>
        </div>
        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" />
        <a class=\"btn btn-default\" href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_posts_index");
        echo "\">Liste d'articles</a>
        <button class=\"btn btn-danger uk-margin-small-right\" type=\"button\" uk-toggle=\"target: #modal-example\">Supprimer</button>
        <!-- This is the modal -->
        <div id=\"modal-example\" uk-modal>
            <div class=\"uk-modal-dialog uk-modal-body\">
                <h2 class=\"uk-modal-title\">Suppression</h2>
                <p>Etes-vous sùre de vouloir supprimer cet article ?</p>
                <p class=\"uk-text-right\">
                        <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_posts_delete", ["id" => $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-danger\">Oui</a>
                        <button class=\"btn btn-default uk-modal-close\" type=\"button\">Non</button>
                </p>
            </div>
        </div>
    ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
        
            
    </div>   
    <br><br><br><br>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 48
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
        // line 57
        if ($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "image", [])) {
            // line 58
            echo "            initialPreview: [
                \"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/articles/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "image", []), "html", null, true);
            echo "\"
            ],
            initialPreviewConfig: [
                {caption: \"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/articles/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "image", []), "html", null, true);
            echo "\", width: \"120px\", url: \"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_posts_delete_image", ["id" => $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "id", [])]), "html", null, true);
            echo "\", key: 1}
            ],
            ";
        }
        // line 65
        echo "        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "posts/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 65,  192 => 62,  185 => 59,  182 => 58,  180 => 57,  167 => 48,  158 => 47,  141 => 40,  133 => 35,  122 => 27,  111 => 19,  107 => 18,  100 => 14,  94 => 11,  89 => 9,  84 => 6,  75 => 5,  62 => 3,  53 => 2,  31 => 1,);
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
    <h1>Post edit</h1>
    <div class=\"row\">
        <div class=\"col-md-12\">
    {{ form_start(form, { 'attr': {'enctype': 'multipart/form-data'} }) }}
        <div class=\"uk-margin\">
            {{ form_widget(form.title, {'attr': {'class': 'uk-input', 'required': 'true'},}) }}
        </div>
        <div class=\"uk-margin\">
            {{ form_widget(form.content, {'attr': {'class': 'ckeditor', 'required': 'true'},}) }}
        </div>
        
        <div class=\"uk-margin uk-grid-small uk-child-width-auto uk-grid\">
            <label><input class=\"uk-radio\" type=\"radio\" name=\"representation\" value=\"1\" {{post.isVertical == 1?'checked':''}}> Vérticale</label>
            <label><input class=\"uk-radio\" type=\"radio\" name=\"representation\" value=\"0\" {{post.isVertical == 0?'checked':''}}> Horizansale</label>
        </div>
        <div class=\"uk-margin\">
            <div class=\"file-loading\">
                <input id=\"kv-explorer\" class=\"file\" type=\"file\" name=\"image\">
            </div>
        </div>
        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" />
        <a class=\"btn btn-default\" href=\"{{ path('admin_posts_index') }}\">Liste d'articles</a>
        <button class=\"btn btn-danger uk-margin-small-right\" type=\"button\" uk-toggle=\"target: #modal-example\">Supprimer</button>
        <!-- This is the modal -->
        <div id=\"modal-example\" uk-modal>
            <div class=\"uk-modal-dialog uk-modal-body\">
                <h2 class=\"uk-modal-title\">Suppression</h2>
                <p>Etes-vous sùre de vouloir supprimer cet article ?</p>
                <p class=\"uk-text-right\">
                        <a href=\"{{ path('admin_posts_delete', {id:post.id}) }}\" class=\"btn btn-danger\">Oui</a>
                        <button class=\"btn btn-default uk-modal-close\" type=\"button\">Non</button>
                </p>
            </div>
        </div>
    {{ form_end(form) }}
        </div>
        
            
    </div>   
    <br><br><br><br>
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
            initialPreviewConfig: [
                {caption: \"{{ asset('uploads/articles/') }}{{ post.image }}\", width: \"120px\", url: \"{{path('admin_posts_delete_image', {id:post.id})}}\", key: 1}
            ],
            {% endif %}
        });
    </script>
{% endblock %}
", "posts/edit.html.twig", "/var/www/html/ggscore/app/Resources/views/posts/edit.html.twig");
    }
}
