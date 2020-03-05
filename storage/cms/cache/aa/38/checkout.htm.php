<?php 
class Cms5e608e15a686d221245483_960f1ff3439b0fb4012c56d3a67dc9e9Class extends Cms\Classes\PageCode
{
public function onInit()
{
    $obPluginManager = \System\Classes\PluginManager::instance();
    $this['location_is_available'] = $obPluginManager->hasPlugin('RainLab.Location');
}
}
