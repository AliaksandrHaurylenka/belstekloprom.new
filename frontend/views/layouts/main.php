<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\components\TopWidget;
use frontend\components\SlideWidget;
use frontend\components\LogoMenuWidget;
use frontend\components\BannersWidget;
use frontend\components\FooterWidget;
use frontend\components\MenuMobilWidget;
use frontend\components\firstModalWidget;


AppAsset::register($this);
set_time_limit (3);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html class="no-js" lang="<?= Yii::$app->language ?>">
<head>
	<meta charset="<?= Yii::$app->charset ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="keywords" content="стеклотара, бутылка,стеклобой, стеклобой Гомель, стеклобой бесцветный тарный, стеклобой полубелый тарный, стеклобой коричневый тарный, оливария, криница, лидское пиво, стекло, хайникен, heineken, стекло коричневое, стеклотара коричневая, пиво, белстеклопром, производство стеклянной тары, стеклянная тара, стекловаренная печь, стеклозавод, стеклотарный завод, стеклотарный, бутылка коричневая, Гомель, Коралл, улица Лепешинского, bsp, БСП">
	<?= Html::csrfMetaTags() ?>
	<title><?= Html::encode($this->title) ?></title>

	<!-- https://webformyself.com/ispolzovanie-modernizr-3-0-kratkij-obzor/ -->
<!-- http://starwebdesign.com.ua/blog/2011/02/28/what-do-modernizr-2/ -->
	<?php $this->registerJsFile('/js/modernizr-3.5.0.min.js', ['position' => \yii\web\View::POS_END]) ?>
	<!--ЗАГЛУШКА ДЛЯ IE см. http://blog.toliklunev.ru/all/finalreject/-->
	<!--распаковывается в папку @web-->
	<?php $this->registerCssFile('/reject/reject.css', ['condition' => 'lte IE 9', 'position' => \yii\web\View::POS_HEAD]) ?>
  <?php $this->registerJsFile('/reject/reject.min.js', ['condition' => 'lte IE 9', 'position' => \yii\web\View::POS_HEAD]) ?>
	<!--[if !IE]><!-->
		<script>if(/*@cc_on!@*/false){document.documentElement.className+=' ie10';}</script>
	<!--<![endif]-->
	<?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">

  <div style="display: none;">
    <div class="box-modal" id="firstModal">
      <div class="box-modal_close arcticmodal-close">&times;</div>
      <?= firstModalWidget::widget(); ?>
    </div>
  </div>

  <?= TopWidget::widget(); ?>

	<div class="container p-0 container-bg">
		<header class="d-flex flex-row no-gutters">
      <?php if ($this->beginCache('SlideWidget', ['duration' => 60*60*24*30])): ?>
			  <?= SlideWidget::widget(); ?>
        <?php $this->endCache(); ?>
      <?php endif; ?>

      <?= LogoMenuWidget::widget(); ?>

		</header>
		<?= MenuMobilWidget::widget(); ?>
		<span id="scroll_to_id"></span><!--Для скролинга до элемента на странице (см. 'myScript.js')-->
		<?= Breadcrumbs::widget([
			'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
		]) ?>
		<?= $content ?>

    <?php if ($this->beginCache('BannersWidget', ['duration' => 60*60*24*30])): ?>
		  <?= BannersWidget::widget(); ?>
      <?php $this->endCache(); ?>
    <?php endif; ?>
	</div>


  <?= FooterWidget::widget(); ?>


</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
