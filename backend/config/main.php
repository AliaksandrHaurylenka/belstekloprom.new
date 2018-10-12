<?php

$params = array_merge(
	require(__DIR__ . '/../../common/config/params.php'),
	require(__DIR__ . '/../../common/config/params-local.php'),
	require(__DIR__ . '/params.php'),
	require(__DIR__ . '/params-local.php')
);

return [
	'id' => 'app-backend',
	'basePath' => dirname(__DIR__),
	'controllerNamespace' => 'backend\controllers',
	'bootstrap' => ['log'],
	'modules' => [],
	'components' => [
		//AdminLTE https://github.com/dmstr/yii2-adminlte-asset
		'view' => [
			'theme' => [
				'pathMap' => [
					//'@app/views' => '@vendor/dmstr/yii2-adminlte-asset/example-views/yiisoft/yii2-app'
					'@app/views' => '@app/views/yii2-app'//скопировали папку из закоментированного пути в указанный путь
				],
			],
		],
		//==================================
		'request' => [
			'csrfParam' => '_csrf-backend',

			/*в проектах убирается /admin
			и пишется какое-нибудь другое имя,
			для затруднения попасть в админ-панель из вне
			*/
			'baseUrl' => '/steklbelprom',//изменить на имя пользователя
		],

		'user' => [
			'identityClass' => 'common\models\User',
			'enableAutoLogin' => true,
			'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
		],

		'session' => [
			// this is the name of the session cookie used for login on the backend
			'name' => 'advanced-backend',
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


		/*'urlManager' => [
				'enablePrettyUrl' => true,
				'showScriptName' => false,
				'rules' => [
						'' => 'site/index',
						'<action>'=>'site/<action>',
				],
		],*/
	],

	'params' => $params,
];
