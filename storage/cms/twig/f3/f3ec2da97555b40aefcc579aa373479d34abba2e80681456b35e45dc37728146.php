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

/* D:\OSPanel\domains\october/themes/lovata-bootstrap-shopaholic/partials/content/banner/banner.htm */
class __TwigTemplate_8f3a7fe2283c83a1859800122fc317f004b50aa172decc7e09db74b2cc052acc extends \Twig\Template
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
        if ( !twig_test_empty(($context["sImagePath"] ?? null))) {
            // line 2
            echo "<section class=\"container banner\">
    <a ";
            // line 3
            if ( !twig_test_empty(($context["sLink"] ?? null))) {
                echo "href=\"";
                echo twig_escape_filter($this->env, ($context["sLink"] ?? null), "html", null, true);
                echo "\"";
            }
            echo " target=\"_blank\" aria-label=\"Banner link\" rel=\"noopener\" >
        <img class=\"banner__img rounded\" src=\"";
            // line 4
            echo $this->extensions['System\Twig\Extension']->mediaFilter(($context["sImagePath"] ?? null));
            echo "\" alt=\"\" loading=\"lazy\">
    </a>
</section>
";
        }
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/content/banner/banner.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if sImagePath is not empty %}
<section class=\"container banner\">
    <a {% if sLink is not empty %}href=\"{{ sLink }}\"{% endif %} target=\"_blank\" aria-label=\"Banner link\" rel=\"noopener\" >
        <img class=\"banner__img rounded\" src=\"{{ sImagePath|media }}\" alt=\"\" loading=\"lazy\">
    </a>
</section>
{% endif %}", "D:\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/content/banner/banner.htm", "");
    }
}
