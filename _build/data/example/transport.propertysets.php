<?php
/**
 * propertySets transport file for Example extra
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
/* @var xPDOObject[] $propertySets */


$propertySets = array();

$propertySets[1] = $modx->newObject('modPropertySet');
$propertySets[1]->fromArray(array(
    'id' => '1',
    'name' => 'PropertySet2',
    'description' => 'Description for PropertySet2',
    'properties' => '',
), '', true, true);
$propertySets[2] = $modx->newObject('modPropertySet');
$propertySets[2]->fromArray(array(
    'id' => '2',
    'name' => 'PropertySet1',
    'description' => 'Description for PropertySet1',
    'properties' => '',
), '', true, true);
return $propertySets;
