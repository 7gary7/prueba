<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "persona".
 *
 * @property int $id_persona
 * @property string|null $nombre_persona
 */
class Persona extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'persona';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
           // [['id_persona'], 'required'],
            [['id_persona'], 'integer'],
            [['nombre_persona'], 'string', 'max' => 45],
            [['id_persona'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_persona' => 'Id Persona',
            'nombre_persona' => 'Nombre Persona',
        ];
    }
}
