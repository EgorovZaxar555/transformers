<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Characters".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $idUser
 * @property int $idCategory
 * @property string $image
 * @property string $text
 *
 * @property Category $idCategory0
 * @property User $idUser0
 */
class CharactersCreateForm extends Characters
{
   

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'idUser', 'idCategory', 'image', 'text'], 'required'],
            [['image', 'text'], 'string'],
            [['idUser', 'idCategory'], 'integer'],
            ['image', 'file', 'extensions' => 'png, jpg, jpeg, bmp', 'maxSize' => 10* 1024 * 1024],
            [['name'], 'string', 'max' => 255],
            [['idCategory'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['idCategory' => 'id']],
            [['idUser'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['idUser' => 'id']],
        ];
    }

}
