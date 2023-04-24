<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <link rel="stylesheet" href="/web/css/newstyle.css">
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => '<img src="/web/images/logo.png" class="img-responsive" width="100px"/>',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse',
        ],
    ]);
    $items=[];
    if(Yii::$app->user->isGuest){
        $items[] = ['label' => 'Регистрация', 'url' => ['/user/create']];
        $items[] = ['label' => 'Войти', 'url' => ['/site/login']];
    }else{
        if(Yii::$app->user->identity->admin == 1){
            $items[] = ['label' => 'Админ панель', 'url' => ['/admin']];
        }else{
            $items[] = ['label' => 'Главная', 'url' => ['/site/index']];
            $items[] = ['label' => 'Персонажи', 'url' => ['/site/characters']];
            $items[] = ['label' => 'Фильмы', 'url' => ['/site/films']];
            $items[] = ['label' => 'Видео', 'url' => ['/site/video']];
            $items[] = ['label' => 'Выйти', 'url' => ['/site/logout'], 'linkOptions' => ['data-method' => 'post']];
        }
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items'=>$items,
        // 'items' => [
        //     ['label' => 'Home', 'url' => ['/site/index']],
        //     ['label' => 'About', 'url' => ['/site/about']],
        //     ['label' => 'Contact', 'url' => ['/site/contact']],
        //     ['label' => 'Регистрация', 'url' => ['/user/create']],
        //     Yii::$app->user->isGuest ? (
        //         ['label' => 'Login', 'url' => ['/site/login']]
        //     ) : (
        //         '<li>'
        //         . Html::beginForm(['/site/logout'], 'post')
        //         . Html::submitButton(
        //             'Logout (' . Yii::$app->user->identity->login . ')',
        //             ['class' => 'btn btn-link logout']
        //         )
        //         . Html::endForm()
        //         . '</li>'
        //     )
        // ],
    ]);
    NavBar::end();
    ?>
<div class="head_image_line"><img src="/web/images/line1.png" alt=""></div>
    <div class="contaner">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>
<div class="footer_liner_image"><img src="/web/images/line2.png" alt=""></div>
<footer class="footer">
    <div class="contaner">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
