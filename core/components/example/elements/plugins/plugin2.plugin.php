<?php

/**
 * Plugin2 plugin for Example extra
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
 *
 * @package example
 */

/**
 * Description
 * -----------
 * [[+description]]
 *
 * Variables
 * ---------
 * @var $modx modX
 * @var $scriptProperties array
 *
 * @package example
 **/

$strings = array(
    "\$this->modx->getService('registry', 'Example')",
    "\$this->modx->getService('login', 'Example2')",
    "\$modx->loadClass('login.Example2'",
    "\$modx->loadClass('login.hello.Example3'",
);
foreach($strings as $string) {
    if (strstr($string,'modx->getService')) {
        $pattern  =  "/modx\s*->\s*getService\s*\(\s*\'[^,]*,\s*'([^']*)/";
        preg_match($pattern, $string, $matches);
        $s = strtoLower($matches[1]);
        if(strstr($s, '.')) {
            $r = strrev($s);
            $class = strrev(substr($r,0, strpos($r, '.')));
        } else {
            $class = $s;
        }
        echo "\n" . $class;
    }
    if (strstr($string, 'modx->loadClass')) {
        $pattern = "/modx\s*->\s*loadClass\s*\(\s*\'([^']*)/";
        preg_match($pattern, $string, $matches);
        $s = strtoLower($matches[1]);
        if (strstr($s, '.')) {
            $r = strrev($s);
            $class = strrev(substr($r, 0, strpos($r, '.')));
        }
        else {
            $class = $s;
        }
        echo "\n" . $class;
    }
    $x = $modx->getOption($variable, $this->props, null);
    $x = $modx->getOption('variable1', $this->props, null);
    $x = getProperty('variable2', null);
    $x = $scriptProperties['pulled_with_scriptProperties'];
}
