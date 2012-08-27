<?php
/**
 * plugins transport file for Example extra
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

$plugins = array();

$plugins[1] = $modx->newObject('modPlugin');
$plugins[1] ->fromArray(array(
    'id' => 1,
    'property_preprocess' => '0',
    'name' => 'Plugin1',
    'description' => '',
    'properties' => '',
    'disabled' => '0',
    'plugincode' => stripPhpTags($sources['source_core'].'/elements/plugins/plugin1.plugin.php'),
), '', true, true);
$plugins[2] = $modx->newObject('modPlugin');
$plugins[2] ->fromArray(array(
    'id' => 2,
    'property_preprocess' => '0',
    'name' => 'Plugin2',
    'description' => '',
    'properties' => '',
    'disabled' => '0',
    'plugincode' => stripPhpTags($sources['source_core'].'/elements/plugins/plugin2.plugin.php'),
), '', true, true);
return $plugins;
