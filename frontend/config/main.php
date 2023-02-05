<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'name' =>'Jaringan Dokumentasi dan Informasi Hukum',
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'modules'=>[
        'gridview' =>  [
            'class' => '\kartik\grid\Module',
        ], 
    ],
    'components' => [

        'view' => [
            'class' => 'daxslab\taggedview\View',
        //configure some default values that will be shared by all the pages of the website
        //if they are not overwritten by the page itself
            //'image' => 'http://domain.com/images/default-image.jpg',
        ],
        'request' => [
            'csrfParam' => '_csrf-frontend',
        ],
        'user' => [
            'identityClass' => 'common\models\Member',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'practical-a-frontend',
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
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
               '/' => 'site/index',
               'kontak' => 'site/kontak',
               '/rancangan' => 'rancangan/index',
           ],
       ],
   ],
   'params' => $params,
];
