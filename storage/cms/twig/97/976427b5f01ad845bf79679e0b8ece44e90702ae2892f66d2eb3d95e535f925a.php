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

/* D:\open_server_5_3_5_basic_premium_ultimate\OSPanel\domains\october/themes/lovata-bootstrap-shopaholic/partials/content/text-preview/text-preview.htm */
class __TwigTemplate_75c3d67fa2e68a638e7b44ef73f40ac69aca728b255ddaf859d3e1808e42b0b1 extends \Twig\Template
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
        return "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/content/text-preview/text-preview.htm";
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
{% endif %}", "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/content/text-preview/text-preview.htm", "");
    }
}
