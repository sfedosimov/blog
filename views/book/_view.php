<?php
    /* @var $model app\models\Book */
    use yii\bootstrap\Html;

    /* @var $index integer */
    $title = $model->name . ' (' . $model->author . ')';
?>
<div class="book">
    <div class="cover">
        <img class="books-img" src="<?= \Yii::getAlias($model->img_url) ?>" alt="<?= $title ?>" title="<?= $title ?>">
    </div>
    <div class="description">
        <span><b><?= $model->name ?></b><br/>(<?= $model->author ?>)</span>
    </div>
    <?php
        if (!Yii::$app->user->isGuest) {
            echo Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) . ' ';
            echo Html::a('Удалить', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data'  => [
                    'confirm' => 'Вы действительно хотите удалить статью?',
                    'method'  => 'post',
                ],
            ]);
        }
    ?>
</div>
<?php if ($index > 3 && $index % 3 === 0): ?>
    <div class="separator-3"></div>
<?php endif ?>
<?php if ($index > 4 && $index % 4 === 0): ?>
    <div class="separator-4"></div>
<?php endif ?>

