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

/* D:\OSPanel\domains\october/themes/lovata-bootstrap-shopaholic/partials/product/catalog-product-list/ajax-catalog-product-list.htm */
class __TwigTemplate_c1526bc36ec2d1147684f435c2ef30e41dcae778ea35512657df93d7e071b802 extends \Twig\Template
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
        echo "
";
        // line 4
        echo "
";
        // line 6
        echo "
";
        // line 7
        if (twig_get_attribute($this->env, $this->source, ($context["obActiveCategory"] ?? null), "name", [], "any", false, false, false, 7)) {
            // line 8
            echo "
";
            // line 9
            $context["obProductList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ProductList"] ?? null), "make", [], "method", false, false, false, 9), "active", [], "method", false, false, false, 9), "sort", [0 => twig_get_attribute($this->env, $this->source, ($context["ProductList"] ?? null), "getSorting", [], "method", false, false, false, 9)], "method", false, false, false, 9), "category", [0 => twig_get_attribute($this->env, $this->source, ($context["obActiveCategory"] ?? null), "id", [], "any", false, false, false, 9), 1 => true], "method", false, false, false, 9);
            // line 10
            echo "
";
        } else {
            // line 12
            echo "
";
            // line 13
            $context["obProductList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ProductList"] ?? null), "make", [], "method", false, false, false, 13), "active", [], "method", false, false, false, 13), "sort", [0 => twig_get_attribute($this->env, $this->source, ($context["ProductList"] ?? null), "getSorting", [], "method", false, false, false, 13)], "method", false, false, false, 13);
            // line 14
            echo "
";
        }
        // line 16
        if (twig_get_attribute($this->env, $this->source, ($context["obBrand"] ?? null), "isNotEmpty", [], "method", false, false, false, 16)) {
            // line 17
            echo "    ";
            $context["obProductList"] = twig_get_attribute($this->env, $this->source, ($context["obProductList"] ?? null), "brand", [0 => twig_get_attribute($this->env, $this->source, ($context["obBrand"] ?? null), "id", [], "any", false, false, false, 17)], "method", false, false, false, 17);
        }
        // line 19
        echo "
";
        // line 21
        $context["iPage"] = twig_get_attribute($this->env, $this->source, ($context["Pagination"] ?? null), "getPageFromRequest", [], "method", false, false, false, 21);
        // line 22
        echo "
";
        // line 24
        $context["arProductList"] = twig_get_attribute($this->env, $this->source, ($context["obProductList"] ?? null), "page", [0 => ($context["iPage"] ?? null), 1 => twig_get_attribute($this->env, $this->source, ($context["Pagination"] ?? null), "getCountPerPage", [], "method", false, false, false, 24)], "method", false, false, false, 24);
        // line 25
        echo "
<div class=\"store__wrap\">
        <div class=\"store__head\">
            ";
        // line 28
        if (twig_get_attribute($this->env, $this->source, ($context["obActiveCategory"] ?? null), "name", [], "any", false, false, false, 28)) {
            // line 29
            echo "                <h2>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obActiveCategory"] ?? null), "name", [], "any", false, false, false, 29), "html", null, true);
            echo "</h2>
            ";
        } else {
            // line 31
            echo "                <h2>Все товары</h2>
            ";
        }
        // line 33
        echo "                ";
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['obActiveCategory'] = ($context["obActiveCategory"] ?? null)        ;
        $context['__cms_partial_params']['label'] = "catalog-product-list"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product/catalog-panel/catalog-panel"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 34
        echo "              </div>
";
        // line 35
        if ( !twig_test_empty(($context["arProductList"] ?? null))) {
            // line 36
            echo "    <div class=\"store__products\">
        ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["arProductList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["obProduct"]) {
                // line 38
                echo "            
                ";
                // line 39
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['obProduct'] = $context["obProduct"]                ;
                $context['__cms_partial_params']['obActiveCategory'] = ($context["obActiveCategory"] ?? null)                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product/product-card/product-card"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 40
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obProduct'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "    </div>
    ";
            // line 43
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['iCount'] = twig_get_attribute($this->env, $this->source, ($context["obProductList"] ?? null), "count", [], "method", false, false, false, 43)            ;
            $context['__cms_partial_params']['pagingLabel'] = "catalog-product-list"            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("navigation/pagination/pagination"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        } else {
            // line 45
            echo "    <div>Продуктов нет</div>
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 48
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/product/catalog-product-list/ajax-catalog-product-list.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 48,  146 => 45,  139 => 43,  136 => 42,  129 => 40,  123 => 39,  120 => 38,  116 => 37,  113 => 36,  111 => 35,  108 => 34,  101 => 33,  97 => 31,  91 => 29,  89 => 28,  84 => 25,  82 => 24,  79 => 22,  77 => 21,  74 => 19,  70 => 17,  68 => 16,  64 => 14,  62 => 13,  59 => 12,  55 => 10,  53 => 9,  50 => 8,  48 => 7,  45 => 6,  42 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% spaceless %}

{# @var obActiveCategory \\Lovata\\Shopaholic\\Classes\\Item\\CategoryItem #}

{# Get product collection #}

{% if obActiveCategory.name %}

{% set obProductList = ProductList.make().active().sort(ProductList.getSorting()).category(obActiveCategory.id, true) %}

{% else %}

{% set obProductList = ProductList.make().active().sort(ProductList.getSorting()) %}

{% endif %}
{% if obBrand.isNotEmpty() %}
    {% set obProductList = obProductList.brand(obBrand.id) %}
{% endif %}

{# Get array with pagination buttons #}
{% set iPage = Pagination.getPageFromRequest() %}

{# Apply pagination to product collection and get array with product items #}
{% set arProductList = obProductList.page(iPage, Pagination.getCountPerPage()) %}

<div class=\"store__wrap\">
        <div class=\"store__head\">
            {% if obActiveCategory.name %}
                <h2>{{obActiveCategory.name}}</h2>
            {% else %}
                <h2>Все товары</h2>
            {% endif %}
                {% partial 'product/catalog-panel/catalog-panel' obActiveCategory=obActiveCategory label='catalog-product-list' %}
              </div>
{% if arProductList is not empty %}
    <div class=\"store__products\">
        {% for obProduct in arProductList %}
            
                {% partial 'product/product-card/product-card' obProduct=obProduct obActiveCategory=obActiveCategory %}

        {% endfor %}
    </div>
    {% partial 'navigation/pagination/pagination' iCount=obProductList.count() pagingLabel='catalog-product-list' %}
{% else %}
    <div>Продуктов нет</div>
{% endif %}
{% endspaceless %}
</div>", "D:\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/product/catalog-product-list/ajax-catalog-product-list.htm", "");
    }
}
