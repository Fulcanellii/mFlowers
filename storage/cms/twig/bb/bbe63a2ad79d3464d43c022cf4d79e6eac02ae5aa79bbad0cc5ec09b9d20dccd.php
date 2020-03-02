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

/* D:\open_server_5_3_5_basic_premium_ultimate\OSPanel\domains\october/themes/lovata-bootstrap-shopaholic/pages/category-page.htm */
class __TwigTemplate_32105208bd5d7378413c3b6db582b2bdb7e5a2edfde57fb8c136339b23184614 extends \Twig\Template
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
        $context["cat"] = twig_get_attribute($this->env, $this->source, ($context["CategoryPage"] ?? null), "get", [], "method", false, false, false, 1);
        // line 2
        echo "<div class=\"storePage\">
      <div class=\"container\">
        <div class=\"storePage__flex\">
          <section class=\"category\">
            <div class=\"category__wrap\">
              <ul>
                <li class=\"category__title\">
                  <h3>Категории</h3>
                </li>
";
        // line 11
        $context["obCategoryList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["CategoryList"] ?? null), "make", [], "method", false, false, false, 11), "tree", [], "method", false, false, false, 11);
        // line 12
        if (twig_get_attribute($this->env, $this->source, ($context["obCategoryList"] ?? null), "isNotEmpty", [], "method", false, false, false, 12)) {
            // line 13
            echo " 
        ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["obCategoryList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["obCategory"]) {
                if ((twig_get_attribute($this->env, $this->source, $context["obCategory"], "product_count", [], "any", false, false, false, 14) > 0)) {
                    // line 15
                    echo "        
            <li class=\"category__list\" data-id=\"";
                    // line 16
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obCategory"], "id", [], "any", false, false, false, 16), "html", null, true);
                    echo "\">
            
            ";
                    // line 18
                    if ((twig_get_attribute($this->env, $this->source, ($context["cat"] ?? null), "name", [], "any", false, false, false, 18) == twig_get_attribute($this->env, $this->source, $context["obCategory"], "name", [], "any", false, false, false, 18))) {
                        // line 19
                        echo "            <a class=\"category__link is-active\" href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obCategory"], "slug", [], "any", false, false, false, 19), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obCategory"], "name", [], "any", false, false, false, 19), "html", null, true);
                        echo "</a>
            ";
                    } else {
                        // line 21
                        echo "            <a class=\"category__link\" href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obCategory"], "slug", [], "any", false, false, false, 21), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obCategory"], "name", [], "any", false, false, false, 21), "html", null, true);
                        echo "</a>
            ";
                    }
                    // line 23
                    echo "                ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obCategory"], "children", [], "any", false, false, false, 23), "isNotEmpty", [], "method", false, false, false, 23)) {
                        // line 24
                        echo "                    <ul class=\"category-child-menu-wrapper\">
                        ";
                        // line 25
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["obCategory"], "children", [], "any", false, false, false, 25));
                        foreach ($context['_seq'] as $context["_key"] => $context["obChildCategory"]) {
                            if ((twig_get_attribute($this->env, $this->source, $context["obCategory"], "product_count", [], "any", false, false, false, 25) > 0)) {
                                // line 26
                                echo "                            <li>";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obChildCategory"], "name", [], "any", false, false, false, 26), "html", null, true);
                                echo "</li>
                        ";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obChildCategory'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 28
                        echo "                    </ul>
                ";
                    }
                    // line 30
                    echo "            </li>
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obCategory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "  
";
        }
        // line 34
        echo "              </ul>
            </div>
            
          </section>
          <section class=\"store\">
            <div class=\"store__wrap\">
              <div class=\"store__head\">
                <h2>";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cat"] ?? null), "name", [], "any", false, false, false, 41), "html", null, true);
        echo "</h2>
                <div class=\"store__sorting\">
                  <span>Сортировка по:</span>

                  <div class=\"store__ul\">
                    <div class=\"store__list\">
                      <span class=\"store__text\">По цене возрастания</span>
                      <div class=\"store__list-ul\">
                        <option value=\"#\" class=\"store__list-li\">По полулярности</option>
                        <option value=\"#\" class=\"store__list-li\">По цене убывания</option >
                        <option value=\"#\" class=\"store__list-li\">По цене возрастания</option>
                      </div>
                    </div>

                    <div class=\"store__drop\">
                      <span class=\"icon-download store__sorting-icon\"></span>
                    </div>
                  </div>

                </div>
              </div>


";
        // line 64
        $context["obProductList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ProductList"] ?? null), "make", [], "method", false, false, false, 64), "sort", [0 => twig_get_attribute($this->env, $this->source, ($context["ProductList"] ?? null), "getSorting", [], "method", false, false, false, 64)], "method", false, false, false, 64), "active", [], "method", false, false, false, 64), "category", [0 => twig_get_attribute($this->env, $this->source, ($context["cat"] ?? null), "id", [], "any", false, false, false, 64)], "method", false, false, false, 64);
        // line 65
        echo "

";
        // line 67
        if (twig_get_attribute($this->env, $this->source, ($context["obProductList"] ?? null), "isNotEmpty", [], "method", false, false, false, 67)) {
            // line 68
            echo "<div class=\"store__products\">
";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["obProductList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["obProduct"]) {
                // line 70
                echo "

                <div class=\"products__product store__product\">

                  <a href=\"";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obProduct"], "getPageUrl", [0 => "product-page"], "method", false, false, false, 74), "html", null, true);
                echo "\">
                    <div class=\"products__photo newproduct__photo\">
                      <span class=\"icon-eye products__icon\"></span>
                      <img src=\"";
                // line 77
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProduct"], "preview_image", [], "any", false, false, false, 77), "path", [], "any", false, false, false, 77), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProduct"], "preview_image", [], "any", false, false, false, 77), "description", [], "any", false, false, false, 77), "html", null, true);
                echo "\">
                    </div>
                    <span class=\"products__name\">";
                // line 79
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obProduct"], "name", [], "any", false, false, false, 79), "html", null, true);
                echo "</span>
                  </a>
                  ";
                // line 81
                $context["obOffer"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProduct"], "offer", [], "any", false, false, false, 81), "first", [], "method", false, false, false, 81);
                // line 82
                echo "                  
                    ";
                // line 83
                if (twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "isNotEmpty", [], "method", false, false, false, 83)) {
                    echo "  
                      <span class=\"products__price\">";
                    // line 84
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "price", [], "any", false, false, false, 84), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "currency", [], "any", false, false, false, 84), "html", null, true);
                    echo "</span>
                    ";
                }
                // line 86
                echo "                  
                  <form class=\"mb-0\">
                <input type=\"hidden\" name=\"offer_id\" value=\"";
                // line 88
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "id", [], "any", false, false, false, 88), "html", null, true);
                echo "\">
                <input type=\"hidden\" name=\"quantity\" value=\"1\">
                ";
                // line 90
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['btnAddClasses'] = "btn-sm"                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("form/button-add-to-cart/button-add-to-cart"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 91
                echo "            </form>
                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obProduct'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "              </div>
            
               ";
        }
        // line 96
        echo " 
            
              </div>

            </div>
          </section>
        </div>
      </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/pages/category-page.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 96,  237 => 94,  229 => 91,  224 => 90,  219 => 88,  215 => 86,  208 => 84,  204 => 83,  201 => 82,  199 => 81,  194 => 79,  187 => 77,  181 => 74,  175 => 70,  171 => 69,  168 => 68,  166 => 67,  162 => 65,  160 => 64,  134 => 41,  125 => 34,  121 => 32,  113 => 30,  109 => 28,  99 => 26,  94 => 25,  91 => 24,  88 => 23,  80 => 21,  72 => 19,  70 => 18,  65 => 16,  62 => 15,  57 => 14,  54 => 13,  52 => 12,  50 => 11,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set cat = CategoryPage.get() %}
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
            
            {% if cat.name == obCategory.name %}
            <a class=\"category__link is-active\" href=\"{{ obCategory.slug }}\">{{ obCategory.name }}</a>
            {% else %}
            <a class=\"category__link\" href=\"{{ obCategory.slug }}\">{{ obCategory.name }}</a>
            {% endif %}
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
                <h2>{{ cat.name }}</h2>
                <div class=\"store__sorting\">
                  <span>Сортировка по:</span>

                  <div class=\"store__ul\">
                    <div class=\"store__list\">
                      <span class=\"store__text\">По цене возрастания</span>
                      <div class=\"store__list-ul\">
                        <option value=\"#\" class=\"store__list-li\">По полулярности</option>
                        <option value=\"#\" class=\"store__list-li\">По цене убывания</option >
                        <option value=\"#\" class=\"store__list-li\">По цене возрастания</option>
                      </div>
                    </div>

                    <div class=\"store__drop\">
                      <span class=\"icon-download store__sorting-icon\"></span>
                    </div>
                  </div>

                </div>
              </div>


{% set obProductList = ProductList.make().sort(ProductList.getSorting()).active().category(cat.id) %}


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
          </section>
        </div>
      </div>
    </div>", "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/pages/category-page.htm", "");
    }
}
