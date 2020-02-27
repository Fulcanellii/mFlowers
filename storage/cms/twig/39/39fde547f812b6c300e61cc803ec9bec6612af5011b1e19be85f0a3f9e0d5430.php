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
        echo "<header class=\"header\">
            <div class=\"container\">
                <div class=\"header__head\">
<ul class=\"header__languages\">
    <li>Русский</li>
</ul>
<div class=\"header__number\">Контактный номер:<a href=\"tel:";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 7), "contact_phone", [], "any", false, false, false, 7), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 7), "contact_phone", [], "any", false, false, false, 7), "html", null, true);
        echo "</a></div>

<div class=\"header__crumbs\">
";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["staticMenu"] ?? null), "menuItems", [], "any", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 11
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 11), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 11), "html", null, true);
            echo "</a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</div>
                
</div>
                <nav class=\"header__nav\">
                    <div class=\"hamburger_trigger\">
                        <span></span>
                    </div>
                    <form class=\"header__search-desctop\">
                    
                        <input type=\"search\" placeholder=\"Искать товар\" class=\"header__search-input-desctop\">
                        <button class=\"header__search-button-desctop\"><span class=\"icon-search\"></span></button>
                    </form>

                    <div class=\"header__logo\">
                        <img src=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/mainPage/header/fullLogo.svg");
        echo "\" alt=\"logo\">
                    </div>
                    <div class=\"_ajax_cart_link_header_wrapper col-12 col-lg-auto mb-4 mb-lg-0\">
                ";
        // line 30
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product/cart-link-header/cart-link-header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 31
        echo "            </div>
                 
                </nav>
                <ul class=\"header__navigation\">
                    <li>
                        <a href=\"/\" class=\"header__home-link\"><span class=\"icon-home\"></span></a>
                    </li>
                    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["staticMenu"] ?? null), "menuItems", [], "any", false, false, false, 38));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 39
            echo "                    <li class=\"header__list-desktop\">
                    ";
            // line 40
            if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 40)) {
                // line 41
                echo "     
                        <a href=\"";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 42), "html", null, true);
                echo "\" class=\"header__link-desktop\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 42), "html", null, true);
                echo "</a>
            
                        <ul class=\"header__drop\">
                        ";
                // line 45
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 45));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 46
                    echo "                            <li class=\"header__sublist-desktop\">
                                <a href=\"";
                    // line 47
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "url", [], "any", false, false, false, 47), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "title", [], "any", false, false, false, 47), "html", null, true);
                    echo "</a>
                            </li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                echo "                        </ul>
                    ";
            } else {
                // line 52
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 52), "html", null, true);
                echo "\" class=\"header__link-desktop\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 52), "html", null, true);
                echo "</a>
                    ";
            }
            // line 54
            echo "                    </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                </ul>

            </div>

            <div class=\"header__underline\"></div>

            <ul class=\"header__menu\">
                <li class=\"header__list \">
                    <form class=\"header__search\">
                        <input type=\"search\" class=\"header__search-input\" placeholder=\"искать товар\">
                        <button class=\"header__search-button\"><span class=\"icon-search\"></span></button>
                    </form>
                </li>
                <li class=\"header__list \">
                    <a href=\"#\" class=\"header__link header__link-home\"><span class=\"icon-home\"></span></a>
                </li>
                <li class=\"header__list\">
                    <div class=\"header__list-drop\">
                        <a href=\"#\" class=\"header__link\">случай</a>
                        <div class=\"icon-download header__buton-drop\"></div>
                    </div>
                    <ul class=\"header__submenu\">
                        <li class=\"header__sublist\">
                            <a href=\"#\">день рождения</a>
                        </li>
                        <li class=\"header__sublist\">
                            <a href=\"#\">8 марта</a>
                        </li>
                        <li class=\"header__sublist\">
                            <a href=\"#\">новый год</a>
                        </li>
                        <li class=\"header__sublist\">
                            <a href=\"#\">первое свидание</a>
                        </li>
                    </ul>
                </li>
                <li class=\"header__list\">
                    <a href=\"#\" class=\"header__link\">для нее</a>
                </li>
                <li class=\"header__list\">
                    <a href=\"#\" class=\"header__link\">день рождения</a>
                </li>
                <li class=\"header__list\">
                    <a href=\"#\" class=\"header__link\">блог</a>
                </li>
                <li class=\"header__list\">
                    <a href=\"#\" class=\"header__link\">магазин</a>
                </li>
                <li class=\"header__list\">
                    <a href=\"#\" class=\"header__link\">контакты</a>
                </li>
                <li class=\"header__button-close\">
                    X
                </li>
            </ul>
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
        return array (  160 => 56,  153 => 54,  145 => 52,  141 => 50,  130 => 47,  127 => 46,  123 => 45,  115 => 42,  112 => 41,  110 => 40,  107 => 39,  103 => 38,  94 => 31,  90 => 30,  84 => 27,  68 => 13,  57 => 11,  53 => 10,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"header\">
            <div class=\"container\">
                <div class=\"header__head\">
<ul class=\"header__languages\">
    <li>Русский</li>
</ul>
<div class=\"header__number\">Контактный номер:<a href=\"tel:{{ this.theme.contact_phone }}\">{{ this.theme.contact_phone }}</a></div>

<div class=\"header__crumbs\">
{% for item in staticMenu.menuItems %}
    <a href=\"{{ item.url }}\" >{{ item.title }}</a>
{% endfor %}
</div>
                
</div>
                <nav class=\"header__nav\">
                    <div class=\"hamburger_trigger\">
                        <span></span>
                    </div>
                    <form class=\"header__search-desctop\">
                    
                        <input type=\"search\" placeholder=\"Искать товар\" class=\"header__search-input-desctop\">
                        <button class=\"header__search-button-desctop\"><span class=\"icon-search\"></span></button>
                    </form>

                    <div class=\"header__logo\">
                        <img src=\"{{ 'assets/images/mainPage/header/fullLogo.svg'|theme }}\" alt=\"logo\">
                    </div>
                    <div class=\"_ajax_cart_link_header_wrapper col-12 col-lg-auto mb-4 mb-lg-0\">
                {% partial 'product/cart-link-header/cart-link-header' %}
            </div>
                 
                </nav>
                <ul class=\"header__navigation\">
                    <li>
                        <a href=\"/\" class=\"header__home-link\"><span class=\"icon-home\"></span></a>
                    </li>
                    {% for item in staticMenu.menuItems %}
                    <li class=\"header__list-desktop\">
                    {% if item.items %}
     
                        <a href=\"{{ item.url }}\" class=\"header__link-desktop\">{{ item.title }}</a>
            
                        <ul class=\"header__drop\">
                        {% for child in item.items %}
                            <li class=\"header__sublist-desktop\">
                                <a href=\"{{ child.url }}\">{{ child.title }}</a>
                            </li>
                        {% endfor %}
                        </ul>
                    {% else %}
                        <a href=\"{{ item.url }}\" class=\"header__link-desktop\">{{ item.title }}</a>
                    {% endif %}
                    </li>
                    {% endfor %}
                </ul>

            </div>

            <div class=\"header__underline\"></div>

            <ul class=\"header__menu\">
                <li class=\"header__list \">
                    <form class=\"header__search\">
                        <input type=\"search\" class=\"header__search-input\" placeholder=\"искать товар\">
                        <button class=\"header__search-button\"><span class=\"icon-search\"></span></button>
                    </form>
                </li>
                <li class=\"header__list \">
                    <a href=\"#\" class=\"header__link header__link-home\"><span class=\"icon-home\"></span></a>
                </li>
                <li class=\"header__list\">
                    <div class=\"header__list-drop\">
                        <a href=\"#\" class=\"header__link\">случай</a>
                        <div class=\"icon-download header__buton-drop\"></div>
                    </div>
                    <ul class=\"header__submenu\">
                        <li class=\"header__sublist\">
                            <a href=\"#\">день рождения</a>
                        </li>
                        <li class=\"header__sublist\">
                            <a href=\"#\">8 марта</a>
                        </li>
                        <li class=\"header__sublist\">
                            <a href=\"#\">новый год</a>
                        </li>
                        <li class=\"header__sublist\">
                            <a href=\"#\">первое свидание</a>
                        </li>
                    </ul>
                </li>
                <li class=\"header__list\">
                    <a href=\"#\" class=\"header__link\">для нее</a>
                </li>
                <li class=\"header__list\">
                    <a href=\"#\" class=\"header__link\">день рождения</a>
                </li>
                <li class=\"header__list\">
                    <a href=\"#\" class=\"header__link\">блог</a>
                </li>
                <li class=\"header__list\">
                    <a href=\"#\" class=\"header__link\">магазин</a>
                </li>
                <li class=\"header__list\">
                    <a href=\"#\" class=\"header__link\">контакты</a>
                </li>
                <li class=\"header__button-close\">
                    X
                </li>
            </ul>
        </header>", "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/header/header.htm", "");
    }
}
