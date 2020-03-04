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
<section class=\"cart basket\">
<div class=\"container\">
<div class=\"basket__wrap\">
    ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, ($context["obCartPositionList"] ?? null), "isNotEmpty", [], "method", false, false, false, 10)) {
            // line 11
            echo "    <h3 class=\"cart__table-title basket__title-main\">Корзина</h3>
    <div class=\"cart__table-wrapper table-responsive mb-4\">
        <table class=\"cart__table table table-hover\">
            <thead class=\"cart__title\">
                <tr>
                    <th scope=\"col\"></th>
                    <th scope=\"col\">Продукт</th>
                    <th scope=\"col\">Цена</th>
                    <th scope=\"col\">Количество</th>
                    <th scope=\"col\">Итого</th>
                    <th scope=\"col\"></th>
                </tr>
            </thead>
            <tbody>
            ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["obCartPositionList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["obCartPosition"]) {
                // line 26
                echo "                ";
                $context["obOffer"] = twig_get_attribute($this->env, $this->source, $context["obCartPosition"], "offer", [], "any", false, false, false, 26);
                // line 27
                echo "                ";
                $context["obProduct"] = twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "product", [], "any", false, false, false, 27);
                // line 28
                echo "                <tr class=\"cart__item ";
                if ((twig_get_attribute($this->env, $this->source, $context["obCartPosition"], "quantity", [], "any", false, false, false, 28) > twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "quantity", [], "any", false, false, false, 28))) {
                    echo "bg-danger";
                }
                echo "\" data-position-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obCartPosition"], "id", [], "any", false, false, false, 28), "html", null, true);
                echo "\" data-offer-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "id", [], "any", false, false, false, 28), "html", null, true);
                echo "\">
                    <td class=\"cart__picture align-middle\">
                        <a href=\"";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "getPageUrl", [0 => "catalog"], "method", false, false, false, 30), "html", null, true);
                echo "\" class=\"cart__img-wrap d-block\" aria-label=\"Read more about ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "name", [], "any", false, false, false, 30), "html", null, true);
                echo "\">
                            ";
                // line 31
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, false, 31))) {
                    // line 32
                    echo "                                <img class=\"cart__img\" src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, false, 32), "getThumb", [0 => 120, 1 => 120, 2 => ["quality" => 80]], "method", false, false, false, 32), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, false, 32), "description", [], "any", false, false, false, 32), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, false, 32), "title", [], "any", false, false, false, 32), "html", null, true);
                    echo "\" loading=\"lazy\">
                            ";
                } else {
                    // line 34
                    echo "                                <img class=\"cart__img\" src=\"";
                    echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/no-image.png");
                    echo "\">
                            ";
                }
                // line 36
                echo "                        </a>
                    </td>
                    <td class=\"align-middle\">
                        <a class=\"cart__product-name basket__input basket__input-name\" href=\"";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "getPageUrl", [0 => "catalog"], "method", false, false, false, 39), "html", null, true);
                echo "\">
                            ";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "name", [], "any", false, false, false, 40), "html", null, true);
                echo "
                        </a>
                        <!-- <a href=\"";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "category", [], "any", false, false, false, 42), "getPageUrl", [0 => "catalog"], "method", false, false, false, 42), "html", null, true);
                echo "\" class=\"cart__category-product-column text-dark\">
                            ";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "category", [], "any", false, false, false, 43), "name", [], "any", false, false, false, 43), "html", null, true);
                echo "
                        </a> -->
                    </td>
                    <td class=\"cart__price align-middle\">
                        <div class=\"cart__price-bar d-flex flex-column\">
                            <span class=\"cart__current-price basket__input basket__input-price ";
                // line 48
                echo (((twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "old_price_value", [], "any", false, false, false, 48) > 0)) ? ("text-danger") : (""));
                echo " d-block mb-1\">
                                ";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "price", [], "any", false, false, false, 49), "html", null, true);
                echo "
                            </span>
                            <!-- ";
                // line 51
                if ((twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "old_price_value", [], "any", false, false, false, 51) > 0)) {
                    // line 52
                    echo "                            <span class=\"cart__old-price text-muted pr-2\">
                                <s>";
                    // line 53
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "old_price", [], "any", false, false, false, 53), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "currency", [], "any", false, false, false, 53), "html", null, true);
                    echo "</s>
                            </span>
                            ";
                }
                // line 55
                echo " -->
                        </div>
                    </td>
                    <td class=\"cart__qty align-middle\">
                        ";
                // line 59
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['btnChangeQtyValue'] = twig_get_attribute($this->env, $this->source, $context["obCartPosition"], "quantity", [], "any", false, false, false, 59)                ;
                $context['__cms_partial_params']['btnChangeQtyAjax'] = true                ;
                $context['__cms_partial_params']['btnMaxQtyValue'] = twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "quantity", [], "any", false, false, false, 59)                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("form/button-change-quantity/button-change-cart"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 60
                echo "                    </td>
                    <td class=\"cart__total-price align-middle\">
                        <span class=\"cart__total-price-figures cart__position-price-value\">";
                // line 62
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obCartPosition"], "price", [], "any", false, false, false, 62), "html", null, true);
                echo "</span>
                        <span class=\"text-muted cart__position-old-price-figures ";
                // line 63
                if ((twig_get_attribute($this->env, $this->source, $context["obCartPosition"], "discount_price_value", [], "any", false, false, false, 63) == 0)) {
                    echo "d-none";
                }
                echo "\">
                            <span class=\"cart__position-old-price-value\">";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obCartPosition"], "old_price", [], "any", false, false, false, 64), "html", null, true);
                echo "</span> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obCartPosition"], "currency", [], "any", false, false, false, 64), "html", null, true);
                echo "
                        </span>
                    </td>
                    <td class=\"cart__delete-position align-middle\">
                        <button class=\"btn btn-outline-secondary btn_bg-white cart__delete-btn\" aria-label=\"Delete\" data-id=\"";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "id", [], "any", false, false, false, 68), "html", null, true);
                echo "\">
                            <img src=\"";
                // line 69
                echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/basketPage/bin.svg");
                echo "\" alt=\"#\" width=\"18\">
                        </button>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obCartPosition'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "
            </tbody>
        </table>
    </div>
    <div class=\"cart__total basket__total-wrap\">
        <h3 class=\"basket__total-title\">Итоги заказа</h3>
        <div class=\"cart__total-position basket__info\">
            <span class=\"cart__total-position-title col-6 col-lg-4 font-weight-bold\">Промежуточный итог:</span>
            <span class=\"cart__total-position-old-price col-3 col-lg-2 text-right text-muted\">
                <span class=\"cart__total-position-old-price-value ";
            // line 83
            if ((twig_get_attribute($this->env, $this->source, ($context["obCartPositionList"] ?? null), "getDiscountTotalPriceValue", [], "method", false, false, false, 83) == 0)) {
                echo "d-none";
            }
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obCartPositionList"] ?? null), "getOldTotalPrice", [], "method", false, false, false, 83), "html", null, true);
            echo "</span>
                <span class=\"cart__total-position-old-price-currency ";
            // line 84
            if ((twig_get_attribute($this->env, $this->source, ($context["obCartPositionList"] ?? null), "getDiscountTotalPriceValue", [], "method", false, false, false, 84) == 0)) {
                echo "d-none";
            }
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "getCurrency", [], "method", false, false, false, 84), "html", null, true);
            echo "</span>
            </span>
            <span class=\"cart__total-position-current-price col-3 col-lg-2 text-right\">
                <span class=\"cart__total-position-price-value basket__total-resident\">";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obCartPositionList"] ?? null), "getTotalPrice", [], "method", false, false, false, 87), "html", null, true);
            echo "</span>
            </span>
        </div>
        <div class=\"cart__total-shipping basket__info\">
            <span class=\"cart__total-shipping-title col-6 col-lg-4 font-weight-bold\">Доставка:</span>
            <span class=\"cart__total-shipping-old-price col-3 col-lg-2 text-right text-muted\">
                <span class=\"cart__total-shipping-old-price-value ";
            // line 93
            if ((twig_get_attribute($this->env, $this->source, ($context["obActiveShippingType"] ?? null), "discount_price_value", [], "any", false, false, false, 93) == 0)) {
                echo "d-none";
            }
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obActiveShippingType"] ?? null), "old_price", [], "any", false, false, false, 93), "html", null, true);
            echo "</span>
                <span class=\"cart__total-shipping-old-price-currency ";
            // line 94
            if ((twig_get_attribute($this->env, $this->source, ($context["obActiveShippingType"] ?? null), "discount_price_value", [], "any", false, false, false, 94) == 0)) {
                echo "d-none";
            }
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "getCurrency", [], "method", false, false, false, 94), "html", null, true);
            echo "</span>
            </span>
            <span class=\"cart__total-shipping-current-price basket__radios\">
                <span class=\"cart__total-shipping-price-value basket__delivery\">";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obActiveShippingType"] ?? null), "price", [], "any", false, false, false, 97), "html", null, true);
            echo "</span>
      
            </span>
        </div>
        <div class=\"cart__total-price basket__info\">
            <span class=\"cart__total-price-title col-6 col-lg-4 font-weight-bold\">Общая стоимость:</span>
            <span class=\"cart__total-price-old-price col-3 col-lg-2 text-right text-muted\">
                <span class=\"cart__total-price-old-price-value ";
            // line 104
            if ((twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "getDiscountTotalPriceValue", [], "method", false, false, false, 104) == 0)) {
                echo "d-none";
            }
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "getOldTotalPrice", [], "method", false, false, false, 104), "html", null, true);
            echo "</span>
                <span class=\"cart__total-price-old-price-currency ";
            // line 105
            if ((twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "getDiscountTotalPriceValue", [], "method", false, false, false, 105) == 0)) {
                echo "d-none";
            }
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "getCurrency", [], "method", false, false, false, 105), "html", null, true);
            echo "</span>
            </span>
            <span class=\"cart__total-price-current-price col-3 col-lg-2 text-right\">
                <span class=\"cart__total-price-price-value basket__total-order\">";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "getTotalPrice", [], "method", false, false, false, 108), "html", null, true);
            echo "</span>
                <!-- <span class=\"cart__total-price-price-currency\">";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "getCurrency", [], "method", false, false, false, 109), "html", null, true);
            echo "</span> -->
            </span>
        </div>
        <button class=\"basket__btn-pay\">перейти к оплате</button>
    </div>
    ";
        }
        // line 115
        echo "
    <!-- <div class=\"basket__btns-main cart__table\">
                    <a href=\"/store\" class=\"basket__continue\">продолжить покупки</a>
                    <button type=\"button\" class=\"basket__clear cart__delete-btn\">очистить корзину</button>
                  </div> -->

    <div class=\"basket__none cart__empty ";
        // line 121
        if (twig_get_attribute($this->env, $this->source, ($context["obCartPositionList"] ?? null), "isNotEmpty", [], "method", false, false, false, 121)) {
            echo "d-none";
        }
        echo "\">
              <div>Корзина пуста</div>
              <a href=\"/store\" class=\"basket__makeshop\">сделать покупки</a>
            </div>
</div>
</div>
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
        return array (  311 => 121,  303 => 115,  294 => 109,  290 => 108,  280 => 105,  272 => 104,  262 => 97,  252 => 94,  244 => 93,  235 => 87,  225 => 84,  217 => 83,  206 => 74,  195 => 69,  191 => 68,  182 => 64,  176 => 63,  172 => 62,  168 => 60,  161 => 59,  155 => 55,  147 => 53,  144 => 52,  142 => 51,  137 => 49,  133 => 48,  125 => 43,  121 => 42,  116 => 40,  112 => 39,  107 => 36,  101 => 34,  91 => 32,  89 => 31,  83 => 30,  71 => 28,  68 => 27,  65 => 26,  61 => 25,  45 => 11,  43 => 10,  37 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var obCartPositionList \\Lovata\\OrdersShopaholic\\Classes\\Collection\\CartPositionCollection #}
{# @var obCartPosition \\Lovata\\OrdersShopaholic\\Classes\\Item\\CartPositionItem #}
{# @var obActiveShippingType \\Lovata\\OrdersShopaholic\\Classes\\Item\\ShippingTypeItem #}
{# @var obOffer \\Lovata\\Shopaholic\\Classes\\Item\\OfferItem #}
{# @var obProduct \\Lovata\\Shopaholic\\Classes\\Item\\ProductItem #}

<section class=\"cart basket\">
<div class=\"container\">
<div class=\"basket__wrap\">
    {% if obCartPositionList.isNotEmpty() %}
    <h3 class=\"cart__table-title basket__title-main\">Корзина</h3>
    <div class=\"cart__table-wrapper table-responsive mb-4\">
        <table class=\"cart__table table table-hover\">
            <thead class=\"cart__title\">
                <tr>
                    <th scope=\"col\"></th>
                    <th scope=\"col\">Продукт</th>
                    <th scope=\"col\">Цена</th>
                    <th scope=\"col\">Количество</th>
                    <th scope=\"col\">Итого</th>
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
                                <img class=\"cart__img\" src=\"{{ obProduct.preview_image.getThumb(120, 120, {quality: 80}) }}\" alt=\"{{ obProduct.preview_image.description }}\" title=\"{{ obProduct.preview_image.title }}\" loading=\"lazy\">
                            {% else %}
                                <img class=\"cart__img\" src=\"{{ 'assets/images/no-image.png'|theme }}\">
                            {% endif %}
                        </a>
                    </td>
                    <td class=\"align-middle\">
                        <a class=\"cart__product-name basket__input basket__input-name\" href=\"{{ obProduct.getPageUrl('catalog') }}\">
                            {{ obProduct.name }}
                        </a>
                        <!-- <a href=\"{{ obProduct.category.getPageUrl('catalog') }}\" class=\"cart__category-product-column text-dark\">
                            {{ obProduct.category.name }}
                        </a> -->
                    </td>
                    <td class=\"cart__price align-middle\">
                        <div class=\"cart__price-bar d-flex flex-column\">
                            <span class=\"cart__current-price basket__input basket__input-price {{ obOffer.old_price_value > 0 ? 'text-danger' : '' }} d-block mb-1\">
                                {{ obOffer.price }}
                            </span>
                            <!-- {% if obOffer.old_price_value > 0 %}
                            <span class=\"cart__old-price text-muted pr-2\">
                                <s>{{ obOffer.old_price }} {{ obOffer.currency }}</s>
                            </span>
                            {% endif %} -->
                        </div>
                    </td>
                    <td class=\"cart__qty align-middle\">
                        {% partial 'form/button-change-quantity/button-change-cart' btnChangeQtyValue=obCartPosition.quantity btnChangeQtyAjax=true btnMaxQtyValue=obOffer.quantity %}
                    </td>
                    <td class=\"cart__total-price align-middle\">
                        <span class=\"cart__total-price-figures cart__position-price-value\">{{ obCartPosition.price }}</span>
                        <span class=\"text-muted cart__position-old-price-figures {% if obCartPosition.discount_price_value == 0 %}d-none{% endif %}\">
                            <span class=\"cart__position-old-price-value\">{{ obCartPosition.old_price }}</span> {{ obCartPosition.currency }}
                        </span>
                    </td>
                    <td class=\"cart__delete-position align-middle\">
                        <button class=\"btn btn-outline-secondary btn_bg-white cart__delete-btn\" aria-label=\"Delete\" data-id=\"{{ obOffer.id }}\">
                            <img src=\"{{ 'assets/images/basketPage/bin.svg'|theme }}\" alt=\"#\" width=\"18\">
                        </button>
                    </td>
                </tr>
            {% endfor %}

            </tbody>
        </table>
    </div>
    <div class=\"cart__total basket__total-wrap\">
        <h3 class=\"basket__total-title\">Итоги заказа</h3>
        <div class=\"cart__total-position basket__info\">
            <span class=\"cart__total-position-title col-6 col-lg-4 font-weight-bold\">Промежуточный итог:</span>
            <span class=\"cart__total-position-old-price col-3 col-lg-2 text-right text-muted\">
                <span class=\"cart__total-position-old-price-value {% if obCartPositionList.getDiscountTotalPriceValue() == 0 %}d-none{% endif %}\">{{ obCartPositionList.getOldTotalPrice() }}</span>
                <span class=\"cart__total-position-old-price-currency {% if obCartPositionList.getDiscountTotalPriceValue() == 0 %}d-none{% endif %}\">{{ Cart.getCurrency() }}</span>
            </span>
            <span class=\"cart__total-position-current-price col-3 col-lg-2 text-right\">
                <span class=\"cart__total-position-price-value basket__total-resident\">{{ obCartPositionList.getTotalPrice() }}</span>
            </span>
        </div>
        <div class=\"cart__total-shipping basket__info\">
            <span class=\"cart__total-shipping-title col-6 col-lg-4 font-weight-bold\">Доставка:</span>
            <span class=\"cart__total-shipping-old-price col-3 col-lg-2 text-right text-muted\">
                <span class=\"cart__total-shipping-old-price-value {% if obActiveShippingType.discount_price_value == 0 %}d-none{% endif %}\">{{ obActiveShippingType.old_price }}</span>
                <span class=\"cart__total-shipping-old-price-currency {% if obActiveShippingType.discount_price_value == 0 %}d-none{% endif %}\">{{ Cart.getCurrency() }}</span>
            </span>
            <span class=\"cart__total-shipping-current-price basket__radios\">
                <span class=\"cart__total-shipping-price-value basket__delivery\">{{ obActiveShippingType.price }}</span>
      
            </span>
        </div>
        <div class=\"cart__total-price basket__info\">
            <span class=\"cart__total-price-title col-6 col-lg-4 font-weight-bold\">Общая стоимость:</span>
            <span class=\"cart__total-price-old-price col-3 col-lg-2 text-right text-muted\">
                <span class=\"cart__total-price-old-price-value {% if Cart.getDiscountTotalPriceValue() == 0 %}d-none{% endif %}\">{{ Cart.getOldTotalPrice() }}</span>
                <span class=\"cart__total-price-old-price-currency {% if Cart.getDiscountTotalPriceValue() == 0 %}d-none{% endif %}\">{{ Cart.getCurrency() }}</span>
            </span>
            <span class=\"cart__total-price-current-price col-3 col-lg-2 text-right\">
                <span class=\"cart__total-price-price-value basket__total-order\">{{ Cart.getTotalPrice() }}</span>
                <!-- <span class=\"cart__total-price-price-currency\">{{ Cart.getCurrency() }}</span> -->
            </span>
        </div>
        <button class=\"basket__btn-pay\">перейти к оплате</button>
    </div>
    {% endif %}

    <!-- <div class=\"basket__btns-main cart__table\">
                    <a href=\"/store\" class=\"basket__continue\">продолжить покупки</a>
                    <button type=\"button\" class=\"basket__clear cart__delete-btn\">очистить корзину</button>
                  </div> -->

    <div class=\"basket__none cart__empty {% if obCartPositionList.isNotEmpty() %}d-none{% endif %}\">
              <div>Корзина пуста</div>
              <a href=\"/store\" class=\"basket__makeshop\">сделать покупки</a>
            </div>
</div>
</div>
</section>", "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/product/cart-position-list/cart-position-list.htm", "");
    }
}
