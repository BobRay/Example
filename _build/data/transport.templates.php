<?php
/**
 * templates transport file for Example extra
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

$templates = array();

$templates[1] = $modx->newObject('modTemplate');
$templates[1] ->fromArray(array(
    'id' => 1,
    'property_preprocess' => '0',
    'templatename' => 'Template1',
    'description' => 'Template',
    'icon' => '',
    'template_type' => '0',
    'properties' => '',
    'content' => file_get_contents($sources['source_core'].'/elements/templates/template1.template.html'),
), '', true, true);
$templates[2] = $modx->newObject('modTemplate');
$templates[2] ->fromArray(array(
    'id' => 2,
    'property_preprocess' => '0',
    'templatename' => 'Template2',
    'description' => 'Template',
    'icon' => '',
    'template_type' => '0',
    'properties' => '',
    'content' => file_get_contents($sources['source_core'].'/elements/templates/template2.template.html'),
), '', true, true);
return $templates;
