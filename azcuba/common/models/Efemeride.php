<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\helpers\StringHelper;

/**
 * This is the model class for table "efemeride".
 *
 * @property int $id
 * @property string $titulo
 * @property string $fecha
 * @property string $imagen
 * @property string $descripcion
 * @property int $created_at
 * @property int $updated_at
 */
class Efemeride extends \yii\db\ActiveRecord
{

    public $foto;
    public $ruta = 'uploads/ef/';

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'efemeride';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['titulo', 'fecha', 'foto', 'descripcion'], 'required'],
            [['fecha'], 'safe'],
            [['descripcion'], 'string'],
           // [['titulo'], 'unique'],

            [['descripcion'], 'match','pattern'=>'/[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+$/'],
            [['titulo'], 'match','pattern'=>'/[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+$/'],
            [['titulo'], 'string', 'max' => 99],
            [['imagen'], 'string', 'max' => 255],
            ['foto', 'image', 'skipOnEmpty' => false, 'extensions' => 'png, jpg',
                'maxSize' => 1024*1024*1024,
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'titulo' => 'Título',
            'fecha' => 'Fecha',
            'imagen' => 'Imagen',
            'foto' => 'Foto',
            'descripcion' => 'Descripción',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * Devuelve descripción recortada.
     */
    public function getTruncado()
    {
        $palabras = 20;
        if(StringHelper::countWords($this->descripcion) > $palabras){
            return StringHelper::truncateWords($this->descripcion, $palabras);
        }
    }
}
