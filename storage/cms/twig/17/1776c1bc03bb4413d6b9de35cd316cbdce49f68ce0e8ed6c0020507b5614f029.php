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

<section class=\"products\">
            <div class=\"container\">
                    <div class=\"products__group\">
                    
                    ";
        // line 20
        $context["obCategory"] = twig_get_attribute($this->env, $this->source, ($context["CategoryPage"] ?? null), "get", [], "method", false, false, false, 20);
        // line 21
        echo "                    
                    ";
        // line 22
        $context["obProductList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ProductList"] ?? null), "make", [], "method", false, false, false, 22), "sort", [0 => twig_get_attribute($this->env, $this->source, ($context["ProductList"] ?? null), "getSorting", [], "method", false, false, false, 22)], "method", false, false, false, 22), "active", [], "method", false, false, false, 22);
        // line 23
        echo "                    
                    ";
        // line 24
        if (twig_get_attribute($this->env, $this->source, ($context["obProductList"] ?? null), "isNotEmpty", [], "method", false, false, false, 24)) {
            // line 25
            echo "
                    ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["obProductList"] ?? null), 0, 8));
            foreach ($context['_seq'] as $context["_key"] => $context["obProduct"]) {
                // line 27
                echo "                    
                    ";
                // line 28
                $context["obOffer"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProduct"], "offer", [], "any", false, false, false, 28), "first", [], "method", false, false, false, 28);
                // line 29
                echo "                    
                        <div class=\"products__product\" data-id=\"";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obProduct"], "id", [], "any", false, false, false, 30), "html", null, true);
                echo "\" >
                            ";
                // line 31
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["obProduct"], "preview_image", [], "any", false, false, false, 31))) {
                    // line 32
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obProduct"], "getPageUrl", [0 => "catalog"], "method", false, false, false, 32), "html", null, true);
                    echo "\">
                                <div class=\"products__photo\">
                                    <span class=\"icon-eye products__icon\"></span>
                                    <img src=\"";
                    // line 35
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProduct"], "preview_image", [], "any", false, false, false, 35), "getThumb", [0 => 300, 1 => 300, 2 => ["quality" => 80]], "method", false, false, false, 35), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProduct"], "preview_image", [], "any", false, false, false, 35), "description", [], "any", false, false, false, 35), "html", null, true);
                    echo "\">
                                </div>
                                <span class=\"products__name\">";
                    // line 37
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obProduct"], "name", [], "any", false, false, false, 37), "html", null, true);
                    echo "</span>
                            </a>
                            ";
                }
                // line 40
                echo "                            <span class=\"products__price\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "price", [], "any", false, false, false, 40), "html", null, true);
                echo "  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "currency", [], "any", false, false, false, 40), "html", null, true);
                echo "</span>
                            <form class=\"mb-0\">
                <input type=\"hidden\" name=\"offer_id\" value=\"";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "id", [], "any", false, false, false, 42), "html", null, true);
                echo "\">
                <input type=\"hidden\" name=\"quantity\" value=\"1\">
                ";
                // line 44
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['btnAddClasses'] = "btn-sm"                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("form/button-add-to-cart/button-add-to-cart"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 45
                echo "            </form>
                        </div>

                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obProduct'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "                    ";
        }
        // line 50
        echo "            </div>      
        </section>
        
<div class=\"line\"></div>

<section class=\"newproduct\">
            <div class=\"container\">
                <div class=\"newproduct__wrap\">

                    <div class=\"newproduct__text\">
                        <img src=\"";
        // line 60
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
        // line 72
        $context["obProductList2"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ProductList2"] ?? null), "make", [], "method", false, false, false, 72), "sort", [0 => twig_get_attribute($this->env, $this->source, ($context["ProductList2"] ?? null), "getSorting", [], "method", false, false, false, 72)], "method", false, false, false, 72), "active", [], "method", false, false, false, 72);
        // line 73
        echo "             
                    ";
        // line 74
        if (twig_get_attribute($this->env, $this->source, ($context["obProductList2"] ?? null), "isNotEmpty", [], "method", false, false, false, 74)) {
            // line 75
            echo "                    
                    ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["obProductList2"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["obProduct2"]) {
                // line 77
                echo "                    
                    ";
                // line 78
                $context["obOffer2"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProduct2"], "offer", [], "any", false, false, false, 78), "first", [], "method", false, false, false, 78);
                // line 79
                echo "                    
                        <div class=\"products__product products__product-new\">
                            <a href=\"";
                // line 81
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obProduct2"], "getPageUrl", [0 => "catalog"], "method", false, false, false, 81), "html", null, true);
                echo "\">
                                <div class=\"products__photo newproduct__photo\">
                                    <span class=\"icon-eye products__icon\"></span>
                                    ";
                // line 84
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["obProduct2"], "preview_image", [], "any", false, false, false, 84))) {
                    // line 85
                    echo "                                    <img src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProduct2"], "preview_image", [], "any", false, false, false, 85), "getThumb", [0 => 300, 1 => 300, 2 => ["quality" => 80]], "method", false, false, false, 85), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProduct2"], "preview_image", [], "any", false, false, false, 85), "description", [], "any", false, false, false, 85), "html", null, true);
                    echo "\">
                                    ";
                }
                // line 87
                echo "                                </div>
                                <span class=\"products__name\">";
                // line 88
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obProduct2"], "name", [], "any", false, false, false, 88), "html", null, true);
                echo "</span>
                            </a>
                            <span class=\"products__price\">";
                // line 90
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer2"] ?? null), "price", [], "any", false, false, false, 90), "html", null, true);
                echo "  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer2"] ?? null), "currency", [], "any", false, false, false, 90), "html", null, true);
                echo "</span>
                            <form class=\"mb-0\">
                <input type=\"hidden\" name=\"offer_id\" value=\"";
                // line 92
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer2"] ?? null), "id", [], "any", false, false, false, 92), "html", null, true);
                echo "\">
                <input type=\"hidden\" name=\"quantity\" value=\"1\">
                ";
                // line 94
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['btnAddClasses'] = "btn-sm"                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("form/button-add-to-cart/button-add-to-cart"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 95
                echo "            </form>
                        </div>
                    
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obProduct2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "                    ";
        }
        // line 100
        echo "                    </div>
                </div>
            </div>
        </section>


<section class=\"newproduct\">
            <div class=\"container\">
                <div class=\"newproduct__wrap newproduct__wrap-reverse\">

                    <div class=\"newproduct__text\">
                        <img src=\"";
        // line 111
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
        // line 123
        $context["obProductList2"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ProductList2"] ?? null), "make", [], "method", false, false, false, 123), "active", [], "method", false, false, false, 123), "random", [0 => 5], "method", false, false, false, 123);
        // line 124
        echo "         


                    ";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["obProductList2"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["obProduct2"]) {
            // line 128
            echo "                    
                    ";
            // line 129
            $context["obOffer2"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProduct2"], "offer", [], "any", false, false, false, 129), "first", [], "method", false, false, false, 129);
            // line 130
            echo "                    
                        <div class=\"products__product products__product-new\">
                            <a href=\"";
            // line 132
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obProduct2"], "getPageUrl", [0 => "catalog"], "method", false, false, false, 132), "html", null, true);
            echo "\">
                                <div class=\"products__photo newproduct__photo\">
                                    <span class=\"icon-eye products__icon\"></span>
                                    ";
            // line 135
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["obProduct2"], "preview_image", [], "any", false, false, false, 135))) {
                // line 136
                echo "                                    <img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProduct2"], "preview_image", [], "any", false, false, false, 136), "getThumb", [0 => 300, 1 => 300, 2 => ["quality" => 80]], "method", false, false, false, 136), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProduct2"], "preview_image", [], "any", false, false, false, 136), "description", [], "any", false, false, false, 136), "html", null, true);
                echo "\">
                                    ";
            }
            // line 138
            echo "                                </div>
                                <span class=\"products__name\">";
            // line 139
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obProduct2"], "name", [], "any", false, false, false, 139), "html", null, true);
            echo "</span>
                            </a>
                            <span class=\"products__price\">";
            // line 141
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer2"] ?? null), "price", [], "any", false, false, false, 141), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer2"] ?? null), "currency", [], "any", false, false, false, 141), "html", null, true);
            echo "</span>
                            <form class=\"mb-0\">
                <input type=\"hidden\" name=\"offer_id\" value=\"";
            // line 143
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer2"] ?? null), "id", [], "any", false, false, false, 143), "html", null, true);
            echo "\">
                <input type=\"hidden\" name=\"quantity\" value=\"1\">
                ";
            // line 145
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['btnAddClasses'] = "btn-sm"            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("form/button-add-to-cart/button-add-to-cart"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 146
            echo "            </form>
                        </div>
                         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obProduct2'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
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
        // line 160
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["cat"]);
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            if ((twig_get_attribute($this->env, $this->source, $context["cat"], "show_on_main", [], "any", false, false, false, 160) == 1)) {
                // line 161
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["cat"], "product_count", [], "any", false, false, false, 161) > 0)) {
                    // line 162
                    echo "
                <a href=\"";
                    // line 163
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "getPageUrl", [0 => "category-page"], "method", false, false, false, 163), "html", null, true);
                    echo "\" class=\"occation__link\">
                        <h3 class=\"occation__title\">";
                    // line 164
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "name", [], "any", false, false, false, 164), "html", null, true);
                    echo "</h3>
                        <img src=\"";
                    // line 165
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cat"], "preview_image", [], "any", false, false, false, 165), "path", [], "any", false, false, false, 165), "html", null, true);
                    echo "\" alt=\"#\">
                </a>
                
                ";
                }
                // line 169
                echo "                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        echo "                    
                </div>
            </div>
        </section>
        <div class=\"line\"></div>
<section class=\"mainblog\">
            <div class=\"container\">
                ";
        // line 177
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("blog"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 178
        echo "                <div class=\"mainblog__blogs\">
                ";
        // line 179
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, false, 179);
        // line 180
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 181
            echo "                
                    <div class=\"mainblog__blog\">
                    ";
            // line 183
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 183), "count", [], "any", false, false, false, 183)) {
                // line 184
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 184));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 185
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 185), "html", null, true);
                    echo "\" class=\"mainblog__img\">
                            <img src=\"";
                    // line 186
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 186), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, false, 186), "html", null, true);
                    echo "\">
                            <span class=\"icon-search mainblog__icon\"></span>
                        </a>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 190
                echo "                    ";
            }
            // line 191
            echo "                        <div class=\"mainblog__date\">
                            <span class=\"icon-calendar\"></span>
                            <span>";
            // line 193
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, false, 193), "html", null, true);
            echo "</span>
                        </div>
                        <h3 class=\"mainblog__title-blog\">";
            // line 195
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 195), "html", null, true);
            echo "</h3>
                        <p class=\"mainblog__subtitle-blog\">";
            // line 196
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "content", [], "any", false, false, false, 196), "html", null, true);
            echo "</p>
                        <a href=\"";
            // line 197
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 197), "html", null, true);
            echo "\" class=\"mainblog__link\">читать далее</a>
                    </div>
                    
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 200
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
        return array (  501 => 200,  491 => 197,  487 => 196,  483 => 195,  478 => 193,  474 => 191,  471 => 190,  459 => 186,  454 => 185,  449 => 184,  447 => 183,  443 => 181,  438 => 180,  436 => 179,  433 => 178,  429 => 177,  420 => 170,  413 => 169,  406 => 165,  402 => 164,  398 => 163,  395 => 162,  392 => 161,  387 => 160,  374 => 149,  366 => 146,  361 => 145,  356 => 143,  349 => 141,  344 => 139,  341 => 138,  333 => 136,  331 => 135,  325 => 132,  321 => 130,  319 => 129,  316 => 128,  312 => 127,  307 => 124,  305 => 123,  290 => 111,  277 => 100,  274 => 99,  265 => 95,  260 => 94,  255 => 92,  248 => 90,  243 => 88,  240 => 87,  232 => 85,  230 => 84,  224 => 81,  220 => 79,  218 => 78,  215 => 77,  211 => 76,  208 => 75,  206 => 74,  203 => 73,  201 => 72,  186 => 60,  174 => 50,  171 => 49,  162 => 45,  157 => 44,  152 => 42,  144 => 40,  138 => 37,  131 => 35,  124 => 32,  122 => 31,  118 => 30,  115 => 29,  113 => 28,  110 => 27,  106 => 26,  103 => 25,  101 => 24,  98 => 23,  96 => 22,  93 => 21,  91 => 20,  83 => 14,  79 => 13,  76 => 12,  71 => 11,  69 => 10,  66 => 9,  60 => 8,  57 => 7,  52 => 6,  50 => 5,  47 => 4,  45 => 3,  42 => 2,  37 => 1,);
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

                <a href=\"{{ cat.getPageUrl('category-page') }}\" class=\"occation__link\">
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
