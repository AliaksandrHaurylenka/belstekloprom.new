<div class="news-materials mb-3">
  <h2><?= Yii::t('common', 'О нас в интернете') ?></h2>
  <hr>
  <div class="row card-group">
      <? foreach($news as $n): ?>
        <div class="col-6 col-sm-4 col-md-3 mb-2">
          <div class="card">
              <img class="card-img-top"
                   src="/images/news/<?= $n['img']; ?>"
                   data-toggle="popover-x"
                   data-target="#<?= $n['id']; ?>"
                   data-placement="bottom"
                   alt=""
                   style="cursor: pointer;"
              >
            <div class="card-footer">
              <p class="news-text">
                <a href="<?= $n['link']; ?>">
                  <?= getContentNews($n['content']); ?>
                </a>
              </p>
            </div>
          </div>
        </div>
      <? endforeach; ?>
  </div>

  <? foreach($news as $c): ?>
    <div id="<?= $c['id']; ?>" class="popover popover-x popover-primary">
      <div class="arrow"></div>
      <h3 class="popover-header popover-title">
        <span class="close pull-right" data-dismiss="popover-x">&times;</span><?= $c['title']; ?>
      </h3>
      <div class="popover-body popover-content">
        <p style="font-size: 1rem;"><?= $c['content']; ?></p>
      </div>
    </div>
  <? endforeach; ?>
</div>