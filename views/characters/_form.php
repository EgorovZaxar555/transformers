<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Characters */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="characters-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idUser')->textInput() ?>

    <?= $form->field($model, 'idCategory')->textInput() ?>

    <?= $form->field($model, 'image')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'imagePost')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'current')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'prev_id')->textInput() ?>

    <?= $form->field($model, 'next_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
