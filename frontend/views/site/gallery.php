<?php

use frontend\assets\PrettyPhotoAppAsset;
use frontend\components\RewardsWidget;
use frontend\components\GalleryWidget;
use frontend\components\VideoWidget;
use frontend\components\NewsWidget;
use frontend\components\PhotoWidget;


//PrettyPhotoAppAsset::register($this);

$this->title=Yii::t('common', 'БелСтеклоПром.Галерея');
$this->params['breadcrumbs'][]=$this->title;
?>
<div class="m-2 site-gallery">

  <?= GalleryWidget::widget(); ?>
  <?= RewardsWidget::widget(); ?>
  <?= NewsWidget::widget(); ?>
  <?= VideoWidget::widget(); ?>
  <?= PhotoWidget::widget(); ?>
  
</div>
