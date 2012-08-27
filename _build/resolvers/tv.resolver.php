<?php
/**
* Resolver to connect TVs to templates for Example extra
*
* Copyright 2012 by Bob Ray <http://bobsguides.com>
* Created on 08-16-2012
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
/* @var $tvObj modTemplateVar */
/* @var $templateObj modTemplate */
/* @var $tvt modTemplateVarTemplate */

/* @var array $options */

if ($object->xpdo) {
    $modx =& $object->xpdo;
    switch ($options[xPDOTransport::PACKAGE_ACTION]) {
        case xPDOTransport::ACTION_INSTALL:
        case xPDOTransport::ACTION_UPGRADE:
            

            $tvObj = null;
            $templateObj = null;
            $tvId = 0;
            $templateId = 0;
            $template = 'default';
            $tvs = 'Tv1,Tv2';
            $tvs = explode(',', $tvs);
            if ($template == 'default') {
                $templateId = $modx->getOption('default_template');
                $templateObj = $modx->getObject('modTemplate', (integer) $templateId);
            } else {
                $templateObj = $modx->getObject('modTemplate', array('templatename'=> $template));
                if ($templateObj) {
                    $templateId = $templateObj->get('id');
                }
            }
            foreach ($tvs as $tv) {
                $tvObj = $modx->getObject('modTemplateVar', array('name'=> $tv));
                if ($tvObj && $templateObj) {
                    $tvId = $tvObj->get('id');
                    $tvt = $modx->getObject('modTemplateVarTemplate', array('tmplvarid' => $tvId, 'templateid' => $templateId));
                    if (! $tvt) {
                        $tvt = $modx->newObject('modTemplateVarTemplate');
                    }
                    if ($tvt) {
                        $tvt->set('tmplvarid', $tvId);
                        $tvt->set('templateid', $templateId);
                        $tvt->set('rank', 0);
                        $tvt->save();
                    }
                }
            }



            $tvObj = null;
            $templateObj = null;
            $tvId = 0;
            $templateId = 0;
            $template = 'Template1';
            $tvs = 'Tv1,Tv2';
            $tvs = explode(',', $tvs);
            if ($template == 'default') {
                $templateId = $modx->getOption('default_template');
                $templateObj = $modx->getObject('modTemplate', (integer) $templateId);
            } else {
                $templateObj = $modx->getObject('modTemplate', array('templatename'=> $template));
                if ($templateObj) {
                    $templateId = $templateObj->get('id');
                }
            }
            foreach ($tvs as $tv) {
                $tvObj = $modx->getObject('modTemplateVar', array('name'=> $tv));
                if ($tvObj && $templateObj) {
                    $tvId = $tvObj->get('id');
                    $tvt = $modx->getObject('modTemplateVarTemplate', array('tmplvarid' => $tvId, 'templateid' => $templateId));
                    if (! $tvt) {
                        $tvt = $modx->newObject('modTemplateVarTemplate');
                    }
                    if ($tvt) {
                        $tvt->set('tmplvarid', $tvId);
                        $tvt->set('templateid', $templateId);
                        $tvt->set('rank', 0);
                        $tvt->save();
                    }
                }
            }



            $tvObj = null;
            $templateObj = null;
            $tvId = 0;
            $templateId = 0;
            $template = 'Template2';
            $tvs = 'Tv1,Tv2';
            $tvs = explode(',', $tvs);
            if ($template == 'default') {
                $templateId = $modx->getOption('default_template');
                $templateObj = $modx->getObject('modTemplate', (integer) $templateId);
            } else {
                $templateObj = $modx->getObject('modTemplate', array('templatename'=> $template));
                if ($templateObj) {
                    $templateId = $templateObj->get('id');
                }
            }
            foreach ($tvs as $tv) {
                $tvObj = $modx->getObject('modTemplateVar', array('name'=> $tv));
                if ($tvObj && $templateObj) {
                    $tvId = $tvObj->get('id');
                    $tvt = $modx->getObject('modTemplateVarTemplate', array('tmplvarid' => $tvId, 'templateid' => $templateId));
                    if (! $tvt) {
                        $tvt = $modx->newObject('modTemplateVarTemplate');
                    }
                    if ($tvt) {
                        $tvt->set('tmplvarid', $tvId);
                        $tvt->set('templateid', $templateId);
                        $tvt->set('rank', 0);
                        $tvt->save();
                    }
                }
            }


            break;

        case xPDOTransport::ACTION_UNINSTALL:
            break;
    }
}

return true;