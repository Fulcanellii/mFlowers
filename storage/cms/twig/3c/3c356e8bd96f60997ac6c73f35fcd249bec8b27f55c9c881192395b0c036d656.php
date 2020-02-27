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
<form class=\"mb-lg-0\">
    <div class=\"form-group sorting mb-0\">
        <select class=\"form-control sorting__select\" name=\"sorting\" aria-label=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
        echo "\">
            <option value=\"new\" ";
        // line 6
        if ((($context["sSortig"] ?? null) == "new")) {
            echo "selected";
        }
        echo ">New</option>
            <option value=\"price|asc\" ";
        // line 7
        if ((($context["sSortig"] ?? null) == "price|asc")) {
            echo "selected";
        }
        echo ">Low price first</option>
            <option value=\"price|desc\" ";
        // line 8
        if ((($context["sSortig"] ?? null) == "price|desc")) {
            echo "selected";
        }
        echo ">High price first</option>
        </select>
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
        return array (  60 => 8,  54 => 7,  48 => 6,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set sSortig = ProductList.getSorting() %}

<form class=\"mb-lg-0\">
    <div class=\"form-group sorting mb-0\">
        <select class=\"form-control sorting__select\" name=\"sorting\" aria-label=\"{{ label }}\">
            <option value=\"new\" {% if sSortig == 'new' %}selected{% endif %}>New</option>
            <option value=\"price|asc\" {% if sSortig == 'price|asc' %}selected{% endif %}>Low price first</option>
            <option value=\"price|desc\" {% if sSortig == 'price|desc' %}selected{% endif %}>High price first</option>
        </select>
    </div>
</form>", "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/product/product-sorting/product-sorting.htm", "");
    }
}
