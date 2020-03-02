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

/* D:\open_server_5_3_5_basic_premium_ultimate\OSPanel\domains\october/themes/lovata-bootstrap-shopaholic/partials/product/catalog-product-list/catalog-product-list.htm */
class __TwigTemplate_c746a278cf66364281c10113069f56499edc3ce646b7261efdb5c2834bb4eaf7 extends \Twig\Template
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
        echo "<div class=\"storePage__flex\">

\t<section class=\"category\">
            <div class=\"category__wrap\">
              <ul>
                <li class=\"category__title\">
                  <h3>Категории</h3>
                </li>
";
        // line 9
        $context["obCategoryList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["CategoryList"] ?? null), "make", [], "method", false, false, false, 9), "tree", [], "method", false, false, false, 9);
        // line 10
        if (twig_get_attribute($this->env, $this->source, ($context["obCategoryList"] ?? null), "isNotEmpty", [], "method", false, false, false, 10)) {
            // line 11
            echo " 
        ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["obCategoryList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["obCategory"]) {
                if ((twig_get_attribute($this->env, $this->source, $context["obCategory"], "product_count", [], "any", false, false, false, 12) > 0)) {
                    // line 13
                    echo "        
            <li class=\"category__list\" data-id=\"";
                    // line 14
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obCategory"], "id", [], "any", false, false, false, 14), "html", null, true);
                    echo "\">
            <a class=\"category__link\" href=\"";
                    // line 15
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obCategory"], "getPageUrl", [0 => "catalog"], "method", false, false, false, 15), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obCategory"], "name", [], "any", false, false, false, 15), "html", null, true);
                    echo "</a>
                ";
                    // line 16
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obCategory"], "children", [], "any", false, false, false, 16), "isNotEmpty", [], "method", false, false, false, 16)) {
                        // line 17
                        echo "                    <ul class=\"category-child-menu-wrapper\">
                        ";
                        // line 18
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["obCategory"], "children", [], "any", false, false, false, 18));
                        foreach ($context['_seq'] as $context["_key"] => $context["obChildCategory"]) {
                            if ((twig_get_attribute($this->env, $this->source, $context["obCategory"], "product_count", [], "any", false, false, false, 18) > 0)) {
                                // line 19
                                echo "                            <li>";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obChildCategory"], "name", [], "any", false, false, false, 19), "html", null, true);
                                echo "</li>
                        ";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obChildCategory'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 21
                        echo "                    </ul>
                ";
                    }
                    // line 23
                    echo "            </li>
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obCategory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "  
";
        }
        // line 27
        echo "              </ul>
            </div>
            
          </section>
<section class=\"store\">
    <div class=\"_ajax_catalog_wrapper\">
        ";
        // line 33
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product/catalog-product-list/ajax-catalog-product-list"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 34
        echo "    </div>
</div>
</section>";
    }

    public function getTemplateName()
    {
        return "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/product/catalog-product-list/catalog-product-list.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 34,  116 => 33,  108 => 27,  104 => 25,  96 => 23,  92 => 21,  82 => 19,  77 => 18,  74 => 17,  72 => 16,  66 => 15,  62 => 14,  59 => 13,  54 => 12,  51 => 11,  49 => 10,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"storePage__flex\">

\t<section class=\"category\">
            <div class=\"category__wrap\">
              <ul>
                <li class=\"category__title\">
                  <h3>Категории</h3>
                </li>
{% set obCategoryList = CategoryList.make().tree() %}
{% if obCategoryList.isNotEmpty() %}
 
        {% for obCategory in obCategoryList if obCategory.product_count > 0 %}
        
            <li class=\"category__list\" data-id=\"{{ obCategory.id }}\">
            <a class=\"category__link\" href=\"{{ obCategory.getPageUrl('catalog') }}\">{{ obCategory.name }}</a>
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
    <div class=\"_ajax_catalog_wrapper\">
        {% partial 'product/catalog-product-list/ajax-catalog-product-list'  %}
    </div>
</div>
</section>", "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/product/catalog-product-list/catalog-product-list.htm", "");
    }
}
