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
        $context["obPromoBlockList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["PromoBlockList"] ?? null), "make", [], "method", false, false, false, 3), "merge", [0 => [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 3), "promo_block_left", [], "any", false, false, false, 3), 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 3), "promo_block_middle", [], "any", false, false, false, 3), 2 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 3), "promo_block_right", [], "any", false, false, false, 3)]], "method", false, false, false, 3);
        // line 4
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['obPromoBlockList'] = ($context["obPromoBlockList"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("promo-block/promo-block-product-tab/promo-block-product-tab"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "
";
        // line 6
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['sImagePath'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 6), "index_banner", [], "any", false, false, false, 6)        ;
        $context['__cms_partial_params']['sLink'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 6), "index_banner_link", [], "any", false, false, false, 6)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("content/banner/banner"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 7
        echo "
";
        // line 8
        $context["obCategoryList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["CategoryList"] ?? null), "make", [], "method", false, false, false, 8), "merge", [0 => [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 8), "category_left", [], "any", false, false, false, 8), 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 8), "category_middle", [], "any", false, false, false, 8), 2 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 8), "category_right", [], "any", false, false, false, 8)]], "method", false, false, false, 8);
        // line 9
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['obCategoryList'] = ($context["obCategoryList"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("category/category-product-column/category-product-column"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 10
        echo "
";
        // line 11
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("main-banner.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 12
        echo "
";
        // line 13
        $context["cat"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["CategoryList"] ?? null), "make", [], "method", false, false, false, 13), "tree", [], "method", false, false, false, 13);
        // line 14
        echo "
<section class=\"occation\">
            <div class=\"container\">
                <div class=\"occation__wrap\">
                
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["cat"]);
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            if ((twig_get_attribute($this->env, $this->source, $context["cat"], "show_on_main", [], "any", false, false, false, 19) == 1)) {
                // line 20
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["cat"], "product_count", [], "any", false, false, false, 20) > 0)) {
                    // line 21
                    echo "
                <a href=\"";
                    // line 22
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "getPageUrl", [0 => "category-page"], "method", false, false, false, 22), "html", null, true);
                    echo "\" class=\"occation__link\">
                        <h3 class=\"occation__title\">";
                    // line 23
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "name", [], "any", false, false, false, 23), "html", null, true);
                    echo "</h3>
                        <img src=\"";
                    // line 24
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cat"], "preview_image", [], "any", false, false, false, 24), "path", [], "any", false, false, false, 24), "html", null, true);
                    echo "\" alt=\"#\">
                </a>
                
                ";
                }
                // line 28
                echo "                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                    
                </div>
            </div>
        </section>
        <div class=\"line\"></div>
<section class=\"mainblog\">
            <div class=\"container\">
                ";
        // line 36
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("blog"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 37
        echo "                <div class=\"mainblog__blogs\">
                ";
        // line 38
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, false, 38);
        // line 39
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 40
            echo "                
                    <div class=\"mainblog__blog\">
                    ";
            // line 42
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 42), "count", [], "any", false, false, false, 42)) {
                // line 43
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 43));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 44
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 44), "html", null, true);
                    echo "\" class=\"mainblog__img\">
                            <img src=\"";
                    // line 45
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 45), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, false, 45), "html", null, true);
                    echo "\">
                            <span class=\"icon-search mainblog__icon\"></span>
                        </a>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 49
                echo "                    ";
            }
            // line 50
            echo "                        <div class=\"mainblog__date\">
                            <span class=\"icon-calendar\"></span>
                            <span>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, false, 52), "html", null, true);
            echo "</span>
                        </div>
                        <h3 class=\"mainblog__title-blog\">";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 54), "html", null, true);
            echo "</h3>
                        <p class=\"mainblog__subtitle-blog\">";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "content", [], "any", false, false, false, 55), "html", null, true);
            echo "</p>
                        <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 56), "html", null, true);
            echo "\" class=\"mainblog__link\">читать далее</a>
                    </div>
                    
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
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
        return array (  204 => 59,  194 => 56,  190 => 55,  186 => 54,  181 => 52,  177 => 50,  174 => 49,  162 => 45,  157 => 44,  152 => 43,  150 => 42,  146 => 40,  141 => 39,  139 => 38,  136 => 37,  132 => 36,  123 => 29,  116 => 28,  109 => 24,  105 => 23,  101 => 22,  98 => 21,  95 => 20,  90 => 19,  83 => 14,  81 => 13,  78 => 12,  74 => 11,  71 => 10,  66 => 9,  64 => 8,  61 => 7,  55 => 6,  52 => 5,  47 => 4,  45 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial 'content/carousel/carousel' arImageList=this.theme.main_slider %}

{% set obPromoBlockList = PromoBlockList.make().merge([this.theme.promo_block_left, this.theme.promo_block_middle, this.theme.promo_block_right]) %}
{% partial 'promo-block/promo-block-product-tab/promo-block-product-tab' obPromoBlockList=obPromoBlockList %}

{% partial 'content/banner/banner' sImagePath=this.theme.index_banner sLink=this.theme.index_banner_link %}

{% set obCategoryList = CategoryList.make().merge([this.theme.category_left, this.theme.category_middle, this.theme.category_right]) %}
{% partial 'category/category-product-column/category-product-column' obCategoryList=obCategoryList %}

{% content 'main-banner.htm' %}

{% set cat = CategoryList.make().tree() %}

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
