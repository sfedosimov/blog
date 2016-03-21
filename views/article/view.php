<?php

    use yii\helpers\Html;
    use yii\helpers\HtmlPurifier;

    /* @var $this yii\web\View */
    /* @var $model app\models\Article */

    $this->title = $model->title . ' | ' . \Yii::$app->name;
    $this->registerMetaTag([
        'name' => 'description',
        'content' => HtmlPurifier::process($model->desc, ['HTML.Allowed' => ''])
    ]);
?>


<div class="article-view">
    <h1 class="margin-top-0px"><?= Html::encode($model->title) ?></h1>
    <div class="date-publish color-grey"><?= Yii::$app->formatter->asDate($model->created_at) ?></div>
    <?php if (!Yii::$app->user->isGuest): ?>
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
    <?php endif ?>
    <div class="article-body">
        <p><em><?= $model->desc ?></em></p>

        <?= $model->text ?>
    </div>
    <hr>
    <div class="meta">
        <?= $this->render('_tags', ['model' => $model]) ?>
    </div>
</div>
