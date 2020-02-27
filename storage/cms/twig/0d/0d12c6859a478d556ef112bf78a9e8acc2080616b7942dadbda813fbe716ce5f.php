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

/* D:\open_server_5_3_5_basic_premium_ultimate\OSPanel\domains\october/themes/lovata-bootstrap-shopaholic/partials/product/cart-position-list/cart-position-list.htm */
class __TwigTemplate_a583a85a5f2de90c068369218d76dea8bf7bdd450bf1764399fce538eb95090f extends \Twig\Template
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
        // line 6
        echo "
<section class=\"cart\">
    ";
        // line 8
        if (twig_get_attribute($this->env, $this->source, ($context["obCartPositionList"] ?? null), "isNotEmpty", [], "method", false, false, false, 8)) {
            // line 9
            echo "    <h2 class=\"cart__table-title mt-4 mb-4 text-center\">Your cart</h2>
    <div class=\"cart__table-wrapper table-responsive mb-4\">
        <table class=\"cart__table table table-hover\">
            <thead>
                <tr>
                    <th scope=\"col\"></th>
                    <th scope=\"col\">Product</th>
                    <th scope=\"col\">Price</th>
                    <th scope=\"col\">QTY</th>
                    <th scope=\"col\">Amount</th>
                    <th scope=\"col\"></th>
                </tr>
            </thead>
            <tbody>
            ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["obCartPositionList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["obCartPosition"]) {
                // line 24
                echo "                ";
                $context["obOffer"] = twig_get_attribute($this->env, $this->source, $context["obCartPosition"], "offer", [], "any", false, false, false, 24);
                // line 25
                echo "                ";
                $context["obProduct"] = twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "product", [], "any", false, false, false, 25);
                // line 26
                echo "                <tr class=\"cart__item ";
                if ((twig_get_attribute($this->env, $this->source, $context["obCartPosition"], "quantity", [], "any", false, false, false, 26) > twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "quantity", [], "any", false, false, false, 26))) {
                    echo "bg-danger";
                }
                echo "\" data-position-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obCartPosition"], "id", [], "any", false, false, false, 26), "html", null, true);
                echo "\" data-offer-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "id", [], "any", false, false, false, 26), "html", null, true);
                echo "\">
                    <td class=\"cart__picture align-middle\">
                        <a href=\"";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "getPageUrl", [0 => "catalog"], "method", false, false, false, 28), "html", null, true);
                echo "\" class=\"cart__img-wrap d-block\" aria-label=\"Read more about ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "name", [], "any", false, false, false, 28), "html", null, true);
                echo "\">
                            ";
                // line 29
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, false, 29))) {
                    // line 30
                    echo "                                <img class=\"cart__img\" src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, false, 30), "getThumb", [0 => 400, 1 => 400, 2 => ["quality" => 80]], "method", false, false, false, 30), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, false, 30), "description", [], "any", false, false, false, 30), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, false, 30), "title", [], "any", false, false, false, 30), "html", null, true);
                    echo "\" loading=\"lazy\">
                            ";
                } else {
                    // line 32
                    echo "                                <img class=\"cart__img\" src=\"";
                    echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/no-image.png");
                    echo "\">
                            ";
                }
                // line 34
                echo "                        </a>
                    </td>
                    <td class=\"align-middle\">
                        <a class=\"cart__product-name font-weight-bold d-block mb-2\" href=\"";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "getPageUrl", [0 => "catalog"], "method", false, false, false, 37), "html", null, true);
                echo "\">
                            ";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "name", [], "any", false, false, false, 38), "html", null, true);
                echo "
                        </a>
                        <a href=\"";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "category", [], "any", false, false, false, 40), "getPageUrl", [0 => "catalog"], "method", false, false, false, 40), "html", null, true);
                echo "\" class=\"cart__category-product-column text-dark\">
                            ";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "category", [], "any", false, false, false, 41), "name", [], "any", false, false, false, 41), "html", null, true);
                echo "
                        </a>
                    </td>
                    <td class=\"cart__price align-middle\">
                        <div class=\"cart__price-bar d-flex flex-column\">
                            <span class=\"cart__current-price pr-2 font-weight-bold ";
                // line 46
                echo (((twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "old_price_value", [], "any", false, false, false, 46) > 0)) ? ("text-danger") : (""));
                echo " d-block mb-1\">
                                ";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "price", [], "any", false, false, false, 47), "html", null, true);
                echo "  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "currency", [], "any", false, false, false, 47), "html", null, true);
                echo "
                            </span>
                            ";
                // line 49
                if ((twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "old_price_value", [], "any", false, false, false, 49) > 0)) {
                    // line 50
                    echo "                            <span class=\"cart__old-price text-muted pr-2\">
                                <s>";
                    // line 51
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "old_price", [], "any", false, false, false, 51), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "currency", [], "any", false, false, false, 51), "html", null, true);
                    echo "</s>
                            </span>
                            ";
                }
                // line 54
                echo "                        </div>
                    </td>
                    <td class=\"cart__qty align-middle\">
                        ";
                // line 57
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['btnChangeQtyValue'] = twig_get_attribute($this->env, $this->source, $context["obCartPosition"], "quantity", [], "any", false, false, false, 57)                ;
                $context['__cms_partial_params']['btnChangeQtyAjax'] = true                ;
                $context['__cms_partial_params']['btnMaxQtyValue'] = twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "quantity", [], "any", false, false, false, 57)                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("form/button-change-quantity/button-change-quantity"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 58
                echo "                    </td>
                    <td class=\"cart__total-price align-middle\">
                        <span class=\"cart__total-price-figures cart__position-price-value\">";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obCartPosition"], "price", [], "any", false, false, false, 60), "html", null, true);
                echo "</span> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obCartPosition"], "currency", [], "any", false, false, false, 60), "html", null, true);
                echo "
                        <span class=\"text-muted cart__position-old-price-figures ";
                // line 61
                if ((twig_get_attribute($this->env, $this->source, $context["obCartPosition"], "discount_price_value", [], "any", false, false, false, 61) == 0)) {
                    echo "d-none";
                }
                echo "\">
                            <span class=\"cart__position-old-price-value\">";
                // line 62
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obCartPosition"], "old_price", [], "any", false, false, false, 62), "html", null, true);
                echo "</span> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obCartPosition"], "currency", [], "any", false, false, false, 62), "html", null, true);
                echo "
                        </span>
                    </td>
                    <td class=\"cart__delete-position align-middle\">
                        <button class=\"btn btn-outline-secondary btn_bg-white cart__delete-btn\" aria-label=\"Delete\" data-id=\"";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "id", [], "any", false, false, false, 66), "html", null, true);
                echo "\">
                            <i class=\"fa fa-times\"></i>
                        </button>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obCartPosition'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "            </tbody>
        </table>
    </div>
    <div class=\"cart__total mb-5\">
        <div class=\"cart__total-position row mb-3\">
            <span class=\"cart__total-position-title col-6 col-lg-4 font-weight-bold\">Position price:</span>
            <span class=\"cart__total-position-old-price col-3 col-lg-2 text-right text-muted\">
                <span class=\"cart__total-position-old-price-value ";
            // line 79
            if ((twig_get_attribute($this->env, $this->source, ($context["obCartPositionList"] ?? null), "getDiscountTotalPriceValue", [], "method", false, false, false, 79) == 0)) {
                echo "d-none";
            }
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obCartPositionList"] ?? null), "getOldTotalPrice", [], "method", false, false, false, 79), "html", null, true);
            echo "</span>
                <span class=\"cart__total-position-old-price-currency ";
            // line 80
            if ((twig_get_attribute($this->env, $this->source, ($context["obCartPositionList"] ?? null), "getDiscountTotalPriceValue", [], "method", false, false, false, 80) == 0)) {
                echo "d-none";
            }
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "getCurrency", [], "method", false, false, false, 80), "html", null, true);
            echo "</span>
            </span>
            <span class=\"cart__total-position-current-price col-3 col-lg-2 text-right\">
                <span class=\"cart__total-position-price-value\">";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obCartPositionList"] ?? null), "getTotalPrice", [], "method", false, false, false, 83), "html", null, true);
            echo "</span>
                <span class=\"cart__total-position-price-currency\">";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "getCurrency", [], "method", false, false, false, 84), "html", null, true);
            echo "</span>
            </span>
        </div>
        <div class=\"cart__total-shipping row mb-3\">
            <span class=\"cart__total-shipping-title col-6 col-lg-4 font-weight-bold\">Shipping price:</span>
            <span class=\"cart__total-shipping-old-price col-3 col-lg-2 text-right text-muted\">
                <span class=\"cart__total-shipping-old-price-value ";
            // line 90
            if ((twig_get_attribute($this->env, $this->source, ($context["obActiveShippingType"] ?? null), "discount_price_value", [], "any", false, false, false, 90) == 0)) {
                echo "d-none";
            }
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obActiveShippingType"] ?? null), "old_price", [], "any", false, false, false, 90), "html", null, true);
            echo "</span>
                <span class=\"cart__total-shipping-old-price-currency ";
            // line 91
            if ((twig_get_attribute($this->env, $this->source, ($context["obActiveShippingType"] ?? null), "discount_price_value", [], "any", false, false, false, 91) == 0)) {
                echo "d-none";
            }
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "getCurrency", [], "method", false, false, false, 91), "html", null, true);
            echo "</span>
            </span>
            <span class=\"cart__total-shipping-current-price col-3 col-lg-2 text-right\">
                <span class=\"cart__total-shipping-price-value\">";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obActiveShippingType"] ?? null), "price", [], "any", false, false, false, 94), "html", null, true);
            echo "</span>
                <span class=\"cart__total-shipping-price-currency\">";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "getCurrency", [], "method", false, false, false, 95), "html", null, true);
            echo "</span>
            </span>
        </div>
        <div class=\"cart__total-price row mb-3 pt-3\">
            <span class=\"cart__total-price-title col-6 col-lg-4 font-weight-bold\">Total price:</span>
            <span class=\"cart__total-price-old-price col-3 col-lg-2 text-right text-muted\">
                <span class=\"cart__total-price-old-price-value ";
            // line 101
            if ((twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "getDiscountTotalPriceValue", [], "method", false, false, false, 101) == 0)) {
                echo "d-none";
            }
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "getOldTotalPrice", [], "method", false, false, false, 101), "html", null, true);
            echo "</span>
                <span class=\"cart__total-price-old-price-currency ";
            // line 102
            if ((twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "getDiscountTotalPriceValue", [], "method", false, false, false, 102) == 0)) {
                echo "d-none";
            }
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "getCurrency", [], "method", false, false, false, 102), "html", null, true);
            echo "</span>
            </span>
            <span class=\"cart__total-price-current-price col-3 col-lg-2 text-right\">
                <span class=\"cart__total-price-price-value\">";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "getTotalPrice", [], "method", false, false, false, 105), "html", null, true);
            echo "</span>
                <span class=\"cart__total-price-price-currency\">";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "getCurrency", [], "method", false, false, false, 106), "html", null, true);
            echo "</span>
            </span>
        </div>
    </div>
    ";
        }
        // line 111
        echo "    <h2 class=\"cart__empty container mt-4 mb-4 text-center ";
        if (twig_get_attribute($this->env, $this->source, ($context["obCartPositionList"] ?? null), "isNotEmpty", [], "method", false, false, false, 111)) {
            echo "d-none";
        }
        echo "\">Your cart is empty.</h2>
</section>";
    }

    public function getTemplateName()
    {
        return "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/product/cart-position-list/cart-position-list.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 111,  297 => 106,  293 => 105,  283 => 102,  275 => 101,  266 => 95,  262 => 94,  252 => 91,  244 => 90,  235 => 84,  231 => 83,  221 => 80,  213 => 79,  204 => 72,  192 => 66,  183 => 62,  177 => 61,  171 => 60,  167 => 58,  160 => 57,  155 => 54,  147 => 51,  144 => 50,  142 => 49,  135 => 47,  131 => 46,  123 => 41,  119 => 40,  114 => 38,  110 => 37,  105 => 34,  99 => 32,  89 => 30,  87 => 29,  81 => 28,  69 => 26,  66 => 25,  63 => 24,  59 => 23,  43 => 9,  41 => 8,  37 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var obCartPositionList \\Lovata\\OrdersShopaholic\\Classes\\Collection\\CartPositionCollection #}
{# @var obCartPosition \\Lovata\\OrdersShopaholic\\Classes\\Item\\CartPositionItem #}
{# @var obActiveShippingType \\Lovata\\OrdersShopaholic\\Classes\\Item\\ShippingTypeItem #}
{# @var obOffer \\Lovata\\Shopaholic\\Classes\\Item\\OfferItem #}
{# @var obProduct \\Lovata\\Shopaholic\\Classes\\Item\\ProductItem #}

<section class=\"cart\">
    {% if obCartPositionList.isNotEmpty() %}
    <h2 class=\"cart__table-title mt-4 mb-4 text-center\">Your cart</h2>
    <div class=\"cart__table-wrapper table-responsive mb-4\">
        <table class=\"cart__table table table-hover\">
            <thead>
                <tr>
                    <th scope=\"col\"></th>
                    <th scope=\"col\">Product</th>
                    <th scope=\"col\">Price</th>
                    <th scope=\"col\">QTY</th>
                    <th scope=\"col\">Amount</th>
                    <th scope=\"col\"></th>
                </tr>
            </thead>
            <tbody>
            {% for obCartPosition in obCartPositionList %}
                {% set obOffer = obCartPosition.offer %}
                {% set obProduct = obOffer.product %}
                <tr class=\"cart__item {% if obCartPosition.quantity > obOffer.quantity %}bg-danger{% endif %}\" data-position-id=\"{{ obCartPosition.id }}\" data-offer-id=\"{{ obOffer.id }}\">
                    <td class=\"cart__picture align-middle\">
                        <a href=\"{{ obProduct.getPageUrl('catalog') }}\" class=\"cart__img-wrap d-block\" aria-label=\"Read more about {{ obProduct.name }}\">
                            {% if obProduct.preview_image is not empty %}
                                <img class=\"cart__img\" src=\"{{ obProduct.preview_image.getThumb(400, 400, {quality: 80}) }}\" alt=\"{{ obProduct.preview_image.description }}\" title=\"{{ obProduct.preview_image.title }}\" loading=\"lazy\">
                            {% else %}
                                <img class=\"cart__img\" src=\"{{ 'assets/images/no-image.png'|theme }}\">
                            {% endif %}
                        </a>
                    </td>
                    <td class=\"align-middle\">
                        <a class=\"cart__product-name font-weight-bold d-block mb-2\" href=\"{{ obProduct.getPageUrl('catalog') }}\">
                            {{ obProduct.name }}
                        </a>
                        <a href=\"{{ obProduct.category.getPageUrl('catalog') }}\" class=\"cart__category-product-column text-dark\">
                            {{ obProduct.category.name }}
                        </a>
                    </td>
                    <td class=\"cart__price align-middle\">
                        <div class=\"cart__price-bar d-flex flex-column\">
                            <span class=\"cart__current-price pr-2 font-weight-bold {{ obOffer.old_price_value > 0 ? 'text-danger' : '' }} d-block mb-1\">
                                {{ obOffer.price }}  {{ obOffer.currency }}
                            </span>
                            {% if obOffer.old_price_value > 0 %}
                            <span class=\"cart__old-price text-muted pr-2\">
                                <s>{{ obOffer.old_price }} {{ obOffer.currency }}</s>
                            </span>
                            {% endif %}
                        </div>
                    </td>
                    <td class=\"cart__qty align-middle\">
                        {% partial 'form/button-change-quantity/button-change-quantity' btnChangeQtyValue=obCartPosition.quantity btnChangeQtyAjax=true btnMaxQtyValue=obOffer.quantity %}
                    </td>
                    <td class=\"cart__total-price align-middle\">
                        <span class=\"cart__total-price-figures cart__position-price-value\">{{ obCartPosition.price }}</span> {{ obCartPosition.currency }}
                        <span class=\"text-muted cart__position-old-price-figures {% if obCartPosition.discount_price_value == 0 %}d-none{% endif %}\">
                            <span class=\"cart__position-old-price-value\">{{ obCartPosition.old_price }}</span> {{ obCartPosition.currency }}
                        </span>
                    </td>
                    <td class=\"cart__delete-position align-middle\">
                        <button class=\"btn btn-outline-secondary btn_bg-white cart__delete-btn\" aria-label=\"Delete\" data-id=\"{{ obOffer.id }}\">
                            <i class=\"fa fa-times\"></i>
                        </button>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
    <div class=\"cart__total mb-5\">
        <div class=\"cart__total-position row mb-3\">
            <span class=\"cart__total-position-title col-6 col-lg-4 font-weight-bold\">Position price:</span>
            <span class=\"cart__total-position-old-price col-3 col-lg-2 text-right text-muted\">
                <span class=\"cart__total-position-old-price-value {% if obCartPositionList.getDiscountTotalPriceValue() == 0 %}d-none{% endif %}\">{{ obCartPositionList.getOldTotalPrice() }}</span>
                <span class=\"cart__total-position-old-price-currency {% if obCartPositionList.getDiscountTotalPriceValue() == 0 %}d-none{% endif %}\">{{ Cart.getCurrency() }}</span>
            </span>
            <span class=\"cart__total-position-current-price col-3 col-lg-2 text-right\">
                <span class=\"cart__total-position-price-value\">{{ obCartPositionList.getTotalPrice() }}</span>
                <span class=\"cart__total-position-price-currency\">{{ Cart.getCurrency() }}</span>
            </span>
        </div>
        <div class=\"cart__total-shipping row mb-3\">
            <span class=\"cart__total-shipping-title col-6 col-lg-4 font-weight-bold\">Shipping price:</span>
            <span class=\"cart__total-shipping-old-price col-3 col-lg-2 text-right text-muted\">
                <span class=\"cart__total-shipping-old-price-value {% if obActiveShippingType.discount_price_value == 0 %}d-none{% endif %}\">{{ obActiveShippingType.old_price }}</span>
                <span class=\"cart__total-shipping-old-price-currency {% if obActiveShippingType.discount_price_value == 0 %}d-none{% endif %}\">{{ Cart.getCurrency() }}</span>
            </span>
            <span class=\"cart__total-shipping-current-price col-3 col-lg-2 text-right\">
                <span class=\"cart__total-shipping-price-value\">{{ obActiveShippingType.price }}</span>
                <span class=\"cart__total-shipping-price-currency\">{{ Cart.getCurrency() }}</span>
            </span>
        </div>
        <div class=\"cart__total-price row mb-3 pt-3\">
            <span class=\"cart__total-price-title col-6 col-lg-4 font-weight-bold\">Total price:</span>
            <span class=\"cart__total-price-old-price col-3 col-lg-2 text-right text-muted\">
                <span class=\"cart__total-price-old-price-value {% if Cart.getDiscountTotalPriceValue() == 0 %}d-none{% endif %}\">{{ Cart.getOldTotalPrice() }}</span>
                <span class=\"cart__total-price-old-price-currency {% if Cart.getDiscountTotalPriceValue() == 0 %}d-none{% endif %}\">{{ Cart.getCurrency() }}</span>
            </span>
            <span class=\"cart__total-price-current-price col-3 col-lg-2 text-right\">
                <span class=\"cart__total-price-price-value\">{{ Cart.getTotalPrice() }}</span>
                <span class=\"cart__total-price-price-currency\">{{ Cart.getCurrency() }}</span>
            </span>
        </div>
    </div>
    {% endif %}
    <h2 class=\"cart__empty container mt-4 mb-4 text-center {% if obCartPositionList.isNotEmpty() %}d-none{% endif %}\">Your cart is empty.</h2>
</section>", "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/product/cart-position-list/cart-position-list.htm", "");
    }
}
