<?
$items = [
  'Заводоуправление',
  'ОТК',
  'Лаборатория',
//  'Производство',
//  'Участок ремонта форм',
//  'Составной',
//  'Энергетики',
//  'Механики',
]
?>

<div class="photos-materials">
  <h2><?= Yii::t('common', 'Фото материалы') ?></h2>
  <hr>
  <ul class="portfolio-categ filter">
    <li><?= Yii::t('common', 'Категории') ?>:</li>
    <li class="all active"><a href="#"><?= Yii::t('common', 'Все') ?></a></li>
    <? $i=1; ?>
    <? foreach($items as $item): ?>
      <li class="cat-item-<?= $i; ?>"><a href="#"><?= Yii::t('common', $item) ?></a></li>
    <? $i++; ?>
    <? endforeach; ?>
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