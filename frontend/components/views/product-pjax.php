<?php

use yii\widgets\Pjax;
use yii\widgets\LinkPager;
use yii\data\Pagination;

$pagination = new Pagination([
    'defaultPageSize' => 1,
    'totalCount' => \common\models\Venchik::find()
        ->where(['venchik_en' => $ven_en])
        ->count(),
]);

$venchik_img = \common\models\Venchik::find()
    //->offset($pagination->offset)
    ->limit($pagination->limit)
    ->asArray()
    ->where(['venchik_en' => $ven_en])
    ->all();


?>

<?php Pjax::begin(); ?>
<div class="row no-gutters justify-content-between product-blocks">
    <!--МЕНЮ-->
        <!--меню венчики-->
        <?= LinkPager::widget(
            [
                'pagination' => $pagination,
                'options' =>
                    [
                        'class' => 'col-3 nav flex-column gr_top main_menu menu-bottle'//классы для тега ul
                    ],
                'linkOptions' =>//атрибуты для тега a: ссылок
                    [
                        'class' => 'nav-link',
                        'data' =>
                            [
                                'pjax' => true
                            ],
                    ],
                'pageCssClass' => ['class' => 'nav-item'],//классы для тега li
                'nextPageLabel' => false,//наличие порядкового переключателя вперед
                'prevPageLabel' => false,//наличие порядкового переключателя назад
            ]
        )
        ?>

        <!--меню продукция-->
        <?php /*foreach ($menuBottle as $menu): */?><!--
            <li id="<?/*= $menu[name_2] */?>" class="nav-item">
                <a class="nav-link" href="#">
                    <?php
/*                    echo $menu[type].
                        '-'.$menu[venchik].
                        '-'.$menu[volume].
                        '-'.$menu[number].
                        '-'.' ('.$menu[name_1].')';
                    */?>
                </a>
            </li>
        --><?php /*endforeach */?>



    <!--ФОТО-->
    <div class="col-9 product">

        <!--фото венчики-->
        <?php foreach($venchik_img as $img):  ?>
            <div class="info corona" id="<?= $img[venchik_id_for_code]; ?>-info" >
                <img src="images/bottle/<?= $img[img_1] ?>"
                     alt="Чертеж венчика <?= $img[venchik_ru] ?>"
                     title="Венчик <?= $img[venchik_ru] ?>">
                <img src="images/bottle/<?= $img[img] ?>"
                     alt="Венчик <?= $img[venchik_ru] ?>"
                     title="Венчик <?=  $img[venchik_ru]?>">
            </div>
        <?php endforeach ?>

        <!--фото продукция-->
        <!--<div class="d-flex justify-content-around product-info" id="krinitsa-info">
            <div class="d-flex justify-content-between product-photo">
                <img src="images/bottle/krinitsa_1.png" class="p-3" title="Стеклотара чертеж X-ВКП-1-500-4 (Криница)" alt="Криница">
                <img src="images/bottle/krinitsa.png" class="p-3" title="Стеклянная бутылка X-ВКП-1-500-4 (Криница)" alt="Криница">
            </div>

            <table class="table table-striped table-sm w-50">
                <thead>
                <tr>
                    <th colspan="2">DESANT wine</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Обозначение:</th>
                    <td>X-В-28-1-500-36</td>
                </tr>
                <tr>
                    <td>Тип венчика:</th>
                    <td>В-28-1</td>
                </tr>
                <tr>
                    <td>Высота:</th>
                    <td>262.5±2 мм</td>
                </tr>
                <tr>
                    <td>Диаметр:</th>
                    <td>68.3±1.4 мм</td>
                </tr>
                <tr>
                    <td>Объем:</th>
                    <td>500 ml</td>
                </tr>
                </tbody>
            </table>
        </div>-->
    </div><!--<div class="col-9 product">-->
</div><!--<div class="row no-gutters justify-content-between">-->
<?php Pjax::end(); ?>
