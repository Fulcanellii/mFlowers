<?php 
class Cms5e5b4c161eb09756914634_8897d9f4c5de77bfd1cbe8d6513ecf35Class extends Cms\Classes\PageCode
{
public function onInit()
{
    $obPluginManager = \System\Classes\PluginManager::instance();
    $this['location_is_available'] = $obPluginManager->hasPlugin('RainLab.Location');
}
}
