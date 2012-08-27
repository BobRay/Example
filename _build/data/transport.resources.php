<?php
/**
 * resources transport file for Example extra
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

$resources = array();

$resources[1] = $modx->newObject('modResource');
$resources[1] ->fromArray(array(
    'id' => 1,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Example1',
    'longtitle' => '',
    'description' => '',
    'alias' => 'example1',
    'link_attributes' => '',
    'published' => '0',
    'isfolder' => '0',
    'introtext' => '',
    'richtext' => '0',
    'template' => '1',
    'menuindex' => '0',
    'searchable' => '1',
    'cacheable' => '1',
    'createdby' => '1',
    'editedby' => '0',
    'deleted' => '0',
    'deletedon' => '0',
    'deletedby' => '0',
    'menutitle' => '',
    'donthit' => '0',
    'privateweb' => '0',
    'privatemgr' => '0',
    'content_dispo' => '0',
    'hidemenu' => '0',
    'class_key' => 'modDocument',
    'context_key' => 'web',
    'content_type' => '1',
    'hide_children_in_tree' => '0',
    'show_in_tree' => '1',
    'properties' => '',
), '', true, true);
$resources[1]->setContent(file_get_contents($sources['data'].'resources/example1.content.html'));

$resources[2] = $modx->newObject('modResource');
$resources[2] ->fromArray(array(
    'id' => 2,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Example2',
    'longtitle' => '',
    'description' => '',
    'alias' => 'example2',
    'link_attributes' => '',
    'published' => '0',
    'isfolder' => '0',
    'introtext' => '',
    'richtext' => '0',
    'template' => '1',
    'menuindex' => '0',
    'searchable' => '1',
    'cacheable' => '1',
    'createdby' => '1',
    'editedby' => '0',
    'deleted' => '0',
    'deletedon' => '0',
    'deletedby' => '0',
    'menutitle' => '',
    'donthit' => '0',
    'privateweb' => '0',
    'privatemgr' => '0',
    'content_dispo' => '0',
    'hidemenu' => '0',
    'class_key' => 'modDocument',
    'context_key' => 'web',
    'content_type' => '1',
    'hide_children_in_tree' => '0',
    'show_in_tree' => '1',
    'properties' => '',
), '', true, true);
$resources[2]->setContent(file_get_contents($sources['data'].'resources/example2.content.html'));

return $resources;
