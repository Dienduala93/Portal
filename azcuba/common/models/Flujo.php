<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "flujo".
 *
 * @property int $id
 * @property string $nombre
 * @property string $imagen
 * @property string $descripcion
 * @property resource $tipoFlujo
 * @property int $created_at
 * @property int $updated_at
 */
class Flujo extends \yii\db\ActiveRecord
{
    public $foto;
    public $ruta = 'uploads/flujo/';
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'flujo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['imagen','descripcion','tipoFlujo'], 'required'],
            [['descripcion'], 'string'],
            [['nombre','tipoFlujo'], 'string', 'max' => 60],
           // [['nombre'], 'unique'],
            [['nombre'], 'match','pattern'=>'/[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+$/'],
            [['imagen'], 'string', 'max' => 255],
            [['descripcion'], 'match','pattern'=>'/[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+$/'],
            ['foto', 'image', 'skipOnEmpty' => false, 'extensions' => 'png,jpg',
                'maxSize' => 1024*1024*1024],
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
            'imagen' => 'Imagen',
            'descripcion' => 'Descripción',
            'tipoFlujo' => 'Tipo Flujo',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
