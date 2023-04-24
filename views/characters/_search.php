<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CharactersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="characters-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'idUser') ?>

    <?= $form->field($model, 'idCategory') ?>

    <?= $form->field($model, 'image') ?>

    <?php // echo $form->field($model, 'text') ?>

    <?php // echo $form->field($model, 'imagePost') ?>

    <?php // echo $form->field($model, 'current') ?>

    <?php // echo $form->field($model, 'prev_id') ?>

    <?php // echo $form->field($model, 'next_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
