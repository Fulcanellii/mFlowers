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

/* D:\OSPanel\domains\october/themes/lovata-bootstrap-shopaholic/pages/product-page.htm */
class __TwigTemplate_e3785a07c0c02ee61bc5431479f350d4f49ae0c1d1d44cc6b6586b6fe082c6a5 extends \Twig\Template
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
        $context["obProduct"] = twig_get_attribute($this->env, $this->source, ($context["ProductPage"] ?? null), "get", [], "method", false, false, false, 1);
        // line 2
        echo "
<section class=\"info\">
      <div class=\"container\">
        <ul class=\"crumbs\">
          <li class=\"crumb\">
            <a href=\"/\" class=\"crumb-link\">Главная</a>
            <span>/</span>
          </li>
          <li class=\"crumb\">
              <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "category", [], "any", false, false, false, 11), "getPageUrl", [0 => "category-page"], "method", false, false, false, 11), "html", null, true);
        echo "\" class=\"crumb-link\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "category", [], "any", false, false, false, 11), "name", [], "any", false, false, false, 11), "html", null, true);
        echo "</a>
            <span>/</span>
          </li>
          <li class=\"crumb\">
            ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "name", [], "any", false, false, false, 15), "html", null, true);
        echo "
          </li>
        </ul>
        <div class=\"info__wrap\">
          <div class=\"info__photos\">
          ";
        // line 20
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, false, 20))) {
            // line 21
            echo "            <div class=\"easyzoom easyzoom--overlay easyzoom--with-thumbnails \">
              <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, false, 22), "path", [], "any", false, false, false, 22), "html", null, true);
            echo "\" class=\"info__img-wrap\">
                <img src=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, false, 23), "path", [], "any", false, false, false, 23), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, false, 23), "description", [], "any", false, false, false, 23), "html", null, true);
            echo "\" class=\"info__img\" />
              </a>
            </div>
          ";
        }
        // line 27
        echo "          
          ";
        // line 28
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "images", [], "any", false, false, false, 28))) {
            // line 29
            echo "          
          <div class=\"info__sliders\">
              <ul class=\"thumbnails info__thumbnails owl-carousel\">
              
              <li class=\"info__li\">
                  <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, false, 34), "path", [], "any", false, false, false, 34), "html", null, true);
            echo "\" data-standard=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, false, 34), "path", [], "any", false, false, false, 34), "html", null, true);
            echo "\">
                    <img src=\"";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, false, 35), "path", [], "any", false, false, false, 35), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, false, 35), "description", [], "any", false, false, false, 35), "html", null, true);
            echo "\" />
                  </a>
                </li>
              
              ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "images", [], "any", false, false, false, 39));
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                // line 40
                echo "                <li class=\"info__li\">
                  <a href=\"";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["img"], "path", [], "any", false, false, false, 41), "html", null, true);
                echo "\" data-standard=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["img"], "path", [], "any", false, false, false, 41), "html", null, true);
                echo "\">
                    <img src=\"";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["img"], "path", [], "any", false, false, false, 42), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["img"], "description", [], "any", false, false, false, 42), "html", null, true);
                echo "\" />
                  </a>
                </li>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "              </ul>
            </div>
          
          ";
        }
        // line 50
        echo "
          </div>

          <div class=\"info__spec\">
            <h1 class=\"info__name\">";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "name", [], "any", false, false, false, 54), "html", null, true);
        echo "</h1>
            <div class=\"info__price-wrap\">
            ";
        // line 56
        $context["obOffer"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "offer", [], "any", false, false, false, 56), "first", [], "method", false, false, false, 56);
        // line 57
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "isNotEmpty", [], "method", false, false, false, 57)) {
            echo "  
              <h3 class=\"info__price\">";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "price", [], "any", false, false, false, 58), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "currency", [], "any", false, false, false, 58), "html", null, true);
            echo "</h3>
              
              ";
            // line 60
            if ((twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "quantity", [], "any", false, false, false, 60) == "0")) {
                // line 61
                echo "                  <div class=\"info__no_stock\">нет в наличии</div>
              ";
            } else {
                // line 63
                echo "                  <div class=\"info__stock\">в наличии</div>
              ";
            }
            // line 65
            echo "              
            ";
        }
        // line 67
        echo "            </div>
            <div class=\"info__description\">
              <h3>Описание товара</h3>
              <p>
                ";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_text", [], "any", false, false, false, 71), "html", null, true);
        echo "
              </p>
            </div>
            <div class=\"info__counter\">
              <input type=\"number\" value=\"1\" class=\"info__counter-input\">
              <div class=\"info__btns\">
                <button type=\"button\" class=\"info__btn\">+</button>
                <button type=\"button\" class=\"info__btn\">-</button>
              </div>
              ";
        // line 80
        if ((twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "quantity", [], "any", false, false, false, 80) == "0")) {
            // line 81
            echo "                  
            </form>
              ";
        } else {
            // line 84
            echo "              
                  <form class=\"mb-0\">
                <input type=\"hidden\" name=\"offer_id\" value=\"";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "id", [], "any", false, false, false, 86), "html", null, true);
            echo "\">
                <input type=\"hidden\" name=\"quantity\" value=\"1\">
                ";
            // line 88
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['btnAddClasses'] = "btn-sm"            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("form/button-add-to-cart/button-add-to-cart"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 89
            echo "            </form>
              ";
        }
        // line 91
        echo "            </div>

            <div class=\"info__category\">
              <strong>Категория: </strong>
              <span><a class=\"category__link\" href=\"";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "category", [], "any", false, false, false, 95), "getPageUrl", [0 => "category-page"], "method", false, false, false, 95), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "category", [], "any", false, false, false, 95), "name", [], "any", false, false, false, 95), "html", null, true);
        echo "</a></span>
            </div>

          </div>
        </div>
      </div>
    </section>";
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/pages/product-page.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 95,  225 => 91,  221 => 89,  216 => 88,  211 => 86,  207 => 84,  202 => 81,  200 => 80,  188 => 71,  182 => 67,  178 => 65,  174 => 63,  170 => 61,  168 => 60,  161 => 58,  156 => 57,  154 => 56,  149 => 54,  143 => 50,  137 => 46,  125 => 42,  119 => 41,  116 => 40,  112 => 39,  103 => 35,  97 => 34,  90 => 29,  88 => 28,  85 => 27,  76 => 23,  72 => 22,  69 => 21,  67 => 20,  59 => 15,  50 => 11,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set obProduct = ProductPage.get() %}

<section class=\"info\">
      <div class=\"container\">
        <ul class=\"crumbs\">
          <li class=\"crumb\">
            <a href=\"/\" class=\"crumb-link\">Главная</a>
            <span>/</span>
          </li>
          <li class=\"crumb\">
              <a href=\"{{ obProduct.category.getPageUrl('category-page') }}\" class=\"crumb-link\">{{ obProduct.category.name }}</a>
            <span>/</span>
          </li>
          <li class=\"crumb\">
            {{ obProduct.name }}
          </li>
        </ul>
        <div class=\"info__wrap\">
          <div class=\"info__photos\">
          {% if obProduct.preview_image is not empty %}
            <div class=\"easyzoom easyzoom--overlay easyzoom--with-thumbnails \">
              <a href=\"{{ obProduct.preview_image.path }}\" class=\"info__img-wrap\">
                <img src=\"{{ obProduct.preview_image.path }}\" alt=\"{{ obProduct.preview_image.description }}\" class=\"info__img\" />
              </a>
            </div>
          {% endif %}
          
          {% if obProduct.images is not empty %}
          
          <div class=\"info__sliders\">
              <ul class=\"thumbnails info__thumbnails owl-carousel\">
              
              <li class=\"info__li\">
                  <a href=\"{{ obProduct.preview_image.path }}\" data-standard=\"{{ obProduct.preview_image.path }}\">
                    <img src=\"{{ obProduct.preview_image.path }}\" alt=\"{{ obProduct.preview_image.description }}\" />
                  </a>
                </li>
              
              {% for img in obProduct.images %}
                <li class=\"info__li\">
                  <a href=\"{{ img.path }}\" data-standard=\"{{ img.path }}\">
                    <img src=\"{{ img.path }}\" alt=\"{{ img.description }}\" />
                  </a>
                </li>
              {% endfor %}
              </ul>
            </div>
          
          {% endif %}

          </div>

          <div class=\"info__spec\">
            <h1 class=\"info__name\">{{ obProduct.name }}</h1>
            <div class=\"info__price-wrap\">
            {% set obOffer = obProduct.offer.first() %}
            {% if obOffer.isNotEmpty()%}  
              <h3 class=\"info__price\">{{ obOffer.price }} {{ obOffer.currency }}</h3>
              
              {% if obOffer.quantity == '0' %}
                  <div class=\"info__no_stock\">нет в наличии</div>
              {% else %}
                  <div class=\"info__stock\">в наличии</div>
              {% endif %}
              
            {% endif %}
            </div>
            <div class=\"info__description\">
              <h3>Описание товара</h3>
              <p>
                {{ obProduct.preview_text }}
              </p>
            </div>
            <div class=\"info__counter\">
              <input type=\"number\" value=\"1\" class=\"info__counter-input\">
              <div class=\"info__btns\">
                <button type=\"button\" class=\"info__btn\">+</button>
                <button type=\"button\" class=\"info__btn\">-</button>
              </div>
              {% if obOffer.quantity == '0' %}
                  
            </form>
              {% else %}
              
                  <form class=\"mb-0\">
                <input type=\"hidden\" name=\"offer_id\" value=\"{{ obOffer.id }}\">
                <input type=\"hidden\" name=\"quantity\" value=\"1\">
                {% partial 'form/button-add-to-cart/button-add-to-cart' btnAddClasses='btn-sm' %}
            </form>
              {% endif %}
            </div>

            <div class=\"info__category\">
              <strong>Категория: </strong>
              <span><a class=\"category__link\" href=\"{{ obProduct.category.getPageUrl('category-page') }}\">{{ obProduct.category.name }}</a></span>
            </div>

          </div>
        </div>
      </div>
    </section>", "D:\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/pages/product-page.htm", "");
    }
}
