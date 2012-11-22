<?php
/**
 * Snippet1 snippet for Example extra
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
include 'c:\xampp\htdocs\addons\assets\mycomponents\example\core\components\example\model\example\example\example3.class.php';
$modx->lexicon->load('example:default');
$modx->lexicon->load('example:forms');
$a = $modx->getOption('property1', $scriptProperties, null);
$b = $scriptProperties['property2'];
$c = $modx->getOption('property3', $this->config);
$d = $modx->getOption('property4', $this->props, null);

$j = $modx->lexicon('ex_string1~~String One');
$k = $modx->lexicon('ex_string2~~String Two');
$l = $this->modx->lexicon('ex_string2~~string Two');
$m = $this->modx->lexicon('ex_string1~~String one');
$n = $this->modx->lexicon('ex_string2~~String Two');
$o = $this->modx->lexicon("ex_string3~~String Three");
$p = $modx->lexicon("ex_string4~~String Four");
/* xxx */