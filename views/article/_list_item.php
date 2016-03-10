<?php
    use yii\bootstrap\Html;
?>
    <h2 class="margin-top-0px"><?= Html::a(Html::encode($model->title), ['view', 'id' => $model->id]); ?></h2>

    <p class="date_publish color-grey"><?= Yii::$app->formatter->asDate($model->created_at) ?></p>

    <p><?= Html::encode($model->desc); ?> <?= Html::a('Читать полностью &raquo;', ['view', 'id' => $model->id]); ?></p>

    <p><?= $this->render('_tags', ['model' => $model]) ?></p>
