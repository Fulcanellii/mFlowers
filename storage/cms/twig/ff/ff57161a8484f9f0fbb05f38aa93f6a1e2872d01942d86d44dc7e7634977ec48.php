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

/* D:\open_server_5_3_5_basic_premium_ultimate\OSPanel\domains\october/themes/lovata-bootstrap-shopaholic/partials/product/cart-link-header/cart-link-header.htm */
class __TwigTemplate_9910e9c96c648335e983195093af1474defad8a5475e79dd2c6b9891181e0bfa extends \Twig\Template
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
        if (($context["cart_is_available"] ?? null)) {
            // line 2
            echo "

<a href=\"";
            // line 4
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("checkout");
            echo "\" class=\"header__basket\">
\t<div class=\"icon-shopping-bag header__icon-shoping\"></div>
\t<div class=\"header__basket-info\">
\t\t<span class=\"header__bakcet-pieces\">";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "get", [], "method", false, false, false, 7), "count", [], "any", false, false, false, 7), "html", null, true);
            echo "</span>
        <span class=\"header__bakcet-name\">Корзина</span>
        <span class=\"header__bakcet-price\">/ ";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "get", [], "method", false, false, false, 9), "getTotalPrice", [], "method", false, false, false, 9), "html", null, true);
            echo " c</span>

\t</div>
</a>
";
        }
        // line 14
        echo "





<!-- <a href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("checkout");
        echo "\" class=\"header__cart\">
        <i class=\"fa fa-shopping-cart\"></i>Cart <span class=\"header__cart-badge\">";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "get", [], "method", false, false, false, 21), "count", [], "any", false, false, false, 21), "html", null, true);
        echo "</span>
    </a> -->";
    }

    public function getTemplateName()
    {
        return "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/product/cart-link-header/cart-link-header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 21,  70 => 20,  62 => 14,  54 => 9,  49 => 7,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if cart_is_available %}


<a href=\"{{ 'checkout'|page }}\" class=\"header__basket\">
\t<div class=\"icon-shopping-bag header__icon-shoping\"></div>
\t<div class=\"header__basket-info\">
\t\t<span class=\"header__bakcet-pieces\">{{ Cart.get().count }}</span>
        <span class=\"header__bakcet-name\">Корзина</span>
        <span class=\"header__bakcet-price\">/ {{ Cart.get().getTotalPrice() }} c</span>

\t</div>
</a>
{% endif %}






<!-- <a href=\"{{ 'checkout'|page }}\" class=\"header__cart\">
        <i class=\"fa fa-shopping-cart\"></i>Cart <span class=\"header__cart-badge\">{{ Cart.get().count }}</span>
    </a> -->", "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/product/cart-link-header/cart-link-header.htm", "");
    }
}
