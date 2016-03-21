<?php
    namespace app\models;

    use Yii;
    use yii\base\Model;
    use yii\data\ArrayDataProvider;
    use yii\helpers\FileHelper;
    use yii\helpers\Html;
    use yii\web\UploadedFile;

    class Upload extends Model
    {
        /**
         * @var UploadedFile
         */
        public $imageFile;

        public function getFilesDP() {
            $files = FileHelper::findFiles(Yii::getAlias('@app/web/uploads/img/'), ['recursive' => false]);
            $items = [];
            foreach ($files as $file) {
                $webPath = Yii::getAlias('@web/uploads/img/') . basename($file);
                $thumbnail = Yii::getAlias('@web/uploads/img/thumbnail/') . basename($file);
                list($width, $height) = getimagesize($file);
                $items[] = [
                    'preview' => Html::img($thumbnail, ['alt' => Html::encode(basename($file))]),
                    'url' => $webPath,
                    'delete' => Html::a(Html::tag('span', '', ['class' => 'glyphicon glyphicon-trash']),
                        'javascript:void(0);',
                        ['class' => 'post-click','data-file' => basename($file)]),
                    'date_c' => date('d.m.Y H:i:s', filemtime($file)),
                    'size' => $width . 'x' . $height . '<br>'
                        . ((($size = round(filesize($file) / 1024)) > 1024) ? round($size / 1024, 2) . ' Мб' : ($size . ' Кб')),
                ];
            }

            $dp = new ArrayDataProvider([
                'allModels' => $items,
                'sort' => [
                    'attributes' => ['url', 'date_c'],
                ],
                'pagination' => [
                    'pageSize' => 20,
                ],
            ]);

            return $dp;
        }
    }