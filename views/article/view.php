<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Article */

$this->title = $model->title;
?>
<div class="article-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы действительно хотите удалить статью?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <p style="font-style: italic;">[<?= Html::encode($model->desc) ?>]</p>

    <p><?= $model->text ?></p>

    <p><span class="color-grey">Дата публикации:</span> <?= Html::encode($model->created_at) ?></p>
    <p><span class="color-grey">Теги:</span> <?= '<span class="label label-tags">' . implode('</span> <span class="label label-tags">',
            $model->getTags()->select('name')->asArray()->column()) . '</span>' ?></p>

</div>
