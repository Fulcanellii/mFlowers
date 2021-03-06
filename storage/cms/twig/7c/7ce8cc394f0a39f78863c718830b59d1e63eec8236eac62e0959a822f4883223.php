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

/* D:\open_server_5_3_5_basic_premium_ultimate\OSPanel\domains\october/themes/lovata-bootstrap-shopaholic/pages/magazin.htm */
class __TwigTemplate_361bced93ee2e3342f19eaef5925a1090b57e636a9a7aacd032d5a13d2efb882 extends \Twig\Template
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
        // line 2
        $context["obProductList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ProductList"] ?? null), "make", [], "method", false, false, false, 2), "active", [], "method", false, false, false, 2), "sort", [0 => twig_get_attribute($this->env, $this->source, ($context["ProductList"] ?? null), "getSorting", [], "method", false, false, false, 2)], "method", false, false, false, 2);
        // line 3
        echo "
<div class=\"storePage\">
<div class=\"container\">

";
        // line 7
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product/catalog-product-list/catalog-product-list"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 8
        echo "
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/pages/magazin.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 8,  45 => 7,  39 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Get product collection #}
{% set obProductList = ProductList.make().active().sort(ProductList.getSorting()) %}

<div class=\"storePage\">
<div class=\"container\">

{% partial 'product/catalog-product-list/catalog-product-list'  %}

</div>
</div>", "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/pages/magazin.htm", "");
    }
}
