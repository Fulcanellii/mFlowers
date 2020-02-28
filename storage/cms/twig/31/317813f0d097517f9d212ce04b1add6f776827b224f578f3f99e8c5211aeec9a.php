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
        $context["obProductList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ProductList"] ?? null), "make", [], "method", false, false, false, 6), "active", [], "method", false, false, false, 6), "sort", [0 => twig_get_attribute($this->env, $this->source, ($context["ProductList"] ?? null), "getSorting", [], "method", false, false, false, 6)], "method", false, false, false, 6), "category", [0 => twig_get_attribute($this->env, $this->source, ($context["obActiveCategory"] ?? null), "id", [], "any", false, false, false, 6), 1 => true], "method", false, false, false, 6);
        // line 7
        if (twig_get_attribute($this->env, $this->source, ($context["obBrand"] ?? null), "isNotEmpty", [], "method", false, false, false, 7)) {
            // line 8
            echo "    ";
            $context["obProductList"] = twig_get_attribute($this->env, $this->source, ($context["obProductList"] ?? null), "brand", [0 => twig_get_attribute($this->env, $this->source, ($context["obBrand"] ?? null), "id", [], "any", false, false, false, 8)], "method", false, false, false, 8);
        }
        // line 10
        echo "
";
        // line 12
        $context["iPage"] = twig_get_attribute($this->env, $this->source, ($context["Pagination"] ?? null), "getPageFromRequest", [], "method", false, false, false, 12);
        // line 13
        echo "
";
        // line 15
        $context["arProductList"] = twig_get_attribute($this->env, $this->source, ($context["obProductList"] ?? null), "page", [0 => ($context["iPage"] ?? null), 1 => twig_get_attribute($this->env, $this->source, ($context["Pagination"] ?? null), "getCountPerPage", [], "method", false, false, false, 15)], "method", false, false, false, 15);
        // line 16
        echo "
";
        // line 17
        if ( !twig_test_empty(($context["arProductList"] ?? null))) {
            // line 18
            echo "    <ul class=\"catalog__list list-unstyled flex-wrap row\">
        ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["arProductList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["obProduct"]) {
                // line 20
                echo "            <li class=\"catalog__item col-lg-4 col-sm-6 col-12\">
                ";
                // line 21
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['obProduct'] = $context["obProduct"]                ;
                $context['__cms_partial_params']['obActiveCategory'] = ($context["obActiveCategory"] ?? null)                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product/product-card/product-card"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 22
                echo "            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obProduct'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "    </ul>
    ";
            // line 25
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['iCount'] = twig_get_attribute($this->env, $this->source, ($context["obProductList"] ?? null), "count", [], "method", false, false, false, 25)            ;
            $context['__cms_partial_params']['pagingLabel'] = "catalog-product-list"            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("navigation/pagination/pagination"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        } else {
            // line 27
            echo "    <div>Products not found</div>
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
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
        return array (  101 => 27,  94 => 25,  91 => 24,  84 => 22,  78 => 21,  75 => 20,  71 => 19,  68 => 18,  66 => 17,  63 => 16,  61 => 15,  58 => 13,  56 => 12,  53 => 10,  49 => 8,  47 => 7,  45 => 6,  42 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% spaceless %}

{# @var obActiveCategory \\Lovata\\Shopaholic\\Classes\\Item\\CategoryItem #}

{# Get product collection #}
{% set obProductList = ProductList.make().active().sort(ProductList.getSorting()).category(obActiveCategory.id, true) %}
{% if obBrand.isNotEmpty() %}
    {% set obProductList = obProductList.brand(obBrand.id) %}
{% endif %}

{# Get array with pagination buttons #}
{% set iPage = Pagination.getPageFromRequest() %}

{# Apply pagination to product collection and get array with product items #}
{% set arProductList = obProductList.page(iPage, Pagination.getCountPerPage()) %}

{% if arProductList is not empty %}
    <ul class=\"catalog__list list-unstyled flex-wrap row\">
        {% for obProduct in arProductList %}
            <li class=\"catalog__item col-lg-4 col-sm-6 col-12\">
                {% partial 'product/product-card/product-card' obProduct=obProduct obActiveCategory=obActiveCategory %}
            </li>
        {% endfor %}
    </ul>
    {% partial 'navigation/pagination/pagination' iCount=obProductList.count() pagingLabel='catalog-product-list' %}
{% else %}
    <div>Products not found</div>
{% endif %}
{% endspaceless %}", "D:\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/product/catalog-product-list/ajax-catalog-product-list.htm", "");
    }
}
