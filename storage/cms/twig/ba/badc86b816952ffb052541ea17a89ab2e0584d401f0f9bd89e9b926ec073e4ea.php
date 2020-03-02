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

/* D:\open_server_5_3_5_basic_premium_ultimate\OSPanel\domains\october/themes/lovata-bootstrap-shopaholic/pages/blog-category.htm */
class __TwigTemplate_a0c6392ecf49238bc5a9af44211674040981f523691a948311422e6125fe2065 extends \Twig\Template
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
        $context["category"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "category", [], "any", false, false, false, 1);
        // line 2
        echo "<div class=\"wrapper\">
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
          <li class=\"crumb\">
           <a class=\"crumb-link\">";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 15), "html", null, true);
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
        // line 44
        $context["cat"] = twig_get_attribute($this->env, $this->source, ($context["blogCategories"] ?? null), "categories", [], "any", false, false, false, 44);
        // line 45
        echo "              <ul>
              ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["cat"]);
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 47
            echo "                <li>
                  <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "url", [], "any", false, false, false, 48), "html", null, true);
            echo "\" class=\"blogpage__link-acide\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "name", [], "any", false, false, false, 48), "html", null, true);
            echo "</a>
                </li>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "              </ul>
            </aside>
          </div>

          <div class=\"blogpage__blogs\">
          ";
        // line 56
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, false, 56);
        // line 57
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 58
            echo "            
            <div class=\"blogpage__blog\">
        
            ";
            // line 61
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 61), "count", [], "any", false, false, false, 61)) {
                // line 62
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 62));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 63
                    echo "                  <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 63), "html", null, true);
                    echo "\" class=\"blogpage__img-wrap\">
                    <img src=\"";
                    // line 64
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 64), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, false, 64), "html", null, true);
                    echo "\" class=\"blogpage__img\">
                    <span class=\"icon-search blogpage__icon\"></span>
                  </a>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 68
                echo "            ";
            }
            // line 69
            echo "              <div class=\"mainblog__date\">
                <span class=\"icon-calendar\"></span>
                <span>";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, false, 71), "html", null, true);
            echo "</span>
              </div>
              <h3 class=\"blogpage__title-blog\">";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 73), "html", null, true);
            echo "</h3>
              <p class=\"blogpage__subtitle-blog\">";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "content", [], "any", false, false, false, 74), "html", null, true);
            echo "</p>
              <a href=\"";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 75), "html", null, true);
            echo "\" class=\"blogpage__link\">читать далее</a>
              
             
            </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo " 
          </div>
            
        </div>


      </div>
    </div>

        
        </div>";
    }

    public function getTemplateName()
    {
        return "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/pages/blog-category.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 79,  172 => 75,  168 => 74,  164 => 73,  159 => 71,  155 => 69,  152 => 68,  140 => 64,  135 => 63,  130 => 62,  128 => 61,  123 => 58,  118 => 57,  116 => 56,  109 => 51,  98 => 48,  95 => 47,  91 => 46,  88 => 45,  86 => 44,  54 => 15,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set category = blogPosts.category %}
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
          <li class=\"crumb\">
           <a class=\"crumb-link\">{{ category.name }}</a>
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

          <div class=\"blogpage__blogs\">
          {% set posts = blogPosts.posts %}
            {% for post in posts %}
            
            <div class=\"blogpage__blog\">
        
            {% if post.featured_images.count %}
                {% for image in post.featured_images %}
                  <a href=\"{{ post.url }}\" class=\"blogpage__img-wrap\">
                    <img src=\"{{ image.path }}\" alt=\"{{ image.description }}\" class=\"blogpage__img\">
                    <span class=\"icon-search blogpage__icon\"></span>
                  </a>
              {% endfor %}
            {% endif %}
              <div class=\"mainblog__date\">
                <span class=\"icon-calendar\"></span>
                <span>{{ post.published_at }}</span>
              </div>
              <h3 class=\"blogpage__title-blog\">{{ post.title }}</h3>
              <p class=\"blogpage__subtitle-blog\">{{ post.content }}</p>
              <a href=\"{{ post.url }}\" class=\"blogpage__link\">читать далее</a>
              
             
            </div>
{% endfor %} 
          </div>
            
        </div>


      </div>
    </div>

        
        </div>", "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/pages/blog-category.htm", "");
    }
}
