<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;


/**
* 
*/
class UserController extends Controller
{

		public function init()
		{
			$this->enableCsrfValidation = false;
		}



	public function actionMain()
	{
		$user_name=Yii::$app->request->get('user_name');
		$user_age=Yii::$app->request->get('user_age');
		// $message = ["name"=>'storm','age'=>'18'];
		return $this->render('main', ['user_name' => $user_name,'user_age'=>$user_age]);

	}
}