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

/* D:\OSPanel\domains\october/plugins/rainlab/blog/components/categories/items.htm */
class __TwigTemplate_67dd5660a0b38f97ffcae22e9df5be931f3a57eccb097d24a30f5584a598068c extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 2
            echo "    ";
            $context["postCount"] = twig_get_attribute($this->env, $this->source, $context["category"], "post_count", [], "any", false, false, false, 2);
            // line 3
            echo "    <li ";
            if ((twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 3) == ($context["currentCategorySlug"] ?? null))) {
                echo "class=\"active\"";
            }
            echo ">
        <a href=\"";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "url", [], "any", false, false, false, 4), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 4), "html", null, true);
            echo "</a> 
        ";
            // line 5
            if (($context["postCount"] ?? null)) {
                // line 6
                echo "            <span class=\"badge\">";
                echo twig_escape_filter($this->env, ($context["postCount"] ?? null), "html", null, true);
                echo "</span>
        ";
            }
            // line 8
            echo "
        ";
            // line 9
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 9)) > 0)) {
                // line 10
                echo "            <ul>
                ";
                // line 11
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['categories'] = twig_get_attribute($this->env, $this->source,                 // line 12
$context["category"], "children", [], "any", false, false, false, 12)                ;
                $context['__cms_partial_params']['currentCategorySlug'] =                 // line 13
($context["currentCategorySlug"] ?? null)                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((                // line 11
($context["__SELF__"] ?? null) . "::items")                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 15
                echo "            </ul>
        ";
            }
            // line 17
            echo "    </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\october/plugins/rainlab/blog/components/categories/items.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 17,  82 => 15,  79 => 11,  77 => 13,  75 => 12,  73 => 11,  70 => 10,  68 => 9,  65 => 8,  59 => 6,  57 => 5,  51 => 4,  44 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for category in categories %}
    {% set postCount = category.post_count %}
    <li {% if category.slug == currentCategorySlug %}class=\"active\"{% endif %}>
        <a href=\"{{ category.url }}\">{{ category.name }}</a> 
        {% if postCount %}
            <span class=\"badge\">{{ postCount }}</span>
        {% endif %}

        {% if category.children|length > 0 %}
            <ul>
                {% partial __SELF__ ~ \"::items\"
                    categories=category.children
                    currentCategorySlug=currentCategorySlug
                %}
            </ul>
        {% endif %}
    </li>
{% endfor %}
", "D:\\OSPanel\\domains\\october/plugins/rainlab/blog/components/categories/items.htm", "");
    }
}
