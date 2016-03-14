<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ArticleSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="article-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index', 'search_type' => 'search', 'str' => 'articles'],
        'method' => 'get',
    ]); ?>

    <div class="input-group">
        <input type="text" value="<?= $model->text ?>" class="form-control" name="q" id="articlesearch-text" title="">
        <span class="input-group-btn">
          <button class="btn btn-green" type="submit">Искать!</button>
        </span>
    </div>

    <?php ActiveForm::end(); ?>

</div>
