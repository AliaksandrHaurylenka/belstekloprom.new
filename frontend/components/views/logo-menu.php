<!-- Логотип, меню -->
<div class="d-flex flex-column col-md-3 hidden-sm-down">
  <div class="logo"><a href="/"><img src="/images/logo.jpg" alt="Логотип"></a></div>
  <nav class="main_menu"><!--h-100 высота 100%-->
    <?php
    echo yii\widgets\Menu::widget([
      'items' =>
        [
	        ['label' => Yii::t('common', 'Главная'), 'url' => ['site/index']],
	        ['label' => Yii::t('common', 'О предприятии'), 'url' => ['site/page', 'view' => 'enterprise']],
          [
	          'label' => Yii::t('common', 'Продукция'),
            'options' =>
                [
                  'class' => 'nav-item dropdown',
                  //'id' => 'myDropdown'
                ],//атрибуты выпадающего меню
            'items' =>
              [
	              ['label' => Yii::t('common', 'Венчик КПНв'), 'url' => ['site/bottle-kpnv']],
	              ['label' => Yii::t('common', 'Венчик КПНн'), 'url' => ['site/bottle-kpnn']],
	              ['label' => Yii::t('common', 'Венчик ВКП'), 'url' => ['site/bottle-vkp']],
	              ['label' => Yii::t('common', 'Венчик винный'), 'url' => ['site/bottle-other']],
	              ['label' => Yii::t('common', 'Архив изделий'), 'url' => ['site/bottle-archive']],
              ],
            //шаблон тэга li выпадающего меню
            'template' =>
              '<a href="#"
                  class="nav-link dropdown-toggle"
                  data-toggle="dropdown"
                  role="button"
                  aria-haspopup="true"
                  aria-expanded="false">{label}</a>',
          ],
	        ['label' => Yii::t('common', 'Галерея'), 'url' => ['site/gallery']],
	        ['label' => Yii::t('common', 'Закупки'), 'url' => ['site/page', 'view' => 'purchase']],
	        ['label' => Yii::t('common', 'Контакты'), 'url' => ['site/contact']],
        ],
      'itemOptions' => ['class' => 'nav-item'],//добавляет класс тегу li
      'linkTemplate' => '<a href="{url}" class="nav-link">{label}</a>',//шаблон для тега 'a', т.е. можно добавить например класс
      'options' => ['class' => 'nav flex-column'],//класс тега ul
      'submenuTemplate' => "\n<ul class='dropdown-menu main_menu'>\n{items}\n</ul>\n"//шаблон выпадающего меню
    ]);
    ?>
  </nav>
</div>