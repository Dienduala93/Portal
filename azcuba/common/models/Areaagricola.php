<?php

namespace common\models;

use Yii;
use yii\db\expression;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;
use yii\helpers\StringHelper;

/**
 * This is the model class for table "areaagricola".
 *
 * @property int $id
 * @property string $nombre
 * @property string $imagen
 * @property string $descripcion
 * @property int $tipo_id
 * @property int $created_at
 * @property int $updated_at
 *
 * @property Tipo $tipo
 */
class Areaagricola extends \yii\db\ActiveRecord
{
    public $foto;
    public $ruta = 'uploads/aa/';

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'areaagricola';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['foto', 'descripcion', 'tipo_id'],'required' ],
            [['descripcion'], 'string'],
            [['tipo_id'], 'integer'],
            [['nombre'], 'match','pattern'=>'/[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+$/'],
            [['descripcion'], 'match','pattern'=>'/[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+$/'],
            [['nombre'], 'string', 'max' => 60],
            [['imagen'], 'string', 'max' => 255],

            ['foto', 'image', 'skipOnEmpty' => false, 'extensions' => 'png,jpg',
                'maxSize' => 1024*1024*1024,
            ],
            [['tipo_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tipo::className(), 'targetAttribute' => ['tipo_id' => 'id']],
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
            'foto' => 'Foto',
            'descripcion' => 'Descripción',
            'tipo_id' => 'Tipo de Área Agrícola',
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
     * Gets query for [[Tipo]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTipo()
    {
        return $this->hasOne(Tipo::className(), ['id' => 'tipo_id']);
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
