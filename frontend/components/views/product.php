<?php

use frontend\components\ModalFeedbackWidget;
use frontend\assets\ActiveFirstItemProductAsset;

ActiveFirstItemProductAsset::register($this);
?>

<span id="scroll_to_id_mbil"></span><!--скролинг при клике по элементам меню-->
<!--Мобильное меню продукции-->
<nav class="navbar  navbar-inverse bg-primary hidden-md-up">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
          data-target="#navbarSupportedContentMobil" aria-controls="navbarSupportedContentMobil" aria-expanded="false"
          aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#"><?= Yii::t('common', 'Продукция') ?></a>

  <div class="collapse navbar-collapse menu-mobil-hide" id="navbarSupportedContentMobil">
    <ul class="mr-auto main_menu menu-bottle menu-bottle-mobil">
      <!--меню венчики-->
      <?php foreach ($menuVenchik as $venchik_rus): ?>
        <li class="<?= $venchik_rus['venchik_id_for_code']; ?>">
          <a class="nav-link menu-mobil-product" href="#"><?= Yii::t('common', 'Венчик ') . $venchik_rus['venchik_ru']; ?></a>
        </li>
      <?php endforeach ?>

      <!--меню продукция-->
      <?php foreach ($menuBottle as $menu): ?>
        <li class="<?= $menu['name_2'] ?>">
          <a class="nav-link menu-mobil-product" href="#">
            <?php
            echo $menu['type'] .
              '-' . $menu['venchik'] .
              '-' . $menu['volume'] .
              '-' . $menu['number'] .
              '-' . ' (' . $menu['name_1'] . ')';
            ?>
          </a>
        </li>
      <?php endforeach ?>
    </ul>
  </div>
</nav>





<div class="row no-gutters justify-content-between product-blocks">
  <!--МЕНЮ-->
  <!--класс h-100 для того, чтобы обрезалось пустое место снизу в меню-->
  <ul class="hidden-sm-down h-100 col-md-3 nav flex-column main_menu menu-bottle for-first-active-li">
    <!--меню венчики-->
    <?php foreach ($menuVenchik as $venchik_rus): ?>
      <li class="<?= $venchik_rus['venchik_id_for_code']; ?>">
        <a class="nav-link" href="#"><?= Yii::t('common', 'Венчик ') . $venchik_rus['venchik_ru']; ?></a>
      </li>
    <?php endforeach ?>

    <!--меню продукция-->
    <?php foreach ($menuBottle as $menu): ?>
      <li class="<?= $menu['name_2'] ?>">
        <a class="nav-link" href="#">
          <?php
          echo $menu['type'] .
            '-' . $menu['venchik'] .
            '-' . $menu['volume'] .
            '-' . $menu['number'] .
            '-' . ' (' . $menu['name_1'] . ')';
          ?>
        </a>
      </li>
    <?php endforeach ?>
  </ul>


  <!--ФОТО-->
  <div class="col-md-9 product">

    <!--фото венчики-->
    <?php foreach ($menuVenchik as $venchik_img): ?>
      <div class="row no-gutters align-items-center product-img-info venchik"
           id="<?= $venchik_img['venchik_id_for_code']; ?>-venchik-info">
        <div class="col img-venchik">
          <img src="/images/bottle/<?= $venchik_img['img_1']; ?>"
               alt="Чертеж венчика <?= $venchik_img['venchik_ru']; ?>"
               title="<?= Yii::t('common', 'Венчик ') . $venchik_img['venchik_ru']; ?>">
        </div>
        <div class="col img-venchik">
          <img src="/images/bottle/<?= $venchik_img['img']; ?>"
               alt="Венчик <?= $venchik_img['venchik_ru']; ?>"
               title="<?= Yii::t('common', 'Венчик ') .  $venchik_img['venchik_ru']; ?>">
        </div>
      </div>
    <?php endforeach ?>

    <!--фото продукция-->
    <?php foreach ($menuBottle as $bottle_img): ?>
      <div class="row no-gutters product-img-info" id="<?= $bottle_img['name_2']; ?>-bottle-info">
        <div class="col-sm-5 col-lg-6 d-flex justify-content-center product-photo">
          <div><img src="/images/bottle/<?= $bottle_img['name_2'] . "_1.png"; ?>"
                    class="p-2"
                    title="<?= Yii::t('common', 'Стеклотара чертеж ') . $bottle_img['type'] . "-"
                    . $bottle_img['venchik'] . "-"
                    . $bottle_img['volume'] . "-"
                    . $bottle_img['number'] . " (" . $bottle_img['name_1'] . ")"; ?>"
                    alt="<?= $bottle_img['name_1']; ?>"></div>
          <div><img src="/images/bottle/<?= $bottle_img['name_2'] . ".png"; ?>"
                     class="p-2"
                     title="<?= Yii::t('common', 'Стеклянная бутылка ') . $bottle_img['type'] . "-"
                     . $bottle_img['venchik'] . "-"
                     . $bottle_img['volume'] . "-"
                     . $bottle_img['number'] . " (" . $bottle_img['name_1'] . ")"; ?>"
                     alt="<?= $bottle_img['name_1']; ?>"></div>
        </div>


        <div class="col-sm-7 col-lg-6">

          <table class="table table-striped table-sm">
            <thead>
            <tr>
              <th colspan="2"><?= $bottle_img['name_1']; ?></th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td><?= Yii::t('common', 'Обозначение') ?>:</td>
              <td><?= $bottle_img['type'] . "-"
                . $bottle_img['venchik'] . "-"
                . $bottle_img['volume'] . "-"
                . $bottle_img['number']; ?>
              </td>
            </tr>
            <tr>
              <td><?= Yii::t('common', 'Тип венчика') ?>:</td>
              <td><?= $bottle_img['venchik']; ?></td>
            </tr>
            <tr>
              <td><?= Yii::t('common', 'Высота') ?>:</td>
              <td><?= $bottle_img['height'];
                echo $bottle_img['dev_1']; ?> мм
              </td>
            </tr>
            <tr>
              <td><?= Yii::t('common', 'Макс. диаметр') ?>:</td>
              <td><?= $bottle_img['diameter'];
                echo $bottle_img['dev_2']; ?> мм
              </td>
            </tr>
            <tr>
              <td><?= Yii::t('common', 'Объем') ?>:</td>
              <td><?= $bottle_img['volume']; ?> ml</td>
            </tr>
            <tr>
              <td><?= Yii::t('common', 'Вес изделия') ?>:</td>
              <td><?= $bottle_img['massa'];
                echo $bottle_img['dev_massa']; ?> г
              </td>
            </tr>
            </tbody>
          </table>

        </div>
        <!--<div class="col">-->
      </div><!--<div class="row no-gutters product-img-info"-->
    <?php endforeach ?>

    <?= ModalFeedbackWidget::widget(); ?>

    <!--КНОПКА ОБРАТНОЙ СВЯЗИ-->
    <div class="d-flex button_feedback" data-toggle="modal" data-target="#exampleModal">
      <img src="/images/phone.png" class="p-3" alt="Телефон">

      <p class="p-3"><?= Yii::t('common', 'обратная связь') ?></p>
    </div>

  </div>
  <!--<div class="col-9 product">-->
</div><!--<div class="row no-gutters justify-content-between">-->