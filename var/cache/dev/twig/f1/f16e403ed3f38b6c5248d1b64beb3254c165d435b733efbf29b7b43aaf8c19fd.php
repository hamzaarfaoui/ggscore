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

/* includes/front/js.html.twig */
class __TwigTemplate_4615eea7ec2435115403a4593b10c43cad7f69354818c6e6f3e406078a1f08fa extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/front/js.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/front/js.html.twig"));

        // line 1
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/front/uikit/uikit.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/front/uikit/uikit-icons.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>
<script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/back/datatable/jquery-3.3.1.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/back/datatable/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/back/datatable/dataTables.uikit.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/template/js/fileinput.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/template/js/locales/fr.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/template/themes/explorer-fa/theme.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/template/js/plugins/canvas-to-blob.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/ckeditor/ckeditor.js"), "html", null, true);
        echo "\"></script>
    <script>


        \$(document).ready(function () {
            \$(\"#kv-explorer\").fileinput({
            'theme': 'explorer-fa',
            'uploadUrl': '#',
            language: 'fr',
            allowedFileExtensions: ['jpg', 'png', 'gif', 'pdf', 'txt', 'csv', 'ods', 'xls', 'docx', 'jpeg'],
            overwriteInitial: false,
            initialPreviewAsData: true,
            /*initialPreview: [
                \"http://lorempixel.com/1920/1080/nature/1\",
                \"http://lorempixel.com/1920/1080/nature/2\",
                \"http://lorempixel.com/1920/1080/nature/3\"
            ],
            initialPreviewConfig: [
                {caption: \"nature-1.jpg\", size: 329892, width: \"120px\", url: \"{\$url}\", key: 1},
                {caption: \"nature-2.jpg\", size: 872378, width: \"120px\", url: \"{\$url}\", key: 2},
                {caption: \"nature-3.jpg\", size: 632762, width: \"120px\", url: \"{\$url}\", key: 3}
            ]*/
        });
                \$('#zero_config').DataTable({
                    \"scrollCollapse\": true,
                    \"paging\": true,
                   \"language\": {
                       \"zeroRecords\": \"Aucun résultat trouvé\",
                       \"infoEmpty\": \"Aucune données trouvé\",
                       \"lengthMenu\": \"Afficher _MENU_ lignes\",
                       \"infoFiltered\": \"(filtered from _MAX_ total records)\",
                       \"loadingRecords\": \"Chargement...\",
                       \"processing\": \"Processing...\",
                       \"info\": \"Affichage de _START_ à _END_ sur _TOTAL_ lignes\",
                       \"paginate\": {
                           \"first\": \"Premier\",
                           \"last\": \"Dérnier\",
                           \"next\": \">>\",
                           \"previous\": \"<<\"
                       },
                       \"search\": \"Recherche:\"}, });
           });
        
        

    </script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "includes/front/js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 11,  70 => 10,  66 => 9,  62 => 8,  58 => 7,  54 => 6,  50 => 5,  46 => 4,  41 => 2,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<script src=\"{{ asset('assets/front/uikit/uikit.min.js')}}\"></script>
<script src=\"{{ asset('assets/front/uikit/uikit-icons.min.js')}}\"></script>
<script src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>
<script src=\"{{ asset('assets/back/datatable/jquery-3.3.1.js')}}\"></script>
<script src=\"{{ asset('assets/back/datatable/jquery.dataTables.min.js')}}\"></script>
<script src=\"{{ asset('assets/back/datatable/dataTables.uikit.min.js')}}\"></script>
<script src=\"{{ asset('template/template/js/fileinput.js')}}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('template/template/js/locales/fr.js')}}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('template/template/themes/explorer-fa/theme.js')}}\" type=\"text/javascript\"></script>
    <script src=\"{{asset('template/template/js/plugins/canvas-to-blob.js')}}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('template/ckeditor/ckeditor.js') }}\"></script>
    <script>


        \$(document).ready(function () {
            \$(\"#kv-explorer\").fileinput({
            'theme': 'explorer-fa',
            'uploadUrl': '#',
            language: 'fr',
            allowedFileExtensions: ['jpg', 'png', 'gif', 'pdf', 'txt', 'csv', 'ods', 'xls', 'docx', 'jpeg'],
            overwriteInitial: false,
            initialPreviewAsData: true,
            /*initialPreview: [
                \"http://lorempixel.com/1920/1080/nature/1\",
                \"http://lorempixel.com/1920/1080/nature/2\",
                \"http://lorempixel.com/1920/1080/nature/3\"
            ],
            initialPreviewConfig: [
                {caption: \"nature-1.jpg\", size: 329892, width: \"120px\", url: \"{\$url}\", key: 1},
                {caption: \"nature-2.jpg\", size: 872378, width: \"120px\", url: \"{\$url}\", key: 2},
                {caption: \"nature-3.jpg\", size: 632762, width: \"120px\", url: \"{\$url}\", key: 3}
            ]*/
        });
                \$('#zero_config').DataTable({
                    \"scrollCollapse\": true,
                    \"paging\": true,
                   \"language\": {
                       \"zeroRecords\": \"Aucun résultat trouvé\",
                       \"infoEmpty\": \"Aucune données trouvé\",
                       \"lengthMenu\": \"Afficher _MENU_ lignes\",
                       \"infoFiltered\": \"(filtered from _MAX_ total records)\",
                       \"loadingRecords\": \"Chargement...\",
                       \"processing\": \"Processing...\",
                       \"info\": \"Affichage de _START_ à _END_ sur _TOTAL_ lignes\",
                       \"paginate\": {
                           \"first\": \"Premier\",
                           \"last\": \"Dérnier\",
                           \"next\": \">>\",
                           \"previous\": \"<<\"
                       },
                       \"search\": \"Recherche:\"}, });
           });
        
        

    </script>
", "includes/front/js.html.twig", "/var/www/html/ggscore/app/Resources/views/includes/front/js.html.twig");
    }
}
