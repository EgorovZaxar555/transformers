<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<link rel="stylesheet" href="/web/css/style.css">
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="category">
    <?php foreach ($category as $category): ?>
        <a href="<?= \yii\helpers\Url::to(['site/category', 'id'=>$category->id])?>"><?= $category->name?></a>
        <?php endforeach;?>
    </div>
    <div class="body-content">

        <div class="row">
            <?php foreach ($Characters as $Characters): ?>
            <div class="col-lg-4">
                <div class="image"><img src="/web/image/<?=$Characters->image?>" alt=""></div>
                <h2><?= $Characters->name?></h2>

                <p><?= $Characters->description?></p>

                <p><a class="btn btn-default" href="<?= \yii\helpers\Url::to(['site/view', 'id'=>$Characters->id])?>">Yii Documentation &raquo;</a></p>
            </div>
            <?php endforeach;?>
           
         
        </div>
       
        <?= \yii\widgets\LinkPager::widget(['pagination'=>$pages])?>
    </div>
   
</div>
