<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ubp".
 *
 * @property int $id
 * @property string $mision
 * @property string $vision
 */
class Ubp extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ubp';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mision', 'vision'], 'required'],
            [['mision', 'vision'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'mision' => 'Mision',
            'vision' => 'Vision',
        ];
    }
}
