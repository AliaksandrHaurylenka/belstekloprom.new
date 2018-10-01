<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use frontend\components\ProductWidget;

$this->title = Yii::t('common', 'Стеклянные бутылки с твистовым венчиком ВКП');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="m-2 site-bottle-vkp">
    <h1><?= Html::encode($this->title) ?></h1>
    <h2>ВКП - <?= Yii::t('common', 'венчик комбинированный под укупорку винтовым колпачком') ?></h2>

    <?//= ProductWidget::widget(['ven_en' => 'vkp', 'venchik_en' => 'vkp']) ?>
    <?= ProductWidget::widget([
                                'ven_en' => 'vkp',
                                'venchik_en' => 'vkp',
                                'status' => ['old', 'new']
                            ])
    ?>
</div>
