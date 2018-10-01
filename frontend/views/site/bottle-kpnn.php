<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use frontend\components\ProductWidget;

$this->title = Yii::t('common', 'Стеклянные бутылки с низким венчиком КПНн');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="m-2 site-bottle-kpnn">
    <h1><?= Html::encode($this->title) ?></h1>
    <h2>КПНн - <?= Yii::t('common', 'венчик низкий под кроненпробку') ?></h2>

    <?//= ProductWidget::widget(['ven_en' => 'kpnn', 'venchik_en' => 'kpnn']) ?>
  <?= ProductWidget::widget([
                                'ven_en' => 'kpnn',
                                'venchik_en' => 'kpnn',
                                'status' => ['old', 'new']
                            ])
  ?>
</div>
