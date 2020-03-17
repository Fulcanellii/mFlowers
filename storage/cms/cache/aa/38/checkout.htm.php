<?php 
class Cms5e7052a73f39b257105933_5253b4650c221af2ef713be639ccbe9cClass extends Cms\Classes\PageCode
{
public function onInit()
{
    $obPluginManager = \System\Classes\PluginManager::instance();
    $this['location_is_available'] = $obPluginManager->hasPlugin('RainLab.Location');
}
}
