<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Article */

$this->title = $model->title;
?>
<div class="row">
    <p><?php echo $this->render('_search', ['model' => $smArticle]); ?></p>
</div>

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

    <p><em>[<?= Html::encode($model->desc) ?>]</em></p>

    <p><?= $model->text ?></p>

    <hr>

    <p><?= $this->render('_date_publish', ['model' => $model]) ?></p>

    <p><?= $this->render('_tags', ['model' => $model]) ?></p>
</div>
