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

        public function search($q) {

            $opt = ['recursive' => false];

            if (!is_null($q) && !empty($q)) {
                $opt['only'] = [$q];
            }

            $files = FileHelper::findFiles(Yii::getAlias('@app/web/uploads/img/'), $opt);
            $items = [];
            foreach ($files as $file) {
                $webPath = Yii::getAlias('@web/uploads/img/') . basename($file);
                $thumbnail = Yii::getAlias('@web/uploads/img/thumbnail/') . basename($file);
                list($width, $height) = getimagesize($file);
                $items[] = [
                    'preview' => Html::a(Html::img($thumbnail, ['alt' => Html::encode(basename($file))]), $webPath, ['target' => '_blank']),
                    'url' => $webPath,
                    'delete' => Html::a(Html::tag('span', '', ['class' => 'glyphicon glyphicon-trash']),
                        'javascript:void(0);',
                        ['class' => 'post-click','data-file' => basename($file)]),
                    'date_c' => date('d.m.Y H:i:s', filemtime($file)),
                    'size' => $width . 'x' . $height . '<br>'
                        . ((($size = round(filesize($file) / 1024)) > 1024) ? round($size / 1024, 2) . ' Мб' : ($size . ' Кб')),
                ];
            }

            uasort($items, function($a, $b) {
                return strcmp(strtotime($b["date_c"]), strtotime($a["date_c"]));
            });

            $dp = new ArrayDataProvider([
                'allModels' => $items,
                'sort' => [
                    'attributes' => ['date_c', 'url'],
                ],
                'pagination' => [
                    'pageSize' => 20,
                ],
            ]);

            return $dp;
        }
    }