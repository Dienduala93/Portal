<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "fabricacion".
 *
 * @property int $id
 * @property string $nombre
 * @property string $imagen
 * @property string $descripcion
 * @property int $created_at
 * @property int $updated_at
 */
class Fabricacion extends \yii\db\ActiveRecord
{
    public $foto;
    public $ruta = 'uploads/fabricacion/';
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fabricacion';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['imagen', 'descripcion', 'tipoFabricacion'], 'required'],
            [['descripcion'], 'string'],
            [['nombre'], 'string', 'max' => 25],
            [['imagen'], 'string', 'max' => 255],
            [['nombre'], 'match','pattern'=>'/[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+$/'],
            [['descripcion'], 'match','pattern'=>'/[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+$/'],
            [['tipoFabricacion'], 'string', 'max' => 60],
         ['foto', 'image', 'skipOnEmpty' => false, 'extensions' => 'png,jpg',
                'maxSize' => 1024*1024*1024]
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
            //[['nombre'], 'unique'],
            //[['nombre'], 'match','pattern'=>'/^[A-Za-z]+$/'],
            'tipoFabricacion' => 'Tipo Fabricacion',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
