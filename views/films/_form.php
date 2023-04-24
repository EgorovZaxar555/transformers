<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Films */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="films-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'imagePost')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'imagePoster')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'imageBlock')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'imageFilm')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'idGalery')->textInput() ?>

    <?= $form->field($model, 'imageGalery')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
