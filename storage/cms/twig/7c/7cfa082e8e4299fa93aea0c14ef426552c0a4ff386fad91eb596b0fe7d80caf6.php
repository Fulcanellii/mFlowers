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
        echo "
";
        // line 5
        $context["arSEOParams"] = ["main_category" => ($context["obMainCategory"] ?? null), "category" => ($context["obCategory"] ?? null), "product" => ($context["obProduct"] ?? null)];
        // line 6
        echo "
";
        // line 7
        if (($context["seo_toolbox_is_available"] ?? null)) {
            // line 8
            echo "    ";
            echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('seo_tags'            );
            // line 9
            echo "    ";
            $context['__cms_component_params'] = [];
            $context['__cms_component_params']['model'] = ((twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "isNotEmpty", [], "method", false, false, false, 9)) ? (($context["obProduct"] ?? null)) : (($context["obActiveCategory"] ?? null)))            ;
            $context['__cms_component_params']['params'] = ($context["arSEOParams"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("SeoToolbox"            , $context['__cms_component_params']            );
            unset($context['__cms_component_params']);
            // line 10
            echo "    ";
            // line 8
            echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true            );
        }
        // line 12
        echo "
";
        // line 13
        if (twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "isNotEmpty", [], "method", false, false, false, 13)) {
            // line 14
            echo "    ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['arBreadcrumbs'] = ($context["arBreadcrumbs"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("navigation/breadcrumbs/breadcrumbs"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 15
            echo "    ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['obProduct'] = ($context["obProduct"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product/product-card-detailed/product-card-detailed"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        } else {
            // line 17
            echo "    <!-- ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['obImage'] = twig_get_attribute($this->env, $this->source, ($context["obActiveCategory"] ?? null), "preview_image", [], "any", false, false, false, 17)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("content/picture-preview-top/picture-preview-top"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            echo " -->
    ";
            // line 18
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['obActiveCategory'] = ($context["obActiveCategory"] ?? null)            ;
            $context['__cms_partial_params']['label'] = "catalog-product-list"            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product/catalog-panel/catalog-panel"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 19
            echo "    ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['arBreadcrumbs'] = ($context["arBreadcrumbs"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("navigation/breadcrumbs/breadcrumbs"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 20
            echo "    ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['sPreviewText'] = twig_get_attribute($this->env, $this->source, ($context["obActiveCategory"] ?? null), "preview_text", [], "any", false, false, false, 20)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("content/text-preview/text-preview"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 21
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product/catalog-product-list/catalog-product-list"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 22
            echo "    ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['sContent'] = twig_get_attribute($this->env, $this->source, ($context["obActiveCategory"] ?? null), "description", [], "any", false, false, false, 22)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("content/wysiwyg/wysiwyg"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        }
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
        return array (  111 => 22,  106 => 21,  100 => 20,  94 => 19,  88 => 18,  80 => 17,  73 => 15,  67 => 14,  65 => 13,  62 => 12,  59 => 8,  57 => 10,  50 => 9,  47 => 8,  45 => 7,  42 => 6,  40 => 5,  37 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var obCategory \\Lovata\\Shopaholic\\Classes\\Item\\CategoryItem #}
{# @var obMainCategory \\Lovata\\Shopaholic\\Classes\\Item\\CategoryItem #}
{# @var obActiveCategory \\Lovata\\Shopaholic\\Classes\\Item\\CategoryItem #}

{% set arSEOParams = {'main_category': obMainCategory, 'category': obCategory, 'product': obProduct} %}

{% if seo_toolbox_is_available %}
    {% put seo_tags %}
    {% component 'SeoToolbox' model=obProduct.isNotEmpty() ? obProduct : obActiveCategory params=arSEOParams %}
    {% endput %}
{% endif %}

{% if obProduct.isNotEmpty() %}
    {% partial 'navigation/breadcrumbs/breadcrumbs' arBreadcrumbs=arBreadcrumbs %}
    {% partial 'product/product-card-detailed/product-card-detailed' obProduct=obProduct %}
{% else %}
    <!-- {% partial 'content/picture-preview-top/picture-preview-top' obImage=obActiveCategory.preview_image %} -->
    {% partial 'product/catalog-panel/catalog-panel' obActiveCategory=obActiveCategory label='catalog-product-list' %}
    {% partial 'navigation/breadcrumbs/breadcrumbs' arBreadcrumbs=arBreadcrumbs %}
    {% partial 'content/text-preview/text-preview' sPreviewText=obActiveCategory.preview_text %}
    {% partial 'product/catalog-product-list/catalog-product-list' %}
    {% partial 'content/wysiwyg/wysiwyg' sContent=obActiveCategory.description %}
{% endif %}", "D:\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/pages/catalog.htm", "");
    }
}
