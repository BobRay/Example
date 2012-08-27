<?php
/**
 * chunks transport file for Example extra
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

$chunks = array();

$chunks[1] = $modx->newObject('modChunk');
$chunks[1] ->fromArray(array(
    'id' => 1,
    'property_preprocess' => '0',
    'name' => 'Chunk1',
    'description' => 'Chunk',
    'properties' => '',
    'snippet' => file_get_contents($sources['source_core'].'/elements/chunks/chunk1.chunk.html'),
), '', true, true);
$chunks[2] = $modx->newObject('modChunk');
$chunks[2] ->fromArray(array(
    'id' => 2,
    'property_preprocess' => '0',
    'name' => 'Chunk2',
    'description' => 'Chunk',
    'properties' => '',
    'snippet' => file_get_contents($sources['source_core'].'/elements/chunks/chunk2.chunk.html'),
), '', true, true);
return $chunks;
