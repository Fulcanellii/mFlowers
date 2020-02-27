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

/* D:\open_server_5_3_5_basic_premium_ultimate\OSPanel\domains\october/themes/lovata-bootstrap-shopaholic/partials/header/header.htm */
class __TwigTemplate_59e1fc73e3b145a58a0fef820936bb42de0f6f25bdf61966b8357f1d0ed12651 extends \Twig\Template
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
        echo "<header class=\"header container-fluid fixed-top\">
    <nav class=\"container navbar navbar-expand-lg navbar-dark bg-dark\">
        <a class=\"navbar-brand mr-5\" ";
        // line 3
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 3), "id", [], "any", false, false, false, 3) != "index")) {
            echo "href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("index");
            echo "\" aria-label=\"Go to main page\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 3), "site_name", [], "any", false, false, false, 3), "html", null, true);
        echo "</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"row collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav col-12 col-lg-auto mr-auto mb-3 mb-lg-0\">
                ";
        // line 10
        $context["arMenuItemList"] = twig_get_attribute($this->env, $this->source, ($context["HeaderStaticMenu"] ?? null), "menuItems", [], "method", false, false, false, 10);
        // line 11
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["arMenuItemList"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        foreach ($context['_seq'] as $context["_key"] => $context["obMenuItem"]) {
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obMenuItem"], "viewBag", [], "any", false, false, false, 11), "isHidden", [], "any", false, false, false, 11) == false)) {
                // line 12
                echo "                    ";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["obMenuItem"], "items", [], "any", false, false, false, 12))) {
                    // line 13
                    echo "                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle ";
                    // line 14
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obMenuItem"], "viewBag", [], "any", false, false, false, 14), "cssClass", [], "any", false, false, false, 14), "html", null, true);
                    echo " ";
                    if ((twig_get_attribute($this->env, $this->source, $context["obMenuItem"], "isActive", [], "any", false, false, false, 14) || twig_get_attribute($this->env, $this->source, $context["obMenuItem"], "isChildActive", [], "any", false, false, false, 14))) {
                        echo "active";
                    }
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obMenuItem"], "url", [], "any", false, false, false, 14), "html", null, true);
                    echo "\" id=\"navbarDropdown-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 14), "html", null, true);
                    echo "\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                ";
                    // line 15
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obMenuItem"], "title", [], "any", false, false, false, 15), "html", null, true);
                    echo "
                            </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown-";
                    // line 17
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 17), "html", null, true);
                    echo "\">
                                ";
                    // line 18
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["obMenuItem"], "items", [], "any", false, false, false, 18));
                    $context['loop'] = [
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    ];
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["obChildMenuItem"]) {
                        // line 19
                        echo "                                    ";
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obChildMenu"] ?? null), "viewBag", [], "any", false, false, false, 19), "isHidden", [], "any", false, false, false, 19) == false)) {
                            // line 20
                            echo "                                        <a class=\"dropdown-item ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obChildMenuItem"], "viewBag", [], "any", false, false, false, 20), "cssClass", [], "any", false, false, false, 20), "html", null, true);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["obChildMenuItem"], "isActive", [], "any", false, false, false, 20)) {
                                echo "active";
                            }
                            echo "\" href=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obChildMenuItem"], "url", [], "any", false, false, false, 20), "html", null, true);
                            echo "\">
                                            ";
                            // line 21
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obChildMenuItem"], "title", [], "any", false, false, false, 21), "html", null, true);
                            echo "
                                        </a>
                                        ";
                            // line 23
                            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 23) == false)) {
                                // line 24
                                echo "                                            <div class=\"dropdown-divider\"></div>
                                        ";
                            }
                            // line 26
                            echo "                                    ";
                        }
                        // line 27
                        echo "                                ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obChildMenuItem'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 28
                    echo "                            </div>
                        </li>
                    ";
                } else {
                    // line 31
                    echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link ";
                    // line 32
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obMenuItem"], "viewBag", [], "any", false, false, false, 32), "cssClass", [], "any", false, false, false, 32), "html", null, true);
                    echo " ";
                    if (twig_get_attribute($this->env, $this->source, $context["obMenuItem"], "isActive", [], "any", false, false, false, 32)) {
                        echo "active";
                    }
                    echo "\" ";
                    if ((twig_get_attribute($this->env, $this->source, $context["obMenuItem"], "isActive", [], "any", false, false, false, 32) == false)) {
                        echo "href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obMenuItem"], "url", [], "any", false, false, false, 32), "html", null, true);
                        echo "\"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obMenuItem"], "title", [], "any", false, false, false, 32), "html", null, true);
                    echo "</a>
                        </li>
                    ";
                }
                // line 35
                echo "                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obMenuItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "            </ul>
            ";
        // line 38
        echo "            ";
        // line 46
        echo "            ";
        if ((( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 46), "facebook_link", [], "any", false, false, false, 46)) ||  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 46), "instagram_link", [], "any", false, false, false, 46))) ||  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 46), "twitter_link", [], "any", false, false, false, 46)))) {
            // line 47
            echo "                <ul class=\"col-12 col-lg-auto order-1 order-lg-0 social-icon__list\">
                    ";
            // line 48
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 48), "facebook_link", [], "any", false, false, false, 48))) {
                // line 49
                echo "                        <li class=\"social-icon__item\"><a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 49), "facebook_link", [], "any", false, false, false, 49), "html", null, true);
                echo "\" class=\"social-icon__link\" role=\"button\" aria-label=\"Go to facebook plugin page\"><i class=\"fa fa-lg fa-facebook fa-fw\"></i></a></li>
                    ";
            }
            // line 51
            echo "                    ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 51), "instagram_link", [], "any", false, false, false, 51))) {
                // line 52
                echo "                        <li class=\"social-icon__item\"><a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 52), "instagram_link", [], "any", false, false, false, 52), "html", null, true);
                echo "\" class=\"social-icon__link\" role=\"button\" aria-label=\"Go to instagram plugin page\"><i class=\"fa fa-lg fa-instagram fa-fw\"></i></a></li>
                    ";
            }
            // line 54
            echo "                    ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 54), "twitter_link", [], "any", false, false, false, 54))) {
                // line 55
                echo "                        <li class=\"social-icon__item\"><a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 55), "twitter_link", [], "any", false, false, false, 55), "html", null, true);
                echo "\" class=\"social-icon__link\" role=\"button\" aria-label=\"Go to twitter plugin page\"><i class=\"fa fa-lg fa-twitter fa-fw\"></i></a></li>
                    ";
            }
            // line 57
            echo "                </ul>
            ";
        }
        // line 59
        echo "            <div class=\"_ajax_cart_link_header_wrapper col-12 col-lg-auto mb-4 mb-lg-0\">
                ";
        // line 60
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product/cart-link-header/cart-link-header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 61
        echo "            </div>
        </div>
    </nav>
</header>";
    }

    public function getTemplateName()
    {
        return "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/header/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 61,  237 => 60,  234 => 59,  230 => 57,  224 => 55,  221 => 54,  215 => 52,  212 => 51,  206 => 49,  204 => 48,  201 => 47,  198 => 46,  196 => 38,  193 => 36,  183 => 35,  165 => 32,  162 => 31,  157 => 28,  143 => 27,  140 => 26,  136 => 24,  134 => 23,  129 => 21,  118 => 20,  115 => 19,  98 => 18,  94 => 17,  89 => 15,  77 => 14,  74 => 13,  71 => 12,  59 => 11,  57 => 10,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"header container-fluid fixed-top\">
    <nav class=\"container navbar navbar-expand-lg navbar-dark bg-dark\">
        <a class=\"navbar-brand mr-5\" {% if this.page.id != 'index' %}href=\"{{ 'index'|page }}\" aria-label=\"Go to main page\"{% endif %}>{{ this.theme.site_name }}</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"row collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav col-12 col-lg-auto mr-auto mb-3 mb-lg-0\">
                {% set arMenuItemList = HeaderStaticMenu.menuItems() %}
                {% for obMenuItem in arMenuItemList if obMenuItem.viewBag.isHidden == false %}
                    {% if obMenuItem.items is not empty %}
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle {{ obMenuItem.viewBag.cssClass }} {% if obMenuItem.isActive or obMenuItem.isChildActive %}active{% endif %}\" href=\"{{ obMenuItem.url }}\" id=\"navbarDropdown-{{ loop.index }}\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                {{ obMenuItem.title }}
                            </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown-{{ loop.index }}\">
                                {% for obChildMenuItem in obMenuItem.items %}
                                    {% if obChildMenu.viewBag.isHidden == false %}
                                        <a class=\"dropdown-item {{ obChildMenuItem.viewBag.cssClass }} {% if obChildMenuItem.isActive %}active{% endif %}\" href=\"{{ obChildMenuItem.url }}\">
                                            {{ obChildMenuItem.title }}
                                        </a>
                                        {% if loop.last == false %}
                                            <div class=\"dropdown-divider\"></div>
                                        {% endif %}
                                    {% endif %}
                                {% endfor %}
                            </div>
                        </li>
                    {% else %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link {{ obMenuItem.viewBag.cssClass }} {% if obMenuItem.isActive %}active{% endif %}\" {% if obMenuItem.isActive == false %}href=\"{{ obMenuItem.url }}\"{% endif %}>{{ obMenuItem.title }}</a>
                        </li>
                    {% endif %}
                {% endfor %}
            </ul>
            {# search is hidden for the next release version #}
            {#<div class=\"input-group col-lg-3 col-12 order-1 order-lg-0 header__search\">
                <input class=\"form-control py-2 border-right-0 border\" type=\"search\" placeholder=\"search\" id=\"example-search-input\">
                <span class=\"input-group-append\">
                    <button class=\"btn btn-outline-secondary border-left-0 border btn_bg-white\" type=\"button\">
                        <i class=\"fa fa-search\"></i>
                    </button>
                </span>
            </div>#}
            {% if this.theme.facebook_link is not empty or this.theme.instagram_link is not empty or this.theme.twitter_link is not empty %}
                <ul class=\"col-12 col-lg-auto order-1 order-lg-0 social-icon__list\">
                    {% if this.theme.facebook_link is not empty %}
                        <li class=\"social-icon__item\"><a href=\"{{ this.theme.facebook_link }}\" class=\"social-icon__link\" role=\"button\" aria-label=\"Go to facebook plugin page\"><i class=\"fa fa-lg fa-facebook fa-fw\"></i></a></li>
                    {% endif %}
                    {% if this.theme.instagram_link is not empty %}
                        <li class=\"social-icon__item\"><a href=\"{{ this.theme.instagram_link }}\" class=\"social-icon__link\" role=\"button\" aria-label=\"Go to instagram plugin page\"><i class=\"fa fa-lg fa-instagram fa-fw\"></i></a></li>
                    {% endif %}
                    {% if this.theme.twitter_link is not empty %}
                        <li class=\"social-icon__item\"><a href=\"{{ this.theme.twitter_link }}\" class=\"social-icon__link\" role=\"button\" aria-label=\"Go to twitter plugin page\"><i class=\"fa fa-lg fa-twitter fa-fw\"></i></a></li>
                    {% endif %}
                </ul>
            {% endif %}
            <div class=\"_ajax_cart_link_header_wrapper col-12 col-lg-auto mb-4 mb-lg-0\">
                {% partial 'product/cart-link-header/cart-link-header' %}
            </div>
        </div>
    </nav>
</header>", "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/header/header.htm", "");
    }
}
