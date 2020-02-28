<?php

namespace app\models;

use Yii;
use yii\base\model;

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
    public $file;
    public function rules()
    {
        return [
           // [['id_persona'], 'required'],
            [['id_persona'], 'integer'],
            [['nombre_persona'], 'string', 'max' => 45],
            [['id_persona'], 'unique'],
            ['file', 'file', 
   'skipOnEmpty' => false,
   'uploadRequired' => 'No has seleccionado ningún archivo', //Error
   'maxSize' => 1024*1024*1, //1 MB
   'tooBig' => 'El tamaño máximo permitido es 1MB', //Error
   'minSize' => 10, //10 Bytes
   'tooSmall' => 'El tamaño mínimo permitido son 10 BYTES', //Error
   'extensions' => 'pdf',
   'wrongExtension' => 'El archivo {file} no contiene una extensión permitida {extensions}', //Error
   'maxFiles' => 4,
   'tooMany' => 'El máximo de archivos permitidos son {limit}', //Error
   ],
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
            'file' => 'Seleccionar archivos:',
        ];
    }
}
