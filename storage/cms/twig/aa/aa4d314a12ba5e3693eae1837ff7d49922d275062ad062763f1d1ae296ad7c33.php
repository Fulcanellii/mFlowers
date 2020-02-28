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

/* D:\OSPanel\domains\october/themes/lovata-bootstrap-shopaholic/partials/navigation/breadcrumbs/breadcrumbs.htm */
class __TwigTemplate_8aa1b2f3ccfff561e555e7a7e9309698acfe62807846385e875d6b6e56aa8444 extends \Twig\Template
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
        echo "<!-- <section class=\"container-fliud breadcrumb-list\">
    <nav class=\"container\" aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb pl-0 pr-0\">
            ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["arBreadcrumbs"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 5
            echo "                ";
            if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 5)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 5)))) {
                // line 6
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 6)) {
                    // line 7
                    echo "                        <li class=\"breadcrumb-item active\" aria-current=\"page\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 7), "html", null, true);
                    echo "</li>
                    ";
                } else {
                    // line 9
                    echo "                        <li class=\"breadcrumb-item\"><a class=\"breadcrumb-link\" href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 9), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 9), "html", null, true);
                    echo "</a></li>
                    ";
                }
                // line 11
                echo "                ";
            }
            // line 12
            echo "            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "        </ol>
    </nav>
</section>
 -->

<ul class=\"crumbs\">
    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["arBreadcrumbs"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 20
            echo "                ";
            if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 20)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 20)))) {
                // line 21
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 21)) {
                    // line 22
                    echo "                        <li class=\"crumb active\" aria-current=\"page\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 22), "html", null, true);
                    echo "</li>
                    ";
                } else {
                    // line 24
                    echo "                        <li class=\"crumb\"><a class=\"crumb-link\" href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 24), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 24), "html", null, true);
                    echo "</a></li>
                    ";
                }
                // line 26
                echo "                ";
            }
            // line 27
            echo "                <span>/</span>
            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "

</ul>";
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/navigation/breadcrumbs/breadcrumbs.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 29,  144 => 27,  141 => 26,  133 => 24,  127 => 22,  124 => 21,  121 => 20,  104 => 19,  96 => 13,  82 => 12,  79 => 11,  71 => 9,  65 => 7,  62 => 6,  59 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- <section class=\"container-fliud breadcrumb-list\">
    <nav class=\"container\" aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb pl-0 pr-0\">
            {% for item in arBreadcrumbs %}
                {% if item.name is not empty and item.url is not empty %}
                    {% if loop.last %}
                        <li class=\"breadcrumb-item active\" aria-current=\"page\">{{ item.name }}</li>
                    {% else %}
                        <li class=\"breadcrumb-item\"><a class=\"breadcrumb-link\" href=\"{{ item.url }}\">{{ item.name }}</a></li>
                    {% endif %}
                {% endif %}
            {% endfor %}
        </ol>
    </nav>
</section>
 -->

<ul class=\"crumbs\">
    {% for item in arBreadcrumbs %}
                {% if item.name is not empty and item.url is not empty %}
                    {% if loop.last %}
                        <li class=\"crumb active\" aria-current=\"page\">{{ item.name }}</li>
                    {% else %}
                        <li class=\"crumb\"><a class=\"crumb-link\" href=\"{{ item.url }}\">{{ item.name }}</a></li>
                    {% endif %}
                {% endif %}
                <span>/</span>
            {% endfor %}


</ul>", "D:\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/navigation/breadcrumbs/breadcrumbs.htm", "");
    }
}
