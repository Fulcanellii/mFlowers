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

/* D:\OSPanel\domains\october/themes/lovata-bootstrap-shopaholic/partials/form/checkout-form/checkout-form.htm */
class __TwigTemplate_b66393eae2952fb87668c3394d467663c90aea70aab480d557622c95c352fbde extends \Twig\Template
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
        echo "<section class=\"row form\">
    <form class=\"col-12 col-lg-8 needs-validation _ajax_create_order\" novalidate>
        <div class=\"row\">
            <div class=\"col-sm-6 mb-3\">
                <input type=\"text\" class=\"form-control\" name=\"name\" placeholder=\"First name\" aria-label=\"Input first name\" required>
                <div class=\"invalid-feedback\">
                    Please add your name
                </div>
            </div>
            <div class=\"col-sm-6 mb-3\">
                <input type=\"text\" class=\"form-control\" name=\"last_name\" placeholder=\"Last name\" aria-label=\"Input last name\" required>
                <div class=\"invalid-feedback\">
                    Please add your last name
                </div>
            </div>
        </div>
        <div class=\"form-group mb-3\">
            <label class=\"sr-only\" for=\"inlineFormInputGroup\">Email</label>
            <div class=\"input-group\">
                <div class=\"input-group-prepend\">
                    <div class=\"input-group-text\">@</div>
                </div>
                <input type=\"text\" class=\"form-control\" id=\"inlineFormInputGroup\" name=\"email\" placeholder=\"Email\" required>
                <div class=\"invalid-feedback\">
                    Please add your email
                </div>
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"inputAddress\">Address</label>
            <input type=\"text\" class=\"form-control\" id=\"inputAddress\" name=\"address1\" placeholder=\"1234 Main St\" required>
            <div class=\"invalid-feedback\">
                Please add your address
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"inputAddress2\">Address 2 (optional)</label>
            <input type=\"text\" class=\"form-control\" id=\"inputAddress2\" name=\"address2\" placeholder=\"Apartment or suite\">
        </div>

        ";
        // line 41
        if (($context["location_is_available"] ?? null)) {
            // line 42
            echo "        <div class=\"form-row _ajax_location_select_wrapper\">
            ";
            // line 43
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("form/locataion-select/locataion-select"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 44
            echo "        </div>
        ";
        }
        // line 46
        echo "        <hr>

        ";
        // line 48
        $context["obShippingTypeList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ShippingTypeList"] ?? null), "make", [], "method", false, false, false, 48), "sort", [], "method", false, false, false, 48), "active", [], "method", false, false, false, 48);
        // line 49
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["obShippingTypeList"] ?? null), "isNotEmpty", [], "method", false, false, false, 49)) {
            // line 50
            echo "            <fieldset class=\"form-group\">
                ";
            // line 51
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
                // line 52
                echo "                    <div class=\"form-check";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 52)) {
                    echo " mt-2";
                }
                echo "\">
                        <input class=\"form-check-input\" type=\"radio\" name=\"shipping_type_id\" id=\"sipping-type-";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obShippingType"], "id", [], "any", false, false, false, 53), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obShippingType"], "id", [], "any", false, false, false, 53), "html", null, true);
                echo "\" required ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 53)) {
                    echo "checked";
                }
                echo ">
                        <label class=\"form-check-label\" for=\"sipping-type-";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obShippingType"], "id", [], "any", false, false, false, 54), "html", null, true);
                echo "\">
                            ";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obShippingType"], "name", [], "any", false, false, false, 55), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obShippingType"], "price", [], "any", false, false, false, 55), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obShippingType"], "currency", [], "any", false, false, false, 55), "html", null, true);
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
            // line 59
            echo "            </fieldset>
            <hr>
        ";
        }
        // line 62
        echo "        ";
        $context["obPaymentMethodList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["PaymentMethodList"] ?? null), "make", [], "method", false, false, false, 62), "sort", [], "method", false, false, false, 62), "active", [], "method", false, false, false, 62);
        // line 63
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["obPaymentMethodList"] ?? null), "isNotEmpty", [], "method", false, false, false, 63)) {
            // line 64
            echo "            <fieldset class=\"form-group\">
                ";
            // line 65
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
                // line 66
                echo "                    <div class=\"form-check";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 66)) {
                    echo " mt-2";
                }
                echo "\">
                        <input class=\"form-check-input\" type=\"radio\" name=\"payment_method_id\" id=\"payment-method-";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obPaymentMethod"], "id", [], "any", false, false, false, 67), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obPaymentMethod"], "id", [], "any", false, false, false, 67), "html", null, true);
                echo "\" required ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 67)) {
                    echo "checked";
                }
                echo ">
                        <label class=\"form-check-label\" for=\"payment-method-";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obPaymentMethod"], "id", [], "any", false, false, false, 68), "html", null, true);
                echo "\">
                            ";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obPaymentMethod"], "name", [], "any", false, false, false, 69), "html", null, true);
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
            // line 73
            echo "            </fieldset>
        ";
        }
        // line 75
        echo "        <div class=\"form-group\">
            <button type=\"submit\" class=\"btn btn-dark w-100 text-uppercase _create_order_button\" data-container=\"body\" data-toggle=\"popover\" data-placement=\"top\" data-content=\"\">continue to checkout</button>
        </div>
    </form>
</section>";
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/form/checkout-form/checkout-form.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 75,  234 => 73,  216 => 69,  212 => 68,  202 => 67,  195 => 66,  178 => 65,  175 => 64,  172 => 63,  169 => 62,  164 => 59,  142 => 55,  138 => 54,  128 => 53,  121 => 52,  104 => 51,  101 => 50,  98 => 49,  96 => 48,  92 => 46,  88 => 44,  84 => 43,  81 => 42,  79 => 41,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"row form\">
    <form class=\"col-12 col-lg-8 needs-validation _ajax_create_order\" novalidate>
        <div class=\"row\">
            <div class=\"col-sm-6 mb-3\">
                <input type=\"text\" class=\"form-control\" name=\"name\" placeholder=\"First name\" aria-label=\"Input first name\" required>
                <div class=\"invalid-feedback\">
                    Please add your name
                </div>
            </div>
            <div class=\"col-sm-6 mb-3\">
                <input type=\"text\" class=\"form-control\" name=\"last_name\" placeholder=\"Last name\" aria-label=\"Input last name\" required>
                <div class=\"invalid-feedback\">
                    Please add your last name
                </div>
            </div>
        </div>
        <div class=\"form-group mb-3\">
            <label class=\"sr-only\" for=\"inlineFormInputGroup\">Email</label>
            <div class=\"input-group\">
                <div class=\"input-group-prepend\">
                    <div class=\"input-group-text\">@</div>
                </div>
                <input type=\"text\" class=\"form-control\" id=\"inlineFormInputGroup\" name=\"email\" placeholder=\"Email\" required>
                <div class=\"invalid-feedback\">
                    Please add your email
                </div>
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"inputAddress\">Address</label>
            <input type=\"text\" class=\"form-control\" id=\"inputAddress\" name=\"address1\" placeholder=\"1234 Main St\" required>
            <div class=\"invalid-feedback\">
                Please add your address
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"inputAddress2\">Address 2 (optional)</label>
            <input type=\"text\" class=\"form-control\" id=\"inputAddress2\" name=\"address2\" placeholder=\"Apartment or suite\">
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
    </form>
</section>", "D:\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/form/checkout-form/checkout-form.htm", "");
    }
}
