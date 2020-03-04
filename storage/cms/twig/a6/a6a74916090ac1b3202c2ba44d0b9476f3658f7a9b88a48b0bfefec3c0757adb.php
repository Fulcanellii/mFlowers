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
        // line 1
        echo "<section class=\"row form order\" id=\"order-page\" style=\"display: none;\">
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
        // line 55
        if (($context["location_is_available"] ?? null)) {
            // line 56
            echo "        <div class=\"form-row _ajax_location_select_wrapper\">
            ";
            // line 57
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("form/locataion-select/locataion-select"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 58
            echo "        </div>
        ";
        }
        // line 60
        echo "        <hr>

        ";
        // line 62
        $context["obShippingTypeList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ShippingTypeList"] ?? null), "make", [], "method", false, false, false, 62), "sort", [], "method", false, false, false, 62), "active", [], "method", false, false, false, 62);
        // line 63
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["obShippingTypeList"] ?? null), "isNotEmpty", [], "method", false, false, false, 63)) {
            // line 64
            echo "            <fieldset class=\"form-group\">
                ";
            // line 65
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
                // line 66
                echo "                    <div class=\"form-check";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 66)) {
                    echo " mt-2";
                }
                echo "\">
                        <input class=\"form-check-input\" type=\"radio\" name=\"shipping_type_id\" id=\"sipping-type-";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obShippingType"], "id", [], "any", false, false, false, 67), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obShippingType"], "id", [], "any", false, false, false, 67), "html", null, true);
                echo "\" required ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 67)) {
                    echo "checked";
                }
                echo ">
                        <label class=\"form-check-label\" for=\"sipping-type-";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obShippingType"], "id", [], "any", false, false, false, 68), "html", null, true);
                echo "\">
                            ";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obShippingType"], "name", [], "any", false, false, false, 69), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obShippingType"], "price", [], "any", false, false, false, 69), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obShippingType"], "currency", [], "any", false, false, false, 69), "html", null, true);
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obShippingType'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "            </fieldset>
            <hr>
        ";
        }
        // line 76
        echo "        ";
        $context["obPaymentMethodList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["PaymentMethodList"] ?? null), "make", [], "method", false, false, false, 76), "sort", [], "method", false, false, false, 76), "active", [], "method", false, false, false, 76);
        // line 77
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["obPaymentMethodList"] ?? null), "isNotEmpty", [], "method", false, false, false, 77)) {
            // line 78
            echo "            <fieldset class=\"form-group\">
                ";
            // line 79
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
                // line 80
                echo "                    <div class=\"form-check";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 80)) {
                    echo " mt-2";
                }
                echo "\">
                        <input class=\"form-check-input\" type=\"radio\" name=\"payment_method_id\" id=\"payment-method-";
                // line 81
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obPaymentMethod"], "id", [], "any", false, false, false, 81), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obPaymentMethod"], "id", [], "any", false, false, false, 81), "html", null, true);
                echo "\" required ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 81)) {
                    echo "checked";
                }
                echo ">
                        <label class=\"form-check-label\" for=\"payment-method-";
                // line 82
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obPaymentMethod"], "id", [], "any", false, false, false, 82), "html", null, true);
                echo "\">
                            ";
                // line 83
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obPaymentMethod"], "name", [], "any", false, false, false, 83), "html", null, true);
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
            // line 87
            echo "            </fieldset>
        ";
        }
        // line 89
        echo "        <div class=\"form-group\">
            <button type=\"submit\" class=\"btn btn-dark w-100 text-uppercase _create_order_button\" data-container=\"body\" data-toggle=\"popover\" data-placement=\"top\" data-content=\"\">continue to checkout</button>
        </div>
    </div>
    <div class=\"order__info\">

            <div class=\"order__group-textarea\">
                <label for=\"order_message\" class=\"order__label\">Примечания к заказу (необязательно)</label>
                <textarea id=\"order_message\" name=\"comment\" class=\"order__input order__message\"></textarea>
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
        return array (  252 => 89,  248 => 87,  230 => 83,  226 => 82,  216 => 81,  209 => 80,  192 => 79,  189 => 78,  186 => 77,  183 => 76,  178 => 73,  156 => 69,  152 => 68,  142 => 67,  135 => 66,  118 => 65,  115 => 64,  112 => 63,  110 => 62,  106 => 60,  102 => 58,  98 => 57,  95 => 56,  93 => 55,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"row form order\" id=\"order-page\" style=\"display: none;\">
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

        {% set obShippingTypeList = ShippingTypeList.make().sort().active() %}
        {% if obShippingTypeList.isNotEmpty() %}
            <fieldset class=\"form-group\">
                {% for obShippingType in obShippingTypeList %}
                    <div class=\"form-check{% if not loop.first %} mt-2{% endif %}\">
                        <input class=\"form-check-input\" type=\"radio\" name=\"shipping_type_id\" id=\"sipping-type-{{ obShippingType.id }}\" value=\"{{ obShippingType.id }}\" required {% if loop.first %}checked{% endif %}>
                        <label class=\"form-check-label\" for=\"sipping-type-{{ obShippingType.id }}\">
                            {{ obShippingType.name }} - {{ obShippingType.price }} {{ obShippingType.currency }}
                        </label>
                    </div>
                {% endfor %}
            </fieldset>
            <hr>
        {% endif %}
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

            </div>
    </form>
</div>
</div>
</section>", "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/form/checkout-form/checkout-form.htm", "");
    }
}
