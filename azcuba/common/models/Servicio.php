<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "servicio".
 *
 * @property int $id
 * @property string $nombre
 * @property string $imagen
 * @property string $descripcion
 * @property int $created_at
 * @property int $updated_at
 */
class Servicio extends \yii\db\ActiveRecord
{
    public $foto;
    public $ruta = 'uploads/servicio/';
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'servicio';
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
           // [['nombre'], 'unique'],
            [['nombre'], 'match','pattern'=>'/[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+$/'],
            [['descripcion'], 'match','pattern'=>'/[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+$/'],
            [['imagen'], 'string', 'max' => 255],
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
