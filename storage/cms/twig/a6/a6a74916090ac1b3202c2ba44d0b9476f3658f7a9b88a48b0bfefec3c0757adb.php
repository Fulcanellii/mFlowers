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
        // line 63
        if (($context["location_is_available"] ?? null)) {
            // line 64
            echo "        <div class=\"form-row _ajax_location_select_wrapper\">
            ";
            // line 65
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("form/locataion-select/locataion-select"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 66
            echo "        </div>
        ";
        }
        // line 68
        echo "        <hr>
    

       
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
    
                  <div class=\"order__products\">

                    ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["obCartPositionList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["obCartPosition"]) {
            // line 90
            echo "                
                ";
            // line 91
            $context["obOffer"] = twig_get_attribute($this->env, $this->source, $context["obCartPosition"], "offer", [], "any", false, false, false, 91);
            // line 92
            echo "
                ";
            // line 93
            $context["obProduct"] = twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "product", [], "any", false, false, false, 93);
            // line 94
            echo "
                    <div class=\"order__product\">
                      <div class=\"order__product-name\" offer-id=\"";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "id", [], "any", false, false, false, 96), "html", null, true);
            echo "\" product-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "id", [], "any", false, false, false, 96), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "name", [], "any", false, false, false, 96), "html", null, true);
            echo "</div>
                      <div>
                        <input type=\"text\" value=\"";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "price", [], "any", false, false, false, 98), "html", null, true);
            echo "\" class=\"order__info-input\" readonly>c
                      </div>
                    </div>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obCartPosition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "
                  </div>
                  <div class=\"order__resident\">
                    <div class=\"order__info-title\">Промежуточный итог:</div>
                    <div class=\"cart__total-position-price-value\">
                      <input type=\"text\" value=\"";
        // line 108
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obCartPositionList"] ?? null), "getTotalPrice", [], "method", false, false, false, 108), "html", null, true);
        echo "\" class=\"order__info-input order__resident-input\" readonly>c
                    </div>
                  </div>

                  <div class=\"order__resident\">
                    <div class=\"order__info-title\">Перевозка:</div>
                    <div class=\"order__radios\">

                        ";
        // line 116
        $context["obShippingTypeList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ShippingTypeList"] ?? null), "make", [], "method", false, false, false, 116), "sort", [], "method", false, false, false, 116), "active", [], "method", false, false, false, 116);
        // line 117
        echo "        
        ";
        // line 118
        if (twig_get_attribute($this->env, $this->source, ($context["obShippingTypeList"] ?? null), "isNotEmpty", [], "method", false, false, false, 118)) {
            // line 119
            echo "                
                    <div class=\"form-check order__radio-text ";
            // line 120
            if ( !twig_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "first", [], "any", false, false, false, 120)) {
                echo " mt-2";
            }
            echo "\">
                        ";
            // line 121
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
                // line 122
                echo "                        <input class=\"form-check-input order__radio\" type=\"radio\" name=\"shipping_type_id\" id=\"sipping-type-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obShippingType"], "id", [], "any", false, false, false, 122), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obShippingType"], "id", [], "any", false, false, false, 122), "html", null, true);
                echo "\" data-name=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obShippingType"], "name", [], "any", false, false, false, 122), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obShippingType"], "price", [], "any", false, false, false, 122), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obShippingType"], "currency", [], "any", false, false, false, 122), "html", null, true);
                echo "\" required >

                        <!-- ";
                // line 124
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 124)) {
                    echo "checked";
                }
                echo " -->
                            <div class=\"shipping_name\">";
                // line 125
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obShippingType"], "name", [], "any", false, false, false, 125), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obShippingType"], "price", [], "any", false, false, false, 125), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obShippingType"], "currency", [], "any", false, false, false, 125), "html", null, true);
                echo "</div>
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
            // line 127
            echo "                    </div>
                

        ";
        }
        // line 131
        echo "                    </div>
                  </div>
                  <div class=\"order__resident\">
                    <div class=\"order__info-title\">Общая стоимость:</div>
                    <div>
                      <span class=\"cart__total-price-current-price col-3 col-lg-2 text-right\">
                <span class=\"cart__total-price-price-value basket__total-order\">";
        // line 137
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "getTotalPrice", [], "method", false, false, false, 137), "html", null, true);
        echo "c</span>
                <!-- <span class=\"cart__total-price-price-currency\">";
        // line 138
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "getCurrency", [], "method", false, false, false, 138), "html", null, true);
        echo "</span> -->
            </span>
                    </div>
                  </div>
                </div>
              </div>

            
            </div>

    
        

        <div class=\"order__pay\">
              <h3 class=\"order__pay-title\">ВЫБЕРИТЕ СПОСОБ ОПЛАТЫ</h3>

              ";
        // line 154
        $context["obPaymentMethodList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["PaymentMethodList"] ?? null), "make", [], "method", false, false, false, 154), "sort", [], "method", false, false, false, 154), "active", [], "method", false, false, false, 154);
        // line 155
        echo "              ";
        if (twig_get_attribute($this->env, $this->source, ($context["obPaymentMethodList"] ?? null), "isNotEmpty", [], "method", false, false, false, 155)) {
            // line 156
            echo "              <div class=\"order__pay-radios\">
                ";
            // line 157
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
                // line 158
                echo "                <div class=\"form-check";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 158)) {
                    echo " mt-2";
                }
                echo "\">
                        <input class=\"form-check-input\" type=\"radio\" name=\"payment_method_id\" id=\"payment-method-";
                // line 159
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obPaymentMethod"], "id", [], "any", false, false, false, 159), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obPaymentMethod"], "id", [], "any", false, false, false, 159), "html", null, true);
                echo "\" required ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 159)) {
                    echo "checked";
                }
                echo " payment-name=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obPaymentMethod"], "name", [], "any", false, false, false, 159), "html", null, true);
                echo "\">
                        <label class=\"form-check-label\" for=\"payment-method-";
                // line 160
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obPaymentMethod"], "id", [], "any", false, false, false, 160), "html", null, true);
                echo "\">
                            ";
                // line 161
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obPaymentMethod"], "name", [], "any", false, false, false, 161), "html", null, true);
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
            // line 165
            echo "                
                
              </div>
              ";
        }
        // line 169
        echo "
              <div class=\"order__pay-flex\">
    
                <div class=\"order__pay-total\">
                  <div class=\"order__pay-summ\">
                    <span class=\"order__pay-order\">Сумма заказа</span>
                    <div class=\"cart__total-price-price-value\"><span class=\"cart__total-price-price-value basket__total-order\">";
        // line 175
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "getTotalPrice", [], "method", false, false, false, 175), "html", null, true);
        echo "c</span></div>
                  </div>
                  <div class=\"order__pay-summ\">
                    <span class=\"order__pay-order\">К оплате</span>
                    <div class=\"cart__total-price-price-value\"><span class=\"cart__total-price-price-value basket__total-order\">";
        // line 179
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "getTotalPrice", [], "method", false, false, false, 179), "html", null, true);
        echo "c</span></div>
                    <input class=\"cart__total-price-price-value basket__total-order\" id=\"total-price\" type=\"hidden\" value=\"";
        // line 180
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "getTotalPrice", [], "method", false, false, false, 180), "html", null, true);
        echo "\">
                  </div>

                </div>
              </div>
              <button type=\"submit\" class=\"order__button _create_order_button\">оформить заказ</button>
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
        return array (  387 => 180,  383 => 179,  376 => 175,  368 => 169,  362 => 165,  344 => 161,  340 => 160,  328 => 159,  321 => 158,  304 => 157,  301 => 156,  298 => 155,  296 => 154,  277 => 138,  273 => 137,  265 => 131,  259 => 127,  240 => 125,  234 => 124,  221 => 122,  204 => 121,  198 => 120,  195 => 119,  193 => 118,  190 => 117,  188 => 116,  177 => 108,  170 => 103,  159 => 98,  150 => 96,  146 => 94,  144 => 93,  141 => 92,  139 => 91,  136 => 90,  132 => 89,  109 => 68,  105 => 66,  101 => 65,  98 => 64,  96 => 63,  37 => 6,);
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
    
                  <div class=\"order__products\">

                    {% for obCartPosition in obCartPositionList %}
                
                {% set obOffer = obCartPosition.offer %}

                {% set obProduct = obOffer.product %}

                    <div class=\"order__product\">
                      <div class=\"order__product-name\" offer-id=\"{{ obOffer.id }}\" product-id=\"{{ obProduct.id }}\">{{ obProduct.name }}</div>
                      <div>
                        <input type=\"text\" value=\"{{ obOffer.price }}\" class=\"order__info-input\" readonly>c
                      </div>
                    </div>

                    {% endfor %}

                  </div>
                  <div class=\"order__resident\">
                    <div class=\"order__info-title\">Промежуточный итог:</div>
                    <div class=\"cart__total-position-price-value\">
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
                        <input class=\"form-check-input order__radio\" type=\"radio\" name=\"shipping_type_id\" id=\"sipping-type-{{ obShippingType.id }}\" value=\"{{ obShippingType.id }}\" data-name=\"{{ obShippingType.name }}: {{ obShippingType.price }}{{ obShippingType.currency }}\" required >

                        <!-- {% if loop.first %}checked{% endif %} -->
                            <div class=\"shipping_name\">{{ obShippingType.name }}: {{ obShippingType.price }}{{ obShippingType.currency }}</div>
                        {% endfor %}
                    </div>
                

        {% endif %}
                    </div>
                  </div>
                  <div class=\"order__resident\">
                    <div class=\"order__info-title\">Общая стоимость:</div>
                    <div>
                      <span class=\"cart__total-price-current-price col-3 col-lg-2 text-right\">
                <span class=\"cart__total-price-price-value basket__total-order\">{{ Cart.getTotalPrice() }}c</span>
                <!-- <span class=\"cart__total-price-price-currency\">{{ Cart.getCurrency() }}</span> -->
            </span>
                    </div>
                  </div>
                </div>
              </div>

            
            </div>

    
        

        <div class=\"order__pay\">
              <h3 class=\"order__pay-title\">ВЫБЕРИТЕ СПОСОБ ОПЛАТЫ</h3>

              {% set obPaymentMethodList = PaymentMethodList.make().sort().active() %}
              {% if obPaymentMethodList.isNotEmpty() %}
              <div class=\"order__pay-radios\">
                {% for obPaymentMethod in obPaymentMethodList %}
                <div class=\"form-check{% if not loop.first %} mt-2{% endif %}\">
                        <input class=\"form-check-input\" type=\"radio\" name=\"payment_method_id\" id=\"payment-method-{{ obPaymentMethod.id }}\" value=\"{{ obPaymentMethod.id }}\" required {% if loop.first %}checked{% endif %} payment-name=\"{{ obPaymentMethod.name }}\">
                        <label class=\"form-check-label\" for=\"payment-method-{{ obPaymentMethod.id }}\">
                            {{ obPaymentMethod.name }}
                        </label>
                    </div>
                {% endfor %}
                
                
              </div>
              {% endif %}

              <div class=\"order__pay-flex\">
    
                <div class=\"order__pay-total\">
                  <div class=\"order__pay-summ\">
                    <span class=\"order__pay-order\">Сумма заказа</span>
                    <div class=\"cart__total-price-price-value\"><span class=\"cart__total-price-price-value basket__total-order\">{{ Cart.getTotalPrice() }}c</span></div>
                  </div>
                  <div class=\"order__pay-summ\">
                    <span class=\"order__pay-order\">К оплате</span>
                    <div class=\"cart__total-price-price-value\"><span class=\"cart__total-price-price-value basket__total-order\">{{ Cart.getTotalPrice() }}c</span></div>
                    <input class=\"cart__total-price-price-value basket__total-order\" id=\"total-price\" type=\"hidden\" value=\"{{ Cart.getTotalPrice() }}\">
                  </div>

                </div>
              </div>
              <button type=\"submit\" class=\"order__button _create_order_button\">оформить заказ</button>
            </div>
    </form>
</div>
</div>
</section>", "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/form/checkout-form/checkout-form.htm", "");
    }
}
