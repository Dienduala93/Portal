<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "cpa".
 *
 * @property int $id
 * @property string $mision
 * @property string $vision
 */
class Cpa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cpa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mision', 'vision'], 'required'],
            [['mision', 'vision'], 'string'],
            [['mision'], 'match','pattern'=>'/[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+$/'],
            [['vision'], 'match','pattern'=>'/[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+$/'],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'mision' => 'Misión',
            'vision' => 'Visión',
        ];
    }
}
