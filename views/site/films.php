<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = 'Трансформеры';
?>
<link rel="stylesheet" href="/web/css/style.css">

<div class="container-films">
    <div class="film_poster-top">
        <img src="/web/images/film_poster-top.jpg" alt="">
    </div>
    <div class="container">
    <?php foreach ($films as $key => $films):?>
        <div class="row">
            <div class="col-md-12">
            <?php if ($key % 2 == 0): ?>
                <div class="content-film row">
                    <div class="poster_film col-md-6 _anime-items _animal-no-hide pull-left"><img src="/web/images/<?=$films->imagePost ?>" alt=""></div>
                    <div class="btn_poster_film col-md-3"><a href="<?= \yii\helpers\Url::to(['site/ofilmeinfo', 'id'=>$films->id])?>"><img src="/web/images/Group 74.png" alt=""></a></div>
                </div>
            <?php else: ?>
                <div class="content-film row">
                <div class="btn_poster_film col-md-3"><a href="<?= \yii\helpers\Url::to(['site/ofilmeinfo', 'id'=>$films->id])?>"><img src="/web/images/Group 74.png" alt=""></a></div>
                    <div class="poster_film mirror col-md-6 _anime-items _animal-no-hide pull-right"><img src="/web/images/<?=$films->imagePost ?>" alt=""></div>           
                </div>
            <?php endif ?>
            </div>
        </div>
    <?php endforeach;?>
    </div>
</div>
<script src="/web/js/script.js"></script>