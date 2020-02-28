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
                // line 70
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obProduct"], "getPageUrl", [0 => "catalog"], "method", false, false, false, 70), "html", null, true);
                echo "\">
                    <div class=\"products__photo newproduct__photo\">
                      <span class=\"icon-eye products__icon\"></span>
                      <img src=\"";
                // line 73
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProduct"], "preview_image", [], "any", false, false, false, 73), "path", [], "any", false, false, false, 73), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProduct"], "preview_image", [], "any", false, false, false, 73), "description", [], "any", false, false, false, 73), "html", null, true);
                echo "\">
                    </div>
                    <span class=\"products__name\">";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obProduct"], "name", [], "any", false, false, false, 75), "html", null, true);
                echo "</span>
                  </a>
                  ";
                // line 77
                $context["obOffer"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProduct"], "offer", [], "any", false, false, false, 77), "first", [], "method", false, false, false, 77);
                // line 78
                echo "                  
                    ";
                // line 79
                if (twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "isNotEmpty", [], "method", false, false, false, 79)) {
                    echo "  
                      <span class=\"products__price\">";
                    // line 80
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "price", [], "any", false, false, false, 80), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "currency", [], "any", false, false, false, 80), "html", null, true);
                    echo "</span>
                    ";
                }
                // line 82
                echo "                  
                  <form class=\"mb-0\">
                <input type=\"hidden\" name=\"offer_id\" value=\"";
                // line 84
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "id", [], "any", false, false, false, 84), "html", null, true);
                echo "\">
                <input type=\"hidden\" name=\"quantity\" value=\"1\">
                ";
                // line 86
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['btnAddClasses'] = "btn-sm"                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("form/button-add-to-cart/button-add-to-cart"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 87
                echo "            </form>
                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obProduct'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "              </div>
            
               ";
        }
        // line 92
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
        return "D:\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/pages/magazin.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 92,  223 => 90,  215 => 87,  210 => 86,  205 => 84,  201 => 82,  194 => 80,  190 => 79,  187 => 78,  185 => 77,  180 => 75,  173 => 73,  167 => 70,  161 => 66,  157 => 65,  154 => 64,  152 => 63,  148 => 61,  146 => 60,  143 => 59,  141 => 58,  109 => 28,  105 => 26,  97 => 24,  93 => 22,  83 => 20,  78 => 19,  75 => 18,  73 => 17,  67 => 16,  63 => 15,  60 => 14,  55 => 13,  52 => 12,  50 => 11,  48 => 10,  37 => 1,);
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

                  <a href=\"{{ obProduct.getPageUrl('catalog') }}\">
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
    </div>", "D:\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/pages/magazin.htm", "");
    }
}
