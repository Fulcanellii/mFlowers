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

/* D:\OSPanel\domains\october/themes/lovata-bootstrap-shopaholic/pages/blog-category.htm */
class __TwigTemplate_3ada402db59dbc7a5723fb068aad1fd8e9ec35f58042650a632bab07a4969196 extends \Twig\Template
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

          <div class=\"blogpage__blogs\">
          
          ";
        // line 50
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, false, 50);
        // line 51
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 52
            echo "            
            <div class=\"blogpage__blog\">
        
            ";
            // line 55
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 55), "count", [], "any", false, false, false, 55)) {
                // line 56
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 56));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 57
                    echo "                  <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 57), "html", null, true);
                    echo "\" class=\"blogpage__img-wrap\">
                    <img src=\"";
                    // line 58
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 58), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, false, 58), "html", null, true);
                    echo "\" class=\"blogpage__img\">
                    <span class=\"icon-search blogpage__icon\"></span>
                  </a>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 62
                echo "            ";
            }
            // line 63
            echo "              <div class=\"mainblog__date\">
                <span class=\"icon-calendar\"></span>
                <span>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, false, 65), "html", null, true);
            echo "</span>
              </div>
              <h3 class=\"blogpage__title-blog\">";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 67), "html", null, true);
            echo "</h3>
              <p class=\"blogpage__subtitle-blog\">";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "content", [], "any", false, false, false, 68), "html", null, true);
            echo "</p>
              <a href=\"";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 69), "html", null, true);
            echo "\" class=\"blogpage__link\">читать далее</a>
              
             
            </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo " 
          </div>
            
        </div>


      </div>
    </div>

        
        </div>";
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/pages/blog-category.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 73,  149 => 69,  145 => 68,  141 => 67,  136 => 65,  132 => 63,  129 => 62,  117 => 58,  112 => 57,  107 => 56,  105 => 55,  100 => 52,  95 => 51,  93 => 50,  80 => 42,  37 => 1,);
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

        
        </div>", "D:\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/pages/blog-category.htm", "");
    }
}
