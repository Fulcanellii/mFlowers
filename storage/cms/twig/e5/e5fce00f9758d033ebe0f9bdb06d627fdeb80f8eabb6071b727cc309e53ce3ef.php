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

/* D:\open_server_5_3_5_basic_premium_ultimate\OSPanel\domains\october/themes/lovata-bootstrap-shopaholic/partials/category/category-product-column/category-product-column.htm */
class __TwigTemplate_2371710fb2bb4c9ed16dbcbecb911d5cb651dd77125e5b72f666705761f12c49 extends \Twig\Template
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
        // line 6
        echo "
";
        // line 7
        if (twig_get_attribute($this->env, $this->source, ($context["obCategoryList"] ?? null), "isNotEmpty", [], "method", false, false, false, 7)) {
            // line 8
            echo "    <section class=\"category-product-column container\">
        <div class=\"row\">
            ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["obCategoryList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["obCategory"]) {
                // line 11
                echo "                ";
                $context["arProductList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ProductList"] ?? null), "make", [], "method", false, false, false, 11), "active", [], "method", false, false, false, 11), "category", [0 => twig_get_attribute($this->env, $this->source, $context["obCategory"], "id", [], "any", false, false, false, 11), 1 => true], "method", false, false, false, 11), "random", [0 => 3], "method", false, false, false, 11);
                // line 12
                echo "                <div class=\"col-lg-4 col-md-12 col-12 pt-5\">
                    <hr>
                    <h4 class=\"category-product-column__title text-center font-weight-bold text-dark\">";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obCategory"], "name", [], "any", false, false, false, 14), "html", null, true);
                echo "</h4>
                    <hr>
                    <ul class=\"category-product-column__list\">
                        ";
                // line 17
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["arProductList"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["obProduct"]) {
                    // line 18
                    echo "                            ";
                    $context["obOffer"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProduct"], "offer", [], "any", false, false, false, 18), "first", [], "method", false, false, false, 18);
                    // line 19
                    echo "                            <li class=\"row mt-5 py-2 mb-4 align-items-center flex-row category-product-column__list-item\">
                                <div class=\"col-5\">
                                    <a href=\"";
                    // line 21
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obProduct"], "getPageUrl", [0 => "catalog"], "method", false, false, false, 21), "html", null, true);
                    echo "\" class=\"category-product-column__image-wrap\" aria-label=\"Read more about ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obProduct"], "name", [], "any", false, false, false, 21), "html", null, true);
                    echo "\">
                                        <img src=\"";
                    // line 22
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProduct"], "preview_image", [], "any", false, false, false, 22), "getThumb", [0 => 200, 1 => 200, 2 => ["quality" => 80]], "method", false, false, false, 22), "html", null, true);
                    echo "\" class=\"category-product-column__image img-fluid\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProduct"], "preview_image", [], "any", false, false, false, 22), "description", [], "any", false, false, false, 22), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProduct"], "preview_image", [], "any", false, false, false, 22), "title", [], "any", false, false, false, 22), "html", null, true);
                    echo "\" loading=\"lazy\">
                                    </a>
                                </div>
                                <div class=\"category-product-column__list-item-info col-7 d-flex flex-column justify-content-between align-self-stretch\">
                                    <a href=\"";
                    // line 26
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obProduct"], "getPageUrl", [0 => "catalog"], "method", false, false, false, 26), "html", null, true);
                    echo "\" class=\"category-product-column__title-link text-dark\">
                                        <b class=\"category-product-column__title\">
                                            ";
                    // line 28
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obProduct"], "name", [], "any", false, false, false, 28), "html", null, true);
                    echo "
                                        </b>
                                    </a>
                                    <div class=\"category-product-column__price-bar d-flex flex-column mt-auto\">
                                        <span class=\"category-product-column__current-price pr-1 font-weight-bold ";
                    // line 32
                    echo (((twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "old_price_value", [], "any", false, false, false, 32) > 0)) ? ("text-danger") : (""));
                    echo "\">
                                            ";
                    // line 33
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "price", [], "any", false, false, false, 33), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "currency", [], "any", false, false, false, 33), "html", null, true);
                    echo "
                                        </span>
                                        ";
                    // line 35
                    if ((twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "old_price_value", [], "any", false, false, false, 35) > 0)) {
                        // line 36
                        echo "                                        <span class=\"category-product-column__old-price text-muted pr-1\">
                                            <s>";
                        // line 37
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "old_price_value", [], "any", false, false, false, 37), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "currency", [], "any", false, false, false, 37), "html", null, true);
                        echo "</s>
                                        </span>
                                        ";
                    }
                    // line 40
                    echo "                                    </div>
                                </div>
                            </li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obProduct'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 44
                echo "                    </ul>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obCategory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "        </div>
    </section>
";
        }
    }

    public function getTemplateName()
    {
        return "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/category/category-product-column/category-product-column.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 47,  136 => 44,  127 => 40,  119 => 37,  116 => 36,  114 => 35,  107 => 33,  103 => 32,  96 => 28,  91 => 26,  80 => 22,  74 => 21,  70 => 19,  67 => 18,  63 => 17,  57 => 14,  53 => 12,  50 => 11,  46 => 10,  42 => 8,  40 => 7,  37 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("{#
    @var obCategory \\Lovata\\Shopaholic\\Classes\\Item\\CategoryItem
    @var obProduct \\Lovata\\Shopaholic\\Classes\\Item\\ProductItem
    @var obOffer \\Lovata\\Shopaholic\\Classes\\Item\\OfferItem
#}

{% if obCategoryList.isNotEmpty() %}
    <section class=\"category-product-column container\">
        <div class=\"row\">
            {% for obCategory in obCategoryList %}
                {% set arProductList = ProductList.make().active().category(obCategory.id, true).random(3) %}
                <div class=\"col-lg-4 col-md-12 col-12 pt-5\">
                    <hr>
                    <h4 class=\"category-product-column__title text-center font-weight-bold text-dark\">{{ obCategory.name }}</h4>
                    <hr>
                    <ul class=\"category-product-column__list\">
                        {% for obProduct in arProductList %}
                            {% set obOffer = obProduct.offer.first() %}
                            <li class=\"row mt-5 py-2 mb-4 align-items-center flex-row category-product-column__list-item\">
                                <div class=\"col-5\">
                                    <a href=\"{{ obProduct.getPageUrl('catalog') }}\" class=\"category-product-column__image-wrap\" aria-label=\"Read more about {{ obProduct.name }}\">
                                        <img src=\"{{ obProduct.preview_image.getThumb(200, 200, {'quality': 80}) }}\" class=\"category-product-column__image img-fluid\" alt=\"{{ obProduct.preview_image.description }}\" title=\"{{ obProduct.preview_image.title }}\" loading=\"lazy\">
                                    </a>
                                </div>
                                <div class=\"category-product-column__list-item-info col-7 d-flex flex-column justify-content-between align-self-stretch\">
                                    <a href=\"{{ obProduct.getPageUrl('catalog') }}\" class=\"category-product-column__title-link text-dark\">
                                        <b class=\"category-product-column__title\">
                                            {{ obProduct.name }}
                                        </b>
                                    </a>
                                    <div class=\"category-product-column__price-bar d-flex flex-column mt-auto\">
                                        <span class=\"category-product-column__current-price pr-1 font-weight-bold {{ obOffer.old_price_value > 0 ? 'text-danger' : '' }}\">
                                            {{ obOffer.price }} {{ obOffer.currency }}
                                        </span>
                                        {% if obOffer.old_price_value > 0 %}
                                        <span class=\"category-product-column__old-price text-muted pr-1\">
                                            <s>{{ obOffer.old_price_value }} {{ obOffer.currency }}</s>
                                        </span>
                                        {% endif %}
                                    </div>
                                </div>
                            </li>
                        {% endfor %}
                    </ul>
                </div>
            {% endfor %}
        </div>
    </section>
{% endif %}", "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/category/category-product-column/category-product-column.htm", "");
    }
}
