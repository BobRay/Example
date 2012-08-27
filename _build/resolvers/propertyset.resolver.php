<?php
/**
* Resolver to connect Property Sets to Elements for Example extra
*
* Copyright 2012 by Bob Ray <http://bobsguides.com>
* Created on 08-22-2012
*
 * Example is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Example is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Example; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
* @package example
* @subpackage build
*/

/* @var $object xPDOObject */
/* @var $propertySetObj modPropertySet */
/* @var $elementObj modElement */
/* @var $elementPropertySet modElementPropertySet */

/* @var array $options */
if (!function_exists('getNameAlias')) {
    function getNameAlias($elementType)
    {
        switch ($elementType) {
            case 'modTemplate':
                $nameAlias = 'templatename';
                break;
            case 'modCategory':
                $nameAlias = 'category';
                break;
            case 'modResource':
                $nameAlias = 'pagetitle';
                break;
            default:
                $nameAlias = 'name';
                break;
        }
        return $nameAlias;

    }
}


if ($object->xpdo) {
    $modx =& $object->xpdo;
    switch ($options[xPDOTransport::PACKAGE_ACTION]) {
        case xPDOTransport::ACTION_INSTALL:
        case xPDOTransport::ACTION_UPGRADE:
            

            $propertySetObj = null;
            $elementObj = null;
            $propertySet = 'PropertySet1';
            $elements = 'Plugin1:modPlugin,Snippet1:modSnippet';
            $elements = explode(',', $elements);

            $propertySetObj = $modx->getObject('modPropertySet', array('name'=> $propertySet));

            foreach ($elements as $element) {
                $element = explode(':', $element);
                $elementName = trim($element[0]);
                $elementType = trim($element[1]);
                $alias = getNameAlias($elementType);
                $elementObj = $modx->getObject($elementType, array($alias => $elementName));
                if ($propertySetObj && $elementObj) {
                    $propertySetId = $propertySetObj->get('id');
                    $elementId = $elementObj->get('id');
                    $elementPropertySet = $modx->getObject('modElementPropertySet', array('property_set' => $propertySetId, 'element' => $elementId));
                    if (! $elementPropertySet) {
                        $elementPropertySet = $modx->newObject('modElementPropertySet');
                    }
                    if ($elementPropertySet) {
                        $elementPropertySet->set('property_set', $propertySetId);
                        $elementPropertySet->set('element', $elementId);
                        $elementPropertySet->set('element_class', $elementType);
                        $elementPropertySet->save();
                    }
                }
            }



            $propertySetObj = null;
            $elementObj = null;
            $propertySet = 'PropertySet2';
            $elements = 'Chunk1:modChunk,Chunk2:modChunk';
            $elements = explode(',', $elements);

            $propertySetObj = $modx->getObject('modPropertySet', array('name'=> $propertySet));

            foreach ($elements as $element) {
                $element = explode(':', $element);
                $elementName = trim($element[0]);
                $elementType = trim($element[1]);
                $alias = getNameAlias($elementType);
                $elementObj = $modx->getObject($elementType, array($alias => $elementName));
                if ($propertySetObj && $elementObj) {
                    $propertySetId = $propertySetObj->get('id');
                    $elementId = $elementObj->get('id');
                    $elementPropertySet = $modx->getObject('modElementPropertySet', array('property_set' => $propertySetId, 'element' => $elementId));
                    if (! $elementPropertySet) {
                        $elementPropertySet = $modx->newObject('modElementPropertySet');
                    }
                    if ($elementPropertySet) {
                        $elementPropertySet->set('property_set', $propertySetId);
                        $elementPropertySet->set('element', $elementId);
                        $elementPropertySet->set('element_class', $elementType);
                        $elementPropertySet->save();
                    }
                }
            }


            break;

        case xPDOTransport::ACTION_UNINSTALL:
            break;
    }
}

return true;