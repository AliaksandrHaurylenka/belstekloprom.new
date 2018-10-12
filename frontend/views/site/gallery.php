<?php

use frontend\assets\PrettyPhotoAppAsset;
use frontend\components\RewardsWidget;
use frontend\components\GalleryWidget;
use frontend\components\VideoWidget;
use frontend\components\NewsWidget;
use frontend\components\PhotoWidget;


PrettyPhotoAppAsset::register($this);

$this->title=Yii::t('common', 'БелСтеклоПром.Галерея');
$this->params['breadcrumbs'][]=$this->title;
?>
<div class="m-2 site-gallery">

  <?= GalleryWidget::widget(); ?>
  <?= RewardsWidget::widget(); ?>
  <?= NewsWidget::widget(); ?>
  <?= VideoWidget::widget(); ?>

<!--  --><?//= PhotoWidget::widget(); ?>
  <div class="photos-materials">
    <h2><?= Yii::t('common', 'Фото материалы') ?></h2>
    <hr>
    <ul class="portfolio-categ filter">
      <li><?= Yii::t('common', 'Категории') ?>:</li>
      <li class="all active"><a href="#"><?= Yii::t('common', 'Все') ?></a></li>
      <li class="cat-item-1"><a href="#"><?= Yii::t('common', 'Заводоуправление') ?></a></li>
      <!-- <li class="cat-item-2"><a href="#"><? //= Yii::t('common', 'Производственный участок') ?></a></li>-->
      <li class="cat-item-3"><a href="#"><?= Yii::t('common', 'ОТК') ?></a></li>
      <!-- <li class="cat-item-4"><a href="#"><? //= Yii::t('common', 'Участок ретонта форм') ?></a></li>-->
      <!-- <li class="cat-item-5"><a href="#"><? //= Yii::t('common', 'Цех приготовления шихты') ?></a></li>-->
      <!-- <li class="cat-item-6"><a href="#"><? //= Yii::t('common', 'Энергетическая служба') ?></a></li>-->
      <!-- <li class="cat-item-7"><a href="#"><? //= Yii::t('common', 'Механическая служба') ?></a></li>-->
      <li class="cat-item-8"><a href="#"><?= Yii::t('common', 'Лаборатория') ?></a></li>
      <li data-toggle="modal" data-target=".bd-example-modal-lg"><a href="#">10 лет заводу</a></li>
    </ul>

    <ul class="row portfolio-area">
      <?php foreach($gallery as $photo): ?>
        <li class="col-sm-6 col-md-4 col-lg-3 portfolio-item2" data-id="id-0"
            data-type="cat-item-<?= $photo['cat_item']; ?>">
          <div>
            <span class="image-block">
              <a class="image-zoom" href="/images/gallery/<?= $photo['photo_name']; ?>" data-gal="prettyPhoto[gallery]"
                 title="<?= Yii::t('common', $photo['title']); ?>">
                <img src="/images/gallery/<?= $photo['photo_name']; ?>" alt="<?= $photo['alt']; ?>"
                     title="<?= Yii::t('common', $photo['title']); ?>">
              </a>
            </span>
            <div class="home-portfolio-text"><h2><?= Yii::t('common', $photo['title']); ?></h2></div>
          </div>
        </li>
      <?php endforeach ?>
    </ul>
    <div style="clear:both;"></div>
  </div>

</div>