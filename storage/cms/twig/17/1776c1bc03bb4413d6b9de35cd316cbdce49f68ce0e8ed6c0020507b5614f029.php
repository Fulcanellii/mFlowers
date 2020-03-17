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
        $context["cat"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["CategoryList"] ?? null), "make", [], "method", false, false, false, 1), "tree", [], "method", false, false, false, 1);
        // line 2
        echo "
";
        // line 3
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("main-banner.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 4
        echo "
<div id=\"slider\">
";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["cat"]);
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            if ((twig_get_attribute($this->env, $this->source, $context["cat"], "show_on_main", [], "any", false, false, false, 6) == 1)) {
                // line 7
                echo "

                ";
                // line 9
                if ((twig_get_attribute($this->env, $this->source, $context["cat"], "product_count", [], "any", false, false, false, 9) > 0)) {
                    // line 10
                    echo "
                
                  <div class=\"slide \" title=\"";
                    // line 12
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "name", [], "any", false, false, false, 12), "html", null, true);
                    echo "\">
                  
                     <section class=\"products\">
                    <div class=\"container\">
                    <div class=\"products__group\">
                    
                    ";
                    // line 18
                    $context["obCategory"] = twig_get_attribute($this->env, $this->source, ($context["CategoryPage"] ?? null), "get", [], "method", false, false, false, 18);
                    // line 19
                    echo "                    
                    ";
                    // line 20
                    $context["obProductList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ProductList"] ?? null), "make", [], "method", false, false, false, 20), "sort", [0 => twig_get_attribute($this->env, $this->source, ($context["ProductList"] ?? null), "getSorting", [], "method", false, false, false, 20)], "method", false, false, false, 20), "active", [], "method", false, false, false, 20), "category", [0 => twig_get_attribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 20)], "method", false, false, false, 20);
                    // line 21
                    echo "                    
                    ";
                    // line 22
                    if (twig_get_attribute($this->env, $this->source, ($context["obProductList"] ?? null), "isNotEmpty", [], "method", false, false, false, 22)) {
                        // line 23
                        echo "
                    ";
                        // line 24
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["obProductList"] ?? null), 0, 8));
                        foreach ($context['_seq'] as $context["_key"] => $context["obProduct"]) {
                            // line 25
                            echo "                    
                    ";
                            // line 26
                            $context["obOffer"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProduct"], "offer", [], "any", false, false, false, 26), "first", [], "method", false, false, false, 26);
                            // line 27
                            echo "                    
                        <div class=\"products__product\" data-id=\"";
                            // line 28
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obProduct"], "id", [], "any", false, false, false, 28), "html", null, true);
                            echo "\" >
                            ";
                            // line 29
                            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["obProduct"], "preview_image", [], "any", false, false, false, 29))) {
                                // line 30
                                echo "                            <a href=\"";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obProduct"], "getPageUrl", [0 => "catalog"], "method", false, false, false, 30), "html", null, true);
                                echo "\">
                                <div class=\"products__photo\">
                                    <span class=\"icon-eye products__icon\"></span>
                                    <img src=\"";
                                // line 33
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProduct"], "preview_image", [], "any", false, false, false, 33), "getThumb", [0 => 300, 1 => 300, 2 => ["quality" => 80]], "method", false, false, false, 33), "html", null, true);
                                echo "\" alt=\"";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProduct"], "preview_image", [], "any", false, false, false, 33), "description", [], "any", false, false, false, 33), "html", null, true);
                                echo "\">
                                </div>
                                <span class=\"products__name\">";
                                // line 35
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obProduct"], "name", [], "any", false, false, false, 35), "html", null, true);
                                echo "</span>
                            </a>
                            ";
                            }
                            // line 38
                            echo "                            <span class=\"products__price\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "price", [], "any", false, false, false, 38), "html", null, true);
                            echo "  ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "currency", [], "any", false, false, false, 38), "html", null, true);
                            echo "</span>
                            <form class=\"mb-0\">
                <input type=\"hidden\" name=\"offer_id\" value=\"";
                            // line 40
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "id", [], "any", false, false, false, 40), "html", null, true);
                            echo "\">
                <input type=\"hidden\" name=\"quantity\" value=\"1\">
                ";
                            // line 42
                            $context['__cms_partial_params'] = [];
                            $context['__cms_partial_params']['btnAddClasses'] = "btn-sm"                            ;
                            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("form/button-add-to-cart/button-add-to-cart"                            , $context['__cms_partial_params']                            , true                            );
                            unset($context['__cms_partial_params']);
                            // line 43
                            echo "            </form>
                        </div>

                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obProduct'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 47
                        echo "                    ";
                    }
                    // line 48
                    echo "            </div>
            </div>    
        </section>
        
                  </div>
               

                ";
                }
                // line 56
                echo "                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                 </div>










<div class=\"line\"></div>

<section class=\"newproduct\">
            <div class=\"container\">
                <div class=\"newproduct__wrap\">

                    <div class=\"newproduct__text\">
                        <img src=\"";
        // line 75
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
        // line 87
        $context["obProductList2"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ProductList2"] ?? null), "make", [], "method", false, false, false, 87), "sort", [0 => twig_get_attribute($this->env, $this->source, ($context["ProductList2"] ?? null), "getSorting", [], "method", false, false, false, 87)], "method", false, false, false, 87), "active", [], "method", false, false, false, 87);
        // line 88
        echo "             
                    ";
        // line 89
        if (twig_get_attribute($this->env, $this->source, ($context["obProductList2"] ?? null), "isNotEmpty", [], "method", false, false, false, 89)) {
            // line 90
            echo "                    
                    ";
            // line 91
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["obProductList2"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["obProduct2"]) {
                // line 92
                echo "                    
                    ";
                // line 93
                $context["obOffer2"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProduct2"], "offer", [], "any", false, false, false, 93), "first", [], "method", false, false, false, 93);
                // line 94
                echo "                    
                        <div class=\"products__product products__product-new\">
                            <a href=\"";
                // line 96
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obProduct2"], "getPageUrl", [0 => "catalog"], "method", false, false, false, 96), "html", null, true);
                echo "\">
                                <div class=\"products__photo newproduct__photo\">
                                    <span class=\"icon-eye products__icon\"></span>
                                    ";
                // line 99
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["obProduct2"], "preview_image", [], "any", false, false, false, 99))) {
                    // line 100
                    echo "                                    <img src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProduct2"], "preview_image", [], "any", false, false, false, 100), "getThumb", [0 => 300, 1 => 300, 2 => ["quality" => 80]], "method", false, false, false, 100), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProduct2"], "preview_image", [], "any", false, false, false, 100), "description", [], "any", false, false, false, 100), "html", null, true);
                    echo "\">
                                    ";
                }
                // line 102
                echo "                                </div>
                                <span class=\"products__name\">";
                // line 103
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obProduct2"], "name", [], "any", false, false, false, 103), "html", null, true);
                echo "</span>
                            </a>
                            <span class=\"products__price\">";
                // line 105
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer2"] ?? null), "price", [], "any", false, false, false, 105), "html", null, true);
                echo "  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer2"] ?? null), "currency", [], "any", false, false, false, 105), "html", null, true);
                echo "</span>
                            <form class=\"mb-0\">
                <input type=\"hidden\" name=\"offer_id\" value=\"";
                // line 107
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer2"] ?? null), "id", [], "any", false, false, false, 107), "html", null, true);
                echo "\">
                <input type=\"hidden\" name=\"quantity\" value=\"1\">
                ";
                // line 109
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['btnAddClasses'] = "btn-sm"                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("form/button-add-to-cart/button-add-to-cart"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 110
                echo "            </form>
                        </div>
                    
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obProduct2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 114
            echo "                    ";
        }
        // line 115
        echo "                    </div>
                </div>
            </div>
        </section>


<section class=\"newproduct\">
            <div class=\"container\">
                <div class=\"newproduct__wrap newproduct__wrap-reverse\">

                    <div class=\"newproduct__text\">
                        <img src=\"";
        // line 126
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
        // line 138
        $context["obProductList2"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ProductList2"] ?? null), "make", [], "method", false, false, false, 138), "active", [], "method", false, false, false, 138), "random", [0 => 5], "method", false, false, false, 138);
        // line 139
        echo "         


                    ";
        // line 142
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["obProductList2"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["obProduct2"]) {
            // line 143
            echo "                    
                    ";
            // line 144
            $context["obOffer2"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProduct2"], "offer", [], "any", false, false, false, 144), "first", [], "method", false, false, false, 144);
            // line 145
            echo "                    
                        <div class=\"products__product products__product-new\">
                            <a href=\"";
            // line 147
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obProduct2"], "getPageUrl", [0 => "catalog"], "method", false, false, false, 147), "html", null, true);
            echo "\">
                                <div class=\"products__photo newproduct__photo\">
                                    <span class=\"icon-eye products__icon\"></span>
                                    ";
            // line 150
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["obProduct2"], "preview_image", [], "any", false, false, false, 150))) {
                // line 151
                echo "                                    <img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProduct2"], "preview_image", [], "any", false, false, false, 151), "getThumb", [0 => 300, 1 => 300, 2 => ["quality" => 80]], "method", false, false, false, 151), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProduct2"], "preview_image", [], "any", false, false, false, 151), "description", [], "any", false, false, false, 151), "html", null, true);
                echo "\">
                                    ";
            }
            // line 153
            echo "                                </div>
                                <span class=\"products__name\">";
            // line 154
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obProduct2"], "name", [], "any", false, false, false, 154), "html", null, true);
            echo "</span>
                            </a>
                            <span class=\"products__price\">";
            // line 156
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer2"] ?? null), "price", [], "any", false, false, false, 156), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer2"] ?? null), "currency", [], "any", false, false, false, 156), "html", null, true);
            echo "</span>
                            <form class=\"mb-0\">
                <input type=\"hidden\" name=\"offer_id\" value=\"";
            // line 158
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer2"] ?? null), "id", [], "any", false, false, false, 158), "html", null, true);
            echo "\">
                <input type=\"hidden\" name=\"quantity\" value=\"1\">
                ";
            // line 160
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['btnAddClasses'] = "btn-sm"            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("form/button-add-to-cart/button-add-to-cart"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 161
            echo "            </form>
                        </div>
                         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obProduct2'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
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
        // line 175
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["cat"]);
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            if ((twig_get_attribute($this->env, $this->source, $context["cat"], "show_on_main", [], "any", false, false, false, 175) == 1)) {
                // line 176
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["cat"], "product_count", [], "any", false, false, false, 176) > 0)) {
                    // line 177
                    echo "
                <a href=\"";
                    // line 178
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "getPageUrl", [0 => "catalog"], "method", false, false, false, 178), "html", null, true);
                    echo "\" class=\"occation__link\">
                        <h3 class=\"occation__title\">";
                    // line 179
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "name", [], "any", false, false, false, 179), "html", null, true);
                    echo "</h3>
                        <img src=\"";
                    // line 180
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cat"], "preview_image", [], "any", false, false, false, 180), "path", [], "any", false, false, false, 180), "html", null, true);
                    echo "\" alt=\"#\">
                </a>
                
                ";
                }
                // line 184
                echo "                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 185
        echo "                    
                </div>
            </div>
        </section>
        <div class=\"line\"></div>
<section class=\"mainblog\">
            <div class=\"container\">
                ";
        // line 192
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("blog"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 193
        echo "                <div class=\"mainblog__blogs\">
                ";
        // line 194
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, false, 194);
        // line 195
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 196
            echo "                
                    <div class=\"mainblog__blog\">
                    ";
            // line 198
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 198), "count", [], "any", false, false, false, 198)) {
                // line 199
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 199));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 200
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 200), "html", null, true);
                    echo "\" class=\"mainblog__img\">
                            <img src=\"";
                    // line 201
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 201), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, false, 201), "html", null, true);
                    echo "\">
                            <span class=\"icon-search mainblog__icon\"></span>
                        </a>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 205
                echo "                    ";
            }
            // line 206
            echo "                        <div class=\"mainblog__date\">
                            <span class=\"icon-calendar\"></span>
                            <span>";
            // line 208
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, false, 208), "html", null, true);
            echo "</span>
                        </div>
                        <h3 class=\"mainblog__title-blog\">";
            // line 210
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 210), "html", null, true);
            echo "</h3>
                        <p class=\"mainblog__subtitle-blog\">";
            // line 211
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "content", [], "any", false, false, false, 211), "html", null, true);
            echo "</p>
                        <a href=\"";
            // line 212
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 212), "html", null, true);
            echo "\" class=\"mainblog__link\">читать далее</a>
                    </div>
                    
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 215
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
        return array (  509 => 215,  499 => 212,  495 => 211,  491 => 210,  486 => 208,  482 => 206,  479 => 205,  467 => 201,  462 => 200,  457 => 199,  455 => 198,  451 => 196,  446 => 195,  444 => 194,  441 => 193,  437 => 192,  428 => 185,  421 => 184,  414 => 180,  410 => 179,  406 => 178,  403 => 177,  400 => 176,  395 => 175,  382 => 164,  374 => 161,  369 => 160,  364 => 158,  357 => 156,  352 => 154,  349 => 153,  341 => 151,  339 => 150,  333 => 147,  329 => 145,  327 => 144,  324 => 143,  320 => 142,  315 => 139,  313 => 138,  298 => 126,  285 => 115,  282 => 114,  273 => 110,  268 => 109,  263 => 107,  256 => 105,  251 => 103,  248 => 102,  240 => 100,  238 => 99,  232 => 96,  228 => 94,  226 => 93,  223 => 92,  219 => 91,  216 => 90,  214 => 89,  211 => 88,  209 => 87,  194 => 75,  174 => 57,  167 => 56,  157 => 48,  154 => 47,  145 => 43,  140 => 42,  135 => 40,  127 => 38,  121 => 35,  114 => 33,  107 => 30,  105 => 29,  101 => 28,  98 => 27,  96 => 26,  93 => 25,  89 => 24,  86 => 23,  84 => 22,  81 => 21,  79 => 20,  76 => 19,  74 => 18,  65 => 12,  61 => 10,  59 => 9,  55 => 7,  50 => 6,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set cat = CategoryList.make().tree() %}

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
