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
        $context["blog"] = twig_get_attribute($this->env, $this->source, ($context["blogPost"] ?? null), "post", [], "any", false, false, false, 1);
        // line 2
        $context["cat"] = twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "categories", [], "any", false, false, false, 2);
        // line 3
        echo "
<div class=\"wrapper\">
        

        <div class=\"blogpage\">
      <div class=\"container\">
        <ul class=\"crumbs\">
          <li class=\"crumb\">
            <a href=\"#\" class=\"crumb-link\">Главная</a>
            <span>/</span>
          </li>
          <li class=\"crumb\">
            <a href=\"/blog\" class=\"crumb-link\">Блог</a>
            <span>/</span>
          </li>
          ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["cat"]);
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 19
            echo "          <li class=\"crumb\">
            <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "url", [], "any", false, false, false, 20), "html", null, true);
            echo "\" class=\"crumb-link\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "name", [], "any", false, false, false, 20), "html", null, true);
            echo "</a>
            <span>/</span>
          </li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "          <li class=\"crumb\">
            <a class=\"crumb-link\">";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "title", [], "any", false, false, false, 25), "html", null, true);
        echo "</a>
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
              
              ";
        // line 54
        $context["cat"] = twig_get_attribute($this->env, $this->source, ($context["blogCategories"] ?? null), "categories", [], "any", false, false, false, 54);
        // line 55
        echo "              <ul>
              ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["cat"]);
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 57
            echo "                <li>
                  <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "url", [], "any", false, false, false, 58), "html", null, true);
            echo "\" class=\"blogpage__link-acide\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "name", [], "any", false, false, false, 58), "html", null, true);
            echo "</a>
                </li>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "              </ul>
            </aside>
          </div>
          
          <div class=\"bloginner__blog\">
          ";
        // line 66
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "featured_images", [], "any", false, false, false, 66), "count", [], "any", false, false, false, 66)) {
            // line 67
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "featured_images", [], "any", false, false, false, 67));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 68
                echo "            <div class=\"bloginner__img-wrap\">
              <img src=\"";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 69), "html", null, true);
                echo "\" alt=\"#\" class=\"bloginner__img\">
              <time class=\"bloginner__time\"><span class=\"icon-calendar\"></span>";
                // line 70
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "published_at", [], "any", false, false, false, 70), "html", null, true);
                echo "</time>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "             ";
        }
        // line 74
        echo "            <h1 class=\"bloginner__title\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "title", [], "any", false, false, false, 74), "html", null, true);
        echo "</h1>
            <p class=\"bloginner__paraph\">";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "content", [], "any", false, false, false, 75), "html", null, true);
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
        return array (  173 => 75,  168 => 74,  165 => 73,  156 => 70,  152 => 69,  149 => 68,  144 => 67,  142 => 66,  135 => 61,  124 => 58,  121 => 57,  117 => 56,  114 => 55,  112 => 54,  80 => 25,  77 => 24,  65 => 20,  62 => 19,  58 => 18,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set blog = blogPost.post %}
{% set cat = blog.categories %}

<div class=\"wrapper\">
        

        <div class=\"blogpage\">
      <div class=\"container\">
        <ul class=\"crumbs\">
          <li class=\"crumb\">
            <a href=\"#\" class=\"crumb-link\">Главная</a>
            <span>/</span>
          </li>
          <li class=\"crumb\">
            <a href=\"/blog\" class=\"crumb-link\">Блог</a>
            <span>/</span>
          </li>
          {% for cat in cat %}
          <li class=\"crumb\">
            <a href=\"{{ cat.url }}\" class=\"crumb-link\">{{ cat.name }}</a>
            <span>/</span>
          </li>
          {% endfor %}
          <li class=\"crumb\">
            <a class=\"crumb-link\">{{ blog.title }}</a>
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
              
              {% set cat = blogCategories.categories %}
              <ul>
              {% for cat in cat %}
                <li>
                  <a href=\"{{ cat.url }}\" class=\"blogpage__link-acide\">{{ cat.name }}</a>
                </li>
              {% endfor %}
              </ul>
            </aside>
          </div>
          
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
