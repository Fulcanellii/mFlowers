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

/* D:\OSPanel\domains\october/themes/lovata-bootstrap-shopaholic/partials/promo-block/promo-block-product-tab/promo-block-product-tab.htm */
class __TwigTemplate_3caaaffb95ce86d951219afa55b85e67bcb41ea519baa60b7c96751bcd046634 extends \Twig\Template
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
        // line 3
        echo "
";
        // line 4
        if (twig_get_attribute($this->env, $this->source, ($context["obPromoBlockList"] ?? null), "isNotEmpty", [], "method", false, false, false, 4)) {
            // line 5
            echo "<section class=\"promo-block-product-tab container mt-4\">
    <ul class=\"promo-block-product-tab__wrap nav nav-pills bg-secondary mb-3 nav-justified lighten-3 mx-0 shadow\" id=\"product-tab\" role=\"tablist\">
        ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["obPromoBlockList"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["obPromoBlock"]) {
                // line 8
                echo "            ";
                $context["active"] = ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 8)) ? ("active") : (""));
                // line 9
                echo "            <li class=\"nav-item\">
                <a class=\"nav-link ";
                // line 10
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                echo " text-white\" data-toggle=\"pill\" href=\"#promo-block-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obPromoBlock"], "id", [], "any", false, false, false, 10), "html", null, true);
                echo "\" role=\"tab\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obPromoBlock"], "name", [], "any", false, false, false, 10), "html", null, true);
                echo "</a>
            </li>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obPromoBlock'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "    </ul>
    <div class=\"tab-content promo-block-product-tab__content\">
        ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["obPromoBlockList"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["obPromoBlock"]) {
                // line 16
                echo "            ";
                $context["active"] = ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 16)) ? ("show active") : (""));
                // line 17
                echo "            <div class=\"tab-pane fade ";
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                echo "\" id=\"promo-block-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obPromoBlock"], "id", [], "any", false, false, false, 17), "html", null, true);
                echo "\" role=\"tabpanel\">
                <div class=\"row\">
                    ";
                // line 19
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obPromoBlock"], "product", [], "any", false, false, false, 19), "active", [], "method", false, false, false, 19), "random", [0 => 3], "method", false, false, false, 19));
                foreach ($context['_seq'] as $context["_key"] => $context["obProduct"]) {
                    // line 20
                    echo "                        <div class=\"col-lg-4 col-12\">
                            ";
                    // line 21
                    $context['__cms_partial_params'] = [];
                    $context['__cms_partial_params']['obProduct'] = $context["obProduct"]                    ;
                    echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product/product-card/product-card"                    , $context['__cms_partial_params']                    , true                    );
                    unset($context['__cms_partial_params']);
                    // line 22
                    echo "                        </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obProduct'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                echo "                </div>
            </div>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obPromoBlock'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "    </div>
</section>
";
        }
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/promo-block/promo-block-product-tab/promo-block-product-tab.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 27,  141 => 24,  134 => 22,  129 => 21,  126 => 20,  122 => 19,  114 => 17,  111 => 16,  94 => 15,  90 => 13,  69 => 10,  66 => 9,  63 => 8,  46 => 7,  42 => 5,  40 => 4,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var obPromoBlockList \\Lovata\\Shopaholic\\Classes\\Collection\\PromoBlockCollection #}
{# @var obPromoBlock \\Lovata\\Shopaholic\\Classes\\Item\\PromoBlockItem #}

{% if obPromoBlockList.isNotEmpty() %}
<section class=\"promo-block-product-tab container mt-4\">
    <ul class=\"promo-block-product-tab__wrap nav nav-pills bg-secondary mb-3 nav-justified lighten-3 mx-0 shadow\" id=\"product-tab\" role=\"tablist\">
        {% for obPromoBlock in obPromoBlockList %}
            {% set active = loop.first ? 'active' : '' %}
            <li class=\"nav-item\">
                <a class=\"nav-link {{ active }} text-white\" data-toggle=\"pill\" href=\"#promo-block-{{ obPromoBlock.id }}\" role=\"tab\">{{ obPromoBlock.name }}</a>
            </li>
        {% endfor %}
    </ul>
    <div class=\"tab-content promo-block-product-tab__content\">
        {% for obPromoBlock in obPromoBlockList %}
            {% set active = loop.first ? 'show active' : '' %}
            <div class=\"tab-pane fade {{ active }}\" id=\"promo-block-{{ obPromoBlock.id }}\" role=\"tabpanel\">
                <div class=\"row\">
                    {% for obProduct in obPromoBlock.product.active().random(3) %}
                        <div class=\"col-lg-4 col-12\">
                            {% partial 'product/product-card/product-card' obProduct=obProduct %}
                        </div>
                    {% endfor %}
                </div>
            </div>
        {% endfor %}
    </div>
</section>
{% endif %}", "D:\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/promo-block/promo-block-product-tab/promo-block-product-tab.htm", "");
    }
}
