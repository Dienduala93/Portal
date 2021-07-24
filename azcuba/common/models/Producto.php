<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "producto".
 *
 * @property int $id
 * @property string $nombre
 * @property string $imagen
 * @property string $descripcion
 * @property int $created_at
 * @property int $updated_at
 */
class Producto extends \yii\db\ActiveRecord
{
    public $foto;
    public $ruta = 'uploads/producto/';
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'producto';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['imagen', 'descripcion'], 'required'],
            [['descripcion'], 'string'],
            [['nombre'], 'string', 'max' => 25],
            //[['nombre'], 'unique'],
            [['nombre'], 'match','pattern'=>'/[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+$/'],
            [['descripcion'], 'match','pattern'=>'/[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+$/'],
            [['imagen'], 'string', 'max' => 255],
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
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
