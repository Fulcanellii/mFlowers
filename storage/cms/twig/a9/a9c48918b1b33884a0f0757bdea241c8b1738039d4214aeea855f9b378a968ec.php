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

/* D:\open_server_5_3_5_basic_premium_ultimate\OSPanel\domains\october/themes/lovata-bootstrap-shopaholic/partials/promo-block/promo-block-list/ajax-promo-block-list.htm */
class __TwigTemplate_dcbc35bf1663d45bfcd90d21163acecba6595020dc987b4f0177322c0e3d2a94 extends \Twig\Template
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
        // line 3
        $context["obPromoBlockList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["PromoBlockList"] ?? null), "make", [], "method", false, false, false, 3), "active", [], "method", false, false, false, 3), "sort", [0 => twig_get_attribute($this->env, $this->source, ($context["PromoBlockList"] ?? null), "getSorting", [], "method", false, false, false, 3)], "method", false, false, false, 3);
        // line 4
        echo "
";
        // line 6
        $context["iPage"] = twig_get_attribute($this->env, $this->source, ($context["Pagination"] ?? null), "getPageFromRequest", [], "method", false, false, false, 6);
        // line 7
        echo "
";
        // line 9
        $context["arPromoBlockList"] = twig_get_attribute($this->env, $this->source, ($context["obPromoBlockList"] ?? null), "page", [0 => ($context["iPage"] ?? null), 1 => twig_get_attribute($this->env, $this->source, ($context["Pagination"] ?? null), "getCountPerPage", [], "method", false, false, false, 9)], "method", false, false, false, 9);
        // line 10
        echo "
";
        // line 11
        if ( !twig_test_empty(($context["arPromoBlockList"] ?? null))) {
            // line 12
            echo "    <ul class=\"catalog__list list-unstyled flex-wrap\">
        ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["arPromoBlockList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["obPromoBlock"]) {
                // line 14
                echo "            <li class=\"catalog__item col-lg-4 col-sm-6 col-12\">
                ";
                // line 15
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['obPromoBlock'] = $context["obPromoBlock"]                ;
                $context['__cms_partial_params']['obActiveCategory'] = ($context["obActiveCategory"] ?? null)                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("promo-block/promo-block-card/promo-block-card"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 16
                echo "            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obPromoBlock'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "    </ul>
    ";
            // line 19
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['iCount'] = twig_get_attribute($this->env, $this->source, ($context["obPromoBlockList"] ?? null), "count", [], "method", false, false, false, 19)            ;
            $context['__cms_partial_params']['pagingLabel'] = "promo-block-list"            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("navigation/pagination/pagination"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        } else {
            // line 21
            echo "    <div>PromoBlocks not found</div>
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/promo-block/promo-block-list/ajax-promo-block-list.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  82 => 19,  79 => 18,  72 => 16,  66 => 15,  63 => 14,  59 => 13,  56 => 12,  54 => 11,  51 => 10,  49 => 9,  46 => 7,  44 => 6,  41 => 4,  39 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% spaceless %}
{# Get promo block collection #}
{% set obPromoBlockList = PromoBlockList.make().active().sort(PromoBlockList.getSorting()) %}

{# Get array with pagination buttons #}
{% set iPage = Pagination.getPageFromRequest() %}

{# Apply pagination to promo block collection and get array with promo block items #}
{% set arPromoBlockList = obPromoBlockList.page(iPage, Pagination.getCountPerPage()) %}

{% if arPromoBlockList is not empty %}
    <ul class=\"catalog__list list-unstyled flex-wrap\">
        {% for obPromoBlock in arPromoBlockList %}
            <li class=\"catalog__item col-lg-4 col-sm-6 col-12\">
                {% partial 'promo-block/promo-block-card/promo-block-card' obPromoBlock=obPromoBlock obActiveCategory=obActiveCategory %}
            </li>
        {% endfor %}
    </ul>
    {% partial 'navigation/pagination/pagination' iCount=obPromoBlockList.count() pagingLabel='promo-block-list' %}
{% else %}
    <div>PromoBlocks not found</div>
{% endif %}
{% endspaceless %}", "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/promo-block/promo-block-list/ajax-promo-block-list.htm", "");
    }
}
