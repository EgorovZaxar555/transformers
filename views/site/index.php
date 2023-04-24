<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\Modal;
$this->title = 'Трансформеры';

?>
<link rel="stylesheet" href="/web/css/style.css">



<div class="site-index">
<!-- Слайдер -->
<div class="slider middle">
<div class="slides">
    <input type="radio" name="r" id="r1" checked>
    <input type="radio" name="r" id="r2" >
    <input type="radio" name="r" id="r3" >
    <input type="radio" name="r" id="r4" >

    <div class="slide s1"><img src="/web/images/slide1.jpg" alt=""></div>
    <div class="slide"><img src="/web/images/slide2.jpg" alt=""></div>
    <div class="slide"><img src="/web/images/slide3.jpg" alt=""></div>
</div>
<div class="navigation">
    <label for="r1" class="bar"></label>
    <label for="r2" class="bar"></label>
    <label for="r3" class="bar"></label>
</div>
</div>



<!-- Блок с музыкой -->
<div class="music__tytle">
    <p id="music" class="subtitle _anime-items _animal-no-hide">Музыка</p>
    <div class="image_link _anime-items  _animal-no-hide">
      <img src="/web/images/line1.png" alt="">
    </div>
  </div>

  <div class="container">
    <div class="player-block">
    <?php foreach($musics as $musics):?>
      <div class="player_image"><a href="<?= \yii\helpers\Url::to(['/site/music', 'id'=>$musics->id])?>"><img src="/web/images/<?=$musics->imagePost?>" alt=""></a></div>
      <?php endforeach;?>
    </div>
  </div>





<!-- Блок с персонажами -->
<div class="characters" id="characters">
<div class="music__tytle">
    <p id="music" class="subtitle _anime-items _animal-no-hide">Персонажи</p>
    <div class="image_link _anime-items  _animal-no-hide">
      <img src="/web/images/line1.png" alt="">
    </div>
</div>
  <div class="characters__block">
    <div class="gallery">
      <?php foreach($characters as $characters):?>
      <a href="<?= \yii\helpers\Url::to(['site/hero', 'id'=>$characters->id])?>">
        <div class="grid-item">
          <div class="grid-item__inner">
            <img src="/web/images/characters/<?= $characters->imagePost?>" alt="" class="grid-item__img">
            <div class="grid-item__title">
              <span><?= $characters->name?></span>
            </div>
          </div>
        </div>
      </a>
      <?php endforeach;?>
    </div>
  </div>
</div>
<!-- Конец блока с персонажами -->
</div>



<div class="forma _anime-items _animal-no-hide">
      <form action="#" id="podp">
        <p class="form__title">Подписаться на обновления</p>
        <div class="form">
          <input type="email" placeholder="Эл.почта" required="" class="some-input">
          <button><img src="/web/images/кнопка2.png" alt=""></button>
        </div>
      </form>
    </div>






    
<script src="/web/js/script.js"></script>

