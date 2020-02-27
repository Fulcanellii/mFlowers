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
    ";
        // line 5
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header/head"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 6
        echo "    
    ";
        // line 7
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 8
        echo "    ";
        if (($context["seo_toolbox_is_available"] ?? null)) {
            // line 9
            echo "        ";
            $context['__placeholder_seo_tags_default_contents'] = null;            ob_start();            // line 10
            echo "            ";
            $context['__cms_component_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("SeoToolbox"            , $context['__cms_component_params']            );
            unset($context['__cms_component_params']);
            // line 11
            echo "        ";
            $context['__placeholder_seo_tags_default_contents'] = ob_get_clean();            // line 9
            echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('seo_tags', $context['__placeholder_seo_tags_default_contents']);
            unset($context['__placeholder_seo_tags_default_contents']);            // line 12
            echo "    ";
        }
        // line 13
        echo "</head>
<body class=\"body\" data-cart-is-available=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["cart_is_available"] ?? null), "html", null, true);
        echo "\">
    ";
        // line 15
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 16
        echo "    <div class=\"site-content\">
        ";
        // line 17
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 18
        echo "    </div>
    ";
        // line 19
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 20
        echo "    ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer/foot"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 21
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
        return array (  99 => 21,  94 => 20,  90 => 19,  87 => 18,  85 => 17,  82 => 16,  78 => 15,  74 => 14,  71 => 13,  68 => 12,  66 => 9,  64 => 11,  59 => 10,  57 => 9,  54 => 8,  51 => 7,  48 => 6,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% spaceless %}
<!doctype html>
<html lang=\"en\">
<head>
    {% partial 'header/head' %}
    
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
    {% partial 'footer/foot' %}
</body>
</html>
{% endspaceless %}", "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/layouts/main.htm", "");
    }
}
