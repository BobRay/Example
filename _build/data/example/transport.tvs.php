<?php
/**
 * templateVars transport file for Example extra
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
/* @var xPDOObject[] $templateVars */


$templateVars = array();

$templateVars[1] = $modx->newObject('modTemplateVar');
$templateVars[1]->fromArray(array(
    'id' => '1',
    'property_preprocess' => '',
    'type' => '',
    'name' => 'Tv2',
    'caption' => 'Tv2',
    'description' => '',
    'elements' => '',
    'rank' => '0',
    'display' => '',
    'default_text' => '',
    'properties' => '',
    'input_properties' => array(),
    'output_properties' => array(),
), '', true, true);
$templateVars[2] = $modx->newObject('modTemplateVar');
$templateVars[2]->fromArray(array(
    'id' => '2',
    'property_preprocess' => '',
    'type' => '',
    'name' => 'Tv1',
    'caption' => 'Tv1',
    'description' => '',
    'elements' => '',
    'rank' => '0',
    'display' => '',
    'default_text' => '',
    'properties' => '',
    'input_properties' => array(),
    'output_properties' => array(),
), '', true, true);
return $templateVars;
