<?php
    use dosamigos\fileupload\FileUploadUI;
    use yii\bootstrap\Html;
    use yii\helpers\FileHelper;
    use yii\helpers\Url;

    /* @var $this yii\web\View */
    $this->title = 'Загрузка';
    $this->registerJs('
        $(".post-click").on("click", function() {
            $.post("' . Url::to(['upload/image-delete']) . '?name=" + $(this).data("file"), function(data) {
                location.reload();
            });
        });
    ', \yii\web\View::POS_READY);
?>

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


<?php
    $files = FileHelper::findFiles(Yii::getAlias('@app/web/uploads/ajax/'));
    if ($files): ?>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Превью</th>
                <th>Ссылка</th>
                <th>Удалить</th>
            </tr>
            </thead>
            <tbody>

            <?php
                foreach ($files as $file): ?>
                    <?php $web_path = str_replace(Yii::getAlias('@webroot'), Yii::getAlias('@web'), $file); ?>
                    <tr>
                        <td><?= Html::img($web_path,
                                ['alt' => Html::encode(basename($file)), 'width' => 200]); ?></td>
                        <td><?= Html::encode($web_path)?></td>
                        <td><?= Html::a(Html::tag('span', '', ['class' => 'glyphicon glyphicon-trash']),
                                'javascript:void(0);',
                                ['class' => 'post-click', 'data-file' => basename($file)]) ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    <?php else: ?>
        Ничего не найдено
    <?php endif ?>
