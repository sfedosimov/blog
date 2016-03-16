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
            $files = FileHelper::findFiles(Yii::getAlias('@app/web/uploads/ajax/'), ['recursive' => false]);
            $items = [];
            foreach ($files as $file) {
                $webPath = Yii::getAlias('@web/uploads/ajax/') . basename($file);
                $thumbnail = Yii::getAlias('@web/uploads/ajax/thumbnail/') . basename($file);
                $items[] = [
                    'preview' => Html::img($thumbnail, ['alt' => Html::encode(basename($file))]),
                    'url' => $webPath,
                    'delete' => Html::a(Html::tag('span', '', ['class' => 'glyphicon glyphicon-trash']),
                        'javascript:void(0);',
                        ['class' => 'post-click','data-file' => basename($file)]),
                    'date_c' => date('d.m.Y H:i:s', filemtime($file)),
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