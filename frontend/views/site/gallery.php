<?php

/* @var $this yii\web\View */

//use yii\helpers\Html;
use frontend\assets\PrettyPhotoAppAsset;


PrettyPhotoAppAsset::register($this);

$this->title =  Yii::t('common', 'БелСтеклоПром.Галерея');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="m-2 site-gallery">

	<div class="video-materials">
		<h2><?= Yii::t('common', 'Видео материалы') ?></h2>

		<div class="row justify-content-around">
			<?php
			echo \wbraganca\videojs\VideoJsWidget::widget([
				'options' => [
					'class' => 'col-sm-5 m-2 video-js vjs-default-skin vjs-big-play-centered',
					'poster' => "/images/gallery/video_belstekloprom.jpg",
					'controls' => true,
					'preload' => 'auto',
					//'width' => '970',
					//'height' => '400',
				],
				'tags' => [
					'source' => [
						['src' => '/video/belstekloprom.mp4', 'type' => 'video/mp4'],
						['src' => '/video/belstekloprom.webm', 'type' => 'video/webm']
					],
					'track' => [
						['kind' => 'captions', 'src' => 'http://vjs.zencdn.net/vtt/captions.vtt', 'srclang' => 'ru', 'label' => 'Русский']
					]
				]
			]);


			echo \wbraganca\videojs\VideoJsWidget::widget([
				'options' => [
					'class' => 'col-sm-5 m-2 video-js vjs-default-skin vjs-big-play-centered',
					'poster' => "/images/gallery/Recycling-of-glass-in-Belarus.jpg",
					'controls' => true,
					'preload' => 'auto',
				],
				'tags' => [
					'source' => [
						['src' => '/video/Recycling-of-glass-in-Belarus.mp4', 'type' => 'video/mp4'],
						['src' => '/video/Recycling-of-glass-in-Belarus.webm', 'type' => 'video/webm']
					],
					'track' => [
						['kind' => 'captions', 'src' => 'http://vjs.zencdn.net/vtt/captions.vtt', 'srclang' => 'ru', 'label' => 'Русский']
					]
				]
			]);
			?>
		</div>
	</div>

	<div class="photos-materials">
		<h2><?= Yii::t('common', 'Фото материалы') ?></h2>
		<ul class="portfolio-categ filter">
			<li><?= Yii::t('common', 'Категории') ?>:</li>
			<li class="all active"><a href="#"><?= Yii::t('common', 'Все') ?></a></li>
			<li class="cat-item-1"><a href="#"><?= Yii::t('common', 'Заводоуправление') ?></a></li>
			<!-- <li class="cat-item-2"><a href="#"><?//= Yii::t('common', 'Производственный участок') ?></a></li>-->
			<li class="cat-item-3"><a href="#"><?= Yii::t('common', 'ОТК') ?></a></li>
			<!-- <li class="cat-item-4"><a href="#"><?//= Yii::t('common', 'Участок ретонта форм') ?></a></li>-->
			<!-- <li class="cat-item-5"><a href="#"><?//= Yii::t('common', 'Цех приготовления шихты') ?></a></li>-->
			<!-- <li class="cat-item-6"><a href="#"><?//= Yii::t('common', 'Энергетическая служба') ?></a></li>-->
			<!-- <li class="cat-item-7"><a href="#"><?//= Yii::t('common', 'Механическая служба') ?></a></li>-->
			<li class="cat-item-8"><a href="#"><?= Yii::t('common', 'Лаборатория') ?></a></li>
		</ul>

		<ul class="row portfolio-area">
			<?php foreach ($gallery as $photo): ?>
				<li class="col-sm-6 col-md-4 col-lg-3 portfolio-item2" data-id="id-0"
				    data-type="cat-item-<?= $photo['cat_item']; ?>">
					<div>
            <span class="image-block">
              <a class="image-zoom" href="/images/gallery/<?= $photo['photo_name']; ?>" data-gal="prettyPhoto[gallery]" title="<?= Yii::t('common', $photo['title']); ?>">
                <img src="/images/gallery/<?= $photo['photo_name']; ?>" alt="<?= $photo['alt']; ?>" title="<?= Yii::t('common', $photo['title']); ?>">
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
