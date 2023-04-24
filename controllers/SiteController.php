<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Characters;
use app\models\Category;
use app\models\Music;
use app\models\Films;
use app\models\Galery;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $musics = Music::find()->limit(3)->all();
        $films = Films::find()->all();
        $characters = Characters::find()->limit(6)->all();
        return $this->render('index', [
            'characters' => $characters,
            'films' => $films,
            'musics' => $musics,
        ]);
    }
    public function actionCharacters()
    {
        $characters = Characters::find()->where(['idCategory'=>3])->all();
        $categoryis = Category::find()->all();
        return $this->render('characters', [
            'characters' => $characters,
            'categoryis' => $categoryis,
        ]);
    }

    public function actionCharacterscategory($id)
    {
        $query = Characters::find()->where(['idCategory'=>$id]);
        $characters = $query->offset($pages->offset)->limit($pages->limit)->all();
        $categoryis = Category::find()->all();
        return $this->render('characterscategory', [
            'characters' => $characters,
            'categoryis' => $categoryis,
        ]);
    }


    public function actionHero($id)
    {

        $prev = Characters::find()->andWhere(['<', 'prev_id', $characters->id])->orderBy(['prev_id' => SORT_DESC])->limit(1)->one();
        $next = Characters::find()->andWhere(['>', 'id', $characters->id])->orderBy(['id' => SORT_ASC])->limit(1)->one();
 
        $characters = Characters::findOne($id);
        return $this->render('hero', [
            'characters' => $characters,  
        ]);
    }
  
    
    public function actionMusic($id)
    {
        $films = Films::find()->all();
        $musics = Music::findOne($id);
        $players = Music::find()->where(['idFilm'=>$id])->all();
        return $this->render('music', [
            'musics' => $musics,
            'players' => $players,
            'films' => $films,
        ]);
    }
    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionVideo()
    {
        return $this->render('video');
    }

    public function actionFilms()
    {
        $films = Films::find()->all();
       
        return $this->render('films', [
            'films' => $films,
        ]);
    }



    public function actionOfilmeinfo($id)
    {
        $films = Films::findOne($id);
        $galerys = Galery::findOne($id);
        $galery = Galery::find()->where(['idGalery'=>$id])->all();
        return $this->render('ofilmeinfo', [
            'films' => $films,
            'galerys' => $galerys,
            'galery' => $galery,
        ]);
    }








    
}
