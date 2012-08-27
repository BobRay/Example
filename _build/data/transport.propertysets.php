<?php
/**
 * propertySets transport file for Example extra
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

$propertysets = array();

$propertysets[1] = $modx->newObject('modPropertySet');
$propertysets[1] ->fromArray(array(
    'id' => 1,
    'name' => 'PropertySet1',
    'description' => 'Property Set1 Description',
), '', true, true);

$properties = include $sources['data'].'properties/properties.propertyset1.propertyset.php';
$propertysets[1]->setProperties($properties);
unset($properties);

$propertysets[2] = $modx->newObject('modPropertySet');
$propertysets[2] ->fromArray(array(
    'id' => 2,
    'name' => 'PropertySet2',
    'description' => '',
    'properties' => '',
), '', true, true);
return $propertysets;
