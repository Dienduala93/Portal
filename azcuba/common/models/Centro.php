<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "centro".
 *
 * @property int $id
 * @property string $nombre
 * @property string $mision
 * @property string $vision
 */
class Centro extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'centro';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'mision', 'vision'], 'required'],
            [['mision', 'vision'], 'string'],
            [['nombre'], 'string', 'max' => 25],
            [['nombre'], 'match','pattern'=>'/[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+$/'],
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
            'nombre' => 'Nombre',
            'mision' => 'Misión',
            'vision' => 'Visión',
        ];
    }
}
