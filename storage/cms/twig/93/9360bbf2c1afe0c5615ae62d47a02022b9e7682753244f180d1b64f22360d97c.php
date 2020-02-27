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

/* D:\open_server_5_3_5_basic_premium_ultimate\OSPanel\domains\october/themes/lovata-bootstrap-shopaholic/pages/promo-block-list.htm */
class __TwigTemplate_666691085e73fb2aa7e59eac7ab468598354677a5e76243c16b78aef6d9c512c extends \Twig\Template
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
        $context["arBreadcrumbs"] = [0 => ["name" => "Home", "url" => $this->extensions['Cms\Twig\Extension']->pageFilter("index")], 1 => ["name" => "Promo", "url" => ""]];
        // line 5
        echo "
";
        // line 6
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['arBreadcrumbs'] = ($context["arBreadcrumbs"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("navigation/breadcrumbs/breadcrumbs"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 7
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("promo-block/promo-block-list/promo-block-list"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/pages/promo-block-list.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 7,  42 => 6,  39 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set arBreadcrumbs = [
    {'name': 'Home', 'url': 'index'|page},
    {'name': 'Promo', 'url': ''},
] %}

{% partial 'navigation/breadcrumbs/breadcrumbs' arBreadcrumbs=arBreadcrumbs %}
{% partial 'promo-block/promo-block-list/promo-block-list' %}", "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/pages/promo-block-list.htm", "");
    }
}
