<?php
// Add core source
$vehicle->resolve('file',array(
    'source' => $sources['source_core'],
    'target' => "return MODX_CORE_PATH . 'components/';",
));
$modx->log(modX::LOG_LEVEL_INFO,'Packaged in CorePath'); flush();

// Add console scripts
# $data = array(
#     'source' => MODX_CORE_PATH .'components/console/files/global/modxclub.ru/modsearch/',
#     'target' => "return MODX_CORE_PATH . 'components/';",
# );
# $vehicle->resolve('file',$data);
# 
# print_r($data);


$vehicle->resolve('file',array(
    'source' => $sources['source_console'] . 'files/global/modxclub.ru/modsearch/',
    'target' => "return MODX_CORE_PATH . 'components/console/files/global/modxclub.ru/';",
));
$modx->log(modX::LOG_LEVEL_INFO,'Packaged in Console Scripts'); flush();

// Add assets source
# $vehicle->resolve('file',array(
#     'source' => $sources['source_assets'],
#     'target' => "return MODX_ASSETS_PATH . 'components/';",
# ));
# $modx->log(modX::LOG_LEVEL_INFO,'Packaged in AssetsPath'); flush();
# 
# // Add manager source
# $vehicle->resolve('file',array(
#     'source' => $sources['source_manager'],
#     'target' => "return MODX_MANAGER_PATH . 'components/';",
# ));
# $modx->log(modX::LOG_LEVEL_INFO,'Packaged in ManagerPath'); flush();

// Add site base path source
# $vehicle->resolve('file',array(
#     'source' => $sources['root'],
#     'target' => "return MODX_BASE_PATH . 'samplepackage/';",
# ));
# $modx->log(modX::LOG_LEVEL_INFO,'Packaged in MibewPath'); flush();