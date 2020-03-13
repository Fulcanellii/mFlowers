<?php 
class Cms5e6b1aed3af09733509128_4da1590e4ebb9d149e69ada95efae77fClass extends Cms\Classes\LayoutCode
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
