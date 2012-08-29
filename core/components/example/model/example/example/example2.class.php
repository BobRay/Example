<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Bob Ray
 * Date: 8/25/12
 * Time: 10:43 PM
 * To change this template use File | Settings | File Templates.
 */

class Example2 {
 function __construct() {
     /* @var $modx modX */
     $this->modx =& $modx;

     $modx->lexicon->load('example:nofile');
     $modx->lexicon->load('example:empty');

     $j = $modx->lexicon('string1');
     $k = $modx->lexicon('string10~~this is in class example2');
     $l = $this->modx->lexicon('string11');
     $m = $this->modx->lexicon('string12');
     $n = $this->modx->lexicon('string12~~another value from example2');
     $q = $this->modx->lexicon('string12');
     $o = $this->modx->lexicon("string13~~this is in example2");
     $p = $modx->lexicon("string4~~Shouldn't override");
 }
}