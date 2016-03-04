<?php

    use yii\db\ActiveQuery;
    use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Article */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="article-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'desc',
            'text:ntext',
            'updated_at',
            'created_at',
            [
                'format' => 'html',
                'label' => 'tags',
                'value' => '<span class="label label-primary">'
                    . implode('</span> <span class="label label-primary">',
                        //TODO сделать метод в модели
                        $model->getTags()->select('name')->asArray()->column()) . '</span>',
            ],
        ],
    ]) ?>

</div>
