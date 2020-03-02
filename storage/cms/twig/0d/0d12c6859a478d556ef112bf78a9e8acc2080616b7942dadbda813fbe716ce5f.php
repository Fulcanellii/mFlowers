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
    <div class=\"cart__table-wrapper basket__table-wrap\">
        <div class=\"cart__table basket__table\">
            <div class=\"basket__titles\">
                <div class=\"basket__title-foto\"></div>
                <div class=\"basket__title-name\">название</div>
                <div class=\"basket__title\">цена</div>
                <div class=\"basket__title\">кол-во</div>
                <div class=\"basket__title\">итого</div>
                <div class=\"basket__title\"></div>
              </div>
            <div class=\"basket__products\">
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
                echo "                <div class=\"cart__item  basket__product ";
                if ((twig_get_attribute($this->env, $this->source, $context["obCartPosition"], "quantity", [], "any", false, false, false, 26) > twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "quantity", [], "any", false, false, false, 26))) {
                    echo "bg-danger";
                }
                echo "\" data-position-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obCartPosition"], "id", [], "any", false, false, false, 26), "html", null, true);
                echo "\" data-offer-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "id", [], "any", false, false, false, 26), "html", null, true);
                echo "\" >
                    <div class=\"cart__picture basket__foto\">
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
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, false, 30), "getThumb", [0 => 120, 1 => 120, 2 => ["quality" => 80]], "method", false, false, false, 30), "html", null, true);
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
                    </div>
                    <div class=\"align-middle\">
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
                    </div>
                    <div class=\"cart__price align-middle\">
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
                    </div>
                    <div class=\"cart__qty align-middle\">
                        ";
                // line 57
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['btnChangeQtyValue'] = twig_get_attribute($this->env, $this->source, $context["obCartPosition"], "quantity", [], "any", false, false, false, 57)                ;
                $context['__cms_partial_params']['btnChangeQtyAjax'] = true                ;
                $context['__cms_partial_params']['btnMaxQtyValue'] = twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "quantity", [], "any", false, false, false, 57)                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("form/button-change-quantity/button-change-quantity"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 58
                echo "                    </div>
                    <div class=\"cart__total-price align-middle\">
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
                    </div>
                    <div class=\"cart__delete-position align-middle\">
                        <button class=\"btn btn-outline-secondary btn_bg-white cart__delete-btn\" aria-label=\"Delete\" data-id=\"";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "id", [], "any", false, false, false, 66), "html", null, true);
                echo "\">
                            <i class=\"fa fa-times\"></i>
                        </button>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obCartPosition'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "    </div>
    </div>

    <div class=\"cart__table basket__btns-main\">
                    <a href=\"/store\" class=\"basket__continue\">продолжить покупки</a>
                    <button type=\"button\" class=\"basket__clear cart__delete-btn\">очистить корзину</button>
                  </div>

    <div class=\"cart__total basket__total-wrap\">
        <h3 class=\"basket__total-title\">Итоги заказа</h3>
        <div class=\"cart__total-position basket__info\">
            <span class=\"cart__total-position-title \">Промежуточный итог:</span>
            <span class=\"cart__total-position-old-price text-muted\">
                <span class=\"cart__total-position-old-price-value ";
            // line 85
            if ((twig_get_attribute($this->env, $this->source, ($context["obCartPositionList"] ?? null), "getDiscountTotalPriceValue", [], "method", false, false, false, 85) == 0)) {
                echo "d-none";
            }
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obCartPositionList"] ?? null), "getOldTotalPrice", [], "method", false, false, false, 85), "html", null, true);
            echo "</span>
                <span class=\"cart__total-position-old-price-currency ";
            // line 86
            if ((twig_get_attribute($this->env, $this->source, ($context["obCartPositionList"] ?? null), "getDiscountTotalPriceValue", [], "method", false, false, false, 86) == 0)) {
                echo "d-none";
            }
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "getCurrency", [], "method", false, false, false, 86), "html", null, true);
            echo "</span>
            </span>
            <span class=\"cart__total-position-current-price basket__total-resident \">
                <span class=\"cart__total-position-price-value\">";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obCartPositionList"] ?? null), "getTotalPrice", [], "method", false, false, false, 89), "html", null, true);
            echo "</span>
                <!-- <span class=\"cart__total-position-price-currency\">";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "getCurrency", [], "method", false, false, false, 90), "html", null, true);
            echo "</span> -->
            </span>
        </div>
        <div class=\"cart__total-shipping basket__info\">
            <span class=\"cart__total-shipping-title \">Shipping price:</span>
            <span class=\"cart__total-shipping-old-price col-3 col-lg-2 text-right text-muted\">
                <span class=\"cart__total-shipping-old-price-value ";
            // line 96
            if ((twig_get_attribute($this->env, $this->source, ($context["obActiveShippingType"] ?? null), "discount_price_value", [], "any", false, false, false, 96) == 0)) {
                echo "d-none";
            }
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obActiveShippingType"] ?? null), "old_price", [], "any", false, false, false, 96), "html", null, true);
            echo "</span>
                <span class=\"cart__total-shipping-old-price-currency ";
            // line 97
            if ((twig_get_attribute($this->env, $this->source, ($context["obActiveShippingType"] ?? null), "discount_price_value", [], "any", false, false, false, 97) == 0)) {
                echo "d-none";
            }
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "getCurrency", [], "method", false, false, false, 97), "html", null, true);
            echo "</span>
            </span>
            <span class=\"cart__total-shipping-current-price col-3 col-lg-2 text-right\">
                <span class=\"cart__total-shipping-price-value\">";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obActiveShippingType"] ?? null), "price", [], "any", false, false, false, 100), "html", null, true);
            echo "</span>
                <span class=\"cart__total-shipping-price-currency\">";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "getCurrency", [], "method", false, false, false, 101), "html", null, true);
            echo "</span>
            </span>
        </div>
        <div class=\"cart__total-price basket__info\">
            <span class=\"cart__total-price-title\">Общая стоимость:</span>
            <span class=\"cart__total-price-old-price text-muted\">
                <span class=\"cart__total-price-old-price-value ";
            // line 107
            if ((twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "getDiscountTotalPriceValue", [], "method", false, false, false, 107) == 0)) {
                echo "d-none";
            }
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "getOldTotalPrice", [], "method", false, false, false, 107), "html", null, true);
            echo "</span>
                <span class=\"cart__total-price-old-price-currency ";
            // line 108
            if ((twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "getDiscountTotalPriceValue", [], "method", false, false, false, 108) == 0)) {
                echo "d-none";
            }
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "getCurrency", [], "method", false, false, false, 108), "html", null, true);
            echo "</span>
            </span>
            <span class=\"cart__total-price-current-price basket__total-order\">
                <span class=\"cart__total-price-price-value\">";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "getTotalPrice", [], "method", false, false, false, 111), "html", null, true);
            echo "</span>
                <!-- <span class=\"cart__total-price-price-currency\">";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "getCurrency", [], "method", false, false, false, 112), "html", null, true);
            echo "</span> -->
            </span>
        </div>
    </div>
    ";
        }
        // line 117
        echo "
    <div class=\"basket__none\">
              <div class=\"cart__empty ";
        // line 119
        if (twig_get_attribute($this->env, $this->source, ($context["obCartPositionList"] ?? null), "isNotEmpty", [], "method", false, false, false, 119)) {
            echo "d-none";
        }
        echo "\" >Корзина пуста</div>
              <a href=\"/store\" class=\"cart__empty ";
        // line 120
        if (twig_get_attribute($this->env, $this->source, ($context["obCartPositionList"] ?? null), "isNotEmpty", [], "method", false, false, false, 120)) {
            echo "d-none";
        }
        echo " basket__makeshop\">сделать покупки</a>
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
        return array (  321 => 120,  315 => 119,  311 => 117,  303 => 112,  299 => 111,  289 => 108,  281 => 107,  272 => 101,  268 => 100,  258 => 97,  250 => 96,  241 => 90,  237 => 89,  227 => 86,  219 => 85,  204 => 72,  192 => 66,  183 => 62,  177 => 61,  171 => 60,  167 => 58,  160 => 57,  155 => 54,  147 => 51,  144 => 50,  142 => 49,  135 => 47,  131 => 46,  123 => 41,  119 => 40,  114 => 38,  110 => 37,  105 => 34,  99 => 32,  89 => 30,  87 => 29,  81 => 28,  69 => 26,  66 => 25,  63 => 24,  59 => 23,  45 => 11,  43 => 10,  37 => 6,);
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
    <div class=\"cart__table-wrapper basket__table-wrap\">
        <div class=\"cart__table basket__table\">
            <div class=\"basket__titles\">
                <div class=\"basket__title-foto\"></div>
                <div class=\"basket__title-name\">название</div>
                <div class=\"basket__title\">цена</div>
                <div class=\"basket__title\">кол-во</div>
                <div class=\"basket__title\">итого</div>
                <div class=\"basket__title\"></div>
              </div>
            <div class=\"basket__products\">
            {% for obCartPosition in obCartPositionList %}
                {% set obOffer = obCartPosition.offer %}
                {% set obProduct = obOffer.product %}
                <div class=\"cart__item  basket__product {% if obCartPosition.quantity > obOffer.quantity %}bg-danger{% endif %}\" data-position-id=\"{{ obCartPosition.id }}\" data-offer-id=\"{{ obOffer.id }}\" >
                    <div class=\"cart__picture basket__foto\">
                        <a href=\"{{ obProduct.getPageUrl('catalog') }}\" class=\"cart__img-wrap d-block\" aria-label=\"Read more about {{ obProduct.name }}\">
                            {% if obProduct.preview_image is not empty %}
                                <img class=\"cart__img\" src=\"{{ obProduct.preview_image.getThumb(120, 120, {quality: 80}) }}\" alt=\"{{ obProduct.preview_image.description }}\" title=\"{{ obProduct.preview_image.title }}\" loading=\"lazy\">
                            {% else %}
                                <img class=\"cart__img\" src=\"{{ 'assets/images/no-image.png'|theme }}\">
                            {% endif %}
                        </a>
                    </div>
                    <div class=\"align-middle\">
                        <a class=\"cart__product-name font-weight-bold d-block mb-2\" href=\"{{ obProduct.getPageUrl('catalog') }}\">
                            {{ obProduct.name }}
                        </a>
                        <a href=\"{{ obProduct.category.getPageUrl('catalog') }}\" class=\"cart__category-product-column text-dark\">
                            {{ obProduct.category.name }}
                        </a>
                    </div>
                    <div class=\"cart__price align-middle\">
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
                    </div>
                    <div class=\"cart__qty align-middle\">
                        {% partial 'form/button-change-quantity/button-change-quantity' btnChangeQtyValue=obCartPosition.quantity btnChangeQtyAjax=true btnMaxQtyValue=obOffer.quantity %}
                    </div>
                    <div class=\"cart__total-price align-middle\">
                        <span class=\"cart__total-price-figures cart__position-price-value\">{{ obCartPosition.price }}</span> {{ obCartPosition.currency }}
                        <span class=\"text-muted cart__position-old-price-figures {% if obCartPosition.discount_price_value == 0 %}d-none{% endif %}\">
                            <span class=\"cart__position-old-price-value\">{{ obCartPosition.old_price }}</span> {{ obCartPosition.currency }}
                        </span>
                    </div>
                    <div class=\"cart__delete-position align-middle\">
                        <button class=\"btn btn-outline-secondary btn_bg-white cart__delete-btn\" aria-label=\"Delete\" data-id=\"{{ obOffer.id }}\">
                            <i class=\"fa fa-times\"></i>
                        </button>
                    </div>
                </div>
            {% endfor %}
    </div>
    </div>

    <div class=\"cart__table basket__btns-main\">
                    <a href=\"/store\" class=\"basket__continue\">продолжить покупки</a>
                    <button type=\"button\" class=\"basket__clear cart__delete-btn\">очистить корзину</button>
                  </div>

    <div class=\"cart__total basket__total-wrap\">
        <h3 class=\"basket__total-title\">Итоги заказа</h3>
        <div class=\"cart__total-position basket__info\">
            <span class=\"cart__total-position-title \">Промежуточный итог:</span>
            <span class=\"cart__total-position-old-price text-muted\">
                <span class=\"cart__total-position-old-price-value {% if obCartPositionList.getDiscountTotalPriceValue() == 0 %}d-none{% endif %}\">{{ obCartPositionList.getOldTotalPrice() }}</span>
                <span class=\"cart__total-position-old-price-currency {% if obCartPositionList.getDiscountTotalPriceValue() == 0 %}d-none{% endif %}\">{{ Cart.getCurrency() }}</span>
            </span>
            <span class=\"cart__total-position-current-price basket__total-resident \">
                <span class=\"cart__total-position-price-value\">{{ obCartPositionList.getTotalPrice() }}</span>
                <!-- <span class=\"cart__total-position-price-currency\">{{ Cart.getCurrency() }}</span> -->
            </span>
        </div>
        <div class=\"cart__total-shipping basket__info\">
            <span class=\"cart__total-shipping-title \">Shipping price:</span>
            <span class=\"cart__total-shipping-old-price col-3 col-lg-2 text-right text-muted\">
                <span class=\"cart__total-shipping-old-price-value {% if obActiveShippingType.discount_price_value == 0 %}d-none{% endif %}\">{{ obActiveShippingType.old_price }}</span>
                <span class=\"cart__total-shipping-old-price-currency {% if obActiveShippingType.discount_price_value == 0 %}d-none{% endif %}\">{{ Cart.getCurrency() }}</span>
            </span>
            <span class=\"cart__total-shipping-current-price col-3 col-lg-2 text-right\">
                <span class=\"cart__total-shipping-price-value\">{{ obActiveShippingType.price }}</span>
                <span class=\"cart__total-shipping-price-currency\">{{ Cart.getCurrency() }}</span>
            </span>
        </div>
        <div class=\"cart__total-price basket__info\">
            <span class=\"cart__total-price-title\">Общая стоимость:</span>
            <span class=\"cart__total-price-old-price text-muted\">
                <span class=\"cart__total-price-old-price-value {% if Cart.getDiscountTotalPriceValue() == 0 %}d-none{% endif %}\">{{ Cart.getOldTotalPrice() }}</span>
                <span class=\"cart__total-price-old-price-currency {% if Cart.getDiscountTotalPriceValue() == 0 %}d-none{% endif %}\">{{ Cart.getCurrency() }}</span>
            </span>
            <span class=\"cart__total-price-current-price basket__total-order\">
                <span class=\"cart__total-price-price-value\">{{ Cart.getTotalPrice() }}</span>
                <!-- <span class=\"cart__total-price-price-currency\">{{ Cart.getCurrency() }}</span> -->
            </span>
        </div>
    </div>
    {% endif %}

    <div class=\"basket__none\">
              <div class=\"cart__empty {% if obCartPositionList.isNotEmpty() %}d-none{% endif %}\" >Корзина пуста</div>
              <a href=\"/store\" class=\"cart__empty {% if obCartPositionList.isNotEmpty() %}d-none{% endif %} basket__makeshop\">сделать покупки</a>
            </div>
</div>
</div>
</section>", "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/product/cart-position-list/cart-position-list.htm", "");
    }
}
