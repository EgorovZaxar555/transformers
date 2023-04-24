<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use app\models\Characters;

$this->title = 'Трансформеры';
?>
<link rel="stylesheet" href="/web/css/style.css">
<link rel="stylesheet" href="/web/css/media.css">

<div class="hero">
<div class="container">

    <div class="row">
        <div class="col-lg-4 col-sm-5 col-lg-push-8">
            <div class="image_article_post order-md-3 order-1"><img src="/web/images/characters/<?=$characters->image?>" alt=""></div>
        </div>

        <div class="col-lg-4 col-sm-12 ">
            <h2><?=$characters->name?></h2>
            <img src="/images/line5.png" alt="" width="100%">
            <p><?=$characters->text?></p>
        </div>
       
        <div class="col-lg-4 col-sm-12 col-lg-pull-7">
            <div class="post_next_prev row">
                <div class="categ" id="temn">
                    <a href="<?=\yii\helpers\Url::to(['/site/hero', 'id' => $characters->getPrev()->id])?>">
                        <div class="next_prev"><img src="/web/images/characters/next_prev/<?=$characters->getPrev()->current?>" alt=""></div>
                        <div class="darkness"></div>
                        <h3><?=$characters->getPrev()->name?></h3>
                    </a>
                </div>
                <div class="categ">
                    <a href="">
                        <div class="next_prev"><img src="/web/images/characters/next_prev/<?=$characters->current?>" alt=""></div>
                        <div class="darkness"></div>
                        <h3><?=$characters->name?></h3>
                    </a>
                </div>
                <div class="categ">
                    <a href="<?=\yii\helpers\Url::to(['/site/hero', 'id' => $characters->getNext()->id])?>">
                        <div class="next_prev"><img src="/web/images/characters/next_prev/<?=$characters->getNext()->current?>" alt=""></div>
                        <div class="darkness"></div>
                        <h3><?=$characters->getNext()->name?></h3>
                    </a>
                    
                </div>
            </div>
        </div>
    </div>
</div>
</div>
