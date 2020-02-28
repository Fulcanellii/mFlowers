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

/* D:\OSPanel\domains\october/themes/lovata-bootstrap-shopaholic/partials/content/error/error.htm */
class __TwigTemplate_9f1a6fe89dc750b5453cb02c737a6b032a5382eddf5d7f2789c04f3506830587 extends \Twig\Template
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
        echo "<section class=\"container h-100 d-flex justify-content-center align-items-center flex-column\">
    <div class=\"row w-100 mb-5\">
        <div class=\"col-md-6 d-flex justify-content-center justify-content-md-end\">
            <span class=\"error__figures\">";
        // line 4
        echo twig_escape_filter($this->env, ($context["errorFigures"] ?? null), "html", null, true);
        echo "</span>
        </div>
        <div class=\"";
        // line 6
        if ((($context["errorType"] ?? null) == "404")) {
            echo " col-md-6 ";
        } else {
            echo " col-md-4 ";
        }
        echo " d-flex justify-content-center\">
            <span class=\"align-self-center error__text\">";
        // line 7
        echo twig_escape_filter($this->env, ($context["errorText"] ?? null), "html", null, true);
        echo "</span>
        </div>
    </div>
    <div class=\"row\">
        <a class=\"btn btn-dark btn-lg\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("index");
        echo "\" role=\"button\">back to the main page</a>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/content/error/error.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 11,  55 => 7,  47 => 6,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"container h-100 d-flex justify-content-center align-items-center flex-column\">
    <div class=\"row w-100 mb-5\">
        <div class=\"col-md-6 d-flex justify-content-center justify-content-md-end\">
            <span class=\"error__figures\">{{ errorFigures }}</span>
        </div>
        <div class=\"{% if errorType == '404' %} col-md-6 {% else %} col-md-4 {% endif %} d-flex justify-content-center\">
            <span class=\"align-self-center error__text\">{{ errorText }}</span>
        </div>
    </div>
    <div class=\"row\">
        <a class=\"btn btn-dark btn-lg\" href=\"{{ 'index'|page }}\" role=\"button\">back to the main page</a>
    </div>
</section>", "D:\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/content/error/error.htm", "");
    }
}
