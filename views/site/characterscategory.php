<?php

/* @var $this yii\web\View */

$this->title = 'Трансформеры';
?>
<link rel="stylesheet" href="/web/css/style.css">
<link rel="stylesheet" href="/web/css/media.css">

<div class="block_list_of_characters">
<div class="container">
    <div class="block_characters">
        <?php foreach ($categoryis as $categoryis):?>
        <a class="tabs" href="<?= \yii\helpers\Url::to(['site/characterscategory', 'id'=>$categoryis->id])?>"><?=$categoryis->name ?></a>
        <?php endforeach;?>
    </div>
</div>

<div class="list_of_characters">
    <?php foreach ($characters as $characters):?>
    <a class="name_character" href="<?= \yii\helpers\Url::to(['site/hero', 'id'=>$characters->id])?>"><?=$characters->name ?></a>
    <?php endforeach;?>
</div>
</div>