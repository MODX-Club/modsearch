<?php

$settings = array();

$setting_name = PKG_NAME_LOWER;
$setting = $modx->newObject('modSystemSetting');

$setting->fromArray(array(
 'key' => $setting_name . ".index_fields",
 'value' => 'pagetitle,longtitle,content',
 'xtype' => 'textfield',
 'namespace' => NAMESPACE_NAME,
 'area' => 'default',
),'',true,true);

$settings[] = $setting;


unset($setting,$setting_name);
return $settings;