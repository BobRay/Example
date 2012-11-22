<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Bob Ray
 * Date: 11/3/12
 * Time: 1:17 AM
 * To change this template use File | Settings | File Templates.
 */
class Modx {
    public function __construct() {

    }
    public function lexicon($arg) {
        $z = $arg;
        return $arg;
    }
}
$modx = new Modx();
$x = array(
    $modx->lexicon('ex_file_nf~~File ("Not") Found'),
    $modx->lexicon("ex_out_of_memory~~Insufficient Memory"),
    $modx->lexicon("ex_unkown_error~~Some ('unknown') error"),

    'ex1' => 'ex_hello_kitty~~Hello Kitty',
    'ex2' => "ex_goodbye_kitty~~Goodbye Kitty",
);


$content = file_get_contents('atest.php');

$pattern = '/~~.*([\'\"][\),])/';
$replace = '$1';
$content = preg_replace($pattern, $replace, $content);
echo $content;

