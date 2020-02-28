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

/* D:\OSPanel\domains\october/themes/lovata-bootstrap-shopaholic/partials/content/picture-preview-top/picture-preview-top.htm */
class __TwigTemplate_909c8e24de054e72ae954ef9bfa3e2f8363de9815003aee4ba0df6cd4e097f6f extends \Twig\Template
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
        if ( !twig_test_empty(($context["obImage"] ?? null))) {
            // line 2
            echo "<section class=\"container-fluid picture-top pl-0 pr-0\">
    <img class=\"picture-top__img w-100 h-100\" src=\"";
            // line 3
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obImage"] ?? null), "path", [], "any", false, false, false, 3), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obImage"] ?? null), "description", [], "any", false, false, false, 3), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obImage"] ?? null), "title", [], "any", false, false, false, 3), "html", null, true);
            echo "\" loading=\"lazy\">
</section>
";
        }
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/content/picture-preview-top/picture-preview-top.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if obImage is not empty %}
<section class=\"container-fluid picture-top pl-0 pr-0\">
    <img class=\"picture-top__img w-100 h-100\" src=\"{{ obImage.path }}\" alt=\"{{ obImage.description }}\" title=\"{{ obImage.title }}\" loading=\"lazy\">
</section>
{% endif %}", "D:\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/content/picture-preview-top/picture-preview-top.htm", "");
    }
}
