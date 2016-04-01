<?php

namespace app\models;

use Yii;
use yii\data\ActiveDataProvider;

/**
 * This is the model class for table "{{%tag}}".
 *
 * @property integer $id
 * @property string $key
 * @property string $name
 *
 * @property ArticleTag[] $articleTags
 */
class Tag extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%tag}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'key'], 'required'],
            [['name', 'key'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id'   => 'ID',
            'key'   => 'URL Ключ',
            'name' => 'Имя',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArticleTags()
    {
        return $this->hasMany(ArticleTag::className(), ['tag_id' => 'id']);
    }

    public function getArticles() {
        return $this->hasMany(Article::className(), ['id' => 'article_id'])->via('articleTags');
    }

    /**
     * @return ActiveDataProvider
     */
    public static function getADP() {
        return new ActiveDataProvider([
            'query' => static::find(),
            'sort'=> ['defaultOrder' => ['name' => SORT_ASC]],
            'pagination' => false
        ]);
    }
}
