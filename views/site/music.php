<?php
use yii\helpers\Html;
?>
<link rel="stylesheet" href="/web/css/style.css">



<div class="container music">
<div class="music-block row">
  <div class="play_img col-md-4"><img src="/web/images/<?=$musics->imagePost?>" alt=""></div>
  <div class="songs-music col-md-8">
    <h3 class="play_title">/ Саундтреки из <?=$musics->idFilm->title?> /</h3>
    <div class="listofsongs">
      <?php foreach($players as $players):?>
      <div class="song">   
        <h4>/ <?=$players->title?> /</h4>  
        <div class="audio-player">
          <audio preload="none" src="/web/media/<?=$players->playmusic?>" controls></audio>
      
        </div>
        <a class="download" href="/web/media/<?=$players->playmusic?>" download="">Скачать</a>
      </div>
      <?php endforeach;?>
    </div>
  </div>
</div>
</div>

<script src="/js/music.js"></script>