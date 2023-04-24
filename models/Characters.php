<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "characters".
 *
 * @property int $id
 * @property string $name
 * @property int $idUser
 * @property int $idCategory
 * @property string $image
 * @property string $text
 * @property string $imagePost
 * @property string $current
 * @property int|null $prev_id
 * @property int|null $next_id
 *
 * @property Category $idCategory0
 * @property User $idUser0
 */
class Characters extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'characters';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'idUser', 'idCategory', 'image', 'text', 'imagePost', 'current'], 'required'],
            [['idUser', 'idCategory', 'prev_id', 'next_id'], 'integer'],
            [['image', 'text', 'imagePost', 'current'], 'string'],
            [['name'], 'string', 'max' => 255],
            [['idCategory'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['idCategory' => 'id']],
            [['idUser'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['idUser' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'idUser' => 'Id User',
            'idCategory' => 'Id Category',
            'image' => 'Image',
            'text' => 'Text',
            'imagePost' => 'Image Post',
            'current' => 'Current',
            'prev_id' => 'Prev ID',
            'next_id' => 'Next ID',
        ];
    }

    /**
     * Gets query for [[IdCategory0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdCategory0()
    {
        return $this->hasOne(Category::className(), ['id' => 'idCategory']);
    }

    /**
     * Gets query for [[IdUser0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdUser0()
    {
        return $this->hasOne(User::className(), ['id' => 'idUser']);
    }







    public function getNext() {
        $next = $this->find()->where(['>', 'id', $this->id])->one();
        return $next;
    }

    public function getPrev() {
        $prev = $this->find()->where(['<', 'id', $this->id])->orderBy('id desc')->one();
        return $prev;
    }
}
