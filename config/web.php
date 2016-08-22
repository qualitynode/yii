<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',    //应用id
    'basePath' => dirname(__DIR__),     //应用根目录
    'bootstrap' => ['log'],
    'components' => [       //允许注册多个在其他地方使用的组件
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            //插入一个密钥在下面那一行（如果为空），被cookie检验调用
            'cookieValidationKey' => 'f-1cwZYcAkfXPK8Tla8oVxvwDbnTDzOG',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.  发送所有的邮件到默认的文件。必须设'useFileTransport'为'false'，同时配置一条供邮件发送的通道
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),
        /*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        'modules' => [],    //指定应用所包含的模块
        */
    ],
    'params' => $params,
    'timeZone' => 'Etc/GMT-8',      //指定时区为东八区
    /*
     * 'controllerMap' => [             //控制器部署，一般第三方不能掌控类名的控制器上
     *  'controllerID' => 'app\controllers\SomeController'
     * ],
     *
     * 'defaultRoute' => 'main',        //修改默认控制器
     *
     * */
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment  开发环境的配置调节器
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        'allowedIPs' => ['192.168.0.*', '127.0.0.1'],
    ];
}

return $config;
