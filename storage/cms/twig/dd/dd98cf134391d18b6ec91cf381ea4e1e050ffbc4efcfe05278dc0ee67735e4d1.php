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

/* D:\OSPanel\domains\october/themes/lovata-bootstrap-shopaholic/partials/content/carousel/carousel.htm */
class __TwigTemplate_41fc3d9774c909f6b146b6db3b6c2e9c206ca3035b15b63ef2e2e4e1508462df extends \Twig\Template
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
        if ( !twig_test_empty(($context["arImageList"] ?? null))) {
            // line 2
            echo "<section class=\"carousel\">
    <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
        <ol class=\"carousel-indicators\">
            ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, ($context["arImageList"] ?? null))));
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
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 6
                echo "                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"";
                echo twig_escape_filter($this->env, ($context["i"] - 1), "html", null, true);
                echo "\" class=\"";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 6)) {
                    echo "active";
                }
                echo "\"></li>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "        </ol>
        <div class=\"carousel-inner\">
            ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["arImageList"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["obImage"]) {
                // line 11
                echo "            <div class=\"carousel-item ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 11)) {
                    echo "active";
                }
                echo "\">
                <img class=\"d-block w-100 carousel-item-img\" src=\"";
                // line 12
                echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["obImage"], "image", [], "any", false, false, false, 12));
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obImage"], "title", [], "any", false, false, false, 12), "html", null, true);
                echo "\" loading=\"lazy\">
                <div class=\"carousel-caption\">
                    <h5 class=\"mb-3 carousel-item__title\">";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obImage"], "title", [], "any", false, false, false, 14), "html", null, true);
                echo "</h5>
                    <p class=\"d-none d-md-block\">";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obImage"], "description", [], "any", false, false, false, 15), "html", null, true);
                echo "</p>
                    ";
                // line 16
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["obImage"], "link", [], "any", false, false, false, 16))) {
                    // line 17
                    echo "                    <a class=\"btn btn-dark\" href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obImage"], "link", [], "any", false, false, false, 17), "html", null, true);
                    echo "\" role=\"button\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obImage"], "link_name", [], "any", false, false, false, 17), "html", null, true);
                    echo "</a>
                    ";
                }
                // line 19
                echo "                </div>
            </div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obImage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "        </div>
        <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
        </a>
    </div>
</section>
";
        }
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/content/carousel/carousel.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 22,  135 => 19,  127 => 17,  125 => 16,  121 => 15,  117 => 14,  110 => 12,  103 => 11,  86 => 10,  82 => 8,  61 => 6,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if arImageList is not empty %}
<section class=\"carousel\">
    <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
        <ol class=\"carousel-indicators\">
            {% for i in 1..arImageList|length %}
                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"{{ i - 1 }}\" class=\"{% if loop.first %}active{% endif %}\"></li>
            {% endfor %}
        </ol>
        <div class=\"carousel-inner\">
            {% for obImage in arImageList %}
            <div class=\"carousel-item {% if loop.first %}active{% endif %}\">
                <img class=\"d-block w-100 carousel-item-img\" src=\"{{ obImage.image|media }}\" alt=\"{{ obImage.title }}\" loading=\"lazy\">
                <div class=\"carousel-caption\">
                    <h5 class=\"mb-3 carousel-item__title\">{{ obImage.title }}</h5>
                    <p class=\"d-none d-md-block\">{{ obImage.description }}</p>
                    {% if obImage.link is not empty %}
                    <a class=\"btn btn-dark\" href=\"{{ obImage.link }}\" role=\"button\">{{ obImage.link_name }}</a>
                    {% endif %}
                </div>
            </div>
            {% endfor %}
        </div>
        <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
        </a>
    </div>
</section>
{% endif %}", "D:\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/content/carousel/carousel.htm", "");
    }
}
