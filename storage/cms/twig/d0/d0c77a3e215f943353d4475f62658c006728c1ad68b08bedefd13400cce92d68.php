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

/* D:\open_server_5_3_5_basic_premium_ultimate\OSPanel\domains\october/themes/lovata-bootstrap-shopaholic/partials/product/product-card/product-card.htm */
class __TwigTemplate_df7d6b7e2ce9f999f213a63cc94ef17d95d008349637f42ca6a6dd8304ff5d8b extends \Twig\Template
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
        echo "
  <div class=\"products__product store__product\" data-id=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "id", [], "any", false, false, false, 6), "html", null, true);
        echo "\">
    <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "getPageUrl", [0 => "catalog"], "method", false, false, false, 7), "html", null, true);
        echo "\" aria-label=\"Read more about ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "name", [], "any", false, false, false, 7), "html", null, true);
        echo "\">
        ";
        // line 8
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, false, 8))) {
            // line 9
            echo "        <div class=\"products__photo newproduct__photo\">
        <span class=\"icon-eye products__icon\"></span>
            <img src=\"";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, false, 11), "getThumb", [0 => 300, 1 => 300, 2 => ["quality" => 80]], "method", false, false, false, 11), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, false, 11), "description", [], "any", false, false, false, 11), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, false, 11), "title", [], "any", false, false, false, 11), "html", null, true);
            echo "\">
        ";
        } else {
            // line 13
            echo "            <img src=\"";
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/no-image.png");
            echo "\">
        ";
        }
        // line 15
        echo "        </div>
    </a>

        <span class=\"products__name\" data-id=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "external_id", [], "any", false, false, false, 18), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "name", [], "any", false, false, false, 18), "html", null, true);
        echo "</span>

            <span class=\"products__price ";
        // line 20
        echo (((twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "old_price_value", [], "any", false, false, false, 20) > 0)) ? ("text-danger") : (""));
        echo "\">
                ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "price", [], "any", false, false, false, 21), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "currency", [], "any", false, false, false, 21), "html", null, true);
        echo "
            </span>
            <!-- ";
        // line 23
        if ((twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "old_price_value", [], "any", false, false, false, 23) > 0)) {
            // line 24
            echo "            <span class=\"products__price text-muted pr-2\">
                <s>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "old_price", [], "any", false, false, false, 25), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "currency", [], "any", false, false, false, 25), "html", null, true);
            echo "</s>
            </span>
            ";
        }
        // line 27
        echo " -->
            ";
        // line 28
        if (($context["cart_is_available"] ?? null)) {
            // line 29
            echo "            <form class=\"mb-0\">
                <input type=\"hidden\" name=\"offer_id\" value=\"";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "id", [], "any", false, false, false, 30), "html", null, true);
            echo "\">
                <input type=\"hidden\" name=\"quantity\" value=\"1\">
                ";
            // line 32
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['btnAddClasses'] = "btn-sm"            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("form/button-add-to-cart/button-add-to-cart"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 33
            echo "            </form>
            ";
        }
        // line 35
        echo "
  </div>";
    }

    public function getTemplateName()
    {
        return "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/product/product-card/product-card.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 35,  130 => 33,  125 => 32,  120 => 30,  117 => 29,  115 => 28,  112 => 27,  104 => 25,  101 => 24,  99 => 23,  92 => 21,  88 => 20,  81 => 18,  76 => 15,  70 => 13,  61 => 11,  57 => 9,  55 => 8,  49 => 7,  45 => 6,  42 => 5,  40 => 4,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var obProduct \\Lovata\\Shopaholic\\Classes\\Item\\ProductItem #}
{# @var obOffer \\Lovata\\Shopaholic\\Classes\\Item\\OfferItem #}

{% set obOffer = obProduct.offer.first() %}

  <div class=\"products__product store__product\" data-id=\"{{ obProduct.id }}\">
    <a href=\"{{ obProduct.getPageUrl('catalog') }}\" aria-label=\"Read more about {{ obProduct.name }}\">
        {% if obProduct.preview_image is not empty %}
        <div class=\"products__photo newproduct__photo\">
        <span class=\"icon-eye products__icon\"></span>
            <img src=\"{{ obProduct.preview_image.getThumb(300, 300, {quality: 80}) }}\" alt=\"{{ obProduct.preview_image.description }}\" title=\"{{ obProduct.preview_image.title }}\">
        {% else %}
            <img src=\"{{ 'assets/images/no-image.png'|theme }}\">
        {% endif %}
        </div>
    </a>

        <span class=\"products__name\" data-id=\"{{obProduct.external_id}}\">{{ obProduct.name }}</span>

            <span class=\"products__price {{ obOffer.old_price_value > 0 ? 'text-danger' : '' }}\">
                {{ obOffer.price }}  {{ obOffer.currency }}
            </span>
            <!-- {% if obOffer.old_price_value > 0 %}
            <span class=\"products__price text-muted pr-2\">
                <s>{{ obOffer.old_price }} {{ obOffer.currency }}</s>
            </span>
            {% endif %} -->
            {% if cart_is_available %}
            <form class=\"mb-0\">
                <input type=\"hidden\" name=\"offer_id\" value=\"{{ obOffer.id }}\">
                <input type=\"hidden\" name=\"quantity\" value=\"1\">
                {% partial 'form/button-add-to-cart/button-add-to-cart' btnAddClasses='btn-sm' %}
            </form>
            {% endif %}

  </div>", "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/product/product-card/product-card.htm", "");
    }
}
