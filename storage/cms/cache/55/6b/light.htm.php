<?php 
class Cms5e579f2976531318084114_425fcf0f612ec846d0440dae0c7beaa5Class extends Cms\Classes\LayoutCode
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
