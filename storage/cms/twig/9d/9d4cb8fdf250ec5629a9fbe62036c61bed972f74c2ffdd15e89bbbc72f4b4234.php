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
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "name", [], "any", false, false, false, 16), "html", null, true);
        echo "
          </li>
        </ul>
        <div class=\"info__wrap\">
          <div class=\"info__photos\">
          ";
        // line 21
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, false, 21))) {
            // line 22
            echo "            <div class=\"easyzoom easyzoom--overlay easyzoom--with-thumbnails \">
              <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, false, 23), "path", [], "any", false, false, false, 23), "html", null, true);
            echo "\" class=\"info__img-wrap\">
                <img src=\"";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, false, 24), "path", [], "any", false, false, false, 24), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, false, 24), "description", [], "any", false, false, false, 24), "html", null, true);
            echo "\" class=\"info__img\" />
              </a>
            </div>
          ";
        }
        // line 28
        echo "
          ";
        // line 29
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "images", [], "any", false, false, false, 29))) {
            // line 30
            echo "          
          <div class=\"info__sliders\">
              <ul class=\"thumbnails info__thumbnails owl-carousel\">
              
              <li class=\"info__li\">
                  <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, false, 35), "path", [], "any", false, false, false, 35), "html", null, true);
            echo "\" data-standard=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, false, 35), "path", [], "any", false, false, false, 35), "html", null, true);
            echo "\">
                    <img src=\"";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, false, 36), "path", [], "any", false, false, false, 36), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, false, 36), "description", [], "any", false, false, false, 36), "html", null, true);
            echo "\" />
                  </a>
                </li>
              
              ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "images", [], "any", false, false, false, 40));
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                // line 41
                echo "
                <li class=\"info__li\">
                  <a href=\"";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["img"], "path", [], "any", false, false, false, 43), "html", null, true);
                echo "\" data-standard=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["img"], "path", [], "any", false, false, false, 43), "html", null, true);
                echo "\">
                    <img src=\"";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["img"], "path", [], "any", false, false, false, 44), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["img"], "description", [], "any", false, false, false, 44), "html", null, true);
                echo "\" />
                  </a>
                </li>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "              </ul>
            </div>
          
          ";
        }
        // line 52
        echo "
          </div>

          <div class=\"info__spec\">
            <h1 class=\"info__name\">";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "name", [], "any", false, false, false, 56), "html", null, true);
        echo "</h1>
            <div class=\"info__price-wrap\">
            ";
        // line 58
        $context["obOffer"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "offer", [], "any", false, false, false, 58), "first", [], "method", false, false, false, 58);
        // line 59
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "isNotEmpty", [], "method", false, false, false, 59)) {
            echo "  
              <h3 class=\"info__price\">";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "price", [], "any", false, false, false, 60), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "currency", [], "any", false, false, false, 60), "html", null, true);
            echo "</h3>
              
              ";
            // line 62
            if ((twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "quantity", [], "any", false, false, false, 62) == "0")) {
                // line 63
                echo "                  <div class=\"info__no_stock\">нет в наличии</div>
              ";
            } else {
                // line 65
                echo "                  <div class=\"info__stock\">в наличии</div>
              ";
            }
            // line 67
            echo "              
            ";
        }
        // line 69
        echo "            </div>
            <div class=\"info__description\">
              <h3>Описание товара</h3>
              <p>
                ";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_text", [], "any", false, false, false, 73), "html", null, true);
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
        // line 82
        if ((twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "quantity", [], "any", false, false, false, 82) == "0")) {
            // line 83
            echo "
                  <form class=\"mb-0\">
                <input type=\"hidden\" name=\"offer_id\" value=\"";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "id", [], "any", false, false, false, 85), "html", null, true);
            echo "\">
                <input type=\"hidden\" name=\"quantity\" value=\"1\">
                ";
            // line 87
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['btnAddClasses'] = "btn-sm"            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("form/button-add-to-cart/button-add-to-cart"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 88
            echo "
            </form>
              ";
        } else {
            // line 91
            echo "              
                  <form class=\"mb-0\">
                <input type=\"hidden\" name=\"offer_id\" value=\"";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "id", [], "any", false, false, false, 93), "html", null, true);
            echo "\">
                <input type=\"hidden\" name=\"quantity\" value=\"1\">
                ";
            // line 95
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['btnAddClasses'] = "btn-sm"            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("form/button-add-to-cart/button-add-to-cart"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 96
            echo "            </form>
              ";
        }
        // line 98
        echo "            </div>

            <div class=\"info__category\">

              <strong>Категория: </strong>
              <span><a class=\"category__link\" href=\"";
        // line 103
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "category", [], "any", false, false, false, 103), "getPageUrl", [0 => "category-page"], "method", false, false, false, 103), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "category", [], "any", false, false, false, 103), "name", [], "any", false, false, false, 103), "html", null, true);
        echo "</a></span>

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
        return array (  248 => 103,  241 => 98,  237 => 96,  232 => 95,  227 => 93,  223 => 91,  218 => 88,  213 => 87,  208 => 85,  204 => 83,  202 => 82,  190 => 73,  184 => 69,  180 => 67,  176 => 65,  172 => 63,  170 => 62,  163 => 60,  158 => 59,  156 => 58,  151 => 56,  145 => 52,  139 => 48,  127 => 44,  121 => 43,  117 => 41,  113 => 40,  104 => 36,  98 => 35,  91 => 30,  89 => 29,  86 => 28,  77 => 24,  73 => 23,  70 => 22,  68 => 21,  60 => 16,  50 => 11,  39 => 2,  37 => 1,);
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

              <strong>Категория: </strong>
              <span><a class=\"category__link\" href=\"{{ obProduct.category.getPageUrl('category-page') }}\">{{ obProduct.category.name }}</a></span>

            </div>

          </div>
        </div>
      </div>
    </section>", "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/pages/product-page.htm", "");
    }
}
