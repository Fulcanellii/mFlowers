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

/* D:\open_server_5_3_5_basic_premium_ultimate\OSPanel\domains\october/themes/lovata-bootstrap-shopaholic/partials/form/checkout-form/checkout-form.htm */
class __TwigTemplate_c893906d82982b4bdafd0cf15f8b050ec394ba929973ba007706513f4d16234b extends \Twig\Template
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
<section class=\"row form order\" id=\"order-page\" style=\"display: none;\">
<div class=\"container\">
<div class=\"order__wrap\">
    <h2 class=\"order__title\">Оформление заказа</h2>
    <form class=\"order__form _ajax_create_order\" novalidate>
        <div class=\"order__form-wrap\">
            <div class=\"order__group order__group-half\">
                <label for=\"order_name\" class=\"order__label\">Имя<span>*</span></label>
                <input type=\"text\" id=\"order_name\" name=\"name\" class=\"order__input form-control\" required>
              </div>
            <div class=\"order__group order__group-half\">
                <label for=\"order_lastname\" class=\"order__label\">Фамилия<span>*</span></label>
                <input type=\"text\" id=\"order_lastname\" name=\"last_name\" class=\"order__input\" required>
            </div>
            <div class=\"order__group\">
                <label for=\"order_company\" class=\"order__label\">Название компании (необязательно)</label>
                <input type=\"text\" id=\"order_company\" name=\"company\" class=\"order__input\">
            </div>

            <div class=\"order__group\">
            <label for=\"order_region\" class=\"order__label\">Область/Округ<span>*</span></label>
            <input type=\"text\" id=\"order_region\" name=\"state\" class=\"order__input\" required>
            </div>

            <div class=\"order__group order__group-half\">
                <label for=\"order_city\" class=\"order__label\">Город<span>*</span></label>
                <input type=\"text\" id=\"order_city\" name=\"city\" class=\"order__input\" required>
            </div>

            <div class=\"order__group order__group-half\">
                <label for=\"order_index\" class=\"order__label\">Почтовый индекс<span>*</span></label>
                <input type=\"text\" id=\"order_index\" name=\"postcode\" class=\"order__input\" required>
            </div>

            <div class=\"order__group order__group-half\">
                <label for=\"order_street\" class=\"order__label\">Улица <span>*</span></label>
                <input type=\"text\" id=\"order_street\" name=\"street\" class=\"order__input\" required>
            </div>

            <div class=\"order__group order__group-half\">
                <label for=\"order_home\" class=\"order__label\">Дом<span>*</span></label>
                <input type=\"text\" id=\"order_home\" name=\"house\" class=\"order__input\" required>
            </div>

            <div class=\"order__group\">
                <label for=\"order_email\" class=\"order__label\">Адрес электронной почты (необязательно) </label>
                <input type=\"email\" id=\"order_email\" name=\"email\" class=\"order__input\">
            </div>

            <div class=\"order__group\">
                <label for=\"order_phone\" class=\"order__label\">Телефон<span>*</span></label>
                <input type=\"text\" id=\"order_phone\" name=\"phone\" class=\"order__input\" required>
            </div>

        ";
        // line 61
        if (($context["location_is_available"] ?? null)) {
            // line 62
            echo "        <div class=\"form-row _ajax_location_select_wrapper\">
            ";
            // line 63
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("form/locataion-select/locataion-select"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 64
            echo "        </div>
        ";
        }
        // line 66
        echo "        <hr>
    

        ";
        // line 69
        $context["obPaymentMethodList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["PaymentMethodList"] ?? null), "make", [], "method", false, false, false, 69), "sort", [], "method", false, false, false, 69), "active", [], "method", false, false, false, 69);
        // line 70
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["obPaymentMethodList"] ?? null), "isNotEmpty", [], "method", false, false, false, 70)) {
            // line 71
            echo "            <fieldset class=\"form-group\">
                ";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["obPaymentMethodList"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["obPaymentMethod"]) {
                // line 73
                echo "                    <div class=\"form-check";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 73)) {
                    echo " mt-2";
                }
                echo "\">
                        <input class=\"form-check-input\" type=\"radio\" name=\"payment_method_id\" id=\"payment-method-";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obPaymentMethod"], "id", [], "any", false, false, false, 74), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obPaymentMethod"], "id", [], "any", false, false, false, 74), "html", null, true);
                echo "\" required ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 74)) {
                    echo "checked";
                }
                echo ">
                        <label class=\"form-check-label\" for=\"payment-method-";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obPaymentMethod"], "id", [], "any", false, false, false, 75), "html", null, true);
                echo "\">
                            ";
                // line 76
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obPaymentMethod"], "name", [], "any", false, false, false, 76), "html", null, true);
                echo "
                        </label>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obPaymentMethod'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "            </fieldset>
        ";
        }
        // line 82
        echo "        <div class=\"form-group\">
            <button type=\"submit\" class=\"btn btn-dark w-100 text-uppercase _create_order_button\" data-container=\"body\" data-toggle=\"popover\" data-placement=\"top\" data-content=\"\">continue to checkout</button>
        </div>
    </div>
    <div class=\"order__info\">
    <div class=\"order__group-textarea\">
                <label for=\"order_message\" class=\"order__label\">Примечания к заказу (необязательно)</label>
                <textarea id=\"order_message\" name=\"comment\" class=\"order__input order__message\"></textarea>
            </div>
            <p>
                Ваши данные полностью защищены и не будут передаваться третьим лицам.Пожалуйста проверьте правильность
                ввода данных.
              </p>
        <div class=\"order__info-text\">
                <h2>Информация о заказе</h2>
                <div>
                  <div class=\"order__info-title\">Продукт</div>

                ";
        // line 100
        $context["obCartPositionList"] = twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "get", [0 => ($context["obActiveShippingType"] ?? null)], "method", false, false, false, 100);
        // line 101
        echo "
                  <div class=\"order__products\">

                    ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["obCartPositionList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["obCartPosition"]) {
            // line 105
            echo "                
                ";
            // line 106
            $context["obOffer"] = twig_get_attribute($this->env, $this->source, $context["obCartPosition"], "offer", [], "any", false, false, false, 106);
            // line 107
            echo "                ";
            $context["obProduct"] = twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "product", [], "any", false, false, false, 107);
            // line 108
            echo "
                    <div class=\"order__product\">
                      <div class=\"order__product-name\">";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "name", [], "any", false, false, false, 110), "html", null, true);
            echo "</div>
                      <div>
                        <input type=\"text\" value=\"";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obCartPosition"], "price", [], "any", false, false, false, 112), "html", null, true);
            echo "\" class=\"order__info-input\" readonly>c
                      </div>
                    </div>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obCartPosition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "
                  </div>
                  <div class=\"order__resident\">
                    <div class=\"order__info-title\">Промежуточный итог:</div>
                    <div>
                      <input type=\"text\" value=\"";
        // line 122
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obCartPositionList"] ?? null), "getTotalPrice", [], "method", false, false, false, 122), "html", null, true);
        echo "\" class=\"order__info-input order__resident-input\" readonly>c
                    </div>
                  </div>

                  <div class=\"order__resident\">
                    <div class=\"order__info-title\">Перевозка:</div>
                    <div class=\"order__radios\">

                        ";
        // line 130
        $context["obShippingTypeList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ShippingTypeList"] ?? null), "make", [], "method", false, false, false, 130), "sort", [], "method", false, false, false, 130), "active", [], "method", false, false, false, 130);
        // line 131
        echo "        
        ";
        // line 132
        if (twig_get_attribute($this->env, $this->source, ($context["obShippingTypeList"] ?? null), "isNotEmpty", [], "method", false, false, false, 132)) {
            // line 133
            echo "                
                    <div class=\"form-check order__radio-text ";
            // line 134
            if ( !twig_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "first", [], "any", false, false, false, 134)) {
                echo " mt-2";
            }
            echo "\">
                        ";
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["obShippingTypeList"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["obShippingType"]) {
                // line 136
                echo "                        <input class=\"form-check-input order__radio\" type=\"radio\" name=\"shipping_type_id\" id=\"sipping-type-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obShippingType"], "id", [], "any", false, false, false, 136), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obShippingType"], "id", [], "any", false, false, false, 136), "html", null, true);
                echo "\" required >

                        <!-- ";
                // line 138
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 138)) {
                    echo "checked";
                }
                echo " -->
                            ";
                // line 139
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obShippingType"], "name", [], "any", false, false, false, 139), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obShippingType"], "price", [], "any", false, false, false, 139), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obShippingType"], "currency", [], "any", false, false, false, 139), "html", null, true);
                echo "
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obShippingType'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 141
            echo "                    </div>
                

        ";
        }
        // line 145
        echo "                    </div>
                  </div>
                  <div class=\"order__resident\">
                    <div class=\"order__info-title\">Общая стоимость:</div>
                    <div>
                      <span class=\"cart__total-price-current-price col-3 col-lg-2 text-right\">
                <span class=\"cart__total-price-price-value basket__total-order\">";
        // line 151
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "getTotalPrice", [], "method", false, false, false, 151), "html", null, true);
        echo "</span>
                <!-- <span class=\"cart__total-price-price-currency\">";
        // line 152
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "getCurrency", [], "method", false, false, false, 152), "html", null, true);
        echo "</span> -->
            </span>
                    </div>
                  </div>
                </div>
              </div>

            
            </div>
    </form>
</div>
</div>
</section>";
    }

    public function getTemplateName()
    {
        return "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/form/checkout-form/checkout-form.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  341 => 152,  337 => 151,  329 => 145,  323 => 141,  304 => 139,  298 => 138,  290 => 136,  273 => 135,  267 => 134,  264 => 133,  262 => 132,  259 => 131,  257 => 130,  246 => 122,  239 => 117,  228 => 112,  223 => 110,  219 => 108,  216 => 107,  214 => 106,  211 => 105,  207 => 104,  202 => 101,  200 => 100,  180 => 82,  176 => 80,  158 => 76,  154 => 75,  144 => 74,  137 => 73,  120 => 72,  117 => 71,  114 => 70,  112 => 69,  107 => 66,  103 => 64,  99 => 63,  96 => 62,  94 => 61,  37 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var obCartPositionList \\Lovata\\OrdersShopaholic\\Classes\\Collection\\CartPositionCollection #}
{# @var obCartPosition \\Lovata\\OrdersShopaholic\\Classes\\Item\\CartPositionItem #}
{# @var obActiveShippingType \\Lovata\\OrdersShopaholic\\Classes\\Item\\ShippingTypeItem #}
{# @var obOffer \\Lovata\\Shopaholic\\Classes\\Item\\OfferItem #}
{# @var obProduct \\Lovata\\Shopaholic\\Classes\\Item\\ProductItem #}

<section class=\"row form order\" id=\"order-page\" style=\"display: none;\">
<div class=\"container\">
<div class=\"order__wrap\">
    <h2 class=\"order__title\">Оформление заказа</h2>
    <form class=\"order__form _ajax_create_order\" novalidate>
        <div class=\"order__form-wrap\">
            <div class=\"order__group order__group-half\">
                <label for=\"order_name\" class=\"order__label\">Имя<span>*</span></label>
                <input type=\"text\" id=\"order_name\" name=\"name\" class=\"order__input form-control\" required>
              </div>
            <div class=\"order__group order__group-half\">
                <label for=\"order_lastname\" class=\"order__label\">Фамилия<span>*</span></label>
                <input type=\"text\" id=\"order_lastname\" name=\"last_name\" class=\"order__input\" required>
            </div>
            <div class=\"order__group\">
                <label for=\"order_company\" class=\"order__label\">Название компании (необязательно)</label>
                <input type=\"text\" id=\"order_company\" name=\"company\" class=\"order__input\">
            </div>

            <div class=\"order__group\">
            <label for=\"order_region\" class=\"order__label\">Область/Округ<span>*</span></label>
            <input type=\"text\" id=\"order_region\" name=\"state\" class=\"order__input\" required>
            </div>

            <div class=\"order__group order__group-half\">
                <label for=\"order_city\" class=\"order__label\">Город<span>*</span></label>
                <input type=\"text\" id=\"order_city\" name=\"city\" class=\"order__input\" required>
            </div>

            <div class=\"order__group order__group-half\">
                <label for=\"order_index\" class=\"order__label\">Почтовый индекс<span>*</span></label>
                <input type=\"text\" id=\"order_index\" name=\"postcode\" class=\"order__input\" required>
            </div>

            <div class=\"order__group order__group-half\">
                <label for=\"order_street\" class=\"order__label\">Улица <span>*</span></label>
                <input type=\"text\" id=\"order_street\" name=\"street\" class=\"order__input\" required>
            </div>

            <div class=\"order__group order__group-half\">
                <label for=\"order_home\" class=\"order__label\">Дом<span>*</span></label>
                <input type=\"text\" id=\"order_home\" name=\"house\" class=\"order__input\" required>
            </div>

            <div class=\"order__group\">
                <label for=\"order_email\" class=\"order__label\">Адрес электронной почты (необязательно) </label>
                <input type=\"email\" id=\"order_email\" name=\"email\" class=\"order__input\">
            </div>

            <div class=\"order__group\">
                <label for=\"order_phone\" class=\"order__label\">Телефон<span>*</span></label>
                <input type=\"text\" id=\"order_phone\" name=\"phone\" class=\"order__input\" required>
            </div>

        {% if location_is_available %}
        <div class=\"form-row _ajax_location_select_wrapper\">
            {% partial 'form/locataion-select/locataion-select' %}
        </div>
        {% endif %}
        <hr>
    

        {% set obPaymentMethodList = PaymentMethodList.make().sort().active() %}
        {% if obPaymentMethodList.isNotEmpty() %}
            <fieldset class=\"form-group\">
                {% for obPaymentMethod in obPaymentMethodList %}
                    <div class=\"form-check{% if not loop.first %} mt-2{% endif %}\">
                        <input class=\"form-check-input\" type=\"radio\" name=\"payment_method_id\" id=\"payment-method-{{ obPaymentMethod.id }}\" value=\"{{ obPaymentMethod.id }}\" required {% if loop.first %}checked{% endif %}>
                        <label class=\"form-check-label\" for=\"payment-method-{{ obPaymentMethod.id }}\">
                            {{ obPaymentMethod.name }}
                        </label>
                    </div>
                {% endfor %}
            </fieldset>
        {% endif %}
        <div class=\"form-group\">
            <button type=\"submit\" class=\"btn btn-dark w-100 text-uppercase _create_order_button\" data-container=\"body\" data-toggle=\"popover\" data-placement=\"top\" data-content=\"\">continue to checkout</button>
        </div>
    </div>
    <div class=\"order__info\">
    <div class=\"order__group-textarea\">
                <label for=\"order_message\" class=\"order__label\">Примечания к заказу (необязательно)</label>
                <textarea id=\"order_message\" name=\"comment\" class=\"order__input order__message\"></textarea>
            </div>
            <p>
                Ваши данные полностью защищены и не будут передаваться третьим лицам.Пожалуйста проверьте правильность
                ввода данных.
              </p>
        <div class=\"order__info-text\">
                <h2>Информация о заказе</h2>
                <div>
                  <div class=\"order__info-title\">Продукт</div>

                {% set obCartPositionList = Cart.get(obActiveShippingType) %}

                  <div class=\"order__products\">

                    {% for obCartPosition in obCartPositionList %}
                
                {% set obOffer = obCartPosition.offer %}
                {% set obProduct = obOffer.product %}

                    <div class=\"order__product\">
                      <div class=\"order__product-name\">{{ obProduct.name }}</div>
                      <div>
                        <input type=\"text\" value=\"{{ obCartPosition.price }}\" class=\"order__info-input\" readonly>c
                      </div>
                    </div>

                    {% endfor %}

                  </div>
                  <div class=\"order__resident\">
                    <div class=\"order__info-title\">Промежуточный итог:</div>
                    <div>
                      <input type=\"text\" value=\"{{ obCartPositionList.getTotalPrice() }}\" class=\"order__info-input order__resident-input\" readonly>c
                    </div>
                  </div>

                  <div class=\"order__resident\">
                    <div class=\"order__info-title\">Перевозка:</div>
                    <div class=\"order__radios\">

                        {% set obShippingTypeList = ShippingTypeList.make().sort().active() %}
        
        {% if obShippingTypeList.isNotEmpty() %}
                
                    <div class=\"form-check order__radio-text {% if not loop.first %} mt-2{% endif %}\">
                        {% for obShippingType in obShippingTypeList %}
                        <input class=\"form-check-input order__radio\" type=\"radio\" name=\"shipping_type_id\" id=\"sipping-type-{{ obShippingType.id }}\" value=\"{{ obShippingType.id }}\" required >

                        <!-- {% if loop.first %}checked{% endif %} -->
                            {{ obShippingType.name }}: {{ obShippingType.price }}{{ obShippingType.currency }}
                        {% endfor %}
                    </div>
                

        {% endif %}
                    </div>
                  </div>
                  <div class=\"order__resident\">
                    <div class=\"order__info-title\">Общая стоимость:</div>
                    <div>
                      <span class=\"cart__total-price-current-price col-3 col-lg-2 text-right\">
                <span class=\"cart__total-price-price-value basket__total-order\">{{ Cart.getTotalPrice() }}</span>
                <!-- <span class=\"cart__total-price-price-currency\">{{ Cart.getCurrency() }}</span> -->
            </span>
                    </div>
                  </div>
                </div>
              </div>

            
            </div>
    </form>
</div>
</div>
</section>", "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/form/checkout-form/checkout-form.htm", "");
    }
}
