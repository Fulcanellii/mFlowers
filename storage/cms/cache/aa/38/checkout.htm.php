<?php 
class Cms5e5f9201d6e1e931315617_69df99b3a2b7b99320549a5e7276c8acClass extends Cms\Classes\PageCode
{
public function onInit()
{
    $obPluginManager = \System\Classes\PluginManager::instance();
    $this['location_is_available'] = $obPluginManager->hasPlugin('RainLab.Location');
}
}
