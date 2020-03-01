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

/* D:\OSPanel\domains\october/themes/lovata-bootstrap-shopaholic/partials/header/head.htm */
class __TwigTemplate_1abd01a241e1c9e36682dff2a9c25ec5d0f511d39c060c7311ebf4c3fea4dfd5 extends \Twig\Template
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
        echo "<meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat|Playfair+Display&display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Bilbo+Swash+Caps&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/main.css");
        echo "\">
<!--     <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["path_css"] ?? null), "html", null, true);
        echo "\"> -->
    <script src=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/modernizr.js");
        echo "\"></script>";
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/header/head.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 7,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat|Playfair+Display&display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Bilbo+Swash+Caps&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/main.css'|theme }}\">
<!--     <link rel=\"stylesheet\" href=\"{{ path_css }}\"> -->
    <script src=\"{{ 'assets/js/modernizr.js'|theme }}\"></script>", "D:\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/header/head.htm", "");
    }
}
