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

/* D:\OSPanel\domains\october/themes/lovata-bootstrap-shopaholic/pages/checkout.htm */
class __TwigTemplate_e4514b7a5a84a3b420c7756feca42f13e7e94e80cf7f0ae201d8ae05d79fcb42 extends \Twig\Template
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
        $context["obActiveShippingType"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ShippingTypeList"] ?? null), "make", [], "method", false, false, false, 1), "active", [], "method", false, false, false, 1), "sort", [], "method", false, false, false, 1), "first", [], "method", false, false, false, 1);
        // line 2
        $context["obCartPositionList"] = twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "get", [0 => ($context["obActiveShippingType"] ?? null)], "method", false, false, false, 2);
        // line 3
        echo "
";
        // line 4
        $context["arBreadcrumbs"] = [0 => ["name" => "Home", "url" => $this->extensions['Cms\Twig\Extension']->pageFilter("index")], 1 => ["name" => "Checkout", "url" => $this->extensions['Cms\Twig\Extension']->pageFilter("checkout")]];
        // line 8
        echo "
<div class=\"container\">
    ";
        // line 10
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['arBreadcrumbs'] = ($context["arBreadcrumbs"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("navigation/breadcrumbs/breadcrumbs"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
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
        return "D:\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/pages/checkout.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 15,  70 => 14,  65 => 13,  62 => 12,  55 => 11,  50 => 10,  46 => 8,  44 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set obActiveShippingType = ShippingTypeList.make().active().sort().first() %}
{% set obCartPositionList = Cart.get(obActiveShippingType) %}

{% set arBreadcrumbs = [
    {'name': 'Home', 'url': 'index'|page},
    {'name': 'Checkout', 'url': 'checkout'|page}
] %}

<div class=\"container\">
    {% partial 'navigation/breadcrumbs/breadcrumbs' arBreadcrumbs=arBreadcrumbs %}
    {% partial 'product/cart-position-list/cart-position-list' obCartPositionList=obCartPositionList obActiveShippingType=obActiveShippingType %}
    {% if obCartPositionList.count > 0 %}
        {% partial 'form/checkout-form/checkout-form' %}
    {% endif %}
</div>", "D:\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/pages/checkout.htm", "");
    }
}
