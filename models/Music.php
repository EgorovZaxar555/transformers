<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "music".
 *
 * @property int $id
 * @property string $title
 * @property string $playmusic
 * @property int $idFilm
 * @property string $imagePost
 *
 * @property Films $idFilm0
 */
class Music extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'music';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'playmusic', 'idFilm', 'imagePost'], 'required'],
            [['playmusic', 'imagePost'], 'string'],
            [['idFilm'], 'integer'],
            [['title'], 'string', 'max' => 255],
            [['idFilm'], 'exist', 'skipOnError' => true, 'targetClass' => Films::className(), 'targetAttribute' => ['idFilm' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'playmusic' => 'Playmusic',
            'idFilm' => 'Id Film',
            'imagePost' => 'Image Post',
        ];
    }

    /**
     * Gets query for [[IdFilm0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdFilm0()
    {
        return $this->hasOne(Films::className(), ['id' => 'idFilm']);
    }
}
