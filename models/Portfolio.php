<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%portfolio}}".
 *
 * @property integer $id
 * @property string $title
 * @property string $desc
 * @property string $img_preview
 */
class Portfolio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%portfolio}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'desc', 'img_preview'], 'required'],
            [['desc'], 'string'],
            [['title', 'img_preview'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Название проекта',
            'desc' => 'Описание',
            'img_preview' => 'Ссылка на превью',
        ];
    }
}
