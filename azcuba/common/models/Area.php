<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "area".
 *
 * @property int $id
 * @property string $nombre
 * @property string $descripcion
 */
class Area extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'area';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'descripcion' ], 'required'],
            [['descripcion'], 'string'],
            [['nombre'], 'string', 'max' => 60],
            [['nombre'], 'match','pattern'=>'/^[A-Za-z]+$/'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'descripcion' => 'Descripción',
        ];
    }
}
