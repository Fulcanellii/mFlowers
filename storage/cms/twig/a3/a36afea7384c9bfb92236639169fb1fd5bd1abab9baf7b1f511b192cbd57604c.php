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

/* D:\open_server_5_3_5_basic_premium_ultimate\OSPanel\domains\october/themes/lovata-bootstrap-shopaholic/pages/blog.htm */
class __TwigTemplate_ee061eed80cf01b921bd7e27fc006aae2393a2b387c1ce1542e55b8cf2758a89 extends \Twig\Template
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
            <a href=\"/\" class=\"crumb-link\">Главная</a>
            <span>/</span>
          </li>
          <li class=\"crumb\">
            <a href=\"/blog\" class=\"crumb-link\">Блог</a>
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
        // line 41
        $context["cat"] = twig_get_attribute($this->env, $this->source, ($context["blogCategories"] ?? null), "categories", [], "any", false, false, false, 41);
        // line 42
        echo "              <ul>
              ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["cat"]);
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 44
            echo "                <li>
                  <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "url", [], "any", false, false, false, 45), "html", null, true);
            echo "\" class=\"blogpage__link-acide\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "name", [], "any", false, false, false, 45), "html", null, true);
            echo "</a>
                </li>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "              </ul>
            </aside>
          </div>

          <div class=\"blogpage__blogs\">
          
          ";
        // line 54
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, false, 54);
        // line 55
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 56
            echo "            
            <div class=\"blogpage__blog\">
        
            ";
            // line 59
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 59), "count", [], "any", false, false, false, 59)) {
                // line 60
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 60));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 61
                    echo "                  <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 61), "html", null, true);
                    echo "\" class=\"blogpage__img-wrap\">
                    <img src=\"";
                    // line 62
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 62), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, false, 62), "html", null, true);
                    echo "\" class=\"blogpage__img\">
                    <span class=\"icon-search blogpage__icon\"></span>
                  </a>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 66
                echo "            ";
            }
            // line 67
            echo "              <div class=\"mainblog__date\">
                <span class=\"icon-calendar\"></span>
                <span>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, false, 69), "html", null, true);
            echo "</span>
              </div>
              <h3 class=\"blogpage__title-blog\">";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 71), "html", null, true);
            echo "</h3>
              <p class=\"blogpage__subtitle-blog\">";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "content", [], "any", false, false, false, 72), "html", null, true);
            echo "</p>
              <a href=\"";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 73), "html", null, true);
            echo "\" class=\"blogpage__link\">читать далее</a>
              
             
            </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo " 
          </div>
            
        </div>


      </div>
    </div>

        
        </div>";
    }

    public function getTemplateName()
    {
        return "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/pages/blog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 77,  166 => 73,  162 => 72,  158 => 71,  153 => 69,  149 => 67,  146 => 66,  134 => 62,  129 => 61,  124 => 60,  122 => 59,  117 => 56,  112 => 55,  110 => 54,  102 => 48,  91 => 45,  88 => 44,  84 => 43,  81 => 42,  79 => 41,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"wrapper\">
        

        <div class=\"blogpage\">
      <div class=\"container\">
        <ul class=\"crumbs\">
          <li class=\"crumb\">
            <a href=\"/\" class=\"crumb-link\">Главная</a>
            <span>/</span>
          </li>
          <li class=\"crumb\">
            <a href=\"/blog\" class=\"crumb-link\">Блог</a>
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

        
        </div>", "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/pages/blog.htm", "");
    }
}
