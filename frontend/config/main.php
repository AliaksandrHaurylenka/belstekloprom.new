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
  'bootstrap' => ['log'],
  'controllerNamespace' => 'frontend\controllers',
	//мультиязычность сайта: http://atoumus.github.io/yii2-i18n.html
	'language'   => 'ru',//для мультиязычного сайта
	'sourceLanguage' => 'ru',//для мультиязычного сайта
  'components' => [
    'request' => [
      'csrfParam' => '_csrf-frontend',
      'baseUrl' => '',
    ],
    'user' => [
      'identityClass' => 'common\models\User',
      'enableAutoLogin' => true,
      'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
    ],
    'session' => [
      // this is the name of the session cookie used for login on the frontend
      'name' => 'advanced-frontend',
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
	    //для мультиязычности сайта
	    'class' => 'codemix\localeurls\UrlManager',
	    'languages' => ['ru', 'en'],
	    'enableDefaultLanguageUrlCode' => false,


      'enablePrettyUrl' => true,
      'showScriptName' => false,
      'rules' => [
        '' => 'site/index',
        /**
         * конкретное правило должно быть расположено
         * выше общего правила!!!
         */
        'page/<view:[a-zA-Z0-9-]+>' => 'site/page',//для мультиязычности сайта
        '<action>' => 'site/<action>',
      ],
    ],

	  //мультиязычность сайта
	  'i18n' => [
		  'translations' => [
			  'common*' => [
				  'class' => 'yii\i18n\PhpMessageSource',
				  'basePath' => '@app/messages',
			  ],
		  ],
	  ],

    //для работы почты
    'mailer' => [
      'class' => 'yii\swiftmailer\Mailer',
//      'useFileTransport' => false,
      'useFileTransport' => true,
	    'transport' => [
		    'class' => 'Swift_SmtpTransport',
		    'host' => 'smtp.mail.ru',
		    'username' => 'bsp_gomel@mail.ru',
		    'password' => 'bel2008steklo',
		    'port' => '587',
		    'encryption' => 'tls',
	    ],
    ],

  ],
  'params' => $params,
];
