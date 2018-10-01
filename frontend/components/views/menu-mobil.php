<nav class="navbar navbar-toggleable-md navbar-light bg-faded hidden-md-up  menu-mobil">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
          data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
          aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="d-flex flex-row  navbar-brand">
    <a href="/" class="p-1"><img src="/images/logo.png" alt="Логотип"></a>

    <h2 class=""><?= Yii::t('common', 'БелСтеклоПром') ?></h2>
  </div>

  <div class="collapse navbar-collapse main_menu" id="navbarSupportedContent">
    <?php
    echo yii\widgets\Menu::widget([
        'items' =>
            [
                ['label' => Yii::t('common', 'Главная'), 'url' => ['site/index']],
                ['label' => Yii::t('common', 'О предприятии'), 'url' => ['site/page', 'view' => 'enterprise']],
                [
                    'label' => Yii::t('common', 'Продукция'),
                    'options' => [
                        'class' => 'nav-item dropdown',
                        //'id' => 'myDropdown'
                    ],//атрибуты выпадающего меню
                    'items' =>
                        [
                            ['label' => Yii::t('common', 'Бутылка с венчиком КПНв'), 'url' => ['site/bottle-kpnv']],
                            ['label' => Yii::t('common', 'Бутылка с венчиком КПНн'), 'url' => ['site/bottle-kpnn']],
                            ['label' => Yii::t('common', 'Бутылка с венчиком ВКП'), 'url' => ['site/bottle-vkp']],
                            ['label' => Yii::t('common', 'Бутылка винная'), 'url' => ['site/bottle-other']],
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
  </div>
</nav>