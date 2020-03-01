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

/* D:\open_server_5_3_5_basic_premium_ultimate\OSPanel\domains\october/themes/lovata-bootstrap-shopaholic/pages/magazin.htm */
class __TwigTemplate_361bced93ee2e3342f19eaef5925a1090b57e636a9a7aacd032d5a13d2efb882 extends \Twig\Template
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
        // line 10
        $context["obCategoryList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["CategoryList"] ?? null), "make", [], "method", false, false, false, 10), "tree", [], "method", false, false, false, 10);
        // line 11
        if (twig_get_attribute($this->env, $this->source, ($context["obCategoryList"] ?? null), "isNotEmpty", [], "method", false, false, false, 11)) {
            // line 12
            echo " 
        ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["obCategoryList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["obCategory"]) {
                if ((twig_get_attribute($this->env, $this->source, $context["obCategory"], "product_count", [], "any", false, false, false, 13) > 0)) {
                    // line 14
                    echo "        
            <li class=\"category__list\" data-id=\"";
                    // line 15
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obCategory"], "id", [], "any", false, false, false, 15), "html", null, true);
                    echo "\">
            <a class=\"category__link\" href=\"";
                    // line 16
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obCategory"], "slug", [], "any", false, false, false, 16), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obCategory"], "name", [], "any", false, false, false, 16), "html", null, true);
                    echo "</a>
                ";
                    // line 17
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obCategory"], "children", [], "any", false, false, false, 17), "isNotEmpty", [], "method", false, false, false, 17)) {
                        // line 18
                        echo "                    <ul class=\"category-child-menu-wrapper\">
                        ";
                        // line 19
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["obCategory"], "children", [], "any", false, false, false, 19));
                        foreach ($context['_seq'] as $context["_key"] => $context["obChildCategory"]) {
                            if ((twig_get_attribute($this->env, $this->source, $context["obChildCategory"], "product_count", [], "any", false, false, false, 19) > 0)) {
                                // line 20
                                echo "                            <li>";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obChildCategory"], "name", [], "any", false, false, false, 20), "html", null, true);
                                echo "</li>
                        ";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obChildCategory'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 22
                        echo "                    </ul>
                ";
                    }
                    // line 24
                    echo "            </li>
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obCategory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "  
";
        }
        // line 28
        echo "              </ul>
            </div>
            
          </section>
          <section class=\"store\">
            <div class=\"store__wrap\">
              <div class=\"store__head\">
                <h2>день рождения</h2>
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
        // line 58
        $context["obCategory"] = twig_get_attribute($this->env, $this->source, ($context["CategoryPage"] ?? null), "get", [], "method", false, false, false, 58);
        // line 59
        echo "
";
        // line 60
        $context["obProductList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ProductList"] ?? null), "make", [], "method", false, false, false, 60), "sort", [0 => twig_get_attribute($this->env, $this->source, ($context["ProductList"] ?? null), "getSorting", [], "method", false, false, false, 60)], "method", false, false, false, 60), "active", [], "method", false, false, false, 60);
        // line 61
        echo "

";
        // line 63
        if (twig_get_attribute($this->env, $this->source, ($context["obProductList"] ?? null), "isNotEmpty", [], "method", false, false, false, 63)) {
            // line 64
            echo "<div class=\"store__products\">
";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["obProductList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["obProduct"]) {
                // line 66
                echo "

                <div class=\"products__product store__product\">
                  <a href=\"";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obProduct"], "getPageUrl", [0 => "product-page"], "method", false, false, false, 69), "html", null, true);
                echo "\">
                    <div class=\"products__photo newproduct__photo\">
                      <span class=\"icon-eye products__icon\"></span>
                      <img src=\"";
                // line 72
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProduct"], "preview_image", [], "any", false, false, false, 72), "path", [], "any", false, false, false, 72), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProduct"], "preview_image", [], "any", false, false, false, 72), "description", [], "any", false, false, false, 72), "html", null, true);
                echo "\">
                    </div>
                    <span class=\"products__name\">";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obProduct"], "name", [], "any", false, false, false, 74), "html", null, true);
                echo "</span>
                  </a>
                  ";
                // line 76
                $context["obOffer"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProduct"], "offer", [], "any", false, false, false, 76), "first", [], "method", false, false, false, 76);
                // line 77
                echo "                  
                    ";
                // line 78
                if (twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "isNotEmpty", [], "method", false, false, false, 78)) {
                    echo "  
                      <span class=\"products__price\">";
                    // line 79
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "price", [], "any", false, false, false, 79), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "currency", [], "any", false, false, false, 79), "html", null, true);
                    echo "</span>
                    ";
                }
                // line 81
                echo "                  
                  <form class=\"mb-0\">
                <input type=\"hidden\" name=\"offer_id\" value=\"";
                // line 83
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "id", [], "any", false, false, false, 83), "html", null, true);
                echo "\">
                <input type=\"hidden\" name=\"quantity\" value=\"1\">
                ";
                // line 85
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['btnAddClasses'] = "btn-sm"                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("form/button-add-to-cart/button-add-to-cart"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 86
                echo "            </form>
                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obProduct'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "              </div>
            
               ";
        }
        // line 91
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
        return "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/pages/magazin.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 91,  222 => 89,  214 => 86,  209 => 85,  204 => 83,  200 => 81,  193 => 79,  189 => 78,  186 => 77,  184 => 76,  179 => 74,  172 => 72,  166 => 69,  161 => 66,  157 => 65,  154 => 64,  152 => 63,  148 => 61,  146 => 60,  143 => 59,  141 => 58,  109 => 28,  105 => 26,  97 => 24,  93 => 22,  83 => 20,  78 => 19,  75 => 18,  73 => 17,  67 => 16,  63 => 15,  60 => 14,  55 => 13,  52 => 12,  50 => 11,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"storePage\">
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
            <a class=\"category__link\" href=\"{{ obCategory.slug }}\">{{ obCategory.name }}</a>
                {% if obCategory.children.isNotEmpty() %}
                    <ul class=\"category-child-menu-wrapper\">
                        {% for obChildCategory in obCategory.children if obChildCategory.product_count > 0 %}
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
                <h2>день рождения</h2>
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
          </section>
        </div>
      </div>
    </div>", "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/pages/magazin.htm", "");
    }
}
