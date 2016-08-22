<?php
/**
 * Yii bootstrap file.
 *
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

require(__DIR__ . '/BaseYii.php');

/**
 * Yii is a helper class serving common framework functionalities.      Yii是一个提供一般框架功能的帮助类
 *
 * It extends from [[\yii\BaseYii]] which provides the actual implementation.   它继承提供实际执行的\yii\BaseYii
 * By writing your own Yii class, you can customize some functionalities of [[\yii\BaseYii]].   通过编写自己的Yii类，可以自定义一些\yii\BaseYii的功能
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class Yii extends \yii\BaseYii
{
}

spl_autoload_register(['Yii', 'autoload'], true, true);
Yii::$classMap = require(__DIR__ . '/classes.php');
Yii::$container = new yii\di\Container();
