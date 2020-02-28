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

/* D:\OSPanel\domains\october/themes/lovata-bootstrap-shopaholic/partials/footer/footer.htm */
class __TwigTemplate_d78469ae934b3ccb3662106095d4a6cfd6936ff979751280558d0717222df96e extends \Twig\Template
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
        echo "<section class=\"footer\">
            <div class=\"footer__services\">
                <div class=\"container\">
                    <div class=\"footer__services-group\">
                        <div class=\"footer__service\">
                            <span class=\"icon-van footer__icon\"></span>
                            <span class=\"footer__name\">доставка по кр</span>
                        </div>
                        <div class=\"footer__service\">
                            <span class=\"icon-headset footer__icon\"></span>
                            <span class=\"footer__name\">поддержка клиентов</span>
                        </div>
                        <div class=\"footer__service\">
                            <span class=\"icon-payment-method footer__icon\"></span>
                            <span class=\"footer__name\">онлайн оплата</span>
                        </div>
                        <div class=\"footer__service\">
                            <span class=\"icon-undo footer__icon\"></span>
                            <span class=\"footer__name\">возврат обмен</span>
                        </div>

                    </div>
                </div>
            </div>
            <div class=\"footer__foot\">
                <div class=\"container\">
                    <div class=\"footer__navs\">
                        <ul class=\"footer__nav\">
                            <li class=\"footer__link-title\">Руководство по закупкам</li>
                            <li class=\"footer__list\">
                                <a href=\"#\">Блог</a>
                            </li>
                            <li class=\"footer__list\">
                                <a href=\"#\">Вопросы и ответы</a>
                            </li>
                            <li class=\"footer__list\">
                                <a href=\"#\">Оплата</a>
                            </li>
                            <li class=\"footer__list\">
                                <a href=\"#\">Политика возврата</a>
                            </li>
                        </ul>
                        <ul class=\"footer__nav\">
                            <li class=\"footer__link-title\">советы</li>
                            <li class=\"footer__list\">
                                <a href=\"#\">Адреса</a>
                            </li>
                            <li class=\"footer__list\">
                                <a href=\"#\">Скидки</a>
                            </li>
                            <li class=\"footer__list\">
                                <a href=\"#\">Информация</a>
                            </li>
                        </ul>
                        <ul class=\"footer__nav\">
                            <li class=\"footer__link-title\">Информация</li>
                            <li class=\"footer__list\">
                                <a href=\"#\">О нас</a>
                            </li>
                            <li class=\"footer__list\">
                                <a href=\"#\">Связаться с нами</a>
                            </li>
                            <li class=\"footer__list\">
                                <a href=\"#\">Условия</a>
                            </li>
                        </ul>
                        <ul class=\"footer__nav footer__form-ul\">
                            <li class=\"footer__link-title\">Подписаться на рассылку</li>
                            <li>
                                <form action=\"#\" class=\"footer__email\">
                                    <input type=\"email\" class=\"footer__input\" placeholder=\"Email\">
                                    <button class=\"footer__btn\">Подписаться</button>
                                </form>
                            </li>
                        </ul>
                        <ul class=\"footer__nav footer__form-social\">
                            <li class=\"footer__link-title\">Подписывайтесь на нас</li>
                            <li class=\"footer__socialnets\">
                                <a href=\"";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 79), "facebook_link", [], "any", false, false, false, 79), "html", null, true);
        echo "\" class=\"footer__social facebook\"> <span
                                        class=\"icon-facebook footer__social-icon\"></span></a>
                                <a href=\"";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 81), "instagram_link", [], "any", false, false, false, 81), "html", null, true);
        echo "\" class=\"footer__social instagram\"><span
                                        class=\"icon-instagram footer__social-icon\"></span></a>
                            </li>
                            <li>
                                <img class=\"footer__img\" src=\"";
        // line 85
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/mainPage/footer/visa.png");
        echo "\" alt=\"#\">
                                <img class=\"footer__img\" src=\"";
        // line 86
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/mainPage/footer/mc.png");
        echo "\" alt=\"#\">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class=\"footer__line\"></div>
                <div class=\"container\">
                    <img src=\"";
        // line 93
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/mainPage/footer/logoFooter.svg");
        echo "\" alt=\"#\" class=\"footer__logo\">
                    
                    <div class=\"footer__contacts\">
                        <div class=\"footer__contact\">
                            <div class=\"footer__pic\"><span class=\"icon-placeholder\"></span></div>
                            <div>";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 98), "contact_address", [], "any", false, false, false, 98), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"footer__contact\">
                            <div class=\"footer__pic\"><span class=\"icon-telephone\"></span></div>
                            <a href=\"tel:";
        // line 102
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 102), "contact_phone", [], "any", false, false, false, 102), "html", null, true);
        echo "\" class=\"footer__tel\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 102), "contact_phone", [], "any", false, false, false, 102), "html", null, true);
        echo "</a>
                            
                        </div>
                        <div class=\"footer__contact\">
                            <div class=\"footer__pic\"><span class=\"icon-mail\"></span></div>
                            <a href=\"mailto:";
        // line 107
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 107), "contact_email", [], "any", false, false, false, 107), "html", null, true);
        echo "\" class=\"footer__tel\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 107), "contact_email", [], "any", false, false, false, 107), "html", null, true);
        echo "</a>
                        </div>
                    </div>

                </div>
            </div>
            <div class=\"footer__rights\">";
        // line 113
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 113), "copyright", [], "any", false, false, false, 113), "html", null, true);
        echo "</div>
        </section>";
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/footer/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 113,  168 => 107,  158 => 102,  151 => 98,  143 => 93,  133 => 86,  129 => 85,  122 => 81,  117 => 79,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"footer\">
            <div class=\"footer__services\">
                <div class=\"container\">
                    <div class=\"footer__services-group\">
                        <div class=\"footer__service\">
                            <span class=\"icon-van footer__icon\"></span>
                            <span class=\"footer__name\">доставка по кр</span>
                        </div>
                        <div class=\"footer__service\">
                            <span class=\"icon-headset footer__icon\"></span>
                            <span class=\"footer__name\">поддержка клиентов</span>
                        </div>
                        <div class=\"footer__service\">
                            <span class=\"icon-payment-method footer__icon\"></span>
                            <span class=\"footer__name\">онлайн оплата</span>
                        </div>
                        <div class=\"footer__service\">
                            <span class=\"icon-undo footer__icon\"></span>
                            <span class=\"footer__name\">возврат обмен</span>
                        </div>

                    </div>
                </div>
            </div>
            <div class=\"footer__foot\">
                <div class=\"container\">
                    <div class=\"footer__navs\">
                        <ul class=\"footer__nav\">
                            <li class=\"footer__link-title\">Руководство по закупкам</li>
                            <li class=\"footer__list\">
                                <a href=\"#\">Блог</a>
                            </li>
                            <li class=\"footer__list\">
                                <a href=\"#\">Вопросы и ответы</a>
                            </li>
                            <li class=\"footer__list\">
                                <a href=\"#\">Оплата</a>
                            </li>
                            <li class=\"footer__list\">
                                <a href=\"#\">Политика возврата</a>
                            </li>
                        </ul>
                        <ul class=\"footer__nav\">
                            <li class=\"footer__link-title\">советы</li>
                            <li class=\"footer__list\">
                                <a href=\"#\">Адреса</a>
                            </li>
                            <li class=\"footer__list\">
                                <a href=\"#\">Скидки</a>
                            </li>
                            <li class=\"footer__list\">
                                <a href=\"#\">Информация</a>
                            </li>
                        </ul>
                        <ul class=\"footer__nav\">
                            <li class=\"footer__link-title\">Информация</li>
                            <li class=\"footer__list\">
                                <a href=\"#\">О нас</a>
                            </li>
                            <li class=\"footer__list\">
                                <a href=\"#\">Связаться с нами</a>
                            </li>
                            <li class=\"footer__list\">
                                <a href=\"#\">Условия</a>
                            </li>
                        </ul>
                        <ul class=\"footer__nav footer__form-ul\">
                            <li class=\"footer__link-title\">Подписаться на рассылку</li>
                            <li>
                                <form action=\"#\" class=\"footer__email\">
                                    <input type=\"email\" class=\"footer__input\" placeholder=\"Email\">
                                    <button class=\"footer__btn\">Подписаться</button>
                                </form>
                            </li>
                        </ul>
                        <ul class=\"footer__nav footer__form-social\">
                            <li class=\"footer__link-title\">Подписывайтесь на нас</li>
                            <li class=\"footer__socialnets\">
                                <a href=\"{{ this.theme.facebook_link }}\" class=\"footer__social facebook\"> <span
                                        class=\"icon-facebook footer__social-icon\"></span></a>
                                <a href=\"{{ this.theme.instagram_link }}\" class=\"footer__social instagram\"><span
                                        class=\"icon-instagram footer__social-icon\"></span></a>
                            </li>
                            <li>
                                <img class=\"footer__img\" src=\"{{ 'assets/images/mainPage/footer/visa.png'|theme }}\" alt=\"#\">
                                <img class=\"footer__img\" src=\"{{ 'assets/images/mainPage/footer/mc.png'|theme }}\" alt=\"#\">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class=\"footer__line\"></div>
                <div class=\"container\">
                    <img src=\"{{'assets/images/mainPage/footer/logoFooter.svg'|theme }}\" alt=\"#\" class=\"footer__logo\">
                    
                    <div class=\"footer__contacts\">
                        <div class=\"footer__contact\">
                            <div class=\"footer__pic\"><span class=\"icon-placeholder\"></span></div>
                            <div>{{ this.theme.contact_address }}</div>
                        </div>
                        <div class=\"footer__contact\">
                            <div class=\"footer__pic\"><span class=\"icon-telephone\"></span></div>
                            <a href=\"tel:{{ this.theme.contact_phone }}\" class=\"footer__tel\">{{ this.theme.contact_phone }}</a>
                            
                        </div>
                        <div class=\"footer__contact\">
                            <div class=\"footer__pic\"><span class=\"icon-mail\"></span></div>
                            <a href=\"mailto:{{ this.theme.contact_email }}\" class=\"footer__tel\">{{ this.theme.contact_email }}</a>
                        </div>
                    </div>

                </div>
            </div>
            <div class=\"footer__rights\">{{ this.theme.copyright }}</div>
        </section>", "D:\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/footer/footer.htm", "");
    }
}
