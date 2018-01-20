<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
class UserController extends Controller
{

		public function init()
		{
			$this->enableCsrfValidation = false;
		}



	public function actionMain()
	{
		$user_name=Yii::$app->request->get('user_name');
		$password=Yii::$app->request->get('password');
		$admin = Yii::$app->db->createCommand('SELECT * FROM admin')
				->queryAll();

		if ($user_name==$admin[0]['name']&&$password==$admin[0]['password']) {
			return $this->render('main', ['user_name' => $user_name,'password'=>$password]);
		}else{
			return $this->redirect('http://basic.backend.local');
		}
		

	}
}