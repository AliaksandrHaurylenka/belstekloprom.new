<?php
use yii\helpers\Html;

?>

<!-- БЛОК ВЕРХНЯЯ ПОЛОСА -->
<div class="top gr_top">
  <div class="container p-0 top-info">

    <div class="d-flex flex-row justify-content-between align-items-center">

      <!--БЛОК АДРЕСА-->
      <div class="p-2 street">
        <div class="d-flex flex-row no-gutters align-items-center">
          <div>
	          <?= Html::img('@web/images/area_RB.png', ['alt' => 'Территория РБ']); ?>
          </div>
          <address class="">246015 <?= Yii::t('common', 'Республика Беларусь') ?><br>
	          <?= Yii::t('common', 'г. Гомель, ул. Лепешинского 7') ?></address>
        </div>
      </div>

      <!--БЛОК ТЕЛЕФОН-->
      <div class="phone">
        <div class="d-flex flex-row no-gutters align-items-center">
          <div>
<!--	          <img src="images/phone.png" alt="Телефон">-->
	          <?= Html::img('@web/images/phone.png', ['alt' => 'Телефон']); ?>
          </div>
          <p>+375(232)68-43-78</p>
        </div>
      </div>

      <!--БЛОК ПОЧТЫ-->
      <div class="e-mail">
        <div class="d-flex flex-row no-gutters align-items-center">
          <!--блок изображения почты-->
          <div>
            <?= Html::a(Html::img('@web/images/e-mail.png', ['alt' => 'Почта']), ['site/contact#feedback']) ?>
          </div>
          <!--блок текст почты-->
          <p>
            <?= Html::a('bspgomel@gmail.com', ['site/contact#feedback']) ?>
          </p>
        </div>
      </div>
      <!--</div>-->

	    <!--БЛОК ПЕРЕКЛЮЧЕНИЯ ЯЗЫКА-->
      <!--<div class="col-2">
	      <div class="lang">
		      <div class="d-flex flex-row justify-content-around">
		        <p class="col-4 gr_lang lang_btn ">RU</p>
		        <p class="col-4 gr_lang lang_btn">EN</p>
		      </div>
	      </div>
      </div>-->

	    <?= $this->render('select-language') ?>

  </div><!-- end flex-row -->
</div><!-- end top-info -->
</div><!-- end top -->