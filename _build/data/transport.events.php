<?php
/**
 * events transport file for Example extra
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
/* @var xPDOObject[] $events */


$events = array();

$events[1] = $modx->newObject('modEvent');
$events[1]->fromArray(array(
    'name' => 'OnMyEvent1',
    'service' => '1',
    'groupname' => 'Example',
    'properties' => '',
), '', true, true);
$events[2] = $modx->newObject('modEvent');
$events[2]->fromArray(array(
    'name' => 'OnMyEvent2',
    'service' => '1',
    'groupname' => 'Example',
    'properties' => '',
), '', true, true);
return $events;
