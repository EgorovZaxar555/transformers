<?php

namespace app\controllers;

use Yii;
use app\models\User;
use app\models\RegForm;
use app\models\UserSearch;
use app\models\CharactersSearch;
use app\models\Characters;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UserController implements the CRUD actions for User model.
 */
class AdminController extends Controller
{
    public function beforeAction($action){
        if(Yii::$app->user->isGuest || Yii::$app->user->identity->admin != 1){
            $this->redirect(['site/login']);
            return false;
        }
        if(!parent::beforeAction($action)){
            return false;
        }
        return true;
    }
    
    public function actionIndex()
    {
        $searchModel = new CharactersSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionCreate()
    {
        $model = new Characters();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }


    // public function actionCreate(){
    //     $model = new Characters();
    //     if($model->load(Yii::$app->request->post())){
    //         $model->imageFile = UpladedFile::getInstance($model, 'imageFile');
    //         $model->upload();
    //         $model->save();
    //         return $this->redirect(['view', 'id'=>$model->id]);
    //     }
    //     return $this->render('edit', ['model'=>$model]);

    // }
}
