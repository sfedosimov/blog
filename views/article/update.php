<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Article */

$this->title = 'Редактирование: ' . $model->title;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="article-update">

    <h1><?= Html::encode($this->title)?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
