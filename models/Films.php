<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "films".
 *
 * @property int $id
 * @property string $title
 * @property string $imagePost
 * @property string $imagePoster
 * @property string $imageBlock
 * @property string $text
 * @property string $imageFilm
 * @property int $idGalery
 * @property string $imageGalery
 *
 * @property Films $idGalery0
 * @property Films[] $films
 * @property Galery[] $galeries
 * @property Music[] $musics
 */
class Films extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'films';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'imagePost', 'imagePoster', 'imageBlock', 'text', 'imageFilm', 'idGalery', 'imageGalery'], 'required'],
            [['imagePost', 'imagePoster', 'imageBlock', 'text', 'imageFilm', 'imageGalery'], 'string'],
            [['idGalery'], 'integer'],
            [['title'], 'string', 'max' => 255],
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
            'title' => 'Title',
            'imagePost' => 'Image Post',
            'imagePoster' => 'Image Poster',
            'imageBlock' => 'Image Block',
            'text' => 'Text',
            'imageFilm' => 'Image Film',
            'idGalery' => 'Id Galery',
            'imageGalery' => 'Image Galery',
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

    /**
     * Gets query for [[Films]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFilms()
    {
        return $this->hasMany(Films::className(), ['idGalery' => 'id']);
    }

    /**
     * Gets query for [[Galeries]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGaleries()
    {
        return $this->hasMany(Galery::className(), ['idGalery' => 'id']);
    }

    /**
     * Gets query for [[Musics]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMusics()
    {
        return $this->hasMany(Music::className(), ['idFilm' => 'id']);
    }
}
