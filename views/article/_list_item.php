<?php
    use yii\bootstrap\Html;
?>
    <h2 class="margin-top-0px"><?= Html::a(Html::encode($model->title), ['view', 'id' => $model->id, 'key' => $model->key]); ?></h2>

    <div class="date_publish color-grey"><?= Yii::$app->formatter->asDate($model->created_at) ?></div>

    <div>
        <?= $model->desc ?>
    </div>

    <div style="margin-bottom: 10px;">
        <?= Html::a('Читать полностью &raquo;', ['view', 'id' => $model->id, 'key' => $model->key], ['class' => 'btn btn-green btn-sm']); ?>
    </div>

    <div><?= $this->render('_tags', ['model' => $model]) ?></div>
