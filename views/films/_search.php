<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FilmsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="films-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'imagePost') ?>

    <?= $form->field($model, 'imagePoster') ?>

    <?= $form->field($model, 'imageBlock') ?>

    <?php // echo $form->field($model, 'text') ?>

    <?php // echo $form->field($model, 'imageFilm') ?>

    <?php // echo $form->field($model, 'idGalery') ?>

    <?php // echo $form->field($model, 'imageGalery') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
