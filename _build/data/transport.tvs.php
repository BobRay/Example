<?php
/**
 * templateVars transport file for Example extra
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

$templatevars = array();

$templatevars[1] = $modx->newObject('modTemplateVar');
$templatevars[1] ->fromArray(array(
    'id' => 1,
    'property_preprocess' => '0',
    'type' => '',
    'name' => 'Tv2',
    'caption' => '',
    'description' => '',
    'elements' => '',
    'rank' => '0',
    'display' => '',
    'default_text' => '',
    'properties' => '',
    'input_properties' => '',
    'output_properties' => '',
), '', true, true);
$templatevars[2] = $modx->newObject('modTemplateVar');
$templatevars[2] ->fromArray(array(
    'id' => 2,
    'property_preprocess' => '0',
    'type' => '',
    'name' => 'Tv1',
    'caption' => '',
    'description' => '',
    'elements' => '',
    'rank' => '0',
    'display' => '',
    'default_text' => '',
    'properties' => '',
    'input_properties' => '',
    'output_properties' => '',
), '', true, true);
return $templatevars;
