<div class="news-materials mb-3">
  <h2><?= Yii::t('common', 'О нас в интернете') ?></h2>
  <hr>

    <div class="row card-group">
      <? foreach($news as $n): ?>
        <div class="col-6 col-sm-4 col-md-3 mb-2">
          <div class="card">
            <a href="<?= $n['link']; ?>">
              <img class="card-img-top" src="/images/news/<?= $n['img']; ?>" title="<?= $n['content']; ?>" alt="">
            </a>
            <div class="card-footer">
              <p class="news-text">
                <a href="<?= $n['link']; ?>" title="<?= $n['content']; ?>">
                  <?= getContentNews($n['content']); ?>
                </a>
              </p>
            </div>
          </div>
        </div>
      <? endforeach; ?>
    </div>
</div>