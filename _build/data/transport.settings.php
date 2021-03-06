<?php
/**
 * SystemSettings transport file for Example extra
 *
 * Copyright 2012 by Bob Ray <http://bobsguides.com>
 * Created on 08-25-2012
 *
 * @package example
 * @subpackage build
 */

if (! function_exists('stripPhpTags')) {
    function stripPhpTags($filename) {
        $o = file_get_contents($filename);
        $o = str_replace('<?php', '', $o);
        $o = str_replace('?>', '', $o);
        $o = trim($o);
        return $o;
    }
}
/* @var $modx modX */
/* @var $sources array */

$systemsettings = array();

$systemsettings[1] = $modx->newObject('modSystemSetting');
$systemsettings[1] ->fromArray(array(
    'id' => 1,
    'key' => 'a_test_system_setting',
    'value' => 'Test System Setting Value',
    'xtype' => 'textfield',
    'namespace' => 'example',
    'area' => 'example',
    'properties' => '',
), '', true, true);
return $systemsettings;
