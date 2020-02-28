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
<section class=\"category\">
    <div class=\"container\">
        <div class=\"row justify-content-lg-between\">
            <div class=\"col-lg-6 navbar navbar-expand-lg navbar-dark bg-dark\">
                ";
        // line 16
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obMainCategory"] ?? null), "children", [], "any", false, false, false, 16), "isNotEmpty", [], "method", false, false, false, 16)) {
            // line 17
            echo "                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#categoryNav\" aria-controls=\"categoryNav\"
                        aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon text-light\"></span>
                </button>
                <div class=\"navbar-collapse collapse\" id=\"categoryNav\">
                    <ul class=\"category__list navbar-nav\">
                        ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["obMainCategory"] ?? null), "children", [], "any", false, false, false, 23));
            foreach ($context['_seq'] as $context["_key"] => $context["obCategory"]) {
                // line 24
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["obCategory"], "id", [], "any", false, false, false, 24) != twig_get_attribute($this->env, $this->source, ($context["obActiveCategory"] ?? null), "id", [], "any", false, false, false, 24))) {
                    // line 25
                    echo "                                <li class=\"category__item nav-item mr-2\">
                                    <a href=\"";
                    // line 26
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obCategory"], "getPageUrl", [0 => "catalog"], "method", false, false, false, 26), "html", null, true);
                    echo "\" class=\"category__link nav-link\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obCategory"], "name", [], "any", false, false, false, 26), "html", null, true);
                    echo "</a>
                                </li>
                            ";
                } else {
                    // line 29
                    echo "                                <li class=\"category__item nav-item mr-2 active category__item_active nav-link font-weight-bold\">
                                    ";
                    // line 30
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obCategory"], "name", [], "any", false, false, false, 30), "html", null, true);
                    echo "
                                </li>
                            ";
                }
                // line 33
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obCategory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                    </ul>
                </div>
                ";
        }
        // line 37
        echo "            </div>
            <div class=\"col-auto col-md-6 col-lg-auto sorting__wrapper\">
                ";
        // line 39
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product/product-sorting/product-sorting"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 40
        echo "            </div>
        </div>
    </div>
</section>";
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
        return array (  118 => 40,  114 => 39,  110 => 37,  105 => 34,  99 => 33,  93 => 30,  90 => 29,  82 => 26,  79 => 25,  76 => 24,  72 => 23,  64 => 17,  62 => 16,  55 => 11,  51 => 9,  47 => 7,  45 => 6,  42 => 5,  40 => 4,  37 => 3,);
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

<section class=\"category\">
    <div class=\"container\">
        <div class=\"row justify-content-lg-between\">
            <div class=\"col-lg-6 navbar navbar-expand-lg navbar-dark bg-dark\">
                {% if obMainCategory.children.isNotEmpty() %}
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#categoryNav\" aria-controls=\"categoryNav\"
                        aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon text-light\"></span>
                </button>
                <div class=\"navbar-collapse collapse\" id=\"categoryNav\">
                    <ul class=\"category__list navbar-nav\">
                        {% for obCategory in obMainCategory.children %}
                            {% if obCategory.id != obActiveCategory.id %}
                                <li class=\"category__item nav-item mr-2\">
                                    <a href=\"{{ obCategory.getPageUrl('catalog') }}\" class=\"category__link nav-link\">{{ obCategory.name }}</a>
                                </li>
                            {% else %}
                                <li class=\"category__item nav-item mr-2 active category__item_active nav-link font-weight-bold\">
                                    {{ obCategory.name }}
                                </li>
                            {% endif %}
                        {% endfor %}
                    </ul>
                </div>
                {% endif %}
            </div>
            <div class=\"col-auto col-md-6 col-lg-auto sorting__wrapper\">
                {% partial 'product/product-sorting/product-sorting' %}
            </div>
        </div>
    </div>
</section>", "D:\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/product/catalog-panel/catalog-panel.htm", "");
    }
}
