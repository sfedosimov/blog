<?php
    use dosamigos\fileupload\FileUploadUI;
    use yii\grid\GridView;
    use yii\helpers\Url;

    /* @var $this yii\web\View */
    /* @var $model app\models\Upload */
    $this->title = 'Загрузка';
    $this->registerJs('
        $(".post-click").on("click", function() {
            $.post("' . Url::to(['upload/image-delete']) . '?name=" + $(this).data("file"), function(data) {
                location.reload();
            });
        });
    ', \yii\web\View::POS_READY);
?>
<div class="upload-list">
    <?= FileUploadUI::widget([
        'model'         => $model,
        'attribute'     => 'imageFile',
        'url'           => ['upload/image-upload'], // your url, this is just for demo purposes,
        'gallery'       => false,
        'fieldOptions'  => [
            'accept' => 'image/*'
        ],
        'clientOptions' => [
            'maxFileSize' => 2000000
        ],
    ]); ?>

    <h2>Загруженные файлы</h2>
    <?= GridView::widget([
        'dataProvider' => $model->getFilesDP(),
        'columns'      => [
            [
                'label'          => 'Превью',
                'attribute'      => 'preview',
                'format'         => 'html',
                'contentOptions' => ['style' => 'width: 10%;']
            ],
            [
                'label'     => 'Ссылка',
                'attribute' => 'url',
                'format'    => 'text'
            ],
            [
                'label'     => 'Дата',
                'attribute' => 'date_c',
                'format'    => ['date', 'php:d F Y']
            ],
            [
                'label'     => 'Действие',
                'attribute' => 'delete',
                'format'    => 'raw',
                'contentOptions' => ['style' => 'width: 5%;']
            ],
        ],
    ]); ?>
</div>