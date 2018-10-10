<?php
use yii\helpers\Html;

use frontend\assets\PrettyPhotoAppAsset;
PrettyPhotoAppAsset::register($this);
?>

<?= Html::tag('div', Html::a(Html::img('/images/certificate-ru.jpg', ['alt' => 'Сертификат рус.']), '/images/certificate-ru.jpg', ['data-gal'=>"prettyPhoto[certificate]"])); ?>
<?= Html::tag('div', Html::a(Html::img('/images/politika.jpg', ['alt' => 'Политика в области качества']), '/images/politika.jpg', ['data-gal'=>"prettyPhoto[certificate]"])); ?>
<?= Html::tag('div', Html::a(Html::img('/images/declaration.jpg', ['alt' => 'Таможенная декларация']), '/images/declaration.jpg', ['data-gal'=>"prettyPhoto[certificate]"])); ?>
<?= Html::tag('div', Html::a(Html::img('/images/certificate-en.jpg', ['alt' => 'Сертификат англ.']), '/images/certificate-en.jpg', ['data-gal'=>"prettyPhoto[certificate]"])); ?>