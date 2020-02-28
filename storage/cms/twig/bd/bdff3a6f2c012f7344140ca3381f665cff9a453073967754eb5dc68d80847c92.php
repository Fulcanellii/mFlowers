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

/* D:\OSPanel\domains\october/themes/lovata-bootstrap-shopaholic/partials/product/product-card/product-card.htm */
class __TwigTemplate_0d66785e5ecd69d6d1f43abc21d9d19a3449c3c0396aef3e4eab6ef999e8ff55 extends \Twig\Template
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
        $context["obOffer"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "offer", [], "any", false, false, false, 4), "first", [], "method", false, false, false, 4);
        // line 5
        echo "<div class=\"mb-4\">
  <div class=\"product-card card shadow\" data-id=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "id", [], "any", false, false, false, 6), "html", null, true);
        echo "\">
    <a class=\"product-card__link product-card__link_img\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "getPageUrl", [0 => "catalog"], "method", false, false, false, 7), "html", null, true);
        echo "\" aria-label=\"Read more about ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "name", [], "any", false, false, false, 7), "html", null, true);
        echo "\">
        ";
        // line 8
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, false, 8))) {
            // line 9
            echo "            <img class=\"product-card__img card-img-top\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, false, 9), "getThumb", [0 => 500, 1 => 500, 2 => ["quality" => 80]], "method", false, false, false, 9), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, false, 9), "description", [], "any", false, false, false, 9), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, false, 9), "title", [], "any", false, false, false, 9), "html", null, true);
            echo "\" loading=\"lazy\">
        ";
        } else {
            // line 11
            echo "            <img class=\"product-card__img card-img-top\" src=\"";
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/no-image.png");
            echo "\">
        ";
        }
        // line 13
        echo "    </a>
    <div class=\"card-body product-card__body\">
        ";
        // line 15
        if ((twig_get_attribute($this->env, $this->source, ($context["obActiveCategory"] ?? null), "id", [], "any", false, false, false, 15) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "category", [], "any", false, false, false, 15), "id", [], "any", false, false, false, 15))) {
            // line 16
            echo "        <a class=\"product-card__title-category text-dark\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "category", [], "any", false, false, false, 16), "getPageUrl", [0 => "catalog"], "method", false, false, false, 16), "html", null, true);
            echo "\">
            <u><h3 class=\"card-title product-card__category-title mb-2\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "category", [], "any", false, false, false, 17), "name", [], "any", false, false, false, 17), "html", null, true);
            echo "</h3></u>
        </a>
        ";
        }
        // line 20
        echo "        <a class=\"product-card__link\" href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "getPageUrl", [0 => "catalog"], "method", false, false, false, 20), "html", null, true);
        echo "\">
            <h3 class=\"card-title product-card__title text-dark font-weight-bold\">";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "name", [], "any", false, false, false, 21), "html", null, true);
        echo "</h3>
        </a>
        <div class=\"product-card__price-bar d-flex align-items-center\">
            <span class=\"product-card__current-price pr-2 font-weight-bold ";
        // line 24
        echo (((twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "old_price_value", [], "any", false, false, false, 24) > 0)) ? ("text-danger") : (""));
        echo "\">
                ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "price", [], "any", false, false, false, 25), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "currency", [], "any", false, false, false, 25), "html", null, true);
        echo "
            </span>
            ";
        // line 27
        if ((twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "old_price_value", [], "any", false, false, false, 27) > 0)) {
            // line 28
            echo "            <span class=\"product-card__old-price text-muted pr-2\">
                <s>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "old_price", [], "any", false, false, false, 29), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "currency", [], "any", false, false, false, 29), "html", null, true);
            echo "</s>
            </span>
            ";
        }
        // line 32
        echo "            ";
        if (($context["cart_is_available"] ?? null)) {
            // line 33
            echo "            <form class=\"mb-0\">
                <input type=\"hidden\" name=\"offer_id\" value=\"";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "id", [], "any", false, false, false, 34), "html", null, true);
            echo "\">
                <input type=\"hidden\" name=\"quantity\" value=\"1\">
                ";
            // line 36
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['btnAddClasses'] = "btn-sm"            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("form/button-add-to-cart/button-add-to-cart"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 37
            echo "            </form>
            ";
        }
        // line 39
        echo "        </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/product/product-card/product-card.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 39,  141 => 37,  136 => 36,  131 => 34,  128 => 33,  125 => 32,  117 => 29,  114 => 28,  112 => 27,  105 => 25,  101 => 24,  95 => 21,  90 => 20,  84 => 17,  79 => 16,  77 => 15,  73 => 13,  67 => 11,  57 => 9,  55 => 8,  49 => 7,  45 => 6,  42 => 5,  40 => 4,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var obProduct \\Lovata\\Shopaholic\\Classes\\Item\\ProductItem #}
{# @var obOffer \\Lovata\\Shopaholic\\Classes\\Item\\OfferItem #}

{% set obOffer = obProduct.offer.first() %}
<div class=\"mb-4\">
  <div class=\"product-card card shadow\" data-id=\"{{ obProduct.id }}\">
    <a class=\"product-card__link product-card__link_img\" href=\"{{ obProduct.getPageUrl('catalog') }}\" aria-label=\"Read more about {{ obProduct.name }}\">
        {% if obProduct.preview_image is not empty %}
            <img class=\"product-card__img card-img-top\" src=\"{{ obProduct.preview_image.getThumb(500, 500, {'quality': 80}) }}\" alt=\"{{ obProduct.preview_image.description }}\" title=\"{{ obProduct.preview_image.title }}\" loading=\"lazy\">
        {% else %}
            <img class=\"product-card__img card-img-top\" src=\"{{ 'assets/images/no-image.png'|theme }}\">
        {% endif %}
    </a>
    <div class=\"card-body product-card__body\">
        {% if obActiveCategory.id != obProduct.category.id %}
        <a class=\"product-card__title-category text-dark\" href=\"{{ obProduct.category.getPageUrl('catalog') }}\">
            <u><h3 class=\"card-title product-card__category-title mb-2\">{{ obProduct.category.name }}</h3></u>
        </a>
        {% endif %}
        <a class=\"product-card__link\" href=\"{{ obProduct.getPageUrl('catalog') }}\">
            <h3 class=\"card-title product-card__title text-dark font-weight-bold\">{{ obProduct.name }}</h3>
        </a>
        <div class=\"product-card__price-bar d-flex align-items-center\">
            <span class=\"product-card__current-price pr-2 font-weight-bold {{ obOffer.old_price_value > 0 ? 'text-danger' : '' }}\">
                {{ obOffer.price }}  {{ obOffer.currency }}
            </span>
            {% if obOffer.old_price_value > 0 %}
            <span class=\"product-card__old-price text-muted pr-2\">
                <s>{{ obOffer.old_price }} {{ obOffer.currency }}</s>
            </span>
            {% endif %}
            {% if cart_is_available %}
            <form class=\"mb-0\">
                <input type=\"hidden\" name=\"offer_id\" value=\"{{ obOffer.id }}\">
                <input type=\"hidden\" name=\"quantity\" value=\"1\">
                {% partial 'form/button-add-to-cart/button-add-to-cart' btnAddClasses='btn-sm' %}
            </form>
            {% endif %}
        </div>
    </div>
  </div>
</div>", "D:\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/product/product-card/product-card.htm", "");
    }
}
