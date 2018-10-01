<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use frontend\components\ProductWidget;

$this->title = Yii::t('common', 'Архив изделий');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="m-2 site-bottle-archive">
  <h1><?= Html::encode($this->title) ?></h1>

    <?= ProductWidget::widget([
                                'venchik_en' => ['kpnv', 'kpnn', 'vkp', 'other'],
                                'status' => 'archive'
                            ])
    ?>
    
</div>
