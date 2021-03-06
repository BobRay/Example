<?php
/**
* Resolver to connect TVs to templates for Example extra
*
* Copyright 2012 by Bob Ray <http://bobsguides.com>
* Created on 08-21-2012
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
/* @var $modx modX */
/* @var $resourceObj modResource */
/* @var $templateObj modTemplate */

/* @var array $options */

if ($object->xpdo) {
    $modx =& $object->xpdo;
    switch ($options[xPDOTransport::PACKAGE_ACTION]) {
        case xPDOTransport::ACTION_INSTALL:
        case xPDOTransport::ACTION_UPGRADE:
            


            $resourceObj = null;
            $templateObj = null;
            $template = 'Template1';
            $resources = 'Resource1,Resource2';
            $resources = explode(',', $resources);

            $templateObj = $modx->getObject('modTemplate', array('templatename'=> $template));

            foreach ($resources as $resource) {
                $resourceObj = $modx->getObject('modTemplateVar', array('name'=> $resource));
                if ($resourceObj && $templateObj) {
                    $resourceObj->set('template', $templateObj->get('id'));
                }
            }


            break;

        case xPDOTransport::ACTION_UNINSTALL:
            break;
    }
}

return true;