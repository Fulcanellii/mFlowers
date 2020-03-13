<?php 
class Cms5e6b1af250f9b724730312_d4231238fa7f773b0bebde30fa2f1c5eClass extends Cms\Classes\PageCode
{
public function onInit()
{
    $obPluginManager = \System\Classes\PluginManager::instance();
    $this['location_is_available'] = $obPluginManager->hasPlugin('RainLab.Location');
}
}
