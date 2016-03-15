<?php
    namespace app\controllers;

    use app\models\UploadForm;
    use yii\filters\AccessControl;
    use Yii;
    use yii\helpers\ArrayHelper;
    use yii\helpers\FileHelper;
    use yii\helpers\Json;
    use yii\helpers\Url;
    use yii\web\Controller;
    use yii\web\UploadedFile;

    class UploadController extends Controller
    {
        public $directory;
        public $web_directory;

        public function init()
        {
            parent::init();

            $this->directory = Yii::getAlias('@app/web/uploads/ajax/');
            $this->web_directory = Yii::getAlias('@web/uploads/ajax/');

            if (!is_dir($this->directory)) {
                mkdir($this->directory);
            }
        }

        public function behaviors()
        {
            return ArrayHelper::merge(parent::behaviors(), [
                'access' => [
                    'class' => AccessControl::className(),
                    'rules' => [
                        [
                            'allow' => true,
                            'roles' => ['@'],
                        ],
                    ]
                ]
            ]);
        }

        public function actionIndex()
        {
            $model = new UploadForm();

            return $this->render('index', ['model' => $model]);
        }

        public function actionImageUpload()
        {
            $imageFile = UploadedFile::getInstanceByName('UploadForm[imageFile]');
            // TODO: сделать thumbnailUrl (https://packagist.org/packages/imagine/imagine)
            if ($imageFile) {
                $filePath = $this->directory . $imageFile->name;
                $webPath = $this->web_directory . $imageFile->name;
                if ($imageFile->saveAs($filePath)) {
                    return Json::encode([
                        'files' => [
                            [
                                'name'         => $imageFile->name,
                                'size'         => $imageFile->size,
                                "url"          => $webPath,
                                "thumbnailUrl" => $webPath,
                                "deleteUrl"    => Url::to(['upload/image-delete', 'name' => $imageFile->name]),
                                "deleteType"   => "POST"
                            ]
                        ]
                    ]);
                }
            }
            return '';
        }

        public function actionImageDelete($name)
        {
            if (is_file($this->directory . $name)) {
                unlink($this->directory . $name);
            }
            $files = FileHelper::findFiles($this->directory);
            $output = [];
            foreach ($files as $file) {
                $path = $this->web_directory . basename($file);
                $output['files'][] = [
                    'name'         => basename($file),
                    'size'         => filesize($file),
                    "url"          => $path,
                    "thumbnailUrl" => $path,
                    "deleteUrl"    => Url::to(['upload/image-delete', 'name' => basename($file)]),
                    "deleteType"   => "POST"
                ];
            }
            return Json::encode($output);
        }
    }