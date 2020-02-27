<?php 
class Cms5e57afbdb1905275766089_7563903c39a3eac7f3adfedb3513d366Class extends Cms\Classes\LayoutCode
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
