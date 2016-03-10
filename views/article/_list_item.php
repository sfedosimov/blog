<?php
    use yii\bootstrap\Html;
?>
<div class="row">
    <h2><?= Html::a(Html::encode($model->title), ['view', 'id' => $model->id]); ?></h2>

    <p><?= Html::encode($model->desc); ?> <?= Html::a('Читать полностью &raquo;', ['view', 'id' => $model->id]); ?></p>

    <div class="row">
        <div class="col-md-4 col-xs-12">
            <p><?= $this->render('_tags', ['model' => $model]) ?></p>
        </div>
        <div class="col-md-4 col-md-offset-4 col-xs-12">
            <p class="text-right"><?= $this->render('_date_publish', ['model' => $model]) ?></p>
        </div>
    </div>
</div>
