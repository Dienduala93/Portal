<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tipo".
 *
 * @property int $id
 * @property string $nombre
 *
 * @property Areaagricola[] $areaagricolas
 */
class Tipo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tipo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
            [['nombre'], 'string', 'max' => 100],
           // [['nombre'], 'unique'],
            [['nombre'], 'match','pattern'=>'/[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+$/'],
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
        ];
    }

    /**
     * Gets query for [[Areaagricolas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAreaagricolas()
    {
        return $this->hasMany(Areaagricola::className(), ['tipo_id' => 'id']);
    }
}
