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

/* D:\open_server_5_3_5_basic_premium_ultimate\OSPanel\domains\october/themes/lovata-bootstrap-shopaholic/pages/product-page.htm */
class __TwigTemplate_c47489985582110482cc5acf58fa4b6a1527bde660887672bf9ee67bbe36f782 extends \Twig\Template
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
            ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "name", [], "any", false, false, false, 12), "html", null, true);
        echo "
          </li>
        </ul>
        <div class=\"info__wrap\">
          <div class=\"info__photos\">
          ";
        // line 17
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, false, 17))) {
            // line 18
            echo "            <div class=\"easyzoom easyzoom--overlay easyzoom--with-thumbnails \">
              <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, false, 19), "path", [], "any", false, false, false, 19), "html", null, true);
            echo "\" class=\"info__img-wrap\">
                <img src=\"";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, false, 20), "path", [], "any", false, false, false, 20), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, false, 20), "description", [], "any", false, false, false, 20), "html", null, true);
            echo "\" class=\"info__img\" />
              </a>
            </div>
          ";
        }
        // line 24
        echo "           
          ";
        // line 25
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "images", [], "any", false, false, false, 25))) {
            // line 26
            echo "          
          <div class=\"info__sliders\">
              <ul class=\"thumbnails info__thumbnails owl-carousel\">
              
              <li class=\"info__li\">
                  <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, false, 31), "path", [], "any", false, false, false, 31), "html", null, true);
            echo "\" data-standard=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, false, 31), "path", [], "any", false, false, false, 31), "html", null, true);
            echo "\">
                    <img src=\"";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, false, 32), "path", [], "any", false, false, false, 32), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, false, 32), "description", [], "any", false, false, false, 32), "html", null, true);
            echo "\" />
                  </a>
                </li>
              
              ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "images", [], "any", false, false, false, 36));
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                // line 37
                echo "              
             
                <li class=\"info__li\">
                  <a href=\"";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["img"], "path", [], "any", false, false, false, 40), "html", null, true);
                echo "\" data-standard=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["img"], "path", [], "any", false, false, false, 40), "html", null, true);
                echo "\">
                    <img src=\"";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["img"], "path", [], "any", false, false, false, 41), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["img"], "description", [], "any", false, false, false, 41), "html", null, true);
                echo "\" />
                  </a>
                </li>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "              </ul>
            </div>
          
          ";
        }
        // line 49
        echo "
          </div>

          <div class=\"info__spec\">
            <h1 class=\"info__name\">";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "name", [], "any", false, false, false, 53), "html", null, true);
        echo "</h1>
            <div class=\"info__price-wrap\">
            ";
        // line 55
        $context["obOffer"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "offer", [], "any", false, false, false, 55), "first", [], "method", false, false, false, 55);
        // line 56
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "isNotEmpty", [], "method", false, false, false, 56)) {
            echo "  
              <h3 class=\"info__price\">";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "price", [], "any", false, false, false, 57), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "currency", [], "any", false, false, false, 57), "html", null, true);
            echo "</h3>
              
              ";
            // line 59
            if ((twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "quantity", [], "any", false, false, false, 59) == "0")) {
                // line 60
                echo "                  <div class=\"info__no_stock\">нет в наличии</div>
              ";
            } else {
                // line 62
                echo "                  <div class=\"info__stock\">в наличии</div>
              ";
            }
            // line 64
            echo "              
            ";
        }
        // line 66
        echo "            </div>
            <div class=\"info__description\">
              <h3>Описание товара</h3>
              <p>
                ";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_text", [], "any", false, false, false, 70), "html", null, true);
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
        // line 79
        if ((twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "quantity", [], "any", false, false, false, 79) == "0")) {
            // line 80
            echo "                  <form class=\"mb-0\">
                <input type=\"hidden\" name=\"offer_id\" value=\"";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "id", [], "any", false, false, false, 81), "html", null, true);
            echo "\">
                <input type=\"hidden\" name=\"quantity\" value=\"1\">
                ";
            // line 83
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['btnAddClasses'] = "btn-sm"            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("form/button-add-to-cart/button-add-to-cart"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 84
            echo "            </form>
              ";
        } else {
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
            $context['__cms_partial_params']['btnAddClasses'] = "btn-sm"            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("form/button-add-to-cart/button-add-to-cart"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 91
            echo "            </form>
              ";
        }
        // line 93
        echo "            </div>

            <div class=\"info__category\">
              <strong>Категория:</strong>
              <span>";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "category", [], "any", false, false, false, 97), "name", [], "any", false, false, false, 97), "html", null, true);
        echo "</span>
            </div>

          </div>
        </div>
      </div>
    </section>";
    }

    public function getTemplateName()
    {
        return "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/pages/product-page.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 97,  231 => 93,  227 => 91,  222 => 90,  217 => 88,  213 => 86,  209 => 84,  204 => 83,  199 => 81,  196 => 80,  194 => 79,  182 => 70,  176 => 66,  172 => 64,  168 => 62,  164 => 60,  162 => 59,  155 => 57,  150 => 56,  148 => 55,  143 => 53,  137 => 49,  131 => 45,  119 => 41,  113 => 40,  108 => 37,  104 => 36,  95 => 32,  89 => 31,  82 => 26,  80 => 25,  77 => 24,  68 => 20,  64 => 19,  61 => 18,  59 => 17,  51 => 12,  39 => 2,  37 => 1,);
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
                  <form class=\"mb-0\">
                <input type=\"hidden\" name=\"offer_id\" value=\"{{ obOffer.id }}\">
                <input type=\"hidden\" name=\"quantity\" value=\"1\">
                {% partial 'form/button-add-to-cart/button-add-to-cart' btnAddClasses='btn-sm' %}
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
              <strong>Категория:</strong>
              <span>{{ obProduct.category.name }}</span>
            </div>

          </div>
        </div>
      </div>
    </section>", "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/pages/product-page.htm", "");
    }
}
