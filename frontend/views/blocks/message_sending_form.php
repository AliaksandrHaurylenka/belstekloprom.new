<!--         Условие отправления формы, если она отправлена выводим сообщение-->
<?php if (Yii::$app->session->hasFlash('success')) : ?>
    <div class="alert alert-success  alert-dismissable fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <string><?= Yii::$app->session->getFlash('success'); ?></string>
    </div>
<?php endif; ?>

<!--             иначе выводим сообщение об ошибке-->
<?php if (Yii::$app->session->hasFlash('error')): ?>
    <div class="alert alert-danger alert-dismissable fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <string><?= Yii::$app->session->getFlash('error'); ?></string>
    </div>
<?php endif; ?>