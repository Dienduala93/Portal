<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Flujo;

/**
 * FlujoSearch represents the model behind the search form of `common\models\Flujo`.
 */
class FlujoSearch extends Flujo
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['nombre', 'imagen', 'descripcion', 'tipoFlujo'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
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
        $query = Flujo::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'imagen', $this->imagen])
            ->andFilterWhere(['like', 'descripcion', $this->descripcion])
            ->andFilterWhere(['like', 'tipoFlujo', $this->tipoFlujo]);

        return $dataProvider;
    }

    /**
     * Creates data provider instance with search query applied for centro
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function searchCentro($params)
    {
        $query = Flujo::find()->where(['tipoFlujo' => 'centro']);
        ;

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'imagen', $this->imagen])
            ->andFilterWhere(['like', 'descripcion', $this->descripcion])
            ->andFilterWhere(['like', 'tipoFlujo', $this->tipoFlujo]);

        return $dataProvider;
    }

    /**
     * Creates data provider instance with search query applied for Basculador
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function searchBasculador($params)
    {
        $query = Flujo::find()->where(['tipoFlujo' => 'basculador']);
        ;

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'imagen', $this->imagen])
            ->andFilterWhere(['like', 'descripcion', $this->descripcion])
            ->andFilterWhere(['like', 'tipoFlujo', $this->tipoFlujo]);

        return $dataProvider;
    }

    /**
     * Creates data provider instance with search query applied for Derivados
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function searchDerivados($params)
    {
        $query = Flujo::find()->where(['tipoFlujo' => 'derivados']);
        ;

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'imagen', $this->imagen])
            ->andFilterWhere(['like', 'descripcion', $this->descripcion])
            ->andFilterWhere(['like', 'tipoFlujo', $this->tipoFlujo]);

        return $dataProvider;
    }


    /**
     * Creates data provider instance with search query applied for Generacion
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function searchGeneracion($params)
    {
        $query = Flujo::find()->where(['tipoFlujo' => 'vapor']);
        ;

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'imagen', $this->imagen])
            ->andFilterWhere(['like', 'descripcion', $this->descripcion])
            ->andFilterWhere(['like', 'tipoFlujo', $this->tipoFlujo]);

        return $dataProvider;
    }

    /**
     * Creates data provider instance with search query applied for Laboratorio
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function searchLaboratorio($params)
    {
        $query = Flujo::find()->where(['tipoFlujo' => 'laboratorio']);
        ;

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'imagen', $this->imagen])
            ->andFilterWhere(['like', 'descripcion', $this->descripcion])
            ->andFilterWhere(['like', 'tipoFlujo', $this->tipoFlujo]);

        return $dataProvider;
    }


    /**
     * Creates data provider instance with search query applied for Planta
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function searchPlanta($params)
    {
        $query = Flujo::find()->where(['tipoFlujo' => 'planta']);
        ;

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'imagen', $this->imagen])
            ->andFilterWhere(['like', 'descripcion', $this->descripcion])
            ->andFilterWhere(['like', 'tipoFlujo', $this->tipoFlujo]);

        return $dataProvider;
    }

}



