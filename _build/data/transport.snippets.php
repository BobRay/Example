<?php
/**
 * snippets transport file for Example extra
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

$snippets = array();

$snippets[1] = $modx->newObject('modSnippet');
$snippets[1] ->fromArray(array(
    'id' => 1,
    'property_preprocess' => '0',
    'name' => 'Snippet1',
    'description' => '',
    'properties' => '',
    'snippet' => stripPhpTags($sources['source_core'].'/elements/snippets/snippet1.snippet.php'),
), '', true, true);
$snippets[2] = $modx->newObject('modSnippet');
$snippets[2] ->fromArray(array(
    'id' => 2,
    'property_preprocess' => '0',
    'name' => 'Snippet2',
    'description' => '',
    'properties' => '',
    'snippet' => stripPhpTags($sources['source_core'].'/elements/snippets/snippet2.snippet.php'),
), '', true, true);
return $snippets;
