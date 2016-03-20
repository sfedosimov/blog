<?php
    use yii\bootstrap\Html;

    /* @var $model app\models\Portfolio */
    /* @var $index integer */
?>

<?= Html::a('<h2 class="name">'.$model->title.'</h2><div class="cover-wrapper"><img src="'.$model->img_preview.'" class="cover"></div>', ['view', 'id' => $model->id], ['class' => 'portfolio-list-item']) ?>

<?php if ($index > 2 && $index % 2 === 0): ?>
    <div class="separator-3"></div>
<?php endif ?>
<?php if ($index > 3 && $index % 3 === 0): ?>
    <div class="separator-3"></div>
<?php endif ?>

