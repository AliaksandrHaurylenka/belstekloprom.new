<?php
use frontend\components\CounterWidget;
use yii\helpers\Html;

?>


<!-- ФУТЕР -->
<footer class="gr_footer">
	<div class="container d-flex flex-row justify-content-between footer-info">
		<div class="d-flex flex-column footer-logo">
      <div class="d-flex mb-4">
        <a href="/" class="p-1"><img src="/images/logonew1.png" alt="Логотип"></a>
        <div class="d-flex flex-column">
          <h2><?= Html::a(Yii::t('common', 'БелСтеклоПром'), ['site/index']) ?></h2>
          <h3><?= Html::a(Yii::t('common', 'производство стеклотары'), ['site/index']) ?></h3>
        </div>
      </div>
      <?= CounterWidget::widget(); ?>
		</div>

		<?php
		echo yii\widgets\Menu::widget([
			'items' => [
				['label' => Yii::t('common', 'Бутылка с венчиком КПНв'), 'url' => ['site/bottle-kpnv']],
				['label' => Yii::t('common', 'Бутылка с венчиком КПНн'), 'url' => ['site/bottle-kpnn']],
				['label' => Yii::t('common', 'Бутылка с венчиком ВКП'), 'url' => ['site/bottle-vkp']],
				['label' => Yii::t('common', 'Бутылки'), 'url' => ['site/bottle-other']],
				['label' => Yii::t('common', 'Архив изделий'), 'url' => ['site/bottle-archive']],
			],
			'itemOptions' => ['class' => 'nav-item'],//добавляет класс тегу li
			'linkTemplate' => '<a href="{url}" class="nav-link">{label}</a>',//шаблон для тега a, т.е. можно добавить например класс
			'options' => ['class' => 'nav flex-column nav-footer'],
		]);
		?>


		<div class="hidden-xs-down footer-phone-mail">
			<div class="d-flex flex-row justify-content-center justify-content-md-start footer-phone">
				<div><img src="/images/phone.png" alt="Телефон"></div>
				<p>+375(232)68-43-78</p>
			</div>
			<div class="d-flex flex-row footer-mail">
				<!--блок изображения почты-->
				<div>
					<?= Html::a(Html::img('@web/images/e-mail.png', ['alt' => 'Почта']), ['site/contact#feedback']) ?>
				</div>
				<!--блок текст почты-->
				<p>
					<?= Html::a('bspgomel@gmail.com', ['site/contact#feedback']) ?>
				</p>
			</div>
			<p class="p-1 backend"><a href="/backend/web/" target="_blank">Вход</a></p>

			<p class="p-1 backend"><a href="/signup" target="_blank">Регистрация</a></p>

			<p class="p-2 year">2015 - <?= date('Y'); ?></p>
		</div>
		<!--footer-phone-mail-->

	</div>
</footer>