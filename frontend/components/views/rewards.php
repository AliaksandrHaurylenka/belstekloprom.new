<?php
use yii\helpers\Html;

use frontend\assets\PrettyPhotoAppAsset;
PrettyPhotoAppAsset::register($this);
$path = '/images/gallery/reward/';
?>
<div class="reward mb-3">
  <h2><?= Yii::t('common', 'Награды') ?></h2>
  <hr>
  <div class="row">
    <? foreach($rewards as $reward): ?>
      <?= Html::tag('div',
          Html::a(Html::img($path.$reward->images, ['alt' => '']),
              $path.$reward->images, ['data-gal'=>"prettyPhoto[rewards]"]),
          ['class' => 'col-4 col-sm-4 col-md-2']);
      ?>
    <? endforeach; ?>
  </div>
</div>
