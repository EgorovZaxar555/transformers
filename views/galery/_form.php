<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Galery */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="galery-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'photo')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'idGalery')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
