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

/* D:\OSPanel\domains\october/themes/lovata-bootstrap-shopaholic/partials/order/order-complete/order-complete.htm */
class __TwigTemplate_91710412aa4ff07c71232996a12ed467b451b333011509b4597a2a3cf2c90cea extends \Twig\Template
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
        echo "<section class=\"container h-100 d-flex justify-content-center align-items-center flex-column\">
    <p class=\"text-center mb-5 order-complete__text\">Thank you!</p>
    <a class=\"btn btn-dark btn-lg\" href=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("index");
        echo "\" role=\"button\">back to the main page</a>
</section>";
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/order/order-complete/order-complete.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"container h-100 d-flex justify-content-center align-items-center flex-column\">
    <p class=\"text-center mb-5 order-complete__text\">Thank you!</p>
    <a class=\"btn btn-dark btn-lg\" href=\"{{ 'index'|page }}\" role=\"button\">back to the main page</a>
</section>", "D:\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/order/order-complete/order-complete.htm", "");
    }
}
