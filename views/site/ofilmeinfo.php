<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = 'Трансформеры';
?>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">
<link rel="stylesheet" href="/web/css/style.css">

<div class="content_film">
<div class="imageposter"><img src="/web/images/<?=$films->imagePoster?>" alt=""></div>
<div class="plot-ribbon">
    <div class="ribbon">
        <span class="ribbon3 _anime-items _animal-no-hide"></span>
        <div class="ribbon_image _anime-items _animal-no-hide">
            <img src="/web/images/<?=$films->imageBlock?>" alt="">
        </div>
    </div>
</div>
<p><?=$films->text?></p>

<details class="details_film">
    <summary class="summary_film">Скриншоты</summary>
    <div class="akkordeon-galery">
    <div class="gallery-list">
    <?php foreach($galery as $galery):?>
        <a href="/web/images/galery/<?=$galery->photo?>" class="gallery-item">
          <img src="/web/images/galery/<?=$galery->photo?>" alt="alt">
        </a>
    <?php endforeach;?> 
      </div>
    </div>
</details>
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
  <script src="/web/js/script.js"></script>