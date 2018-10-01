<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use frontend\components\ProductWidget;

$this->title = Yii::t('common', 'Стеклянные бутылки под вино, шампанское');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="m-2 site-bottle-other">
    <h1><?= Html::encode($this->title) ?></h1>
    <h2><?= Yii::t('common', 'Стеклянные бутылки с венчиком типа') ?> К, Ш, В-28-1, П-29-А, П-29-Б</h2>

    <?//= ProductWidget::widget(['ven_en' => 'other', 'venchik_en' => 'other']) ?>
    <?= ProductWidget::widget([
                                'ven_en' => 'other',
                                'venchik_en' => 'other',
                                'status' => ['old', 'new']
                            ])
    ?>

    
</div>
