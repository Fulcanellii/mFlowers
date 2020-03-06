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

/* D:\open_server_5_3_5_basic_premium_ultimate\OSPanel\domains\october/themes/lovata-bootstrap-shopaholic/pages/index.htm */
class __TwigTemplate_925b2d89c14c88241a0c6d4a5904c90ab9948a46480d07aeb475e5d5cd15144a extends \Twig\Template
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
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['arImageList'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 1), "main_slider", [], "any", false, false, false, 1)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("content/carousel/carousel"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "
";
        // line 3
        $context["cat"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["CategoryList"] ?? null), "make", [], "method", false, false, false, 3), "tree", [], "method", false, false, false, 3);
        // line 4
        echo "
";
        // line 5
        $context["obPromoBlockList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["PromoBlockList"] ?? null), "make", [], "method", false, false, false, 5), "merge", [0 => [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 5), "promo_block_left", [], "any", false, false, false, 5), 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 5), "promo_block_middle", [], "any", false, false, false, 5), 2 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 5), "promo_block_right", [], "any", false, false, false, 5)]], "method", false, false, false, 5);
        // line 6
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['obPromoBlockList'] = ($context["obPromoBlockList"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("promo-block/promo-block-product-tab/promo-block-product-tab"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 7
        echo "
";
        // line 8
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['sImagePath'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 8), "index_banner", [], "any", false, false, false, 8)        ;
        $context['__cms_partial_params']['sLink'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 8), "index_banner_link", [], "any", false, false, false, 8)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("content/banner/banner"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 9
        echo "
";
        // line 10
        $context["obCategoryList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["CategoryList"] ?? null), "make", [], "method", false, false, false, 10), "merge", [0 => [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 10), "category_left", [], "any", false, false, false, 10), 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 10), "category_middle", [], "any", false, false, false, 10), 2 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 10), "category_right", [], "any", false, false, false, 10)]], "method", false, false, false, 10);
        // line 11
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['obCategoryList'] = ($context["obCategoryList"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("category/category-product-column/category-product-column"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 12
        echo "
";
        // line 13
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("main-banner.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 14
        echo "
<div id=\"slider\">
";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["cat"]);
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            if ((twig_get_attribute($this->env, $this->source, $context["cat"], "show_on_main", [], "any", false, false, false, 16) == 1)) {
                // line 17
                echo "

                ";
                // line 19
                if ((twig_get_attribute($this->env, $this->source, $context["cat"], "product_count", [], "any", false, false, false, 19) > 0)) {
                    // line 20
                    echo "
                
                  <div class=\"slide \" title=\"";
                    // line 22
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "name", [], "any", false, false, false, 22), "html", null, true);
                    echo "\">
                  
                     <section class=\"products\">
                    <div class=\"container\">
                    <div class=\"products__group\">
                    
                    ";
                    // line 28
                    $context["obCategory"] = twig_get_attribute($this->env, $this->source, ($context["CategoryPage"] ?? null), "get", [], "method", false, false, false, 28);
                    // line 29
                    echo "                    
                    ";
                    // line 30
                    $context["obProductList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ProductList"] ?? null), "make", [], "method", false, false, false, 30), "sort", [0 => twig_get_attribute($this->env, $this->source, ($context["ProductList"] ?? null), "getSorting", [], "method", false, false, false, 30)], "method", false, false, false, 30), "active", [], "method", false, false, false, 30), "category", [0 => twig_get_attribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 30)], "method", false, false, false, 30);
                    // line 31
                    echo "                    
                    ";
                    // line 32
                    if (twig_get_attribute($this->env, $this->source, ($context["obProductList"] ?? null), "isNotEmpty", [], "method", false, false, false, 32)) {
                        // line 33
                        echo "
                    ";
                        // line 34
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["obProductList"] ?? null), 0, 8));
                        foreach ($context['_seq'] as $context["_key"] => $context["obProduct"]) {
                            // line 35
                            echo "                    
                    ";
                            // line 36
                            $context["obOffer"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProduct"], "offer", [], "any", false, false, false, 36), "first", [], "method", false, false, false, 36);
                            // line 37
                            echo "                    
                        <div class=\"products__product\" data-id=\"";
                            // line 38
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obProduct"], "id", [], "any", false, false, false, 38), "html", null, true);
                            echo "\" >
                            ";
                            // line 39
                            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["obProduct"], "preview_image", [], "any", false, false, false, 39))) {
                                // line 40
                                echo "                            <a href=\"";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obProduct"], "getPageUrl", [0 => "catalog"], "method", false, false, false, 40), "html", null, true);
                                echo "\">
                                <div class=\"products__photo\">
                                    <span class=\"icon-eye products__icon\"></span>
                                    <img src=\"";
                                // line 43
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProduct"], "preview_image", [], "any", false, false, false, 43), "getThumb", [0 => 300, 1 => 300, 2 => ["quality" => 80]], "method", false, false, false, 43), "html", null, true);
                                echo "\" alt=\"";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProduct"], "preview_image", [], "any", false, false, false, 43), "description", [], "any", false, false, false, 43), "html", null, true);
                                echo "\">
                                </div>
                                <span class=\"products__name\">";
                                // line 45
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obProduct"], "name", [], "any", false, false, false, 45), "html", null, true);
                                echo "</span>
                            </a>
                            ";
                            }
                            // line 48
                            echo "                            <span class=\"products__price\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "price", [], "any", false, false, false, 48), "html", null, true);
                            echo "  ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "currency", [], "any", false, false, false, 48), "html", null, true);
                            echo "</span>
                            <form class=\"mb-0\">
                <input type=\"hidden\" name=\"offer_id\" value=\"";
                            // line 50
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "id", [], "any", false, false, false, 50), "html", null, true);
                            echo "\">
                <input type=\"hidden\" name=\"quantity\" value=\"1\">
                ";
                            // line 52
                            $context['__cms_partial_params'] = [];
                            $context['__cms_partial_params']['btnAddClasses'] = "btn-sm"                            ;
                            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("form/button-add-to-cart/button-add-to-cart"                            , $context['__cms_partial_params']                            , true                            );
                            unset($context['__cms_partial_params']);
                            // line 53
                            echo "            </form>
                        </div>

                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obProduct'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 57
                        echo "                    ";
                    }
                    // line 58
                    echo "            </div>
            </div>    
        </section>
        
                  </div>
               

                ";
                }
                // line 66
                echo "                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                 </div>










<div class=\"line\"></div>

<section class=\"newproduct\">
            <div class=\"container\">
                <div class=\"newproduct__wrap\">

                    <div class=\"newproduct__text\">
                        <img src=\"";
        // line 85
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/mainPage/newproduct/uzor.png");
        echo "\" alt=\"uzor\" class=\"newproduct__uzor\">
                        <h2 class=\"newproduct__title\">
                            НОВИНКИ НАШЕЙ ПРОДУКЦИИ
                        </h2>
                        <p class=\"newproduct__subtitle\">
                            Многие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский набор слов,
                            но это не совсем так. Его корни уходят в один фрагмент классической латыни.
                        </p>
                    </div>

                    <div class=\"newproduct__products owl-carousel  owl-theme owl-dots\">
                    
                    ";
        // line 97
        $context["obProductList2"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ProductList2"] ?? null), "make", [], "method", false, false, false, 97), "sort", [0 => twig_get_attribute($this->env, $this->source, ($context["ProductList2"] ?? null), "getSorting", [], "method", false, false, false, 97)], "method", false, false, false, 97), "active", [], "method", false, false, false, 97);
        // line 98
        echo "             
                    ";
        // line 99
        if (twig_get_attribute($this->env, $this->source, ($context["obProductList2"] ?? null), "isNotEmpty", [], "method", false, false, false, 99)) {
            // line 100
            echo "                    
                    ";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["obProductList2"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["obProduct2"]) {
                // line 102
                echo "                    
                    ";
                // line 103
                $context["obOffer2"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProduct2"], "offer", [], "any", false, false, false, 103), "first", [], "method", false, false, false, 103);
                // line 104
                echo "                    
                        <div class=\"products__product products__product-new\">
                            <a href=\"";
                // line 106
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obProduct2"], "getPageUrl", [0 => "catalog"], "method", false, false, false, 106), "html", null, true);
                echo "\">
                                <div class=\"products__photo newproduct__photo\">
                                    <span class=\"icon-eye products__icon\"></span>
                                    ";
                // line 109
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["obProduct2"], "preview_image", [], "any", false, false, false, 109))) {
                    // line 110
                    echo "                                    <img src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProduct2"], "preview_image", [], "any", false, false, false, 110), "getThumb", [0 => 300, 1 => 300, 2 => ["quality" => 80]], "method", false, false, false, 110), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProduct2"], "preview_image", [], "any", false, false, false, 110), "description", [], "any", false, false, false, 110), "html", null, true);
                    echo "\">
                                    ";
                }
                // line 112
                echo "                                </div>
                                <span class=\"products__name\">";
                // line 113
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obProduct2"], "name", [], "any", false, false, false, 113), "html", null, true);
                echo "</span>
                            </a>
                            <span class=\"products__price\">";
                // line 115
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer2"] ?? null), "price", [], "any", false, false, false, 115), "html", null, true);
                echo "  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer2"] ?? null), "currency", [], "any", false, false, false, 115), "html", null, true);
                echo "</span>
                            <form class=\"mb-0\">
                <input type=\"hidden\" name=\"offer_id\" value=\"";
                // line 117
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer2"] ?? null), "id", [], "any", false, false, false, 117), "html", null, true);
                echo "\">
                <input type=\"hidden\" name=\"quantity\" value=\"1\">
                ";
                // line 119
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['btnAddClasses'] = "btn-sm"                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("form/button-add-to-cart/button-add-to-cart"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 120
                echo "            </form>
                        </div>
                    
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obProduct2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            echo "                    ";
        }
        // line 125
        echo "                    </div>
                </div>
            </div>
        </section>


<section class=\"newproduct\">
            <div class=\"container\">
                <div class=\"newproduct__wrap newproduct__wrap-reverse\">

                    <div class=\"newproduct__text\">
                        <img src=\"";
        // line 136
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/mainPage/newproduct/uzor2.png");
        echo "\" alt=\"uzor\" class=\"newproduct__uzor-two\">
                        <h2 class=\"newproduct__title\">
                            РЕКОМЕНДУЕМ ДАННЫЙ ТОВАР
                        </h2>
                        <p class=\"newproduct__subtitle\">
                            Многие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский набор слов,
                            но это не совсем так. Его корни уходят в один фрагмент классической латыни.
                        </p>
                    </div>

                    <div class=\"newproduct__products owl-carousel  owl-theme owl-dots\">
                    
                    ";
        // line 148
        $context["obProductList2"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ProductList2"] ?? null), "make", [], "method", false, false, false, 148), "active", [], "method", false, false, false, 148), "random", [0 => 5], "method", false, false, false, 148);
        // line 149
        echo "         


                    ";
        // line 152
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["obProductList2"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["obProduct2"]) {
            // line 153
            echo "                    
                    ";
            // line 154
            $context["obOffer2"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProduct2"], "offer", [], "any", false, false, false, 154), "first", [], "method", false, false, false, 154);
            // line 155
            echo "                    
                        <div class=\"products__product products__product-new\">
                            <a href=\"";
            // line 157
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obProduct2"], "getPageUrl", [0 => "catalog"], "method", false, false, false, 157), "html", null, true);
            echo "\">
                                <div class=\"products__photo newproduct__photo\">
                                    <span class=\"icon-eye products__icon\"></span>
                                    ";
            // line 160
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["obProduct2"], "preview_image", [], "any", false, false, false, 160))) {
                // line 161
                echo "                                    <img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProduct2"], "preview_image", [], "any", false, false, false, 161), "getThumb", [0 => 300, 1 => 300, 2 => ["quality" => 80]], "method", false, false, false, 161), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProduct2"], "preview_image", [], "any", false, false, false, 161), "description", [], "any", false, false, false, 161), "html", null, true);
                echo "\">
                                    ";
            }
            // line 163
            echo "                                </div>
                                <span class=\"products__name\">";
            // line 164
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obProduct2"], "name", [], "any", false, false, false, 164), "html", null, true);
            echo "</span>
                            </a>
                            <span class=\"products__price\">";
            // line 166
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer2"] ?? null), "price", [], "any", false, false, false, 166), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer2"] ?? null), "currency", [], "any", false, false, false, 166), "html", null, true);
            echo "</span>
                            <form class=\"mb-0\">
                <input type=\"hidden\" name=\"offer_id\" value=\"";
            // line 168
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer2"] ?? null), "id", [], "any", false, false, false, 168), "html", null, true);
            echo "\">
                <input type=\"hidden\" name=\"quantity\" value=\"1\">
                ";
            // line 170
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['btnAddClasses'] = "btn-sm"            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("form/button-add-to-cart/button-add-to-cart"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 171
            echo "            </form>
                        </div>
                         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obProduct2'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
        echo "               
                    </div>
                </div>
            </div>
        </section>
        <div class=\"line\"></div>

<section class=\"occation\">
            <div class=\"container\">
                <div class=\"occation__wrap\">
                
                ";
        // line 185
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["cat"]);
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            if ((twig_get_attribute($this->env, $this->source, $context["cat"], "show_on_main", [], "any", false, false, false, 185) == 1)) {
                // line 186
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["cat"], "product_count", [], "any", false, false, false, 186) > 0)) {
                    // line 187
                    echo "
                <a href=\"";
                    // line 188
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "getPageUrl", [0 => "catalog"], "method", false, false, false, 188), "html", null, true);
                    echo "\" class=\"occation__link\">
                        <h3 class=\"occation__title\">";
                    // line 189
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "name", [], "any", false, false, false, 189), "html", null, true);
                    echo "</h3>
                        <img src=\"";
                    // line 190
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cat"], "preview_image", [], "any", false, false, false, 190), "path", [], "any", false, false, false, 190), "html", null, true);
                    echo "\" alt=\"#\">
                </a>
                
                ";
                }
                // line 194
                echo "                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 195
        echo "                    
                </div>
            </div>
        </section>
        <div class=\"line\"></div>
<section class=\"mainblog\">
            <div class=\"container\">
                ";
        // line 202
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("blog"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 203
        echo "                <div class=\"mainblog__blogs\">
                ";
        // line 204
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, false, 204);
        // line 205
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 206
            echo "                
                    <div class=\"mainblog__blog\">
                    ";
            // line 208
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 208), "count", [], "any", false, false, false, 208)) {
                // line 209
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 209));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 210
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 210), "html", null, true);
                    echo "\" class=\"mainblog__img\">
                            <img src=\"";
                    // line 211
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 211), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, false, 211), "html", null, true);
                    echo "\">
                            <span class=\"icon-search mainblog__icon\"></span>
                        </a>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 215
                echo "                    ";
            }
            // line 216
            echo "                        <div class=\"mainblog__date\">
                            <span class=\"icon-calendar\"></span>
                            <span>";
            // line 218
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, false, 218), "html", null, true);
            echo "</span>
                        </div>
                        <h3 class=\"mainblog__title-blog\">";
            // line 220
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 220), "html", null, true);
            echo "</h3>
                        <p class=\"mainblog__subtitle-blog\">";
            // line 221
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "content", [], "any", false, false, false, 221), "html", null, true);
            echo "</p>
                        <a href=\"";
            // line 222
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 222), "html", null, true);
            echo "\" class=\"mainblog__link\">читать далее</a>
                    </div>
                    
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 225
        echo " 
                    
                    
                </div>
            </div>
        </section>";
    }

    public function getTemplateName()
    {
        return "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/pages/index.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  546 => 225,  536 => 222,  532 => 221,  528 => 220,  523 => 218,  519 => 216,  516 => 215,  504 => 211,  499 => 210,  494 => 209,  492 => 208,  488 => 206,  483 => 205,  481 => 204,  478 => 203,  474 => 202,  465 => 195,  458 => 194,  451 => 190,  447 => 189,  443 => 188,  440 => 187,  437 => 186,  432 => 185,  419 => 174,  411 => 171,  406 => 170,  401 => 168,  394 => 166,  389 => 164,  386 => 163,  378 => 161,  376 => 160,  370 => 157,  366 => 155,  364 => 154,  361 => 153,  357 => 152,  352 => 149,  350 => 148,  335 => 136,  322 => 125,  319 => 124,  310 => 120,  305 => 119,  300 => 117,  293 => 115,  288 => 113,  285 => 112,  277 => 110,  275 => 109,  269 => 106,  265 => 104,  263 => 103,  260 => 102,  256 => 101,  253 => 100,  251 => 99,  248 => 98,  246 => 97,  231 => 85,  211 => 67,  204 => 66,  194 => 58,  191 => 57,  182 => 53,  177 => 52,  172 => 50,  164 => 48,  158 => 45,  151 => 43,  144 => 40,  142 => 39,  138 => 38,  135 => 37,  133 => 36,  130 => 35,  126 => 34,  123 => 33,  121 => 32,  118 => 31,  116 => 30,  113 => 29,  111 => 28,  102 => 22,  98 => 20,  96 => 19,  92 => 17,  87 => 16,  83 => 14,  79 => 13,  76 => 12,  71 => 11,  69 => 10,  66 => 9,  60 => 8,  57 => 7,  52 => 6,  50 => 5,  47 => 4,  45 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial 'content/carousel/carousel' arImageList=this.theme.main_slider %}

{% set cat = CategoryList.make().tree() %}

{% set obPromoBlockList = PromoBlockList.make().merge([this.theme.promo_block_left, this.theme.promo_block_middle, this.theme.promo_block_right]) %}
{% partial 'promo-block/promo-block-product-tab/promo-block-product-tab' obPromoBlockList=obPromoBlockList %}

{% partial 'content/banner/banner' sImagePath=this.theme.index_banner sLink=this.theme.index_banner_link %}

{% set obCategoryList = CategoryList.make().merge([this.theme.category_left, this.theme.category_middle, this.theme.category_right]) %}
{% partial 'category/category-product-column/category-product-column' obCategoryList=obCategoryList %}

{% content 'main-banner.htm' %}

<div id=\"slider\">
{% for cat in cat if cat.show_on_main == 1 %}


                {% if cat.product_count > 0 %}

                
                  <div class=\"slide \" title=\"{{ cat.name }}\">
                  
                     <section class=\"products\">
                    <div class=\"container\">
                    <div class=\"products__group\">
                    
                    {% set obCategory = CategoryPage.get() %}
                    
                    {% set obProductList = ProductList.make().sort(ProductList.getSorting()).active().category(cat.id) %}
                    
                    {% if obProductList.isNotEmpty() %}

                    {% for obProduct in obProductList|slice(0, 8) %}
                    
                    {% set obOffer = obProduct.offer.first() %}
                    
                        <div class=\"products__product\" data-id=\"{{ obProduct.id }}\" >
                            {% if obProduct.preview_image is not empty %}
                            <a href=\"{{ obProduct.getPageUrl('catalog') }}\">
                                <div class=\"products__photo\">
                                    <span class=\"icon-eye products__icon\"></span>
                                    <img src=\"{{ obProduct.preview_image.getThumb(300, 300, {quality: 80}) }}\" alt=\"{{ obProduct.preview_image.description }}\">
                                </div>
                                <span class=\"products__name\">{{ obProduct.name }}</span>
                            </a>
                            {% endif %}
                            <span class=\"products__price\">{{ obOffer.price }}  {{ obOffer.currency }}</span>
                            <form class=\"mb-0\">
                <input type=\"hidden\" name=\"offer_id\" value=\"{{ obOffer.id }}\">
                <input type=\"hidden\" name=\"quantity\" value=\"1\">
                {% partial 'form/button-add-to-cart/button-add-to-cart' btnAddClasses='btn-sm' %}
            </form>
                        </div>

                    {% endfor %}
                    {% endif %}
            </div>
            </div>    
        </section>
        
                  </div>
               

                {% endif %}
                {% endfor %}
                 </div>










<div class=\"line\"></div>

<section class=\"newproduct\">
            <div class=\"container\">
                <div class=\"newproduct__wrap\">

                    <div class=\"newproduct__text\">
                        <img src=\"{{ 'assets/images/mainPage/newproduct/uzor.png'|theme }}\" alt=\"uzor\" class=\"newproduct__uzor\">
                        <h2 class=\"newproduct__title\">
                            НОВИНКИ НАШЕЙ ПРОДУКЦИИ
                        </h2>
                        <p class=\"newproduct__subtitle\">
                            Многие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский набор слов,
                            но это не совсем так. Его корни уходят в один фрагмент классической латыни.
                        </p>
                    </div>

                    <div class=\"newproduct__products owl-carousel  owl-theme owl-dots\">
                    
                    {% set obProductList2 = ProductList2.make().sort(ProductList2.getSorting()).active() %}
             
                    {% if obProductList2.isNotEmpty() %}
                    
                    {% for obProduct2 in obProductList2 %}
                    
                    {% set obOffer2 = obProduct2.offer.first() %}
                    
                        <div class=\"products__product products__product-new\">
                            <a href=\"{{ obProduct2.getPageUrl('catalog') }}\">
                                <div class=\"products__photo newproduct__photo\">
                                    <span class=\"icon-eye products__icon\"></span>
                                    {% if obProduct2.preview_image is not empty %}
                                    <img src=\"{{ obProduct2.preview_image.getThumb(300, 300, {quality: 80}) }}\" alt=\"{{ obProduct2.preview_image.description }}\">
                                    {% endif %}
                                </div>
                                <span class=\"products__name\">{{ obProduct2.name }}</span>
                            </a>
                            <span class=\"products__price\">{{ obOffer2.price }}  {{ obOffer2.currency }}</span>
                            <form class=\"mb-0\">
                <input type=\"hidden\" name=\"offer_id\" value=\"{{ obOffer2.id }}\">
                <input type=\"hidden\" name=\"quantity\" value=\"1\">
                {% partial 'form/button-add-to-cart/button-add-to-cart' btnAddClasses='btn-sm' %}
            </form>
                        </div>
                    
                    {% endfor %}
                    {% endif %}
                    </div>
                </div>
            </div>
        </section>


<section class=\"newproduct\">
            <div class=\"container\">
                <div class=\"newproduct__wrap newproduct__wrap-reverse\">

                    <div class=\"newproduct__text\">
                        <img src=\"{{ 'assets/images/mainPage/newproduct/uzor2.png'|theme }}\" alt=\"uzor\" class=\"newproduct__uzor-two\">
                        <h2 class=\"newproduct__title\">
                            РЕКОМЕНДУЕМ ДАННЫЙ ТОВАР
                        </h2>
                        <p class=\"newproduct__subtitle\">
                            Многие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский набор слов,
                            но это не совсем так. Его корни уходят в один фрагмент классической латыни.
                        </p>
                    </div>

                    <div class=\"newproduct__products owl-carousel  owl-theme owl-dots\">
                    
                    {% set obProductList2 = ProductList2.make().active().random(5) %}
         


                    {% for obProduct2 in obProductList2 %}
                    
                    {% set obOffer2 = obProduct2.offer.first() %}
                    
                        <div class=\"products__product products__product-new\">
                            <a href=\"{{ obProduct2.getPageUrl('catalog') }}\">
                                <div class=\"products__photo newproduct__photo\">
                                    <span class=\"icon-eye products__icon\"></span>
                                    {% if obProduct2.preview_image is not empty %}
                                    <img src=\"{{ obProduct2.preview_image.getThumb(300, 300, {quality: 80}) }}\" alt=\"{{ obProduct2.preview_image.description }}\">
                                    {% endif %}
                                </div>
                                <span class=\"products__name\">{{ obProduct2.name }}</span>
                            </a>
                            <span class=\"products__price\">{{ obOffer2.price }}  {{ obOffer2.currency }}</span>
                            <form class=\"mb-0\">
                <input type=\"hidden\" name=\"offer_id\" value=\"{{ obOffer2.id }}\">
                <input type=\"hidden\" name=\"quantity\" value=\"1\">
                {% partial 'form/button-add-to-cart/button-add-to-cart' btnAddClasses='btn-sm' %}
            </form>
                        </div>
                         {% endfor %}
               
                    </div>
                </div>
            </div>
        </section>
        <div class=\"line\"></div>

<section class=\"occation\">
            <div class=\"container\">
                <div class=\"occation__wrap\">
                
                {% for cat in cat if cat.show_on_main == 1 %}
                {% if cat.product_count > 0 %}

                <a href=\"{{ cat.getPageUrl('catalog') }}\" class=\"occation__link\">
                        <h3 class=\"occation__title\">{{ cat.name }}</h3>
                        <img src=\"{{ cat.preview_image.path }}\" alt=\"#\">
                </a>
                
                {% endif %}
                {% endfor %}
                    
                </div>
            </div>
        </section>
        <div class=\"line\"></div>
<section class=\"mainblog\">
            <div class=\"container\">
                {% content 'blog' %}
                <div class=\"mainblog__blogs\">
                {% set posts = blogPosts.posts %}
                {% for post in posts %}
                
                    <div class=\"mainblog__blog\">
                    {% if post.featured_images.count %}
                    {% for image in post.featured_images %}
                        <a href=\"{{ post.url }}\" class=\"mainblog__img\">
                            <img src=\"{{ image.path }}\" alt=\"{{ image.description }}\">
                            <span class=\"icon-search mainblog__icon\"></span>
                        </a>
                    {% endfor %}
                    {% endif %}
                        <div class=\"mainblog__date\">
                            <span class=\"icon-calendar\"></span>
                            <span>{{ post.published_at }}</span>
                        </div>
                        <h3 class=\"mainblog__title-blog\">{{ post.title }}</h3>
                        <p class=\"mainblog__subtitle-blog\">{{ post.content }}</p>
                        <a href=\"{{ post.url }}\" class=\"mainblog__link\">читать далее</a>
                    </div>
                    
                {% endfor %} 
                    
                    
                </div>
            </div>
        </section>", "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/pages/index.htm", "");
    }
}
