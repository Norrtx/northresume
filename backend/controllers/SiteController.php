<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use app\models\Education;
use app\models\ Skill;
use app\models\Charttemplate;
use app\models\Jobhistorry;
use app\models\Profile;
use app\models\Themes;
use common\models\User;
/**
 * Site controller
 */
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
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index','hoho','test2'],
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
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionHoho()
    {
      //  $this->layout='from';
        return $this->render('hoho');
    }
    public function actionTest2()
    {                     
        $id = Yii::$app->user->identity->id;
        $request = Yii::$app->request;
        if ($request->isPost) {
            
           $nameTH=$request->post('fullname_th');
           $nameEN=$request->post('fullname_en');
           $gender=$request->post('sex');
           $birthday=$request->post('birth_date');
           $birthdaydate=$request->post('birth_month');
           $birthdayyear=$request->post('birth_year');
           $Age=$request->post('age');
           $city=$request->post('state');
           $state=$request->post('zip');
           $zip=$request->post('zip');
           $latitude=$request->post('zip');
           $longitude=$request->post('zip');
           $mail=$request->post('zip');
           $facebook=$request->post('zip');
           $link=$request->post('zip');
           $pro_img=$request->post('avatar');
           $date_create=$request->post('zip');
           $date_update=$request->post('zip');
           $status=$request->post('zip');
           $pro_img=$request->post('zip');
           $pro_img=$request->post('zip');
           $pro_img=$request->post('zip');


           $profilemodel = new Profile();   
            
             $profilemodel->nameTH = $nameTH;
             $profilemodel->nameEN = $nameEN;
             $profilemodel->gender = $gender;
             $profilemodel->birthday = $birthday.$birthdaydate.$birthdayyear;
             $profilemodel->Age = $Age;
             $profilemodel->city = $city;
             $profilemodel->state = $state;
             $profilemodel->zip = $zip;
             $profilemodel->latitude = $latitude;
             $profilemodel->longitude = $longitude;
             $profilemodel->mail = $mail;
             $profilemodel->facebook = $facebook;
             $profilemodel->link = $link;
             $profilemodel->user_id = $id;
             $profilemodel->pro_img = $pro_img;
             $profilemodel->date_create = $date_create;
             $profilemodel->date_update = $date_update;
             $profilemodel->status = $status;
             
            
             $profilemodel->save();
        }  
        
        $id = Yii::$app->user->identity->id;
        $request = Yii::$app->request;
        if ($request->isPost) {
            $name=$request->post('namem');
            $mail=$request->post('mail');
            $des=$request->post('description');
            $link=$request->post('link');
            $city=$request->post('city');
            $state=$request->post('state');
            $zip=$request->post('zip');
            
             $skillmodel = new Skill();
                $skillmodel->name = $name;
               $skillmodel->mail = $mail;
               $skillmodel->discription = $des;
               $skillmodel->link = $link;
               $skillmodel->user_id = $id;
               $skillmodel->state = $state;
               $skillmodel->city = $city;
               $skillmodel->zip = $zip;
            
               $skillmodel->save();
        }
        $id = Yii::$app->user->identity->id;
        $request = Yii::$app->request;
        if ($request->isPost) {
            
           $name=$request->post('namem');
           $mail=$request->post('mail');
           $des=$request->post('description');
           $link=$request->post('link');
           $city=$request->post('city');
           $state=$request->post('state');
           $zip=$request->post('zip');
            
           
           $educationmodel = new Education();
            $educationmodel->name = $name;
            $educationmodel->mail = $mail;
            $educationmodel->discription = $des;
            $educationmodel->link = $link;
            $educationmodel->user_id = $id;
            $educationmodel->state = $state;
            $educationmodel->city = $city;
            $educationmodel->zip = $zip;
            
            $educationmodel->save();
        }
        $id = Yii::$app->user->identity->id;
        $request = Yii::$app->request;
        if ($request->isPost) {
            
           $name=$request->post('namem');
           $mail=$request->post('mail');
           $des=$request->post('description');
           $link=$request->post('link');
           $city=$request->post('city');
           $state=$request->post('state');
           $zip=$request->post('zip');
            
           
           $charttemplatemodel = new Charttemplate();
            $charttemplatemodel->name = $name;
            $charttemplatemodel->mail = $mail;
            $charttemplatemodel->discription = $des;
            $charttemplatemodel->link = $link;
            $charttemplatemodel->user_id = $id;
            $charttemplatemodel->state = $state;
            $charttemplatemodel->city = $city;
            $charttemplatemodel->zip = $zip;
            
            $charttemplatemodel->save();
        }
        $id = Yii::$app->user->identity->id;
        $request = Yii::$app->request;
        if ($request->isPost) {
            
           $name=$request->post('namem');
           $mail=$request->post('mail');
           $des=$request->post('description');
           $link=$request->post('link');
           $city=$request->post('city');
           $state=$request->post('state');
           $zip=$request->post('zip');
            
           
           $jobhistorymodel = new Jobhistorry();
             $jobhistorymodel->name = $name;
             $jobhistorymodel->mail = $mail;
             $jobhistorymodel->discription = $des;
             $jobhistorymodel->link = $link;
             $jobhistorymodel->user_id = $id;
             $jobhistorymodel->state = $state;
             $jobhistorymodel->city = $city;
             $jobhistorymodel->zip = $zip;
            
             $jobhistorymodel->save();
        }
        $id = Yii::$app->user->identity->id;
        $request = Yii::$app->request;
        if ($request->isPost) {
            
           $name=$request->post('namem');
           $mail=$request->post('mail');
           $des=$request->post('description');
           $link=$request->post('link');
           $city=$request->post('city');
           $state=$request->post('state');
           $zip=$request->post('zip');
            
           
           $jobhistorymodel = new Jobhistorry();
             $jobhistorymodel->name = $name;
             $jobhistorymodel->mail = $mail;
             $jobhistorymodel->discription = $des;
             $jobhistorymodel->link = $link;
             $jobhistorymodel->user_id = $id;
             $jobhistorymodel->state = $state;
             $jobhistorymodel->city = $city;
             $jobhistorymodel->zip = $zip;
            
             $jobhistorymodel->save();
        }




       
        return $this->render('test2');
    }
    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $this->layout='mainlogin';

        $model = new LoginForm();
        
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
