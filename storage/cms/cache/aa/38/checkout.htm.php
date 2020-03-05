<?php 
class Cms5e60a8d69f979375659382_61d2bf7f0a087b6f4471eccc53055f2bClass extends Cms\Classes\PageCode
{
public function onInit()
{
    $obPluginManager = \System\Classes\PluginManager::instance();
    $this['location_is_available'] = $obPluginManager->hasPlugin('RainLab.Location');
}
}
