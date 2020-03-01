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

/* D:\OSPanel\domains\october/themes/lovata-bootstrap-shopaholic/pages/catalog.htm */
class __TwigTemplate_49a534b5bbd6a8afe919bbe43763dcd316c1904d6639f67c10848411e351a654 extends \Twig\Template
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
        // line 4
        echo "<div class=\"storePage\">
<div class=\"container\">
";
        // line 6
        $context["arSEOParams"] = ["main_category" => ($context["obMainCategory"] ?? null), "category" => ($context["obCategory"] ?? null), "product" => ($context["obProduct"] ?? null)];
        // line 7
        echo "
";
        // line 8
        if (($context["seo_toolbox_is_available"] ?? null)) {
            // line 9
            echo "    ";
            echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('seo_tags'            );
            // line 10
            echo "    ";
            $context['__cms_component_params'] = [];
            $context['__cms_component_params']['model'] = ((twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "isNotEmpty", [], "method", false, false, false, 10)) ? (($context["obProduct"] ?? null)) : (($context["obActiveCategory"] ?? null)))            ;
            $context['__cms_component_params']['params'] = ($context["arSEOParams"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("SeoToolbox"            , $context['__cms_component_params']            );
            unset($context['__cms_component_params']);
            // line 11
            echo "    ";
            // line 9
            echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true            );
        }
        // line 13
        echo "
";
        // line 14
        if (twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "isNotEmpty", [], "method", false, false, false, 14)) {
            // line 15
            echo "    ";
            // line 16
            echo "    ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['obProduct'] = ($context["obProduct"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product/product-card-detailed/product-card-detailed"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        } else {
            // line 18
            echo "    ";
            // line 19
            echo "    
    ";
            // line 21
            echo "    ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['sPreviewText'] = twig_get_attribute($this->env, $this->source, ($context["obActiveCategory"] ?? null), "preview_text", [], "any", false, false, false, 21)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("content/text-preview/text-preview"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 22
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product/catalog-product-list/catalog-product-list"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 23
            echo "    ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['sContent'] = twig_get_attribute($this->env, $this->source, ($context["obActiveCategory"] ?? null), "description", [], "any", false, false, false, 23)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("content/wysiwyg/wysiwyg"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        }
        // line 25
        echo "
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/pages/catalog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 25,  93 => 23,  88 => 22,  82 => 21,  79 => 19,  77 => 18,  70 => 16,  68 => 15,  66 => 14,  63 => 13,  60 => 9,  58 => 11,  51 => 10,  48 => 9,  46 => 8,  43 => 7,  41 => 6,  37 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var obCategory \\Lovata\\Shopaholic\\Classes\\Item\\CategoryItem #}
{# @var obMainCategory \\Lovata\\Shopaholic\\Classes\\Item\\CategoryItem #}
{# @var obActiveCategory \\Lovata\\Shopaholic\\Classes\\Item\\CategoryItem #}
<div class=\"storePage\">
<div class=\"container\">
{% set arSEOParams = {'main_category': obMainCategory, 'category': obCategory, 'product': obProduct} %}

{% if seo_toolbox_is_available %}
    {% put seo_tags %}
    {% component 'SeoToolbox' model=obProduct.isNotEmpty() ? obProduct : obActiveCategory params=arSEOParams %}
    {% endput %}
{% endif %}

{% if obProduct.isNotEmpty() %}
    {#{% partial 'navigation/breadcrumbs/breadcrumbs' arBreadcrumbs=arBreadcrumbs %}#}
    {% partial 'product/product-card-detailed/product-card-detailed' obProduct=obProduct %}
{% else %}
    {#{% partial 'content/picture-preview-top/picture-preview-top' obImage=obActiveCategory.preview_image %}#}
    
    {#{% partial 'navigation/breadcrumbs/breadcrumbs' arBreadcrumbs=arBreadcrumbs %}#}
    {% partial 'content/text-preview/text-preview' sPreviewText=obActiveCategory.preview_text %}
    {% partial 'product/catalog-product-list/catalog-product-list'  %}
    {% partial 'content/wysiwyg/wysiwyg' sContent=obActiveCategory.description %}
{% endif %}

</div>
</div>", "D:\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/pages/catalog.htm", "");
    }
}
