<?php

$plugins = array();

 
$plugin_name = PKG_NAME_LOWER;
$content = getSnippetContent($sources['plugins'] . $plugin_name . '.plugin.php');

if(!empty($content)){

  /*
   * New plugin
   */
  
  $plugin = $modx->newObject('modPlugin');
  $plugin->set('id', 0);
  $plugin->set('name', $plugin_name );
  $plugin->set('description', $plugin_name.'_desc');
  $plugin->set('plugincode', $content );
  
  
  /* add plugin events */
  $events = array();
  
  $events['OnDocFormSave'] = $modx->newObject('modPluginEvent');
  $events['OnDocFormSave'] -> fromArray(array(
   'event' => 'OnDocFormSave',
   'priority' => 0,
   'propertyset' => 0,
  ),'',true,true);
  
  $plugin->addMany($events, 'PluginEvents');
  
  $modx->log(xPDO::LOG_LEVEL_INFO,'Packaged in '.count($events).' Plugin Events.'); flush();
  
  $plugins[] = $plugin;
}

unset($plugin,$events,$plugin_name,$content);
return $plugins;