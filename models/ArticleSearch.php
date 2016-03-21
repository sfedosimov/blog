<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Article;

/**
 * ArticleSearch represents the model behind the search form about `app\models\Article`.
 */
class ArticleSearch extends Article
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['title', 'desc', 'text', 'updated_at', 'created_at', 'art_tags'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public static function getModelWithLoad() {
        $model = new static;
        $model->load(\Yii::$app->request->queryParams);

        return $model;
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Article::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => ['pageSize' => 10],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');

            return $dataProvider;
        }

        // поиск по тегам
        if (is_array($this->art_tags)) {
            $query->joinWith('tags');
            foreach($this->art_tags as $tkey => $tval)
                $query->orFilterWhere(['=', '{{%tag}}.key', $tval]);
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'updated_at' => $this->updated_at,
            'created_at' => $this->created_at,
        ]);

        $query->orFilterWhere(['like', 'title', $this->text])
            ->orFilterWhere(['like', 'desc', $this->text])
            ->orFilterWhere(['like', 'text', $this->text]);

        $query->orderBy(['updated_at' => SORT_DESC]);

        return $dataProvider;
    }
}
