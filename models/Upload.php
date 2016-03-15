<?php
    namespace app\models;

    use yii\base\Model;
    use yii\web\UploadedFile;

    class Upload extends Model
    {
        /**
         * @var UploadedFile
         */
        public $imageFile;
    }