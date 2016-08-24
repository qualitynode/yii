<?php
use yii\helpers\Html;
//Html::encode()-对字符串进行转义

use yii\helpers\HtmlPurifier;
//HtmlPurifier::process()-可以过滤script标签
?>
<h1><?=Html::encode($name);?> is an idiot.</h1>
<h1><?=HtmlPurifier::process($name);?> is an idiot.</h1>