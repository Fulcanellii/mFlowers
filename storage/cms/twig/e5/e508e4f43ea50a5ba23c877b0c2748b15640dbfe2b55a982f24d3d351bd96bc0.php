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

/* D:\open_server_5_3_5_basic_premium_ultimate\OSPanel\domains\october/themes/lovata-bootstrap-shopaholic/partials/form/button-change-quantity/button-change-quantity.htm */
class __TwigTemplate_93151cfc34dd3b620a09be24466ebb6ee45026b756e025c1fd9cb106afcf5e1e extends \Twig\Template
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
        echo "<div class=\"info__counter\">
   <div class=\"input-group product-detailed__btn-qty ";
        // line 2
        if (($context["btnProductPage"] ?? null)) {
            echo " mb-3 ";
        }
        echo "\">

    <input
            type=\"number\"
            class=\"product-detailed__btn-qty-input info__counter-input\"
            name=\"quantity\"
            value=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["btnChangeQtyValue"] ?? null), "html", null, true);
        echo "\"
            min=\"1\"
            max=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["btnMaxQtyValue"] ?? null), "html", null, true);
        echo "\"
            aria-label=\"Input quantity\"
            ";
        // line 12
        if (($context["btnChangeQtyAjax"] ?? null)) {
            echo " data-ajax=\"updateTotal\" ";
        }
        echo ">

    <button
            class=\"info__btn product-detailed__btn-qty-change\"
            data-qty=\"minus\"
            ";
        // line 17
        if (($context["btnChangeQtyAjax"] ?? null)) {
            echo " data-ajax=\"updateTotal\" ";
        }
        // line 18
        echo "            ";
        if ((($context["btnChangeQtyValue"] ?? null) == 1)) {
            echo "disabled";
        }
        // line 19
        echo "            aria-label=\"Increase quantity\"
            type=\"button\">
        -
    </button>
    <button
            class=\"info__btn product-detailed__btn-qty-change\"
            data-qty=\"plus\"
            ";
        // line 26
        if (($context["btnChangeQtyAjax"] ?? null)) {
            echo " data-ajax=\"updateTotal\" ";
        }
        // line 27
        echo "            ";
        if ((($context["btnChangeQtyValue"] ?? null) >= ($context["btnMaxQtyValue"] ?? null))) {
            echo "disabled";
        }
        // line 28
        echo "            aria-label=\"Decrease quantity\"
            type=\"button\">
        +
    </button>


</div>";
    }

    public function getTemplateName()
    {
        return "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/form/button-change-quantity/button-change-quantity.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 28,  93 => 27,  89 => 26,  80 => 19,  75 => 18,  71 => 17,  61 => 12,  56 => 10,  51 => 8,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"info__counter\">
   <div class=\"input-group product-detailed__btn-qty {% if btnProductPage %} mb-3 {% endif %}\">

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


</div>", "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/form/button-change-quantity/button-change-quantity.htm", "");
    }
}
