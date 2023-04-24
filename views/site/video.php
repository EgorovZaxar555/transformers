<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = 'Трансформеры';
?>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">
<link rel="stylesheet" href="/css/style.css">


<div class="video_content">
<div class="gallery-list">
        <a href="https://drive2.xsquallit.ru/img/409.jpeg" class="gallery-item">
          <div class="gallery-item-hover">Посмотреть</div>
          <img src="https://drive2.xsquallit.ru/img/409.jpeg" alt="alt">
        </a>
        <a href="/img/liberty.jpg" class="gallery-item">
          <div class="gallery-item-hover">Посмотреть</div>
          <img src="/img/liberty.jpg" alt="alt">
        </a>
        <a href="/img/lighthouse.jpg" class="gallery-item">
          <div class="gallery-item-hover">Посмотреть</div>
          <img src="/img/lighthouse.jpg" alt="alt">
        </a>
        <a href="/img/minimalismo.jpg" class="gallery-item">
          <div class="gallery-item-hover">Посмотреть</div>
          <img src="/img/minimalismo.jpg" alt="alt">
        </a>
        <a href="/img/salad.jpg" class="gallery-item">
          <div class="gallery-item-hover">Посмотреть</div>
          <img src="/img/salad.jpg" alt="alt">
        </a>
        <a href="/img/shutterbug.jpg" class="gallery-item">
          <div class="gallery-item-hover">Посмотреть</div>
          <img src="/img/shutterbug.jpg" alt="alt">
        </a>
        <a href="/img/skaterboy.jpg" class="gallery-item">
          <div class="gallery-item-hover">Посмотреть</div>
          <img src="/img/skaterboy.jpg" alt="alt">
        </a>
        <a href="/img/woodcraft.jpg" class="gallery-item">
          <div class="gallery-item-hover">Посмотреть</div>
          <img src="/img/woodcraft.jpg" alt="alt">
        </a>
      </div>
</div>









<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
  <script>
    $(".gallery-list").magnificPopup({
      delegate: "a",
      type: "image",
      gallery: {
        enabled: true
      }
    });
  </script>