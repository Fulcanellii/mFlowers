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

/* D:\open_server_5_3_5_basic_premium_ultimate\OSPanel\domains\october/themes/lovata-bootstrap-shopaholic/partials/product/product-card-detailed/product-card-detailed.htm */
class __TwigTemplate_5f433b52bc00d36c110eba462adb075daa458c6f33339b3100aaa89c52e08610 extends \Twig\Template
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
        $context["obOffer"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "offer", [], "any", false, false, false, 4), "first", [], "method", false, false, false, 4);
        // line 5
        echo "
<section class=\"info\">

        <div class=\"info__wrap\">
            <div class=\"info__photos\">
            ";
        // line 10
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, false, 10))) {
            // line 11
            echo "            <div class=\"easyzoom easyzoom--overlay easyzoom--with-thumbnails \">
              <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "path", [], "any", false, false, false, 12), "html", null, true);
            echo "\" class=\"info__img-wrap\">
                <img src=\"";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, false, 13), "getThumb", [0 => 450, 1 => 450, 2 => ["quality" => 100]], "method", false, false, false, 13), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, false, 13), "description", [], "any", false, false, false, 13), "html", null, true);
            echo "\" class=\"info__img\" />
              </a>
            </div>
          ";
        }
        // line 17
        echo "
          ";
        // line 18
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "images", [], "any", false, false, false, 18))) {
            // line 19
            echo "          
          <div class=\"info__sliders\">
              <ul class=\"thumbnails info__thumbnails owl-carousel\">
              
              <li class=\"info__li\">
                  <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "path", [], "any", false, false, false, 24), "html", null, true);
            echo "\" data-standard=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, false, 24), "path", [], "any", false, false, false, 24), "html", null, true);
            echo "\">
                    <img src=\"";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, false, 25), "getThumb", [0 => 450, 1 => 450, 2 => ["quality" => 100]], "method", false, false, false, 25), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, false, 25), "description", [], "any", false, false, false, 25), "html", null, true);
            echo "\" />
                  </a>
                </li>
              
              ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "images", [], "any", false, false, false, 29));
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                // line 30
                echo "
                <li class=\"info__li\">
                  <a href=\"";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["img"], "path", [], "any", false, false, false, 32), "html", null, true);
                echo "\" data-standard=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["img"], "path", [], "any", false, false, false, 32), "html", null, true);
                echo "\">
                    <img src=\"";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["img"], "getThumb", [0 => 150, 1 => 150, 2 => ["quality" => 100]], "method", false, false, false, 33), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["img"], "description", [], "any", false, false, false, 33), "html", null, true);
                echo "\" />
                  </a>
                </li>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "              </ul>
            </div>
          
          ";
        }
        // line 41
        echo "        </div>
        <div class=\"info__spec\">
            <h1 class=\"info__name\">";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "name", [], "any", false, false, false, 43), "html", null, true);
        echo "</h1>
            <div class=\"info__price-wrap\">

              <h3 class=\"info__price\">";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "price", [], "any", false, false, false, 46), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "currency", [], "any", false, false, false, 46), "html", null, true);
        echo "</h3>
              
              ";
        // line 48
        if ((twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "quantity", [], "any", false, false, false, 48) == "0")) {
            // line 49
            echo "                  <div class=\"info__no_stock\">нет в наличии</div>
              ";
        } else {
            // line 51
            echo "                  <div class=\"info__stock\">в наличии</div>
              ";
        }
        // line 53
        echo "              
   
            </div>
            <div class=\"info__description\">
              <h3>Описание товара</h3>
              <p>
                ";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_text", [], "any", false, false, false, 59), "html", null, true);
        echo "
              </p>
            </div>
           <!--  ";
        // line 62
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "brand", [], "any", false, false, false, 62), "isNotEmpty", [], "method", false, false, false, 62)) {
            // line 63
            echo "            <p class=\"product-detailed__brand\">
                <span class=\"font-weight-bold\">
                    Brand:
                </span>
                <a href=\"";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "brand", [], "any", false, false, false, 67), "getPageUrl", [0 => "catalog"], "method", false, false, false, 67), "html", null, true);
            echo "\" class=\"product-detailed__category-link\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "brand", [], "any", false, false, false, 67), "name", [], "any", false, false, false, 67), "html", null, true);
            echo "</a>
            </p>
            ";
        }
        // line 70
        echo "             -->
            ";
        // line 71
        if (($context["cart_is_available"] ?? null)) {
            // line 72
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "quantity", [], "any", false, false, false, 72) == "0")) {
                // line 73
                echo "                  
              ";
            } else {
                // line 75
                echo "                  <form class=\"mb-0\">
                    <input type=\"hidden\" name=\"offer_id\" value=\"";
                // line 76
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "id", [], "any", false, false, false, 76), "html", null, true);
                echo "\">
                    ";
                // line 77
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['btnChangeQtyValue'] = 1                ;
                $context['__cms_partial_params']['btnProductPage'] = true                ;
                $context['__cms_partial_params']['btnMaxQtyValue'] = twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "quantity", [], "any", false, false, false, 77)                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("form/button-change-quantity/button-change-quantity"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 78
                echo "                    ";
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['btnAddClasses'] = "btn-lg"                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("form/button-add-to-cart/button-add-to-cart"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                echo " 

                </div>
                </form>
              ";
            }
            // line 83
            echo "                
            ";
        }
        // line 85
        echo "
            <div class=\"info__category\">

              <strong>Категория: </strong>
              <span><a class=\"category__link\" href=\"";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "category", [], "any", false, false, false, 89), "getPageUrl", [0 => "category-page"], "method", false, false, false, 89), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "category", [], "any", false, false, false, 89), "name", [], "any", false, false, false, 89), "html", null, true);
        echo "</a></span>

            </div>
        </div>

</div>
</section>
<div class=\"container wysiwyg\">";
        // line 96
        echo twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "description", [], "any", false, false, false, 96);
        echo "</div>
      </div>
    </section>";
    }

    public function getTemplateName()
    {
        return "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/product/product-card-detailed/product-card-detailed.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 96,  231 => 89,  225 => 85,  221 => 83,  209 => 78,  202 => 77,  198 => 76,  195 => 75,  191 => 73,  188 => 72,  186 => 71,  183 => 70,  175 => 67,  169 => 63,  167 => 62,  161 => 59,  153 => 53,  149 => 51,  145 => 49,  143 => 48,  136 => 46,  130 => 43,  126 => 41,  120 => 37,  108 => 33,  102 => 32,  98 => 30,  94 => 29,  85 => 25,  79 => 24,  72 => 19,  70 => 18,  67 => 17,  58 => 13,  54 => 12,  51 => 11,  49 => 10,  42 => 5,  40 => 4,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var obProduct \\Lovata\\Shopaholic\\Classes\\Item\\ProductItem #}
{# @var obOffer \\Lovata\\Shopaholic\\Classes\\Item\\OfferItem #}

{% set obOffer = obProduct.offer.first() %}

<section class=\"info\">

        <div class=\"info__wrap\">
            <div class=\"info__photos\">
            {% if obProduct.preview_image is not empty %}
            <div class=\"easyzoom easyzoom--overlay easyzoom--with-thumbnails \">
              <a href=\"{{ obProduct.path }}\" class=\"info__img-wrap\">
                <img src=\"{{ obProduct.preview_image.getThumb(450, 450, {quality: 100}) }}\" alt=\"{{ obProduct.preview_image.description }}\" class=\"info__img\" />
              </a>
            </div>
          {% endif %}

          {% if obProduct.images is not empty %}
          
          <div class=\"info__sliders\">
              <ul class=\"thumbnails info__thumbnails owl-carousel\">
              
              <li class=\"info__li\">
                  <a href=\"{{ obProduct.path }}\" data-standard=\"{{ obProduct.preview_image.path }}\">
                    <img src=\"{{ obProduct.preview_image.getThumb(450, 450, {quality: 100}) }}\" alt=\"{{ obProduct.preview_image.description }}\" />
                  </a>
                </li>
              
              {% for img in obProduct.images %}

                <li class=\"info__li\">
                  <a href=\"{{ img.path }}\" data-standard=\"{{ img.path }}\">
                    <img src=\"{{ img.getThumb(150, 150, {quality: 100}) }}\" alt=\"{{ img.description }}\" />
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

              <h3 class=\"info__price\">{{ obOffer.price }} {{ obOffer.currency }}</h3>
              
              {% if obOffer.quantity == '0' %}
                  <div class=\"info__no_stock\">нет в наличии</div>
              {% else %}
                  <div class=\"info__stock\">в наличии</div>
              {% endif %}
              
   
            </div>
            <div class=\"info__description\">
              <h3>Описание товара</h3>
              <p>
                {{ obProduct.preview_text }}
              </p>
            </div>
           <!--  {% if obProduct.brand.isNotEmpty() %}
            <p class=\"product-detailed__brand\">
                <span class=\"font-weight-bold\">
                    Brand:
                </span>
                <a href=\"{{ obProduct.brand.getPageUrl('catalog') }}\" class=\"product-detailed__category-link\">{{ obProduct.brand.name }}</a>
            </p>
            {% endif %}
             -->
            {% if cart_is_available %}
            {% if obOffer.quantity == '0' %}
                  
              {% else %}
                  <form class=\"mb-0\">
                    <input type=\"hidden\" name=\"offer_id\" value=\"{{ obOffer.id }}\">
                    {% partial 'form/button-change-quantity/button-change-quantity' btnChangeQtyValue=1 btnProductPage=true btnMaxQtyValue=obOffer.quantity %}
                    {% partial 'form/button-add-to-cart/button-add-to-cart' btnAddClasses='btn-lg' %} 

                </div>
                </form>
              {% endif %}
                
            {% endif %}

            <div class=\"info__category\">

              <strong>Категория: </strong>
              <span><a class=\"category__link\" href=\"{{ obProduct.category.getPageUrl('category-page') }}\">{{ obProduct.category.name }}</a></span>

            </div>
        </div>

</div>
</section>
<div class=\"container wysiwyg\">{{ obProduct.description|raw }}</div>
      </div>
    </section>", "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/product/product-card-detailed/product-card-detailed.htm", "");
    }
}
