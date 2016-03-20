<?php

    use yii\helpers\Html;
    use yii\widgets\ListView;

    /* @var $this yii\web\View */
    /* @var $dataProvider yii\data\ActiveDataProvider */

    $this->title = 'Портфолио';
    $this->registerCssFile(\Yii::getAlias('@web/css/portfolio.css'), ['depends' => ['app\assets\AppAsset']]);
?>
<div class="portfolio-list">
    <?php if (!Yii::$app->user->isGuest): ?>
        <p>
            <?= Html::a('Добавить проект', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    <?php endif ?>

    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'summary'      => '',
        'itemView'     => function ($model, $key, $index, $widget) {
            return $this->render('_preview', ['model' => $model, 'index' => $index]);
        },
    ]) ?>
</div>
