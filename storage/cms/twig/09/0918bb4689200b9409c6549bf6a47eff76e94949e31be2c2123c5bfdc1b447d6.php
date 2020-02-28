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

/* D:\OSPanel\domains\october/themes/lovata-bootstrap-shopaholic/partials/form/button-add-to-cart/button-add-to-cart.htm */
class __TwigTemplate_7d838ccac4886632fa5ab4aa4de545aad66209bad1986fd7c52ade104a9f6da1 extends \Twig\Template
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
        echo "<button class=\"btn btn-add-to-cart btn-dark ";
        echo twig_escape_filter($this->env, ($context["btnAddClasses"] ?? null), "html", null, true);
        echo "\" type=\"button\" aria-label=\"Add to cart\" data-container=\"body\" data-toggle=\"popover\" data-placement=\"top\" data-content=\"\">
    <i class=\"fa fa-shopping-cart\"></i>Add to cart
</button>";
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/form/button-add-to-cart/button-add-to-cart.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<button class=\"btn btn-add-to-cart btn-dark {{ btnAddClasses }}\" type=\"button\" aria-label=\"Add to cart\" data-container=\"body\" data-toggle=\"popover\" data-placement=\"top\" data-content=\"\">
    <i class=\"fa fa-shopping-cart\"></i>Add to cart
</button>", "D:\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/form/button-add-to-cart/button-add-to-cart.htm", "");
    }
}
