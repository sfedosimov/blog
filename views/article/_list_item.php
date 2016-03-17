<?php
    use yii\bootstrap\Html;
?>
    <h2><?= Html::a(Html::encode($model->title), ['view', 'id' => $model->id, 'key' => $model->key]); ?></h2>

    <div class="date-publish color-grey"><?= Yii::$app->formatter->asDate($model->created_at) ?></div>

    <div class="description">
        <?= $model->desc ?>

    </div>

    <div class="item-footer">
        <div class="reed">
            <?= Html::a('Читать полностью &raquo;', ['view', 'id' => $model->id, 'key' => $model->key], ['class' => 'btn btn-green btn-sm']); ?>
        </div>
        <div class="meta">
            <?= $this->render('_tags', ['model' => $model]) ?>
        </div>
        <div class="clearfix"></div>
    </div>