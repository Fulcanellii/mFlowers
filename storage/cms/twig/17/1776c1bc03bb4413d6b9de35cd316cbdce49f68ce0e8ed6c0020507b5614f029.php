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

";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["cat"]);
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            if ((twig_get_attribute($this->env, $this->source, $context["cat"], "show_on_main", [], "any", false, false, false, 16) == 1)) {
                // line 17
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["cat"], "product_count", [], "any", false, false, false, 17) > 0)) {
                    // line 18
                    echo "
                <div class=\"category_main\">
                    <a href=\"#";
                    // line 20
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 20), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "name", [], "any", false, false, false, 20), "html", null, true);
                    echo "</a>
                </div>

                ";
                }
                // line 24
                echo "                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "                
<section class=\"products\">
            <div class=\"container\">
                    <div class=\"products__group\">
                    
                    ";
        // line 30
        $context["obCategory"] = twig_get_attribute($this->env, $this->source, ($context["CategoryPage"] ?? null), "get", [], "method", false, false, false, 30);
        // line 31
        echo "
                    
                    ";
        // line 33
        $context["obProductList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ProductList"] ?? null), "make", [], "method", false, false, false, 33), "sort", [0 => twig_get_attribute($this->env, $this->source, ($context["ProductList"] ?? null), "getSorting", [], "method", false, false, false, 33)], "method", false, false, false, 33), "active", [], "method", false, false, false, 33);
        // line 34
        echo "                    
                    ";
        // line 35
        if (twig_get_attribute($this->env, $this->source, ($context["obProductList"] ?? null), "isNotEmpty", [], "method", false, false, false, 35)) {
            // line 36
            echo "
                    ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["obProductList"] ?? null), 0, 8));
            foreach ($context['_seq'] as $context["_key"] => $context["obProduct"]) {
                // line 38
                echo "                    
                    ";
                // line 39
                $context["obOffer"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProduct"], "offer", [], "any", false, false, false, 39), "first", [], "method", false, false, false, 39);
                // line 40
                echo "                    
                        <div class=\"products__product\" data-id=\"";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obProduct"], "id", [], "any", false, false, false, 41), "html", null, true);
                echo "\" >
                            ";
                // line 42
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["obProduct"], "preview_image", [], "any", false, false, false, 42))) {
                    // line 43
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obProduct"], "getPageUrl", [0 => "catalog"], "method", false, false, false, 43), "html", null, true);
                    echo "\">
                                <div class=\"products__photo\">
                                    <span class=\"icon-eye products__icon\"></span>
                                    <img src=\"";
                    // line 46
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProduct"], "preview_image", [], "any", false, false, false, 46), "getThumb", [0 => 300, 1 => 300, 2 => ["quality" => 80]], "method", false, false, false, 46), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProduct"], "preview_image", [], "any", false, false, false, 46), "description", [], "any", false, false, false, 46), "html", null, true);
                    echo "\">
                                </div>
                                <span class=\"products__name\">";
                    // line 48
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obProduct"], "name", [], "any", false, false, false, 48), "html", null, true);
                    echo "</span>
                            </a>
                            ";
                }
                // line 51
                echo "                            <span class=\"products__price\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "price", [], "any", false, false, false, 51), "html", null, true);
                echo "  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "currency", [], "any", false, false, false, 51), "html", null, true);
                echo "</span>
                            <form class=\"mb-0\">
                <input type=\"hidden\" name=\"offer_id\" value=\"";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "id", [], "any", false, false, false, 53), "html", null, true);
                echo "\">
                <input type=\"hidden\" name=\"quantity\" value=\"1\">
                ";
                // line 55
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['btnAddClasses'] = "btn-sm"                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("form/button-add-to-cart/button-add-to-cart"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 56
                echo "            </form>
                        </div>

                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obProduct'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "                    ";
        }
        // line 61
        echo "            </div>      
        </section>
        
<div class=\"line\"></div>

<section class=\"newproduct\">
            <div class=\"container\">
                <div class=\"newproduct__wrap\">

                    <div class=\"newproduct__text\">
                        <img src=\"";
        // line 71
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
        // line 83
        $context["obProductList2"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ProductList2"] ?? null), "make", [], "method", false, false, false, 83), "sort", [0 => twig_get_attribute($this->env, $this->source, ($context["ProductList2"] ?? null), "getSorting", [], "method", false, false, false, 83)], "method", false, false, false, 83), "active", [], "method", false, false, false, 83);
        // line 84
        echo "             
                    ";
        // line 85
        if (twig_get_attribute($this->env, $this->source, ($context["obProductList2"] ?? null), "isNotEmpty", [], "method", false, false, false, 85)) {
            // line 86
            echo "                    
                    ";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["obProductList2"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["obProduct2"]) {
                // line 88
                echo "                    
                    ";
                // line 89
                $context["obOffer2"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProduct2"], "offer", [], "any", false, false, false, 89), "first", [], "method", false, false, false, 89);
                // line 90
                echo "                    
                        <div class=\"products__product products__product-new\">
                            <a href=\"";
                // line 92
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obProduct2"], "getPageUrl", [0 => "catalog"], "method", false, false, false, 92), "html", null, true);
                echo "\">
                                <div class=\"products__photo newproduct__photo\">
                                    <span class=\"icon-eye products__icon\"></span>
                                    ";
                // line 95
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["obProduct2"], "preview_image", [], "any", false, false, false, 95))) {
                    // line 96
                    echo "                                    <img src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProduct2"], "preview_image", [], "any", false, false, false, 96), "getThumb", [0 => 300, 1 => 300, 2 => ["quality" => 80]], "method", false, false, false, 96), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProduct2"], "preview_image", [], "any", false, false, false, 96), "description", [], "any", false, false, false, 96), "html", null, true);
                    echo "\">
                                    ";
                }
                // line 98
                echo "                                </div>
                                <span class=\"products__name\">";
                // line 99
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obProduct2"], "name", [], "any", false, false, false, 99), "html", null, true);
                echo "</span>
                            </a>
                            <span class=\"products__price\">";
                // line 101
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer2"] ?? null), "price", [], "any", false, false, false, 101), "html", null, true);
                echo "  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer2"] ?? null), "currency", [], "any", false, false, false, 101), "html", null, true);
                echo "</span>
                            <form class=\"mb-0\">
                <input type=\"hidden\" name=\"offer_id\" value=\"";
                // line 103
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer2"] ?? null), "id", [], "any", false, false, false, 103), "html", null, true);
                echo "\">
                <input type=\"hidden\" name=\"quantity\" value=\"1\">
                ";
                // line 105
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['btnAddClasses'] = "btn-sm"                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("form/button-add-to-cart/button-add-to-cart"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 106
                echo "            </form>
                        </div>
                    
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obProduct2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "                    ";
        }
        // line 111
        echo "                    </div>
                </div>
            </div>
        </section>


<section class=\"newproduct\">
            <div class=\"container\">
                <div class=\"newproduct__wrap newproduct__wrap-reverse\">

                    <div class=\"newproduct__text\">
                        <img src=\"";
        // line 122
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
        // line 134
        $context["obProductList2"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ProductList2"] ?? null), "make", [], "method", false, false, false, 134), "active", [], "method", false, false, false, 134), "random", [0 => 5], "method", false, false, false, 134);
        // line 135
        echo "         


                    ";
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["obProductList2"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["obProduct2"]) {
            // line 139
            echo "                    
                    ";
            // line 140
            $context["obOffer2"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProduct2"], "offer", [], "any", false, false, false, 140), "first", [], "method", false, false, false, 140);
            // line 141
            echo "                    
                        <div class=\"products__product products__product-new\">
                            <a href=\"";
            // line 143
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obProduct2"], "getPageUrl", [0 => "catalog"], "method", false, false, false, 143), "html", null, true);
            echo "\">
                                <div class=\"products__photo newproduct__photo\">
                                    <span class=\"icon-eye products__icon\"></span>
                                    ";
            // line 146
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["obProduct2"], "preview_image", [], "any", false, false, false, 146))) {
                // line 147
                echo "                                    <img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProduct2"], "preview_image", [], "any", false, false, false, 147), "getThumb", [0 => 300, 1 => 300, 2 => ["quality" => 80]], "method", false, false, false, 147), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProduct2"], "preview_image", [], "any", false, false, false, 147), "description", [], "any", false, false, false, 147), "html", null, true);
                echo "\">
                                    ";
            }
            // line 149
            echo "                                </div>
                                <span class=\"products__name\">";
            // line 150
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obProduct2"], "name", [], "any", false, false, false, 150), "html", null, true);
            echo "</span>
                            </a>
                            <span class=\"products__price\">";
            // line 152
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer2"] ?? null), "price", [], "any", false, false, false, 152), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer2"] ?? null), "currency", [], "any", false, false, false, 152), "html", null, true);
            echo "</span>
                            <form class=\"mb-0\">
                <input type=\"hidden\" name=\"offer_id\" value=\"";
            // line 154
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer2"] ?? null), "id", [], "any", false, false, false, 154), "html", null, true);
            echo "\">
                <input type=\"hidden\" name=\"quantity\" value=\"1\">
                ";
            // line 156
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['btnAddClasses'] = "btn-sm"            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("form/button-add-to-cart/button-add-to-cart"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 157
            echo "            </form>
                        </div>
                         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obProduct2'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
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
        // line 171
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["cat"]);
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            if ((twig_get_attribute($this->env, $this->source, $context["cat"], "show_on_main", [], "any", false, false, false, 171) == 1)) {
                // line 172
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["cat"], "product_count", [], "any", false, false, false, 172) > 0)) {
                    // line 173
                    echo "
                <a href=\"";
                    // line 174
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "getPageUrl", [0 => "catalog"], "method", false, false, false, 174), "html", null, true);
                    echo "\" class=\"occation__link\">
                        <h3 class=\"occation__title\">";
                    // line 175
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "name", [], "any", false, false, false, 175), "html", null, true);
                    echo "</h3>
                        <img src=\"";
                    // line 176
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cat"], "preview_image", [], "any", false, false, false, 176), "path", [], "any", false, false, false, 176), "html", null, true);
                    echo "\" alt=\"#\">
                </a>
                
                ";
                }
                // line 180
                echo "                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        echo "                    
                </div>
            </div>
        </section>
        <div class=\"line\"></div>
<section class=\"mainblog\">
            <div class=\"container\">
                ";
        // line 188
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("blog"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 189
        echo "                <div class=\"mainblog__blogs\">
                ";
        // line 190
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, false, 190);
        // line 191
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 192
            echo "                
                    <div class=\"mainblog__blog\">
                    ";
            // line 194
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 194), "count", [], "any", false, false, false, 194)) {
                // line 195
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 195));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 196
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 196), "html", null, true);
                    echo "\" class=\"mainblog__img\">
                            <img src=\"";
                    // line 197
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 197), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, false, 197), "html", null, true);
                    echo "\">
                            <span class=\"icon-search mainblog__icon\"></span>
                        </a>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 201
                echo "                    ";
            }
            // line 202
            echo "                        <div class=\"mainblog__date\">
                            <span class=\"icon-calendar\"></span>
                            <span>";
            // line 204
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, false, 204), "html", null, true);
            echo "</span>
                        </div>
                        <h3 class=\"mainblog__title-blog\">";
            // line 206
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 206), "html", null, true);
            echo "</h3>
                        <p class=\"mainblog__subtitle-blog\">";
            // line 207
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "content", [], "any", false, false, false, 207), "html", null, true);
            echo "</p>
                        <a href=\"";
            // line 208
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 208), "html", null, true);
            echo "\" class=\"mainblog__link\">читать далее</a>
                    </div>
                    
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 211
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
        return array (  533 => 211,  523 => 208,  519 => 207,  515 => 206,  510 => 204,  506 => 202,  503 => 201,  491 => 197,  486 => 196,  481 => 195,  479 => 194,  475 => 192,  470 => 191,  468 => 190,  465 => 189,  461 => 188,  452 => 181,  445 => 180,  438 => 176,  434 => 175,  430 => 174,  427 => 173,  424 => 172,  419 => 171,  406 => 160,  398 => 157,  393 => 156,  388 => 154,  381 => 152,  376 => 150,  373 => 149,  365 => 147,  363 => 146,  357 => 143,  353 => 141,  351 => 140,  348 => 139,  344 => 138,  339 => 135,  337 => 134,  322 => 122,  309 => 111,  306 => 110,  297 => 106,  292 => 105,  287 => 103,  280 => 101,  275 => 99,  272 => 98,  264 => 96,  262 => 95,  256 => 92,  252 => 90,  250 => 89,  247 => 88,  243 => 87,  240 => 86,  238 => 85,  235 => 84,  233 => 83,  218 => 71,  206 => 61,  203 => 60,  194 => 56,  189 => 55,  184 => 53,  176 => 51,  170 => 48,  163 => 46,  156 => 43,  154 => 42,  150 => 41,  147 => 40,  145 => 39,  142 => 38,  138 => 37,  135 => 36,  133 => 35,  130 => 34,  128 => 33,  124 => 31,  122 => 30,  115 => 25,  108 => 24,  99 => 20,  95 => 18,  92 => 17,  87 => 16,  83 => 14,  79 => 13,  76 => 12,  71 => 11,  69 => 10,  66 => 9,  60 => 8,  57 => 7,  52 => 6,  50 => 5,  47 => 4,  45 => 3,  42 => 2,  37 => 1,);
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


{% for cat in cat if cat.show_on_main == 1 %}
                {% if cat.product_count > 0 %}

                <div class=\"category_main\">
                    <a href=\"#{{cat.id}}\">{{ cat.name }}</a>
                </div>

                {% endif %}
                {% endfor %}
                
<section class=\"products\">
            <div class=\"container\">
                    <div class=\"products__group\">
                    
                    {% set obCategory = CategoryPage.get() %}

                    
                    {% set obProductList = ProductList.make().sort(ProductList.getSorting()).active() %}
                    
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
        </section>
        
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
