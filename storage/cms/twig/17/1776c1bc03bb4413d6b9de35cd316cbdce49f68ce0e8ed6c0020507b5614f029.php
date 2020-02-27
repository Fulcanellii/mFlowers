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

/* D:\open_server_5_3_5_basic_premium_ultimate\OSPanel\domains\october/themes/lovata-bootstrap-shopaholic/pages/index.htm */
class __TwigTemplate_925b2d89c14c88241a0c6d4a5904c90ab9948a46480d07aeb475e5d5cd15144a extends \Twig\Template
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
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['arImageList'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 1), "main_slider", [], "any", false, false, false, 1)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("content/carousel/carousel"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "
";
        // line 3
        $context["obPromoBlockList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["PromoBlockList"] ?? null), "make", [], "method", false, false, false, 3), "merge", [0 => [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 3), "promo_block_left", [], "any", false, false, false, 3), 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 3), "promo_block_middle", [], "any", false, false, false, 3), 2 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 3), "promo_block_right", [], "any", false, false, false, 3)]], "method", false, false, false, 3);
        // line 4
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['obPromoBlockList'] = ($context["obPromoBlockList"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("promo-block/promo-block-product-tab/promo-block-product-tab"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "
";
        // line 6
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['sImagePath'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 6), "index_banner", [], "any", false, false, false, 6)        ;
        $context['__cms_partial_params']['sLink'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 6), "index_banner_link", [], "any", false, false, false, 6)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("content/banner/banner"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 7
        echo "
";
        // line 8
        $context["obCategoryList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["CategoryList"] ?? null), "make", [], "method", false, false, false, 8), "merge", [0 => [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 8), "category_left", [], "any", false, false, false, 8), 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 8), "category_middle", [], "any", false, false, false, 8), 2 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 8), "category_right", [], "any", false, false, false, 8)]], "method", false, false, false, 8);
        // line 9
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['obCategoryList'] = ($context["obCategoryList"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("category/category-product-column/category-product-column"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/pages/index.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 9,  64 => 8,  61 => 7,  55 => 6,  52 => 5,  47 => 4,  45 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial 'content/carousel/carousel' arImageList=this.theme.main_slider %}

{% set obPromoBlockList = PromoBlockList.make().merge([this.theme.promo_block_left, this.theme.promo_block_middle, this.theme.promo_block_right]) %}
{% partial 'promo-block/promo-block-product-tab/promo-block-product-tab' obPromoBlockList=obPromoBlockList %}

{% partial 'content/banner/banner' sImagePath=this.theme.index_banner sLink=this.theme.index_banner_link %}

{% set obCategoryList = CategoryList.make().merge([this.theme.category_left, this.theme.category_middle, this.theme.category_right]) %}
{% partial 'category/category-product-column/category-product-column' obCategoryList=obCategoryList %}", "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/pages/index.htm", "");
    }
}
