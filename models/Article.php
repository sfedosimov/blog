<?php

    namespace app\models;

    use Yii;
    use yii\behaviors\TimestampBehavior;
    use yii\db\ActiveRecord;
    use yii\db\Expression;

    /**
     * This is the model class for table "{{%article}}".
     *
     * @property integer      $id
     * @property string       $title
     * @property string       $desc
     * @property string       $text
     * @property array        $art_tags
     * @property string       $updated_at
     * @property string       $created_at
     *
     * @property ArticleTag[] $articleTags
     */
    class Article extends ActiveRecord
    {
        public $art_tags;

        public function behaviors()
        {
            return [
                'timestamp' => [
                    'class' => TimestampBehavior::className(),
                    'attributes' => [
                        ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                        ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                    ],
                    'value' => new Expression('NOW()'),
                ],
            ];
        }

        /**
         * @inheritdoc
         */
        public static function tableName()
        {
            return '{{%article}}';
        }

        /**
         * @inheritdoc
         */
        public function rules()
        {
            return [
                [['title', 'text', 'desc', 'art_tags'], 'required'],
                [['text', 'desc'], 'string'],
                [['updated_at', 'created_at', 'art_tags'], 'safe'],
                [['title'], 'string', 'max' => 255],
            ];
        }

        /**
         * @inheritdoc
         */
        public function attributeLabels()
        {
            return [
                'id'         => 'ID',
                'title'      => 'Title',
                'desc'       => 'Desc',
                'text'       => 'Text',
                'art_tags'   => 'Art Tags',
                'updated_at' => 'Updated At',
                'created_at' => 'Created At',
            ];
        }

        /**
         * @return \yii\db\ActiveQuery
         */
        public function getArticleTags()
        {
            return $this->hasMany(ArticleTag::className(), ['article_id' => 'id']);
        }

        public function getTags() {
            return $this->hasMany(Tag::className(), ['id' => 'tag_id'])->via('articleTags');
        }

        /**
         * @inheritdoc
         * @return ArticleQuery the active query used by this AR class.
         */
        public static function find()
        {
            return new ArticleQuery(get_called_class());
        }
    }
