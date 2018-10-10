<?

$news =
    [
        [
            'href' => 'http://declarant.by/news/cat-e-declarant-in-a-thousand-buyer/',
            'src' => '/images/news/04.10.2018.jpg',
            'content' => '4 октября 2018 г. в стенах РУП «Белтаможсервис» в Минске состоялось чествование тысячного клиента, заключившего договор на приобретение разработанного предприятием коробочного программного продукта «е-Декларант».'
        ],



    ];

?>



<div class="news-materials mb-3">
  <h2><?= Yii::t('common', 'О нас в интернете') ?></h2>
  <hr>

    <div class="row card-group">
      <? foreach($news as $n): ?>
        <div class="col-6 col-sm-4 col-md-3 mb-2">
          <div class="card">
            <a href="<?= $n['href']; ?>">
              <img class="card-img-top" src="<?= $n['src']; ?>" alt="">
            </a>
            <div class="card-footer">
              <p class="news-text">
                <a href="<?= $n['href']; ?>">
                  <?= getContentNews($n['content']); ?>
                </a>
              </p>
            </div>
          </div>
        </div>
      <? endforeach; ?>
    </div>
</div>