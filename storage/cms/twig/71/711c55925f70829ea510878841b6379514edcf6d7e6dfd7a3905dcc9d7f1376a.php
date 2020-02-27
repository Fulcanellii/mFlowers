<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* D:\open_server_5_3_5_basic_premium_ultimate\OSPanel\domains\october/themes/lovata-bootstrap-shopaholic/layouts/main.htm */
class __TwigTemplate_b26452cedadf94387067b93e3806ad1e4926f52ae4c0498c866bd09064578fa2 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        ob_start();
        // line 2
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat|Playfair+Display&display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Bilbo+Swash+Caps&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/main.css");
        echo "\">
    <script src=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/modernizr.js");
        echo "\"></script>
    
    ";
        // line 12
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 13
        echo "    ";
        if (($context["seo_toolbox_is_available"] ?? null)) {
            // line 14
            echo "        ";
            $context['__placeholder_seo_tags_default_contents'] = null;            ob_start();            // line 15
            echo "            ";
            $context['__cms_component_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("SeoToolbox"            , $context['__cms_component_params']            );
            unset($context['__cms_component_params']);
            // line 16
            echo "        ";
            $context['__placeholder_seo_tags_default_contents'] = ob_get_clean();            // line 14
            echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('seo_tags', $context['__placeholder_seo_tags_default_contents']);
            unset($context['__placeholder_seo_tags_default_contents']);            // line 17
            echo "    ";
        }
        // line 18
        echo "</head>
<body class=\"body\" data-cart-is-available=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["cart_is_available"] ?? null), "html", null, true);
        echo "\">
    ";
        // line 20
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 21
        echo "    <div class=\"site-content\">
        ";
        // line 22
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 23
        echo "    </div>
    ";
        // line 24
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 25
        echo "<script src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.js");
        echo "\"></script>
        <script src=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap.js");
        echo "\"></script>
        <script src=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/app.js");
        echo "\"></script>
        <script src=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/node_modules/jquery/dist/jquery.min.js");
        echo "\"></script>
        <script src=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/node_modules/owl.carousel/dist/owl.carousel.min.js");
        echo "\"></script>
        <script src=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/node_modules/easyzoom/dist/easyzoom.js");
        echo "\"></script>
        <script src=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/main.js");
        echo "\"></script>
        <script src=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/modernizr.js");
        echo "\"></script>
        <script src=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/vendor.js");
        echo "\"></script>
    ";
        // line 34
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 35
        echo "    ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 36
        echo "</body>
</html>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/layouts/main.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 36,  148 => 35,  137 => 34,  133 => 33,  129 => 32,  125 => 31,  121 => 30,  117 => 29,  113 => 28,  109 => 27,  105 => 26,  100 => 25,  96 => 24,  93 => 23,  91 => 22,  88 => 21,  84 => 20,  80 => 19,  77 => 18,  74 => 17,  72 => 14,  70 => 16,  65 => 15,  63 => 14,  60 => 13,  57 => 12,  52 => 10,  48 => 9,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% spaceless %}
<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat|Playfair+Display&display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Bilbo+Swash+Caps&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/main.css'|theme }}\">
    <script src=\"{{ 'assets/js/modernizr.js'|theme }}\"></script>
    
    {% styles %}
    {% if seo_toolbox_is_available %}
        {% placeholder seo_tags default %}
            {% component 'SeoToolbox' %}
        {% endplaceholder %}
    {% endif %}
</head>
<body class=\"body\" data-cart-is-available=\"{{ cart_is_available }}\">
    {% partial 'header/header' %}
    <div class=\"site-content\">
        {% page %}
    </div>
    {% partial 'footer/footer' %}
<script src=\"{{ 'assets/vendor/jquery.js'|theme }}\"></script>
        <script src=\"{{ 'assets/vendor/bootstrap.js'|theme }}\"></script>
        <script src=\"{{ 'assets/javascript/app.js'|theme }}\"></script>
        <script src=\"{{ 'assets/node_modules/jquery/dist/jquery.min.js'|theme }}\"></script>
        <script src=\"{{ 'assets/node_modules/owl.carousel/dist/owl.carousel.min.js'|theme }}\"></script>
        <script src=\"{{ 'assets/node_modules/easyzoom/dist/easyzoom.js'|theme }}\"></script>
        <script src=\"{{ 'assets/js/main.js'|theme }}\"></script>
        <script src=\"{{ 'assets/js/modernizr.js'|theme }}\"></script>
        <script src=\"{{ 'assets/js/vendor.js'|theme }}\"></script>
    {% framework extras %}
    {% scripts %}
</body>
</html>
{% endspaceless %}", "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/layouts/main.htm", "");
    }
}
