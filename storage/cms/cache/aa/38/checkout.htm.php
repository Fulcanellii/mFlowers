<?php 
class Cms5e57a279143a8393007216_27626866ee9f20433fce6afc3c586210Class extends Cms\Classes\PageCode
{
public function onInit()
{
    $obPluginManager = \System\Classes\PluginManager::instance();
    $this['location_is_available'] = $obPluginManager->hasPlugin('RainLab.Location');
}
}
