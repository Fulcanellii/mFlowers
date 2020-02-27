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

/* D:\open_server_5_3_5_basic_premium_ultimate\OSPanel\domains\october/themes/lovata-bootstrap-shopaholic/pages/kontakty.htm */
class __TwigTemplate_c90187af16510d5bc040c1d15746bf26fc9117f5ff93dc3abb369f48c074a2d9 extends \Twig\Template
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
        echo "<div class=\"contact\">
      <div class=\"container\">
        <div class=\"contact__wrap\">
          <div class=\"contact__form-wrap\">
            <h2 class=\"contact__title\">Заказать обратный звонок</h2>
            <form action=\"#\" class=\"contact__form\">
              <div class=\"contact__input-wrap\">
                <label for=\"contact__name\" class=\"contact__label\">Имя</label>
                <input type=\"text\" id=\"contact__name\" class=\"contact__input\">
              </div>
              <div class=\"contact__input-wrap\">
                <label for=\"contact__email\" class=\"contact__label\">Номер телефона</label>
                <input type=\"number\" id=\"contact__email\" class=\"contact__input\">
              </div>
              <input type=\"submit\" class=\"contact__submit\">
            </form>
          </div>
          <div class=\"map\">
            <a class=\"dg-widget-link\"
              href=\"http://2gis.kg/bishkek/firm/70000001019353116/center/74.58388566970827,42.83069155829102/zoom/16?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap\">Посмотреть
              на карте Бишкека</a>
            <div class=\"dg-widget-link\"><a
                href=\"http://2gis.kg/bishkek/firm/70000001019353116/photos/70000001019353116/center/74.58388566970827,42.83069155829102/zoom/17?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=photos\">Фотографии
                компании</a></div>
            <div class=\"dg-widget-link\"><a
                href=\"http://2gis.kg/bishkek/center/74.583889,42.829846/zoom/16/routeTab/rsType/bus/to/74.583889,42.829846╎Maria flowers, магазин цветов?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route\">Найти
                проезд до Maria flowers, магазин цветов</a></div>
            <script charset=\"utf-8\" src=\"https://widgets.2gis.com/js/DGWidgetLoader.js\"></script>
            <script charset=\"utf-8\">
              new DGWidgetLoader({
                \"width\": \"100%\",
                \"height\": 428,
                \"borderColor\": \"none\",
                \"pos\": {
                  \"lat\": 42.83069155829102,
                  \"lon\": 74.58388566970827,
                  \"zoom\": 16
                },
                \"opt\": {
                  \"city\": \"bishkek\"
                },
                \"org\": [{
                  \"id\": \"70000001019353116\"
                }]
              });
            </script><noscript style=\"color:#c00;font-size:16px;font-weight:bold;\">Виджет карты использует JavaScript.
              Включите его в настройках вашего браузера.</noscript>
          </div>
        </div>
       
      </div>


    </div>";
    }

    public function getTemplateName()
    {
        return "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/pages/kontakty.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"contact\">
      <div class=\"container\">
        <div class=\"contact__wrap\">
          <div class=\"contact__form-wrap\">
            <h2 class=\"contact__title\">Заказать обратный звонок</h2>
            <form action=\"#\" class=\"contact__form\">
              <div class=\"contact__input-wrap\">
                <label for=\"contact__name\" class=\"contact__label\">Имя</label>
                <input type=\"text\" id=\"contact__name\" class=\"contact__input\">
              </div>
              <div class=\"contact__input-wrap\">
                <label for=\"contact__email\" class=\"contact__label\">Номер телефона</label>
                <input type=\"number\" id=\"contact__email\" class=\"contact__input\">
              </div>
              <input type=\"submit\" class=\"contact__submit\">
            </form>
          </div>
          <div class=\"map\">
            <a class=\"dg-widget-link\"
              href=\"http://2gis.kg/bishkek/firm/70000001019353116/center/74.58388566970827,42.83069155829102/zoom/16?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap\">Посмотреть
              на карте Бишкека</a>
            <div class=\"dg-widget-link\"><a
                href=\"http://2gis.kg/bishkek/firm/70000001019353116/photos/70000001019353116/center/74.58388566970827,42.83069155829102/zoom/17?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=photos\">Фотографии
                компании</a></div>
            <div class=\"dg-widget-link\"><a
                href=\"http://2gis.kg/bishkek/center/74.583889,42.829846/zoom/16/routeTab/rsType/bus/to/74.583889,42.829846╎Maria flowers, магазин цветов?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route\">Найти
                проезд до Maria flowers, магазин цветов</a></div>
            <script charset=\"utf-8\" src=\"https://widgets.2gis.com/js/DGWidgetLoader.js\"></script>
            <script charset=\"utf-8\">
              new DGWidgetLoader({
                \"width\": \"100%\",
                \"height\": 428,
                \"borderColor\": \"none\",
                \"pos\": {
                  \"lat\": 42.83069155829102,
                  \"lon\": 74.58388566970827,
                  \"zoom\": 16
                },
                \"opt\": {
                  \"city\": \"bishkek\"
                },
                \"org\": [{
                  \"id\": \"70000001019353116\"
                }]
              });
            </script><noscript style=\"color:#c00;font-size:16px;font-weight:bold;\">Виджет карты использует JavaScript.
              Включите его в настройках вашего браузера.</noscript>
          </div>
        </div>
       
      </div>


    </div>", "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/pages/kontakty.htm", "");
    }
}
