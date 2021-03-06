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

/* D:\open_server_5_3_5_basic_premium_ultimate\OSPanel\domains\october/themes/lovata-bootstrap-shopaholic/partials/product/catalog-product-list/ajax-catalog-product-list.htm */
class __TwigTemplate_c3107a3cf7e9e9b64719ea5ba4749d3750c415aee46d1bb3fa9e104d623d980a extends \Twig\Template
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
        // line 29
        if (twig_get_attribute($this->env, $this->source, ($context["obActiveCategory"] ?? null), "name", [], "any", false, false, false, 29)) {
            // line 30
            echo "                <h2>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obActiveCategory"] ?? null), "name", [], "any", false, false, false, 30), "html", null, true);
            echo "</h2>
            ";
        } else {
            // line 32
            echo "                <h2>Все товары</h2>
            ";
        }
        // line 34
        echo "                ";
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['obActiveCategory'] = ($context["obActiveCategory"] ?? null)        ;
        $context['__cms_partial_params']['label'] = "catalog-product-list"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product/catalog-panel/catalog-panel"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 35
        echo "              </div>
";
        // line 36
        if ( !twig_test_empty(($context["arProductList"] ?? null))) {
            // line 37
            echo "    <div class=\"store__products\">
        ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["arProductList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["obProduct"]) {
                // line 39
                echo "            
                ";
                // line 40
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['obProduct'] = $context["obProduct"]                ;
                $context['__cms_partial_params']['obActiveCategory'] = ($context["obActiveCategory"] ?? null)                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product/product-card/product-card"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 41
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obProduct'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "    </div>
    ";
            // line 44
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['iCount'] = twig_get_attribute($this->env, $this->source, ($context["obProductList"] ?? null), "count", [], "method", false, false, false, 44)            ;
            $context['__cms_partial_params']['pagingLabel'] = "catalog-product-list"            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("navigation/pagination/pagination"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        } else {
            // line 46
            echo "    <div>Продуктов нет</div>
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 49
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/product/catalog-product-list/ajax-catalog-product-list.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 49,  147 => 46,  140 => 44,  137 => 43,  130 => 41,  124 => 40,  121 => 39,  117 => 38,  114 => 37,  112 => 36,  109 => 35,  102 => 34,  98 => 32,  92 => 30,  90 => 29,  84 => 25,  82 => 24,  79 => 22,  77 => 21,  74 => 19,  70 => 17,  68 => 16,  64 => 14,  62 => 13,  59 => 12,  55 => 10,  53 => 9,  50 => 8,  48 => 7,  45 => 6,  42 => 4,  39 => 2,  37 => 1,);
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
</div>", "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/product/catalog-product-list/ajax-catalog-product-list.htm", "");
    }
}
