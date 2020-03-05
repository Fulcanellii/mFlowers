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

/* D:\open_server_5_3_5_basic_premium_ultimate\OSPanel\domains\october/themes/lovata-bootstrap-shopaholic/pages/checkout.htm */
class __TwigTemplate_304869e48e96f0c85f7c7f113018517b621c133c0e74ad3f1715fa3a1b0fd68f extends \Twig\Template
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
        $context["obActiveShippingType"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ShippingTypeList"] ?? null), "make", [], "method", false, false, false, 1), "active", [], "method", false, false, false, 1), "sort", [], "method", false, false, false, 1), "getByCode", [0 => "zabr0"], "method", false, false, false, 1);
        // line 2
        $context["obCartPositionList"] = twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "get", [0 => ($context["obActiveShippingType"] ?? null)], "method", false, false, false, 2);
        // line 3
        echo "
";
        // line 4
        $context["arBreadcrumbs"] = [0 => ["name" => "Главная", "url" => $this->extensions['Cms\Twig\Extension']->pageFilter("index")], 1 => ["name" => "Корзина", "url" => $this->extensions['Cms\Twig\Extension']->pageFilter("checkout")]];
        // line 8
        echo "
<div class=\"container\">
    ";
        // line 11
        echo "    ";
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['obCartPositionList'] = ($context["obCartPositionList"] ?? null)        ;
        $context['__cms_partial_params']['obActiveShippingType'] = ($context["obActiveShippingType"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product/cart-position-list/cart-position-list"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 12
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["obCartPositionList"] ?? null), "count", [], "any", false, false, false, 12) > 0)) {
            // line 13
            echo "        ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['obCartPositionList'] = ($context["obCartPositionList"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("form/checkout-form/checkout-form"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 14
            echo "    ";
        }
        // line 15
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/pages/checkout.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 15,  66 => 14,  60 => 13,  57 => 12,  50 => 11,  46 => 8,  44 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set obActiveShippingType = ShippingTypeList.make().active().sort().getByCode('zabr0') %}
{% set obCartPositionList = Cart.get(obActiveShippingType) %}

{% set arBreadcrumbs = [
    {'name': 'Главная', 'url': 'index'|page},
    {'name': 'Корзина', 'url': 'checkout'|page}
] %}

<div class=\"container\">
    {#{% partial 'navigation/breadcrumbs/breadcrumbs' arBreadcrumbs=arBreadcrumbs %}#}
    {% partial 'product/cart-position-list/cart-position-list' obCartPositionList=obCartPositionList obActiveShippingType=obActiveShippingType %}
    {% if obCartPositionList.count > 0 %}
        {% partial 'form/checkout-form/checkout-form' obCartPositionList=obCartPositionList %}
    {% endif %}
</div>", "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/pages/checkout.htm", "");
    }
}
