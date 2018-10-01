<?php
use yii\helpers\Html;

use frontend\assets\PrettyPhotoAppAsset;
PrettyPhotoAppAsset::register($this);

//fancybox('certificate');
?>

<?= Html::tag('div', Html::a(Html::img('/images/medal.jpg', ['alt' => 'Награда 2016']), '/images/medal.jpg', ['data-gal'=>"prettyPhoto[certificate]"])); ?>
<?= Html::tag('div', Html::a(Html::img('/images/certificate-ru.jpg', ['alt' => 'Сертификат рус.']), '/images/certificate-ru.jpg', ['data-gal'=>"prettyPhoto[certificate]"])); ?>
<?= Html::tag('div', Html::a(Html::img('/images/politika.jpg', ['alt' => 'Политика в области качества']), '/images/politika.jpg', ['data-gal'=>"prettyPhoto[certificate]"])); ?>
<?= Html::tag('div', Html::a(Html::img('/images/declaration.jpg', ['alt' => 'Таможенная декларация']), '/images/declaration.jpg', ['data-gal'=>"prettyPhoto[certificate]"])); ?>
<?= Html::tag('div', Html::a(Html::img('/images/certificate-en.jpg', ['alt' => 'Сертификат англ.']), '/images/certificate-en.jpg', ['data-gal'=>"prettyPhoto[certificate]"])); ?>

<?/*= Html::tag('div', Html::a(Html::img('/images/medal.jpg', ['alt' => 'Награда 2016']), '/images/medal.jpg', ['data-fancybox-group' => 'certificate'])); */?><!--
<?/*= Html::tag('div', Html::a(Html::img('/images/certificate-ru.jpg', ['alt' => 'Сертификат рус.']), '/images/certificate-ru.jpg', ['data-fancybox-group' => 'certificate'])); */?>
<?/*= Html::tag('div', Html::a(Html::img('/images/politika.jpg', ['alt' => 'Политика в области качества']), '/images/politika.jpg', ['data-fancybox-group' => 'certificate'])); */?>
<?/*= Html::tag('div', Html::a(Html::img('/images/declaration.jpg', ['alt' => 'Таможенная декларация']), '/images/declaration.jpg', ['data-fancybox-group' => 'certificate'])); */?>
--><?/*= Html::tag('div', Html::a(Html::img('/images/certificate-en.jpg', ['alt' => 'Сертификат англ.']), '/images/certificate-en.jpg', ['data-fancybox-group' => 'certificate'])); */?>
