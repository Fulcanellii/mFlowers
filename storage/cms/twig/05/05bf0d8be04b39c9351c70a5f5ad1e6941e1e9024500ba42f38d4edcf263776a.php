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

/* D:\open_server_5_3_5_basic_premium_ultimate\OSPanel\domains\october/themes/lovata-bootstrap-shopaholic/partials/footer/foot.htm */
class __TwigTemplate_46e85efe09da832d7805eb8c8678453c848c9d186eed66b5c61c3e3193b664ba extends \Twig\Template
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
        echo "<!-- <script src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.js");
        echo "\"></script>
<script src=\"";
        // line 2
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap.js");
        echo "\"></script>
<script src=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/node_modules/jquery/dist/jquery.min.js");
        echo "\"></script>
<script src=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/node_modules/owl.carousel/dist/owl.carousel.min.js");
        echo "\"></script>
<script src=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/node_modules/easyzoom/dist/easyzoom.js");
        echo "\"></script> -->


<script src=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/modernizr.js");
        echo "\"></script>
<script src=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/common.js");
        echo "\"></script>
<script src=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/vendor.js");
        echo "\"></script>
<script src=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/main.js");
        echo "\"></script>

    ";
        // line 13
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 14
        echo "    ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
    }

    public function getTemplateName()
    {
        return "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/footer/foot.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 14,  77 => 13,  72 => 11,  68 => 10,  64 => 9,  60 => 8,  54 => 5,  50 => 4,  46 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- <script src=\"{{ 'assets/vendor/jquery.js'|theme }}\"></script>
<script src=\"{{ 'assets/vendor/bootstrap.js'|theme }}\"></script>
<script src=\"{{ 'assets/node_modules/jquery/dist/jquery.min.js'|theme }}\"></script>
<script src=\"{{ 'assets/node_modules/owl.carousel/dist/owl.carousel.min.js'|theme }}\"></script>
<script src=\"{{ 'assets/node_modules/easyzoom/dist/easyzoom.js'|theme }}\"></script> -->


<script src=\"{{ 'assets/js/modernizr.js'|theme }}\"></script>
<script src=\"{{ 'assets/js/common.js'|theme }}\"></script>
<script src=\"{{ 'assets/js/vendor.js'|theme }}\"></script>
<script src=\"{{ 'assets/js/main.js'|theme }}\"></script>

    {% framework extras %}
    {% scripts %}", "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/partials/footer/foot.htm", "");
    }
}
