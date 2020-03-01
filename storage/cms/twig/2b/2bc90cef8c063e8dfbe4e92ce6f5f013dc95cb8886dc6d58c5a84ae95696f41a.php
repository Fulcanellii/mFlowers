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

/* D:\open_server_5_3_5_basic_premium_ultimate\OSPanel\domains\october/themes/lovata-bootstrap-shopaholic/partials/product/product-card-detailed/product-card-detailed.htm */
class __TwigTemplate_5f433b52bc00d36c110eba462adb075daa458c6f33339b3100aaa89c52e08610 extends \Twig\Template
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
        echo "<section class=\"container shadow p-3 mb-5 bg-white rounded product-page-detailed pb-4\">
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <div id=\"carouselExampleIndicators\" class=\"carousel product-detailed__carousel slide\" data-ride=\"carousel\">
                <ol class=\"carousel-indicators\">
                    ";
        // line 10
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "images", [], "any", false, false, false, 10))) {
            // line 11
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "images", [], "any", false, false, false, 11), "count", [], "method", false, false, false, 11));
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
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 12
                echo "                            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 12), "html", null, true);
                echo "\" class=\"";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 12)) {
                    echo " active ";
                }
                echo "\"></li>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "                    ";
        } else {
            // line 15
            echo "                        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
                    ";
        }
        // line 17
        echo "                </ol>
                <div class=\"carousel-inner mb-3 mb-lg-0 product-detailed__carousel-inner\">
                    ";
        // line 19
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "images", [], "any", false, false, false, 19))) {
            // line 20
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "images", [], "any", false, false, false, 20));
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
            foreach ($context['_seq'] as $context["_key"] => $context["obImage"]) {
                // line 21
                echo "                            <div class=\"carousel-item product-detailed__carousel-item ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 21)) {
                    echo " active ";
                }
                echo " h-100\">
                                <img class=\"d-block w-100 h-100 product-detailed__carousel-item-img\" src=\"";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obImage"], "path", [], "any", false, false, false, 22), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obImage"], "description", [], "any", false, false, false, 22), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obImage"], "title", [], "any", false, false, false, 22), "html", null, true);
                echo "\" loading=\"lazy\">
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obImage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "                    ";
        } else {
            // line 26
            echo "                        <div class=\"carousel-item product-detailed__carousel-item active h-100\">
                            <img class=\"d-block w-100 h-100 product-detailed__carousel-item-img\" src=\"";
            // line 27
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/no-image.png");
            echo "\">
                        </div>
                    ";
        }
        // line 30
        echo "                </div>
                <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Previous</span>
                </a>
                <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Next</span>
                </a>
            </div>
        </div>
        <div class=\"col-lg-6\">
            <h1>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "name", [], "any", false, false, false, 42), "html", null, true);
        echo "</h1>
            <div class=\"product-card__price-bar mb-3\">
                <span class=\"product-card__current-price pr-2 font-weight-bold text-danger\">
                    ";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "price", [], "any", false, false, false, 45), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "currency", [], "any", false, false, false, 45), "html", null, true);
        echo "
                </span>
                ";
        // line 47
        if ((twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "old_price_value", [], "any", false, false, false, 47) > 0)) {
            // line 48
            echo "                    <span class=\"product-card__old-price text-muted pr-2\">
                    <s>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "old_price", [], "any", false, false, false, 49), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "currency", [], "any", false, false, false, 49), "html", null, true);
            echo "</s>
                </span>
                ";
        }
        // line 52
        echo "            </div>
            <p class=\"product-detailed__description\">
                ";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_text", [], "any", false, false, false, 54), "html", null, true);
        echo "
            </p>
            ";
        // line 56
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "brand", [], "any", false, false, false, 56), "isNotEmpty", [], "method", false, false, false, 56)) {
            // line 57
            echo "            <p class=\"product-detailed__brand\">
                <span class=\"font-weight-bold\">
                    Brand:
                </span>
                <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "brand", [], "any", false, false, false, 61), "getPageUrl", [0 => "catalog"], "method", false, false, false, 61), "html", null, true);
            echo "\" class=\"product-detailed__category-link\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "brand", [], "any", false, false, false, 61), "name", [], "any", false, false, false, 61), "html", null, true);
            echo "</a>
            </p>
            ";
        }
        // line 64
        echo "            <p class=\"product-detailed__category\">
                <span class=\"font-weight-bold\">
                    Категория:
                </span>
                <a href=\"";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "category", [], "any", false, false, false, 68), "getPageUrl", [0 => "catalog"], "method", false, false, false, 68), "html", null, true);
        echo "\" class=\"product-detailed__category-link\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "category", [], "any", false, false, false, 68), "name", [], "any", false, false, false, 68), "html", null, true);
        echo "</a>
            </p>
            ";
        // line 70
        if (($context["cart_is_available"] ?? null)) {
            // line 71
            echo "                <form class=\"mb-0\">
                    <input type=\"hidden\" name=\"offer_id\" value=\"";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "id", [], "any", false, false, false, 72), "html", null, true);
            echo "\">
                    ";
            // line 73
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['btnChangeQtyValue'] = 1            ;
            $context['__cms_partial_params']['btnProductPage'] = true            ;
            $context['__cms_partial_params']['btnMaxQtyValue'] = twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "quantity", [], "any", false, false, false, 73)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("form/button-change-quantity/button-change-quantity"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 74
            echo "                    ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['btnAddClasses'] = "btn-lg"            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("form/button-add-to-cart/button-add-to-cart"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 75
            echo "                </form>
            ";
        }
        // line 77
        echo "        </div>
    </div>
</section>
<div class=\"container wysiwyg\">";
        // line 80
        echo twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "description", [], "any", false, false, false, 80);
        echo "</div>
      </div>
    </section>";
    }

    public function getTemplateName()
    {
        return "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/product/product-card-detailed/product-card-detailed.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 80,  265 => 77,  261 => 75,  255 => 74,  248 => 73,  244 => 72,  241 => 71,  239 => 70,  232 => 68,  226 => 64,  218 => 61,  212 => 57,  210 => 56,  205 => 54,  201 => 52,  193 => 49,  190 => 48,  188 => 47,  181 => 45,  175 => 42,  161 => 30,  155 => 27,  152 => 26,  149 => 25,  128 => 22,  121 => 21,  103 => 20,  101 => 19,  97 => 17,  93 => 15,  90 => 14,  69 => 12,  51 => 11,  49 => 10,  42 => 5,  40 => 4,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var obProduct \\Lovata\\Shopaholic\\Classes\\Item\\ProductItem #}
{# @var obOffer \\Lovata\\Shopaholic\\Classes\\Item\\OfferItem #}

{% set obOffer = obProduct.offer.first() %}
<section class=\"container shadow p-3 mb-5 bg-white rounded product-page-detailed pb-4\">
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <div id=\"carouselExampleIndicators\" class=\"carousel product-detailed__carousel slide\" data-ride=\"carousel\">
                <ol class=\"carousel-indicators\">
                    {% if obProduct.images is not empty %}
                        {% for i in obProduct.images.count() %}
                            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"{{ loop.index0 }}\" class=\"{% if loop.first %} active {% endif %}\"></li>
                        {% endfor %}
                    {% else %}
                        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
                    {% endif %}
                </ol>
                <div class=\"carousel-inner mb-3 mb-lg-0 product-detailed__carousel-inner\">
                    {% if obProduct.images is not empty %}
                        {% for obImage in obProduct.images %}
                            <div class=\"carousel-item product-detailed__carousel-item {% if loop.first %} active {% endif %} h-100\">
                                <img class=\"d-block w-100 h-100 product-detailed__carousel-item-img\" src=\"{{ obImage.path }}\" alt=\"{{ obImage.description }}\" title=\"{{ obImage.title }}\" loading=\"lazy\">
                            </div>
                        {% endfor %}
                    {% else %}
                        <div class=\"carousel-item product-detailed__carousel-item active h-100\">
                            <img class=\"d-block w-100 h-100 product-detailed__carousel-item-img\" src=\"{{ 'assets/images/no-image.png'|theme }}\">
                        </div>
                    {% endif %}
                </div>
                <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Previous</span>
                </a>
                <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Next</span>
                </a>
            </div>
        </div>
        <div class=\"col-lg-6\">
            <h1>{{ obProduct.name }}</h1>
            <div class=\"product-card__price-bar mb-3\">
                <span class=\"product-card__current-price pr-2 font-weight-bold text-danger\">
                    {{ obOffer.price }}  {{ obOffer.currency }}
                </span>
                {% if obOffer.old_price_value > 0 %}
                    <span class=\"product-card__old-price text-muted pr-2\">
                    <s>{{ obOffer.old_price }} {{ obOffer.currency }}</s>
                </span>
                {% endif %}
            </div>
            <p class=\"product-detailed__description\">
                {{ obProduct.preview_text }}
            </p>
            {% if obProduct.brand.isNotEmpty() %}
            <p class=\"product-detailed__brand\">
                <span class=\"font-weight-bold\">
                    Brand:
                </span>
                <a href=\"{{ obProduct.brand.getPageUrl('catalog') }}\" class=\"product-detailed__category-link\">{{ obProduct.brand.name }}</a>
            </p>
            {% endif %}
            <p class=\"product-detailed__category\">
                <span class=\"font-weight-bold\">
                    Категория:
                </span>
                <a href=\"{{ obProduct.category.getPageUrl('catalog') }}\" class=\"product-detailed__category-link\">{{ obProduct.category.name }}</a>
            </p>
            {% if cart_is_available %}
                <form class=\"mb-0\">
                    <input type=\"hidden\" name=\"offer_id\" value=\"{{ obOffer.id }}\">
                    {% partial 'form/button-change-quantity/button-change-quantity' btnChangeQtyValue=1 btnProductPage=true btnMaxQtyValue=obOffer.quantity %}
                    {% partial 'form/button-add-to-cart/button-add-to-cart' btnAddClasses='btn-lg' %}
                </form>
            {% endif %}
        </div>
    </div>
</section>
<div class=\"container wysiwyg\">{{ obProduct.description|raw }}</div>
      </div>
    </section>", "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/product/product-card-detailed/product-card-detailed.htm", "");
    }
}
