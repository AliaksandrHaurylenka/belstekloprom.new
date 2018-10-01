<?
use yii\helpers\Html;
?>
<h2>Новинки производства</h2>
<?php foreach ($firstModal as $first): ?>
  <div class="d-flex justify-content-around pt-2 carousel-item">
    <img class="d-block img-fluid img-new" src="images/bottle/<?= $first['name_2'] ?>.png"
         alt="<?= $first['name_1'] ?>"
         title="стеклянные бутылки <?= $first['type'] . '-' .
         $first['venchik'] . '-' .
         $first['volume'] . '-' .
         $first['number'] .
         ' (' . $first['name_1'] . ')'
         ?>"
        >

    <table class="table table-striped table-sm w-75 table-new">
      <thead>
      <tr>
        <th colspan="2">
          <?= Html::a(
              "$first[name_1]",//текст ссылки
              [//url ссылки
                  "site/bottle-$first[venchik_en]",
//                  'id' => $first[name_2]
              ],
              [
                //массив атрибута тэга 'a' (ссылки)
                  'class' => "pictogramm-$first[venchik_en]",
//                  'id' => "pictogramm-$first[name_2]"
              ]
          )
          ?>
        </th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td><?= Yii::t('common', 'Обозначение') ?>:</td>
        <td><?= $first['type'] . '-' . $first['venchik'] . '-' . $first['volume'] . '-' . $first['number'] ?></td>
      </tr>
      <tr>
        <td><?= Yii::t('common', 'Тип венчика') ?>:</td>
        <td><?= $first['venchik'] ?></td>
      </tr>
      <tr>
        <td><?= Yii::t('common', 'Высота') ?>:</td>
        <td><?= $first['height'];
          echo $first['dev_1'] ?> мм
        </td>
      </tr>
      <tr>
        <td><?= Yii::t('common', 'Диаметр') ?>:</td>
        <td><?= $first['diameter'];
          echo $first['dev_2'] ?> мм
        </td>
      </tr>
      <tr>
        <td><?= Yii::t('common', 'Объем') ?>:</td>
        <td><?= $first['volume'] ?> ml</td>
      </tr>
      </tbody>
    </table>
  </div>

<?php endforeach; ?>