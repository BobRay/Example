<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Bob Ray
 * Date: 8/26/12
 * Time: 1:51 AM
 * To change this template use File | Settings | File Templates.
 */

require_once MODX_CORE_PATH . 'model/modx/modx.class.php';

class Example3 {
    /* @var $modx modX */
    public $modx;
    public $config;
    public $props;

  function __construct() {

  }
  public function init() {

      /** @var $modx modX
          * @var $scriptProperties array
       */

      $a = $this->modx->getOption('property5', $scriptProperties, null);
      $b = $scriptProperties['property6'];
      $c = $modx->getOption('property7', $this->config);
      $d = $modx->getOption('property8', $this->props, null);

  }
}
