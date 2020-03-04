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

/* D:\open_server_5_3_5_basic_premium_ultimate\OSPanel\domains\october/themes/lovata-bootstrap-shopaholic/partials/form/button-change-quantity/button-change-cart.htm */
class __TwigTemplate_d8125ee4b8fcfbce1e24d5ca7c59ebcbf3569d843e2063bd02a57e351a3a4a14 extends \Twig\Template
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
        echo "<div class=\"input-group product-detailed__btn-qty ";
        if (($context["btnProductPage"] ?? null)) {
            echo " mb-3 ";
        }
        echo "\">

    <input
            type=\"number\"
            class=\"product-detailed__btn-qty-input info__counter-input\"
            name=\"quantity\"
            value=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["btnChangeQtyValue"] ?? null), "html", null, true);
        echo "\"
            min=\"1\"
            max=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["btnMaxQtyValue"] ?? null), "html", null, true);
        echo "\"
            aria-label=\"Input quantity\"
            ";
        // line 11
        if (($context["btnChangeQtyAjax"] ?? null)) {
            echo " data-ajax=\"updateTotal\" ";
        }
        echo ">

    <button
            class=\"info__btn product-detailed__btn-qty-change\"
            data-qty=\"minus\"
            ";
        // line 16
        if (($context["btnChangeQtyAjax"] ?? null)) {
            echo " data-ajax=\"updateTotal\" ";
        }
        // line 17
        echo "            ";
        if ((($context["btnChangeQtyValue"] ?? null) == 1)) {
            echo "disabled";
        }
        // line 18
        echo "            aria-label=\"Increase quantity\"
            type=\"button\">
        -
    </button>
    <button
            class=\"info__btn product-detailed__btn-qty-change\"
            data-qty=\"plus\"
            ";
        // line 25
        if (($context["btnChangeQtyAjax"] ?? null)) {
            echo " data-ajax=\"updateTotal\" ";
        }
        // line 26
        echo "            ";
        if ((($context["btnChangeQtyValue"] ?? null) >= ($context["btnMaxQtyValue"] ?? null))) {
            echo "disabled";
        }
        // line 27
        echo "            aria-label=\"Decrease quantity\"
            type=\"button\">
        +
    </button>


</div>";
    }

    public function getTemplateName()
    {
        return "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/form/button-change-quantity/button-change-cart.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 27,  91 => 26,  87 => 25,  78 => 18,  73 => 17,  69 => 16,  59 => 11,  54 => 9,  49 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"input-group product-detailed__btn-qty {% if btnProductPage %} mb-3 {% endif %}\">

    <input
            type=\"number\"
            class=\"product-detailed__btn-qty-input info__counter-input\"
            name=\"quantity\"
            value=\"{{ btnChangeQtyValue }}\"
            min=\"1\"
            max=\"{{ btnMaxQtyValue }}\"
            aria-label=\"Input quantity\"
            {% if btnChangeQtyAjax %} data-ajax=\"updateTotal\" {% endif %}>

    <button
            class=\"info__btn product-detailed__btn-qty-change\"
            data-qty=\"minus\"
            {% if btnChangeQtyAjax %} data-ajax=\"updateTotal\" {% endif %}
            {% if btnChangeQtyValue == 1 %}disabled{% endif %}
            aria-label=\"Increase quantity\"
            type=\"button\">
        -
    </button>
    <button
            class=\"info__btn product-detailed__btn-qty-change\"
            data-qty=\"plus\"
            {% if btnChangeQtyAjax %} data-ajax=\"updateTotal\" {% endif %}
            {% if btnChangeQtyValue >= btnMaxQtyValue %}disabled{% endif %}
            aria-label=\"Decrease quantity\"
            type=\"button\">
        +
    </button>


</div>", "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/form/button-change-quantity/button-change-cart.htm", "");
    }
}
