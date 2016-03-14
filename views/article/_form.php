<?php

    use yii\helpers\ArrayHelper;
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use skeeks\widget\chosen\Chosen;
    use dosamigos\ckeditor\CKEditor;

    /* @var $this yii\web\View */
    /* @var $model app\models\Article */
    /* @var $form yii\widgets\ActiveForm */
?>

<div class="article-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'key')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'desc')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'standart',
    ]) ?>

    <?= $form->field($model, 'text')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'full',
        'clientOptions' => ['extraPlugins' => 'codesnippet']
    ]) ?>

    <?= $form->field($model, 'art_tags')->widget(
        Chosen::className(), [
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
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить',
            ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
