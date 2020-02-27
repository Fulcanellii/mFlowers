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

/* D:\open_server_5_3_5_basic_premium_ultimate\OSPanel\domains\october/themes/lovata-bootstrap-shopaholic/pages/blog-post.htm */
class __TwigTemplate_00f24846e2a6ba2ba7ede822a0b82302899448766bb074bfa542b15cab6409d5 extends \Twig\Template
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
        echo "<div class=\"wrapper\">
        

        <div class=\"blogpage\">
      <div class=\"container\">
        <ul class=\"crumbs\">
          <li class=\"crumb\">
            <a href=\"#\" class=\"crumb-link\">Главная</a>
            <span>/</span>
          </li>
          <li class=\"crumb\">
            Блог
          </li>
        </ul>
        <div class=\"blogpage__flex\">
          <div class=\"blogpage__asides\">
            <form action=\"#\" class=\"blogpage__search\">
              <input type=\"search\" class=\"blogpage__search-input\" placeholder=\"Поиск...\">
              <input type=\"submit\" value=\"Искать\" class=\"blogpage__search-btn\">
            </form>
            <aside class=\"blogpage__aside\">
              <h3>Архив</h3>
              <ul>
                <li>
                  <a href=\"#\" class=\"blogpage__link-acide\">Июнь <span>2019</span> </a>
                </li>
                <li>
                  <a href=\"#\" class=\"blogpage__link-acide\">Сентябрь <span>2019</span></a>
                </li>
                <li>
                  <a href=\"#\" class=\"blogpage__link-acide\">Январь <span>2020</span></a>
                </li>
                <li>
                  <a href=\"#\" class=\"blogpage__link-acide\">Февраль <span>2020</span></a>
                </li>
              </ul>
            </aside>
            <aside class=\"blogpage__aside\">
              <h3>Категории</h3>
              <ul>
                <li>
                  <a href=\"#\" class=\"blogpage__link-acide\">";
        // line 42
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("blogCategories"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo "</a>
                </li>
              </ul>
            </aside>
          </div>

          
          ";
        // line 49
        $context["blog"] = twig_get_attribute($this->env, $this->source, ($context["blogPost"] ?? null), "post", [], "any", false, false, false, 49);
        // line 50
        echo "          
          <div class=\"bloginner__blog\">
          ";
        // line 52
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "featured_images", [], "any", false, false, false, 52), "count", [], "any", false, false, false, 52)) {
            // line 53
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "featured_images", [], "any", false, false, false, 53));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 54
                echo "            <div class=\"bloginner__img-wrap\">
              <img src=\"";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 55), "html", null, true);
                echo "\" alt=\"#\" class=\"bloginner__img\">
              <time class=\"bloginner__time\"><span class=\"icon-calendar\"></span>";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "published_at", [], "any", false, false, false, 56), "html", null, true);
                echo "</time>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "             ";
        }
        // line 60
        echo "            <h1 class=\"bloginner__title\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "title", [], "any", false, false, false, 60), "html", null, true);
        echo "</h1>
            <p class=\"bloginner__paraph\">";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "content", [], "any", false, false, false, 61), "html", null, true);
        echo "</p>
          </div>
            
        </div>


      </div>
    </div>

        
        </div>";
    }

    public function getTemplateName()
    {
        return "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/pages/blog-post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 61,  124 => 60,  121 => 59,  112 => 56,  108 => 55,  105 => 54,  100 => 53,  98 => 52,  94 => 50,  92 => 49,  80 => 42,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"wrapper\">
        

        <div class=\"blogpage\">
      <div class=\"container\">
        <ul class=\"crumbs\">
          <li class=\"crumb\">
            <a href=\"#\" class=\"crumb-link\">Главная</a>
            <span>/</span>
          </li>
          <li class=\"crumb\">
            Блог
          </li>
        </ul>
        <div class=\"blogpage__flex\">
          <div class=\"blogpage__asides\">
            <form action=\"#\" class=\"blogpage__search\">
              <input type=\"search\" class=\"blogpage__search-input\" placeholder=\"Поиск...\">
              <input type=\"submit\" value=\"Искать\" class=\"blogpage__search-btn\">
            </form>
            <aside class=\"blogpage__aside\">
              <h3>Архив</h3>
              <ul>
                <li>
                  <a href=\"#\" class=\"blogpage__link-acide\">Июнь <span>2019</span> </a>
                </li>
                <li>
                  <a href=\"#\" class=\"blogpage__link-acide\">Сентябрь <span>2019</span></a>
                </li>
                <li>
                  <a href=\"#\" class=\"blogpage__link-acide\">Январь <span>2020</span></a>
                </li>
                <li>
                  <a href=\"#\" class=\"blogpage__link-acide\">Февраль <span>2020</span></a>
                </li>
              </ul>
            </aside>
            <aside class=\"blogpage__aside\">
              <h3>Категории</h3>
              <ul>
                <li>
                  <a href=\"#\" class=\"blogpage__link-acide\">{% component 'blogCategories' %}</a>
                </li>
              </ul>
            </aside>
          </div>

          
          {% set blog = blogPost.post %}
          
          <div class=\"bloginner__blog\">
          {% if blog.featured_images.count %}
          {% for image in blog.featured_images %}
            <div class=\"bloginner__img-wrap\">
              <img src=\"{{ image.path }}\" alt=\"#\" class=\"bloginner__img\">
              <time class=\"bloginner__time\"><span class=\"icon-calendar\"></span>{{ blog.published_at }}</time>
            </div>
            {% endfor %}
             {% endif %}
            <h1 class=\"bloginner__title\">{{ blog.title }}</h1>
            <p class=\"bloginner__paraph\">{{ blog.content }}</p>
          </div>
            
        </div>


      </div>
    </div>

        
        </div>", "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/pages/blog-post.htm", "");
    }
}
