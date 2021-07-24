<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "dpto".
 *
 * @property int $id
 * @property string $nombre
 * @property string $mision Misión Visión
 * @property string $vision
 */
class Dpto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dpto';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'mision', 'vision'], 'required'],
            [['mision', 'vision'], 'string'],
            [['nombre'], 'string', 'max' => 30],
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
           // 'nombre' => 'Nombre',
            'mision' => 'Misión',
            'vision' => 'Visión',
        ];
    }
}
