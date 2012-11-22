<?php
/**
 * systemSettings transport file for Example extra
 *
 * Copyright 2012 by Bob Ray <http://bobsguides.com>
 * Created on 11-21-2012
 *
 * @package example
 * @subpackage build
 */

if (! function_exists('stripPhpTags')) {
    function stripPhpTags($filename) {
        $o = file_get_contents($filename);
        $o = str_replace('<' . '?' . 'php', '', $o);
        $o = str_replace('?>', '', $o);
        $o = trim($o);
        return $o;
    }
}
/* @var $modx modX */
/* @var $sources array */
/* @var xPDOObject[] $systemSettings */


$systemSettings = array();

$systemSettings[1] = $modx->newObject('modSystemSetting');
$systemSettings[1]->fromArray(array(
    'key' => 'example_system_setting1',
    'value' => 'value1',
    'xtype' => 'textField',
    'namespace' => 'example',
    'area' => 'area1',
    'properties' => '',
), '', true, true);
$systemSettings[2] = $modx->newObject('modSystemSetting');
$systemSettings[2]->fromArray(array(
    'key' => 'example_system_setting2',
    'value' => true,
    'xtype' => 'combo-boolean',
    'namespace' => 'example',
    'area' => 'area2',
    'properties' => '',
), '', true, true);
return $systemSettings;
