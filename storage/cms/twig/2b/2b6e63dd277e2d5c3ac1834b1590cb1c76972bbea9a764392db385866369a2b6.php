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

/* D:\OSPanel\domains\october/themes/lovata-bootstrap-shopaholic/partials/product/catalog-panel/catalog-panel.htm */
class __TwigTemplate_8a113fb96589a9304ab2d9f1cd3d91ce29e4b95ed467e44a1a87118e399dfc9c extends \Twig\Template
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
        // line 3
        echo "
";
        // line 4
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obActiveCategory"] ?? null), "children", [], "any", false, false, false, 4), "isNotEmpty", [], "method", false, false, false, 4)) {
            // line 5
            echo "    ";
            $context["obMainCategory"] = ($context["obActiveCategory"] ?? null);
        } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 6
($context["obActiveCategory"] ?? null), "parent", [], "any", false, false, false, 6), "isNotEmpty", [], "method", false, false, false, 6)) {
            // line 7
            echo "    ";
            $context["obMainCategory"] = twig_get_attribute($this->env, $this->source, ($context["obActiveCategory"] ?? null), "parent", [], "any", false, false, false, 7);
        } else {
            // line 9
            echo "    ";
            $context["obMainCategory"] = ($context["obActiveCategory"] ?? null);
        }
        // line 11
        echo "
";
        // line 12
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product/product-sorting/product-sorting"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/product/catalog-panel/catalog-panel.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 12,  55 => 11,  51 => 9,  47 => 7,  45 => 6,  42 => 5,  40 => 4,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var obActiveCategory \\Lovata\\Shopaholic\\Classes\\Item\\CategoryItem #}
{# @var obMainCategory \\Lovata\\Shopaholic\\Classes\\Item\\CategoryItem #}

{% if obActiveCategory.children.isNotEmpty() %}
    {% set obMainCategory = obActiveCategory %}
{% elseif obActiveCategory.parent.isNotEmpty() %}
    {% set obMainCategory = obActiveCategory.parent %}
{% else %}
    {% set obMainCategory = obActiveCategory %}
{% endif %}

{% partial 'product/product-sorting/product-sorting' %}", "D:\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/product/catalog-panel/catalog-panel.htm", "");
    }
}
