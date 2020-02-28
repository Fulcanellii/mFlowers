<?php 
class Cms5e58c97b9d5f7127425543_2e3fef2062231d69bb79245f9ce6b9e0Class extends Cms\Classes\PageCode
{
public function onInit()
{
    $obPluginManager = \System\Classes\PluginManager::instance();
    $this['location_is_available'] = $obPluginManager->hasPlugin('RainLab.Location');
}
}
