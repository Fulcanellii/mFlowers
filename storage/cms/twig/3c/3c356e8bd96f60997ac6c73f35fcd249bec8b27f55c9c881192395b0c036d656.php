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

/* D:\open_server_5_3_5_basic_premium_ultimate\OSPanel\domains\october/themes/lovata-bootstrap-shopaholic/partials/product/product-sorting/product-sorting.htm */
class __TwigTemplate_ab1d600528cdcaff5e101e8fafd9e9e9d1beab0c7ef4b712b00c009b294da10c extends \Twig\Template
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
        $context["sSortig"] = twig_get_attribute($this->env, $this->source, ($context["ProductList"] ?? null), "getSorting", [], "method", false, false, false, 1);
        // line 2
        echo "
<form class=\"store__sorting\">
\t<span>Сортировка по:</span>
    <div class=\"store__ul\">
    \t<div class=\"store__list\">
        <select class=\"form-control sorting__select\" name=\"sorting\" aria-label=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
        echo "\">
            <option class=\"store__list-li\" value=\"new\" ";
        // line 8
        if ((($context["sSortig"] ?? null) == "new")) {
            echo "selected";
        }
        echo ">Новые</option>
            <option class=\"store__list-li\" value=\"price|asc\" ";
        // line 9
        if ((($context["sSortig"] ?? null) == "price|asc")) {
            echo "selected";
        }
        echo ">По цене убывания</option>
            <option class=\"store__list-li\" value=\"price|desc\" ";
        // line 10
        if ((($context["sSortig"] ?? null) == "price|desc")) {
            echo "selected";
        }
        echo ">По цене возрастания</option>
        </select>
    \t</div>
    </div>
</form>";
    }

    public function getTemplateName()
    {
        return "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/product/product-sorting/product-sorting.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 10,  56 => 9,  50 => 8,  46 => 7,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set sSortig = ProductList.getSorting() %}

<form class=\"store__sorting\">
\t<span>Сортировка по:</span>
    <div class=\"store__ul\">
    \t<div class=\"store__list\">
        <select class=\"form-control sorting__select\" name=\"sorting\" aria-label=\"{{ label }}\">
            <option class=\"store__list-li\" value=\"new\" {% if sSortig == 'new' %}selected{% endif %}>Новые</option>
            <option class=\"store__list-li\" value=\"price|asc\" {% if sSortig == 'price|asc' %}selected{% endif %}>По цене убывания</option>
            <option class=\"store__list-li\" value=\"price|desc\" {% if sSortig == 'price|desc' %}selected{% endif %}>По цене возрастания</option>
        </select>
    \t</div>
    </div>
</form>", "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/product/product-sorting/product-sorting.htm", "");
    }
}
