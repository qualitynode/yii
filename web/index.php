<?php

//Web应用模板的入口脚本，可以定义常量
// comment out the following two lines when deployed to production  部署产品时注释掉下面两行代码
defined('YII_DEBUG') or define('YII_DEBUG', true);  //标识应用运行在调试模式之下
defined('YII_ENV') or define('YII_ENV', 'dev');     //标识应用的运行环境为开发环境

//注册composer自动加载器
require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

$config = require(__DIR__ . '/../config/web.php');

(new yii\web\Application($config))->run();  //应用主体，处理网页请求，可以通过\Yii::$app在全局范围内访问
