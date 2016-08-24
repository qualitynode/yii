<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yii\helpers;

/**
 * HtmlPurifier provides an ability to clean up HTML from any harmful code.     HtmlPurifier类可以很好地清理任何有害代码
 *
 * Basic usage is the following:    下面是主要用法
 *
 * ```php
 * echo HtmlPurifier::process($html);
 * ```
 *
 * If you want to configure it:     如果想设置它
 *
 * ```php
 * echo HtmlPurifier::process($html, [
 *     'Attr.EnableID' => true,
 * ]);
 * ```
 *
 * For more details please refer to [HTMLPurifier documentation](http://htmlpurifier.org/).
 *
 * @author Alexander Makarov <sam@rmcreative.ru>
 * @since 2.0
 */
class HtmlPurifier extends BaseHtmlPurifier
{
}
