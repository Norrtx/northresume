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
use app\models\Jobhistory;
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
           $state=$request->post('state');
           $zip=$request->post('zip');
           $latitude=$request->post('latitude');
           $longitude=$request->post('longitude');
           $mail=$request->post('mail');
           $facebook=$request->post('facebook');
           $link=$request->post('web_other_value');
           $pro_img=$request->post('avatar');
          
           $status=$request->post('');
         


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
             $profilemodel->date_create = time();
           
             $profilemodel->status = $status;
             
            
             $profilemodel->save();
        } 
        
        $id = Yii::$app->user->identity->id;
        $request = Yii::$app->request;
        if ($request->isPost) {
             
            $name = $request->post('skill');
            $score=$request->post('skillvalue');
            $maxscore=$request->post('maxscore');
            $chart_type=$request->post('');
         
            $status=$request->post('');
           
            foreach ($name as $key => $skill) {
                if ($skill !=null){    

                    $skillmodel = new Skill();
                    $skillmodel->name = ($skill != null) ? $skill : null;
                    $skillmodel->score =($score[$key] != null) ?  $score[$key] : null;
                    $skillmodel->user_id = $id;
                    $skillmodel->maxscore = ($maxscore[$key] != null) ?  $maxscore[$key] : null;
                    $skillmodel->chart_type = $chart_type;
                    $skillmodel->date_create = time();
               
                    $skillmodel->status = $status;
                     $skillmodel->save();
                   
                }    
                
            }
        } 
        
       
        $id = Yii::$app->user->identity->id;
        $request = Yii::$app->request;
        if ($request->isPost) {
            
           $school_name=$request->post('name');
           $date_from=$request->post('education');
           $date_to=$request->post('educationyear');
           $gpa=$request->post('gpa');
          
        
            
           foreach ($school_name as $key => $name) {
                if($name !=null){
                   $educationmodel = new Education();
                   $educationmodel->school_name = ($name != null) ? $name : null;
                   $educationmodel->date_from =($date_from[$key] != null) ?  $date_from[$key] : null;
                   $educationmodel->date_to = ($date_to[$key] != null) ?  $date_to[$key] : null;
                   $educationmodel->gpa = ($gpa[$key] != null) ?  $gpa[$key] : null;
                   $educationmodel->user_id = $id;
                   $educationmodel->date_create = time();
                   
                 
                   $educationmodel->save();
                }   
           } 
        }  
        $id = Yii::$app->user->identity->id;
        $request = Yii::$app->request;
        if ($request->isPost) {
          
            $company_name=$request->post('company');
            $position=$request->post('position');
            $date_from=$request->post('experience');
            $date_to=$request->post('experienceyear');
            $description=$request->post('introduce');
       
            
           foreach ($company_name as $key => $company) {
                if($company !=null){
                 

                    $jobhistorymodel = new Jobhistory();
                    $jobhistorymodel->company_name = ($company != null) ? $company : null;
                    $jobhistorymodel->position =($position[$key] != null) ?  $position[$key] : null;
                    $jobhistorymodel->date_from = ($date_from[$key] != null) ?  $date_from[$key] : null;
                    $jobhistorymodel->date_to = ($date_to[$key] != null) ?  $date_to[$key] : null;
                    $jobhistorymodel->description = $description;
                    $jobhistorymodel->user_id = $id;
                    $jobhistorymodel->date_create =time();
                
                   
            
                    $jobhistorymodel->save();
                }

           }  
        }return $this->render('test2');
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
