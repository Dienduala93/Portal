<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "config".
 *
 * @property int $id
 * @property string $nombre
 * @property string $qs
 * @property string $direccion
 * @property string $telefono
 * @property string $email
 * @property string $mision
 * @property string $vision
 * @property string $fabricacion
 * @property string $cdireccion
 */
class Config extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'config';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'qs', 'direccion', 'telefono', 'email', 'mision', 'vision', 'cdireccion'], 'required'],
            [['mision', 'vision', 'cdireccion'], 'string'],
            [['nombre', 'qs', 'direccion', 'telefono', 'email'], 'string', 'max' => 1500],
           // [['nombre'], 'match','pattern'=>'/^[A-Za-z]+$/'],
          //  [['nombre'], 'unique'],
            //[['qs'], 'match','pattern'=>'/^[\w\s]+$/'],
          //  [['nombre'], 'match','pattern'=>'/^[A-Za-z\s]+$/'],
          //  [['vision'], 'match','pattern'=>'/^[A-Za-z\s]+$/'],
          // [['cdireccion'], 'match','pattern'=>'/^[A-Za-z0-9\s]+$/'],
           // [['mision'], 'match','pattern'=>'/^[A-Za-z\s]+$/'],
            ['email','email'],
            ['telefono','number'],

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
            'qs' => 'Quiénes somos',
            'direccion' => 'Dirección',
            'telefono' => 'Teléfono',
            'email' => 'Email',
            'mision' => 'Misión',
            'vision' => 'Visión',
            'cdireccion' => 'Consejo Dirección',
        ];
    }
}
