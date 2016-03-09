<?php
    use yii\bootstrap\Html;
?>
<div class="row">
    <h2><small><?= Html::a(Html::encode($model->title), ['view', 'id' => $model->id]); ?></small></h2>

    <p><?= Html::encode($model->desc); ?> <?= Html::a('Читать полностью &raquo;', ['view', 'id' => $model->id]); ?></p>

    <p><span class="color-grey">Теги:</span> <?= '<span class="label label-tags">' . implode('</span> <span class="label label-tags">',
            $model->getTags()->select('name')->asArray()->column()) . '</span>' ?></p>
</div>
