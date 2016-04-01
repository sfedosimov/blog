<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%article_tag}}".
 *
 * @property integer $id
 * @property integer $article_id
 * @property integer $tag_id
 *
 * @property Tag $tag
 * @property Article $article
 */
class ArticleTag extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%article_tag}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['article_id', 'tag_id'], 'required'],
            [['article_id', 'tag_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'article_id' => 'Article ID',
            'tag_id' => 'Tag ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTag()
    {
        return $this->hasOne(Tag::className(), ['id' => 'tag_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArticle()
    {
        return $this->hasOne(Article::className(), ['id' => 'article_id']);
    }

    /**
     * @inheritdoc
     * @return ArticleTagQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ArticleTagQuery(get_called_class());
    }
}
