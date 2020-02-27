<?php 
class Cms5e579985ce418992239179_c9122f80c124acd952509ffb45291669Class extends Cms\Classes\PageCode
{
public function onInit()
{
    $obPluginManager = \System\Classes\PluginManager::instance();
    $this['location_is_available'] = $obPluginManager->hasPlugin('RainLab.Location');
}
}
