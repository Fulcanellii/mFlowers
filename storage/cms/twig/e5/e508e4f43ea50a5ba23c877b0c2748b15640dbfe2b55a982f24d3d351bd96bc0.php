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
        echo "<div class=\"input-group product-detailed__btn-qty ";
        if (($context["btnProductPage"] ?? null)) {
            echo " mb-3 ";
        }
        echo "\">
    <button
            class=\"btn btn-outline-secondary border-right-0 border btn_bg-white product-detailed__btn-qty-change\"
            data-qty=\"minus\"
            ";
        // line 5
        if (($context["btnChangeQtyAjax"] ?? null)) {
            echo " data-ajax=\"updateTotal\" ";
        }
        // line 6
        echo "            ";
        if ((($context["btnChangeQtyValue"] ?? null) == 1)) {
            echo "disabled";
        }
        // line 7
        echo "            aria-label=\"Increase quantity\"
            type=\"button\">
        <i class=\"fa fa-minus\"></i>
    </button>
    <input
            type=\"number\"
            class=\"product-detailed__btn-qty-input\"
            name=\"quantity\"
            value=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["btnChangeQtyValue"] ?? null), "html", null, true);
        echo "\"
            min=\"1\"
            max=\"";
        // line 17
        echo twig_escape_filter($this->env, ($context["btnMaxQtyValue"] ?? null), "html", null, true);
        echo "\"
            aria-label=\"Input quantity\"
            ";
        // line 19
        if (($context["btnChangeQtyAjax"] ?? null)) {
            echo " data-ajax=\"updateTotal\" ";
        }
        echo ">
    <button
            class=\"btn btn-outline-secondary border-left-0 border btn_bg-white product-detailed__btn-qty-change\"
            data-qty=\"plus\"
            ";
        // line 23
        if (($context["btnChangeQtyAjax"] ?? null)) {
            echo " data-ajax=\"updateTotal\" ";
        }
        // line 24
        echo "            ";
        if ((($context["btnChangeQtyValue"] ?? null) >= ($context["btnMaxQtyValue"] ?? null))) {
            echo "disabled";
        }
        // line 25
        echo "            aria-label=\"Decrease quantity\"
            type=\"button\">
        <i class=\"fa fa-plus\"></i>
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
        return array (  94 => 25,  89 => 24,  85 => 23,  76 => 19,  71 => 17,  66 => 15,  56 => 7,  51 => 6,  47 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"input-group product-detailed__btn-qty {% if btnProductPage %} mb-3 {% endif %}\">
    <button
            class=\"btn btn-outline-secondary border-right-0 border btn_bg-white product-detailed__btn-qty-change\"
            data-qty=\"minus\"
            {% if btnChangeQtyAjax %} data-ajax=\"updateTotal\" {% endif %}
            {% if btnChangeQtyValue == 1 %}disabled{% endif %}
            aria-label=\"Increase quantity\"
            type=\"button\">
        <i class=\"fa fa-minus\"></i>
    </button>
    <input
            type=\"number\"
            class=\"product-detailed__btn-qty-input\"
            name=\"quantity\"
            value=\"{{ btnChangeQtyValue }}\"
            min=\"1\"
            max=\"{{ btnMaxQtyValue }}\"
            aria-label=\"Input quantity\"
            {% if btnChangeQtyAjax %} data-ajax=\"updateTotal\" {% endif %}>
    <button
            class=\"btn btn-outline-secondary border-left-0 border btn_bg-white product-detailed__btn-qty-change\"
            data-qty=\"plus\"
            {% if btnChangeQtyAjax %} data-ajax=\"updateTotal\" {% endif %}
            {% if btnChangeQtyValue >= btnMaxQtyValue %}disabled{% endif %}
            aria-label=\"Decrease quantity\"
            type=\"button\">
        <i class=\"fa fa-plus\"></i>
    </button>
</div>", "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/form/button-change-quantity/button-change-quantity.htm", "");
    }
}
