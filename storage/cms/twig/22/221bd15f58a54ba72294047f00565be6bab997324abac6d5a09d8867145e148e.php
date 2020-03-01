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

/* D:\OSPanel\domains\october/themes/lovata-bootstrap-shopaholic/pages/magazin.htm */
class __TwigTemplate_79ad7a5352d3ae99da34c3cca91731fcafd5a1314703c32474ea6301d40723d9 extends \Twig\Template
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
        // line 2
        echo "
<div class=\"storePage\">
      <div class=\"container\">
        <div class=\"storePage__flex\">
          <section class=\"category\">
            <div class=\"category__wrap\">
              <ul>
                <li class=\"category__title\">
                  <h3>Категории</h3>
                </li>
";
        // line 12
        $context["obCategoryList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["CategoryList"] ?? null), "make", [], "method", false, false, false, 12), "tree", [], "method", false, false, false, 12);
        // line 13
        if (twig_get_attribute($this->env, $this->source, ($context["obCategoryList"] ?? null), "isNotEmpty", [], "method", false, false, false, 13)) {
            // line 14
            echo " 
        ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["obCategoryList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["obCategory"]) {
                if ((twig_get_attribute($this->env, $this->source, $context["obCategory"], "product_count", [], "any", false, false, false, 15) > 0)) {
                    // line 16
                    echo "        
            <li class=\"category__list\" data-id=\"";
                    // line 17
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obCategory"], "id", [], "any", false, false, false, 17), "html", null, true);
                    echo "\">
            <a class=\"category__link\" href=\"";
                    // line 18
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obCategory"], "getPageUrl", [0 => "category-page"], "method", false, false, false, 18), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obCategory"], "name", [], "any", false, false, false, 18), "html", null, true);
                    echo "</a>
                ";
                    // line 19
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obCategory"], "children", [], "any", false, false, false, 19), "isNotEmpty", [], "method", false, false, false, 19)) {
                        // line 20
                        echo "                    <ul class=\"category-child-menu-wrapper\">
                        ";
                        // line 21
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["obCategory"], "children", [], "any", false, false, false, 21));
                        foreach ($context['_seq'] as $context["_key"] => $context["obChildCategory"]) {
                            if ((twig_get_attribute($this->env, $this->source, $context["obCategory"], "product_count", [], "any", false, false, false, 21) > 0)) {
                                // line 22
                                echo "                            <li>";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obChildCategory"], "name", [], "any", false, false, false, 22), "html", null, true);
                                echo "</li>
                        ";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obChildCategory'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 24
                        echo "                    </ul>
                ";
                    }
                    // line 26
                    echo "            </li>
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obCategory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "  
";
        }
        // line 30
        echo "              </ul>
            </div>
            
          </section>
          <section class=\"store\">
            <div class=\"store__wrap\">
              <div class=\"store__head\">
                <h2>Все товары</h2>
                ";
        // line 38
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['obActiveCategory'] = ($context["obActiveCategory"] ?? null)        ;
        $context['__cms_partial_params']['label'] = "magazin"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product/catalog-panel/catalog-panel"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 39
        echo "              </div>
<div class=\"_ajax_catalog_wrapper\">

";
        // line 42
        $context["obCategory"] = twig_get_attribute($this->env, $this->source, ($context["CategoryPage"] ?? null), "get", [], "method", false, false, false, 42);
        // line 43
        echo "
";
        // line 44
        $context["obProductList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ProductList"] ?? null), "make", [], "method", false, false, false, 44), "sort", [0 => twig_get_attribute($this->env, $this->source, ($context["ProductList"] ?? null), "getSorting", [], "method", false, false, false, 44)], "method", false, false, false, 44), "active", [], "method", false, false, false, 44);
        // line 45
        echo "

";
        // line 47
        if (twig_get_attribute($this->env, $this->source, ($context["obProductList"] ?? null), "isNotEmpty", [], "method", false, false, false, 47)) {
            // line 48
            echo "<div class=\"store__products\">
";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["obProductList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["obProduct"]) {
                // line 50
                echo "

                <div class=\"products__product store__product\">

                  <a href=\"";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obProduct"], "getPageUrl", [0 => "product-page"], "method", false, false, false, 54), "html", null, true);
                echo "\">
                    <div class=\"products__photo newproduct__photo\">
                      <span class=\"icon-eye products__icon\"></span>
                      <img src=\"";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProduct"], "preview_image", [], "any", false, false, false, 57), "path", [], "any", false, false, false, 57), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProduct"], "preview_image", [], "any", false, false, false, 57), "description", [], "any", false, false, false, 57), "html", null, true);
                echo "\">
                    </div>
                    <span class=\"products__name\">";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obProduct"], "name", [], "any", false, false, false, 59), "html", null, true);
                echo "</span>
                  </a>
                  ";
                // line 61
                $context["obOffer"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProduct"], "offer", [], "any", false, false, false, 61), "first", [], "method", false, false, false, 61);
                // line 62
                echo "                  
                    ";
                // line 63
                if (twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "isNotEmpty", [], "method", false, false, false, 63)) {
                    echo "  
                      <span class=\"products__price\">";
                    // line 64
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "price", [], "any", false, false, false, 64), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "currency", [], "any", false, false, false, 64), "html", null, true);
                    echo "</span>
                    ";
                }
                // line 66
                echo "                  
                  <form class=\"mb-0\">
                <input type=\"hidden\" name=\"offer_id\" value=\"";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "id", [], "any", false, false, false, 68), "html", null, true);
                echo "\">
                <input type=\"hidden\" name=\"quantity\" value=\"1\">
                ";
                // line 70
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['btnAddClasses'] = "btn-sm"                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("form/button-add-to-cart/button-add-to-cart"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 71
                echo "            </form>
                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obProduct'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "              </div>
            
               ";
        }
        // line 76
        echo " 
            
              </div>
            </div>
            </div>
          </section>
        </div>
      </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/pages/magazin.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 76,  213 => 74,  205 => 71,  200 => 70,  195 => 68,  191 => 66,  184 => 64,  180 => 63,  177 => 62,  175 => 61,  170 => 59,  163 => 57,  157 => 54,  151 => 50,  147 => 49,  144 => 48,  142 => 47,  138 => 45,  136 => 44,  133 => 43,  131 => 42,  126 => 39,  120 => 38,  110 => 30,  106 => 28,  98 => 26,  94 => 24,  84 => 22,  79 => 21,  76 => 20,  74 => 19,  68 => 18,  64 => 17,  61 => 16,  56 => 15,  53 => 14,  51 => 13,  49 => 12,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var obActiveCategory \\Lovata\\Shopaholic\\Classes\\Item\\CategoryItem #}

<div class=\"storePage\">
      <div class=\"container\">
        <div class=\"storePage__flex\">
          <section class=\"category\">
            <div class=\"category__wrap\">
              <ul>
                <li class=\"category__title\">
                  <h3>Категории</h3>
                </li>
{% set obCategoryList = CategoryList.make().tree() %}
{% if obCategoryList.isNotEmpty() %}
 
        {% for obCategory in obCategoryList if obCategory.product_count > 0 %}
        
            <li class=\"category__list\" data-id=\"{{ obCategory.id }}\">
            <a class=\"category__link\" href=\"{{ obCategory.getPageUrl('category-page') }}\">{{ obCategory.name }}</a>
                {% if obCategory.children.isNotEmpty() %}
                    <ul class=\"category-child-menu-wrapper\">
                        {% for obChildCategory in obCategory.children if obCategory.product_count > 0 %}
                            <li>{{ obChildCategory.name }}</li>
                        {% endfor %}
                    </ul>
                {% endif %}
            </li>
        {% endfor %}
  
{% endif %}
              </ul>
            </div>
            
          </section>
          <section class=\"store\">
            <div class=\"store__wrap\">
              <div class=\"store__head\">
                <h2>Все товары</h2>
                {% partial 'product/catalog-panel/catalog-panel' obActiveCategory=obActiveCategory label='magazin' %}
              </div>
<div class=\"_ajax_catalog_wrapper\">

{% set obCategory = CategoryPage.get() %}

{% set obProductList = ProductList.make().sort(ProductList.getSorting()).active() %}


{% if obProductList.isNotEmpty() %}
<div class=\"store__products\">
{% for obProduct in obProductList %}


                <div class=\"products__product store__product\">

                  <a href=\"{{ obProduct.getPageUrl('product-page') }}\">
                    <div class=\"products__photo newproduct__photo\">
                      <span class=\"icon-eye products__icon\"></span>
                      <img src=\"{{ obProduct.preview_image.path }}\" alt=\"{{ obProduct.preview_image.description }}\">
                    </div>
                    <span class=\"products__name\">{{ obProduct.name }}</span>
                  </a>
                  {% set obOffer = obProduct.offer.first() %}
                  
                    {% if obOffer.isNotEmpty()%}  
                      <span class=\"products__price\">{{ obOffer.price }} {{ obOffer.currency }}</span>
                    {% endif %}
                  
                  <form class=\"mb-0\">
                <input type=\"hidden\" name=\"offer_id\" value=\"{{ obOffer.id }}\">
                <input type=\"hidden\" name=\"quantity\" value=\"1\">
                {% partial 'form/button-add-to-cart/button-add-to-cart' btnAddClasses='btn-sm' %}
            </form>
                </div>
                {% endfor %}
              </div>
            
               {% endif %} 
            
              </div>
            </div>
            </div>
          </section>
        </div>
      </div>
    </div>", "D:\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/pages/magazin.htm", "");
    }
}
