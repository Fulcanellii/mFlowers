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

/* D:\OSPanel\domains\october/themes/lovata-bootstrap-shopaholic/partials/content/text-preview/text-preview.htm */
class __TwigTemplate_b8603e3179189fbc4ae08b0cca2e15bc69e7cc687b039456eb2648093b9aa863 extends \Twig\Template
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
        if ( !twig_test_empty(($context["sPreviewText"] ?? null))) {
            // line 2
            echo "<section class=\"container\">
    <p class=\"wysiwyg pb-0\">
        ";
            // line 4
            echo twig_escape_filter($this->env, ($context["sPreviewText"] ?? null), "html", null, true);
            echo "
    </p>
</section>
";
        }
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/content/text-preview/text-preview.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if sPreviewText is not empty %}
<section class=\"container\">
    <p class=\"wysiwyg pb-0\">
        {{ sPreviewText }}
    </p>
</section>
{% endif %}", "D:\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/content/text-preview/text-preview.htm", "");
    }
}
