<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "galery".
 *
 * @property int $id
 * @property string $photo
 * @property int $idGalery
 *
 * @property Films $idGalery0
 */
class Galery extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'galery';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['photo', 'idGalery'], 'required'],
            [['photo'], 'string'],
            [['idGalery'], 'integer'],
            [['idGalery'], 'exist', 'skipOnError' => true, 'targetClass' => Films::className(), 'targetAttribute' => ['idGalery' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'photo' => 'Photo',
            'idGalery' => 'Id Galery',
        ];
    }

    /**
     * Gets query for [[IdGalery0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdGalery0()
    {
        return $this->hasOne(Films::className(), ['id' => 'idGalery']);
    }
}
