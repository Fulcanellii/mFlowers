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

/* D:\OSPanel\domains\october/themes/lovata-bootstrap-shopaholic/pages/404.htm */
class __TwigTemplate_a9fbdbf60b4a3cc50e575e40ed60bfa7bdc7d945a7534354efa2e2edf77de1f5 extends \Twig\Template
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
        echo "<!-- ";
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['errorFigures'] = "404"        ;
        $context['__cms_partial_params']['errorText'] = "page not found"        ;
        $context['__cms_partial_params']['errorType'] = "404"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("content/error/error"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo " -->

<div class=\"notfound\">
      <div class=\"container\">     
          <img src=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/404Page/404.png");
        echo "\" alt=\"404\" class=\"notfound__img\">
          <h1 class=\"notfound__title\">Страница не найдена</h1>
          <a href=\"/\" class=\"notfound__link\">На главную</a>    
      </div>
  </div>";
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/pages/404.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- {% partial 'content/error/error' errorFigures='404' errorText='page not found' errorType='404' %} -->

<div class=\"notfound\">
      <div class=\"container\">     
          <img src=\"{{'assets/images/404Page/404.png'|theme }}\" alt=\"404\" class=\"notfound__img\">
          <h1 class=\"notfound__title\">Страница не найдена</h1>
          <a href=\"/\" class=\"notfound__link\">На главную</a>    
      </div>
  </div>", "D:\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/pages/404.htm", "");
    }
}
