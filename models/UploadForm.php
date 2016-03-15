<?php
    namespace app\models;

    use yii\base\Model;
    use yii\web\UploadedFile;

    class UploadForm extends Model
    {
        /**
         * @var UploadedFile
         */
        public $imageFile;
    }