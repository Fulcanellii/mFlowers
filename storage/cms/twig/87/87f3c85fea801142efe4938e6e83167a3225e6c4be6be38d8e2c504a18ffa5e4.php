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

/* D:\OSPanel\domains\october/themes/lovata-bootstrap-shopaholic/partials/navigation/pagination/pagination.htm */
class __TwigTemplate_83e82616dc6737a3094d8695d2734fc3fe1cf3764feccd7b48439ebd84ff1d94 extends \Twig\Template
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
        // line 4
        echo "
";
        // line 5
        $context["iPage"] = twig_get_attribute($this->env, $this->source, ($context["Pagination"] ?? null), "getPageFromRequest", [], "method", false, false, false, 5);
        // line 6
        $context["arPaginationList"] = twig_get_attribute($this->env, $this->source, ($context["Pagination"] ?? null), "get", [0 => ($context["iPage"] ?? null), 1 => ($context["iCount"] ?? null)], "method", false, false, false, 6);
        // line 7
        if ( !twig_test_empty(($context["arPaginationList"] ?? null))) {
            // line 8
            echo "<nav class=\"mb-4\" aria-label=\"";
            echo twig_escape_filter($this->env, ($context["pagingLabel"] ?? null), "html", null, true);
            echo "\">
    <ul class=\"pagination pagination-circle justify-content-center container\">
        ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["arPaginationList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["arPaginationItem"]) {
                // line 11
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["arPaginationItem"], "code", [], "any", false, false, false, 11) == "first")) {
                    // line 12
                    echo "                <li class=\"page-item mr-2\">
                    <a class=\"page-link rounded-circle border-0 py-2 d-none d-md-block ";
                    // line 13
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["arPaginationItem"], "class", [], "any", false, false, false, 13), "html", null, true);
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, ((call_user_func_array($this->env->getFunction('url_current')->getCallable(), ["current"]) . "?page=") . twig_get_attribute($this->env, $this->source, $context["arPaginationItem"], "value", [], "any", false, false, false, 13)), "html", null, true);
                    echo "\" data-page=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["arPaginationItem"], "value", [], "any", false, false, false, 13), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["arPaginationItem"], "name", [], "any", false, false, false, 13), "html", null, true);
                    echo "</a>
                </li>
            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 15
$context["arPaginationItem"], "code", [], "any", false, false, false, 15) == "prev")) {
                    // line 16
                    echo "                <li class=\"page-item mr-2\">
                    <a class=\"page-link rounded-circle border-0 py-2 ";
                    // line 17
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["arPaginationItem"], "class", [], "any", false, false, false, 17), "html", null, true);
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, ((call_user_func_array($this->env->getFunction('url_current')->getCallable(), ["current"]) . "?page=") . twig_get_attribute($this->env, $this->source, $context["arPaginationItem"], "value", [], "any", false, false, false, 17)), "html", null, true);
                    echo "\" aria-label=\"Previous\" data-page=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["arPaginationItem"], "value", [], "any", false, false, false, 17), "html", null, true);
                    echo "\">
                        <span aria-hidden=\"true\">&laquo;</span>
                        <span class=\"sr-only\">";
                    // line 19
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["arPaginationItem"], "name", [], "any", false, false, false, 19), "html", null, true);
                    echo "</span>
                    </a>
                </li>
            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 22
$context["arPaginationItem"], "code", [], "any", false, false, false, 22) == "next")) {
                    // line 23
                    echo "                <li class=\"page-item mr-2\">
                    <a class=\"page-link rounded-circle border-0 py-2 ";
                    // line 24
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["arPaginationItem"], "class", [], "any", false, false, false, 24), "html", null, true);
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, ((call_user_func_array($this->env->getFunction('url_current')->getCallable(), ["current"]) . "?page=") . twig_get_attribute($this->env, $this->source, $context["arPaginationItem"], "value", [], "any", false, false, false, 24)), "html", null, true);
                    echo "\" aria-label=\"Next\" data-page=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["arPaginationItem"], "value", [], "any", false, false, false, 24), "html", null, true);
                    echo "\">
                        <span aria-hidden=\"true\">&raquo;</span>
                        <span class=\"sr-only\">";
                    // line 26
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["arPaginationItem"], "name", [], "any", false, false, false, 26), "html", null, true);
                    echo "</span>
                    </a>
                </li>
            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 29
$context["arPaginationItem"], "code", [], "any", false, false, false, 29) == "last")) {
                    // line 30
                    echo "                <li class=\"page-item mr-2\">
                    <a class=\"page-link border-0 rounded-circle py-2 d-none d-md-block ";
                    // line 31
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["arPaginationItem"], "class", [], "any", false, false, false, 31), "html", null, true);
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, ((call_user_func_array($this->env->getFunction('url_current')->getCallable(), ["current"]) . "?page=") . twig_get_attribute($this->env, $this->source, $context["arPaginationItem"], "value", [], "any", false, false, false, 31)), "html", null, true);
                    echo "\" data-page=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["arPaginationItem"], "value", [], "any", false, false, false, 31), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["arPaginationItem"], "name", [], "any", false, false, false, 31), "html", null, true);
                    echo "</a>
                </li>
            ";
                } else {
                    // line 34
                    echo "                <li class=\"page-item mr-2 ";
                    if ((twig_get_attribute($this->env, $this->source, $context["arPaginationItem"], "code", [], "any", false, false, false, 34) == "act")) {
                        echo "active";
                    }
                    echo "\">
                    <a class=\"page-link rounded-circle py-2 ";
                    // line 35
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["arPaginationItem"], "class", [], "any", false, false, false, 35), "html", null, true);
                    echo "\" ";
                    if ((twig_get_attribute($this->env, $this->source, $context["arPaginationItem"], "code", [], "any", false, false, false, 35) != "act")) {
                        echo "href=\"";
                        echo twig_escape_filter($this->env, ((call_user_func_array($this->env->getFunction('url_current')->getCallable(), ["current"]) . "?page=") . twig_get_attribute($this->env, $this->source, $context["arPaginationItem"], "value", [], "any", false, false, false, 35)), "html", null, true);
                        echo "\"";
                    }
                    echo " data-page=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["arPaginationItem"], "value", [], "any", false, false, false, 35), "html", null, true);
                    echo "\">
                        ";
                    // line 36
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["arPaginationItem"], "value", [], "any", false, false, false, 36), "html", null, true);
                    echo "
                    </a>
                    ";
                    // line 38
                    if ((twig_get_attribute($this->env, $this->source, $context["arPaginationItem"], "code", [], "any", false, false, false, 38) == "act")) {
                        // line 39
                        echo "                        <span class=\"sr-only\">(current)</span>
                    ";
                    }
                    // line 41
                    echo "                </li>
            ";
                }
                // line 43
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['arPaginationItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "    </ul>
</nav>
";
        }
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/navigation/pagination/pagination.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 44,  164 => 43,  160 => 41,  156 => 39,  154 => 38,  149 => 36,  137 => 35,  130 => 34,  118 => 31,  115 => 30,  113 => 29,  107 => 26,  98 => 24,  95 => 23,  93 => 22,  87 => 19,  78 => 17,  75 => 16,  73 => 15,  62 => 13,  59 => 12,  56 => 11,  52 => 10,  46 => 8,  44 => 7,  42 => 6,  40 => 5,  37 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("{#  For disabling prev, next or other buttons you should use class 'disabled',
    for active page - 'active' class and render node '<span class=\"sr-only\">(current)</span>' (a11y requirement)
#}

{% set iPage = Pagination.getPageFromRequest() %}
{% set arPaginationList = Pagination.get(iPage, iCount) %}
{% if arPaginationList is not empty %}
<nav class=\"mb-4\" aria-label=\"{{ pagingLabel }}\">
    <ul class=\"pagination pagination-circle justify-content-center container\">
        {% for arPaginationItem in arPaginationList %}
            {% if arPaginationItem.code == 'first' %}
                <li class=\"page-item mr-2\">
                    <a class=\"page-link rounded-circle border-0 py-2 d-none d-md-block {{ arPaginationItem.class }}\" href=\"{{ url_current() ~ '?page=' ~ arPaginationItem.value }}\" data-page=\"{{ arPaginationItem.value }}\">{{ arPaginationItem.name }}</a>
                </li>
            {% elseif arPaginationItem.code == 'prev' %}
                <li class=\"page-item mr-2\">
                    <a class=\"page-link rounded-circle border-0 py-2 {{ arPaginationItem.class }}\" href=\"{{ url_current() ~ '?page=' ~ arPaginationItem.value }}\" aria-label=\"Previous\" data-page=\"{{ arPaginationItem.value }}\">
                        <span aria-hidden=\"true\">&laquo;</span>
                        <span class=\"sr-only\">{{ arPaginationItem.name }}</span>
                    </a>
                </li>
            {% elseif arPaginationItem.code == 'next' %}
                <li class=\"page-item mr-2\">
                    <a class=\"page-link rounded-circle border-0 py-2 {{ arPaginationItem.class }}\" href=\"{{ url_current() ~ '?page=' ~ arPaginationItem.value }}\" aria-label=\"Next\" data-page=\"{{ arPaginationItem.value }}\">
                        <span aria-hidden=\"true\">&raquo;</span>
                        <span class=\"sr-only\">{{ arPaginationItem.name }}</span>
                    </a>
                </li>
            {% elseif arPaginationItem.code == 'last' %}
                <li class=\"page-item mr-2\">
                    <a class=\"page-link border-0 rounded-circle py-2 d-none d-md-block {{ arPaginationItem.class }}\" href=\"{{ url_current() ~ '?page=' ~ arPaginationItem.value }}\" data-page=\"{{ arPaginationItem.value }}\">{{ arPaginationItem.name }}</a>
                </li>
            {% else %}
                <li class=\"page-item mr-2 {% if arPaginationItem.code == 'act' %}active{% endif %}\">
                    <a class=\"page-link rounded-circle py-2 {{ arPaginationItem.class }}\" {% if arPaginationItem.code != 'act' %}href=\"{{ url_current() ~ '?page=' ~ arPaginationItem.value }}\"{% endif %} data-page=\"{{ arPaginationItem.value }}\">
                        {{ arPaginationItem.value }}
                    </a>
                    {% if arPaginationItem.code == 'act' %}
                        <span class=\"sr-only\">(current)</span>
                    {% endif %}
                </li>
            {% endif %}
        {% endfor %}
    </ul>
</nav>
{% endif %}", "D:\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/navigation/pagination/pagination.htm", "");
    }
}
