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

/* D:\open_server_5_3_5_basic_premium_ultimate\OSPanel\domains\october/themes/lovata-bootstrap-shopaholic/partials/footer/footer.htm */
class __TwigTemplate_9952ea6e1f8b01e21c21331e7f7157faaa30208a89267425e31b04829fc25ae2 extends \Twig\Template
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
        echo "<footer class=\"footer\">
    ";
        // line 2
        if ((( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 2), "facebook_link", [], "any", false, false, false, 2)) ||  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 2), "instagram_link", [], "any", false, false, false, 2))) ||  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 2), "twitter_link", [], "any", false, false, false, 2)))) {
            // line 3
            echo "    <div class=\"container-fluid footer__top\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    Get connected with us on social networks!
                </div>
                <div class=\"col-md-6\">
                    <ul class=\"social-icon__list social-icon__list_align-right social-icon__list_dark\">
                        ";
            // line 11
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 11), "facebook_link", [], "any", false, false, false, 11))) {
                // line 12
                echo "                            <li class=\"social-icon__item\">
                                <a href=\"";
                // line 13
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 13), "facebook_link", [], "any", false, false, false, 13), "html", null, true);
                echo "\" class=\"social-icon__link social-icon__link_dark\" role=\"button\" aria-label=\"Go to facebook plugin page\">
                                    <i class=\"fa fa-lg fa-facebook fa-fw\"></i>
                                </a>
                            </li>
                        ";
            }
            // line 18
            echo "                        ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 18), "instagram_link", [], "any", false, false, false, 18))) {
                // line 19
                echo "                            <li class=\"social-icon__item\">
                                <a href=\"";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 20), "instagram_link", [], "any", false, false, false, 20), "html", null, true);
                echo "\" class=\"social-icon__link social-icon__link_dark\" role=\"button\" aria-label=\"Go to instagram plugin page\">
                                    <i class=\"fa fa-lg fa-instagram fa-fw\"></i>
                                </a>
                            </li>
                        ";
            }
            // line 25
            echo "                        ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 25), "twitter_link", [], "any", false, false, false, 25))) {
                // line 26
                echo "                            <li class=\"social-icon__item\">
                                <a href=\"";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 27), "twitter_link", [], "any", false, false, false, 27), "html", null, true);
                echo "\" class=\"social-icon__link social-icon__link_dark\" role=\"button\" aria-label=\"Go to twitter plugin page\">
                                    <i class=\"fa fa-lg fa-twitter fa-fw\"></i>
                                </a>
                            </li>
                        ";
            }
            // line 32
            echo "                    </ul>
                </div>
            </div>
        </div>
    </div>
    ";
        }
        // line 38
        echo "    <div class=\"container-fluid footer__center\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    <h4>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 42), "company_name", [], "any", false, false, false, 42), "html", null, true);
        echo "</h4>
                    <p>";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 43), "company_description", [], "any", false, false, false, 43), "html", null, true);
        echo "</p>
                </div>
                ";
        // line 45
        $context["arMenuItemList"] = twig_get_attribute($this->env, $this->source, ($context["FooterStaticMenu"] ?? null), "menuItems", [], "method", false, false, false, 45);
        // line 46
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["arMenuItemList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["obMenuItem"]) {
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obMenuItem"], "viewBag", [], "any", false, false, false, 46), "isHidden", [], "any", false, false, false, 46) == false)) {
                // line 47
                echo "                <div class=\"col-lg-2\">
                    <h4 class=\"";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obMenuItem"], "viewBag", [], "any", false, false, false, 48), "cssClass", [], "any", false, false, false, 48), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obMenuItem"], "title", [], "any", false, false, false, 48), "html", null, true);
                echo "</h4>
                    <ul class=\"footer__list category__list\">
                        ";
                // line 50
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["obMenuItem"], "items", [], "any", false, false, false, 50));
                foreach ($context['_seq'] as $context["_key"] => $context["obChildMenuItem"]) {
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obChildMenuItem"], "viewBag", [], "any", false, false, false, 50), "isHidden", [], "any", false, false, false, 50) == false)) {
                        // line 51
                        echo "                            <li class=\"category__item\">
                                <a ";
                        // line 52
                        if ((twig_get_attribute($this->env, $this->source, $context["obChildMenuItem"], "isActive", [], "any", false, false, false, 52) == false)) {
                            echo "href=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obChildMenuItem"], "url", [], "any", false, false, false, 52), "html", null, true);
                            echo "\"";
                        }
                        echo " class=\"category__link ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obChildMenuItem"], "viewBag", [], "any", false, false, false, 52), "cssClass", [], "any", false, false, false, 52), "html", null, true);
                        echo " ";
                        if (twig_get_attribute($this->env, $this->source, $context["obMenuItem"], "isActive", [], "any", false, false, false, 52)) {
                            echo "active";
                        }
                        echo "\">
                                    ";
                        // line 53
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obChildMenuItem"], "title", [], "any", false, false, false, 53), "html", null, true);
                        echo "
                                </a>
                            </li>
                        ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obChildMenuItem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                echo "                    </ul>
                </div>
                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obMenuItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                <div class=\"col-lg-4\">
                    <h4>Contacts</h4>
                    <ul class=\"footer__list\">
                        <li>Phone: <a href=\"tel:";
        // line 63
        echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 63), "contact_phone", [], "any", false, false, false, 63), ["-" => "", "(" => "", ")" => "", " " => ""]), "html", null, true);
        echo "\" class=\"footer__link\" aria-label=\"Call ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 63), "contact_phone", [], "any", false, false, false, 63), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 63), "contact_phone", [], "any", false, false, false, 63), "html", null, true);
        echo "</a></li>
                        <li>E-mail: <a href=\"mailto:";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 64), "contact_email", [], "any", false, false, false, 64), "html", null, true);
        echo "\" class=\"footer__highlighted footer__link\" aria-label=\"Email to ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 64), "contact_email", [], "any", false, false, false, 64), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 64), "contact_email", [], "any", false, false, false, 64), "html", null, true);
        echo "</a></li>
                        <li>Address: <span class=\"footer__highlighted\">";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 65), "contact_address", [], "any", false, false, false, 65), "html", null, true);
        echo "</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class=\"container-fluid footer__bottom\">
        <div class=\"container footer__bottom-text\">
            &copy; ";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 73), "copyright", [], "any", false, false, false, 73), "html", null, true);
        echo "
        </div>
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/footer/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 73,  197 => 65,  189 => 64,  181 => 63,  176 => 60,  167 => 57,  156 => 53,  142 => 52,  139 => 51,  134 => 50,  127 => 48,  124 => 47,  118 => 46,  116 => 45,  111 => 43,  107 => 42,  101 => 38,  93 => 32,  85 => 27,  82 => 26,  79 => 25,  71 => 20,  68 => 19,  65 => 18,  57 => 13,  54 => 12,  52 => 11,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"footer\">
    {% if this.theme.facebook_link is not empty or this.theme.instagram_link is not empty or this.theme.twitter_link is not empty %}
    <div class=\"container-fluid footer__top\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    Get connected with us on social networks!
                </div>
                <div class=\"col-md-6\">
                    <ul class=\"social-icon__list social-icon__list_align-right social-icon__list_dark\">
                        {% if this.theme.facebook_link is not empty %}
                            <li class=\"social-icon__item\">
                                <a href=\"{{ this.theme.facebook_link }}\" class=\"social-icon__link social-icon__link_dark\" role=\"button\" aria-label=\"Go to facebook plugin page\">
                                    <i class=\"fa fa-lg fa-facebook fa-fw\"></i>
                                </a>
                            </li>
                        {% endif %}
                        {% if this.theme.instagram_link is not empty %}
                            <li class=\"social-icon__item\">
                                <a href=\"{{ this.theme.instagram_link }}\" class=\"social-icon__link social-icon__link_dark\" role=\"button\" aria-label=\"Go to instagram plugin page\">
                                    <i class=\"fa fa-lg fa-instagram fa-fw\"></i>
                                </a>
                            </li>
                        {% endif %}
                        {% if this.theme.twitter_link is not empty %}
                            <li class=\"social-icon__item\">
                                <a href=\"{{ this.theme.twitter_link }}\" class=\"social-icon__link social-icon__link_dark\" role=\"button\" aria-label=\"Go to twitter plugin page\">
                                    <i class=\"fa fa-lg fa-twitter fa-fw\"></i>
                                </a>
                            </li>
                        {% endif %}
                    </ul>
                </div>
            </div>
        </div>
    </div>
    {% endif %}
    <div class=\"container-fluid footer__center\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    <h4>{{ this.theme.company_name }}</h4>
                    <p>{{ this.theme.company_description }}</p>
                </div>
                {% set arMenuItemList = FooterStaticMenu.menuItems() %}
                {% for obMenuItem in arMenuItemList if obMenuItem.viewBag.isHidden == false %}
                <div class=\"col-lg-2\">
                    <h4 class=\"{{ obMenuItem.viewBag.cssClass }}\">{{ obMenuItem.title }}</h4>
                    <ul class=\"footer__list category__list\">
                        {% for obChildMenuItem in obMenuItem.items if obChildMenuItem.viewBag.isHidden == false %}
                            <li class=\"category__item\">
                                <a {% if obChildMenuItem.isActive == false %}href=\"{{ obChildMenuItem.url }}\"{% endif %} class=\"category__link {{ obChildMenuItem.viewBag.cssClass }} {% if obMenuItem.isActive %}active{% endif %}\">
                                    {{ obChildMenuItem.title }}
                                </a>
                            </li>
                        {% endfor %}
                    </ul>
                </div>
                {% endfor %}
                <div class=\"col-lg-4\">
                    <h4>Contacts</h4>
                    <ul class=\"footer__list\">
                        <li>Phone: <a href=\"tel:{{ this.theme.contact_phone|replace({'-': '', '(': '', ')': '', ' ': ''}) }}\" class=\"footer__link\" aria-label=\"Call {{ this.theme.contact_phone }}\">{{ this.theme.contact_phone }}</a></li>
                        <li>E-mail: <a href=\"mailto:{{ this.theme.contact_email }}\" class=\"footer__highlighted footer__link\" aria-label=\"Email to {{ this.theme.contact_email }}\">{{ this.theme.contact_email }}</a></li>
                        <li>Address: <span class=\"footer__highlighted\">{{ this.theme.contact_address }}</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class=\"container-fluid footer__bottom\">
        <div class=\"container footer__bottom-text\">
            &copy; {{ this.theme.copyright }}
        </div>
    </div>
</footer>", "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/footer/footer.htm", "");
    }
}
