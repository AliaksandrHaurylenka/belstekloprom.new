<?php

use yii\bootstrap\Html;

/*if(\Yii::$app->language == 'ru'):
	echo Html::a('Go to English', array_merge(
		\Yii::$app->request->get(),
		[\Yii::$app->controller->route, 'language' => 'en']
	));
else:
	echo Html::a('Перейти на русский', array_merge(
		\Yii::$app->request->get(),
		[\Yii::$app->controller->route, 'language' => 'ru']
	));
endif;*/

$options = ['class' => ['col-3 col-sm-2']];
$options1 = ['class' => ['lang']];
$options2 = ['class' => ['d-flex flex-row justify-content-around']];
$options3 = ['class' => ['gr_lang lang_btn']];

/*if(\Yii::$app->language == 'ru'):
  echo Html::tag('div',
        Html::tag('div',
            Html::tag('div',
                Html::tag('p',
                  Html::a('EN', array_merge(
                    \Yii::$app->request->get(),
                    [\Yii::$app->controller->route, 'language' => 'en'])),$options3), $options2), $options1), $options);
else:
  echo Html::tag('div',
        Html::tag('div',
          Html::tag('div',
              Html::tag('p',
                Html::a('RU', array_merge(
                  \Yii::$app->request->get(),
                  [\Yii::$app->controller->route, 'language' => 'ru'])),$options3), $options2), $options1), $options);
endif;*/


if(\Yii::$app->language == 'ru'):
  echo Html::tag('div',
      Html::tag('div',
            Html::tag('p',
                Html::a('English', array_merge(
                    \Yii::$app->request->get(),
                    [\Yii::$app->controller->route, 'language' => 'en'])),
            $options3),
      $options1),
  $options);
else:
  echo Html::tag('div',
      Html::tag('div',
            Html::tag('p',
                Html::a('Русский', array_merge(
                    \Yii::$app->request->get(),
                    [\Yii::$app->controller->route, 'language' => 'ru'])),
            $options3),
      $options1),
  $options);
endif;