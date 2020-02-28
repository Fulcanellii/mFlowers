<?php 
class Cms5e58c969d1a50945237427_8a642f60077ea067707a90cb06c73794Class extends Cms\Classes\LayoutCode
{
public function onInit()
{
    $this['path_css'] = mix('css/common.css', 'themes/'.\Cms\Classes\Theme::getActiveTheme()->getDirName().'/assets');
    $this['path_js'] = mix('js/common.js', 'themes/'.\Cms\Classes\Theme::getActiveTheme()->getDirName().'/assets');

    /**
     * Check if Cart component has been registered and autoload it
     **/

    $obManager = \Cms\Classes\ComponentManager::instance();
    if ($obManager->hasComponent('Lovata\MightySeo\Components\SeoToolbox')) {
        $this['seo_toolbox_is_available'] = true;
        $this->addComponent('Lovata\MightySeo\Components\SeoToolbox', 'SeoToolbox', []);
    }
}
}
