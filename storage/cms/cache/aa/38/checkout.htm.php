<?php 
class Cms5e5f826e3b7af253544784_f45387f8bff414410b020b5cf715ff75Class extends Cms\Classes\PageCode
{
public function onInit()
{
    $obPluginManager = \System\Classes\PluginManager::instance();
    $this['location_is_available'] = $obPluginManager->hasPlugin('RainLab.Location');
}
}
