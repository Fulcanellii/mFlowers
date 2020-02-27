<?php 
class Cms5e579984127f8987359462_2d650ef976846a623642864e038d2f1eClass extends Cms\Classes\LayoutCode
{
public function onInit()
{
    $this['path_css'] = mix('css/common.css', 'themes/'.\Cms\Classes\Theme::getActiveTheme()->getDirName().'/assets');
    $this['path_js'] = mix('js/common.js', 'themes/'.\Cms\Classes\Theme::getActiveTheme()->getDirName().'/assets');
    $this['cart_is_available'] = false;

    /**
     * Check if Cart component has been registered and autoload it
     **/

    $obManager = \Cms\Classes\ComponentManager::instance();
    if ($obManager->hasComponent('Lovata\OrdersShopaholic\Components\Cart')) {
        $this['cart_is_available'] = true;
        $this->addComponent('Lovata\OrdersShopaholic\Components\Cart', 'Cart', []);
    }

    if ($obManager->hasComponent('Lovata\MightySeo\Components\SeoToolbox')) {
        $this['seo_toolbox_is_available'] = true;
        $this->addComponent('Lovata\MightySeo\Components\SeoToolbox', 'SeoToolbox', []);
    }
}
}
