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
            echo "<a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("checkout");
            echo "\" class=\"header__basket\">
\t<div class=\"icon-shopping-bag header__icon-shoping\"></div>
\t<div class=\"header__basket-info\">
\t\t<span class=\"header__bakcet-name\">Корзина</span>
\t\t
\t\t<span class=\"header__bakcet-pieces\">";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "get", [], "method", false, false, false, 7), "count", [], "any", false, false, false, 7), "html", null, true);
            echo "</span>
\t</div>
</a>
";
        }
        // line 11
        echo "





<!-- <a href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("checkout");
        echo "\" class=\"header__cart\">
        <i class=\"fa fa-shopping-cart\"></i>Cart <span class=\"header__cart-badge\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "get", [], "method", false, false, false, 18), "count", [], "any", false, false, false, 18), "html", null, true);
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
        return array (  67 => 18,  63 => 17,  55 => 11,  48 => 7,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if cart_is_available %}
<a href=\"{{ 'checkout'|page }}\" class=\"header__basket\">
\t<div class=\"icon-shopping-bag header__icon-shoping\"></div>
\t<div class=\"header__basket-info\">
\t\t<span class=\"header__bakcet-name\">Корзина</span>
\t\t
\t\t<span class=\"header__bakcet-pieces\">{{ Cart.get().count }}</span>
\t</div>
</a>
{% endif %}






<!-- <a href=\"{{ 'checkout'|page }}\" class=\"header__cart\">
        <i class=\"fa fa-shopping-cart\"></i>Cart <span class=\"header__cart-badge\">{{ Cart.get().count }}</span>
    </a> -->", "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/product/cart-link-header/cart-link-header.htm", "");
    }
}
