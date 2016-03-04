<?php

    use yii\helpers\ArrayHelper;
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use skeeks\widget\chosen\Chosen;

    /* @var $this yii\web\View */
    /* @var $model app\models\Article */
    /* @var $form yii\widgets\ActiveForm */
?>

<div class="article-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'desc')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'art_tags')->widget(
        Chosen::className(), [
        //TODO сделать метод в модели
        'items'         => ArrayHelper::map(\app\models\Tag::find()->all(), 'id', 'name'),
        'disableSearch' => 2, // Search input will be disabled while there are fewer than 5 items
        'multiple'      => true,
        'placeholder'   => 'Выберите теги',
        'clientOptions' => [
            'search_contains'          => true,
            'single_backstroke_delete' => false,
        ],
    ]); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update',
            ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
