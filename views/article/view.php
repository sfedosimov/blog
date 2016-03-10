<?php

    use yii\helpers\Html;

    /* @var $this yii\web\View */
    /* @var $model app\models\Article */

    $this->title = $model->title;
?>


<div class="article-view">
    <h1 class="margin-top-0px"><?= Html::encode($this->title) ?></h1>
    <p class="date_publish color-grey"><?= Yii::$app->formatter->asDate($model->created_at) ?></p>
    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data'  => [
                'confirm' => 'Вы действительно хотите удалить статью?',
                'method'  => 'post',
            ],
        ]) ?>
    </p>

    <p><em>[<?= Html::encode($model->desc) ?>]</em></p>

    <p><?= $model->text ?></p>

    <hr>

    <p><?= $this->render('_tags', ['model' => $model]) ?></p>
</div>
