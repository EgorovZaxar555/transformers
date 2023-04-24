<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Characters */

$this->title = 'Create Characters';
$this->params['breadcrumbs'][] = ['label' => 'Characters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="Characters-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="Characters-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idCategory')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'text')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>


</div>
