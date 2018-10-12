<?php
use yii\helpers\Html;

use frontend\assets\PrettyPhotoAppAsset;
PrettyPhotoAppAsset::register($this);
?>
<div class="reward mb-3">
  <h2><?= Yii::t('common', 'Награды') ?></h2>
  <hr>
  <div class="row">
    <?= Html::tag('div', Html::a(Html::img('/images/medal.jpg', ['alt' => 'Награда 2016']), '/images/medal.jpg', ['data-gal'=>"prettyPhoto[rewards]"]), ['class' => 'col-4 col-sm-4 col-md-2']); ?>
    <?= Html::tag('div', Html::a(Html::img('/images/gallery/reward/2.jpg', ['alt' => '']), '/images/gallery/reward/2.jpg', ['data-gal'=>"prettyPhoto[rewards]"]), ['class' => 'col-4 col-sm-4 col-md-2']); ?>
    <?= Html::tag('div', Html::a(Html::img('/images/gallery/reward/3.jpg', ['alt' => '']), '/images/gallery/reward/3.jpg', ['data-gal'=>"prettyPhoto[rewards]"]), ['class' => 'col-4 col-sm-4 col-md-2']); ?>
  </div>
</div>
