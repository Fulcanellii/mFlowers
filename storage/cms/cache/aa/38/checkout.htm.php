<?php 
class Cms5e5cc30bd2949127150118_b4ad358ce790d178bc489f1396532942Class extends Cms\Classes\PageCode
{
public function onInit()
{
    $obPluginManager = \System\Classes\PluginManager::instance();
    $this['location_is_available'] = $obPluginManager->hasPlugin('RainLab.Location');
}
}
